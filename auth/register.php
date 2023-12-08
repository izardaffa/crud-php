<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <style>
        label, input {
            display: block;
        }

        .button-group {
            margin-top: 1rem;
        }
    </style>
</head>
<body>
    <form action="proses-register.php" method="post">
        <div class="input-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Masukkan nama" required>
        </div>

        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Masukkan email" required>
        </div>

        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Masukkan password" required>
        </div>

        <div class="button-group">
            <button type="reset">Reset</button>
            <button type="submit">Register</button>
        </div>

        <p>Sudah punya akun? <a href="login.php">Login</a></p>
    </form>
</body>
</html>