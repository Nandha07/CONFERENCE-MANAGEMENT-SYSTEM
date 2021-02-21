

<!DOCTYPE html>
<html>
<head>
<title>send conformation</title>
<link rel="stylesheet" href="style1.css">
</head>
<div class=bac>

<body>
  <div class=forms1>

  <h1>  REVIEWER CONFIRMATION </h1>
  <form  method="post"  enctype="multipart/form-data">
      <label for="date">Date:: </label>
      <input type='date' name='date'><br>
      <br>
<br>
      TITLE::
      <textarea name="title"required/></textarea><br>
      <br>
      <label for="email">Email</label>
      <input type="email" name="email"><br>
      <br>
      <br>
      <lable for='description'> description</lable>
      <textarea name="description"required/></textarea><br>



      <button type="submit" name="Submit" >SEND</button>
  </form>
</div>
</div>
<?php
if(isset($_POST['Submit'])){
$to="snandhakumar8437@gmail.com";
$subject=$_REQUEST["title"];
$email=$_REQUEST["email"];
$body=$_REQUEST["description"];
$header="from:$email";
$mail=mail($to,$subject,$body,$header);
if($mail){
header("location:index.html");
}}
 ?>
</body>
</html>
