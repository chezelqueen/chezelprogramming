<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	
	$costumersid = $_POST['costumersid'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$gender = $_POST['gender'];
    $birthdate = $_POST['birthdate'];
    $address = $_POST['address'];	
    $contact = $_POST['contact'];		
	
	// checking empty fields
	if(empty($fname) || empty($lname) || empty($gender) || empty($birthdate) || empty($address) || empty($contact)) {	
			
		if(empty($fname)) {
			echo "<font color='red'>fname field is empty.</font><br/>";
		}
		
		if(empty($lname)) {
			echo "<font color='red'>lname field is empty.</font><br/>";
		}
		if(empty($gender)) {
			echo "<font color='red'>gender field is empty.</font><br/>";
		}
		if(empty($birthdate)) {
			echo "<font color='red'>birthdate field is empty.</font><br/>";
        }
        if(empty($address)) {
			echo "<font color='red'>address field is empty.</font><br/>";
        }
        if(empty($contact)) {
			echo "<font color='red'>contact field is empty.</font><br/>";
		}
	} else {	
		//updating the table
		$sql = "UPDATE chezel.costumers SET fname=:fname, lname=:lname, gender=:gender, birthdate=:birthdate, address=address, contact=contact WHERE costumersid=:costumersid";
		$query = $conn->prepare($sql);
				
		$query->bindparam(':costumersid', $costumersid);
        $query->bindparam(':fname', $fname);
        $query->bindparam(':lname', $lname);
		$query->bindparam(':gender', $gender);
		$query->bindparam(':birthdate', $birthdate);
        $query->bindparam(':address', $address);
        $query->bindparam(':contact', $contact);
		$query->execute();
		
		// Alternative to above bindparam and execute
		// $query->execute(array(':costumersid' => $costumersid, ':name' => $name, ':email' => $email, ':age' => $age));
				
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>
<?php
//getting id from url
$costumersid = $_GET['costumersid'];

//selecting data associated with this particular id
$sql = "SELECT * FROM chezel.costumers WHERE costumersid=:costumersid";
$query = $conn->prepare($sql);
$query->execute(array(':costumersid' => $costumersid));

while($row = $query->fetch(PDO::FETCH_ASSOC))
{
    $name = $row['fname'];
    $name = $row['lname'];
	$disc = $row['gender'];
	$price = $row['birthdate'];
    $quan = $row['address'];
    $quan = $row['contact'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>FirstName</td>
				<td><input type="text" name="fname" value="<?php echo $fname;?>"></td>
			</tr>
			<tr> 
				<td>LastName</td>
				<td><input type="text" name="lname" value="<?php echo $lname;?>"></td>
			</tr>
			<tr> 
				<td>Gender</td>
				<td><input type="text" name="gender" value="<?php echo $gender;?>"></td>
			</tr>
			<tr> 
				<td>Birthdate</td>
				<td><input type="text" name="birthdate" value="<?php echo $birthdate;?>"></td>
            </tr>
            <tr> 
				<td>Address</td>
				<td><input type="text" name="address" value="<?php echo $address;?>"></td>
            </tr>
            <tr> 
				<td>Contact</td>
				<td><input type="text" name="contact" value="<?php echo $contact;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="costumersid" value=<?php echo $_GET['costumersid'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>