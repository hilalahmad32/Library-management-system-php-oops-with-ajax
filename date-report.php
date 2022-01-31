<?php include 'header.php' ?>
<div id="layoutSidenav">
    <?php include 'sidebar.php' ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container my-5">
                <div class="row">
                    <div class="col-xl-6 col-md-6 col-sm-12 offset-xl-2 offset-md-2 offset-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="">
                                    <div class="form-group">
                                        <input type="date" class="form-control" name="date" id="date" value="<?php echo date('Y-m-d'); ?>">
                                    </div>
                                    <div class="form-group">
                                        <button id="showDateReport" class="btn btn-danger">
                                            Search
                                        </button>
                                        <button id="generatedPdf" class="btn btn-danger">
                                            PDF
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-4">
                    <div class="table-responsive">
                      <div id="get-date-data"></div>
                    </div>
                </div>
            </div>
        </main>

        <?php include 'footer.php' ?>