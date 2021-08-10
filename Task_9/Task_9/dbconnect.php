<?php 

	function connect() {
		$conn = new mysqli("localhost", "mysql_test", "YES", "mysql_test");
		if($conn->connect_errno) {
			die("Connection failed due to" . $conn->connect_error);
		}

		return $conn;
	}


?>