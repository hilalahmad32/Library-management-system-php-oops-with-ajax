
<?php 
   session_start();
   if(isset($_SESSION['user_id'])){
       header('Location:main.php');
   }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Admin Login | vLibrary</title>
</head>

<body style="background-color:magenta;">
    <div class="container mt-5">
        <div class="row">
            <div class="col-xl-6 col-md-8 col-sm-12 offset-xl-3 offset-md-2 offset-sm-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h1>Admin Login</h1>
                    </div>
                    <div class="card-body">
                    <form action="" id="category_form">
                    <div class="form-group">
                        <label for="">Enter the Username</label>
                        <input type="text" name="username" id="username" class="form-control form-contorl-lg">
                    </div>
                    <div class="form-group">
                        <label for="">Enter the Password</label>
                        <input type="password" name="password" id="password" class="form-control form-contorl-lg">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-danger" id='login'>Save</button>
                    </div>
                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/login.js"></script>
    <script src="js/sweetalert2.all.min.js"></script>
</body>

</html>