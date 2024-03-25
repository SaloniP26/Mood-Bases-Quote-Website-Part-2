<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 2</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .card-img-top {
            height: 200px; 
            object-fit: cover; 
        }
    </style>
</head>
<body>
    <?php include('reusables/nav.php') ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Welcome to Quotify </h1>
                <p></p>
                <h5 class="display-5 mt-4 mb-4">Mood Categories</h5>
            </div>
        </div>       
        <div class="row">
            <?php
                $connect = mysqli_connect('localhost','root','root','quotes_database');
                $query = 'SELECT * FROM moods';
                $moods = mysqli_query($connect, $query);

                if(mysqli_connect_error()){
                    die("Connection error: " . mysqli_connect_error());
                }

            ?>

            <?php

                foreach ($moods as $mood) {
                    echo '<div class="col-md-4">
                            <div class="card mb-4">
                                <img class="card-img-top" src="' . $mood['ImageURL'] . '" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">' .$mood['MoodName'] . '</h5>
                                    <a href="quotes.php?MoodID=' . $mood['MoodID'] . '" class="btn btn-primary">Show Quotes</a>
                                </div>
                            </div>
                        </div>';
                }

            ?>
        </div>
    </div>
</body>
</html>
