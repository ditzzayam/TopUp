<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>IAIN'S - Top Up Game</title>
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
        
        .hero-section {
            text-align: center;
            padding: 60px 0;
            margin-bottom: 40px;
            background: rgba(0, 0, 0, 0.2);
            border-radius: 15px;
        }
        
        .hero-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 20px;
            text-shadow: 0 0 10px rgba(255,255,255,0.3);
        }
        
        .hero-subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
        }
        
        .game-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
        }
        
        .game-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        }
        
        .game-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .game-content {
            padding: 20px;
        }
        
        .game-title {
            font-size: 1.4rem;
            font-weight: bold;
            margin-bottom: 10px;
            color: #fff;
        }
        
        .game-description {
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.9rem;
            margin-bottom: 20px;
        }
        
        .btn-topup {
            background: linear-gradient(45deg, #ff6b6b, #ff8e53);
            border: none;
            padding: 10px 30px;
            font-weight: bold;
            width: 100%;
            transition: all 0.3s ease;
        }
        
        .btn-topup:hover {
            background: linear-gradient(45deg, #ff8e53, #ff6b6b);
            transform: scale(1.05);
        }
        
        .game-price {
            font-size: 0.9rem;
            color: #ffd700;
            margin-bottom: 15px;
        }
        
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>
    
    <div class="container mt-4">
        <!-- Hero Section -->
        <div class="hero-section">
            <h1 class="hero-title">🎮 Welcome to IAIN'S Store 🎮</h1>
            <p class="hero-subtitle">Top up game favoritmu dengan mudah, aman, dan terpercaya</p>
        </div>
        
        <!-- Game Grid -->
        <div class="row g-4">
            <!-- Mobile Legends -->
            <div class="col-md-6 col-lg-3">
                <div class="game-card">
                    <img src="img/MOLE.png" alt="Mobile Legends" class="game-image">
                    <div class="game-content">
                        <h3 class="game-title">Mobile Legends</h3>
                        <p class="game-description">
                            MOBA game populer dengan pertempuran 5v5. Top up diamonds untuk mendapatkan skin dan hero terbaru.
                        </p>
                        <div class="game-price">
                            💎 Mulai dari Rp 10.000
                        </div>
                        <a href="topup.php" class="btn btn-topup">Top Up Now!</a>
                    </div>
                </div>
            </div>
            
            <!-- Free Fire -->
            <div class="col-md-6 col-lg-3">
                <div class="game-card">
                    <img src="img/epep.png" alt="Free Fire" class="game-image">
                    <div class="game-content">
                        <h3 class="game-title">Free Fire</h3>
                        <p class="game-description">
                            Battle royale game dengan 50 pemain. Dapatkan diamonds untuk skin senjata dan karakter eksklusif.
                        </p>
                        <div class="game-price">
                            💎 Mulai dari Rp 10.000
                        </div>
                        <a href="topup.php" class="btn btn-topup">Top Up Now!</a>
                    </div>
                </div>
            </div>
            
            <!-- PUBG Mobile -->
            <div class="col-md-6 col-lg-3">
                <div class="game-card">
                    <img src="img/PUBG.png" alt="PUBG Mobile" class="game-image">
                    <div class="game-content">
                        <h3 class="game-title">PUBG Mobile</h3>
                        <p class="game-description">
                            Battle royale realistis. Top up UC untuk membeli skin, emote, dan battle pass terbaru.
                        </p>
                        <div class="game-price">
                            💎 Mulai dari Rp 10.000
                        </div>
                        <a href="topup.php" class="btn btn-topup">Top Up Now!</a>
                    </div>
                </div>
            </div>
            
            <!-- Genshin Impact -->
            <div class="col-md-6 col-lg-3">
                <div class="game-card">
                    <img src="img/genshin.png" alt="Genshin Impact" class="game-image">
                    <div class="game-content">
                        <h3 class="game-title">Genshin Impact</h3>
                        <p class="game-description">
                            Open world RPG dengan grafis memukau. Top up Genesis Crystals untuk Wish karakter dan senjata.
                        </p>
                        <div class="game-price">
                            💎 Mulai dari Rp 10.000
                        </div>
                        <a href="topup.php" class="btn btn-topup">Top Up Now!</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Info Section -->
        <div class="row mt-5">
            <div class="col-12 text-center">
                <h2 class="mb-4">Mengapa Memilih IAIN'S? 🤔</h2>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="game-card">
                            <div class="game-content">
                                <h4>⚡ Proses Cepat</h4>
                                <p>Top up instan, langsung masuk ke akun game Anda</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="game-card">
                            <div class="game-content">
                                <h4>🔒 Aman & Terpercaya</h4>
                                <p>Transaksi aman dengan berbagai metode pembayaran</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="game-card">
                            <div class="game-content">
                                <h4>💫 Harga Terbaik</h4>
                                <p>Dapatkan harga termurah untuk semua game</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>