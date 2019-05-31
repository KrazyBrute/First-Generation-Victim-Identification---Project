<?php
//Make connection to database
include 'config/init.php';



		$schoolname=$_POST['txtSchoolName'];
		$phonenumber=$_POST['txtPhoneNumber'];
		$location=$_POST['txtLocation'];
		$postcode=$_POST['txtPostCode'];
		$postcode = str_replace(' ', '+', $postcode);
		$age=$_POST['txtAge'];
		$uniform=$_POST['txtUniformColour'];
		$description=$_POST['txtDescription'];
		$badge=$_POST['txtBadge'];
		$tie=$_POST['txtTie'];
		$blazer=$_POST['txtBlazer'];
		$date=$_POST['txtDate'];
		$query="INSERT INTO Schools (`School_Name` , `Age_Range` , `Phone_Number`, `Location`, `Post_Code`, `Uniform_Colour`, `Description`, `Badge`, `Tie`, `Blazer`, `Image_Collected`) VALUES ('$schoolname', '$age' , '$phonenumber', '$location', '$postcode', '$uniform', '$description', '$badge', '$tie', '$blazer', '$date')";
		mysqli_query($connection, $query);
		
		
		
        //Description table type checker
		$query='SELECT * FROM Descriptions WHERE Description =' . "'$description'";
        $result=mysqli_query($connection, $query);

          if (mysqli_num_rows($result)> 0) 
        { 
            //Do nothing as description already in database
        }
        else
        {
                $query="INSERT INTO Descriptions (`Description`) VALUES ('$description')";
                $result=mysqli_query($connection, $query);
        }
        

    	echo "School Added Successfully!";
		echo "<br />";
		echo '<a href="index.php">Home</a>';        		
		
		
		
		
		
		
		
		
		
		
		
		
