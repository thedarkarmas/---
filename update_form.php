<?php
    require_once("dbcon.php");
    $sql = "SELECT * FROM movie WHERE movie_id = '{$_GET['id']}'";
    $result = $conn->query($sql);
    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    }
?>
<h3>แก้ไขนักศึกษา <small><a href=".">ย้อนกลับ</a></small></h3>

<form action="update.php" method="post">
   <label for="movie_id">รหัสหนัง:</label>
   <?php echo $row['movie_id']; ?>
   <input type="hidden" name="movie_id" id="movie_id"value="<?php echo $row['movie_id']; ?>" >
   <br><br>
    <label for="movie_name">ชื่อหนัง: </label>
    <input type="text" name="movie_name" id="movie_name" value="<?php echo $row['movie_name']; ?>">
    <br><br>
    <label for="movie_tday">รอบฉาย : </label>
    <input type="date" name="movie_tday" id="movie_tday" value="<?php echo $row['movie_tday']; ?>">
    <br><br>
 <button type="submit">ยืนยัน</button>
 <button type="reset">ล้างข้อมูล</button>
</form>