<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Random user Generator</title>
	
</head>
<body>
	<div >
		<a href='/'>&#8592; Home</a>
	</div>

	<form action="/RUG" method="GET">
	      <br/><br/>
	      <input type="text" name="NumUser" maxlength="2" size = "2" value= <?php if($error=="no") {echo $NumUser;} ?> > Number of user<br/><br/>  
	      <?php
		      if($error=="yes"){
	  			echo "Enter valid number";?> <br/><br/> <?php
  		  }?>

	      <input class="Align" type="checkbox" name="BirthDate" <?php if($BirthDate == 'on') {?> checked = "checked"  <?php } ?>/> &nbsp; Include Date of Birth<br/><br/>
	      <input class="Align" type="checkbox" name="Address" <?php if($Address == 'on') {?> checked = "checked"  <?php } ?>/> &nbsp; Include Address<br/><br/>
	      <input class="Align" type="checkbox" name="Profile" <?php if($Profile == 'on') {?> checked = "checked"  <?php } ?>/> &nbsp; Include Profile<br/><br/>
	 

	      <div class="HeadingBox">
	        	<input class="Center" type="submit" value="Generate!"/>
	      </div>

  	</form> 

	
  	<?php 


	for ($i="1"; $i<=$NumUser; ++$i) {?><br/><br/>   <?php
		$faker = Faker\Factory::create();
		echo "Name: "; echo $faker->name;?><br/>   <?php

		if($BirthDate == 'on'){
		echo "Date: "; echo Faker\Provider\DateTime::date();?><br/><?php }?>   <?php

		if($Address == 'on'){
		echo "Address: "; echo $faker->address;?><br/><?php }?>   <?php

		if($Profile == 'on'){
		echo "Profile: "; echo $faker->text;?><br/><?php }?>   <?php
	}
  		
    ?>

</body>
</html>