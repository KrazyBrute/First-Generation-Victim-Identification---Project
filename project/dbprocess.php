<?php
//Make connection to database
include 'connection.php';

$query="SELECT * FROM Schools";


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
<th>Uniform Colour</th>
<th>Badge</th>";



"<th>Amend</th>
<th>Delete</th>
</tr>";
 
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['School_Name'] . "</td>";
  echo "<td>" . $row['Phone_Number'] . "</td>";
  echo "<td>" . $row['Location'] . "</td>";
  echo "<td>" . $row['Uniform_Colour'] . "</td>";
  echo "<td>" . '<img src="./assets/images/' . $row['Badge'] . '"  />' . '</td>';
  


  echo "</tr>";
  }
echo "</table>";








}

   // LOG SCRIPT GOES HERE
   
   $username = $_SESSION['username_for_log'];
   $userid = $_SESSION['userid'];
 
$query="INSERT INTO Logs (`User_ID` , `Username`) VALUES ('$userid', '$username')";   
$logresult=mysqli_query($connection, $query);

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




