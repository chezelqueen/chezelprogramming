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
		<td>product ID</td>
		<td>Product Name</td>
		<td>Price</td>
		<td>Quantity</td>
		<td>Quality</td>
	
	</tr>
	<?php 	
	while($row = $result->fetch(PDO::FETCH_ASSOC)) { 		
		echo "<tr>";
		echo "<td>".$row['productid']."</td>";
		echo "<td>".$row['productname']."</td>";
		echo "<td>".$row['price']."</td>";
		echo "<td>".$row['quantity']."</td>";
		echo "<td>".$row['quality']."</td>";
		echo "<td><a href=\"edit.php?productid=$row[productid]\">Edit</a> | <a href=\"delete.php?productid=$row[productid]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
		echo "</tr>";
	}
	?>
	</table>
</body>
</html>