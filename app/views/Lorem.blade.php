<?php namespace Badcow\LoremIpsum; ?>
<!doctype html>
<html lang="en">
<head>
	<LINK href="styles/Style1.css" rel="stylesheet" type="text/css">
	<meta charset="UTF-8">
	<title>Lorem Ipsum Text Generator</title>
	
</head>
<body>
	<div >
		<a href='/'>&#8592; Home</a>
	</div><br/><br/>

	<div class="MainBox1">
		<h1 class="Heading">Text Generator</h1><br/>
		<form action="/LIG" method="GET">
		      <input type="text"  class="Align1" name="NumPara" maxlength="2" size = "1" value= <?php if($error=="no") {echo $NumPara;} ?> > <font size="4">&nbsp Number of Paragraph</font><br/>    
		 
		 <?php
		      if($error=="yes"){?><p class="Center1"><font size="3" color="red">Enter valid number</font></p> <?php
	  		
	  		}?><br/>

		      <div class="HeadingBox">
		        	<input class="Center" type="submit" value="Generate!"/>
		      </div>
	  	</form> 

		</div><br/><br/>
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