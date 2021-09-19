<?php
   $myHost = "localhost";
   $myUsername = "root";
   $myPass = '';
   $myDb = "assignmentProject";
   //connecete DB
   $conn = mysqli_connect( $myHost,$myUsername ,$myPass ,$myDb);
    // if($conn){
    //   echo "CONNECTED";
    // }else{
    //     echo "NOT CONNECTED";
    //     die();
    // }
?>