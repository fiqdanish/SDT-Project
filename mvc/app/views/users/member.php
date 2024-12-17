<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply for membership</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
<form method="POST" action="/member">
    <label for="name">Name</label><br>
    <input type="text" id="name" name="name" required><br><br>
    
    <label for="email">Email</label><br>
    <input type="email" id="email" name="email" required><br><br>
    
    <label for="phone">Phone</label><br>
    <input type="text" id="phone" name="phone"><br><br>

    <label for="address">Address</label><br>
    <textarea id="address" name="address" required></textarea><br><br>

    <label for="payment">Payment of RM50</label><br>
    <input type="checkbox" id="payment" name="payment" required>
    <label for="payment">I have paid the RM50 membership fee</label><br><br>

    <button type="submit">Submit Application</button>
</form>
</body>

</html>
