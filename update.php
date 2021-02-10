<h1>ส่งค่า Update</h1>
<?php
    require_once("dbcon.php");
    $sql = "UPDATE movie SET
            movie_id  ='{$_POST['movie_id']}',
            movie_name = '{$_POST['movie_name']}',
            movie_tday = '{$_POST['movie_tday']}'
            WHERE movie_id = '{$_POST['movie_id']}' ";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>
<br>
<a href=".">ย้อนกลับ</a>