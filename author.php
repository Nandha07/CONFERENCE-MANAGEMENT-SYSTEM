

<?php

$nam = $_POST['name'];
$pas = $_POST['password'];
$nam=stripslashes($nam);
$pas=stripslashes($pas);


$con = mysqli_connect('localhost', 'root', '','cms');

$rs="select * from `sign1` where `Name`='$nam' && `pwd`='$pas'";
$rs = mysqli_query($con, $rs);
$num=mysqli_fetch_array($rs);
if($num["Name"]==$nam && $num["pwd"]==$pas)
{
  echo
  
  header('location:author1.html');

}else{
echo"log in failed";
header('location:signup1.html');
}
?>
