<?php require_once 'config/init.php';
//Gather details submitted from the $_POST array and store in local vars
        if (isset($_POST['subLogin']))
        {
        $user = $_POST['txtUser'];
        $pass = $_POST['txtPass'];
        // $passhash = md5($pass);
        $query="SELECT * FROM users WHERE username='$user' AND password='$pass'";
        $result=mysqli_query($connection, $query);


//check result and generate message with code below
if ($row = mysqli_fetch_assoc($result)) 
{
    $_SESSION['username1'] = $user;
    $_SESSION['admin']=$row['Admin'];
    
    //Storing user data in session variables for my account page
    $_SESSION['firstname']=$row['firstname'];
    $_SESSION['surname']=$row['surname'];
    $_SESSION['password']=$row['password'];
    $_SESSION['email']=$row['email'];
    
    //Storing details to be used to submit in logs table when searching
     $_SESSION['userid']=$row['userid'];
     $_SESSION['username_for_log']=$row['username'];
     
    header ('location:index.php');
	//echo "you are logged in as: " . $_SESSION['user'];
	
}
else             
{
    
    $_SESSION['error']= 'User not recognised';

echo 'Username or password not recognised';
} 
}
?>
