<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>EXTUR - Her Türlü Tur Hizmeti</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

  <!-- Ana Sayfa CSS Dosyası -->
  <link rel="stylesheet" href="css/index.css">

</head>

<body>


  <!-- Navigation -->

  <?php

  require_once("inc_upperbar.html");

  ?>



    <!-- Navigation End-->


  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('img/Switzerland/00.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <div class="row">
              <div class="col"></div>
              <div class="col" style="background: rgba(204, 204, 204, 0.5);">
                <a href="#" style="text-decoration:none;">

                  <h3 style="color:black; font-size:2.5em;">İsviçre Turları</h3>
                  <p style="color:black; text-"><b style="filter:opacity(0.7);">İsviçre'nin Dağlarına Yolculuk</b></p>
                </a>
              </div>

              <div class="col"></div>

            </div>

          </div>
        </div>
         Slide Two - Set the background image for this slide in the line below -->
         <div class="carousel-item" style="background-image: url('img/Norway/01.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <div class="row">
              <div class="col"></div>
              <div class="col" style="background: rgba(204, 204, 204, 0.5);">
                <a href="#" style="text-decoration:none;">

                  <h3 style="color:black; font-size:2.5em;">Norveç Turları</h3>
                  <p style="color:black; text-"><b style="filter:opacity(0.7);">Kuzey Işıklarını Keşfedin...</b></p>
                </a>
              </div>

              <div class="col"></div>

            </div>
          </div>
        </div>
         Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('img/Prague/00.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <div class="row">
              <div class="col"></div>
              <div class="col" style="background: rgba(204, 204, 204, 0.5);">
                <a href="#" style="text-decoration:none;">

                  <h3 style="color:black; font-size:2.5em;">Balkan Turları</h3>
                  <p style="color:black; text-"><b style="filter:opacity(0.7);">Sanat Dolu Ülkeler</b></p>
                </a>
              </div>

              <div class="col"></div>

            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container indexcontainer">

    <h1 class="my-4" id="mainh1" style="text-align:center;">EN ÇOK TERCİH EDİLEN TURLARIMIZ</h1>

    <hr>



    <!-- Portfolio Section -->
    <h2 style="display:inline;"><span id="mainh2">Yurtiçi</span> <small style="font-size:0.6em; color: gray;">(En Çok Tercih Edilen Yurtiçi Turlarımız)</small></h2>

    <?php
     require_once("inc_darkmode.html");
     ?>

    <hr>

    <div class="row">
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#">

            <span class="discount">

              <span class="percentage">%</span>

              <span class="percentageofdiscount">20</span>
              <br>
              <span class="disc">indirim</span>


            </span>
            <img class="card-img-top" src="img/Ankara/00.jpg" alt="">

          </a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Ankara Turu</a>
            </h4>
            <p class="card-text">Ankara/Türkiye</p>
            <hr class="card-hr">
            <div class="card-info row">
              <div class="col-5 services">
                &nbsp;  Hizmetler
                <hr>
                <div class="servicesicons">
                    <i class="fas fa-plane" alt="asdas"></i>
                    <i class="fas fa-utensils"></i>
                    <i class="fas fa-home"></i>
                    <i class="fas fa-question"></i>
                </div>


              </div>

              <div class="col-7 gototour">

                <button type="button" class="btn btn-info">

                    <span class="old-price">2.500 TL</span>

                    <div class="row current">
                        <span class="current-price">1.799,00</span>
                        <span class="current-currency">TL</span>

                    </div>



                </button>

              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <span class="discount">

            <span class="percentage">%</span>

            <span class="percentageofdiscount">45</span>
            <br>
            <span class="disc">indirim</span>


          </span>
          <a href="#"><img class="card-img-top" src="img/İstanbul/00.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">İstanbul Turu</a>
            </h4>
            <p class="card-text">İstanbul/Türkiye</p>
            <hr class="card-hr">
            <div class="card-info row">
              <div class="col-5 services">
                &nbsp;  Hizmetler
                <hr>
                <div class="servicesicons">
                    <i class="fas fa-plane" alt="asdas"></i>
                    <i class="fas fa-utensils"></i>
                    <i class="fas fa-home"></i>
                    <i class="fas fa-question"></i>
                </div>


              </div>

              <div class="col-7 gototour">

                <button type="button" class="btn btn-info">

                    <span class="old-price">3.799 TL</span>

                    <div class="row current">
                        <span class="current-price">2.599,00</span>
                        <span class="current-currency">TL</span>

                    </div>



                </button>

              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <span class="discount">

            <span class="percentage">%</span>

            <span class="percentageofdiscount">30</span>
            <br>
            <span class="disc">indirim</span>


          </span>
          <a href="#"><img class="card-img-top" src="img/İzmir/01.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">İzmir Turu</a>
            </h4>
            <p class="card-text">İzmir/Türkiye</p>
            <hr class="card-hr">
            <div class="card-info row">
              <div class="col-5 services">
                &nbsp;  Hizmetler
                <hr>
                <div class="servicesicons">
                    <i class="fas fa-bus"></i>
                    <i class="fas fa-utensils"></i>
                    <i class="fas fa-home"></i>

                </div>


              </div>

              <div class="col-7 gototour">

                <button type="button" class="btn btn-info">

                    <span class="old-price">5.500 TL</span>

                    <div class="row current">
                        <span class="current-price">4.000,00</span>
                        <span class="current-currency">TL</span>

                    </div>



                </button>

              </div>

            </div>
          </div>
        </div>
      </div>

    </div>


    <h2><span id="mainh3">Yurtdışı</span> <small style="font-size:0.6em; color: gray;">(En Çok Tercih Edilen Yurtdışı Turlarımız)</small></h2>
    <hr>

    <div class="row">

      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <span class="discount">

            <span class="percentage">%</span>

            <span class="percentageofdiscount">50</span>
            <br>
            <span class="disc">indirim</span>


          </span>
          <a href="#"><img class="card-img-top" src="img/Amsterdam/00.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Amsterdam Turu</a>
            </h4>
            <p class="card-text">Amsterdam/Hollanda</p>
            <hr class="card-hr">
            <div class="card-info row">
              <div class="col-5 services">
                &nbsp;  Hizmetler
                <hr>
                <div class="servicesicons">
                    <i class="fas fa-plane" alt="asdas"></i>
                    <i class="fas fa-utensils"></i>
                    <i class="fas fa-home"></i>
                    <i class="fas fa-house-damage"></i>

                </div>


              </div>

              <div class="col-7 gototour">

                <button type="button" class="btn btn-info">

                    <span class="old-price">7.800 TL</span>

                    <div class="row current">
                        <span class="current-price">5.799,00</span>
                        <span class="current-currency">TL</span>

                    </div>



                </button>

              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <span class="discount">

            <span class="percentage">%</span>

            <span class="percentageofdiscount">35</span>
            <br>
            <span class="disc">indirim</span>


          </span>
          <a href="#"><img class="card-img-top" src="img/Paris/00.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Paris Turu</a>
            </h4>
            <p class="card-text">Paris/Fransa</p>
            <hr class="card-hr">
            <div class="card-info row">
              <div class="col-5 services">
                &nbsp;  Hizmetler
                <hr>
                <div class="servicesicons">
                    <i class="fas fa-plane" alt="asdas"></i>
                    <i class="fas fa-utensils"></i>
                    <i class="fas fa-home"></i>
                    <i class="fas fa-question"></i>
                </div>


              </div>

              <div class="col-7 gototour">

                <button type="button" class="btn btn-info">

                    <span class="old-price">7.500 TL</span>

                    <div class="row current">
                        <span class="current-price">4.599,00</span>
                        <span class="current-currency">TL</span>

                    </div>



                </button>

              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <span class="discount">

            <span class="percentage">%</span>

            <span class="percentageofdiscount">35</span>
            <br>
            <span class="disc">indirim</span>


          </span>
          <a href="#"><img class="card-img-top" src="img/Londra/00.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Londra Turu</a>
            </h4>
            <p class="card-text">Londra/Birleşik Krallık</p>
            <hr class="card-hr">
            <div class="card-info row">
              <div class="col-5 services">
                &nbsp;  Hizmetler
                <hr>
                <div class="servicesicons">
                    <i class="fas fa-plane" alt="asdas"></i>
                    <i class="fas fa-utensils"></i>
                    <i class="fas fa-home"></i>
                    <i class="fas fa-question"></i>
                </div>


              </div>

              <div class="col-7 gototour">

                <button type="button" class="btn btn-info">

                    <span class="old-price">10.500 TL</span>

                    <div class="row current">
                        <span class="current-price">8.799,00</span>
                        <span class="current-currency">TL</span>

                    </div>



                </button>

              </div>

            </div>
          </div>
        </div>
      </div>

    </div>


    <?php

    require_once("inc_gototop.html");

    ?>



    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <?php

  require_once("inc_footer.html");


   ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>




</body>

</html>
