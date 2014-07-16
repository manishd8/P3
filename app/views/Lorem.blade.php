<?php namespace Badcow\LoremIpsum; ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lorem Ipsum Text Generator</title>
	
</head>
<body>
	<div >
		<a href='/'>Home</a>
	</div>

	<form action="/LIG" method="GET">
	      <br/><br/>
	      <input type="text" name="NumPara" maxlength="2" size = "2"/> Number of paragraph<br/><br/>      
	 
	      <div class="HeadingBox">
	        	<input class="Center" type="submit" value="Generate!"/>
	      </div>
  	</form> 

	
  	<?php 

  	if($error=="yes"){
  		echo "Enter valid number";
  	}

  	if($NumPara>"0") {
  		$generator = new Generator();
  		$paragraphs = $generator->getParagraphs($NumPara);

  		foreach ($paragraphs as $key => $value) {?><br/><br/>   <?php 
  			print_r($value);
  		}
  		
  	 } ?>

</body>
</html>