<?php


include ('function.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];
    //echo $id ;
    if(isset($_POST)){

        update_user($_POST,$id);
        header("Location:all_post.php");
    }
    
    
}
 

?>