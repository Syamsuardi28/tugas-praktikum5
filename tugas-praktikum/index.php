<?php
session_start();
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Website</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Website Session & Cookie</h1>
    </header>

    <main>
        <section class="login-box">
            <h2>Login</h2>
            <form method="post" action="ceklogin.php">
                <label>Username</label><br>
                <input type="text" name="username" required><br><br>

                <label>Password</label><br>
                <input type="password" name="password" required><br><br>

                <input type="submit" value="Login">
            </form>

            <?php
            if (isset($_SESSION['error'])) {
                echo "<p class='error'>" . $_SESSION['error'] . "</p>";
                unset($_SESSION['error']);
            }
            ?>
        </section>
    </main>

    <footer>
        <p>Copyright &copy; 2025 - Praktikum Session & Cookie</p>
    </footer>
</body>
</html>
