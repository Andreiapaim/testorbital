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

		try {

			if(isset($_POST)){
			date_default_timezone_set('America/Sao_Paulo');

			$id = $_POST['Id'];
			$tit = addslashes($_POST['Titulo']);
			$val = addslashes($_POST['Valor']);
			$data = date("Y/m/d H:i:sa");
			
			$sql = "UPDATE imoveis SET Titulo = '$tit', Valor = $val where Id = $id";

			if ($conn->query($sql) === TRUE) {

			    $return_arr = array();
				$sql2 = "SELECT * FROM imoveis where Id = $id";
				$result2 = $conn->query($sql2);
				
				while($row = $result2->fetch_assoc()) {
					$return_arr[] =  $row;
				}

				echo json_encode($return_arr[0]);

			} else {
			  echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();

			}
			
			
		 } catch(Exception $e) {
			// echo 'ERROR: ' . $e->getMessage();
		 }
	
?>