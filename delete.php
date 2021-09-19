<?php


include ('function.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];
    //echo $id ;


        deleteUser($id);
        header("Location:all_post.php");
    
    
}
 

?>