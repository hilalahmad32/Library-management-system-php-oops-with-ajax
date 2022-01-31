<?php include 'header.php' ?>
<div id="layoutSidenav">
    <?php include 'sidebar.php' ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container my-5">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-sm-12 my-4">
                        <div class="card">
                            <a href="/date-report.php">
                                <div class="card-body bg-danger">
                                    <h2 class="text-center text-white">Date wise Report</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12 my-4">
                        <div class="card">
                           <a href="/month-report.php">
                           <div class="card-body bg-danger">
                                <h2 class="text-center text-white">Month wise Report</h2>
                            </div>
                           </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12 my-4">
                        <div class="card">
                            <div class="card-body bg-danger">
                                <h2 class="text-center text-white">Return Books</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php include 'footer.php' ?>