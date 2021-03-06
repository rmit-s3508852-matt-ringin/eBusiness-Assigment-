<!DOCTYPE html>

<html>
 <head>

  <?php include "sections/header.php"; ?>
  <title>Home Page</title>

 </head>
 <body>

    <?php include "sections/navbar.php"; ?>

    <div class="main">
        
        <img src="images/logo.png" alt="Edgy prints logo" class="logoHome">
        <div class="welcome"> Welcome to Edgy Prints </div>
    
        <div class="intro"> Browse the greatest online selection of Prints including Canvas, T-Shirts and Devices </div>


        <div class="pageBreak"></div>
        
        <div class="bestSellers"> <b>Best Sellers</b> </div>
        <div class="selector">
         <button class="tablink" onclick="openType('canvas', this, '#003987')" id="defaultOpen">Canvas</button>
         <button class="tablink" onclick="openType('clothes', this, '#870000')">Clothes</button>
         <button class="tablink" onclick="openType('devices', this, '#008751')">Devices</button>

         <div id="canvas" class="tabcontent">
             <a href ="zCanvasBarney.php" class="bestItem"> 
                 <img src="images/canvas/himym.jpg" alt="How I met your mother canvas" class="bestItemImage">
                 <div class ="bestItemInfo"> 
                     Barney - 60cm x 60cm<br><br>
                     $50 
                 </div>
             </a>

             <a href ="zCanvasTyrion.php" class="bestItem"> 
                 <img src="images/canvas/got.jpg" alt="Game of thrones canvas" class="bestItemImage">
                 <div class ="bestItemInfo"> 
                     Tyrion - 30cm x 30cm<br><br>
                     $20 
                 </div>
             </a>

             <a href ="zCanvasCoco.php" class="bestItem"> 
                 <img src="images/canvas/coco.jpg" alt="Coco canvas" class="bestItemImage">
                 <div class ="bestItemInfo"> 
                     Coco - 30cm x 30cm<br><br>
                     $20 
                 </div>
             </a>

             <a href ="zCanvasSherlock.php" class="bestItem">
                 <img src="images/canvas/sherlock.jpg" alt="Sherlock Canvas" class="bestItemImage"> 
                 <div class ="bestItemInfo"> 
                     Sherlock - 40cm x 40cm<br><br>
                     $40 
                 </div>

             </a>
         </div>

         <div id="clothes" class="tabcontent">
             <a href ="zShirtFight.php" class="bestItem"> 
                 <img src="images/shirts/floydConor.png" alt="Floyd Mayweather and Conor McGregor shirt" class="bestItemImage">
                 <div class ="bestItemInfo"> 
                     Mayweather and McGregor Shirt <br><br>
                     $30 
                 </div>
             </a>

             <a href ="zShirtBatman.php" class="bestItem"> 
                 <img src="images/shirts/nightman.png" alt="Nightman Shirt" class="bestItemImage">
                  <div class ="bestItemInfo"> 
                     Nightman Shirt<br><br>
                     $30 
                 </div>
             </a>

             <a href ="zShirtTrump.php" class="bestItem"> 
                 <img src="images/shirts/trump.png" alt="Trump shirt" class="bestItemImage">
                  <div class ="bestItemInfo"> 
                     Trump Card Shirt<br><br>
                     $30 
                 </div>
             </a>

             <a href ="zShirtYeezy.php" class="bestItem"> 
                 <img src="images/shirts/yeezy.png" alt="Yeezy shirt" class="bestItemImage">
                  <div class ="bestItemInfo"> 
                     Yeezy Shirt<br><br>
                     $30 
                 </div>
             </a>

         </div>

         <div id="devices" class="tabcontent">
             <a href ="zCaseBatman.php" class="bestItem"> 
                 <img src="images/cases/batman.png" alt="Batman phone case" class="bestItemImage">
                  <div class ="bestItemInfo"> 
                     Nightman iPhone case<br><br>
                     $15 
                 </div>
             </a>

             <a href ="zCaseFight.php" class="bestItem">
                 <img src="images/cases/moneyFight.png" alt="Money fight phone case" class="bestItemImage" class ="phone"> 
                 <div class ="bestItemInfo"> 
                     Mayweather/McGregor iPhone case<br><br>
                     $15 
                 </div>
             </a>

             <a href ="zCaseTrump.php" class="bestItem">
                 <img src="images/cases/trump.png" alt="Trump phone case" class="bestItemImage"> 
                 <div class ="bestItemInfo"> 
                     Trump iPhone case<br><br>
                     $15 
                 </div>
             </a>

             <a href ="zCaseYeezy.php" class="bestItem">
                 <img src="images/cases/yeezy.png" alt="Yeezy phone case" class="bestItemImage"> 
                 <div class ="bestItemInfo"> 
                     Yeezy iPhone case<br><br>
                     $15 
                 </div>
             </a>

         </div>
        </div>

    </div>

    <script>
     function openType(typeName,elmnt,color) {
     var i, tabcontent, tablinks;
     tabcontent = document.getElementsByClassName("tabcontent");
     for (i = 0; i < tabcontent.length; i++) {
         tabcontent[i].style.display = "none";
     }
     tablinks = document.getElementsByClassName("tablink");
     for (i = 0; i < tablinks.length; i++) {
         tablinks[i].style.backgroundColor = "";
     }
     document.getElementById(typeName).style.display = "block";
     elmnt.style.backgroundColor = color;
    }
     // Get the element with id="defaultOpen" and click on it
     document.getElementById("defaultOpen").click();
    </script>


 </body>


 <?php include "sections/footer.php"; ?>

</html>