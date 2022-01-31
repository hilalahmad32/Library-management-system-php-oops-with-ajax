<?php include 'header.php' ?>
<div id="layoutSidenav">
    <?php include 'sidebar.php' ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container">
                <div class="card my-5">
                    <div class="card-header ">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4>Publisher ( 10 )</h4>
                            <button class="btn btn-danger" data-toggle="modal" data-target="#publisher">Add Publisher</button>
                        </div>
                    </div>
                    <div class="card-body">
                       
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td>Id</td>
                                        <td>Publisher Name</td>
                                        <td>Edit</td>
                                        <td>Delete</td>
                                    </tr>
                                </thead>
                                <tbody id="publisher-data"></tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

            <!-- add Auther -->
            <div class="modal fade" id="publisher">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Add Publisher</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <form action="" id="publisher_form">
                                <div class="form-group">
                                    <label for="">Enter the Publisher Name</label>
                                    <input type="text" name="publisher_name" id="publisher_name" class="form-control form-contorl-lg">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-danger" id='publisher_save'>Save</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <!-- edit Auther -->
            <div class="modal fade" id="update-publisher">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Update Auther</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form action="" id="publisher-update-form">
                                <div id="update-publisher-form"></div>
                                <div class="form-group">
                                    <button id="publisherupdate" class="btn btn-danger">Update</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </main>
        <?php include 'footer.php' ?>