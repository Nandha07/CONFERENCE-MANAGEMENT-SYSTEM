<!DOCTYPE html>
<html>
<head>
<title>review the paper</title>
<link rel="stylesheet" href="style2.css">
</head>
<body>
  <div class='review'>
  <h1>  Review paper</h1>

</div>
<table>
  <tr>
    <th>paper record</th>

      <tr>

      <td>DATE</td>
    <td>TITLE</td>
    <td>EMAIL</td>
      <td>DESCRIPTION</td>
      <td>FILE</td>

    </tr>
<?php
$con = mysqli_connect('localhost', 'root', '','cms');

$res=('SELECT * from author');
 $res=mysqli_query($con,$res);
$total=mysqli_num_rows($res);
$num=mysqli_fetch_assoc($res);
if($total){

}
while($num=mysqli_fetch_assoc($res)){

  echo"
  <tr>
  <td>".$num['DATE']."</td>
  <td>".$num['TITLE']."</td>
  <td>".$num['EMAIL']."</td>

  <td>".$num['DESCRIPTION']."</td>




  ";

 echo "<td><a href=upload/".$num["PAPER"].">".$num["PAPER"]."</a></td>";

}
?>

</tr>

</table>
<form class="" action="#" method="post"><br>
  <br>
  <br>
  <button type="submit" name="button"><a href="reviwer2.php"> SEND TO AUTHOR</button></a>
</form>

</body>
</html>
