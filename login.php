<?php
    include_once('templates/header.php');
    include_once('templates/navbar.php');
?> 
<div class="container">
    <div class="mx-auto col-12 col-md-6 my-2 my-md-5">
        <h1 class="text-center">Login Page</h1>
        <form action="proses_pembayaran.php" method="post">
            <div>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" class="form-control" required>
            </div>   
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>  
            <div class="mt-2 d-grid gap-2">
                <button type="submit" class="btn btn-success">Login</button>
            </div>
        </form>
    </div>
</div>
<?php
    include_once('templates/footer.php');
?>
