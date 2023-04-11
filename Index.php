<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Stack overflow | Login</title>
        <!-- <link rel="stylesheet" href="./signup.css"> -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </head>
    <style>
        body{
            width: 100%;
            height : 100%;
            background-image: url('/webbit/Partials/pexels-david-bartus-963278.jpg');
            background-size: cover;
        }
        .header{
            background-color: rgb(0, 0, 0, 0.5);
            width : 400px;
            height : 300px;
            position : absolute;
            top : 50%;
            left : 50%;
            transform: translate(-50%, -50%);
            border : 2px solid white;
        }
        form.header{
            padding : 20px;
        }
        .navbar{
            background-color: rgb(0, 0, 0, 0.5);
        }
        .form-control{
            background-color: rgb(0, 0, 0, 0.5);
        }
        :root{
            --bs-body-bg : rgb(0, 0, 0, 0.5);

        }
    </style>
    <body>
        <?php require "Partials/navbar.php"?>
        <?php require "Partials/connection.php"?>
        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $email = $_POST['username'];
                $password = $_POST['password'];
                $sql = "Select * from log_details where email = '$email'";
                $result = mysqli_query($conn, $sql);
                $num = mysqli_num_rows($result);
                if ($num == 1) {
                    $row = mysqli_fetch_assoc($result);
                    if (password_verify($password, $row['password'])) {
                        session_start();
                        $_SESSION['login'] = true;
                        $_SESSION['loggedin'] = true;
                        $_SESSION['email'] = $email;
                        header("location: welcome.php");
                    }
                    else{
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Sorry!</strong> Wrong username and password combination.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                    }
                }
                else{
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Sorry!</strong> No such user exits.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                }
            }
        ?>
        <div class="container">
            <!-- <div class="image position-absolute top-50 start-50 translate-middle"></div> -->
            <form class = "header" action = "/webbit/login.php" method = "post">
                <h2 class="text-center text-danger"><strong>Login</strong></h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label text-white fs-5">Email address</label>
                    <input type="username" class="form-control text-white" id="usernme" name = "username" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label text-white fs-5">Password</label>
                    <input type="password" class="form-control text-white" name = "password" id="password">
                </div>
                <div class = "d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </body>
</html>