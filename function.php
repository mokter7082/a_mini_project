<?php 
include_once('./database/database.php');
function userSend($myData){
    // print_r($myData);
    global $conn;
    extract($myData);
    $sql = "insert into users(name,email,password) values('$name','$email','$password')";
    // print_r($sql);die;
    mysqli_query($conn,$sql);
}
function getAllUsers(){
    global $conn;
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
    return $result;
}
function getSingleUser($id){
    global $conn;
    $sql = "SELECT * FROM users WHERE id=$id";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_assoc($query);
    return $result;
}
function editUser($id){
    global $conn;
    $sql = "SELECT * FROM users WHERE id=$id";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_assoc($query);
    return $result;
    //print_r($result);
}
function update_user($data,$id){
    // print_r($data);exit;
    extract($data);
    global $conn;
    $sql = "UPDATE users SET name= \"$name\",email= \"$email\" , password='$password' WHERE id=$id";

    $result = mysqli_query($conn,$sql);
    return $result;
  }
function deleteUser($id){
    // print_r($data);exit;
    extract($data);
    global $conn;
    $sql = "DELETE FROM users WHERE id=$id;";
    $result = mysqli_query($conn,$sql);
    return $result;
  }

?>