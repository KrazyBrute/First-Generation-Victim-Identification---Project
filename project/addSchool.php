<?php require './header.php'; ?>
    <!-- End of header.php -->
  
  
  
    <!-- Start of leftnav.php -->
    <?php require './leftnav.php'; ?>
    <!-- End of leftnav.php -->	


    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $('#datepicker').datepicker({ dateFormat: 'dd-mm-yy' });
  } );
  </script>


    			
<script>
function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "deschelp.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>

    <div class="addform">
                <h2>Add New School</h2>
                <form method="POST" action="insertSchool.php">
                <fieldset>
                		<legend>
                			Enter Details
                		</legend>
                		<label for="">School Name: </label>
                		<input required type="text" name="txtSchoolName" /><br />
                		<label for="">Phone Number: </label>
                		<input required  type="text" name="txtPhoneNumber" /><br />
                		<label for="">Location: </label>
                		<input required type="text" name="txtLocation" /><br />
                		<label for="">Post Code: </label>
                		<input required type="text" name="txtPostCode" placeholder="E.g. WF1 1FW"/><br />
                		<label for="">Pupil Age Range: </label>
                		<input required type="text" name="txtAge" placeholder="E.g. 10-16"/><br />
                		
                		<label for="">Uniform Colour: </label>
                		<select name="txtUniformColour">
                		  <option value="" selected disabled hidden>Please Select</option>
                          <option value="Red">Red</option>
                          <option value="Orange">Orange</option>
                          <option value="Yellow">Yellow</option>
                          <option value="Green">Green</option>
                          <option value="Blue">Blue</option>
                          <option value="Purple">Purple</option>
                          <option value="Pink">Pink</option>
                          <option value="Brown">Brown</option>
                          <option value="Gray">Gray</option>
                          <option value="Black">Black</option>
                          <option value="White">White</option>
                        </select>

                        <label for ="">Description:</label>
                        <input type="text" onkeyup="showHint(this.value)" name="txtDescription">
                        <p>Suggestions: <span id="txtHint"></span></p>

                		<label for="">Badge: </label>
                		<input required type="text" name="txtBadge" placeholder="Badge File Name" /><br />
                		<label for="">Tie: </label>
                		<input required type="text" name="txtTie" placeholder="Tie File Name"/><br />
                		<label for="">Blazer: </label>
                		<input required type="text" name="txtBlazer" placeholder="Blazer File Name"/><br />
                        <label for="">Date Of Image Collection: </label>
                        <input required type="text" name="txtDate" id="datepicker"></p>
                        <br/>
                        <input type="submit" value="Submit" name="submitSchool"/>
                                    	</fieldset>
                </form>
                
