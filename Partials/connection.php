<?php
    // connecting to a database this are default
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "webbit";
    // create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // creating a database
    // $cr_db = "CREATE DATABASE login_data";
    // this will return true and false if database is created
    // mysqli_query($conn, $cr_db);
        
    // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //     $email = $_POST['username'];
    //     $password = $_POST['password'];
    //     echo '<div class="alert alert-success  alert-dismissible fade show" role="alert">
    //         <strong>Holy guacamole!</strong> You should check in on some of those fields below.
    //         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    //     </div>';
    //     $sql = "INSERT INTO `log_details` (`email`, `password`, `type`) VALUES ('$email', '$password', 'user')";
    //     mysqli_query($conn, $sql);
    // }
?>