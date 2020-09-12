<?php

$_SESSION['logged_in'] = false;

if (isset($_COOKIE['GUID'])) {
    unset($_COOKIE['GUID']); 
    setcookie('GUID', null, -1, '/'); 
	header('Location: /index.php');
    return true;
} else {
    return false;
}


?>