<?php include 'header.php' ?>
<div id="layoutSidenav">
    <?php include 'sidebar.php' ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container">
                <div class="card my-5">
                    <div class="card-header ">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4>Category ( 10 )</h4>
                            <button class="btn btn-danger" data-toggle="modal" data-target="#category">Add Category</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Auther Name</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody id="category-data"></tbody>
                            </table>

                        </div>
                    </div>
                </div>
        </main>

    </div>
</div>
<!-- add Category -->
<div class="modal fade" id="category">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Category</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="" id="category_form">
                    <div class="form-group">
                        <label for="">Enter the Auther Name</label>
                        <input type="text" name="category_name" id="category_name" class="form-control form-contorl-lg">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-danger" id='category_save'>Save</button>
                    </div>
                </form>
            </div>

        </div>
    </div>


</div>
<!-- edit Category -->
<div class="modal fade" id="update-category">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Update Category</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="" id="category-update-form">
                    <div id="update-category-form"></div>
                    <div class="form-group">
                        <button id="updatecategory" class="btn btn-danger">Update</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<?php include 'footer.php' ?>