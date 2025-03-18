
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <div class="login-image">
            <img src="ngoding.jpg" alt="Background Image">
        </div>
        <div class="login-form">
            <div class="logo-login">
                <img src="logo codecamp.png" alt="Logo">
            </div>
            <h2>Log in to your Account</h2>
            <p>Masukkan Email & Password Anda</p>
            <form>
                <div class="input-group">
                    <label for="email">Email / Username</label>
                    <input type="text" id="email" name="email" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit">Log In</button>
                <p><a href="#">Lupa Password?</a></p>
                <p>Belum punya akun? <a href="register.php">Daftar sekarang</a></p>
            </form>
        </div>
    </div>
</body>
</html>