<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Stack overflow | Sign up</title>
        <link rel="stylesheet" href="signup.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php require "Partials/navbar.php"?>
        <?php require "Partials/connection.php"?>
        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $email = $_POST['username'];
                $password = $_POST['password'];
                $cpassword = $_POST['cpassword'];
                if ($password == $cpassword) {    
                    $search = "Select * from log_details where email = '$email'";
                    $result = mysqli_query($conn, $search);
                    $num = mysqli_num_rows($result);
                    if ($num != 0) {
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Sorry!</strong> User already exists try another username.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                    }
                    else {
                        $hash = password_hash("$password", PASSWORD_DEFAULT);
                        $sql = "INSERT INTO `log_details` (`email`, `password`, `type`) VALUES ('$email', '$hash', 'manager')";
                        mysqli_query($conn, $sql);
                        header("location: ./login.php");
                    }
                }
                else{
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    confirm password does not match password.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                }
            }
        ?>
        <div class="container">
            <form class = "position-absolute top-50 start-50 translate-middle header" action = "/webbit/signup.php" method = "post">
                <h2 class="text-center">Sign up</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="username" class="form-control" id="usernme" name = "username" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name = "password" id="password">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" name = "cpassword" id="cpassword">
                </div>
                <div class = "d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </body>
</html>