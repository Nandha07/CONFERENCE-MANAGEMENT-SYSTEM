<?php

$con = mysqli_connect('localhost', 'root', '','cms');

$date = $_POST['date'];
$title = $_POST['title'];
$mail=$_POST['email'];
$des = $_POST['description'];

if (isset($_POST['Submit'])) { 
    $filename = $_FILES['file']['name'];

    $destination = 'upload/' . $filename;

    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    $file = $_FILES['file']['tmp_name'];
    $size = $_FILES['file']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx','jpg'])) {
        echo "You file extension must be .zip, .pdf or .docx  or .jpg";
    } elseif ($_FILES['file']['size'] > 1000000) {
        echo "File too large!";}
    else {
       if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO author (`DATE`,`TITLE`,`EMAIL`,`DESCRIPTION`,`PAPER`) VALUES ('$date','$title','$mail','$des','$filename')";
            if (mysqli_query($con, $sql)) {
                header('location:index.html');
            }
          else {
            echo "Failed ";
        }
    }
}
}
?>
