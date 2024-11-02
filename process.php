<?php
require "connection.php";

if(isset($_POST["register"])){
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $encrypt_password = md5($password);
    //check if user already exist
    $sql_check = "SELECT * FROM users WHERE email = '$email'";
    $query_check = mysqli_query($connection, $sql_check);
    if(mysqli_fetch_assoc($query_check)){
        //already exist
        $error = "user already exist please login";
    }else{
    //insert data to base
    $sql = "INSERT INTO users(firstname, lastname, email, password) 
    VALUES('$firstname', '$lastname', '$email', '$encrypt_password')";
    $query = mysqli_query($connection, $sql) or die("Cant save data");
    $success =  "Registration completed";
}
}
if(isset($_POST["login"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $encrypt_password = md5($password);
    //check if user already exist
    $sql_check2 = "SELECT * FROM users WHERE email = '$email'";
    $query_check2 = mysqli_query($connection, $sql_check2);
    if(mysqli_fetch_assoc($query_check2)){
        //check if user email and password exist
    $sql_check = "SELECT * FROM users WHERE email = '$email' AND 
    password = '$encrypt_password'";
    $query_check = mysqli_query($connection, $sql_check);
    if(mysqli_fetch_assoc($query_check)){
        //login to dashboard
        $success = "user logged in";
    }else{
        //user not found
        $error = "user password error";
    }
     }else{
    //user not found
    $error = "user email not found";
}

}
?>