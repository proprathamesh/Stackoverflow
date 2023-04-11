<?php
    session_start();
    if($_SESSION['loggedin'] != true || !isset($_SESSION['loggedin'])){
        header("location: ../login.php");
        exit;
    }
    ?>
    <?php require "./connection.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Ask Question</title>
</head>
<body>
    <?php require "./navbar.php"?> 
    <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $email = $_SESSION['email'];
                $topic = $_POST['topic'];
                $ques = $_POST['input'];
                $entrydate = date('Y-m-d');
                echo gettype($entrydate);
                $sql = "INSERT INTO questions (`username`, `question`, `description`, `date`) VALUES ('$email', '$topic', '$ques', '$entrydate')";
                $result = mysqli_query($conn, $sql);
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Thanks!</strong> Your question is forwarded
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
            }
        ?>  
            <form class = "container mt-5" action = "/webbit/Partials/addQues.php" method = "post">
                <h2 class="text-center">Ask your Question</h2>
                <div class="mb-3 w-col-6">
                    <label for="exampleInputEmail1" class="form-label">Write your query in short</label>
                    <input type="text" class="form-control" placeholder = "eg. python, c++" id="usernme" name = "topic" aria-describedby="emailHelp">
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" name = "input" placeholder="Leave a Question here" id="floatingTextarea2" style="height: 100px; width:100%"></textarea>
                    <label for="floatingTextarea2">Write question description here.</label>
                </div>
                <!-- <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" name = "cpassword" id="cpassword">
                </div> -->
                <div class = "d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
</body>
</html>