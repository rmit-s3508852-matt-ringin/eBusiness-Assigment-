<!DOCTYPE html>

<html>
 <head>
  <?php include "sections/header.php"; ?>
  <title>Checkout</title>
 </head>
 <body>

    <?php include "sections/navbar.php"; ?>

    <div class = "main cartPage">
        
        <img src="images/logo.png" alt="Edgy prints logo" class="logoHome">
        <div class = "welcome"> Checkout </div>

         <div class="pageBreak"></div>

        <div class="checkoutBox cartPage">
        <form action="checkoutConfirmation.php" method ="post">
            <script type="text/javascript">
            CheckoutCart();
            </script>
            <br /><br />
            <div class='checkoutInfo'>
            <input type="text" class="checkoutInput" name="name" value="<?php echo $_SESSION['name']; ?>" required><br>
            <input type="text" class="checkoutInput" name="email" value="<?php echo $_SESSION['email']; ?>" required><br>
            <input type="text"  class="checkoutInput"name="address" value="<?php echo $_SESSION['address']; ?>" required><br>
            <div class="pageBreak1"></div>
            <input type="number" class="checkoutInput" placeholder="Card Number" name="card" maxlength="10" required title="Not a valid card number. Must be 16 digits."><br>
            <select  class="checkoutInput expiry" id="month" placeholder="Month" name="month" required>
                <option value="" selected disabled hidden>Month</option>
                <option value="january"> January </option>
                <option value="febuary"> Febuary </option>
                <option value="march"> March </option>
                <option value="april"> April </option>
                <option value="may"> May </option>
                <option value="june"> June </option>
                <option value="july"> July </option>
                <option value="august"> August </option>
                <option value="september"> September </option>
                <option value="october"> October </option>
                <option value="november"> November </option>
                <option value="december"> December </option>
            </select>
            <select class="checkoutInput expiry" id="year" placeholder="Year" name="year" required>
                 <option value="" selected disabled hidden>Year</option>
                <option value="2017"> 2017 </option>
                <option value="2018"> 2018 </option>
                <option value="2019"> 2019 </option>
                <option value="2020"> 2020 </option>
                <option value="2021"> 2021 </option>
            </select><br>
            <input type="number" class="checkoutInput" placeholder="CVV" name="cvv" pattern=".{3,4}" required title="Not a valid CVV. Must be 3 or 4 digits"><br>
            <br /><br />
            <input type="submit" class ="checkoutButton" value="Submit Order" />
            </div>
        </form>
        </div>

    </div>


 </body>


 <?php include "sections/footer.php"; ?>

</html>