<?php
include("session.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Hotel Trivago</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="Slike/logo.png" rel="icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>

<body>
<!-------- Zaglavlje i Navigacijska traka -------->
<header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center justify-content-between">
        <h1 class="logo"><a href="#hero">Hotel Trivago</a></h1>
        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto" href="#onama">O nama</a></li>
            <li><a class="nav-link scrollto" href="#portfolio">Galerija</a></li>
            <li><a class="nav-link scrollto" href="#pricing">Ponude</a></li>
            <li><a class="nav-link scrollto" href="#contact">Novi korisnik</a></li>
            <li><a class="nav-link scrollto" href="logout.php">Log out</a></li>
            </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
</header>

<!-------- Hero Section -------->
<section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container position-relative">
      <img src="Slike/logo.png" width="80px" height="80px">
        <p></p>
        <h1>Hotel Trivago</h1>
      <img src="Slike/5star.png" height="60px">
    </div>
</section>

<main id="main">

<!-------- O nama -------->
<section id="onama" class="onama">
    <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="Slike/rad.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>O nama</h3><br>
            <p>
              Luksuzni Hotel Trivago, smješten u srcu očaravajućeg grada, ponosno se uzdiže kao sinonim vrhunske elegancije i beskompromisne usluge. Sa svojih 5 zvjezdica, Hotel Trivago predstavlja oazu raskoši, spoj vrhunskog dizajna i nenadmašne udobnosti. U našem hotelu, svaki trenutak je pažljivo osmišljen kako bismo vam pružili ekskluzivan doživljaj koji će ostati urezan u vašim sjećanjima zauvijek.
            </p>
          </div>
        </div>
    </div>
<br>

    <div class="container">

        <div class="row">
          <div class="col-lg-6">
              <br><br><br><br><br>
              <p>
                Hotel Trivago ponosan je na svoju predanost održivosti i ekološki osviještene prakse, čineći svaki boravak odgovornim izborom. Bez obzira jeste li ovdje poslovno ili uživate u odmoru, Trivago vam pruža iskustvo koje nadmašuje očekivanja i ostavlja neizbrisiv dojam. Dobrodošli u dom daleko od doma, dobrodošli u hotel Trivago.
              </p>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
              <img src="Slike/spaa.jpg" class="img-fluid" alt="">
          </div>
        </div>
    </div>
  
</section>
  
<!-------- O nama Cta  -------->
<section id="cta" class="cta">
    <div class="container">
        <div class="text-center">
          <h3>Udobnost / Relaksacija / Odmor</h3>
          <p>U našem hotelu, svaki trenutak je pažljivo osmišljen kako bismo vam pružili ekskluzivan doživljaj koji će ostati urezan u vašim sjećanjima zauvijek. Od ulaska u naš impozantni lobi, gdje vas dočekuje naš ljubazan osoblje, pa do luksuzno opremljenih soba i apartmana s pogledom koji oduzima dah, Hotel Trivago stvara nezaboravan dojam.</p>
          <!--<a class="cta-btn" href="signup.html">Sign up</a>-->
        </div>
    </div>
</section>

<!-------- Galerija -------->
<section id="portfolio" class="portfolio">
    <div class="container">
        <div class="section-title">
          <h2>Galerija</h2>
          <p>U našim restoranima, kulinarski majstori pripremaju jelovnike koji zadovoljavaju i najistančanija nepca. Od svježih lokalnih sastojaka do internacionalnih delikatesa, naša gastronomska ponuda oduševljava i najzahtjevnije gurmane.
            Hotel Trivago nudi i ekskluzivan wellness centar gdje se možete opustiti i regenerirati uz širok spektar masaža, tretmana ljepote i modernih fitness sadržaja. Naš unikatni bazen s pogledom na grad predstavlja savršeno mjesto za opuštanje nakon uzbudljivog dana.
            U sklopu hotela nalazi se i niz moderno opremljenih prostora za sastanke i događanja, idealnih za poslovne konferencije ili privatne svečanosti. Naše stručno osoblje posvećeno je osiguravanju da svaki događaj bude besprijekorno organiziran.
          </p>
        </div>

        <div class="row portfolio-container">
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="Slike/lobby2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Lobi</h4>
              <a href="Slike/lobby2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Lobi"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="Slike/lobby.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Recepcija</h4>
              <a href="Slike/lobby.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Recepcija"><i class="bx bx-plus"></i></a>
           </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="Slike/mjesto.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Kafić</h4>
              <a href="Slike/mjesto.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Kafić"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="Slike/bar.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Bar</h4>
              <a href="Slike/bar.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Bar"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="Slike/restoran.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Restoran</h4>
              <a href="Slike/restoran.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Restoran"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="Slike/sala.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Sala</h4>
              <a href="Slike/sala.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Sala"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="Slike/hala.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Konferencijska dvorana</h4>
              <a href="Slike/hala.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Konferencijska dvorana"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="Slike/terasa.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Terasa</h4>
              <a href="Slike/terasa.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Terasa"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="Slike/Spa.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Spa</h4>
              <a href="Slike/Spa.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Spa"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>
      </div>
</section>

<!-------- Ponude -------->
<form action="rent.php" method="POST">
<section id="pricing" class="pricing">
    <div class="container">
        <div class="section-title">
          <h2>Ponude</h2>
          <p>U Luksuznom Hotelu Trivago, naše posvećeno osoblje stoji vam na raspolaganju 24 sata dnevno kako bi vaš boravak bio ne samo udoban, već i nezaboravan. Nudimo personaliziran pristup svakom gostu, jer vjerujemo da su sitnice te koje čine razliku.</p>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box1">
              <h3>Jednokrevetna soba</h3>
              <h4>140KM<span></span></h4>
              <ul> 
                <li>Broj osoba: 2</li>
                <li>Površina: 27m<sup>2</sup></li>
              </ul>
              <div class="btn-wrap">
                <button onclick="myFunction()" id="submit" name="submit" type="submit" class="btn-buy">Rezerviraj</a>
              </div>
            </div>
          </div>
      
          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box2">
              <h3>Dvokrevetna soba</h3>
              <h4>210KM<span></span></h4>
              <ul>
                <li>Broj osoba: 2</li>
                <li>Površina: 35m<sup>2</sup></li>
              </ul>
              <div class="btn-wrap">
                <button onclick="myFunction()" id="submit2" name="submit2" type="submit" class="btn-buy">Rezerviraj</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box3">
              <h3>Trokrevetna soba</h3>
              <h4>350KM<span></span></h4>
              <ul>
                <li>Broj osoba: 3</li>
                <li>Površina: 46m<sup>2</sup></li>
              </ul>
              <div class="btn-wrap">
                <button onclick="myFunction()" id="submit3" name="submit3" type="submit" class="btn-buy">Rezerviraj</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box4">
            <div class="pozadina">
              <h3>Apartman Superior</h3>
              <h4>490KM<span></span></h4>
              <ul>
                <li>Broj osoba: 2</li>
                <li>Površina: 140m<sup>2</sup></li>
              </ul>
              <div class="btn-wrap">
                <button onclick="myFunction()" id="submit4" name="submit4" type="submit" class="btn-buy">Rezerviraj</a>
              </div>
            </div>
          </div>
        </div>
    </div>
</section>
</form>
</main>
</form>
<script>
function myFunction() {
    alert("Soba je uspješno iznajmljena!");
}
</script>

<!-------- Novi korisnik -------->
<section id="contact">
    <div class="wrapper">
        <div class="row">
        <div class="col-lg-6 mx-auto">
        <h2><b>Novi korisnik</b></h2>
        <div class="row">
        </div class="col-lg-8 mx-auto">
            <form role="form" action="addEditUser.php" method="POST">
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="firstname" placeholder="Ime" name="ime">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="lastname" placeholder="Prezime" name="prezime">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="usr" placeholder="Korisničko ime" name="username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="lozinka" placeholder="Lozinka" name="lozinka">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary" id="novikorisnik" name="novikorisnik">Sign in</button>
                    <button type="reset" class="btn" class="text-info">Izbriši</button>
                </div>
            </form>
        </div>
        </div>
    </div>
</section>

<!-------- Podnožje -------->
<footer id="footer">
    <div class="container d-md-flex py-4">
      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
        <span>Sva prava pridržava © <strong>Hotel Trivago</strong> 2024</span>
        </div>
        <div class="credits">
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://www.linkedin.com/" target=”_blank” class="linkedin"><i class="bx bxl-linkedin"></i></a>
        <a href="https://www.facebook.com/" target=”_blank” class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/" target=”_blank” class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://twitter.com/" target=”_blank” class="twitter"><i class="bx bxl-twitter"></i></a>      
      </div>
    </div>
</footer>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-------- Vendor JS Files -------->
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-------- Template Main JS File -------->
<script src="assets/js/main.js"></script>

</body>
</html>