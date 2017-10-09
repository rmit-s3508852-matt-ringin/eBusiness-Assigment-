<!DOCTYPE html>

<html>
 <head>
  <?php include "sections/header.php"; ?>
  <title>Canvas</title>
 </head>
 <body>

    <?php include "sections/navbar.php"; ?>

    <div class="main">
        
        <img src="images/logo.png" alt="Edgy prints logo" class="logoHome">
        <div class="welcome"> Canvas </div>

         <div class="pageBreak"></div>
   
         <div class="storeWrapper">

           <?php include "sections/storeNav.php"; ?>

          <a href ="zCanvasBarney.php" class="storeItem tv showcase"> 
                <img src="images/canvas/himym.jpg" alt="How I met your mother canvas" class="storeItemImage">
                <div class ="storeItemInfo"> 
                     Barney - 60cm x 60cm<br><br>
                     $50 
                </div>
          </a>
          <a href ="zCanvasTyrion.php" class="storeItem tv new showcase"> 
              <img src="images/canvas/got.jpg" alt="Game of thrones canvas" class="storeItemImage">
                <div class ="storeItemInfo"> 
                     Tyrion - 30cm x 30cm<br><br>
                     $20 
                </div>
          </a>
          <a href ="zCanvasCoco.php" class="storeItem new showcase"> 
              <img src="images/canvas/coco.jpg" alt="Coco canvas" class="storeItemImage">
                <div class ="storeItemInfo"> 
                     Coco - 30cm x 30cm<br><br>
                     $20 
                </div>
          </a>
          <a href ="zCanvasDrummer.php" class="storeItem music showcase"> 
              <img src="images/canvas/drummer.jpg" alt="Drummer canvas" class="storeItemImage">
                <div class ="storeItemInfo"> 
                     Drummer - 60cm x 60cm<br><br>
                     $50 
                </div>
          </a>
          <a href ="zCanvasGOT.php" class="storeItem tv showcase"> 
              <img src="images/canvas/gotHouses.jpg" alt="Game of thrones houses canvas" class="storeItemImage">
                <div class ="storeItemInfo"> 
                     GoT Houses - 40cm x 40cm<br><br>
                     $30 
                </div>
          </a>
          <a href ="zCanvasSherlock.php" class="storeItem tv new showcase"> 
              <img src="images/canvas/sherlock.jpg" alt="Sherlock canvas" class="storeItemImage">
                <div class ="storeItemInfo"> 
                     Sherlock - 30cm x 30cm<br><br>
                     $20 
                </div>
          </a>
          <a href ="zCanvasSunglasses.php" class="storeItem memes new showcase"> 
              <img src="images/canvas/sunglasses.jpg" alt="Sunglasses canvas" class="storeItemImage">
                <div class ="storeItemInfo"> 
                     Sunglasses - 30cm x 30cm<br><br>
                     $20 
                </div>
          </a>
          </div>
         </div>

    </div>

    <?php include "javascript/selector.php"; ?>



 </body>


 <?php include "sections/footer.php"; ?>

</html>