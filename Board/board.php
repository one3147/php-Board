<html>
 <head>
  <meta charset="utf-8">
  <title>Board</title>
 </head>
 <body bgcolor="black">
  <h1 style="color:green;text-align:center;">This is Board Page.</h1>
   <div style="text-align:center">
   <button type="button" onclick="location.href='../index.php'">Main</button>
   <button type="button" class="btn" onclick="location.href='./write.php'">Writing</button>
  </div><br>
 <div style="color:green;text-align:center"><strong>idx | title | writer | date | watch </strong></div>
 <br><div style="text-align:center;">
  <form method="post" action="./board.php">
   <select name="option_val">
    <option value="writer">이름</option>
    <option value="title">제목</option>
    <option value="contents">내용</option>
   </select>
   <i class="far fa-calendar-alt"></i><input type="date"name="date_from"/>
   <i class="far fa-calendar-alt"></i><input type="date"name="date_to" />
   <input id="search_addr" name = "board_result" type="text" placeholder="Search" />
   <input type="submit" name = "board_search" value="Search" id = "search_btn" />
  </form>
 </div>
 <div style="color:green;text-align:center"><strong>_________________________________________________________________________________________________________________</strong></div><br>
 <?php
 $conn = mysqli_connect("localhost", "root", "ubuntu3147.", "Board");
 $sql3 = "SELECT idx FROM Board;";
 $result3 = mysqli_query($conn, $sql3);
 $data_num = mysqli_num_rows($result3);
 $page_num = ceil($data_num / 10);
 ?>
 <?php
 if(array_key_exists('page',$_POST))
 {
        printpage($_POST['page']);
 }
 elseif(array_key_exists('board_search', $_POST))
 {
	$option = $_POST['option_val'];
 	searchpage($option);
 }
 elseif(array_key_exists('date_option', $_POST))
 {
 	printdate();
 }
 else
 {
        printpage(1);
 }
 function printpage(int $page)
 {
	 $start_data = ($page - 1)* 10;
	 $conn = mysqli_connect('localhost', 'root', 'ubuntu3147.', 'Board');
         $sql4 = "SELECT * FROM Board limit $start_data, 10;";
         $result4 = mysqli_query($conn, $sql4);
         while($board = mysqli_fetch_array($result4))
         {?>
                 <div style="color:green;text-align:center;"><strong>
                  <tr>
                   <td width="70"><?php echo $board['idx']; ?></td>
                   <td width="500"><a href="./article.php?idx=<?php echo $board["idx"];?>"><?php echo $board['title'];?></td>
                   <td width="100"><?php echo $board['writer'];?></td>
                   <td width="100"><?php echo $board['date']; ?></td>
                   <td width="100"><?php echo $board['watch']; ?></td>
                   <br><br>
                  </tr>
                 </strong></div>

         <?php
	 }
	 mysqli_close($conn);
 }
 function searchpage()
 {
	 $start_date = $_POST['date_from'];
	 $end_date = $_POST['date_to'];
	 $option = $_POST['option_val'];
	 $find = $_POST['board_result'];
	 $conn = mysqli_connect('localhost', 'root', 'ubuntu3147.', 'Board');
	 if($start_date && $end_date)
	 {
	 	$sql10 = "SELECT * FROM Board Where $option like '%$find%' and date between '$start_date' and '$end_date';";
	 }
	 else
	 {
	 	$sql10 = "SELECT * FROM Board Where $option like '%$find%';";
	 }
	 $res10 = mysqli_query($conn, $sql10);
	 while($res100 = mysqli_fetch_array($res10))
	 {?>
	 	<div style="color:green;text-align:center;"><strong>
                  <tr>
                   <td width="70"><?php echo $res100['idx']; ?></td>
                   <td width="500"><a href="./article.php?idx=<?php echo $res100["idx"];?>"><?php echo $res100['title'];?></td>
                   <td width="100"><?php echo $res100['writer'];?></td>
                   <td width="100"><?php echo $res100['date']; ?></td>
                   <td width="100"><?php echo $res100['watch']; ?></td>
                   <br><br>
                  </tr>
		 </strong></div>
	 <?php
	 }
	 mysqli_close($conn);
 }
?>
  <div class="pagination" style="text-align:center;">
  <form method ="post">
   <?php
   for($i = 1; $i <= $page_num;$i = $i+1)
   {
          echo "<input type='submit' id='page' name='page' value='$i'/>";
   }
   ?>
  </form>
 </div>

</body>
</html>
