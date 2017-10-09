<!DOCTYPE html>

<html>
 <head>
  <?php include "sections/header.php"; ?>
  <title>Clothes</title>
 </head>
 <body>

    <?php include "sections/navbar.php"; ?>

    <div class = "main">
        
        <img src="images/logo.png" alt="Edgy prints logo" class="logoHome">
        <div class = "welcome"> Clothes </div>

         <div class="pageBreak"></div>

         <div class="storeWrapper">
         
         <?php include "sections/storeNav.php"; ?>

          <a href ="zShirtFight.php" class="storeItem sport showcase"> 
                <img src="images/shirts/floydConor.png" alt="Floyd Mayweather and Conor McGregor shirt" class="storeItemImage">
                <div class ="storeItemInfo"> 
                     Floyd/Conor<br><br>
                     $30 
                </div>
          </a>
          <a href ="zShirtBatman.php" class="storeItem memes new showcase"> 
              <img src="images/shirts/nightman.png" alt="Nightman Shirt" class="storeItemImage">
                <div class ="storeItemInfo"> 
                     Nightman<br><br>
                     $30 
                </div>
          </a>
          <a href ="zShirtTrump.php" class="storeItem new memes showcase"> 
              <img src="images/shirts/trump.png" alt="Trump shirt" class="storeItemImage">
                <div class ="storeItemInfo"> 
                     Trump<br><br>
                     $30 
                </div>
          </a>
          <a href ="zShirtYeezy.php" class="storeItem memes showcase"> 
              <img src="images/shirts/yeezy.png" alt="Yeezy shirt" class="storeItemImage">
                <div class ="storeItemInfo"> 
                     Yeezy<br><br>
                     $30 
                </div>
          </a>
          </div>
         </div>

    </div>

    <?php include "javascript/selector.php"; ?>

    </div>


 </body>


 <?php include "sections/footer.php"; ?>

</html>