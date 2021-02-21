
<html>
<body>
<form action="upload.php" method="POST" enctype="multipart/form-data">
<input type="file" name="file">
<input type="submit" name="submit" value="Search">
</form>
</body>
</html>



<?php
$con= mysql_connect("localhost","root","",'cms');
if(@$_POST['submit'])
{
$file = $_FILES['file'];
$file_name = $file['name'];
$file_type = $file ['type'];
$file_size = $file ['size'];
$file_path = $file ['tmp_name'];


if($file_name!="" && ($file_type="image/jpeg"||$file_type="image/png"||$file_type="image/gif")&& $file_size<=614400)

if(move_uploaded_file ($file_path,'images/'.$file_name
$query=mysql_query("insert into user(photo)values('$file_name')");

if($query==true)
{
    echo "File Uploaded";
}
}

$result=  mysql_query("SELECT photo FROM user");
$row=  mysql_fetch_array($result);
echo "<img src='images/".$row['photo']."' height = '130px' width = '130px'>";
?>
