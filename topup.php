<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Top Up Game - JIVIN S</title>
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
        
        .card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        }
        
        .form-control {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #fff;
        }
        
        .form-control:focus {
            background: rgba(255, 255, 255, 0.15);
            color: #fff;
        }
        
        .form-control option {
            background: #16213e;
            color: #fff;
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>
    
    <div class="container mt-5">
        <h2 class="text-center mb-4">Top Up Game</h2>
        
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
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
                            <button type="submit" name="submit" class="btn btn-primary w-100">Top Up Now!</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>