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

			if(isset($_POST)){
			date_default_timezone_set('America/Sao_Paulo');

			$tit = addslashes($_POST['Titulo']);
			$val = addslashes($_POST['Valor']);
			$data = date("Y/m/d H:i:sa");
			
			$sql = "INSERT INTO imoveis (Titulo, Valor, Data) VALUES ('$tit',$val,'$data')";

			if ($conn->query($sql) === TRUE) {

				//mysqli_set_charset($conn,'UTF8');

			    //$return_arr = array();
				//$sql2 = "SELECT Id, Titulo, Valor, Data FROM imoveis order by Id desc Limit 1";
				//$result2 = $conn->query($sql2);
				
				//while($row = $result2->fetch_assoc()) {
				//	$return_arr[] =  $row;
				//}

				//echo json_encode($return_arr[0]);
				echo ('Y');

			} else {
			  echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();

			}
			
			
		 } catch(Exception $e) {
			// echo 'ERROR: ' . $e->getMessage();
		 }
	
?>