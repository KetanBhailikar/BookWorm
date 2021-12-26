<?php
    session_start();
    function des(){
        session_destroy();
        echo "<script>location.reload()</script>";
    }
    if (isset($_GET['logout']) and isset($_SESSION['uname'])) {
        des();
    }
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="index.css">
    <title>Home - BookWorm</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="color: #3D2B56;">BookWorm</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="" style="color: #3D2B56;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="lectures/" style="color: #3D2B56;">Lectures</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="notes/" style="color: #3D2B56;">Notes</a>
                    </li>
                    <li class="nav-item">
                    <li class="nav-item">
                        <a class="nav-link" href="subs.php" style="color: #3D2B56;">Subscriptions</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="main">
        <div id="txt">
            <h1 id="catchphrase">Having a hard time searching<br>for Study Material?</h1>
            <?php
                if(isset($_SESSION['uname'])){
                    echo " <p>Take a Break!</p>";
                    echo "<a id='signup' class='btn shadow p-3 mb-5 bg-body rounded' href = 'index.php?logout=true'><b>Logout</b></a>";
                }
                else{
                    echo "<p id='req'>Get all the notes and learn from the best lecturers!<br>Sign Up for free and Start Preparing!</p>";
                    echo "<a id='signup' class='btn shadow p-3 mb-5 bg-body rounded' href='signup/'><b>Sign Up</b></a>
                    <a id='signup' class='btn shadow p-3 mb-5 bg-body rounded' href='login/'><b>Login</b></a>";
                }
            ?>
        </div>
        <div id="books">
            <img src="https://www.transparentpng.com/thumb/book/hfU1gl-book-transparent-background.png"
                alt="Book Transparent Background @transparentpng.com">
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>