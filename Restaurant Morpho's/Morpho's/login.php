<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Morphos Restoran</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
        <div class="login-box">
        <form action="login_process.php" method="POST">
    <h2>Login</h2>
    <div class="input-box">
        <span class="icon"><ion-icon name="person"></ion-icon></span>
        <input type="text" id="username" name="username" required>
        <label for="username">Username</label>
    </div>
    <div class="input-box">
        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
        <input type="password" id="password" name="password" required>
        <label for="password">Password</label>
    </div>
    <div class="remember-forget">
        <label><input type="checkbox" name="remember"> Remember me</label>
        <a href="forgot-password.html">Forgot password?</a>
    </div>
    <button type="submit">Login</button>
    <div class="register-link">
        <p>Don't have an account? <a href="register.php">Register</a></p>
    </div>
</form>

        </div>
    </section>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
