<?php include 'header.php';
include 'php/Database.php';
$obj = new Database();
?>
<div id="layoutSidenav">
    <?php include 'sidebar.php' ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container my-5">
                <div class="row">
                    <div class="col-xl-6 col-md-8 col-sm-12 offset-xl-3 offset-md-2 offset-sm-12">
                        <form action="">
                           <div id="setting-data"></div>
                                <div class="form-group">
                                    <button class="btn btn-danger" id='updateSetting'>Save</button>
                                </div>

                        </form>
                    </div>
                </div>
            </div>
        </main>
        <?php include 'footer.php' ?>