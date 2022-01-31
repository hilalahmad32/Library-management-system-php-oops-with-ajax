<?php include 'header.php' ?>
<div id="layoutSidenav">
    <?php include 'sidebar.php' ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-xl-6 col-md-8 col-sm-12 offset-xl-3 offset-md-2 offset-sm-12">
                        <div class="card mt-5">
                            <div class="card-header">
                                <h1>Change Password</h1>
                            </div>
                            <div class="card-body">
                                <form action="" id="forget-password">
                                    <div class="form-group">
                                        <label for="">Enter the Old Password</label>
                                        <input type="password" name="old_password" id="old_password" class="form-control form-contorl-lg">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Enter the New Password</label>
                                        <input type="password" name="new_password" id="new_password" class="form-control form-contorl-lg">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-danger" id='forget_password'>Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php include 'footer.php' ?>