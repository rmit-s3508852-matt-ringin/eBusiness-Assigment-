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

          <div class="storeItem tv showcase"> 
                <img src="images/canvas/himym.jpg" alt="How I met your mother canvas" class="storeItemImage">
                <div class ="storeItemInfo"> 
                     Barney Canvas - 60 x 60<br><br>
                     $50 
                     <button class="button" style="vertical-align:middle" id ="canvas"><span>Add to cart</span></button>
                </div>
          </div>
          <div class="storeItem tv new showcase"> 
              <img src="images/canvas/got.jpg" alt="Game of thrones canvas" class="storeItemImage">
                <div class ="storeItemInfo"> 
                     Tyrion - 30 x 30<br><br>
                     $20 
                     <button class="button" style="vertical-align:middle" id ="canvas"><span>Add to cart</span></button>
                </div>
          </div>
          <div class="storeItem new showcase"> 
              <img src="images/canvas/coco.jpg" alt="Coco canvas" class="storeItemImage">
                <div class ="storeItemInfo"> 
                     Coco - 30 x 30<br><br>
                     $20 
                     <button class="button" style="vertical-align:middle" id ="canvas"><span>Add to cart</span></button>
                </div>
          </div>
          <div class="storeItem music showcase"> 
              <img src="images/canvas/drummer.jpg" alt="Drummer canvas" class="storeItemImage">
                <div class ="storeItemInfo"> 
                     Drummer - 60 x 60<br><br>
                     $50 
                     <button class="button" style="vertical-align:middle" id ="canvas"><span>Add to cart</span></button>
                </div>
          </div>
          <div class="storeItem tv showcase"> 
              <img src="images/canvas/gotHouses.jpg" alt="Game of thrones houses canvas" class="storeItemImage">
                <div class ="storeItemInfo"> 
                     GoT Houses - 40 x 40<br><br>
                     $30 
                     <button class="button" style="vertical-align:middle" id ="canvas"><span>Add to cart</span></button>
                </div>
          </div>
          <div class="storeItem tv new showcase"> 
              <img src="images/canvas/sherlock.jpg" alt="Sherlock canvas" class="storeItemImage">
                <div class ="storeItemInfo"> 
                     Sherlock - 30 x 30<br><br>
                     $20 
                     <button class="button" style="vertical-align:middle" id ="canvas"><span>Add to cart</span></button>
                </div>
          </div>
          <div class="storeItem memes new showcase"> 
              <img src="images/canvas/sunglasses.jpg" alt="Sunglasses canvas" class="storeItemImage">
                <div class ="storeItemInfo"> 
                     Sunglasses - 30 x 30<br><br>
                     $20 
                     <button class="button" style="vertical-align:middle" id ="canvas"><span>Add to cart</span></button>
                </div>
          </div>
          </div>
         </div>

    </div>

    <?php include "javascript/selector.php"; ?>



 </body>


 <?php include "sections/footer.php"; ?>

</html>