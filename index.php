<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
// Menentukan halaman yang aktif
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>
<header>
    <nav class="navbar">
        <div class="logo">
            <img src="images/logosmp-removebg-preview.png">
            <div class="school-name">
                <h1>SMP NEGERI 5 MALANG</h1>
                <p>Krida Bhakti Satria Hanoraga</p>
            </div>
        </div>
        <ul class="nav-links">
            <li><a href="index.php?page=home" class="<?= ($page == 'home') ? 'active' : '' ?>">Beranda</a></li>
            <li class="dropdown">
                <a href="#">Profil</a>
                <ul class="dropdown-content">
                    <li><a href="index.php?page=sejarah" class="<?= ($page == 'sejarah') ? 'active' : '' ?>">Sejarah</a></li>
                    <li><a href="index.php?page=visimisi" class="<?= ($page == 'visimisi') ? 'active' : '' ?>">Visi & Misi</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">Informasi</a>
                <ul class="dropdown-content">
                    <li><a href="index.php?page=hubungi" class="<?= ($page == 'hubungi') ? 'active' : '' ?>">Kontak</a></li>
                    <li><a href="index.php?page=fasilitas" class="<?= ($page == 'fasilitas') ? 'active' : '' ?>">Fasilitas</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">Siswa</a>
                <ul class="dropdown-content">
                    <li><a href="index.php?page=osis" class="<?= ($page == 'osis') ? 'active' : '' ?>">OSIS</a></li>
                    <li><a href="index.php?page=ekstrakulikuler" class="<?= ($page == 'ekstrakulikuler') ? 'active' : '' ?>">Ekstrakulikuler</a></li>
                </ul>
            </li>
            <li><a href="index.php?page=galeri" class="<?= ($page == 'galeri') ? 'active' : '' ?>">Galeri</a></li>
            <li class="dropdown">
                <a href="#">Berita</a>
                <ul class="dropdown-content">
                    <li><a href="index.php?page=artikel" class="<?= ($page == 'artikel') ? 'active' : '' ?>">Artikel</a></li>
                    <li><a href="index.php?page=prestasi" class="<?= ($page == 'prestasi') ? 'active' : '' ?>">Prestasi</a></li>
                </ul>
            </li>

            <a href="index.php?page=guru" class="<?= ($page == 'guru') ? 'active' : '' ?>">Guru Pengajar</a>
    </nav>
</header>
<!-- Konten Utama -->
<div class="container">
    <?php
    // Menggunakan switch case untuk memuat halaman
    switch ($page) {
        case 'home':
            include 'pages/home.php';
            break;
        case 'sejarah':
            include 'pages/sejarah.php';
            break;
        case 'visimisi':
            include 'pages/visimisi.php';
            break;
        case 'hubungi':
            include 'pages/hubungi.php';
            break;
            case 'proses_kirim':
                include 'pages/proses_kirim.php';
                break;
        case 'fasilitas':
            include 'pages/fasilitas.php';
            break;
        case 'osis':
            include 'pages/osis.php';
            break;
        case 'ekstrakulikuler':
            include 'pages/ekstrakulikuler.php';
            break;
        case 'galeri':
            include 'pages/galeri.php';
            break;
        case 'artikel':
            include 'pages/artikel.php';
            break;
        case 'prestasi':
            include 'pages/prestasi.php';
            break;
        case 'guru':
            include 'pages/guru.php';
            break;
            case 'artikel1':
                include 'pages/artikel1.php';
                break;
                case 'artikel2':
                    include 'pages/artikel2.php';
                    break;
                    case 'artikel3':
                        include 'pages/artikel3.php';
                        break;
                        case 'artikel4':
                            include 'pages/artikel4.php';
                            break;
                            case 'artikel5':
                                include 'pages/artikel5.php';
                                break;
        default:
            echo "<p>Halaman tidak ditemukan!</p>";
            break;
    }
    ?>
</div>

<footer>
        <div class="footer-container">
            <div class="footer-logo">
                <img src="images/logosmp-removebg-preview.png">
            </div>
            <div class="footer-contact">
                <h2>SMP Negeri 5 Malang</h2>
                <p><i class="fas fa-phone"></i> 0341-482713</p>
                <p><i class="fas fa-envelope"></i> smpn5kotamalang@gmail.com</p>
                <p><i class="fas fa-map-marker-alt"></i> Jl. W.R Supratman No. 12, Malang, Jawa Timur, Indonesia</p>
            </div>
            <div class="footer-sitemap">
                <h2>Sitemap</h2>
                <ul>
                    <li>Beranda</li>
                    <li>Profil</li>
                    <li>Informasi</li>
                    <li>Siswa</li>
                    <li>Galeri</li>
                    <li>Berita</li>
                    <li>Manajemen</li>
                </ul>
                <a href="index.php?page=hubungi" class="contact-button<?= ($page == 'hubungi') ? 'active' : '' ?>">
                <button class="contact-button">Hubungi Kami</button>
                </a>            
            </div>
        </div>
        <div class="footer-bottom">
            <p>Powered by Kelompok 6</p>
        </div>
    </footer>
</div>
</body>
</html>