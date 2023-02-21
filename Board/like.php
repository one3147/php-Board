<?php
$idx = $_GET['idx'];
$conn = mysqli_connect("localhost", "root", "ubuntu3147.", "Board");
$sql = "SELECT * FROM Board Where idx=$idx";
$res = mysqli_fetch_array(mysqli_query($conn, $sql));
$cnt = $res['like_count'];
$cnt += 1;
$sql2 = "UPDATE Board SET like_count=$cnt WHERE idx=$idx";
$res2 = mysqli_query($conn, $sql2);
echo "<script>location.href='./article.php?idx=$idx'</script>";
?>
