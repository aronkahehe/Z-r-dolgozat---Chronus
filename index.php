<?php

session_start();
include 'components/connect.php';



if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Főoldal</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="css/style.css">

   <style>
   .swiper-button-prev {
    color: black !important;
   }

   .swiper-button-next {
    color: black !important;
}
   </style>
</head>
<body>

   
<?php include 'components/user_header.php'; ?>

<div class="home-bg">
   
<section class="home">

   <div class="swiper home-slider">

   <div class="swiper-wrapper">

   <div class="swiper-slide slide">
         <div class="image">
            <img src="images/homewatch.png" alt="">
         </div>
         <div class="content">
            <span>KEDVEZŐ ÁRAK, </span>
            <h3>LEGÚJABB ÓRÁK</h3>
            <a href="shop.php" class="btn">SZÉTNÉZEK KÖZÖTTÜK!</a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/homewatch1.png" alt="">
         </div>
         <div class="content">
            <span>VILÁGMÁRKÁK TÁRHÁZA</span>
            <h3>EREDETI TERMÉKEK</h3>
            <a href="shop.php" class="btn">MEGLESEM A KÍNÁLATOT!</a>
         </div>
      </div>


      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/homewatch2.png" alt="">
         </div>
         <div class="content">
            <span>GYORS KISZÁLLÍTÁS,</span>
            <h3>MEGBÍZHATÓSÁG</h3>
            <a href="shop.php" class="btn">LECSAPOK MOST!</a>
         </div>
      </div>

      </div>


    
   </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

</div>

<section class="category">

   <h1 class="heading">VÁLASSZON MÁRKÁT</h1>

   <div class="swiper category-slider">

   <div class="swiper-wrapper">

   <a href="category.php?category=rolex" class="swiper-slide slide">
      <img src="images/rolex.png" alt="Rolex" title="Rolex">
      
   </a>

   <a href="category.php?category=patek_philippe" class="swiper-slide slide">
      <img src="images/pp1.png" alt="Patek Philippe" title="Patek Philippe">
      
   </a>

   <a href="category.php?category=audemars_piguet" class="swiper-slide slide">
      <img src="images/ap.png" alt="Audemars Piguet" title="Audemars Piguet">
      
   </a>

   <a href="category.php?category=richard_mille" class="swiper-slide slide">
      <img src="images/richardmille.png" alt="Richard Mille" title="Richard Mille">
   </a>

   <a href="category.php?category=cartier" class="swiper-slide slide">
      <img src="images/cartierlogo.png" alt="Cartier" title="Cartier">
   </a>

   <a href="category.php?category=omega" class="swiper-slide slide">
      <img src="images/omega.png" alt="Omega" title="Omega">
   </a>

   <a href="category.php?category=jacob_&_co" class="swiper-slide slide">
      <img src="images/jacobco.png" alt="Jacob & Co" title="Jacob & Co">
   </a>

   <a href="category.php?category=franck_muller" class="swiper-slide slide">
      <img src="images/franckmuller.png" alt="Franck Muller" title="Franck Muller">
   </a>

   
   </div>

   

   <div class="swiper-pagination"></div>
   

   </div>

</section>

<section class="home-products">

   <h1 class="heading">TERMÉKEK</h1>

   <div class="swiper products-slider">

   <div class="swiper-wrapper">

   <?php
     $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6"); 
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
   <form action="" method="post" class="swiper-slide slide">
      <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
      <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
      <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
      <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
      <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
      <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
      <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
      <div class="name"><?= $fetch_product['name']; ?></div>
      <div class="flex">
         <div class="price"><span>$</span><?= $fetch_product['price']; ?><span>/-</span></div>
         <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
      </div>
      <input type="submit" value="Kosárba helyezés" class="btn" name="add_to_cart">
   </form>
   <?php
      }
   }else{
      echo '<p class="empty">Nincs még termék feltöltve!</p>';
   }
   ?>

   </div>

   

   <div class="swiper-pagination"></div>

   

   </div>


</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>
<script src="js/swiper.js"></script>

<script>

var swiper = new Swiper(".home-slider", {
   autoplay: {
    delay: 4500,
    disableOnInteraction: false,
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

 var swiper = new Swiper(".category-slider", {
   autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  spaceBetween: 20,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
   breakpoints: {
      0: {
         slidesPerView: 2,
       },
      650: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 4,
      },
      1024: {
        slidesPerView: 5,
      },
   },
});

var swiper = new Swiper(".products-slider", {
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },

   breakpoints: {
      550: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>