<?php
$cn = mysqli_connect("localhost","root","","admin") or die("Server Not Found".mysqli_error($cn));

if(isset($_REQUEST['kp']))
{
	$em = $_REQUEST['kp'];
	//echo $nm;
	mysqli_query($cn,"delete from users where id= $em")or die("Delete error".mysqli_error($cn));
	
	echo "Data Deleted!!!";
	
}

$emp = mysqli_query($cn,"select * from users")or die("select error".mysqli_error($cn));
echo "<table border=1>";
echo "<tr><th>ID<th>Email<th>Password<th>Delete</tr>";
while($emp1 = mysqli_fetch_array($emp))
{
	echo "<tr>";
echo  "<td>".$emp1['id']."</td>";
echo  "<td>".$emp1['email']."</td>";
echo  "<td>".$emp1['password']."</td>";
echo  "<td><a href='user.php?kp=".$emp1['id']."'>Delete</a></td>";

	echo "</tr>";
}
echo "</table>";
?>


