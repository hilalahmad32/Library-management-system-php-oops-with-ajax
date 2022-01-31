<?php include 'header.php' ?>
<div id="layoutSidenav">
    <?php include 'sidebar.php' ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container">
                <div class="card my-5">
                    <div class="card-header ">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4>Students ( 10 )</h4>
                            <button class="btn btn-danger" data-toggle="modal" data-target="#student">Add Students</button>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td>Id</td>
                                        <td>Student Name</td>
                                        <td>Email</td>
                                        <td>Class</td>
                                        <td>Gender</td>
                                        <td>Age</td>
                                        <td>Phone</td>
                                        <td>Address</td>
                                        <td>Edit</td>
                                        <td>Delete</td>
                                    </tr>
                                </thead>
                                <tbody id="student-data">

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

            <!-- add Auther -->
            <div class="modal fade" id="student">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Add Student</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <form action="" id="student_form">
                                <div class="form-group">
                                    <label for="">Enter the Student Name</label>
                                    <input type="text" name="student_name" id="student_name" class="form-control ">
                                </div>

                                <div class="form-group">
                                    <label for="">Enter the Address Name</label>
                                    <input type="text" name="address" id="address" class="form-control ">
                                </div>
                                <div class="form-group">
                                    <label for="">Enter the Class Name</label>
                                    <input type="text" name="classes" id="classes" class="form-control ">
                                </div>
                                <div class="form-group">
                                    <label for="">Enter the Phone Name</label>
                                    <input type="number" name="phone" id="phone" class="form-control ">
                                </div>
                                <div class="form-group">
                                    <label for="">Enter the Age Name</label>
                                    <input type="number" name="age" id="age" class="form-control ">
                                </div>
                                <div class="form-group">
                                    <label for="">Enter the Gender Name</label>
                                    <select name="gender" id="gender" class="form-control">
                                        <option value="1">Male</option>
                                        <option value="0">Female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Enter the Email Name</label>
                                    <input type="email" name="email" id="email" class="form-control ">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-danger" id='student_save'>Save</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <!-- edit Auther -->
            <div class="modal fade" id="update-student">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Update Auther</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form action="" id="student-update-form">
                                <div id="update-student-form"></div>
                                <div class="form-group">
                                    <button id="updatestudent" class="btn btn-danger">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php include 'footer.php' ?>