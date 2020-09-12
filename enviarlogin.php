<?php

	require_once 'configall.php';

	if(!empty($_POST)){

		try {
			$user_obj = new Cl_User();
			$data = $user_obj->login( $_POST );
			if($data)
			{
				$info = 'Y';
			}
		} catch (Exception $e) {
				$info = $e->getMessage();
				$info = 'N';
		}
	}
	

echo ($info);
	
?>