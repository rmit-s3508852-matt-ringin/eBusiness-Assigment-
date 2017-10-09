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

          <a href ="zCaseFight.php" class="storeItem sport showcase"> 
                <img src="images/cases/moneyFight.png" alt="Floyd Mayweather and Conor McGregor case" class="storeItemImage">
                <div class ="storeItemInfo"> 
                     Money fight iPhone case<br><br>
                     $15
                </div>
          </a>
          <a href ="zCaseBatman.php" class="storeItem memes new showcase"> 
              <img src="images/cases/batman.png" alt="Nightman case" class="storeItemImage">
                <div class ="storeItemInfo"> 
                     Edgy Case iPhone case<br><br>
                     $15
                </div>
          </a>
          <a href ="zCaseTrump.php" class="storeItem new memes showcase"> 
              <img src="images/cases/trump.png" alt="Trump shirt" class="storeItemImage">
                <div class ="storeItemInfo"> 
                     Trump iPhone case<br><br>
                     $15 
                </div>
          </a>
          <a href ="zCaseYeezy.php" class="storeItem memes showcase"> 
              <img src="images/cases/yeezy.png" alt="Yeezy shirt" class="storeItemImage">
                <div class ="storeItemInfo"> 
                     Yeezy iPhone case<br><br>
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