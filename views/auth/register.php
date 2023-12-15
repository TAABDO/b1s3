<?php include __DIR__.'/../layouts/header.php'; 

?>
<h2>Register</h2>
<!-- TODO: Add registration form with input fields for username, password, etc. -->
<!-- Add Bootstrap form classes as needed -->
<form method="post" action="../../controllers/auth/register.php">
    <div class="form-group">
        <label for="nom">nom:</label>
        <input type="text" class="form-control" name="nom" id="nom" required>
    </div>
    <div class="form-group">
        <label for="email">email:</label>
        <input type="text" class="form-control" name="email" id="" required>
    </div>
    
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" name="password" id="password" required>
    </div>
    <div class="form-group">
        <label for="adresse">adresse:</label>
        <input type="text" class="form-control" name="adresse" id="adresse" required>
    </div>
    <!-- Add other registration fields as needed -->
    <button type="submit" name="submit" class="btn btn-success">Register</button>
</form>

<?php include __DIR__.'/../layouts/footer.php'; ?>
