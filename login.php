<?php
session_start();

// Simulasi data pengguna
$users = [
    ['username' => 'admin', 'password' => 'admin123'],
    ['username' => 'user', 'password' => 'user123']
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validasi pengguna
    foreach ($users as $user) {
        if ($user['username'] === $username && $user['password'] === $password) {
            $_SESSION['username'] = $username;
            echo "Welcome, $username!";
            exit;
        }
    }
    echo "Invalid username or password.";
} else {
    echo "Invalid request.";
}
?>
