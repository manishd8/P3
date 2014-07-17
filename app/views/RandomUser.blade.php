<!doctype html>
<html lang="en">
<head>
	<LINK href="styles/Style1.css" rel="stylesheet" type="text/css">
	<meta charset="UTF-8">
	<title>Random user Generator</title>
	
</head>
<body>
	<div >
		<a href='/'>&#8592; Home</a>
	</div>

	<div class="MainBox">
		 <h1 class="Heading">Random User Generator</h1>
		<form action="/RUG" method="GET">
		      <br/><br/>
		      <input class="Align" type="text" name="NumUser" maxlength="2" size = "2" value= <?php if($error=="no") {echo $NumUser;} ?> > Number of user<br/>  
		      <?php
			      if($error=="yes"){?> 
			      <p class="Center"><font size="3" color="red">Enter valid number</font></p> <?php
	  		  }?><br/>

		      <input class="Align" type="checkbox" name="BirthDate" <?php if($BirthDate == 'on') {?> checked = "checked"  <?php } ?>/> &nbsp; Include Date of Birth<br/><br/>
		      <input class="Align" type="checkbox" name="Address" <?php if($Address == 'on') {?> checked = "checked"  <?php } ?>/> &nbsp; Include Address<br/><br/>
		      <input class="Align" type="checkbox" name="Profile" <?php if($Profile == 'on') {?> checked = "checked"  <?php } ?>/> &nbsp; Include Profile<br/><br/>
		 

		      <div class="HeadingBox">
		        	<input class="Center" type="submit" value="Generate!"/>
		      </div>

	  	</form> 
	 </div>
	
	
	  	<?php 

	  	$lineWidth*="20";
		for ($i="1"; $i<=$NumUser; ++$i) { ?><br/><br/> 
		<div class="Center" height="<?php echo $lineWidth ?>">  <?php
			$faker = Faker\Factory::create();
			echo "Name: "; echo $faker->name;?><br/>   <?php

			if($BirthDate == 'on'){
			echo "Date: "; echo Faker\Provider\DateTime::date();?><br/><?php }?>   <?php

			if($Address == 'on'){
			echo "Address: "; echo $faker->address;?><br/><?php }?>   <?php

			if($Profile == 'on'){
			echo "Profile: "; echo $faker->text;?><br/><?php }?>  
			</div>
		<?php } ?>
	</div>
</body>
</html>