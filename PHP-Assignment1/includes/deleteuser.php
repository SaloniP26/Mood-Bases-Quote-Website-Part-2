<?php

if(isset($_GET['id'])){
    //print_r($_POST);
    
    $id = $_GET['id'];

    // Connection String
    include('../includes/connect.php');

    $query = "DELETE FROM users WHERE `id` = '$id'";
    
    $userid = mysqli_query($connect, $query);
    
    if($userid){
        //echo "SUCCESS!";
        header("Location: ../userlist.php");
    }
    else{
        echo "FAILED" .mysqli_error($connect);
    }
}
else{
    echo "You should not be here!";
}

?>