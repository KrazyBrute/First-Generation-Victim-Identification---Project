<?php require './header.php'; ?>
    <!-- End of header.php -->
  
  
  
    <!-- Start of leftnav.php -->
    <?php require './leftnav.php'; ?>
    <!-- End of leftnav.php -->	



    <!-- Start of index Page Content -->
    		<div class="eight columns">
    			<h4>Results:</h4>
    			



            <?php
//Make connection to database
include 'connection.php';

//create a query to select all records from products table
$query="SELECT * FROM Schools";

$searchSchool = "Viewed all data";
$searchSchool = $_GET['searchSchool'];

if (!empty($searchSchool))
{
    $query = $query . " WHERE School_Name LIKE '%$searchSchool%' OR Location LIKE '%$searchSchool%'";
}

//run query and store the result in a variable called $result
$result=mysqli_query($connection, $query);

 // see if any rows were returned 
  if (mysqli_num_rows($result)> 0) 
{ 
   echo "</br>";
   
   
echo "<table border='1'>
<tr>
<th>School Name</th>
<th>Phone Number</th>
<th>Location</th>
<th>Badge</th>
<th>Tie</th>
<th>Blazer</th>";



"<th>Amend</th>
<th>Delete</th>
</tr>";
 
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['School_Name'] . "</td>";
  echo "<td>" . $row['Phone_Number'] . "</td>";
  echo "<td>" . $row['Location'] . "</td>";
  echo "<td>" . '<img src="./assets/images/' . $row['Badge'] . '"  />' . '</td>';
  echo "<td>" . '<img src="./assets/images/' . $row['Tie'] . '"  />' . '</td>';
  echo "<td>" . '<img src="./assets/images/' . $row['Blazer'] . '"  />' . '</td>';
  


  echo "</tr>";
  }
echo "</table>";



 




}
// Log Saving

if (empty($searchSchool))
{
    $searchSchool = "Viewed all data";
}

   $username = $_SESSION['username_for_log'];
   $userid = $_SESSION['userid'];
    $datetime = date("d-m-Y H:i:s");
    
$query2="INSERT INTO Logs (`UserID` , `Username`, `Date`, `Search_Contents`) VALUES ('$userid' , '$username', '$datetime', '$searchSchool')";   
mysqli_query($connection, $query2); 

?>
<form method="POST" action=''>
    <input type="submit" name="refreshbutton"  value="Refresh">
    </form>

<?php

        if (isset($_POST['refreshbutton'])) 
                { 
                    header('Location: '.$_SERVER['PHP_SELF']);
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
