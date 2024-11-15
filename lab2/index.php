<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}
?>

<html>
<head>
    <title>Students List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid my-3 mx-3">
        <div class="row">
            <div class="col-5">
                <h1 class="class display-6">Welcome, <?php echo $_SESSION['username']; ?>!</h1>
            </div>
            <div class="col-6"></div>
            <div class="col-1"><a href="logout.php" class="href btn btn-danger">Logout</a></div>
        </div>
    </div>
    <p class="lead text-center fw-bold">Student Lists</p>
    <div class="m-3 p-3 rounded border border-2 shadow-sm">
        <table class="table table-hover table-striped">
            <thead class="table-dark">
                <tr class="text-center">
                    <td>ID</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Phone</td>
                    <td>Course</td>
                    <td>Edit</td>
                    <td>Delete</td>
            </thead>

            <tbody class="table-group-divider">      
                <?php
                include "db.php"; // Using database connection file here

                $sql = "SELECT * FROM students";
                $result = mysqli_query($conn, $sql); 

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<tr>";
                        echo "<td class=text-center>". $row['id']. "</td>";
                        echo "<td class=text-center>".$row['name']."</td>";
                        echo "<td class=text-center>".$row['email']."</td>";
                        echo "<td class=text-center>".$row['phone']."</td>";
                        echo "<td class=text-center>".$row['course']."</td>";
                        echo "<td> <div class=d-grid gap-2 col-1 mx-auto><a href='update.php?id=". $row['id']. "' class='btn btn-secondary'> Edit </a> </div></td>";
                        echo "<td> <div class=d-grid gap-2 col-1 mx-auto><a href='delete.php?id=". $row['id']. "' class='btn btn-danger' > Delete </a> </div></td>";
                        echo "</tr>";
                    }
                }
                else{
                    echo "<tr><td colspan='7'> No Data Found </td><tr>";
                }

                ?>
            </tbody> 
        </table>
    </div>

    <div class="d-grid gap-2 col-1 mx-auto">
        <a href="add.php" class="href class btn btn-success px-4">Add</a>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>