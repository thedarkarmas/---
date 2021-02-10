<?php
 require_once("dbcon.php");
 $sql = "SELECT * FROM movie";
 $result = mysqli_query($conn, $sql);
 ?>
<table style="width:100%;" border="1">
<tr>
        <th>รหัสภาพยนต์</th>
        <th>ชื่อภาพยนต์</th>
        <th>เวลาที่เริ่มฉาย (วัน+เวลา)</th>
        <th>PIN</th>
    </tr>
<?php
if (mysqli_num_rows($result) > 0) {
    while($row = $result->fetch_assoc()) {
?><tr>
    <td><?php echo $row['movie_id']; ?></td>
<td><?php echo $row['movie_name']; ?></td>
<td><?php echo $row['movie_tday']; ?></td>
<td><?php echo $row['movie_pin']; ?></td>
</tr>
 <?php
    }
    } else {
        echo "0 results";
    }
    $conn->close();
?> 