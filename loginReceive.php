<!DOCTYPE html>

<html>
 <head>
  <?php include "sections/header1.php"; ?>
  <title>Login confirmation</title>
 </head>
 <body>


    <div class = "main">
        
        <img src="images/logo.png" alt="Edgy prints logo" class="logoHome">
        <div class = "welcome"> Login confirmation </div>

        <div class="pageBreak"></div>
       
        <div class="loginBox">
        <div class="confirmationBox">
        <?php 
             $user = $_POST['username'];
             $pass = $_POST['password'];

        	$exist = 0;

	        foreach(file('database/users.txt') as $line) {
		
                       list($a,$b,$c,$d,$e,$f) = explode(",",$line);
                      $b2 = trim($b);
                       if ($a == $user && $b2 == $pass){
			        
                    $exist = 1;

                    $_SESSION['user'] = $a;
    		        $_SESSION['password'] = $b;
    		        $_SESSION['name'] = $c;
    		        $_SESSION['address'] = $d;
    		        $_SESSION['email'] = $e;
			        $_SESSION['newsletter'] = $f;
			        break;
		        }
	        }
	
        	if($exist == 1){
                $_SESSION['logged_in'] = 'true';
	        	echo "This username and password is valid! <br/><br/>You are now logged in! <br/><br/>";
                echo "Please click the link to go to <a href='home.php'>Home</a>";

                file_get_contents('database/counter.txt');
                $variable_from_file = (int)file_get_contents('database/counter.txt');
                $variable_from_file++;
                file_put_contents('database/counter.txt', $variable_from_file);

	        }else{
		        echo "Your username and/or password is not valid <br/><br/>Please try again at <a href='login.php'>Login</a>";
            }

         ?>
        </div>
        </div>

    </div>


 </body> 
<?php include "sections/footerLogin.php"; ?>
</html>