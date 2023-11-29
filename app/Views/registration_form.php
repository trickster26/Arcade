<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>
    <h2>User Registration</h2>
    <?php echo validation_errors(); ?>
    
    <?php echo form_open('register/register_user'); ?>
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        <br>

        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <br>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" name="confirm_password" required>
        <br>

        <input type="submit" value="Register">
    <?php echo form_close(); ?>
</body>
</html>
