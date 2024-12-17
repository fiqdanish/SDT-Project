<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="/login" method="POST" class="container mt-5">
        <h2>Login</h2>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="passsword" required>
        </div>
    
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
    <br>
    <a href="/register">Do not have account yet? Register here</a>
</body>
</html>
