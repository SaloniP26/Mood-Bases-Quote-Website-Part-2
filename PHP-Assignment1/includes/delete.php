<?php

if(isset($_GET['delete'])){
    //print_r($_POST);
    
    $QuoteID = $_GET['QuoteID'];

    // Connection String
    include('../includes/connect.php');

    $query = "DELETE FROM quotes WHERE `QuoteID` = '$QuoteID'";
    
    $quote = mysqli_query($connect, $query);
    
    if($quote){
        //echo "SUCCESS!";
        header("Location: ../home.php");
    }
    else{
        echo "FAILED" .mysqli_error($connect);
    }
}
else{
    echo "You should not be here!";
}

?>