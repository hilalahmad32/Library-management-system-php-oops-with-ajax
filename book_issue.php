<?php include 'header.php';
include 'php/Database.php';
$obj = new Database();

?>
<div id="layoutSidenav">
    <?php include 'sidebar.php' ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container">
                <div class="card my-5">
                    <div class="card-header ">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6>issue book ( 10 )</h6>
                            <button class="btn btn-danger" data-toggle="modal" data-target="#issue_book">Add Issue Book</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Student Name</th>
                                        <th>Book Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Issue_Date</th>
                                        <th>Return_Date</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody id="issue-book-data"></tbody>
                            </table>

                        </div>
                    </div>
                </div>
        </main>

    </div>
</div>
<!-- add Category -->
<div class="modal fade" id="issue_book">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h6 class="modal-title">Add Issue Book</h6>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="" id="issue-book-form">
                    <div class="form-group">
                        <label for="">Enter the Book Name</label>
                        <select name="book" id="book" class="form-control form-control-lg" required>
                            <option disabled selected>Please Select Book</option>
                            <?php
                            $obj->select('books', 'id,book_name', null,null, 'id DESC', null);
                            $books = $obj->getResult();
                            foreach ($books as $book) {
                            ?>
                                <option value="<?php echo $book['id'] ?>"><?php echo $book['book_name'] ?></option>
                            <?php
                            }
                            ?>
                        </select>

                    </div>
                    <div class="form-group">
                        <label for="">Enter the Student Name</label>
                        <select name="student" id="student" class="form-control form-control-lg" required>
                            <option disabled selected>Please Select Student</option>
                            <?php
                            $obj->select('students', 'id,student_name', null,null, 'id DESC', null);
                            $students = $obj->getResult();
                            foreach ($students as $student) {
                            ?>
                                <option value="<?php echo $student['id'] ?>"><?php echo $student['student_name'] ?></option>
                            <?php
                            }
                            ?>
                        </select>

                    </div>
                    <div class="form-group">
                        <button class="btn btn-danger" id='iss_book_save'>Save</button>
                    </div>
                </form>
            </div>

        </div>
    </div>


</div>
<!-- edit Category -->
<div class="modal fade" id="update-issue-book">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Return Book</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div id="return-book"></div>
                    <div class="d-flex justify-content-between align-items-center">
                       
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<?php include 'footer.php' ?>