<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Random user Generator</title>
	
</head>
<body>
	<div >
		<a href='/'>Home</a>
	</div>

	<form action="/RUG" method="GET">
	      <br/><br/>
	      <input type="text" name="NumUser" maxlength="2" size = "2"/> Number of user<br/><br/>      
	 
	      <div class="HeadingBox">
	        	<input class="Center" type="submit" value="Generate!"/>
	      </div>
  	</form> 

	
  	<?php 

  	if($error=="yes"){
  		echo "Enter valid number";
  	}

	for ($i="1"; $i<=$NumUser; ++$i) {?><br/><br/>   <?php
		$faker = Faker\Factory::create();
		echo "Name: "; echo $faker->name;?><br/>   <?php
		echo "Address: "; echo $faker->address;?><br/>   <?php
		echo "Text: "; echo $faker->text;?><br/>   <?php
	}
  		
    ?>

</body>
</html>