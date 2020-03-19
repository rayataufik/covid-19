<?php include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="./assets/bootstrap.css" />
    <link rel="stylesheet" href="./assets/style.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <title>Document</title>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container">
        <a class="navbar-brand font-nav" href="#">
          Covid-19
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto ">
            <li class="nav-item">
              <a class="nav-link font-item" href="#"
                >Home <span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link font-item" href="#">Pencegahan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link font-item" href="#">Gejala</a>
            </li>
            <li class="nav-item">
              <a class="nav-link font-item" href="#">Penularan</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="jumbotron jumbotron-fluid" id="mainHeader">
      <div class="container">
        <h1 class="display-4">Cek Penyebaran Virus Covid-19</h1>
        <div class="sumber">
          <div class="row justify-content-center">
            <p>
              <img src="./assets/img/clock.svg" alt="clock" /> Last update
              <?php echo date("d M Y", strtotime($update)); ?>
            </p>
            <p class="ml-2">
              <img src="./assets/img/source-data.svg" alt="source-data" />
              Sumber data dari John Hopkins University CSSE
            </p>
          </div>
        </div>
        <div class="arrow bounce">
          <a class="fa fa-arrow-down fa-2x" href="#cek"></a>
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
            <div class="section-card flex">
              <div class="world">
                <h1>Total di seluruh dunia</h1>
                <ul>
                  <li data-toggle="tooltip" title="Confirmed">
                    <img
                      src="./assets/img/confirmed.svg"
                      alt="sick people"
                    /><span>
                      <?= $diketahuiw; ?>
                      orang</span
                    >
                  </li>
                  <li data-toggle="tooltip" title="Recovered">
                    <img
                      src="./assets/img/recovered.svg"
                      alt="recovered people"
                    /><span class="recovered">
                      <?= $sembuhw; ?>
                      orang</span
                    >
                  </li>
                  <li data-toggle="tooltip" title="Death">
                    <img src="./assets/img/death.svg" alt="death people" /><span
                      class="death"
                    >
                      <?= $meninggalw; ?>
                      orang</span
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex justify-content-center">
            <div class="section-card flex">
              <div class="world">
                <h1>Total di Indonesia</h1>
                <ul>
                  <li data-toggle="tooltip" title="Confirmed">
                    <img
                      src="./assets/img/confirmed.svg"
                      alt="sick people"
                    /><span>
                      <?= $diketahui; ?>
                      orang</span
                    >
                  </li>
                  <li data-toggle="tooltip" title="Recovered">
                    <img
                      src="./assets/img/recovered.svg"
                      alt="recovered people"
                    /><span class="recovered">
                      <?= $sembuh; ?>
                      orang</span
                    >
                  </li>
                  <li data-toggle="tooltip" title="Death">
                    <img src="./assets/img/death.svg" alt="death people" /><span
                      class="death"
                    >
                      <?= $meninggal; ?>
                      orang</span
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class=" section bg-blue">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="text-block mbr-col-sm-12 mbr-col-md-6">
              <h3 class="align-left text-cegah">
                PENCEGAHAN
              </h3>
              <p class="align-left text-cegah">
                Penyebaran virus Corona jenis terbaru mulai mengkhawatirkan
                sejumlah negara. Mula-mula virus yang menyerang saluran
                pernapasan ini, diidentifikasi di Wuhan, Tiongkok. Namun
                belakangan mulai menyebar ke beberapa negara. Lantas, bagaimana
                cara mengantisipasi penyebaran virus Corona?.
              </p>
            </div>
          </div>
          <div class="col-md-5">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe
                width="972"
                height="547"
                src="https://www.youtube.com/embed/dDD5N0tWouQ"
                frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
              ></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="./assets/jquery-3.4.1.min.js"></script>
    <script src="./assets/bootstrap.js"></script>
    <script src="./assets/bootstrap.bundle.js"></script>
    <script>
      $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
      });
    </script>
  </body>
</html>
