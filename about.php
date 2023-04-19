<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Rólunk</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/aboutbg.png" alt="">
      </div>

      <div class="content">
         <h3>Miért válassz minket?</h3>
         <p><b>STABIL HÁTTÉR</b>
            <br><i>Immár több, mint 8 éve állunk Vásárlóink szolgálatában. Tudásunkat folyamatosan bővítjük a mai kor igényeinek megfelelően. Hiszünk a hagyományos kereskedelmi értékekben, éppen ezért kiemelkedően fontos számunkra Vásárlóink teljeskörű, minden igényt kielégítő kiszolgálása.</i>

            <b><br>EREDETI TERMÉKEK</b>
            <br><i>Üzleteinben csak és kizárolag eredeti terékeket értékesítünk. Minden forgalmazott márka a hivatalos Magyar disztribútortól kerül beszerzésre. A termékek mellé Magyar számlát és Magyar garanciát biztosítunk.</i>

            <b><br>HIVATALOS SZERVÍZ HÁTTÉR</b>
            <br><i>Minden forgalmazott termékünkre a Magyar hivatalos szeviz vállal garanciát. A hivatalos Magyar szervizek listáját a SZERVIZmenüpontban találja.</i>

            <b><br>GARANTÁLT ALKATRÉSZELLÁTÁS</b>
            <br><i>Termékeinkhez csak eredeti, minőségi alkatrészeket biztosítunk. Alkatrészek akár több éves modellekhez is beszerezhetők.</i>
            </p>
         <a href="contact.php" class="btn">Lépjen kapcsolatba velünk!</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">VÁSÁRLÓI VISSZAJELZÉSEK</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/vel1.jpg" alt="">
         <p>Sokféle óra kedvező áron, nagyon gyors és korrekt kiszállítással. Többször rendeltem már tőlük, mindig ezt tapasztaltam. Nem tudom, hogy a garancia mennyire működik jól, de eddig sosem volt rá szükség.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Varga Mihály</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/vel2.jpg" alt="">
         <p>Kiváló minőségű termeket kaptam, minden eredetiséget igazoló dokumentummal.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-empty"></i>
         </div>
         <h3>Kulcsár Erika</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/vel3.jpg" alt="">
         <p>Utólagos kérésemre sem küldték meg a magyar nyelvü használati utasitást?! Úgy tudom, hogy törvényi szabályozás szerint kötelezö a magyar nyelvü használati utasitás!!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star-empty"></i>
            <i class="fas fa-star-empty"></i>
            <i class="fas fa-star-empty"></i>
            <i class="fas fa-star-empty"></i>
         </div>
         <h3>Csutka Zoltán</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/vel4.png" alt="">
         <p>Profik. Segítőkészek. Rugalmasak. Mindenkinek ajánlom. Ha előzetes segítségre van bárkinek szüksége, segítenek! Egyedüli kisebb problémám, hogy a személyes átvételre kevés helyszín biztosított.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <i class="fas fa-star-empty"></i>
         </div>
         <h3>Molnár Krisztián</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/vel5.jpg" alt="">
         <p>Nem volt gyári csomagolásban az óra, egy neylon zacskóba betekerve kaptam meg, használati útmutató nélkül! A külső papír doboz viseltes volt és más típusú órához tartozott a rajta felejtett cimke alapján!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-empty"></i>
            <i class="fas fa-star-empty"></i>
            <i class="fas fa-star-empty"></i>
         </div>
         <h3>Somogyi Tivadar</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/vel6.jpg" alt="">
         <p>Korrekt, megbízható. Tájékoztatás, visszaigazolások rendben, gyorsan megtörténtek. A rendelt termékkel maximálisan elégedett vagyok.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Dózsa György</h3>
      </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>