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
        <form action="register_process.php" method="POST">
    <h2>Register</h2>
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
    <div class="input-box">
        <span class="icon"><ion-icon name="people"></ion-icon></span>
        <select id="role" name="role" required>
            <option value="" disabled selected>Pilih Role</option>
            <option value="Admin">Admin</option>
            <option value="Kasir">Kasir</option>
        </select>
    </div>
    <button type="submit">Register</button>
    <div class="login-link">
        <br>
        <p>sudah ada akun <a href="login.php">Login di sini</a></p>
    </div>
</form>

        </div>
    </section>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>


