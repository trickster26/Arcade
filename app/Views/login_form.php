<!-- login_view.php -->
<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
</head>
<body>
    <h2>User Login</h2>

    <?php if(session()->has('errors')) : ?>
        <div>
            <?= session('errors') ?>
        </div>
    <?php endif; ?>
<form action="" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        <br>

        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <br>

        <input type="submit" value="Login">
    </form>
</body>
</html>
