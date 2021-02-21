

<?php
$con = mysqli_connect('localhost', 'root', '','cms');

$name = $_POST['name'];
$Email = $_POST['email'];
$Phone = $_POST['phone'];
$pass = $_POST['password'];

$sql = "INSERT INTO sign1( `Name`, `Email`, `phone`, `pwd`) VALUES ( '$name', '$Email', '$Phone', '$pass')";

$rs = mysqli_query($con, $sql);
if($rs)
{
  header('location:index.html');

}
?>
