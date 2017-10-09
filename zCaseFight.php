<!DOCTYPE html>
<html>
 <head>
  <?php include "sections/header.php"; ?>
  <title>Money Fight Case</title>
 </head>
 <body>

    <?php include "sections/navbar.php"; ?>

    <div class="main">
        
        <img src="images/logo.png" alt="Edgy prints logo" class="logoHome">
        <div class="welcome"> Money Fight Case </div>

        <div class="pageBreak"></div>

        <div class="singleItem"> 
		    <img src="images/cases/moneyFight.png" alt="Money Fight Case" title="picture" width="400" height="400" class="singleItemImage">
	        <div class='item'>
                <b>Price:</b> $15 <br>
                <b>Device:</b> iPhone 7<br>
	            <b>Description:</b> The money fight is in regards to Floyd MayWeather vs Conor Mcregregor, the most highest paying boxing match in history, on the 26th of August 2017
            </div>   

           
            <form action="cart.php" id="order" class="itemCart">
                <input type="number" size="2" maxlength="3" name = "QUANTITY" onchange = 'this.value=CKquantity(this.value)' value="1" /> Quantity</input>
                <input type="hidden" name="NAME" id ="NAME" value="Money Fight Case">
                <input type="hidden" name="PRICE" id ="PRICE" value="15">
                <input type=hidden name="ID_NUM" value="6343">
                <input type="button" class = "button" value='Add to Cart' onclick='AddToCart(this.form)'/>
            </form>  

           
            

        </div>
    </div>


 </body>

 <?php include "sections/footer.php"; ?>

</html>