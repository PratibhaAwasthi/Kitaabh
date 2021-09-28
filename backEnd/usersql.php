<?php  

$con = mysqli_connect('localhost','root');
if (!$con) { 
	die('Could not connect: ' . mysqli_error()); 
} 
echo 'Connected successfully';
mysqli_select_db($con, kitaabh_user_data);
$Fname = $_POST  ['name'];
$Lname = $_POST ['lname'];
$Email = $_POST  ['email'];
$HomeAddr = $_POST ['haddr'];
$HomePhn = $_POST  ['hphone'];
$CellPhn = $_POST ['cphone'];

$qry = "insert into userinfodata (FirstName,LastName, Email, HomeAddress, HomePhone, CellPhone) values  ('$Fname', '$Lname', '$Email', '$HomeAddr', '$HomePhn', '$CellPhn')";

$result = mysqli_query($con,$qry);

?>
            <script >
		    alert("Registration Done");
	        window.location.href = "index.php";
	       </script>
         <?php

?>

