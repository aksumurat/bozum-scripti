<!--screenshot section start-->
  <section class="screenshot" id="preview">
    <div class="screenshot__wrapper">
      <div class="container">
        <div class="screenshot__info">
          <h2 class="section-heading color-black">Referanslarımız</h2>
          <div class="screenshot-nav">
            <div class="screenshot-nav-prev"><i class="fad fa-long-arrow-left"></i></div>
            <div class="screenshot-nav-next"><i class="fad fa-long-arrow-right"></i></div>
          </div>
        </div>
      </div>
      <div class="swiper-container screenshot-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide screenshot-slide">
            <img src="assets/images/phone-01.png" alt="image">
          </div>
          <div class="swiper-slide screenshot-slide">
            <img src="assets/images/phone-02.png" alt="image">
          </div>
          <div class="swiper-slide screenshot-slide">
            <img src="assets/images/phone-03.png" alt="image">
          </div>
          <div class="swiper-slide screenshot-slide">
            <img src="assets/images/phone-04.png" alt="image">
          </div>
          <div class="swiper-slide screenshot-slide">
            <img src="assets/images/phone-05.png" alt="image">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--screenshot section end-->
  
  <!--footer start-->
  <footer class="footer">
    <div class="footer__wrapper">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="footer__info">
              <div class="footer__info--logo">
                <img src="assets/images/footer-logo.png" alt="image">
              </div>
              <div class="footer__info--content">
                <p class="paragraph dark"><?php echo $site_hakkinda; ?></p>
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="footer__content-wrapper">
              <div class="footer__list">
                <ul>
                  <li>Whatsapp</li>
                  <li><a href="https://wa.me/<?php echo $site_tlf; ?>?text=<?php echo $site_tlf_text; ?>">Whatsapp</a></li>
                </ul>
              </div>
              <div class="download-buttons">
                <h5>Whatsapp</h5>
                <a href="https://wa.me/<?php echo $site_tlf; ?>?text=<?php echo $site_tlf_text; ?>" class="google-play">
                  <i class="fab fa-whatsapp"></i>
                  <div class="button-content">
                    <h6>Whatsapp <span>Ödeme Al</span></h6>
                  </div>
                </a>
                <a href="https://wa.me/<?php echo $site_tlf; ?>?text=<?php echo $site_tlf_text; ?>" class="apple-store">
                  <i class="fab fa-whatsapp"></i>
                  <div class="button-content">
                    <h6>Hemen Ödeme <span>Whatsapp</span></h6>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="footer__copy">
            <h6>&copy; <?php echo $site_adi; ?> <a href="https://andyoudemo.tk/">Diğer Scriptler</a></h6>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script  type="text/javascript">
  var config = {
    phone :"<?php echo $site_tlf; ?>",
    call :"Whatsapp",
    position :"ww-right",
    size : "ww-normal",
    text : "<?php echo $site_tlf_text; ?>",
    type: "ww-standard",
    brand: "Canlı Destek",
    subtitle: "",
    welcome: "Merhaba"
  };
  var proto = document.location.protocol, host = "cloudfront.net", url = proto + "//d3kzab8jj16n2f." + host;
    var s = document.createElement("script"); s.type = "text/javascript"; s.async = true; s.src = url + "/v2/main.js";
    s.onload = function () { tmWidgetInit(config) };
    var x = document.getElementsByTagName("script")[0]; x.parentNode.insertBefore(s, x);
</script>0
  <!--footer end-->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script>
  <script>
    $(window).on('load', function () {
      $("body").addClass("loaded");
    });
  </script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>
</html>