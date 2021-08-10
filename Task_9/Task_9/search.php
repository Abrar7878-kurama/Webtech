<?php 
	include 'dboperations.php';

	$data = $_REQUEST['username'];

	if(empty($_GET['search']) or empty($_GET['username'])) {
		$users = getAllUsers();
	}
	else
		$users = liveSearch($data);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Search Page</title>
	<script src="search.js"></script>
</head>
<body>
	<h1>User List</h1>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="GET">
		<input type="text" name="username" id="username" value="<?php if(isset($_REQUEST['username'])) echo $data; ?>" onkeyup="search()">
		<input type="submit" name="search" id="search" value="Search" onclick="">
		
	</form>

	<div id='result'></div>

	<?php

		echo "<table>";
		echo "<tr>";
		echo "<th>Id</th>";
		echo "<th>Username</th>";
		echo "</tr>";
		for($i = 0; $i<count($users); $i++) {
			echo "<tr>";
			echo "<td>" . $users[$i]["id"] . "</td>";
			echo "<td>" . $users[$i]["username"] . "</td>";
			echo "</tr>";
		}
		echo "</table>";
	?>

</body>
</html>