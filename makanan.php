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
    <title>Makanan Khas</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Makanan Khas</h1>
        <div class="user-info">Hi, <?php echo $username; ?></div>
    </header>

    <div class="container">
        <aside class="sidebar">
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="makanan.php" class="active">Makanan Khas</a></li>
                <li><a href="logout.php">Keluar</a></li>
            </ul>
        </aside>

        <section class="content">
        <h1>Daftar Makanan Khas Sulawesi Selatan</h1>
        <table id="food-table">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Makanan</th>
              <th>Gambar</th>
              <th>Deskripsi</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Coto Makassar</td>
              <td>
                <img
                  src="assets/Coto_Makassar.png"
                  alt="Coto Makassar"
                  width="100"
                />
              </td>
              <td>
                Hidangan sup tradisional khas Makassar, terbuat dari daging sapi
                dan rempah khas.
              </td>
              <td>
                <button class="edit-btn" onclick="editRow(this)">Edit</button>
                <button class="delete-btn" onclick="deleteRow(this)">
                  Hapus
                </button>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Pallubasa</td>
              <td>
                <img
                  src="assets/Palubasa.png"
                  alt="Pallubasa"
                  width="100"
                />
              </td>
              <td>
                Makanan khas Makassar, mirip dengan Coto Makassar namun dengan
                tambahan kelapa parut.
              </td>
              <td>
                <button class="edit-btn" onclick="editRow(this)">Edit</button>
                <button class="delete-btn" onclick="deleteRow(this)">
                  Hapus
                </button>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>Pisang Ijo</td>
              <td>
                <img
                  src="assets/Pisang_ijo.png"
                  alt="Pisang Ijo"
                  width="100"
                />
              </td>
              <td>
                Hidangan penutup berbahan dasar pisang yang dibalut dengan
                adonan tepung berwarna hijau.
              </td>
              <td>
                <button class="edit-btn" onclick="editRow(this)">Edit</button>
                <button class="delete-btn" onclick="deleteRow(this)">
                  Hapus
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </section>
    </div>

    <footer>
        <p>Copyright &copy; 2025</p>
    </footer>
</body>
</html>
