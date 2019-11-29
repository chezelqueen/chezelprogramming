<center><?php
if(isset($_POST['Submit'])){
   echo "Your order is on the way";
}
  

?></center>
<html>

<head>
	<title>Add Data</title>
</head>

<nav class="navbar navbar-inverse">
		<ul class="nav navbar-nav">
		    <li><a href="add.html">Costumer's Info</a></li> 
		   <li><a href="add2.php">Costumer's File</a></li>
           <li><a href="index3.php">Products</a></li>
		   <li><a href="index4.php">Products file</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="logout.php">  Log Out</a></li>
		  </ul>
	  </nav>
	  
	  </nav>
	<br/><br/>

	<style type="text/css">
		.form
        .navbar-inverse {
   		background-color:white;
        border: 5px white;
		 color: black;
	}
	.navbar-inverse .navbar-nav>li>a {
		color:black;
		background-color:white(0, 0, 0, 0.9);
    	font-size: 20px;
	}
	</style>
<body>
	
	<form action="index3.php" method="post" name="form1">
		<table width="30%" border="0">
			<tr> 
				<td>Product Name</td>
				<td><input   type="text" name="productname"></td>
			</tr>   
			<tr> 
				<td> Price</td>
				<td><input type="text" name="price"></td>
			</tr>
			<tr> 
				<td>Quantity</td>
				<td><input type="text" name="quantity"></td>
			</tr>
			<tr> 
				<td>Quality</td>
				<td><input type="text" name="quality"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="ORDER"></td>
                
			</tr>
		</table>
	</form>

	
		
		
	
</body>
</html>