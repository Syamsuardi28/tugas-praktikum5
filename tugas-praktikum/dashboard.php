<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Dashboard</h1>
        <div class="user-info">Hi, <?php echo $username; ?></div>
    </header>

    <div class="container">
        <aside class="sidebar">
            <ul>
                <li><a href="dashboard.php" class="active">Dashboard</a></li>
                <li><a href="makanan.php">Makanan Khas</a></li>
                <li><a href="logout.php">Keluar</a></li>
            </ul>
        </aside>

        <main class="content">
            <h2>Selamat Datang, <?php echo $username; ?>!</h2>
            <p>Anda telah berhasil login ke sistem.</p>
        </main>
    </div>

    <footer>
        <p>Copyright &copy; 2025</p>
    </footer>
</body>
</html>
