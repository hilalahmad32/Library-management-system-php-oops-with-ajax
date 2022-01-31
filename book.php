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
                            <h4>Books ( 10 )</h4>
                            <button class="btn btn-danger" data-toggle="modal" data-target="#book">Add Book</button>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Book Name</th>
                                        <th>Publisher Name</th>
                                        <th>Category Name</th>
                                        <th>Auther Name</th>
                                        <th>Book Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody id="get-book"></tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

            <!-- add Auther -->
            <div class="modal fade" id="book">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Add Book</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <form action="" id="book_form">
                                <div class="form-group">
                                    <label for="">Enter the Book Name</label>
                                    <input type="text" name="book_name" id="book_name" class="form-control form-contorl-lg">
                                </div>
                                <div class="form-group">
                                    <label for="">Enter the Book Category</label>
                                    <?php
                                    $obj->select('categorys', '*', null, null, 'id DESC',null);
                                    $categorys = $obj->getResult();
                                    ?>
                                    <select name="book_category" class="form-control " id="book_category">
                                        <option value="" disabled selected>Select Category</option>
                                        <?php
                                        foreach ($categorys as $category) {
                                        ?>
                                            <option value="<?php echo $category['id'] ?>"><?php echo $category['category_name'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Enter the Book Publisher</label>
                                    <?php
                                    $obj->select('publishers', '*', null, null, 'id DESC',null);
                                    $publishers = $obj->getResult();
                                    ?>
                                    <select name="book_publisher" class="form-control " id="book_publisher">
                                        <option value="" disabled selected>Select Publisher</option>
                                        <?php
                                        foreach ($publishers as $publisher) {
                                        ?>
                                            <option value="<?php echo $publisher['id'] ?>"><?php echo $publisher['publisher_name'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Enter the Book Author</label>
                                    <?php
                                    $obj->select('authers', '*', null, null, 'id DESC',null);
                                    $authers = $obj->getResult();
                                    ?>
                                    <select name="book_auther" class="form-control " id="book_auther">
                                        <option value="" disabled selected>Select Author</option>
                                        <?php
                                        foreach ($authers as $auther) {
                                        ?>
                                            <option value="<?php echo $auther['id'] ?>"><?php echo $auther['auther_name'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-danger" id='book_save'>Save</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <!-- edit Auther -->
            <div class="modal fade" id="update-book">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Update Book</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form action="" id="book-update-form">
                                <div id="update-book-form"></div>
                                <div class="form-group">
                                    <button id="bookupdate" class="btn btn-danger">Update</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </main>
        <?php include 'footer.php' ?>