<?php
    session_start();
    $servername = "localhost";
    $username = "id17941650_myname";
    $password = "C&>(U-@d5_NM7>IP";
    $conn = mysqli_connect($servername,$username,$password);
    mysqli_query($conn,"use id17941650_student");
    $un = $_POST['uname'];
    $pwd= $_POST['pwd'];
    $ret = mysqli_query($conn,"select * from data where username = '$un'");
    if( mysqli_num_rows($ret) == 1){
        $b = mysqli_fetch_array($ret);
        if($b['password'] == $pwd){
            echo "<script>location.href = '../lectures/'</script>";
            $_SESSION["uname"] = $un;
        }
        else{
            echo "<script>alert('Incorrect password');
            location.href = 'index.html';</script>";   
        }
    }
    else{
        echo "<script>alert('No Such User Exist!');location.href = 'index.html';</script>";
        session_destroy();
    }
?>