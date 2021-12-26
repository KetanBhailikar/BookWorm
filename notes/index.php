<?php
    session_start();
    function check(){
        if(isset($_SESSION['uname'])){
            echo "<script>location.href = '../success.html'</script>";
        }
        else{
            echo "<script>location.href = '../lf.html'</script>";
        }
    }
    if (isset($_GET['name'])) {
        check();
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
    <title>Notes - BookWorm</title>
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
                        <a class="nav-link active" aria-current="page" href="../index.php" style="color: #3D2B56;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../lecturers/" style="color: #3D2B56;">Lectures</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="" style="color: #3D2B56;">Notes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../subs.php" style="color: #3D2B56;">Subscriptions</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="lects">
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width: 18rem;">
            <img src="https://picsum.photos/201" class="card-img-top" alt="https://picsum.photos/200">
            <div class="card-body">
                <h5 class="card-title">Unit No</h5>
                <p class="card-text">Subject Name</p>
                <a href="index.php?name=true" class = "btn btn-primary">Download</a>
                
            </div>
        </div>
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width: 18rem;">
            <img src="https://picsum.photos/202" class="card-img-top" alt="https://picsum.photos/200">
            <div class="card-body">
                <h5 class="card-title">Unit No</h5>
                <p class="card-text">Subject Name</p>
                <a href="index.php?name=true" class = "btn btn-primary">Download</a>
            </div>
        </div>
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width: 18rem;">
            <img src="https://picsum.photos/203" class="card-img-top" alt="https://picsum.photos/200">
            <div class="card-body">
                <h5 class="card-title">Unit No</h5>
                <p class="card-text">Subject Name</p>
                <a href="index.php?name=true" class = "btn btn-primary">Download</a>
            </div>
        </div>
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width: 18rem;">
            <img src="https://picsum.photos/204" class="card-img-top" alt="https://picsum.photos/200">
            <div class="card-body">
                <h5 class="card-title">Unit No</h5>
                <p class="card-text">Subject Name</p>
                <a href="index.php?name=true" class = "btn btn-primary">Download</a>
            </div>
        </div>
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width: 18rem;">
            <img src="https://picsum.photos/205" class="card-img-top" alt="https://picsum.photos/200">
            <div class="card-body">
                <h5 class="card-title">Unit No</h5>
                <p class="card-text">Subject Name</p>
                <a href="index.php?name=true" class = "btn btn-primary">Download</a>
            </div>
        </div>
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width: 18rem;">
            <img src="https://picsum.photos/206" class="card-img-top" alt="https://picsum.photos/200">
            <div class="card-body">
                <h5 class="card-title">Unit No</h5>
                <p class="card-text">Subject Name</p>
                <a href="index.php?name=true" class = "btn btn-primary">Download</a>
            </div>
        </div>
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width: 18rem;">
            <img src="https://picsum.photos/207" class="card-img-top" alt="https://picsum.photos/200">
            <div class="card-body">
                <h5 class="card-title">Unit No</h5>
                <p class="card-text">Subject Name</p>
                <a href="index.php?name=true" class = "btn btn-primary">Download</a>
            </div>
        </div>
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width: 18rem;">
            <img src="https://picsum.photos/208" class="card-img-top" alt="https://picsum.photos/200">
            <div class="card-body">
                <h5 class="card-title">Unit No</h5>
                <p class="card-text">Subject Name</p>
                <a href="index.php?name=true" class = "btn btn-primary">Download</a>
            </div>
        </div>

    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>