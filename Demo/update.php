<?php 
    include "config.php";

    if(isset($_POST['update'])){
        $firstname = $_POST['firstname'];
        $user_id = $_POST['id'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $password =$_POST['password'];
     
        $sql = "UPDATE"
    }
?>