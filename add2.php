<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
$result = $conn->query("SELECT * FROM chezel.costumers ORDER BY costumersid DESC");
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>
<a href="add.html">Add New Data</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>costumersid</td>
		<td>fname</td>
		<td>lname</td>
		<td>gender</td>
		<td>birthdate</td>
		<td>address</td>
		<td>contact</td>
		<td>Update</td>
	</tr>
	<?php 	
	while($row = $result->fetch(PDO::FETCH_ASSOC)) { 		
		echo "<tr>";
		echo "<td>".$row['costumersid']."</td>";
		echo "<td>".$row['fname']."</td>";
		echo "<td>".$row['lname']."</td>";
		echo "<td>".$row['gender']."</td>";
		echo "<td>".$row['birthdate']."</td>";
		echo "<td>".$row['address']."</td>";
		echo "<td>".$row['contact']."</td>";
		echo "<td><a href=\"edit.php?costumersid=$row[costumersid]\">Edit</a> | <a href=\"delete.php?costumersid=$row[costumersid]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
		echo "</tr>";
	}
	?>
	</table>
</body>
</html>