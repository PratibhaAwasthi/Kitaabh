 <?php  
$con = mysqli_connect('pratibhaawasthi66349.ipagemysql.com', 'localhost', 'Pratibha88@'); 
if (!$con) { 
	die('Could not connect: ' . mysqli_error()); 
} 
echo 'Connected successfully'; 
   $search_value = $_Post['search'];
mysqli_select_db($con, kitaabh_user_data);
    
    

        if($search_value) {
            $sql = "SELECT * FROM userinfodata WHERE (`FirstName` LIKE '%$search_value%') OR (`LastName` LIKE '%$search_value%')  OR (`Email` LIKE '%$search_value%')  OR (`HomeAddress` LIKE '%$search_value%')  OR (`HomePhone` LIKE '%$search_value%') OR (`CellPhone` LIKE '%$search_value%');";
            $result = mysqli_query($con, $sql);
            

            if ($result) {
                echo "<table border='1'>
                        <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                        <th>HomeAddress</th>
                        <th>HomePhone</th>
                         <th>CellPhone</th>
            </tr>";

                while($row = mysqli_fetch_array($result)) {  
                    echo "<tr>";
                    echo "<td>" . $row['Firstname'] . "</td>";
                    echo "<td>" . $row['Lastname'] . "</td>";
                    echo "<td>" . $row['Email'] . "</td>";
                    echo "<td>" . $row['HomeAddress'] . "</td>";
                    echo "<td>" . $row['HomePhone'] . "</td>";
                    echo "<td>" . $row['CellPhone'] . "</td>";
                    echo "</tr>";
                 }
                }
                else
                {
                    echo "Sorry, No users found with $search_value";
                }

            }
            # if search value is empty
            else{
                $sql = "SELECT * FROM userinfodata";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    echo "<table border='1'>
                            <tr>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>HomeAddress</th>
                            <th>HomePhone</th>
                            <th>CellPhone</th>
                </tr>";
    
                    while($row = mysqli_fetch_array($result)) {  
                        echo "<tr>";
                        echo "<td>" . $row['FirstName'] . "</td>";
                        echo "<td>" . $row['LastName'] . "</td>";
                        echo "<td>" . $row['Email'] . "</td>";
                        echo "<td>" . $row['HomeAddress'] . "</td>";
                        echo "<td>" . $row['HomePhone'] . "</td>";
                        echo "<td>" . $row['CellPhone'] . "</td>";
                        echo "</tr>";
                     }
                    }
            }
        
        }
            #print("<div><a href='/user_search.html'>Click here to go back to user page</a></div>");
            $link->close();
    ?>





 
