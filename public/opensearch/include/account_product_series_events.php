<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_account_product_series  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["selectList"]=true;



	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List
function selectList($dataSource, $command)
{

		$method = "GET";
$url = "/conta/_search";
//	replace variables in the URL
$url = RunnerContext::PrepareRest( $url );

//	do the API request
$response = $dataSource->getConnection()->requestJson( $url, $method );
if( $response === false ) {
	//	something went wrong
	$dataSource->setError( $dataSource->getConnection()->lastError() );
	return false;
}

//	convert API result into recordset
$rs = $dataSource->resultFromJson( $response, true );
if( !$rs ) {
	return false;
}

// apply search and filter parameters. Comment out this line if filtering is done by REST API provider
$rs = $dataSource->filterResult( $rs, $command->filter );

// apply order parameters
$rs = $dataSource->reorderResult( $command, $rs );

//	apply pagination
$rs->seekRecord( $command->startRecord );
return $rs;

;		
} // function selectList

		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>
