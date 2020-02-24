<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Bizimle İletişime Geçin</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <?php

  require_once("inc_upperbar.html");

  ?>
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">İletişim</h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Ana Sayfa</a>
      </li>
      <li class="breadcrumb-item active">İletişim</li>
    </ol>

    <!-- Content Row -->
    <div class="row">
      <!-- Map Column -->
      <div class="col-lg-8 mb-4">
        <!-- Embedded Google Map -->


        <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3059.82427744723!2d32.84898400136699!3d39.92294847932454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d34effd6b9930b%3A0x6fa79cbeeeec0bac!2zS8SxesSxbGF5LCAwNjQyMCDDh2Fua2F5YS9BbmthcmE!5e0!3m2!1str!2str!4v1582578044510!5m2!1str!2str"></iframe>
        <br>
        <br>
        <br>
        <!-- Mesaj Gönderme Bölümü -->
        <div class="row">
          <div class="col-lg-8 mb-4">
            <h3>Bize Mesaj Gönderin!</h3>
            <hr>
            <form name="sentMessage" id="contactForm" novalidate>
              <div class="control-group form-group">
                <div class="controls">
                  <label>Adınız</label>
                  <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                  <p class="help-block"></p>
                </div>
              </div>
              <div class="control-group form-group">
                <div class="controls">
                  <label>Telefon Numaranız</label>
                  <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                </div>
              </div>
              <div class="control-group form-group">
                <div class="controls">
                  <label>Email Adresiniz</label>
                  <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                </div>
              </div>
              <div class="control-group form-group">
                <div class="controls">
                  <label>Mesajınız</label>
                  <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                </div>
              </div>
              <div id="success"></div>
              <!-- For success/fail messages -->
              <button type="submit" class="btn btn-primary" id="sendMessageButton">Mesajı Gönder</button>
            </form>
          </div>

        </div>
      </div>
      <!-- Contact Details Column -->
      <div class="col-lg-4 mb-4">
        <h3>İletişim Detayları</h3>
        <hr>
        <p>
          Kızılay
            06420 Çankaya/Ankara
        </p>
        <p>
          <abbr title="Email">Email</abbr>:
          <a href="mailto:name@example.com">furkanbdr99@hotmail.com
          </a>
        </p>
        <p>
          <abbr title="Hours">Çalışma Saatleri</abbr>: Pazartesi - Cuma: 9:00 - 17:00
        </p>
        <br>
        <br>
        <h3>Danışmanlarımız</h3>
        <hr>
          <div class="card" style="width: 18rem;">
          <img src="https://thispersondoesnotexist.com/image" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Ayşe Öz</p>
          </div>
        </div>
        <hr>
        <div class="card" style="width: 18rem;">
        <img src="https://thispersondoesnotexist.com/image" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Ahmet Dere</p>
        </div>
      </div>
      </div>


    </div>
    <!-- /.row -->

    <!-- Contact Form -->
    <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->

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

  <!-- Contact form JavaScript -->
  <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

</body>

</html>
