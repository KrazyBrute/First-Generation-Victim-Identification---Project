<?php require 'header.php'; ?>
    <!-- End of header.php -->
  
  
  
    <!-- Start of leftnav.php -->
    <?php require 'leftnav.php'; ?>
    <!-- End of leftnav.php -->	



    <!-- Start of index Page Content -->
    		<div class="eight columns">
    				  <section id="container">
    				      
    			<h5>Login Details:</h5>   
         <p>
			<form method="post" action="./login.php">
            <label>Username:</label>
            <input type="text" name="txtUser" value="" />
            
            <label>Password:</label> 
            <input type="password" required name="txtPass" value="" />
            
            <input type="submit" name="subLogin" value="Submit" />
            </form>
            
            </p>
            
		
	    
      </section>
    			
    					
    	 </div>

    
    	 
    	 
    </div> <!-- This div tag ends the div for the row to allign nav and content -->
    
    <div class="twelve columns">
		<hr />
		</div>
		
			 <!-- Footer Starts -->
    <?php require './footer.php'; ?>
		
		
		
  </div> <!-- End of container -->



<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>



    