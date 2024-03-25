<?php
if (isset($_POST['add'])) {
    $quote = $_POST['Quotes'];
    $author = $_POST['Author'];
    $moodID = $_POST['MoodID'];

    // Connection String
    include('../includes/connect.php');

    if (mysqli_connect_error()) {
        die("Connection error: " . mysqli_connect_error());
    }

    $query = "INSERT INTO quotes (Quotes, Author, MoodID) VALUES ('$quote', '$author', '$moodID')";
    //$quote = mysqli_query($connect, $query);

    if (mysqli_query($connect, $query)) {
        echo "New quote added successfully!";
        header('Location: ../home.php');
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connect);
    }

}
?>
