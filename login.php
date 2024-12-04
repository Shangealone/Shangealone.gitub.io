<!doctype html>
<html lang="en">
	<head>
		<title>Total War Fandom</title>
		<meta charset=utf-8>
		<link rel="stylesheet" type="text/css" href="css/includes.css">
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	</head>
		<?php include('navigation_home.php');?>
	<div id="register-form-container">
                <div id="register-form-content">
                    <h2>Login</h2>
                    <form action="register.page.php" method="post">
                        <p>
                            <label class="label" for='Email Address'>Email Address:</label>
                            <input type="text" id="fname" name="fname" size="30" maxlength="40">
                        </p>

                        <p>
                            <label class="label" for='Password'>Password:</label>
                            <input type="text" id="lname" name="lname" size="30" maxlength="40">
                        </p>   
						<p>
                    <input type="submit" id="submit" name="submit" value="Login">
                </p>
            </form>
        </div>
	<body>
	
		<div id="container">


	</br>	</br>	</br> 

		<?php include('footer.php');?>

		
			

    </body>
</html>