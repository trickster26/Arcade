<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
</head>
<body>
    <h2>User Login</h2>
    <?php echo validation_errors(); ?>
    
    <?php echo form_open('login/login_user'); ?>
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        <br>

        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <br>

        <input type="submit" value="Login">
    <?php echo form_close(); ?>
</body>
</html>
