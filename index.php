<?php
	require_once('config.php');

	try {
	    $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD);
	    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $result = $db->query("SELECT * FROM hello");
	} catch(PDOException $error) {
	    exit();
	}
    $conn = null; 

	include_once('templates/index.template.php');
?>