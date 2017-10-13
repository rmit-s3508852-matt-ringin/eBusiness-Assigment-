<footer>

<div class = "footer"> 
    <div class = "footerWrapper"> 

        <div class = "footerList footerContact footerNew">
            <ul>
                <li>(03) 9543 5234</li>
                <li>support@edgyprints.com </li>
                <li>453 Kingston Street, Melbourne, VIC, 3001</li>
                <li>Total site visitors: <?php file_get_contents('database/counter.txt');
                $variable_from_file = (int)file_get_contents('database/counter.txt');
                echo $variable_from_file;
                 ?>
                </li>
            </ul>
        </div>

        <div class = "footerList footerHelp footerNew">
             <ul>
                <li><a href="terms.php" class = "link">Terms and Conditions</a></li>
                <li><a href="privacyPolicy.php" class = "link">Privacy Policy</a></li>
                <li><a href="contactUs.php" class = "link">Contact Us</a></li>
                <li><a href="shippingPolicy.php" class = "link">Shipping Policy</a></li>
                <li><a href="disclaimerPolicy.php" class = "link">Disclaimer Policy</a></li>
                <li><a href="returns.php" class = "link">Cancellation, Return and Refund Policy</a></li>
            </ul>
        </div>

        <div class = "footerList footerSocial" id = "social">
            <a>Social Links</a><br>
            <a href="https://www.facebook.com/Edgy-Prints-276560496178417/" class="fa fa-facebook"></a>
            <a href="https://twitter.com/EdgyPrints" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-google"></a>
            <a href="#" class="fa fa-pinterest"></a>
            <a href="https://www.instagram.com/edgyprintsss/" class="fa fa-instagram"></a>
        </div>

        <div class = "footerList">
            <img src="images/logo.png" alt="Edgy prints logo" class="logoFooter">
        </div>

        </div>
    </div>
</div>

</footer>