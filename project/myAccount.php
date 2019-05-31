<?php require './header.php'; ?>
    <!-- End of header.php -->
  
  
  
    <!-- Start of leftnav.php -->
    <?php require './leftnav.php'; ?>
    <!-- End of leftnav.php -->	



    <!-- Start of index Page Content -->
    		<div class="eight columns">
    			<h2>Manage Your Account</h2>

    			
    			
    			
    			
<?php
        


    //Acquiring user details from session variables set in login.php
    echo " Firstname: " . $_SESSION['firstname'] . "<br />";
    echo " Surname: " . $_SESSION['surname'] . "<br />";
    echo " Username: " . $_SESSION['username1'] . "<br />";
    echo " Password: " . $_SESSION['password'] . "<br />";
    echo " Email: " . $_SESSION['email'] . "<br />";



?>
    			
    			
    					
    	 </div>

    
    	 
    	 
    </div> <!-- This div tag ends the div for the row to allign nav and content -->
    
    <div class="twelve columns">
		<hr />
		</div>
		
  </div> <!-- End of container -->

    <!-- Footer Starts -->


<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
