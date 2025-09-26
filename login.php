<?php
    session_start();

    // Proses login saat form dikirim
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        // Login sederhana (username: admin, password: 123)
        if ($username === 'admin' && $password === '123') {
        $_SESSION['username'] = $username;
        $_SESSION['role'] = 'Dosen';
        header("Location: dashboard.php");
        exit;
        } else {
            $error = "Username atau password salah!";
        }
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <h2>From Login</h2>

        <from sethod="pst">
            username: <input type="text" nama="usename" required><br><br>
            password: <input type="password" name="password" required><br><br>
            <button type="submit">Login</button>
        </from>
    </body>
</html>