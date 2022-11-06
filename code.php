<?php
session_start();
include "conn.php";

if(isset($_POST['delete_user'])){
    $user__id = mysqli_real_escape_string($conn,$_POST['delete_user']);

    $query ="DELETE FROM `users` WHERE id='$user__id' ";
    $query_run = mysqli_query($conn,$query);

    if($query_run)
    {
        $_SESSION['message']= "User Deleted Sucessfully";
        header("Location: userdetail.php");
        exit(0);
        
    }
    else
    {
        $_SESSION['message']= "User not Deleted";
        header("Location: userdetail.php");
        exit(0);

    }

}


if(isset($_POST['Update_User'])){
    $User_id = mysqli_real_escape_string($conn,$_POST['user_id']);
    $fname = mysqli_real_escape_string($conn,$_POST['Fname']);
    $lname = mysqli_real_escape_string($conn,$_POST['Lname']);
    $age = mysqli_real_escape_string($conn,$_POST['Age']);
    $email = mysqli_real_escape_string($conn,$_POST['Email']);
    $contact = mysqli_real_escape_string($conn,$_POST['Contact']);
    $password = mysqli_real_escape_string($conn,$_POST['Password']);

    $query = "UPDATE users SET FirstName='$fname',LastName='$lname',Age='$age',Email='$email',Contact='$contact',Password='$password' WHERE id='$User_id'";
    $query_run = mysqli_query($conn,$query);
    if($query_run)
    {
        $_SESSION['message']= "User updated Sucessfully";
        header("Location: userdetail.php");
        exit(0); 
    }
    else{
        $_SESSION['message']= "User not updated";
        header("Location: userdetail.php");
        exit(0);
    }

}

if(isset($_POST['submit'])){
    $fname = $_POST['Fname'];
    $lname = $_POST['Lname'];
    $age = $_POST['Age'];
    $email = $_POST['Email'];
    $contact = $_POST['Contact'];
    $password = $_POST['Password'];

    $sql ="INSERT INTO users( `id`,`FirstName`, `LastName`, `Age`, `Email`, `Contact`, `Password`) VALUES ('','$fname','$lname','$age','$email','$contact','$password')";

    $result = mysqli_query($conn, $sql);

    if($result)
    {
        $_SESSION['message']= "User added Sucessfully";
        header("Location: addNewUser.php");
        exit(0);
    }
    else{
        $_SESSION['message']= "User not created";
        header("Location: addNewUser.php");
        exit(0);
    }
}


?>