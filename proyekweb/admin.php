<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Admin - kelompok 11</title>
    <link rel="stylesheet" href="../assets/css/styleadmin.css" /> 
</head>
<body>

<div class="admin-header">
    <h1>Dashboard Admin</h1>
    <a href="#" class="logout-btn">Logout</a>
</div>

<div class="admin-main">
    <aside class="sidebar">
        <p>Halo, Admin!</p>
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Kelola Menu</a></li>
            <li><a href="#">Pesanan</a></li>
            <li><a href="#">Pengaturan</a></li>
        </ul>
    </aside>

    <div class="content">
        <h2>Kelola Menu Makanan</h2>
        
        <div class="add-menu-form">
            <h3>Tambahkan Menu Baru</h3>
            <form action="#" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nama_menu">Nama Makanan</label>
                    <input type="text" id="nama_menu" name="nama_menu" required />
                </div>
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <input type="text" id="kategori" name="kategori" required />
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" id="harga" name="harga" required />
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar Makanan</label>
                    <input type="file" id="gambar" name="gambar" required />
                </div>
                <button type="submit" class="btn-add">Tambahkan Menu</button>
            </form>
        </div>

        <hr style="margin: 40px 0;">

        <div class="menu-list">
            <h3>Daftar Menu Saat Ini</h3>
            <table>
                <thead>
                    <tr>
                        <th>Gambar</th>
                        <th>Nama</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="assets/images/makanan.jpg" alt="Rendang" class="table-img" /></td>
                        <td>Rendang Daging</td>
                        <td>Lauk</td>
                        <td>Rp100.000</td>
                        <td>
                            <a href="#">Edit</a> |
                            <a href="#">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="assets/images/makanan.jpg" alt="Sate" class="table-img" /></td>
                        <td>Sate Padang</td>
                        <td>Lauk</td>
                        <td>Rp80.000</td>
                        <td>
                            <a href="#">Edit</a> |
                            <a href="#">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>