<html>
 <head>
  <title>Download</title>
 </head>
 <body>
<?php
 $file = $_GET['file'];
 $filepath = "./files/$file";
 $filesize = filesize($filepath);
 $filename = $file;
 $extension = $path_parts['extension'];
 header("Pragma: public");
 header("Expires: 0");
 header("Content-Type: application/octet-stream");
 header("Content-Disposition: attachment; filename=$filename");
 header("Content-Transfer-Encoding: binary");
 header("Content-Length: $filesize");

 ob_clean();
 flush();
 readfile($filepath);
?>
 </body>
</html>
download .php
