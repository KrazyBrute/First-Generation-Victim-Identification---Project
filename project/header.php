<?php require_once './config/init.php';?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Project</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/normalize.css">
  <link rel="stylesheet" href="assets/css/skeleton.css">
  <link rel="stylesheet" href="assets/css/main.css">


  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="assets/images/padlock.jpg">
  
  
  
  

<!-- Include the jQuery library (local or CDN) -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>

<!-- Include the plugin *after* the jQuery library -->
<script src="assets/js/slider/js/bjqs-1.3.min.js"></script>

<!-- Include the basic styles -->
<link type="text/css" rel="Stylesheet" href="assets/js/slider/bjqs.css" />

 
 
</head>

<body>

   


  <!-- Primary Page Layout Begins
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container"> <!-- Container Starts -->
  
  <div class="row">
    <!-- Top Section -->
    <div class="two columns" style="margin-top: 30px">
			<a href="index.php" id="homebtn">Home</a>
		</div>
		<div class="eight columns">
			<h2  class="remove-bottom" style="margin-top: 30px;text-align: center;">First Generation Image Victim Identification</h2>
		</div>
		

		<div style="margin-top: 30px" id="nav" class="two columns">
		
		<?php
		
	        	if (!isset($_SESSION['username1']))
                     {
                         echo 
                         "<ul>
                			  
                			  <li><a href='loginbox.php'>Login</a>
                			 </li>
                		</ul>";
                     }
                     else
                     {
                         // Do nothing
                     }
   
                     if (isset($_SESSION['username1']))
                     {
                         echo "You are logged in";
                         echo '<p><a href="logout.php">Logout</a></p>';
                     }
                    else
                    {
                        echo "You are not logged in";
                    }
                    
                    if ($_SESSION['admin'] == '1')
                          {
                            echo "You have admin access";
                          }

                ?>
		</div>
		
		
		
		
		<div class="twelve columns">
		<hr />
		</div>
		</div>