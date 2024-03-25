<?php

include('includes/connect.php');
include('includes/config.php');
include('includes/functions.php');

secure();

include('reusables/nav.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .login-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 100px;
        }

        .card {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">View Quotes</h5>
                        <p class="card-text">You can view and manage all the quotes submitted by users. Explore the submitted quotes and ensure a smooth flow of content on your platform.</p>
                        <a href="home.php" class="btn btn-primary">Go to Quotes</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Manage Users</h5>
                        <p class="card-text">You have the ability to view all registered users on your platform. This includes both regular users and other administrators who are active as well as inactive.</p>
                        <a href="userlist.php" class="btn btn-primary">Go to Users</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Logout</h5>
                        <p class="card-text">Click here to logout from the dashboard.</p>
                        <a href="logout.php" class="btn btn-primary">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
