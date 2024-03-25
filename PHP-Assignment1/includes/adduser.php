<?php
if (isset($_POST['adduser'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    // Connection String
    include('../includes/connect.php');

    $query = "INSERT INTO users (fname, lname, email, password) VALUES ('$fname', '$lname', '$email', '$password')";
    
    if (mysqli_query($connect, $query)) {
        echo '<script>alert("User registered successfully!");</script>';
        header('Location: ../index.php');
        
    } else {
        die("Error: " . mysqli_error($connect));
    }
}
?>
