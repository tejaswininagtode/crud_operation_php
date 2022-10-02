<?php

$con = mysqli_connect('localhost', 'root', '', 'crudimage');
if($con){
          echo "Connection Successful";
    }
    else{
        die('connection failed');
    }
?>