<?php
include 'koneksi.php';

// Proses tambah data
if(isset($_POST['submit'])) {
    $user_id = $_POST['user_id'];
    $game = $_POST['game'];
    $nominal = $_POST['nominal'];
    $metode_pembayaran = $_POST['metode_pembayaran'];
    
    $query = "INSERT INTO topup (user_id, game, nominal, metode_pembayaran) 
              VALUES ('$user_id', '$game', '$nominal', '$metode_pembayaran')";
    
    if(mysqli_query($koneksi, $query)) {
        header("Location: index.php");
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}

// Proses update data
if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $user_id = $_POST['user_id'];
    $game = $_POST['game'];
    $status = $_POST['status'];
    
    $query = "UPDATE topup SET 
              user_id = '$user_id',
              game = '$game',
              status = '$status'
              WHERE id = $id";
    
    if(mysqli_query($koneksi, $query)) {
        header("Location: index.php");
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}

// Proses delete data
if(isset($_GET['action']) && $_GET['action'] == 'delete') {
    $id = $_GET['id'];
    
    $query = "DELETE FROM topup WHERE id = $id";
    
    if(mysqli_query($koneksi, $query)) {
        header("Location: index.php");
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>