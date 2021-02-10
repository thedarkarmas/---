<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เว็บไซต์เก็บข้อมูลภาพยนต์</title>
</head>
<body>
<?php
    require_once("dbcon.php");
    session_start();
    if(isset($_POST['login'])) {
        $sql = "SELECT * FROM movie WHERE movie_u = '{$_POST['movie_u']}' AND movie_pin = '{$_POST['movie_pin']}'";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION["movie_u"] = $row['movie_u'];
        } else {
            echo "<p>รหัสผิด</p>";
        }
    }

    if(isset($_POST['logout'])) {
        session_unset();    
    }

    if(isset($_SESSION['movie_u'])) {
        require_once("table4.php");
    } else {
        require_once("login.php");
    }
    
?>
</body>
</html>