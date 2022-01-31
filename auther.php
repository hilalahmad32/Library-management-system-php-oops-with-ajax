<?php include 'header.php' ?>
<div id="layoutSidenav">
    <?php include 'sidebar.php' ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container">
                <div class="card my-5">
                    <div class="card-header ">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4>Auther ( 10 )</h4>
                            <button class="btn btn-danger" data-toggle="modal" data-target="#auther">Add Auther</button>
                        </div>
                    </div>
                    <div class="card-body">
                       
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td>Id</td>
                                        <td>Auther Name</td>
                                        <td>Edit</td>
                                        <td>Delete</td>
                                    </tr>
                                </thead>
                                <tbody id="auther-data">
                                    
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

            <!-- add Auther -->
            <div class="modal fade" id="auther">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Add Auther</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <form action="" id="auther_form">
                                <div class="form-group">
                                    <label for="">Enter the Auther Name</label>
                                    <input type="text" name="auther_name" id="auther_name" class="form-control form-contorl-lg">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-danger" id='auther_save'>Save</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <!-- edit Auther -->
            <div class="modal fade" id="update">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Update Auther</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form action="" id="auther-update-form">
                                <div id="update-auther-form"></div>
                                <div class="form-group">
                                    <button id="updateauther" class="btn btn-danger">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php include 'footer.php' ?>