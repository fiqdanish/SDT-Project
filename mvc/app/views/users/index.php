
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<nav class="navbar fixed-top navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand h1 mb-0" href="#">
        UTM
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="/">Home</a>
        <a class="nav-link" href="/create">Add Users</a>
        <a class="nav-link" href="/member">Apply for members</a>
        <a class="nav-link" href="/logout">Logout</a>
      </div>
    </div>
  </div>
</nav>
<br><br><br>
<p class="lead text-center fw-bold my-3">User Lists</p>
<div class="m-4 p-3 rounded border border-2 shadow-sm">
    <table class="table table-hover table-striped">
        <thead class="table-dark">
            <tr class = "text-center">
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
    
        <tbody class="table-group-divider">
            <?php foreach ($users as $user): ?>
                <tr>
                    <td class="text-center"><?= $user['name']; ?></td>
                    <td class="text-center"><?= $user['email']; ?></td>
                    <td>
                        <div class="d-grid-gap-2 col-4 mx-auto">
                            <a href="/edit/<?= $user['id']; ?>" class="href class btn btn-success px-4">Edit</a>
                            <form action="/delete/<?= $user['id']; ?>" method="POST" style="display:inline;">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>  
        </tbody>  
    </table>
</div>

<div class="d-grid gap-2 col-1 mx-auto"><a href="/create" class=" btn btn-secondary">Add User</a></div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

