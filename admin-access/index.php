<?php
	include('../php-functions/includes.php');
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/app.css">

</head>
<body>


	 <header>
	 
	 </header>	
	 
	 
	 
	 
	 
	 <section id="main-login">
		 

		 <div id="login">
			 <?php echo get_include_path(); ?>
			<form action="" method="post">
				 <input type="text" name="firstname" placeholder="First Name" />
				 <input type="text" name="lastname" placeholder="Last Name"/>
				 <input type="text" name="username" placeholder="Choose a Username"/>
				 <input type="email" name="email"placeholder="Email"/>
				 <input type="submit" name="submit" />
			 </form>
		 </div>
	 
	 </section>
  
  
  
  
	  
	 <footer>
	 </footer>  
	 
	 
	 
	 
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</body>
</html>