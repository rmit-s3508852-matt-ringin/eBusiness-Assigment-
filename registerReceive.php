<!DOCTYPE html>

<html>
 <head>
  <?php include "sections/header1.php"; ?>
  <title>Register</title>
 </head>
 <body>


    <div class = "main">

	<img src="images/logo.png" alt="Edgy prints logo" class="logoHome">
        <div class = "welcome"> Register Confirmation</div>

        <div class="pageBreak"></div>
           <div class="confirmationBox">
			<?php
	
			$user = $_POST['username'];
    		$pass = $_POST['password'];
    		$name = $_POST['name'];
    		$address = $_POST['address'];
    		$email = $_POST['email'];
			$newsletter = $_POST['newsletter'];

			$newuser = $user.",".$pass.",".$name.",".$address.",".$email.",".$newsletter."\r\n"; 

			$exist = 0;
			$emailExist = 0;

			foreach(file('database/users.txt') as $line) {
		
               		 list($a,$b,$c,$d,$e,$f) = explode(",",$line);
               		 if ($a == $user){
					$exist = 1;
					break;
				}
			}

			foreach(file('database/users.txt') as $line) {
		
                		list($a,$b,$c,$d,$e,$f) = explode(",",$line);
                		if ($e == $email){
					$emailExist = 1;
					break;
				}
			}

	

			if($exist == 1){
	 			echo "This username is already in use! <br/><br/>Please choose another one via <a href='register.php'>Back to register</a>";
			}
			elseif($emailExist == 1){
	  		 echo "This email is already in use! <br/><br/>Please use another one via <a href='register.php'>Back to register</a>";
			}
			else
			{
				$file = fopen('database/users.txt',"a");
				fwrite($file,$newuser);
				fclose($file);

				file_get_contents('database/counter.txt');
                $variable_from_file = (int)file_get_contents('database/counter.txt');
                $variable_from_file++;
                file_put_contents('database/counter.txt', $variable_from_file);

				if($newsletter == 'no') {
				echo "You havn't been singed up to the newsletter </br></br>";
				}
				else{
				echo "You have been singed up to the newsletter</br></br>";
				}
				echo "Your account has been created. <br/><br/>Please log in with the same input via <a href='login.php'>login.html</a>";
			}

			?>
			</div>
		</div>
    </div>

</body>
<?php include "sections/footerLogin.php"; ?>
</html>
