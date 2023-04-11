<?php require "./connection.php"?>
<?php
    session_start();
    if($_SESSION['loggedin'] != true || !isset($_SESSION['loggedin'])){
        header("location: login.php");
        exit;
    }
    $q_id = $_GET['q_id'];
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Stack overflow</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="questions.css">
    </head>
    <style>
        .navbar{
            background-color: rgb(0, 0, 0, 0.5);
        }
    </style>
    <body>
        <?php require "./navbar.php"?>
        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                $answer = $_POST['answer'];
                $voting = 0;
                $sql = "INSERT INTO `answers` (`q_id`, `answer`, `upvote`, `downvote`) VALUES($q_id, '$answer', $voting, $voting)";
                $result = mysqli_query($conn, $sql);
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Thanks!</strong> Your answer has been posted.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
            }
        ?>
        
        <div class="mt-4">
            <div class="row mx-0">
                <?php require "./sidebar.php"?>
                <div class="col">
                    <?php
                        $sql = "Select * from questions where q_id=$q_id";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($result);
                        echo '<h2>'.$row['question'].'</h2>';
                        echo $row['username'];echo ",  asked on ";echo $row['date'];
                        echo '<hr>';
                        $sql = "Select * from answers where q_id=$q_id";
                        $result = mysqli_query($conn, $sql);
                        $num = mysqli_num_rows($result);
                        if ($num == 0) {
                            echo 'No one has answered yet be the first one to answer';
                            echo '<hr>';
                        }
                        else{
                            for ($i=0; $i < $num; $i++) { 
                                $row = mysqli_fetch_assoc($result);
                                echo $row['answer'];
                                echo '<hr>';
                            }
                        }
                    ?>
                    <form action="/webbit/Partials/answer.php?q_id='<?php echo $q_id;?>'" method="post">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Enter your answer</label>
                            <textarea class="form-control" name="answer" id="exampleFormControlTextarea1" rows="4"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <hr>
                </div>
                <?php require "./notice.php"?>
            </div>
        </div>
        
    </body>
        <script>
        </script>
</html>