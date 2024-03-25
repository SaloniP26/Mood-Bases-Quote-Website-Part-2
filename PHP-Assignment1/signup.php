<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Quotify</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .signup-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 100px;
        }
    </style>
</head>
<body> 
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="signup-container">
                    <h2 class="text-center mb-4">Welcome to Quotify</h2>
                    <h4 class="text-center mb-4">Sign Up</h4>
                    <form action="includes/adduser.php" method="post">
                    <div class="mb-3">
                            <label for="fname" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="fname" name="fname" required>
                        </div>
                        <div class="mb-3">
                            <label for="lname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lname" name="lname" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" name="adduser" class="btn btn-primary">Sign Up</button>
                        </div>
                    </form>
                    <div class="text-center mt-3">
                        <p>Already have an account? <a href="index.php">Login</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
