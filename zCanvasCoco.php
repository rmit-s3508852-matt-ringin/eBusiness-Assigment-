<!DOCTYPE html>
<html>
 <head>
  <?php include "sections/header.php"; ?>
  <title>Coco Canvas</title>
 </head>
 <body>

    <?php include "sections/navbar.php"; ?>

    <div class="main">
        
        <img src="images/logo.png" alt="Edgy prints logo" class="logoHome">
        <div class="welcome"> Coco Canvas </div>

        <div class="pageBreak"></div>

        <div class="singleItem"> 
		    <img src="images/canvas/coco.jpg" alt="Coco Canvas" title="picture" width="400" height="400" class="singleItemImage">
	        <div class='item'>
                <b>Price:</b> $20 <br>
                <b>Size:</b> 30cm x 30cm <br>
	            <b>Description:</b> Gabrielle Bonheur "Coco" Chanel was a French fashion designer and businesswoman. She was the founder and namesake of the Chanel brand
            </div>   

           
            <form action="cart.php" id="order" class="itemCart">
                <input type="number" size="2" maxlength="3" name = "QUANTITY" onchange = 'this.value=CKquantity(this.value)' value="1" /> Quantity</input>
                <input type="hidden" name="NAME" id ="NAME" value="Coco Canvas">
                <input type="hidden" name="PRICE" id ="PRICE" value="20">
                <input type=hidden name="ID_NUM" value="102">
                <input type="button" class = "button" value='Add to Cart' onclick='AddToCart(this.form)'/>
            </form>  

           
            

        </div>
    </div>


 </body>

 <?php include "sections/footer.php"; ?>

</html>