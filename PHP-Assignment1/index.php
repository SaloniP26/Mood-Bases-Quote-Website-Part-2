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
        .login-container {
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
                <div class="login-container">
                    <h2 class="text-center mb-4">Welcome to Quotify</h2>
                    
                    <?php

                    include( 'includes/connect.php' );
                    include( 'includes/config.php' );
                    include( 'includes/functions.php' );

                    if( isset( $_POST['email'] ) )
                    {
                      
                      $query = 'SELECT *
                        FROM users
                        WHERE email = "'.$_POST['email'].'"
                        AND password = "'.md5( $_POST['password'] ).'"
                        AND active = "Yes"
                        LIMIT 1';
                      $result = mysqli_query( $connect, $query );
                      
                      if( mysqli_num_rows( $result ) )
                      {
                        
                        $record = mysqli_fetch_assoc( $result );
                        
                        $_SESSION['id'] = $record['id'];
                        $_SESSION['email'] = $record['email'];
                        
                        header( 'Location: dashboard.php' );
                        die();
                        
                      }
                      else
                      {
                        echo '<div class="alert alert-danger" role="alert">Incorrect email and/or password</div>';
                      } 
                      
                    }

                    ?>

                    <div style="max-width: 400px; margin:auto">
                      <form method="post">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                      </form>
                      <div class="text-center mt-3">
                        <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
