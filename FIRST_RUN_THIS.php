<?php 
		require 'vendor/autoload.php';
		$client = new MongoDB\Client("mongodb://localhost:27017");
		$db = $client->generaldb;
		$collection = $db->doctor_details;
		$collection->insertOne(["_id"=>"123ab", "doc_name" => "PANKAJ SHUKLA", "password" => "123456", "hospital_id" => "1234567"]);	
?>