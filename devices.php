<!DOCTYPE html>

<html>
 <head>
  <?php include "sections/header.php"; ?>
  <title>Devices</title>
 </head>
 <body>

    <?php include "sections/navbar.php"; ?>

    <div class = "main">
        
        <img src="images/logo.png" alt="Edgy prints logo" class="logoHome">
        <div class = "welcome"> Devices </div>

         <div class="pageBreak"></div>

         <div class="storeWrapper">
         
         <?php include "sections/storeNav.php"; ?>

          <div class="storeItem sport showcase"> 
                <img src="images/cases/moneyFight.png" alt="Floyd Mayweather and Conor McGregor case" class="storeItemImage">
                <div class ="storeItemInfo"> 
                     Money fight<br><br>
                     $15
                     <button class="button" style="vertical-align:middle" id ="shirt"><span>Add to cart</span></button>
                </div>
          </div>
          <div class="storeItem memes new showcase"> 
              <img src="images/cases/batman.png" alt="Nightman case" class="storeItemImage">
                <div class ="storeItemInfo"> 
                     Nightman<br><br>
                     $15
                     <button class="button" style="vertical-align:middle" id ="shirt"><span>Add to cart</span></button>
                </div>
          </div>
          <div class="storeItem new memes showcase"> 
              <img src="images/cases/trump.png" alt="Trump shirt" class="storeItemImage">
                <div class ="storeItemInfo"> 
                     Trump<br><br>
                     $15 
                     <button class="button" style="vertical-align:middle" id ="shirt"><span>Add to cart</span></button>
                </div>
          </div>
          <div class="storeItem memes showcase"> 
              <img src="images/cases/yeezy.png" alt="Yeezy shirt" class="storeItemImage">
                <div class ="storeItemInfo"> 
                     Yeezy<br><br>
                     $30 
                     <button class="button" style="vertical-align:middle" id ="shirt"><span>Add to cart</span></button>
                </div>
          </div>
          </div>
         </div>

    </div>

    <?php include "javascript/selector.php"; ?>

    </div>


 </body>


 <?php include "sections/footer.php"; ?>

</html>