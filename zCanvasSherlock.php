<!DOCTYPE html>
<html>
 <head>
  <?php include "sections/header.php"; ?>
  <title>Sherlock Canvas</title>
 </head>
 <body>

    <?php include "sections/navbar.php"; ?>

    <div class="main">
        
        <img src="images/logo.png" alt="Edgy prints logo" class="logoHome">
        <div class="welcome"> Sherlock Canvas </div>

        <div class="pageBreak"></div>

        <div class="singleItem"> 
		    <img src="images/canvas/sherlock.jpg" alt="Sherlock Canvas" title="picture" width="400" height="400" class="singleItemImage">
	        <div class='item'>
                <b>Price:</b> $20 <br>
                <b>Size:</b> 30cm x 30cm <br>
	            <b>Description:</b> Sherlock Holmes is a fictional private detective created by British author Sir Arthur Conan Doyle. 
            </div>   

           
            <form action="cart.php" id="order" class="itemCart">
                <input type="number" size="2" maxlength="3" name = "QUANTITY" onchange = 'this.value=CKquantity(this.value)' value="1" /> Quantity</input>
                <input type="hidden" name="NAME" id ="NAME" value="Sherlock Canvas">
                <input type="hidden" name="PRICE" id ="PRICE" value="20">
                <input type=hidden name="ID_NUM" value="4324">
                <input type="button" class = "button" value='Add to Cart' onclick='AddToCart(this.form)'/>
            </form>  

           
            

        </div>
    </div>


 </body>

 <?php include "sections/footer.php"; ?>

</html>