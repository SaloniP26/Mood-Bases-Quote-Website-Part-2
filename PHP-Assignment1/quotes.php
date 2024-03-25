<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quotes</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <?php include('reusables/nav.php') ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="display-5 mt-4 mb-4">Quotes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="home.php" class="btn btn-primary mb-4">Back</a>
                <a href="add_quote.php?MoodID=<?php echo $_GET['MoodID']; ?>" class="btn btn-success mb-4">Add</a>
            </div>
        </div>       
        <div class="row">
            <?php
                if(isset($_GET['MoodID'])) {
                    $mood_id = $_GET['MoodID'];
                    $connect = mysqli_connect('localhost','root','root','quotes_database');
                    $query = "SELECT * FROM quotes WHERE MoodID = $mood_id";
                    $quotes = mysqli_query($connect, $query);

                    if(mysqli_connect_error()){
                        die("Connection error: " . mysqli_connect_error());
                    }

                    foreach ($quotes as $quote) {
                        echo '<div class="col-md-6">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <p class="card-text">' . $quote['Quotes'] . '</p>
                                        <p class="card-text">Author: ' . $quote['Author'] . '</p>
                                        <a href="update.php?QuoteID=' . $quote['QuoteID'] . '" class="btn btn-primary">Edit</a>
                                        <a href="includes/delete.php?delete&QuoteID=' . $quote['QuoteID'] . '" class="btn btn-danger">Delete</a>
                                    </div>
                                </div>
                            </div>';
                    }

                } 
                else {
                    echo '<div class="col">
                            <div class="alert alert-danger" role="alert">
                                No mood selected!
                            </div>
                        </div>';
                }
            ?>
        </div>
    </div>
</body>
</html>
