<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Quotes</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <?php include('reusables/nav.php') ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="display-5 mt-4 mb-4">Update Quotes</h1>
            </div>
        </div>  
        <?php

            $quoteID = $_GET['QuoteID'];
            $connect = mysqli_connect('localhost', 'root', 'root', 'quotes_database');
            $query = "SELECT * FROM quotes WHERE QuoteID = '$quoteID'";

            $quote = mysqli_query($connect, $query);

            $result = mysqli_fetch_assoc($quote);
        ?>    
        <div class="row">
            <div class="col">
                <form action="includes/edit.php" method="POST">
                    <input type="hidden" name="quoteID" value="<?php echo $result['QuoteID']; ?>">
                    <div class="mb-3">
                        <label for="quote" class="form-label">Quote</label>
                        <input type="text" class="form-control" id="quote" name="quote" aria-describedby="Quote" value="<?php echo $result['Quotes']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="author" class="form-label">Author</label>
                        <input type="text" class="form-control" id="author" name="author" aria-describedby="Author" value="<?php echo $result['Author']; ?>">
                    </div>
                    <button type="submit" name="edit" class="btn btn-primary">Submit</button>
                </form> 
            </div>
        </div>  
    </div>
</body>
</html>
