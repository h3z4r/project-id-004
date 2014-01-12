<?php 

	require(ROOT_PATH ."inc/database.php");

	try {
		$results = $db->query("SELECT name, price, img, sku, paypal FROM products ORDER BY sku ASC");
	} catch (Exception $e) {
		echo "Data could not be retrieved from the database.";
		exit;
	}

    $offers = $results->fetchAll(PDO::FETCH_ASSOC);