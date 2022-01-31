$(document).ready(function () {
  // authers
  const loadData = () => {
    $.ajax({
      url: "php/get-auther.php",
      type: "GET",
      success: function (data) {
        $("#auther-data").html(data);
      },
    });
  };
  loadData();
  $("#auther_save").on("click", function (e) {
    e.preventDefault();
    const name = $("#auther_name").val();
    if (name == "") {
      Swal.fire(
        "error",
        "Please Fill The Field",
        "error",
      );
    } else {
      $.ajax({
        url: "php/insert-auther.php",
        type: "POST",
        data: {
          name: name,
        },
        success: function (data) {
          if (data == 1) {
            Swal.fire(
              "Success",
              "Auther Add Successfully",
              "success",
            );
            $("#auther_form").trigger("reset");
            $("#auther").modal("hide");
            loadData();
          } else if (data == 2) {
            Swal.fire(
              "Exist",
              `${name} Already Exist`,
              "info",
            );
          } else {
            Swal.fire(
              "error",
              "Server Problem",
              "error",
            );
          }
        },
      });
    }
  });

  $(document).on("click", "#edit-auther", function () {
    const id = $(this).data("id");
    $.ajax({
      url: "php/edit-auther.php",
      type: "POST",
      data: {
        id: id,
      },
      success: function (data) {
        $("#update-auther-form").html(data);
      },
    });
  });

  $("#updateauther").on("click", function (e) {
    e.preventDefault();
    const id = $("#id").val();
    const name = $("#edit_auther_name").val();
    if (name == "") {
      Swal.fire(
        "error",
        "Please Fill The Field",
        "error",
      );
    } else {
      $.ajax({
        url: "php/update-auther.php",
        type: "POST",
        data: {
          name: name,
          id: id,
        },
        success: function (data) {
          if (data == 1) {
            Swal.fire(
              "Success",
              "Auther Update Successfully",
              "success",
            );
            $("#auther-updat-form").trigger("reset");
            $("#update").modal("hide");
            loadData();
          } else {
            Swal.fire(
              "error",
              "Server Problem",
              "error",
            );
          }
        },
      });
    }
  });

  $(document).on("click", "#delete-auther", function (e) {
    const id = $(this).data("id");

    Swal.fire({
      title: "Are you sure?",
      text: "You won't be able to revert this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, delete it!",
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          url: "php/delete-auther.php",
          type: "POST",
          data: {
            id: id,
          },
          success: function (data) {

            if (data == 1) {
              Swal.fire(
                "Deleted!",
                "Auther Delete Successfully.",
                "success",
              );
              loadData();
            } else if (data == 2) {
              Swal.fire(
                "error!",
                "Auther are used in Book.",
                "error",
              );
            } else {
              Swal.fire(
                "error!",
                "Server Problem",
                "success",
              );
            }

          },
        });
      }
    });
  });

  // categorys

  // load Category

  const loadCategory = () => {
    $.ajax({
      url: "php/select-category.php",
      type: "GET",
      success: function (data) {
        $("#category-data").html(data);
      },
    });
  };
  loadCategory();
  $("#category_save").on("click", function (e) {
    e.preventDefault();
    const category_name = $("#category_name").val();
    if (category_name == "") {
      Swal.fire(
        "error",
        "Please Fill the Field",
        "error",
      );
    } else {
      $.ajax({
        url: "php/insert-category.php",
        type: "POST",
        data: {
          category_name: category_name,
        },
        success: function (data) {
          if (data == 1) {
            Swal.fire(
              "Success",
              "Category Add Successfully",
              "success",
            );
            $("#category_form").trigger("reset");
            $("#category").modal("hide");
            loadCategory();
          } else if (data == 2) {
            Swal.fire(
              "Exist",
              `${category_name} Already Exist`,
              "info",
            );
          } else {
            "error",
              `Server Problem`,
              "error";
          }
        },
      });
    }
  });

  $(document).on("click", "#delete-category", function (e) {
    const id = $(this).data("id");

    Swal.fire({
      title: "Are you sure?",
      text: "You won't be able to revert this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, delete it!",
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          url: "php/delete-category.php",
          type: "POST",
          data: {
            id: id,
          },
          success: function (data) {
            if (data == 1) {
              Swal.fire(
                "Deleted!",
                "Category Delete Successfully.",
                "success",
              );
              loadCategory();
            } else if (data == 2) {
              Swal.fire(
                "error",
                "Category Is used in Book ?",
                "error",
              );
            } else {
              Swal.fire(
                "error",
                "Server Problem",
                "error",
              );
            }

          },
        });
      }
    });
  });

  $(document).on("click", "#edit-category", function (e) {
    const id = $(this).data("id");
    $.ajax({
      url: "php/edit-category.php",
      type: "POST",
      data: {
        id: id,
      },
      success: function (data) {
        $("#update-category-form").html(data);
      },
    });
  });

  $("#updatecategory").on("click", function (e) {
    e.preventDefault();
    const id = $("#id").val();
    const category_name = $("#edit_category_name").val();
    if (category_name == "") {
      Swal.fire(
        "error",
        "Please Fill the Field",
        "error",
      );
    } else {
      $.ajax({
        url: "php/update-category.php",
        type: "POST",
        data: {
          id: id,
          category_name: category_name,
        },
        success: function (data) {
          if (data == 1) {
            Swal.fire(
              "Success",
              "Category Update Successfully",
              "success",
            );
            $("#category-update-form").trigger("reset");
            $("#update-category").modal("hide");
            loadCategory();
          } else {
            "error",
              `Server Problem`,
              "error";
          }
        },
      });
    }
  });

  // publisher

  // load publisher
  const loadPublisher = () => {
    $.ajax({
      url: "php/select-publisher.php",
      type: "GET",
      success: function (data) {
        $("#publisher-data").html(data);
      },
    });
  };
  loadPublisher();
  $("#publisher_save").on("click", function (e) {
    e.preventDefault();

    const publisher_name = $("#publisher_name").val();
    if (publisher_name == "") {
      Swal.fire(
        "error",
        "Please Fill The Field",
        "error",
      );
    } else {
      $.ajax({
        url: "php/insert-publisher.php",
        type: "POST",
        data: {
          publisher_name: publisher_name,
        },
        success: function (data) {
          ;
          if (data == 1) {
            Swal.fire(
              "Success",
              "Publisher Add Successfully",
              "success",
            );
            $("#publisher").modal("hide");
            $("#publisher_form").trigger("reset");
            loadPublisher();
          } else if (data == 2) {
            Swal.fire(
              "info",
              `${publisher_name} already Exist`,
              "info",
            );
          } else {
            Swal.fire(
              "error",
              "Server Problem",
              "error",
            );
          }
        },
      });
    }
  });

  $(document).on("click", "#edit-publisher", function () {
    const id = $(this).data("id");
    $.ajax({
      url: "php/edit-publisher.php",
      type: "POST",
      data: {
        id: id,
      },
      success: function (data) {
        $("#update-publisher-form").html(data);
      },
    });
  });

  $("#publisherupdate").on("click", function (e) {
    e.preventDefault();

    const id = $("#id").val();
    const publisher_name = $("#edit_publisher_name").val();
    if (publisher_name == "") {
      Swal.fire(
        "error",
        "Please Fill The Field",
        "error",
      );
    } else {
      $.ajax({
        url: "php/update-publisher.php",
        type: "POST",
        data: {
          id: id,
          publisher_name: publisher_name,
        },
        success: function (data) {
          if (data == 1) {
            Swal.fire(
              "Success",
              "Publisher Add Successfully",
              "success",
            );
            $("#update-publisher").modal("hide");
            $("#publisher-update-form").trigger("reset");
            loadPublisher();
          } else {
            Swal.fire(
              "error",
              "Server Problem",
              "error",
            );
          }
        },
      });
    }
  });

  $(document).on("click", "#delete-publisher", function () {
    const id = $(this).data("id");
    Swal.fire({
      title: "Are you sure?",
      text: "You won't be able to revert this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, delete it!",
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          url: "php/delete-publisher.php",
          type: "POST",
          data: {
            id: id,
          },
          success: function (data) {
            if (data == 1) {
              Swal.fire(
                "Deleted!",
                "Publisher Delete Successfully.",
                "success",
              );
              loadPublisher();
            } else if (data == 2) {
              Swal.fire(
                "error",
                "Publisher Is used in Book ?",
                "error",
              );
            } else {
              Swal.fire(
                "error",
                "Server Problem",
                "error",
              );
            }

          },
        });
      }
    });
  });

  // book

  const loadBook = () => {
    $.ajax({
      url: "php/select-book.php",
      type: "GET",
      success: function (data) {
        $("#get-book").html(data);
      },
    });
  };
  loadBook();
  $("#book_save").on("click", function (e) {
    e.preventDefault();
    const book_name = $("#book_name").val();
    const book_category = $("#book_category").val();
    const book_auther = $("#book_auther").val();
    const book_publisher = $("#book_publisher").val();
    if (
      book_name == "" || book_category == "" || book_auther == "" ||
      book_publisher == ""
    ) {
      Swal.fire(
        "error",
        "Please Fill the Field",
        "error",
      );
    } else {
      $.ajax({
        url: "php/insert-book.php",
        type: "POST",
        data: {
          book_name: book_name,
          book_category: book_category,
          book_auther: book_auther,
          book_publisher: book_publisher,
        },
        success: function (data) {

          if (data == 1) {
            Swal.fire(
              "success",
              "Book Add Successfully",
              "success",
            );
            $("#book_form").trigger("reset");
            $("#book").modal("hide");
            loadBook();
          } else {
            Swal.fire(
              "error",
              "Server Problem",
              "error",
            );
          }
        },
      });
    }
  });
  $(document).on("click", "#edit-book", function () {
    const id = $(this).data('id');
    $.ajax({
      url: 'php/edit-book.php',
      type: "POST",
      data: {
        id: id
      },
      success: function (data) {
        $('#update-book-form').html(data);
      }
    })
  })

  $(document).on("click", "#delete-book", function () {
    const id = $(this).data("id");
    Swal.fire({
      title: "Are you sure?",
      text: "You won't be able to revert this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, delete it!",
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          url: "php/delete-book.php",
          type: "POST",
          data: {
            id: id,
          },
          success: function (data) {
            ;
            Swal.fire(
              "Deleted!",
              "Book Delete Successfully.",
              "success",
            );
            loadBook();
          },
        });
      }
    });
  });
  $("#bookupdate").on("click", function (e) {
    e.preventDefault();
    const id = $("#id").val();
    const book_name = $("#edit_book_name").val();
    const book_category = $("#edit_book_category").val();
    const book_auther = $("#edit_book_auther").val();
    const book_publisher = $("#edit_book_publisher").val();
    if (
      book == "" || book_category == "" || book_auther == "" ||
      book_publisher == ""
    ) {
      Swal.fire(
        "error",
        "Please Fill the Field",
        "error",
      );
    } else {
      $.ajax({
        url: "php/update-book.php",
        type: "POST",
        data: {
          id: id,
          book_name: book_name,
          book_category: book_category,
          book_auther: book_auther,
          book_publisher: book_publisher,
        },
        success: function (data) {
          if (data == 1) {
            Swal.fire(
              "success",
              "Book Update Successfully",
              "success",
            );
            $("#book-update-form").trigger("reset");
            $("#update-book").modal("hide");
            loadBook();
          } else {
            Swal.fire(
              "error",
              "Server Problem",
              "error",
            );
          }
        },
      });
    }
  });

  // students

  const loadStudent = () => {
    $.ajax({
      url: "php/select-student.php",
      type: "POST",
      success: function (data) {
        $("#student-data").html(data);
      }
    })
  }
  loadStudent();
  $("#student_save").on("click", function (e) {
    e.preventDefault();
    const name = $("#student_name").val();
    const classes = $("#classes").val();
    const email = $("#email").val();
    const address = $("#address").val();
    const gender = $("#gender").val();
    const phone = $("#phone").val();
    const age = $("#age").val();
    if (
      name == "" || classes == "" || email == "" || address == "" || gender == "" || phone == "" || age == ""
    ) {
      Swal.fire(
        "error",
        "Please Fill the Field",
        "error",
      );
    } else {
      $.ajax({
        url: "php/insert-student.php",
        type: "POST",
        data: {
          name: name,
          age: age,
          classes: classes,
          email: email,
          gender: gender,
          phone: phone,
          address: address,
        },
        success: function (data) {
          if (data == 1) {
            Swal.fire(
              "success",
              "Book Add Successfully",
              "success",
            );
            $("#student_form").trigger("reset");
            $("#student").modal("hide");
            loadStudent();
          } else {
            Swal.fire(
              "error",
              "Server Problem",
              "error",
            );
          }
        },
      });
    }
  });
  $(document).on('click', '#edit-student', function () {
    const id = $(this).data("id");
    $.ajax({
      url: 'php/edit-student.php',
      type: "POST",
      data: {
        id: id
      },
      success: (data) => {
        $("#update-student-form").html(data);
      }
    })
  })
  $("#updatestudent").on("click", function (e) {
    e.preventDefault();
    const id = $("#id").val();
    const name = $("#edit_student_name").val();
    const classes = $("#edit_classes").val();
    const email = $("#edit_email").val();
    const address = $("#edit_address").val();
    const gender = $("#edit_gender").val();
    const phone = $("#edit_phone").val();
    const age = $("#edit_age").val();
    if (
      name == "" || classes == "" || email == "" || address == "" || gender == "" || phone == "" || age == ""
    ) {
      Swal.fire(
        "error",
        "Please Fill the Field",
        "error",
      );
    } else {
      $.ajax({
        url: "php/update-student.php",
        type: "POST",
        data: {
          id: id,
          name: name,
          age: age,
          classes: classes,
          email: email,
          gender: gender,
          phone: phone,
          address: address,
        },
        success: function (data) {
          if (data == 1) {
            Swal.fire(
              "success",
              "Book Update Successfully",
              "success",
            );
            $("#student-update-form").trigger("reset");
            $("#update-student").modal("hide");
            loadStudent();
          } else {
            Swal.fire(
              "error",
              "Server Problem",
              "error",
            );
          }
        },
      });
    }
  });

  $(document).on('click', '#delete-student', function () {
    const id = $(this).data("id");
    Swal.fire({
      title: "Are you sure?",
      text: "You won't be able to revert this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, delete it!",
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          url: "php/delete-student.php",
          type: "POST",
          data: {
            id: id,
          },
          success: function (data) {
            Swal.fire(
              "Deleted!",
              "Student Delete Successfully.",
              "success",
            );
            loadStudent();
          },
        });
      }
    });
  })

  // setting

  const loadSetting = () => {
    $.ajax({
      url: "php/select-setting.php",
      type: "GET",
      success: function (data) {
        $("#setting-data").html(data);
      }
    })
  }
  loadSetting();


  $("#updateSetting").on('click', function (e) {
    e.preventDefault();

    const return_days = $("#return_days").val();
    const fine = $("#fine").val();
    const id = $("#id").val();

    if (fine == "" || return_days == "") {
      Swal.fire(
        "error",
        "Please Fill The Field",
        "error",
      );
    } else {
      $.ajax({
        url: "php/update-setting.php",
        type: "POST",
        data: {
          return_days: return_days,
          fine: fine,
          id: id
        },
        success: function (data) {
          if (data == 1) {
            Swal.fire(
              "success",
              "Fine and Return Date Update Successfully",
              "success",
            );
            loadSetting();
          } else {
            Swal.fire(
              "error",
              "Server Problem",
              "error",
            );
          }
        }
      })
    }
  })


  // book issue

  const loadIssueBook = () => {
    $.ajax({
      url: "php/select-issue-book.php",
      type: "GET",
      success: function (data) {
        $("#issue-book-data").html(data);
      }
    })
  }
  loadIssueBook();

  $("#iss_book_save").on('click', function (e) {
    e.preventDefault();
    const book = $("#book").val();
    const student = $("#student").val();
    if (book == "" || student == "") {
      Swal.fire(
        "error",
        "Please Fill The Field",
        "error",
      );
    } else {
      $.ajax({
        url: "php/insert-issue-book.php",
        type: "POST",
        data: {
          student: student,
          book: book,
        },
        success: function (data) {
          if (data == 1) {
            Swal.fire(
              "success",
              "Book Issue Successfully",
              "success",
            );
            $("#issue-book-form").trigger("reset");
            $("#issue_book").modal("hide");
            loadIssueBook();
          } else {
            Swal.fire(
              "error",
              "Server Problem",
              "error",
            );
          }
        }
      })
    }
  })
  $(document).on('click', '#edit-issue-book', function () {
    const id = $(this).data("id");
    $.ajax({
      url: "php/edit-issue-book.php",
      type: "POST",
      data: {
        id: id,
      },
      success: function (data) {
        $("#return-book").html(data);
      },
    });
  })
  $(document).on("click", "#updateReturnBook", function (e) {
    e.preventDefault();
    const id = $("#id").val();
    const book_id = $("#book_id").val();
    if (id == "") {
      Swal.fire(
        "error",
        "Id is Required",
        "error",
      );
    } else {
      $.ajax({
        url: "php/update-issue-book.php",
        type: "POST",
        data: { id: id, book_id: book_id },
        success: function (data) {
          if (data == 1) {
            Swal.fire(
              "success",
              "Book Return Successfully",
              "success",
            );
            $("#update-issue-book").modal('hide');
            loadIssueBook();
          } else {
            Swal.fire(
              "error",
              "Server Problem",
              "error",
            );
          }
        }
      })
    }
  })
  $(document).on('click', '#delete-issue-book', function () {
    const id = $(this).data("id");
    Swal.fire({
      title: "Are you sure?",
      text: "You won't be able to revert this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, delete it!",
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          url: "php/delete-issue-book.php",
          type: "POST",
          data: {
            id: id,
          },
          success: function (data) {
            Swal.fire(
              "Deleted!",
              "Issue Book Delete Successfully.",
              "success",
            );
            loadIssueBook();
          },
        });
      }
    });
  });

  // get result date wise

  const getDateReport = (date) => {
    $.ajax({
      url: "php/get-date-reports.php",
      type: "POST",
      data: { date: date },
      success: (data) => {
        $("#get-date-data").html(data);
      }
    })
  }
  $("#showDateReport").on("click", function (e) {
    e.preventDefault();
    const date = $("#date").val();
    getDateReport(date);
  })
  $("#generatedPdf").on("click", function (e) {
    e.preventDefault();
    const date = $("#date").val();
    $.ajax({
      url: "php/generate-date-wise-pdf.php",
      type: "POST",
      data: { date: date },
      success: (data) => {
        Swal.fire(
          "success",
          "Report Download Successfully",
          "success",
        );
      }
    })
  })


  // month wise report

  
  $("#showMonthReport").on("click", function (e) {
    e.preventDefault();
    const month = $("#month").val();
    $.ajax({
      url: "php/get-month-reports.php",
      type: "POST",
      data: { month: month },
      success: (data) => {
        $("#get-month-data").html(data);
      }
    });
  })
  $("#generateMonthReportPDF").on("click", function (e) {
    e.preventDefault();
    const month = $("#month").val();
    $.ajax({
      url: "php/get-month-reports-pdf.php",
      type: "POST",
      data: { month: month },
      success: (data) => {
        Swal.fire(
          "success",
          "Report Download Successfully",
          "success",
        );
      }
    });
  })
  $("#forget_password").on("click",function (e){
    e.preventDefault();

    const old_password=$("#old_password").val();
    const new_password=$("#new_password").val();

    if(new_password == "" || old_password == "" ){
      Swal.fire(
        "error",
        "Please Fill The Field",
        "error",
      );
    }else{
      $.ajax({
        url:"php/forget-password.php",
        type:"POST",
        data:{
          old_password: old_password,
          new_password: new_password,
        },
        success:(data)=>{
          console.log(data);
          if(data == 1){
            Swal.fire(
              "success",
              "Password Change Successfully",
              "success",
            );
          }else{
            Swal.fire(
              "error",
              "invalid password you enter",
              "error",
            );
          }
        }
      })
    }
  })
});