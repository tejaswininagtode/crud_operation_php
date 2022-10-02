<?php

session_start();
include "connect.php";

if(isset($_POST['studimage']));{
    $name = $_POST['name'];
    $phonenum = $_POST['phonenum'];
    $class = $_POST['class'];
    $image = $_FILES['studimage']['name'];

 $query = "INSERT INTO `image`(`id`,`name`,`class`,`phonenum`,`studimage`) VALUES ('','$name','$class','$phonenum','$image')";
 $file_tmp =  $_FILES['studimage']['tmp_name'];
   
   move_uploaded_file($file_tmp, "upload/" . $image);
 $sql = mysqli_query($con,$query);

 if($sql){
    echo "Data Inserted Successfully";
    // header("Location:create.php");
  }else{
    die('connection failed');
  }
}

// if(isset($_GET['id'])){
// $user_id = $_GET['id'];
// $query = "DELETE FROM `image` WHERE `id`='$user_id'";
// $result = mysqli_query($con,$query);
// if ($result == TRUE) {

//     echo "Record deleted successfully.";

// }else{

//     echo "Error:";
// }
// }

?>


