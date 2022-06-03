<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="./images/iconlogo.jpg" />
  <title>Resources JSPI</title>

  <link rel="stylesheet" href="./home/css/swiper.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" href="./home/fonts/font-awesome.css">
  <link rel="stylesheet" href="./home/css/style.css" />
  <link rel="stylesheet" href="./home/css/responsive.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="./home/css/animation.css">
  <link rel="stylesheet" href="./home/css/col.css">
</head>
<body>
  <div class="container-main">
    <!-- START SCROLL BTN -->
    <div class="scrollToTop-btn">
      <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>

    <!-- END SCROLL BTN -->

    <!-- START HEADER -->
    <header>
      <a href="{{url('home')}}" class="brand"><img src="./home/images/logomain.png" alt="" /></a>
      <input id="checkbox" type="checkbox" class="checkbox" />
      <label class="menu-btn" for="checkbox">
        <span></span>
        <span></span>
        <span></span>
      </label>
      <div class="navigation">
        <a href="#">Bosh sahifa</a>
        <a href="#faxrimiz">Faxrimiz</a>
        <a href="#resurs">Resurslar</a>
      </div>
    </header>

    <!-- END HEADER -->

    <!-- START MAIN -->
    <section class="main" id="main">
      <div class="content">
        <div class="column col-left resurs-col-left ">
          <p class="paragraph-text   resurs-paragraph-text ">
            Jizzax davlat pedagogika instituti o`qituvchilarining
          </p>
          <h2 class="content-title">amaliy va ijodiy resurlari to'plami</h2>
         
          <div class="search-content"> 
            <input type="search" class="icon" name="search"  placeholder="&#xf002 "/>
            <button type="submit">Qidirish</button>
          </div>
       
        </div>
        <div class="column col-right ">
          <div class="img-card">
            <img src="./home/images/mani.png" alt="" />
          </div>
        </div>
      </div>
    </section>
    <!-- END MAIN -->

    <!-- START FAXRIMIZ -->
        @include('home.prides')

    <!-- END FAXRIMIZ -->

    <!-- START  RESURSLAR -->
      @include('home.resursmain')
    <!--END RESURS  -->



    <!-- START FOOTER -->

    <section class="footer"  id="footer">
    <div class="row">
 
     <div data-aos="fade-right"  
      class="footer-card footer-logo">
      <img src="./home/images/logomain.png" alt="" />
      <p class="powered">&copy; 2022  |  JDPI — Raqamli ta’lim
        texnologiyalari markazi</p>
    </div>



<div data-aos="fade-right"  class="footer-card">
  <h2 class="footer-card-title">Bog'lanish</h2>
 <div class="footer-box">
  <div class="footer-card-left">
    <p class="footer-card-text">Telefon:</p>
  <p class="footer-card-text">Sayt:</p>
  <p class="footer-card-text">E-mail:</p>
  </div>
  <div class="footer-card-right"> 
    <p class="footer-card-text">72 226 13 57 </p>
  <p class="footer-card-text">www.jspi.uz</p>
  <p class="footer-card-text">jiz.jdpi@exat.uz</p>
  </div>
 </div>
</div>


<div data-aos="fade-right" class="footer-card">
  <h2 class="footer-card-title">Manzil</h2>
  <p class="footer-card-text">
    Jizzax davlat pedagogika instituti, 130100. Jizzax viloyati, <br> Jizzax shahri, Sharof Rahidov ko‘chasi, 4-uy.
  </p>
</div>


<div data-aos="fade-right" class="footer-card">
  <h2 class="footer-card-title">Ish vaqti</h2>
  <p class="footer-card-text">
    Dushanba - Shanba
  </p>
  <p class="footer-card-text">
    09:00-13:00 — 14:00-18:00
  </p>
</div>


<div class="footer-model">
  <p class="powered">&copy; 2022  |  JDPI — Raqamli ta’lim
    texnologiyalari markazi</p>
</div>
</div>
    
    </div>
  </section>
  </div>
</body>

  <!-- START SCRIPT -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="./home/js/scroll.js"></script>
  <script src="./home/js/navigation.js"></script>
  <script src="./home/js/swiper.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <!-- END SCRIPT -->
  <script>
    AOS.init();
  </script>
</body>

</html>