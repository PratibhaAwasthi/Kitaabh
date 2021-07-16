 <?php  
$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'Kitaabh_User_Data');

$user =   $_POST  ['user'];
$pass = $_POST ['password'];

$email_search = " select * from registrationinfo where Username = '$user' ";
$query = mysqli_query($con, $email_search);
$email_count = mysqli_num_rows($query);

if($email_count==1)
{
	$email_pass = mysqli_fetch_assoc($query);
	$db_pass = $email_pass['Password'];
    $pass_decode = password_verify($pass, $db_pass);
	if($pass_decode){

	header('location:home.php');
      }
    else{
          ?>
            <script >
		    alert("Invalid password");
	        window.location.href = "Login.php";
	       </script>
         <?php
         }
	
}
else{
 
	?>
	  <script >
		alert("Invalid Email");
	    window.location.href = "Login.php";
	  </script>
	<?php


}

?>

