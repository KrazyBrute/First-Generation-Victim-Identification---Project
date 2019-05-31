<?php require './header.php'; ?>
    <!-- End of header.php -->
  
  
  
    <!-- Start of leftnav.php -->
    <?php require './leftnav.php'; ?>
    <!-- End of leftnav.php -->	



    <!-- Start of index Page Content -->
    		<div class="eight columns">
    			<h4>School Overview:</h4>

            
<?php
//Make connection to database
include 'connection.php';

$searchSchool = $_GET['searchSchool'];

$query="SELECT * FROM Schools WHERE School_Name LIKE '%$searchSchool%'";



//run query and store the result in a variable called $result
$result=mysqli_query($connection, $query);


 // see if any rows were returned 
  if (mysqli_num_rows($result)> 0) 
{ 


while($row = mysqli_fetch_array($result))
  {
      echo "School Details:" . "<br>";
      echo "School Name: " . $row['School_Name'] . "<br>";
      echo "Location: " . $row['Location'] . "<br>";
      echo "Post Code: " . str_replace("+"," ",$row['Post_Code']) . "<br>";
      echo "Pupils Age Range: " . $row['Age_Range'] . "<br>";
      echo "School Phone Number: " . $row['Phone_Number'] . "<br>";
      echo "<br>";
      echo "Uniform Details:" . "<br>";
      echo '<img src="./assets/images/' . $row['Badge'] . '"  />';
      echo '<img src="./assets/images/' . $row['Tie'] . '"  />';
      echo '<img src="./assets/images/' . $row['Blazer'] . '"  />';
      echo "<br>";
      echo "<br>";
      echo "Date Of Images Collection: " . $row['Image_Collected'] . "<br>";
    $postcode = $row['Post_Code'];
   $id = $row['School_ID'];
   
  }


}

   


       echo '<iframe
          width="400"
          height="250"
          frameborder="0" style="border:0"
          src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDV7B26FNd1YQzvmNhE0JhLuqFD1lVawFI
            &q=' . $postcode . '"allowfullscreen>
        </iframe>';

    echo "<br>"	;				
    echo '<a href="amendSchool.php?id=' . $id. '"class="button">Amend These Details</a>';





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
