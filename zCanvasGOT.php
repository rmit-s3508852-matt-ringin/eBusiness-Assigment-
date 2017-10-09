<!DOCTYPE html>
<html>
 <head>
  <?php include "sections/header.php"; ?>
  <title>GoT Houses Canvas</title>
 </head>
 <body>

    <?php include "sections/navbar.php"; ?>

    <div class="main">
        
        <img src="images/logo.png" alt="Edgy prints logo" class="logoHome">
        <div class="welcome"> GoT Houses Canvas </div>

        <div class="pageBreak"></div>

        <div class="singleItem"> 
		    <img src="images/canvas/gotHouses.jpg" alt="GoT Houses Canvas" title="picture" width="400" height="400" class="singleItemImage">
	        <div class='item'>
                <b>Price:</b> $30 <br>
                <b>Size:</b> 40cm x 40cm <br>
	            <b>Description:</b> The popular tv show, Game of Thrones has popular houses, for fans this one is to stick up on your wall
            </div>   

           
            <form action="cart.php" id="order" class="itemCart">
                <input type="number" size="2" maxlength="3" name = "QUANTITY" onchange = 'this.value=CKquantity(this.value)' value="1" /> Quantity</input>
                <input type="hidden" name="NAME" id ="NAME" value="GoT Houses Canvas">
                <input type="hidden" name="PRICE" id ="PRICE" value="30">
                <input type=hidden name="ID_NUM" value="8768">
                <input type="button" class = "button" value='Add to Cart' onclick='AddToCart(this.form)'/>
            </form>  

           
            

        </div>
    </div>


 </body>

 <?php include "sections/footer.php"; ?>

</html>