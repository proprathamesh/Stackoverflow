<?php require "./connection.php"?>
<?php
    session_start();
    if($_SESSION['loggedin'] != true || !isset($_SESSION['loggedin'])){
        header("location: login.php");
        exit;
    }
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
        <!-- <a href=""></a> -->
        <?php require "./navbar.php"?>
        <div class="mt-4">
            <div class="row mx-0">
                <?php require "./sidebar.php"?>
                <div class="col">
                    <h2>All Questions</h2>
                    <hr>
                    <?php
                        $sql = "Select * from questions";
                        $result = mysqli_query($conn, $sql);
                        $num = mysqli_num_rows($result);
                        for ($i=0; $i < $num; $i++) {
                            $row = mysqli_fetch_assoc($result);
                            $user = $row['username'];
                            echo '<div class = "mt-5">';
                                echo '<figure class="text-centermb-0">';
                                    echo '<figcaption class="blockquote-footer mb-0 text-body-tertiary fs-7">';
                                        echo $row['username'];echo ",  asked on ";echo $row['date'];
                                    echo '</figcaption>';
                                    echo '<blockquote class="blockquote my-2 fs-5 text-danger">';
                                        echo '<a class="nav-link" href="./answer.php?q_id=';echo $row['q_id'];echo '">';echo $row["question"]; echo '</a>';
                                    echo '</blockquote>';
                                    echo '<p>';
                                        echo $row['description'];
                                    echo '</p>';
                                echo '</figure>';
                            echo '</div>';
                            echo '<hr>';
                        }
                    ?>
                </div>
                <?php require "./notice.php"?>
            </div>
        </div>
        
    </body>
        <!-- <script>
            
        </script> -->
</html>