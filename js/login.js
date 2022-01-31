$(document).ready(function () {
    $("#login").on("click", function (e) {
        e.preventDefault();


        const username = $("#username").val()
        const password = $("#password").val()

        if (username == "" || password == "") {
            Swal.fire(
                "error",
                "Please Fill the Field",
                "error",
              );
        } else {
            $.ajax({
                url: "php/login.php",
                type: "POST",
                data: { username: username, password: password },
                success: (data) => {
                    console.log(data);
                    if (data == 1) {
                        Swal.fire(
                            "success",
                            "Login Successfully",
                            "success",
                        );
                        window.location.href = '../main.php'
                    } else {
                        Swal.fire(
                            "error",
                            "Invalid Username and Password",
                            "error",
                        );
                    }
                }
            })
        }
    })
})