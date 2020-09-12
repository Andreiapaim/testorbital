<?php

require 'dashboard/config.php';

		$conn = mysqli_connect($servername, $username, $password, $dbname);
		mysqli_set_charset($conn,'UTF8');

		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

		function GetNumeros($conn){
			try {

				$sql2 = "SELECT * FROM imoveis order by Id desc Limit 3";

				$result2 = $conn->query($sql2);
				
				while($row = $result2->fetch_assoc()) {
					echo ("<div class='quadro'><a class='login' href='#'><span class='desc'>" . $row["Titulo"] ."</span><span class='val'>" . preg_replace('/\B(?=(\d{3})+(?!\d))/','.',$row["Valor"]) . "</span></a></div>");
				}
				
				
			} catch(Exception $e) {
				echo 'ERROR: ' . $e->getMessage();
			}
		
		}
	
  	GetNumeros($conn);
	
	$conn->close();
	
?>