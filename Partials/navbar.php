<?php
    // session_start();
    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false) {
        $login = false;
    }
    else{
        $login = true;
    }
    echo
    '<nav class="navbar navbar-expand-lg bg-black border-bottom border-4 border-warning" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/webbit/login.php"><strong>Stack overflow</strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/webbit/welcome.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/webbit/Partials/addQues.php">Ask Question</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/webbit/Partials/Questions.php">Questions</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">';
                    if (!$login) {
                        echo
                        '<button class="btn btn-danger me-2" type="submit"><a class="nav-link active" href="/webbit/index.php">Login</a></button>
                        <button class="btn btn-success me-2" type="submit"><a class="nav-link active" href="/webbit/signup.php">SignUp</a></button>';
                    }
                    else{
                        echo
                        '<button class="btn btn-danger me-auto" type="submit"><a class="nav-link active" href="/webbit/logout.php">Logout</a></button>';
                    }
                echo
                '</form>
            </div>
        </div>
    </nav>';
    // echo '<hr class = "m-0 ">'
?>