<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'kontak_saran';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nama = trim($_POST['nama']);
    $email = trim($_POST['email']);
    $komentar = trim($_POST['komentar']);


    if (empty($nama) || empty($email) || empty($komentar)) {
        echo "Semua kolom harus diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Format email tidak valid.";
    } else {

        $stmt = $conn->prepare("INSERT INTO saran (nama, email, komentar) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nama, $email, $komentar);

        if ($stmt->execute()) {
            header("Location: index.php?page=hubungi&status=success");
            exit;

        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    }

    $conn->close();
} else {
    echo "Form belum dikirim.";
}
?>
