 <?php  

$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'Kitaabh_User_Data');
$user=   $_POST  ['user'];
$pass= $_POST ['password'];
$pass_h = password_hash($pass, PASSWORD_BCRYPT);
$emailquery = " select * from registrationinfo where Username = '$user'";
$query = mysqli_query($con, $emailquery);
$emailcount = mysqli_num_rows($query);

if($emailcount>0)
{
	?>
	    <script>
	       alert("Email Already Exist");
	       window.location.href = "SignUp.php";
	    </script>
	<?php
	
	
}
else{

	?>
	  <script >
		alert("Connected");
	    window.location.href = "Login.php";
	  </script>
	<?php
	$qy= "insert into registrationinfo (Username, Password) values ('$user', '$pass_h')";  
	mysqli_query($con,$qy);
}

?>

 
