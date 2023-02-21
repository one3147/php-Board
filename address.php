<html>
 <head>
  <title>Address</title>
 </head>
 <body bgcolor="black">
  <div style="color:green;"><h2>도로명주소를 검색하세요! (세종시 보람동만 검색가능)</h2></div>
   <form action="address.php" method="post">
    <input id="search_addr" name="addr" type="text" placeholder="ex)세종특별자치시 보람동로" />
    <input type="submit" value="주소 검색" id="search_btn" />
   </form>
  <button type="button" class="btn" onclick="location.href='../index.php'">Main</button> 
<?php
if(isset($_POST['addr']))
{
	$addr = $_POST['addr'];
	$conn = mysqli_connect('localhost', 'root' , 'ubuntu3147.', 'address');
	$sql = "SELECT * FROM address where address like '%$addr%';";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_array($result))
		{
			echo "<div style='color:green;'><strong>",$row['address'],"</strong></div>";
			echo"<br />";
		}
	}
	else
	{
		echo"<scriptalert('No address');</script>";
	}
	mysqli_close($conn);
}
?>
 </body>
</html>
