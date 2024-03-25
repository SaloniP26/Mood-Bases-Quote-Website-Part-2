<?php

if(isset($_POST['edituser'])){
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $active = $_POST['active'];

    // Connection String
    include('../includes/connect.php');

    $query = "UPDATE users SET fname='$fname', lname='$lname', email='$email', active='$active'";

    if (!empty($password)) {
        $password = md5($password);
        $query .= ", password='$password'";
    }
    
    $query .= " WHERE id='$id'";

    $result = mysqli_query($connect, $query);
    
    if($result){
        header("Location: ../userlist.php");
        die();
    }
    else{
        echo "Failed to update user: " . mysqli_error($connect);
    }
}
else{
    echo "You should not be here!";
}
?>
