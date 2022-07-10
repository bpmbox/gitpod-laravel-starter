<?php
$topsaccount = array();
			$topsaccount["insert"] = array(
		"subtype" => "rest",
		"method" => "POST",
		"request" => "/conta/_doc",
		"payload" => "[{\"name\":\"ids\",\"value\":\":{_id}\",\"location\":\"post\",\"skipEmpty\":true},{\"name\":\"body\",\"value\":\":{account_id}\",\"location\":\"post\",\"skipEmpty\":true},{\"name\":\"account_id\",\"value\":\":{role1}\",\"location\":\"post\",\"skipEmpty\":true},{\"name\":\"role\",\"value\":\":{account_id}\",\"location\":\"post\",\"skipEmpty\":true},{\"name\":\"Content-Type\",\"value\":\"application/json\",\"location\":\"header\",\"skipEmpty\":true}]"
	);
				$topsaccount["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "/conta/_search",
		"payload" => "[{\"name\":\"from\",\"value\":\":{limit.record_from}\",\"location\":\"post\",\"skipEmpty\":true},{\"name\":\"size\",\"value\":\":{limit.record_to}\",\"location\":\"post\",\"skipEmpty\":true},{\"name\":\"Content-Type\",\"value\":\"application/json\",\"location\":\"header\",\"skipEmpty\":true}]"
	);
	$tables_data["account"][".operations"] = &$topsaccount;
?>