<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <?php include('reusables/nav.php') ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="display-5 mt-4 mb-4">User List</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="dashboard.php" class="btn btn-primary mb-4">Back</a>
            </div>
        </div>       
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Sr.No</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $connect = mysqli_connect('localhost','root','root','quotes_database');
                            $query = "SELECT * FROM users";
                            $users = mysqli_query($connect, $query);

                            if(mysqli_connect_error()){
                                die("Connection error: " . mysqli_connect_error());
                            }

                            foreach ($users as $user) {
                                echo '<tr>
                                        <td>' . $user['id'] . '</td>
                                        <td>' . $user['fname'] . '</td>
                                        <td>' . $user['lname'] . '</td>
                                        <td>' . $user['email'] . '</td>
                                        <td>
                                            <a href="updateuser.php?id=' . $user['id'] . '" class="btn btn-primary">Edit</a>
                                            <a href="includes/deleteuser.php?id=' . $user['id'] . '" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>';
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
