<?php
$tdataasset1 = array();
$tdataasset1[".searchableFields"] = array();
$tdataasset1[".ShortName"] = "asset1";
$tdataasset1[".OwnerID"] = "";
$tdataasset1[".OriginalTable"] = "asset";


$tdataasset1[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataasset1[".originalPagesByType"] = $tdataasset1[".pagesByType"];
$tdataasset1[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataasset1[".originalPages"] = $tdataasset1[".pages"];
$tdataasset1[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataasset1[".originalDefaultPages"] = $tdataasset1[".defaultPages"];

//	field labels
$fieldLabelsasset1 = array();
$fieldToolTipsasset1 = array();
$pageTitlesasset1 = array();
$placeHoldersasset1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsasset1["English"] = array();
	$fieldToolTipsasset1["English"] = array();
	$placeHoldersasset1["English"] = array();
	$pageTitlesasset1["English"] = array();
	$fieldLabelsasset1["English"]["role"] = "Role";
	$fieldToolTipsasset1["English"]["role"] = "";
	$placeHoldersasset1["English"]["role"] = "";
	$fieldLabelsasset1["English"]["device_id"] = "Device Id";
	$fieldToolTipsasset1["English"]["device_id"] = "";
	$placeHoldersasset1["English"]["device_id"] = "";
	$fieldLabelsasset1["English"]["destination_id"] = "Destination Id";
	$fieldToolTipsasset1["English"]["destination_id"] = "";
	$placeHoldersasset1["English"]["destination_id"] = "";
	$fieldLabelsasset1["English"]["asset_id"] = "Asset Id";
	$fieldToolTipsasset1["English"]["asset_id"] = "";
	$placeHoldersasset1["English"]["asset_id"] = "";
	$fieldLabelsasset1["English"]["body"] = "Body";
	$fieldToolTipsasset1["English"]["body"] = "";
	$placeHoldersasset1["English"]["body"] = "";
	$fieldLabelsasset1["English"]["account_id"] = "Account Id";
	$fieldToolTipsasset1["English"]["account_id"] = "";
	$placeHoldersasset1["English"]["account_id"] = "";
	$fieldLabelsasset1["English"]["meta"] = "Meta";
	$fieldToolTipsasset1["English"]["meta"] = "";
	$placeHoldersasset1["English"]["meta"] = "";
	$fieldLabelsasset1["English"]["ids"] = "Ids";
	$fieldToolTipsasset1["English"]["ids"] = "";
	$placeHoldersasset1["English"]["ids"] = "";
	$fieldLabelsasset1["English"]["product_series_id"] = "Product Series Id";
	$fieldToolTipsasset1["English"]["product_series_id"] = "";
	$placeHoldersasset1["English"]["product_series_id"] = "";
	$fieldLabelsasset1["English"]["roduct_series_id"] = "Roduct Series Id";
	$fieldToolTipsasset1["English"]["roduct_series_id"] = "";
	$placeHoldersasset1["English"]["roduct_series_id"] = "";
	if (count($fieldToolTipsasset1["English"]))
		$tdataasset1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsasset1["Japanese"] = array();
	$fieldToolTipsasset1["Japanese"] = array();
	$placeHoldersasset1["Japanese"] = array();
	$pageTitlesasset1["Japanese"] = array();
	$fieldLabelsasset1["Japanese"]["role"] = "Role";
	$fieldToolTipsasset1["Japanese"]["role"] = "";
	$placeHoldersasset1["Japanese"]["role"] = "";
	$fieldLabelsasset1["Japanese"]["device_id"] = "Device Id";
	$fieldToolTipsasset1["Japanese"]["device_id"] = "";
	$placeHoldersasset1["Japanese"]["device_id"] = "";
	$fieldLabelsasset1["Japanese"]["destination_id"] = "Destination Id";
	$fieldToolTipsasset1["Japanese"]["destination_id"] = "";
	$placeHoldersasset1["Japanese"]["destination_id"] = "";
	$fieldLabelsasset1["Japanese"]["asset_id"] = "Asset Id";
	$fieldToolTipsasset1["Japanese"]["asset_id"] = "";
	$placeHoldersasset1["Japanese"]["asset_id"] = "";
	$fieldLabelsasset1["Japanese"]["body"] = "Body";
	$fieldToolTipsasset1["Japanese"]["body"] = "";
	$placeHoldersasset1["Japanese"]["body"] = "";
	$fieldLabelsasset1["Japanese"]["account_id"] = "Account Id";
	$fieldToolTipsasset1["Japanese"]["account_id"] = "";
	$placeHoldersasset1["Japanese"]["account_id"] = "";
	$fieldLabelsasset1["Japanese"]["meta"] = "Meta";
	$fieldToolTipsasset1["Japanese"]["meta"] = "";
	$placeHoldersasset1["Japanese"]["meta"] = "";
	$fieldLabelsasset1["Japanese"]["ids"] = "Ids";
	$fieldToolTipsasset1["Japanese"]["ids"] = "";
	$placeHoldersasset1["Japanese"]["ids"] = "";
	$fieldLabelsasset1["Japanese"]["product_series_id"] = "Product Series Id";
	$fieldToolTipsasset1["Japanese"]["product_series_id"] = "";
	$placeHoldersasset1["Japanese"]["product_series_id"] = "";
	$fieldLabelsasset1["Japanese"]["roduct_series_id"] = "Roduct Series Id";
	$fieldToolTipsasset1["Japanese"]["roduct_series_id"] = "";
	$placeHoldersasset1["Japanese"]["roduct_series_id"] = "";
	if (count($fieldToolTipsasset1["Japanese"]))
		$tdataasset1[".isUseToolTips"] = true;
}


	$tdataasset1[".NCSearch"] = true;



$tdataasset1[".shortTableName"] = "asset1";
$tdataasset1[".nSecOptions"] = 0;

$tdataasset1[".mainTableOwnerID"] = "";
$tdataasset1[".entityType"] = 1;
$tdataasset1[".connId"] = "OpenSearch_SQL_ODBC_Driver";


$tdataasset1[".strOriginalTableName"] = "asset";

	



$tdataasset1[".showAddInPopup"] = false;

$tdataasset1[".showEditInPopup"] = false;

$tdataasset1[".showViewInPopup"] = false;

$tdataasset1[".listAjax"] = false;
//	temporary
//$tdataasset1[".listAjax"] = false;

	$tdataasset1[".audit"] = false;

	$tdataasset1[".locking"] = false;


$pages = $tdataasset1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataasset1[".edit"] = true;
	$tdataasset1[".afterEditAction"] = 1;
	$tdataasset1[".closePopupAfterEdit"] = 1;
	$tdataasset1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataasset1[".add"] = true;
$tdataasset1[".afterAddAction"] = 1;
$tdataasset1[".closePopupAfterAdd"] = 1;
$tdataasset1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataasset1[".list"] = true;
}



$tdataasset1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataasset1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataasset1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataasset1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataasset1[".printFriendly"] = true;
}



$tdataasset1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataasset1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataasset1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataasset1[".isUseAjaxSuggest"] = true;

$tdataasset1[".rowHighlite"] = true;





$tdataasset1[".ajaxCodeSnippetAdded"] = false;

$tdataasset1[".buttonsAdded"] = false;

$tdataasset1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataasset1[".isUseTimeForSearch"] = false;


$tdataasset1[".badgeColor"] = "3CB371";


$tdataasset1[".allSearchFields"] = array();
$tdataasset1[".filterFields"] = array();
$tdataasset1[".requiredSearchFields"] = array();

$tdataasset1[".googleLikeFields"] = array();
$tdataasset1[".googleLikeFields"][] = "role";
$tdataasset1[".googleLikeFields"][] = "device_id";
$tdataasset1[".googleLikeFields"][] = "destination_id";
$tdataasset1[".googleLikeFields"][] = "asset_id";
$tdataasset1[".googleLikeFields"][] = "body";
$tdataasset1[".googleLikeFields"][] = "account_id";
$tdataasset1[".googleLikeFields"][] = "meta";
$tdataasset1[".googleLikeFields"][] = "ids";
$tdataasset1[".googleLikeFields"][] = "product_series_id";
$tdataasset1[".googleLikeFields"][] = "roduct_series_id";



$tdataasset1[".tableType"] = "list";

$tdataasset1[".printerPageOrientation"] = 0;
$tdataasset1[".nPrinterPageScale"] = 100;

$tdataasset1[".nPrinterSplitRecords"] = 40;

$tdataasset1[".geocodingEnabled"] = false;










$tdataasset1[".pageSize"] = 20;

$tdataasset1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataasset1[".strOrderBy"] = $tstrOrderBy;

$tdataasset1[".orderindexes"] = array();


$tdataasset1[".sqlHead"] = "SELECT role,  	device_id,  	destination_id,  	asset_id,  	body,  	account_id,  	meta,  	ids,  	product_series_id,  	roduct_series_id";
$tdataasset1[".sqlFrom"] = "FROM asset";
$tdataasset1[".sqlWhereExpr"] = "";
$tdataasset1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataasset1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataasset1[".arrGroupsPerPage"] = $arrGPP;

$tdataasset1[".highlightSearchResults"] = true;

$tableKeysasset1 = array();
$tdataasset1[".Keys"] = $tableKeysasset1;


$tdataasset1[".hideMobileList"] = array();




//	role
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "role";
	$fdata["GoodName"] = "role";
	$fdata["ownerTable"] = "asset";
	$fdata["Label"] = GetFieldLabel("asset1","role");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "role";

		$fdata["sourceSingle"] = "role";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "role";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
		
		
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataasset1["role"] = $fdata;
		$tdataasset1[".searchableFields"][] = "role";
//	device_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "device_id";
	$fdata["GoodName"] = "device_id";
	$fdata["ownerTable"] = "asset";
	$fdata["Label"] = GetFieldLabel("asset1","device_id");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "device_id";

		$fdata["sourceSingle"] = "device_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "device_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
		
		
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataasset1["device_id"] = $fdata;
		$tdataasset1[".searchableFields"][] = "device_id";
//	destination_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "destination_id";
	$fdata["GoodName"] = "destination_id";
	$fdata["ownerTable"] = "asset";
	$fdata["Label"] = GetFieldLabel("asset1","destination_id");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "destination_id";

		$fdata["sourceSingle"] = "destination_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "destination_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
		
		
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataasset1["destination_id"] = $fdata;
		$tdataasset1[".searchableFields"][] = "destination_id";
//	asset_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "asset_id";
	$fdata["GoodName"] = "asset_id";
	$fdata["ownerTable"] = "asset";
	$fdata["Label"] = GetFieldLabel("asset1","asset_id");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "asset_id";

		$fdata["sourceSingle"] = "asset_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "asset_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
		
		
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataasset1["asset_id"] = $fdata;
		$tdataasset1[".searchableFields"][] = "asset_id";
//	body
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "body";
	$fdata["GoodName"] = "body";
	$fdata["ownerTable"] = "asset";
	$fdata["Label"] = GetFieldLabel("asset1","body");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "body";

		$fdata["sourceSingle"] = "body";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "body";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
		
		
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataasset1["body"] = $fdata;
		$tdataasset1[".searchableFields"][] = "body";
//	account_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "account_id";
	$fdata["GoodName"] = "account_id";
	$fdata["ownerTable"] = "asset";
	$fdata["Label"] = GetFieldLabel("asset1","account_id");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "account_id";

		$fdata["sourceSingle"] = "account_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "account_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
		
		
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataasset1["account_id"] = $fdata;
		$tdataasset1[".searchableFields"][] = "account_id";
//	meta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "meta";
	$fdata["GoodName"] = "meta";
	$fdata["ownerTable"] = "asset";
	$fdata["Label"] = GetFieldLabel("asset1","meta");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "meta";

		$fdata["sourceSingle"] = "meta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "meta";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
		
		
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataasset1["meta"] = $fdata;
		$tdataasset1[".searchableFields"][] = "meta";
//	ids
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ids";
	$fdata["GoodName"] = "ids";
	$fdata["ownerTable"] = "asset";
	$fdata["Label"] = GetFieldLabel("asset1","ids");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "ids";

		$fdata["sourceSingle"] = "ids";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ids";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
		
		
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataasset1["ids"] = $fdata;
		$tdataasset1[".searchableFields"][] = "ids";
//	product_series_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "product_series_id";
	$fdata["GoodName"] = "product_series_id";
	$fdata["ownerTable"] = "asset";
	$fdata["Label"] = GetFieldLabel("asset1","product_series_id");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "product_series_id";

		$fdata["sourceSingle"] = "product_series_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "product_series_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
		
		
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataasset1["product_series_id"] = $fdata;
		$tdataasset1[".searchableFields"][] = "product_series_id";
//	roduct_series_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "roduct_series_id";
	$fdata["GoodName"] = "roduct_series_id";
	$fdata["ownerTable"] = "asset";
	$fdata["Label"] = GetFieldLabel("asset1","roduct_series_id");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "roduct_series_id";

		$fdata["sourceSingle"] = "roduct_series_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "roduct_series_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
		
		
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataasset1["roduct_series_id"] = $fdata;
		$tdataasset1[".searchableFields"][] = "roduct_series_id";


$tables_data["asset1"]=&$tdataasset1;
$field_labels["asset1"] = &$fieldLabelsasset1;
$fieldToolTips["asset1"] = &$fieldToolTipsasset1;
$placeHolders["asset1"] = &$placeHoldersasset1;
$page_titles["asset1"] = &$pageTitlesasset1;


changeTextControlsToDate( "asset1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["asset1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["asset1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_asset1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "role,  	device_id,  	destination_id,  	asset_id,  	body,  	account_id,  	meta,  	ids,  	product_series_id,  	roduct_series_id";
$proto0["m_strFrom"] = "FROM asset";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
				;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "role",
	"m_strTable" => "asset",
	"m_srcTableName" => "asset1"
));

$proto6["m_sql"] = "role";
$proto6["m_srcTableName"] = "asset1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "device_id",
	"m_strTable" => "asset",
	"m_srcTableName" => "asset1"
));

$proto8["m_sql"] = "device_id";
$proto8["m_srcTableName"] = "asset1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "destination_id",
	"m_strTable" => "asset",
	"m_srcTableName" => "asset1"
));

$proto10["m_sql"] = "destination_id";
$proto10["m_srcTableName"] = "asset1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "asset_id",
	"m_strTable" => "asset",
	"m_srcTableName" => "asset1"
));

$proto12["m_sql"] = "asset_id";
$proto12["m_srcTableName"] = "asset1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "body",
	"m_strTable" => "asset",
	"m_srcTableName" => "asset1"
));

$proto14["m_sql"] = "body";
$proto14["m_srcTableName"] = "asset1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "account_id",
	"m_strTable" => "asset",
	"m_srcTableName" => "asset1"
));

$proto16["m_sql"] = "account_id";
$proto16["m_srcTableName"] = "asset1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "meta",
	"m_strTable" => "asset",
	"m_srcTableName" => "asset1"
));

$proto18["m_sql"] = "meta";
$proto18["m_srcTableName"] = "asset1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ids",
	"m_strTable" => "asset",
	"m_srcTableName" => "asset1"
));

$proto20["m_sql"] = "ids";
$proto20["m_srcTableName"] = "asset1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "product_series_id",
	"m_strTable" => "asset",
	"m_srcTableName" => "asset1"
));

$proto22["m_sql"] = "product_series_id";
$proto22["m_srcTableName"] = "asset1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "roduct_series_id",
	"m_strTable" => "asset",
	"m_srcTableName" => "asset1"
));

$proto24["m_sql"] = "roduct_series_id";
$proto24["m_srcTableName"] = "asset1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "asset";
$proto27["m_srcTableName"] = "asset1";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "role";
$proto27["m_columns"][] = "device_id";
$proto27["m_columns"][] = "destination_id";
$proto27["m_columns"][] = "asset_id";
$proto27["m_columns"][] = "body";
$proto27["m_columns"][] = "account_id";
$proto27["m_columns"][] = "meta";
$proto27["m_columns"][] = "ids";
$proto27["m_columns"][] = "product_series_id";
$proto27["m_columns"][] = "roduct_series_id";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "asset";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "asset1";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="asset1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_asset1 = createSqlQuery_asset1();


	
				;

										

$tdataasset1[".sqlquery"] = $queryData_asset1;



$tdataasset1[".hasEvents"] = false;

?>