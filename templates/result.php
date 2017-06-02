<?php 
 /**
  *
  * Templating function that outputs and HTML page
  *
  * @author  Siya
  *
  * @since 1.0
  *
  * @param text  messge
  * @param value either 1 or 0 depending on leader collection status.
  */
 
 function get_result($text, $value) {
 	echo "
	 	<!DOCTYPE html>
			<html>
			<head>
				<title>Odity Technical Assessment Application</title>
				<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' integrity='sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u' crossorigin='anonymous'>
			</head>
			<body>
			<!-- Let's do this -->
			  <div class='container'>
			    <div class='jumbotron'>
				   <h1 class='text-center'>CSV Uploader Results</h1>
				   <h1 class='text-center'>$value</h1> 
				   <p class='text-center'>$text</p> 
			    </div>
			    <div class='row'>
			       <div class='col-md-4'>
			       	
			       </div>
			       <div class='col-md-4'>
			       	  
			       </div>
			       <div class='col-md-4'>
			       	
			       </div>
			    </div>
			  </div>			 
			</body>
		</html>
	";
 }
 
 