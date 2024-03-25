<?php

if(isset($_POST['edit'])){
    
    $quoteID = $_POST['quoteID'];
    $quote = $_POST['quote'];
    $author = $_POST['author'];

    // Connection String
    include('../includes/connect.php');

    $query = "UPDATE quotes SET Quotes='$quote', Author='$author' WHERE QuoteID='$quoteID'";
    $quote = mysqli_query($connect, $query);
    
    
    if($quote){
        header("Location: ../home.php");
    }
    else{
        echo "Failed to update quote: " . mysqli_error($connect);
    }
}
else{
   
    echo "You should not be here!";
}

?>
