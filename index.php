<?php include("config/config.php");?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cek Penyebaran Virus Corona atau cek Penyebaran Virus Covid-19 di Indonesia">
    <meta name="keywords" content="virus, corona, covid19, cek, penyebaran">
    <meta name="author" content="Raya Taufik">

    <link rel="shortcut icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/bootstrap.css">
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">



    <title>Covid-19 ID</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand font-nav">
                Covid-19 ID
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item">
                        <a class="nav-link font-item scroll" href="#mainHeader">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-item scroll" href="#pencegahan">Pencegahan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-item scroll" href="#gejala">Gejala</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-item scroll" href="#penularan">Penularan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid" id="mainHeader">
        <div class="container">
            <h1 class="display-4">Penyebaran
                Virus Covid-19</h1>
            <div class="sumber">
                <div class="row justify-content-center">
                    <p><img src="assets/img/clock.svg" alt="clock"> Last update
                        <?= $b; ?></p>
                    <p class="ml-2"><img src="assets/img/source-data.svg" alt="source-data"> Sumber data dari John
                        Hopkins
                        University CSSE</p>
                </div>
            </div>
            <div class="arrow bounce ">
                <a class="fa fa-arrow-down fa-2x scroll" href="#cek"></a>
            </div>
        </div>
    </div>

    <section id="cek">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <div class="section-title">
                        <span>Penyebaran Virus Covid-19</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 d-flex justify-content-center">
                    <div class=" flex " data-aos="fade-up" data-aos-delay="300">
                        <div class="world">
                            <h1>Total di seluruh dunia</h1>
                            <ul>
                                <li data-toggle="tooltip" title="Confirmed"><img src="assets/img/confirmed.svg"
                                        alt="sick people"><span> <?= $diketahuiw; ?>
                                        orang</span>
                                </li>
                                <li data-toggle="tooltip" title="Recovered"><img src="assets/img/recovered.svg"
                                        alt="recovered people"><span class="recovered">
                                        <?= $sembuhw; ?> orang</span></li>
                                <li data-toggle="tooltip" title="Death"><img src="assets/img/death.svg"
                                        alt="death people"><span class="death">
                                        <?= $meninggalw; ?>
                                        orang</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center">
                    <div class=" flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="world">
                            <h1>Total di Indonesia</h1>
                            <ul>
                                <li data-toggle="tooltip" title="Confirmed"><img src="assets/img/confirmed.svg"
                                        alt="sick people"><span> <?= $diketahui; ?>
                                        orang</span>
                                </li>
                                <li data-toggle="tooltip" title="Recovered"><img src="assets/img/recovered.svg"
                                        alt="recovered people"><span class="recovered">
                                        <?= $sembuh; ?> orang</span></li>
                                <li data-toggle="tooltip" title="Death"><img src="assets/img/death.svg"
                                        alt="death people"><span class="death">
                                        <?= $meninggal; ?>
                                        orang</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="col-md-12">
                <div id="carouselExampleControls" data-aos="fade-up" data-aos-delay="600" class="carousel slide"
                    data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="https://covid19.mathdro.id/api/countries/Indonesia/og"
                                alt="Indonesia grafik">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://covid19.mathdro.id/api/og" alt="world grafik">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="pencegahan" class=" section bg-blue">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="text-block mbr-col-sm-12 mbr-col-md-6">
                        <h3 class="align-left text-cegah">
                            PENCEGAHAN</h3>
                        <p class="align-left text-cegah">
                            Virus corona telah menyebar ke banyak negara dan menjadi berita utama setiap hari. Tidak
                            bisa dipungkiri ini bisa menimbulkan rasa khawatir, panik, dan stres di tengah masyarakat.
                            Secara ilmiah, stres terbukti membuat kita rentan terhadap penyakit karena stres menekan
                            sistem kekebalan tubuh kita.
                            Apa yang bisa kita lakukan untuk membantu menjaga ketahanan mental dan fisik di tengah
                            pandemi ?
                        </p>

                    </div>
                </div>
                <div class="col-md-5">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="972" height="547" src="https://www.youtube.com/embed/nyC3LkVewJs" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="gejala" class="section bottom-padding bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <div class="section-title">
                        <span>GEJALA COVID-19 FROM DAY TO DAY</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 d-flex">
                    <div class="section-card flex" data-aos="fade-up" data-aos-delay="500">
                        <div class="section-card-content">
                            <div class="font-weight-bold mb-2 text-md">Hari ke-1</div>
                            <p class="text-sm2">Pasien mengalami demam. Tubuhnya mungkin juga mengalami semacam
                                kelelahan, nyeri otot, dan batuk kering.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="section-card flex" data-aos="fade-up" data-aos-delay="500">
                        <div class="section-card-content">
                            <div class="font-weight-bold mb-2 text-md">Hari ke-5</div>
                            <p class="text-sm2">Ada pasien yang mengalami kesulitan bernapas. Kondisi ini biasanya
                                terjadi pada mereka yang berusia lanjut atau memiliki riwayat penyakit lain sebelumnya.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="section-card flex" data-aos="fade-up" data-aos-delay="1000">
                        <div class="section-card-content">
                            <div class="font-weight-bold mb-2 text-md">Hari ke-7</div>
                            <p class="text-sm2">hari ke-7, menurut penelitian
                                Universitas Wuhan, ini merupakan waktu rata-rata pasien masuk ke rumah sakit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="section-card flex" data-aos="fade-up" data-aos-delay="1000">
                        <div class="section-card-content">
                            <div class="font-weight-bold mb-2 text-md">Hari ke-8</div>
                            <p class="text-sm2">Pada pasien yang mengalami kondisi parah, sekitar 15 persen
                                mengalami sindrom gangguan pernapasan akut. Saat ini terjadi, cairan telah memenuhi
                                paru-paru, dan sering kali berakibat fatal.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="section-card flex" data-aos="fade-up" data-aos-delay="1500">
                        <div class="section-card-content">
                            <div class="font-weight-bold mb-2 text-md">Hari ke-10</div>
                            <p class="text-sm2">Ketika gejala memburuk, pasien akan dibawa ke ICU. Biasanya, mereka
                                mengalami gangguan pada bagian perut, dan kehilangan nafsu makan. Pada rentang waktu
                                ini, sebagian kecil meninggal, yakni 2 persen.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="section-card flex" data-aos="fade-up" data-aos-delay="1500">
                        <div class="section-card-content">
                            <div class="font-weight-bold mb-2 text-md">Hari ke-17</div>
                            <p class="text-sm2">Setelah menjalani perawatan selama lebih kurang 2,5 minggu, pasien yang
                                kondisinya membaik biasanya sembuh dan keluar dari rumah sakit.</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section id="penularan" class=" section bg-blue">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="972" height="547" src="https://www.youtube.com/embed/dDD5N0tWouQ" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="text-block mbr-col-sm-12 mbr-col-md-6">
                        <h3 class="align-left text-cegah">
                            PENULARAN</h3>
                        <p class="align-left text-cegah">
                            Penyebaran virus Corona jenis terbaru mulai mengkhawatirkan sejumlah negara. Mula-mula virus
                            yang menyerang saluran pernapasan ini, diidentifikasi di Wuhan, Tiongkok. Namun belakangan
                            mulai menyebar ke beberapa negara. Lantas, bagaimana cara mengantisipasi penyebaran virus
                            Corona?.

                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="page-footer font-small blue">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">Made With <i class="fa fa-heart"></i> By <a
                href="https://github.com/rayataufik">Raya
                Taufik</a>
        </div>
        <!-- Copyright -->

    </footer>

    <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>

    <script src="assets/jquery-3.4.1.min.js"></script>
    <script src="assets/bootstrap.js"></script>
    <script src="assets/bootstrap.bundle.js"></script>
    <script src="assets/jquery-easing/jquery.easing.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });

        AOS.init();

        $('.scroll').on('click', function (e) {
            var tujuan = $(this).attr('href');
            var elTujuan = $(tujuan);

            $('html, body').animate({
                scrollTop: elTujuan.offset().top - 70
            }, 'easeInOutExpo');

            e.preventDefault();
        })

        $(window).scroll(function () {
            if ($(this).scrollTop() >= 50) { // If page is scrolled more than 50px
                $('#return-to-top').fadeIn(200); // Fade in the arrow
            } else {
                $('#return-to-top').fadeOut(200); // Else fade out the arrow
            }
        });
        $('#return-to-top').click(function () { // When arrow is clicked
            $('body,html').animate({
                scrollTop: 0 // Scroll to top of body
            }, 500);
        });

        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
</body>

</html>