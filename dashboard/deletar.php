<?php

if ($_COOKIE['GUID'] == null)
{	
	header('Location: /index.php');
}

require 'config.php';

		$conn = mysqli_connect($servername, $username, $password, $dbname);

		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

		try {

			$id = $_GET['Id'];
			
			$sql = "delete from imoveis where Id = $id";

			if ($conn->query($sql) === TRUE) {
				echo ('Y');
			} else {
			  echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();

			
		 } catch(Exception $e) {
			// echo 'ERROR: ' . $e->getMessage();
		 }
	
?>