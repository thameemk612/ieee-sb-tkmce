<!--================Footer Area =================-->
<footer class="footer_area">
  <div class="container">
    <div class="row">
      <div class="col-md-4 ">
        <div class="footer_top flex-column">
          <h3 style="font-family: 'BebasNeueRegular';font-weight: normal;font-style: normal;">Quick Links</h3>
          <ul>
            <li><a href="https://www.ieee.org/">IEEE</a></li>
            <li><a href="https://ieeexplore.ieee.org/">IEEE Xplore Digital Library</a></li>
            <li><a href="https://ieee-collabratec.ieee.org/">IEEE Collabratec</a></li>
            <li><a href="http://spectrum.ieee.org/">IEEE Spectrum Online</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-4 ">
        <div class="footer_top flex-column">
          <h3 style="font-family: 'BebasNeueRegular';font-weight: normal;font-style: normal;">Follow Us</h3>
          <div class="footer_social" style="text-align:left;">
            <a href="https://www.facebook.com/ieeesbtkmce"><i class="fa fa-facebook"></i></a>
            <a href="https://www.twitter.com/IEEEorg"><i class="fa fa-twitter"></i></a>
            <a href="https://www.instagram.com/ieeeorg"><i class="fa fa-instagram"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-4 ">
        <div class="footer_top flex-column">
          <h3 style="font-family: 'BebasNeueRegular';font-weight: normal;font-style: normal;">Address</h3>
          <p>TKM College of Engineering<br>
            Karicode, Kollam, Kerala<br>
            PIN : 691005<br>
            <h5>Chairperson</h5>
            Pranav Pramod : <a href="tel:+919995947269">+91 9995947269</a>
            <h5>Counselor</h5>
            Mrs. Reshna S : <a href="tel:+919496410839">+91 9496410839</a>
            <h5>Webmaster</h5>
            Thameem K : <a href="tel:+918281582725">+91 8281582725</a>
          </p>
        </div>
      </div>
    </div>
    <div class="row footer_bottom justify-content-center">
      <p class="col-lg-8 col-sm-12 footer-text">
        &copy;IEEE SB TKMCE
      </p>
    </div>
  </div>
</footer>
<!--================End Footer Area =================-->
<script>
  var slideIndex = 0;
  carousel();

  function carousel() {
    var i;
    var x = document.getElementsByClassName("myslides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1}
    x[slideIndex-1].style.display = "block";
    setTimeout(carousel, 5000); // Change image every 2 seconds
  }
</script>
<script src="<?=base_url();?>/assets/front/js/jquery-3.2.1.min.js"></script>
<script src="<?=base_url();?>/assets/front/js/popper.js"></script>
<script src="<?=base_url();?>/assets/front/js/bootstrap.min.js"></script>
<script src="<?=base_url();?>/assets/front/js/stellar.js"></script>
<script src="<?=base_url();?>/assets/front/vendors/lightbox/simpleLightbox.min.js"></script>
<script src="<?=base_url();?>/assets/front/vendors/nice-select/js/jquery.nice-select.min.js"></script>
<script src="<?=base_url();?>/assets/front/vendors/isotope/imagesloaded.pkgd.min.js"></script>
<script src="<?=base_url();?>/assets/front/vendors/isotope/isotope-min.js"></script>
<script src="<?=base_url();?>/assets/front/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="<?=base_url();?>/assets/front/js/jquery.ajaxchimp.min.js"></script>
<script src="<?=base_url();?>/assets/front/js/mail-script.js"></script>
<script src="<?=base_url();?>/assets/front/js/theme.js"></script>
</body>

</html>
