<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM topup WHERE id = $id");
$data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Top Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Data Top Up</h2>
        <div class="card">
            <div class="card-body">
                <form action="proses.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                    <div class="mb-3">
                        <label>User ID</label>
                        <input type="text" name="user_id" class="form-control" value="<?php echo $data['user_id']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label>Game</label>
                        <select name="game" class="form-control" required>
                            <option value="Mobile Legends" <?php if($data['game'] == 'Mobile Legends') echo 'selected'; ?>>Mobile Legends</option>
                            <option value="PUBG Mobile" <?php if($data['game'] == 'PUBG Mobile') echo 'selected'; ?>>PUBG Mobile</option>
                            <option value="Free Fire" <?php if($data['game'] == 'Free Fire') echo 'selected'; ?>>Free Fire</option>
                            <option value="Genshin Impact" <?php if($data['game'] == 'Genshin Impact') echo 'selected'; ?>>Genshin Impact</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Status</label>
                        <select name="status" class="form-control" required>
                            <option value="Pending" <?php if($data['status'] == 'Pending') echo 'selected'; ?>>Pending</option>
                            <option value="Success" <?php if($data['status'] == 'Success') echo 'selected'; ?>>Success</option>
                            <option value="Failed" <?php if($data['status'] == 'Failed') echo 'selected'; ?>>Failed</option>
                        </select>
                    </div>
                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                    <a href="index.php" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>