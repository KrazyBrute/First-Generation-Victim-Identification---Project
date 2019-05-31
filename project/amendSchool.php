<?php
require_once 'header.php';
require_once 'leftnav.php';


//Gather id sent 
$id = $_GET['id'];
$query = "SELECT * FROM Schools WHERE School_ID = $id";

//run query and store result
$result = mysqli_query($connection, $query);

//extract row from result using mysqli_fetch_assoc()and store $row
$row = mysqli_fetch_assoc($result);

?>

<section id="container">
         <p>
			<form method="post" action="updateSchool.php">

				<fieldset class="fieldset-width1">
					<legend>
						Amend School Details
					</legend>
					<label class="align" for="txtSchoolName">School Name: </label>
					<input type="text" name="txtSchoolName" value="<?php echo $row['School_Name']; ?>"/>
					<br />
					<br />
					<label class="align"for="txtPhoneNumber">Phone Number: </label>
					<input type="text" name="txtPhoneNumber" value="<?php echo $row['Phone_Number']; ?>"/>
					<br />
					<br />
					<label class="align" for="txtLocation">Location: </label>
					<input type="text" name="txtLocation" value="<?php echo $row['Location']; ?>"/>
					<br />
					<br />
					<label class="align" for="txtPostCode">Post Code: </label>
					<input type="text" name="txtPostCode" value="<?php echo $row['Post_Code']; ?>"/>
					<br />
					<br />
					<label class="align" for="txtAge">Pupil Age Range: </label>
					<input type="text" name="txtAge" value="<?php echo $row['Age_Range']; ?>"/>
					<br />
					<br />
					<label class="align" for="txtUniform">Uniform Colour: </label>
					<input type="text" name="txtUniform" value="<?php echo $row['Uniform_Colour']; ?>"/>
					<br />
					<br />
					<label class="align" for="txtBadge">Badge: </label>
					<input type="text" name="txtBadge" value="<?php echo $row['Badge']; ?>"/>
					<br />
					<br />
					<label class="align" for="txtTie">Tie: </label>
					<input type="text" name="txtTie" value="<?php echo $row['Tie']; ?>"/>
					<br />
					<br />
					<label class="align" for="txtBlazer">Blazer: </label>
					<input type="text" name="txtBlazer" value="<?php echo $row['Blazer']; ?>"/>
					<br />
					<br />
                    <input type="hidden" name="hideSchoolID" value="<?php echo $row['School_ID']; ?>" /> 
                    <br />
					<br />
					<input type="submit" value="Submit" name='submit' />
					<input type="reset" value="Clear" />
			</form>
		</p>
      </section>