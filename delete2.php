<?php
//including the database connection file
include("config.php");

//getting id of the data from url
$costumersid = $_GET['costumersid'];

//deleting the row from table
$sql = "DELETE FROM chezel.costumers WHERE costumersid=:costumersid";
$query = $conn->prepare($sql);
$query->execute(array(':costumersid' => $costumersid));

//redirecting to the display page (index.php in our case)
header("Location:index.php");
?>