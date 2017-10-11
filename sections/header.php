   

    <?php

        ob_start();
        session_start();

        if  (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 'true') {
		
        }
        else {
        header('Location: login.php');
        }

        ob_end_flush();


    ?>

   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <script type="text/javascript" src ="javascript/language-en.js"></script>
    <script type="text/javascript" language="javascript" src ="javascript/nopcart.js">
    //==============================================================
    // NOP Design JavaScript Shopping Cart
    //--------------------------------------------------------------
    // Visit NOP Design at http://www.nopdesign.com/freecart
    //==============================================================
    </script>

    <script>
        function goBack() {
        window.history.back();
        }
    </script>

   
