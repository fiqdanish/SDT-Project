<html>
    <head>
        <title>Register</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

    <body>
        <h2 class="class display-6 my-3 text-center">Register</h2>
        <div class="container-fluid">
            <div class="row justify-item-center">
                <div class="col-3"></div>
                <div class="col-6">
                    <div class="m-3 p-3 rounded border border-2 shadow-sm">
                        <form action="register.php" method="POST">
                            <label for="name">Username</label><br>
                            <input type="text" class="form-control" name="username" required><br>
                            <label for="password">Password</label><br>
                            <input type="password" class="form-control" name="password" required><br>
                            <div class="d-grid gap-2 col-2 mx-auto">
                                <button type="submit" class="btn btn-primary" value="Register">Register</button>
                            </div>
                        </form>
                        <a href="login.php" class="text-center text-decoration-none">Already have an account? Login here</a>
                    </div>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>

<?php

include "db.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = mysqli_real_escape_string($conn, $_POST['username']); // Get the username value from the from
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Get the password value from the from

    $sql = "INSERT INTO users_reg (username, password) VALUES ('$username', '$password')";

    if(mysqli_query($conn, $sql)){
        echo "<p class='lead text-center text-sm'>New record created successfully</p>";
    } else {
        echo "Error: ". $sql . "<br>" . mysqli_error($conn);
    }
}

?>