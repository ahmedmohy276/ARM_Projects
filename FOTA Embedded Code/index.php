<!DOCTYPE html>
<?php
$myfile = fopen("status.txt" , "w");
fwrite($myfile , '0');
fclose($myfile);
?>
<html>
<head>
<title> Flashing Over The Air </title>
</head>

<body>
<h1> Welcome to FOTA </h1>
<p> This website is to flash code to microcontroller over the air </p>

<!-- This form for choose file and upload buttons  -->
<form action = "script.php" method = "POST" enctype = "multipart/form-data">
  <label for="userfile">Select a file:</label>
  <input type="file" id="userfile" name="userfile" />
  <input type="hidden" name="status" value="on" />
  <button type="Upload">Upload.</button>
</form>

</body>
</html>