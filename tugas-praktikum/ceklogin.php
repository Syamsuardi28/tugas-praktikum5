<?php
session_start();

$users = [
    "Admin" => "pass@admiN1",
    "Anita" => "pass@anitA2",
    "Sapta" => "pass@saptA3",
    "Syam"  => "pass@syam4" 
];

$username = trim($_POST['username']);
$password = trim($_POST['password']);

if (isset($users[$username])) {
    if ($users[$username] == $password) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
    } else {
        $_SESSION['error'] = "Password yang dimasukkan salah";
        header("Location: index.php");
    }
} else {
    $_SESSION['error'] = "Username tidak terdaftar";
    header("Location: index.php");
}
exit;
?>
