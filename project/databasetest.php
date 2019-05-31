<?php require './header.php'; ?>
    <!-- End of header.php -->
  
  
  
    <!-- Start of leftnav.php -->
    <?php require './leftnav.php'; ?>
    <!-- End of leftnav.php -->	



    <!-- Start of index Page Content -->
    		<div class="eight columns">
    			<h4>Location Search</h4>
    			
    			<p> This box can be used to enter specific locations, to view specific locations enter the location below.</p>
    			
    			<form action="results.php">
    			    <input type='text' name='searchSchool'>
                        <input type="submit" name="searchBtn" value="Submit">
    			    </form>
    			
    			<br />
    			
    			<form action="results.php">
                 <button type="submit">View All Data Stored</button>
    			    </form>
    			
    			<br />
    			
    			<h4> Specific School Name Search</h4>
                <form action="overview.php">
                    
                    <p> Please enter the desired schools name.</p>
    			    <input required type='text' name='searchSchool'>
    			    
    			        
    			
                        <input type="submit" name="searchBtn" value="Submit">
    			</form>

                <br />
                
                <h4> Check Box Auto Generate</h4>
                 <form action="checkboxsearch.php" method="POST">
        <?php
                $query="SELECT * FROM Descriptions";
                //run query and store the result in a variable called $result
                $result=mysqli_query($connection, $query);
                
                 // see if any rows were returned 
                  if (mysqli_num_rows($result)> 0) 
                { 
                    while($row = mysqli_fetch_array($result))
                    {
                        echo  '<input type="checkbox" name="category[]" value=' . $row['Description'] . '>' . $row['Description'] .  '<br />';
                    }
                }    
                   
        ?>
        
        
        
        
        
        
    			
                        <input type="submit" name="searchBtn" value="Submit">
    			</form>
    			
    					
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
