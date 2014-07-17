<?php namespace Badcow\LoremIpsum; ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lorem Ipsum Text Generator</title>
	
</head>
<body>
	<div >
		<a href='/'>&#8592; Home</a>
	</div>

	<form action="/LIG" method="GET">
	      <br/><br/>
	      <input type="text" name="NumPara" maxlength="2" size = "2" value= <?php if($error=="no") {echo $NumPara;} ?> > Number of paragraph<br/><br/>      
	 
	 <?php
	      if($error=="yes"){
  			echo "Enter valid number";
  		}?>

	      <div class="HeadingBox">
	        	<input class="Center" type="submit" value="Generate!"/>
	      </div>
  	</form> 

	
  	<?php 

  	if($NumPara>"0") {
  		$generator = new Generator();
  		$paragraphs = $generator->getParagraphs($NumPara);

  		foreach ($paragraphs as $key => $value) {?><br/><br/>   <?php 
  			print_r($value);
  		}
  		
  	 } ?>

</body>
</html>