<?php
   if(isset($message)){
      foreach($message as $message){
         echo '
         <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
?>

<header class="header">

   <section class="flex">

      <a href="../admin/dashboard.php" class="logo">CHRONUS<span>+PANEL</span></a>

      <nav class="navbar">
         <a href="../admin/dashboard.php">Irányítópult</a>
         <a href="../admin/products.php">Termékek</a>
         <a href="../admin/placed_orders.php">Rendelések</a>
         <a href="../admin/admin_accounts.php">Adminok</a>
         <a href="../admin/users_accounts.php">Felhasználók</a>
         <a href="../admin/messages.php">Üzenetek</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="profile">
         <?php
            $select_profile = $conn->prepare("SELECT * FROM `admins` WHERE id = ?");
            $select_profile->execute([$admin_id]);
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <p><?= $fetch_profile['name']; ?></p>
         <a href="../admin/update_profile.php" class="btn">Profil szerkesztése</a>
         <div class="flex-btn">
            <a href="../admin/register_admin.php" class="option-btn">Regisztráció</a>
         </div>
         <div class="flex-btn">
         <a href="../admin/admin_login.php" class="option-btn">Bejelentkezés</a>
         </div>
         <a href="../components/admin_logout.php" class="delete-btn" onclick="return confirm('Biztosan kijelentkezel?');">Kijelentkezés</a> 
      </div>

   </section>

</header>