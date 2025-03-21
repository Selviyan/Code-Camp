
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - CodeCamp</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="register-container">
        <div class="register-image">
            <img src="ngoding.jpg" alt="Background Image">
        </div>
        <div class="register-form">
            <div class="form-box">
                <div class="logo">
                    <img src="logo codecamp.png" alt="Logo">
                </div>
                <h2>Create an Account</h2>
                <p>Fill in the details below to register</p>
                <form>
                    <div class="input-group">
                        <label for="fullname">Nama Lengkap</label>
                        <input type="text" id="fullname" name="fullname" required>
                    </div>
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="input-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" required>
                    </div>
                    <div class="input-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div class="input-group">
                        <label for="confirm-password">Konfirmasi Password</label>
                        <input type="password" id="confirm-password" name="confirm-password" required>
                    </div>
                    <button type="submit">Daftar</button>
                    <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>