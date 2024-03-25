<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Quote</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <?php include('reusables/nav.php') ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="display-5 mt-4 mb-4">Add Quote</h1>
                <div class="row">
                    <div class="col">
                        <a href="home.php" class="btn btn-primary mb-4">Back</a>
                    </div>
                </div>  
                <form action="includes/add.php" method="post">
                    <input type="hidden" name="MoodID" value="<?php echo isset($_GET['MoodID']) ? $_GET['MoodID'] : ''; ?>">
                    <div class="mb-3">
                        <label for="quote" class="form-label">Quote</label>
                        <textarea class="form-control" id="quote" name="Quotes" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="author" class="form-label">Author</label>
                        <input type="text" class="form-control" id="author" name="Author" required>
                    </div>
                    <button type="submit" name="add" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>       
    </div>
</body>
</html>
