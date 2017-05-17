<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Aplikasi Manajemen Data Wisata Yogyakarta</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>

<?php session_start();
    if ( ! isset($_SESSION['userdata'])) { header('Location:login.php');exit; }

    if (isset($_GET['aksi']) && $_GET['aksi'] == 'logout') {
        unset($_SESSION['userdata']);
        header('Location:login.php');exit;
    }
?>

<div class="container"><br />
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    Sistem Informasi Aspirasi Publik
                </a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Dashboard</a></li>
                <li><a href="index.php?v=data_aspirasi"><span class="glyphicon glyphicon-duplicate"></span> Data Aspirasi</a></li>
                <li><a href="index.php?v=data_jenis_aspirasi"><span class="glyphicon glyphicon-duplicate"></span> Data Jenis Aspirasi</a></li>
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
        </div>
    </nav>

    <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
            <?php
                if (isset($_GET['v'])) {
                    switch ($_GET['v']) {
                        case 'data_aspirasi':
                            require_once('data_aspirasi.php');
                            break;
                        case 'data_jenis_aspirasi':
                            require_once('data_jenis_aspirasi.php');
                            break;
                            echo "<h1>Halaman tidak ditemukan</h1>";
                            break;
                    }
                }
                else {
                    echo "Selamat Datang " . $_SESSION['userdata']['username'] ."<br />";
                }
            ?>
        </div>
    </div>
</div>

</body>
</html>
