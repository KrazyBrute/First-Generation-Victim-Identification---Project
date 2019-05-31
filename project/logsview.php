<?php require './header.php'; ?>
    <!-- End of header.php -->
  
  
  
    <!-- Start of leftnav.php -->
    <?php require './leftnav.php'; ?>
    <!-- End of leftnav.php -->	



    <!-- Start of index Page Content -->
    		<div class="eight columns">
    			<h4>All Logs:</h4>
    			
                <form>
    			    Specific Username: <br>
    			    <input type='text' name='searchLogs'>
    			    
    			</form>


            <?php
//Make connection to database
include 'connection.php';

$query="SELECT * FROM Logs";

$searchLogs = $_GET['searchLogs'];
if (!empty($searchLogs))
{
    $query = $query . " WHERE Username LIKE '%$searchLogs%'";
}


//run query and store the result in a variable called $result
$result=mysqli_query($connection, $query);

 // see if any rows were returned 
  if (mysqli_num_rows($result)> 0) 
{ 
   echo "</br>";
   
   
echo "<table border='1'>
<tr>
<th>User ID</th>
<th>Username</th>
<th>Date / Time</th>
<th>Search Criteria</th>
</tr>";




 
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['UserID'] . "</td>";
  echo "<td>" . $row['Username'] . "</td>";
  echo "<td>" . $row['Date'] . "</td>";
  echo "<td>" . $row['Search_Contents'] . "</td>";


  echo "</tr>";
  }
echo "</table>";



 




}

?>

    					
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
