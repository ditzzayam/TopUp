<!DOCTYPE html>
<html>
<head>
    <title>Top Up Game</title>
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
        
        h2, h3 {
            color: #fff;
            text-align: center;
            margin: 30px 0;
            text-shadow: 0 0 10px rgba(255,255,255,0.3);
            font-weight: bold;
        }
        
        .card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        }
        
        .card-body {
            padding: 30px;
        }
        
        .form-control {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #fff;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            background: rgba(255, 255, 255, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.5);
            box-shadow: 0 0 15px rgba(255,255,255,0.2);
            color: #fff;
        }
        
        .form-control option {
            background: #16213e;
            color: #fff;
        }
        
        label {
            color: #fff;
            margin-bottom: 8px;
            font-weight: 500;
        }
        
        .btn-primary {
            background: linear-gradient(45deg, #ff6b6b, #ff8e53);
            border: none;
            padding: 10px 30px;
            font-weight: bold;
            box-shadow: 0 4px 15px rgba(255,107,107,0.3);
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255,107,107,0.4);
            background: linear-gradient(45deg, #ff8e53, #ff6b6b);
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
        
        .btn-warning {
            background: linear-gradient(45deg, #ffd32a, #ff9f1a);
            border: none;
            color: #1a1a2e;
            font-weight: 600;
        }
        
        .btn-danger {
            background: linear-gradient(45deg, #ff4757, #ff6b81);
            border: none;
        }
        
        .btn-sm {
            margin: 2px;
            padding: 5px 15px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark" style="
    background: rgba(26, 26, 46, 0.8);
    backdrop-filter: blur(10px);
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#" style="
            background: linear-gradient(45deg, #ff6b6b, #ff8e53);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-size: 24px;">
            JIVIN S
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Games</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Top Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">History</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<style>
.navbar .nav-link {
    color: rgba(255, 255, 255, 0.8) !important;
    font-weight: 500;
    padding: 8px 16px !important;
    transition: all 0.3s ease;
    position: relative;
}

.navbar .nav-link:hover {
    color: #fff !important;
}

.navbar .nav-link::after {
    content: '';
    position: absolute;
    width: 0;
    height: 2px;
    bottom: 0;
    left: 50%;
    background: linear-gradient(45deg, #ff6b6b, #ff8e53);
    transition: all 0.3s ease;
    transform: translateX(-50%);
}

.navbar .nav-link:hover::after {
    width: 80%;
}

.navbar .nav-link.active {
    color: #fff !important;
}

.navbar .nav-link.active::after {
    width: 80%;
}

@media (max-width: 991px) {
    .navbar-collapse {
        background: rgba(26, 26, 46, 0.95);
        backdrop-filter: blur(10px);
        padding: 1rem;
        border-radius: 10px;
        margin-top: 10px;
    }
}
</style>
    
    <?php
    include 'koneksi.php';
    ?>
    
    <div class="container mt-5">
        <h2>🎮 JIVIN S 🎮</h2>
        
        <!-- Form Input -->
        <div class="card mb-4">
            <div class="card-body">
                <form action="proses.php" method="POST">
                    <div class="mb-3">
                        <label>🎯 User ID</label>
                        <input type="number" name="user_id" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>🎮 Game</label>
                        <select name="game" class="form-control" required>
                            <option value="Mobile Legends">Mobile Legends</option>
                            <option value="PUBG Mobile">PUBG Mobile</option>
                            <option value="Free Fire">Free Fire</option>
                            <option value="Genshin Impact">Genshin Impact</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>💎 Nominal Top Up</label>
                        <select name="nominal" class="form-control" required>
                            <option value="10000">10.000 (10 Diamonds)</option>
                            <option value="20000">20.000 (20 Diamonds)</option>
                            <option value="50000">50.000 (50 Diamonds)</option>
                            <option value="100000">100.000 (100 Diamonds)</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>💳 Metode Pembayaran</label>
                        <select name="metode_pembayaran" class="form-control" required>
                            <option value="DANA">DANA</option>
                            <option value="OVO">OVO</option>
                            <option value="Gopay">Gopay</option>
                            <option value="Bank Transfer">Bank Transfer</option>
                        </select>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Top Up Now!</button>
                </form>
            </div>
        </div>

        <!-- Tabel Riwayat -->
        <h3>📝 Riwayat Top Up</h3>
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