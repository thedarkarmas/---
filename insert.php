<?php
   require_once("dbcon.php");
  $sql = "INSERT INTO movie (movie_id,movie_name,movie_tday)
VALUES ('{$_POST['movie_id']}','{$_POST['movie_name']}', '{$_POST['movie_tday']}')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<br>
<a href=".">ย้อนกลับ</a>