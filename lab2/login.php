<html>
    <head>
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <h2 class="class display-6 text-center my-3">Login</h2>
        <div class="container-fluid">
            <div class="row justify-item-center">
                <div class="col-3"></div>
                <div class="col-6">
                    <div class="m-3 p-3 rounded border border-2 shadow-sm">
                        <form action="login.php" method="POST">
                            <label for="username">Username</label><br>
                            <input type="text" class="form-control" name="username" required><br>
                            <label for="password">Password</label><br>
                            <input type="password" class="form-control" name="password" required><br>
                            <div class="d-grid gap-2 col-2 mx-auto">
                                <button type="submit" class="btn btn-primary" value="Login">Login</button>
                            </div> 
                        </form>
                        <a href="register.php" class="text-center text-decoration-none">Dont have an account yet? Register here</a>
                    </div>
                </div>
                <div class="col-3"></div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>

<?php
session_start(); // starting session
include "db.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){ // check if form is submitted
    $username = mysqli_real_escape_string($conn, $_POST['username']); // get the username value from the form
    $password = $_POST['password']; // get the password value from the form

    $sql = "SELECT * FROM users_reg WHERE username='$username'"; // query the databse for user
    $result = mysqli_query($conn, $sql); // run the query
    
    if(mysqli_num_rows($result) == 1){ //check if user exists
        while($row = mysqli_fetch_assoc($result)){ // get the data from database
            if(password_verify($password, $row["password"])){ // check if the password matches
                $_SESSION['username']=$username; // set the session variable
                header("Location: index.php"); // redirect to the home page
            }else{ //if the password doesnt match
                echo "<p class='lead text-sm text-center'>Invalid username or password</p>";
            }
        }
    }else{ //if the user doesnt exists
        echo "<p class='lead text-sm text-center'>No user found with that username</p>";
    }
}