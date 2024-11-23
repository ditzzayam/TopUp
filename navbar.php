<nav class="navbar navbar-expand-lg navbar-dark" style="background: rgba(0, 0, 0, 0.3); backdrop-filter: blur(10px);">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index.php">🎮 IAIN'S</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'topup.php') ? 'active' : ''; ?>" href="topup.php">Top Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'riwayat.php') ? 'active' : ''; ?>" href="riwayat.php">Riwayat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'tentang.php') ? 'active' : ''; ?>" href="tentang.php">Tentang</a>
                </li>
            </ul>
        </div>
    </div>
</nav>