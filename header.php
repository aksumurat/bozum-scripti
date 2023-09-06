<?php include('ynt/setting.php'); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo $site_adi; ?></title>
  <meta description="<?php echo $site_meta; ?>">
  <!--stylesheet-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="assets/css/style.css"> 
</head>
<body>
  <!--header section start-->
  <header class="header header-1">
    <div class="container">
      <div class="header__wrapper">
        <div class="header__logo">
          <a href="index.php">
            <img src="assets/images/footer-logo.png" alt="logo">
          </a>
        </div>
        <div class="header__nav">
          <ul class="header__nav-primary">
            <li><a href="index.php"><i class="fad fa-home-alt"></i></a></li>
            
            <li><a href="#faq">S.S.S.</a></li>
            <li><a href="#pricing">Oranlar</a></li>
            <li><a href="#preview">Referanslar</a></li>
			<li><a href="#intro">Nasıl</a></li>
          </ul>
          <span><i class="fas fa-times"></i></span>
        </div>
        <div class="header__bars">
          <div class="header__bars-bar header__bars-bar-1"></div>
          <div class="header__bars-bar header__bars-bar-2"></div>
          <div class="header__bars-bar header__bars-bar-3"></div>
        </div>
      </div>
    </div>
  </header>  <!--header section end-->
  <!--hero section start-->
  <section class="hero">
    <div class="hero__wrapper">
      <div class="container">
        <div class="row align-items-lg-center">
          <div class="col-lg-6 order-2 order-lg-1">
            <div class="download-buttons">
              <a href="https://wa.me/<?php echo $site_tlf; ?>?text=<?php echo $site_tlf_text; ?>" class="google-play">
                <i class="fab fa-whatsapp"></i>
                <div class="button-content">
                  <h6>İletişim <span>Whatsapp</span></h6>
                </div>
              </a>
              <a href="https://wa.me/<?php echo $site_tlf; ?>?text=<?php echo $site_tlf_text; ?>" class="apple-store">
                <i class="fab fa-whatsapp"></i>
                <div class="button-content">
                  <h6>7/24 <span>Canlı Destek</span></h6>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2">
            <div class="questions-img hero-img">
              <img src="assets/images/phone-01.png" alt="image">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>