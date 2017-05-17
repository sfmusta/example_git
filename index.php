<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sistem Informasi Aspirasi Publik</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
</head>

<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top" onclick=$("#menu-close").click();>Menu Utama </a>
            </li>
            <li>
                <a href="#top" onclick=$("#menu-close").click();>Home</a>
            </li>
            <li>
                <a href="#pesanInputAspirasi" onclick=$("#menu-close").click();>Input Aspirasi</a>
            </li>
            <li>
                <a href="#pesanCariAspirasi" onclick=$("#menu-close").click();>Cari Aspirasi</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>Sistem Informasi Aspirasi Publik</h1>
            <h2>STMIK AKAKOM Yogyakarta</h2><br />
            <h4> Sampaikan disini saran atau keluhan anda </h4><P></P>
			
            <br>
            <a href="#pesanInputAspirasi" class="btn btn-dark btn-lg">MULAI</a>
        </div>
    </header>

    <!-- Kata-kata input Aspirasi -->
    <section id="pesanInputAspirasi" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">                    

                    <?php 
                        if (isset($_SESSION['kodeAspirasi'])) {
                            echo "<h2>Berhasil!</h2>
                                    <div class='alert alert-info col-xs-10 col-xs-offset-1'>
                                    <h4>
                                    Aspirasi telah berhasil disimpan dan akan segera kami tindak lanjuti.<p></p>
                                    Kode Aspirasi anda <b>" . $_SESSION['kodeAspirasi'] . "</b> (Simpan Kode Aspirasi, untuk melihat respon aspirasi yang anda sampaikan)
                                    </h4>
                                  </div>";

                            unset($_SESSION['kodeAspirasi']);
                        }
                        else {
                    ?>

                        <h2>Dengan ini kami mengharapkan aspirasi anda atas layanan kami,</h2>
                        <p class="lead">Sampaikan aspirasi anda disini, kami akan menanggapi. Dari anda, kami siap belajar untuk memberi layanan lebih prima.</p>

                        <?php } ?>

                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Input Aspirasi -->
    <section id="inputAspirasi" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>Input Aspirasi</h2>
									
                    <hr class="small">
                    
                    <form action="proses.php" method="POST">
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="NamaPengirim">Nama Anda</label>
                                <input name="nama" type="text" class="form-control" id="namaPengirim">
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="emailPengirim">Email</label>
                                <input name="email" type="email" class="form-control" id="emailPengirim">
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="nomorPonsel">Nomor Ponsel</label>
                                <input name="nomor" type="number" class="form-control" id="nomorPonsel">
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="kategoriPesan">Kategori</label>
                                <select name="kategori" class="form-control" id="kategoriPesan">
                                    <option value="1">Value 1</option>
                                    <option value="2">Value 2</option>
                                    <option value="3">Value 3</option>
                                    <option value="4">Value 4</option>
                                    <option value="5">Value 5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="isiPesan">Isi Aspirasi Anda</label>
                                <textarea name="isi" id="isiPesan" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <button class="btn btn-default btn-block" type="submit" name="simpanAspirasi">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

     <!-- Kata-kata Cari Aspirasi -->
    <section id="pesanCariAspirasi" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Cari Aspirasi Anda</h2>
                    <p class="lead">Masukkan Kode Aspirasi anda untuk melihat respon aspirasi anda dari kami</p>
                </div>
                <div class="col-lg-10 col-lg-offset-1">
                    <form action="aspirasi.php" method="GET">
                        <div class="col-xs-10">
                            <div class="form-group">                            
                                <input type="text" name="kode" class="form-control">                            
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <button class="btn btn-primary btn-block" type="submit">
                                Cari
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Footer -->
    <footer style="background-color: #111; color: #FFF">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Aspirasi STMIK AKAKOM Yogyakarta</strong>
                    </h4>
                    <p>
                        Jl. Raya Janti Karang Jambe No. 143 Yogyakarta 55198 Indonesia                   
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> +62 274 486664</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:info@akakom.ac.id">info@akakom.ac.id</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    <p class="text-muted">Copyright &copy; 2017 STMIK AKAKOM Yogyakarta</p>
                </div>
            </div>
        </div>
        <a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    //#to-top button appears after scrolling
    var fixed = false;
    $(document).scroll(function() {
        if ($(this).scrollTop() > 250) {
            if (!fixed) {
                fixed = true;
                // $('#to-top').css({position:'fixed', display:'block'});
                $('#to-top').show("slow", function() {
                    $('#to-top').css({
                        position: 'fixed',
                        display: 'block'
                    });
                });
            }
        } else {
            if (fixed) {
                fixed = false;
                $('#to-top').hide("slow", function() {
                    $('#to-top').css({
                        display: 'none'
                    });
                });
            }
        }
    });
    </script>

</body>

</html>
