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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <h2>Form Login</h2>
    <form action="" method="post">
        Username : <input type="text" name="username" required><br><br>
        Password : <input type="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
    
</body>
</html>