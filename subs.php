<?php
    session_start();
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
                        <a class="nav-link active" aria-current="page" href="index.php" style="color: #3D2B56;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="lectures/" style="color: #3D2B56;">Lectures</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="notes/" style="color: #3D2B56;">Notes</a>
                    </li>
                    <li class="nav-item">
                    <li class="nav-item">
                        <a class="nav-link" href="" style="color: #3D2B56;">Subscriptions</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php
    
    $servername = "localhost";
    $username = "id17941650_myname";
    $password = "C&>(U-@d5_NM7>IP";
    $conn = mysqli_connect($servername,$username,$password);
    mysqli_query($conn,"use id17941650_student");
    echo "<div style = 'margin-left:10%;margin-top : 10%'>";
    if(isset($_SESSION['uname'])){
        $un = $_SESSION['uname'];
        $ret = mysqli_query($conn,"select * from data where username = '$un'");
        if( mysqli_num_rows($ret) == 1){
            $b = mysqli_fetch_array($ret);
            echo "<h1>Your subscriptions are:</h1>";
            $subs = $b['subs'];
            $sub1 = explode(" ",$subs);
            echo "<ol>";
            for($i = 1; $i < count($sub1); $i++){
                echo "<li>$sub1[$i]</li>";
            }
            echo "</ol>";
        }
    }
    else{
        echo "<script>location.href = 'lf.html'</script>";
    }
    echo "</div>";
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>
