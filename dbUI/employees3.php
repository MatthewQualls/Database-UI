<!DOCTYPE html>
<html>
<head>
  <title> Kitties! </title>
  <link rel="stylesheet" type="text/css" href="styles/navBar.css">
  <link rel="stylesheet" type="text/css" href="styles/content.css">
  <script src = "scripts.js"></script>
</head>
<body>

<?php 
	include("menus/topNav.php");
?>

<script> activate("T1"); </script>

<?php
  include("menus/employeesMenu.php");
?>
<script> activate("L2"); </script>

<div class = "stuff">
	<h2> Employees: </h2>

	<fieldset>
		<legend> Search Employee </legend>
		<form action="employees3.php" method="post">
			Employee Name: 
			<input type="text" name="Name">
			<input type="submit" value="Search">
		</form>
	</fieldset> <br>


	<fieldset>
		<legend> Remove Employee </legend>
		<form action="employees3.php" method="post">
			Employee SSN: 
			<input type="text" name="SSN">
			<input type="submit" value="Remove">
		</form>
	</fieldset> <br>

	<?php
		if(isset($_POST["SSN"]))
		{
			$SSN = $_POST["SSN"];
			include("queries/removeEmployee.php");		
		}

  		if(isset($_POST["Name"]))
    		$Name = $_POST["Name"];
    	else
    		$Name = "";
		include("queries/getEmployeesByName.php");
		


	?>

</div>

</body>
</html>