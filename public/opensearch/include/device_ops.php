<?php
$topsdevice = array();
			$topsdevice["insert"] = array(
		"subtype" => "rest",
		"method" => "POST",
		"request" => "/conta/_doc",
		"payload" => "[{\"name\":\"ids\",\"value\":\":{_id}\",\"location\":\"post\",\"skipEmpty\":true},{\"name\":\"body\",\"value\":\":{account_id}\",\"location\":\"post\",\"skipEmpty\":true},{\"name\":\"account_id\",\"value\":\":{role1}\",\"location\":\"post\",\"skipEmpty\":true},{\"name\":\"role\",\"value\":\":{account_id}\",\"location\":\"post\",\"skipEmpty\":true},{\"name\":\"Content-Type\",\"value\":\"application/json\",\"location\":\"header\",\"skipEmpty\":true}]"
	);
					$topsdevice["selectList"] = array(
		"subtype" => "code"
	);
$tables_data["device"][".operations"] = &$topsdevice;
?>