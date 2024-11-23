<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Riwayat Top Up - JIVIN S</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #1a1a2e, #16213e, #1a1a2e);
            color: #fff;
            min-height: 100vh;
        }
        
        .container {
            padding-bottom: 50px;
        }
        
        .table {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            color: #fff;
        }
        
        .table thead th {
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            font-weight: 600;
            border-color: rgba(255, 255, 255, 0.2);
        }
        
        .table td {
            border-color: rgba(255, 255, 255, 0.1);
        }
        
        .btn-warning, .btn-danger {
            border: none;
            padding: 5px 15px;
            margin: 2px;
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>
    
    <div class="container mt-5">
        <h2 class="text-center mb-4">Riwayat Top Up</h2>
        
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>User ID</th>
                        <th>Game</th>
                        <th>Nominal</th>
                        <th>Metode Pembayaran</th>
                        <th>Status</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM topup ORDER BY tanggal DESC");
                    $no = 1;
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['user_id']; ?></td>
                        <td><?php echo $data['game']; ?></td>
                        <td>Rp <?php echo number_format($data['nominal']); ?></td>
                        <td><?php echo $data['metode_pembayaran']; ?></td>
                        <td><?php echo $data['status']; ?></td>
                        <td><?php echo $data['tanggal']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="proses.php?action=delete&id=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>