<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}
?>

<html>
<head>
    <title>Update Student Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h2 class="class display-6 text-center my-3">Update Student Information</h2>

    <?php

    include "db.php";

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM students WHERE id=$id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    }

    ?>

    <div class="container-fluid">
        <div class="row justify-contents-center">
            <div class="col-1"></div>
            <div class="col-10">
                <div class="m-3 p-3 rounded border border-2 bg-white shadow-sm">
                    <form action="update.php?id=<?php echo $row['id']; ?>" method="POST">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>" required>
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>" required>
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" name="phone" value="<?php echo $row['phone']; ?>" required>
                    <label for="course" class="form-label">Course</label>
                    <select name="course" class="form-select">
                        <option selected><?php echo $row['course']; ?></option>
                        <option value="SECJH">SECJH</option>
                        <option value="SECRH">SECRH</option>
                        <option value="SECPH">SECPH</option>
                        <option value="SECBH">SECBH</option>
                        <option value="SECVH">SECVH</option>
                    </select>
                    <br>
                    <div class="d-grid gap-2 col-2 mx-auto">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>

                    <?php
                        if($_SERVER["REQUEST_METHOD"] == "POST"){
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $phone = $_POST['phone'];
                            $course = $_POST['course'];

                        $sql = "UPDATE students SET name='$name', email='$email', phone='$phone', course='$course' WHERE id=$id";

                        if (mysqli_query($conn, $sql)){
                            echo "<br><p class='lead text-sm text-center'>New record created successfully</p>";
                        }else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }
                        }
                    ?>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
    
    <br>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-1"></div>
            <div class="col-10">
                <div class="d-grid gap-2 col-1 mx-auto">
                    <a href="index.php" class="href class btn btn-secondary">Back</a>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>