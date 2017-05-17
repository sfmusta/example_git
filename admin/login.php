<!DOCTYPE html>
<html>
<head>
<title>Aplikasi Manajemen Data Wisata Yogyakarta</title>
</head>
<body>
<h1 align="center">Aplikasi Pengelolaan Data Wisata Yogyakarta</h1><hr style="width:50%;border:0px;border-top:1px solid #aaa" />
<h3 align="center">Login Administrator</h3>

<form action="" method="post"><p align="center">

<label for="uname">Username</label><br /><input type="text" name="uname" id="uname"><br /><br />
<label for="passw">Password</label><br /><input type="password" name="passw" id="passw"><br /><br />
<button type="submit" name="tombolLogin">Login</button>
</p></form>

<?php if (isset($_POST['tombolLogin'])) {

    require_once('../koneksi.php');

    $sqlUser     = mysql_query("SELECT * FROM user WHERE username='"  . $_POST['uname'] . "' && password='" . md5($_POST['passw']) . "'");
    $jmlDataUser = mysql_num_rows($sqlUser);

    if ($jmlDataUser != 0) {
        $dataUser = mysql_fetch_assoc($sqlUser);
        session_start();
        $_SESSION['userdata']['id_user']    = $dataUser['id_user'];
        $_SESSION['userdata']['username']   = $dataUser['username'];
        header('Location:index.php'); exit;
    } else {
        echo "<script>alert('Account yang anda masukkan salah')</script>";
        header('Location:login.php');exit;
    }
} ?>
</body>
</html>
