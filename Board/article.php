<html>
 <head>
  <title>Article</title>
 </head>
 <body bgcolor="black">
<?php
 $idx = $_GET["idx"];
 $conn = mysqli_connect("localhost", "root", "ubuntu3147.", "Board");
 $sql = "SELECT * FROM Board where idx=$idx";
 $result = mysqli_fetch_array(mysqli_query($conn,$sql));
 $watch = $result["watch"] + 1;
 $watch2 = $result['idx'];
 $sql2 = "UPDATE Board SET watch = $watch where idx=$watch2";
 $res = mysqli_query($conn,$sql2);
 $sql3 = "SELECT like_count FROM Board where idx=$idx";
 $result3 = mysqli_fetch_array(mysqli_query($conn,$sql3));
 $ok = $_GET['key'];
 if($result['password'] && !$ok)
 {
	 echo"<script>location.href='password.php?idx=$idx'</script>";
 }
 $cnt = $result3['like_count'];
 session_Start();
 $username = $_SESSION['username'];
 if (array_key_exists('like',$_POST))
 {
         $cnt += 1;
         $sql4 = "UPDATE Board SET like_count=$cnt WHERE idx=$idx";
         $conn->query($sql4);
         echo "<script>alert('YOu l1ke Th1s 4rt1cl3.');</script>";
 }
?>

 <div style="color:green;">
  <h1><?php echo $result["title"]?></h1>
  <h3>writer : <?php echo $result["writer"]?></h3>
  <h4><?php echo $result["contents"]?></h4>
  <h4><?php echo "like : ";echo$result['like_count'];?></h4>
  <button type="button" onclick="location.href='./like.php?idx=<?php echo $result['idx']?>'">Like</button>
  <?php $file_name = $result['file'];?>
  <h4><?php echo $result['file'];?></h4>
  <a href="files/<?=$file_name?>">Img View</a>
  <br><br>
  <a href= './download.php?file=<?php echo $file_name ?>'>download</a>
 </div>
  <button type="button" onclick="location.href='board.php'">Main</button>
  <button type="button" onclick="location.href='del.php?idx=<?php echo $result['idx']?>'">Delete This Article</button>
 </body>
</html>
