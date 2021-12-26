<?php
    $servername = "localhost";
    $username = "id17941650_myname";
    $password = "C&>(U-@d5_NM7>IP";
    $conn = mysqli_connect($servername,$username,$password);
    mysqli_query($conn,"use id17941650_student");
    $un = $_POST['uname'];
    $pwd= $_POST['pwd'];
    $ret = mysqli_query($conn,"select * from data where username = '$un'");
    if( mysqli_num_rows($ret) > 0){
        echo "<script>alert('Username Already Exists');
                window.location.reload();
        </script>";
    }
    else{
        mysqli_query($conn,"insert into data values('$un','$pwd','','','')");
        echo "<script>location.href = '../resuc.html'</script>";
    }
?>