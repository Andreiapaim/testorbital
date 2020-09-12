<?php

if ($_COOKIE['GUID'] == null)
{	
	header('Location: /index.php');
}

require 'config.php';

		$conn = mysqli_connect($servername, $username, $password, $dbname);
		mysqli_set_charset($conn,'UTF8');

		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

		function GetNumeros($conn,$id){
			try {

			    $return_arr = array();
				
				if ($id == 0) {
				$sql2 = "SELECT * FROM imoveis order by Id desc ";
				}
				else {
				$sql2 = "SELECT * FROM imoveis where Id = $id";
				}

				$result2 = $conn->query($sql2);
				
				while($row = $result2->fetch_assoc()) {
					$return_arr[] =  $row;
				}
				
				
			} catch(Exception $e) {
				echo 'ERROR: ' . $e->getMessage();
			}


			/* Toss back results as json encoded array. */
			echo json_encode($return_arr);
		
		}
	
    if (isset($_GET['Id'])){	
	GetNumeros($conn,$_GET['Id']);
	}
	else {
	GetNumeros($conn,0);
	}
	
	$conn->close();
	
?>