<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User Details</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <?php include('reusables/nav.php') ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="display-5 mt-4 mb-4">Update User Details</h1>
            </div>
        </div>  
        <?php
            $id = $_GET['id'];
            $connect = mysqli_connect('localhost', 'root', 'root', 'quotes_database');
            $query = "SELECT * FROM users WHERE id = '$id'";
            $result = mysqli_query($connect, $query);
            $user = mysqli_fetch_assoc($result);
        ?>    
        <div class="row">
            <div class="col">
                <form action="includes/edituser.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                    <div class="mb-3">
                        <label for="fname" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="fname" name="fname" aria-describedby="Fname" value="<?php echo $user['fname']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="lname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lname" name="lname" aria-describedby="Lname" value="<?php echo $user['lname']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" aria-describedby="Email" value="<?php echo $user['email']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="text" class="form-control" id="password" name="password" aria-describedby="Password" value="<?php echo $user['password']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="active" class="form-label">Active</label>
                        <input type="text" class="form-control" id="active" name="active" aria-describedby="Active" value="<?php echo $user['active']; ?>">
                    </div>
                    <button type="submit" name="edituser" class="btn btn-primary">Submit</button>
                </form> 
            </div>
        </div>  
    </div>
</body>
</html>
