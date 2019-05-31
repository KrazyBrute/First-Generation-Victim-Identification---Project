<?php
//Make connection to database
require 'header.php';


		$schoolname=$_POST['txtSchoolName'];
		$phonenumber=$_POST['txtPhoneNumber'];
		$location=$_POST['txtLocation'];
		$postcode=$_POST['txtPostCode'];
		$age=$_POST['txtAge'];
		$uniform=$_POST['txtUniform'];
		$badge=$_POST['txtBadge'];
		$tie=$_POST['txtTie'];
		$blazer=$_POST['txtBlazer'];
		$hiddenid=$_POST['hideSchoolID'];
		
//Produce an update query to update product record for the id provided
$query = "UPDATE Schools SET School_Name ='$schoolname', Age_Range = '$age', Phone_Number ='$phonenumber', Location = '$location', Post_Code = '$postcode', Uniform_Colour = '$uniform', Badge = '$badge', Tie = '$tie', Blazer = '$blazer' WHERE School_ID = '$hiddenid'";
//run query 
mysqli_query($connection, $query);

echo "School Information Updated Successfully!"

?>

