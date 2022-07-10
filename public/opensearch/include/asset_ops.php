<?php
$topsasset = array();
			$topsasset["insert"] = array(
		"subtype" => "rest",
		"method" => "POST",
		"request" => "/asset/_doc",
		"payload" => "[{\"name\":\"ids\",\"value\":\":{_id}\",\"location\":\"post\",\"skipEmpty\":true},{\"name\":\"body\",\"value\":\":{account_id}\",\"location\":\"post\",\"skipEmpty\":true},{\"name\":\"account_id\",\"value\":\":{details.account_id}\",\"location\":\"post\",\"skipEmpty\":true},{\"name\":\"role\",\"value\":\":{account_id}\",\"location\":\"post\",\"skipEmpty\":true},{\"name\":\"Content-Type\",\"value\":\"application/json\",\"location\":\"header\",\"skipEmpty\":true},{\"name\":\"asset_id\",\"value\":\":{asset_id}\",\"location\":\"header\",\"skipEmpty\":true},{\"name\":\"destination_id\",\"value\":\":{destination_id}\",\"location\":\"header\",\"skipEmpty\":true},{\"name\":\"product_series_id\",\"value\":\":{product_series_id}\",\"location\":\"header\",\"skipEmpty\":true}]"
	);
				$topsasset["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "/asset/_search",
		"payload" => "[]"
	);
	$tables_data["asset"][".operations"] = &$topsasset;
?>