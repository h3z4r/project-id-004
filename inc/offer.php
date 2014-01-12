<?php

	require_once("../inc/config.php");
	require_once(ROOT_PATH . "inc/offers.php");

// if an ID is specified in the query string, use it
if (isset($_GET["id"])) {
	$offer_id = $_GET["id"];
	$offer = get_offer_single($offer_id);
}