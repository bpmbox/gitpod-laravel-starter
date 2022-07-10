<?php
$tdataasset = array();
$tdataasset[".searchableFields"] = array();
$tdataasset[".ShortName"] = "asset";
$tdataasset[".OwnerID"] = "";
$tdataasset[".OriginalTable"] = "View";


$tdataasset[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataasset[".originalPagesByType"] = $tdataasset[".pagesByType"];
$tdataasset[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataasset[".originalPages"] = $tdataasset[".pages"];
$tdataasset[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataasset[".originalDefaultPages"] = $tdataasset[".defaultPages"];

//	field labels
$fieldLabelsasset = array();
$fieldToolTipsasset = array();
$pageTitlesasset = array();
$placeHoldersasset = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsasset["English"] = array();
	$fieldToolTipsasset["English"] = array();
	$placeHoldersasset["English"] = array();
	$pageTitlesasset["English"] = array();
	$fieldLabelsasset["English"]["_id"] = "Id";
	$fieldToolTipsasset["English"]["_id"] = "";
	$placeHoldersasset["English"]["_id"] = "";
	$fieldLabelsasset["English"]["account_id"] = "Account Id";
	$fieldToolTipsasset["English"]["account_id"] = "";
	$placeHoldersasset["English"]["account_id"] = "";
	$fieldLabelsasset["English"]["failed"] = "Failed";
	$fieldToolTipsasset["English"]["failed"] = "";
	$placeHoldersasset["English"]["failed"] = "";
	$fieldLabelsasset["English"]["asset_id"] = "Asset Id";
	$fieldToolTipsasset["English"]["asset_id"] = "";
	$placeHoldersasset["English"]["asset_id"] = "";
	$fieldLabelsasset["English"]["destination_id"] = "Destination Id";
	$fieldToolTipsasset["English"]["destination_id"] = "";
	$placeHoldersasset["English"]["destination_id"] = "";
	$fieldLabelsasset["English"]["device_id"] = "Device Id";
	$fieldToolTipsasset["English"]["device_id"] = "";
	$placeHoldersasset["English"]["device_id"] = "";
	$fieldLabelsasset["English"]["product_series_id"] = "Product Series Id";
	$fieldToolTipsasset["English"]["product_series_id"] = "";
	$placeHoldersasset["English"]["product_series_id"] = "";
	$fieldLabelsasset["English"]["created"] = "Created";
	$fieldToolTipsasset["English"]["created"] = "";
	$placeHoldersasset["English"]["created"] = "";
	$fieldLabelsasset["English"]["create_at"] = "Create At";
	$fieldToolTipsasset["English"]["create_at"] = "";
	$placeHoldersasset["English"]["create_at"] = "";
	if (count($fieldToolTipsasset["English"]))
		$tdataasset[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsasset["Japanese"] = array();
	$fieldToolTipsasset["Japanese"] = array();
	$placeHoldersasset["Japanese"] = array();
	$pageTitlesasset["Japanese"] = array();
	$fieldLabelsasset["Japanese"]["_id"] = "Id";
	$fieldToolTipsasset["Japanese"]["_id"] = "";
	$placeHoldersasset["Japanese"]["_id"] = "";
	$fieldLabelsasset["Japanese"]["account_id"] = "Account Id";
	$fieldToolTipsasset["Japanese"]["account_id"] = "";
	$placeHoldersasset["Japanese"]["account_id"] = "";
	$fieldLabelsasset["Japanese"]["failed"] = "Failed";
	$fieldToolTipsasset["Japanese"]["failed"] = "";
	$placeHoldersasset["Japanese"]["failed"] = "";
	$fieldLabelsasset["Japanese"]["asset_id"] = "Asset Id";
	$fieldToolTipsasset["Japanese"]["asset_id"] = "";
	$placeHoldersasset["Japanese"]["asset_id"] = "";
	$fieldLabelsasset["Japanese"]["destination_id"] = "Destination Id";
	$fieldToolTipsasset["Japanese"]["destination_id"] = "";
	$placeHoldersasset["Japanese"]["destination_id"] = "";
	$fieldLabelsasset["Japanese"]["device_id"] = "Device Id";
	$fieldToolTipsasset["Japanese"]["device_id"] = "";
	$placeHoldersasset["Japanese"]["device_id"] = "";
	$fieldLabelsasset["Japanese"]["product_series_id"] = "Product Series Id";
	$fieldToolTipsasset["Japanese"]["product_series_id"] = "";
	$placeHoldersasset["Japanese"]["product_series_id"] = "";
	$fieldLabelsasset["Japanese"]["created"] = "Created";
	$fieldToolTipsasset["Japanese"]["created"] = "";
	$placeHoldersasset["Japanese"]["created"] = "";
	$fieldLabelsasset["Japanese"]["create_at"] = "Create At";
	$fieldToolTipsasset["Japanese"]["create_at"] = "";
	$placeHoldersasset["Japanese"]["create_at"] = "";
	if (count($fieldToolTipsasset["Japanese"]))
		$tdataasset[".isUseToolTips"] = true;
}


	$tdataasset[".NCSearch"] = true;



$tdataasset[".shortTableName"] = "asset";
$tdataasset[".nSecOptions"] = 0;

$tdataasset[".mainTableOwnerID"] = "";
$tdataasset[".entityType"] = 7;
$tdataasset[".connId"] = "rest";


$tdataasset[".strOriginalTableName"] = "View";

	



$tdataasset[".showAddInPopup"] = false;

$tdataasset[".showEditInPopup"] = false;

$tdataasset[".showViewInPopup"] = false;

$tdataasset[".listAjax"] = false;
//	temporary
//$tdataasset[".listAjax"] = false;

	$tdataasset[".audit"] = false;

	$tdataasset[".locking"] = false;


$pages = $tdataasset[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataasset[".edit"] = true;
	$tdataasset[".afterEditAction"] = 1;
	$tdataasset[".closePopupAfterEdit"] = 1;
	$tdataasset[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataasset[".add"] = true;
$tdataasset[".afterAddAction"] = 1;
$tdataasset[".closePopupAfterAdd"] = 1;
$tdataasset[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataasset[".list"] = true;
}



$tdataasset[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataasset[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataasset[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataasset[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataasset[".printFriendly"] = true;
}



$tdataasset[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataasset[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataasset[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataasset[".isUseAjaxSuggest"] = false;

$tdataasset[".rowHighlite"] = true;





$tdataasset[".ajaxCodeSnippetAdded"] = false;

$tdataasset[".buttonsAdded"] = false;

$tdataasset[".addPageEvents"] = false;

// use timepicker for search panel
$tdataasset[".isUseTimeForSearch"] = false;


$tdataasset[".badgeColor"] = "778899";


$tdataasset[".allSearchFields"] = array();
$tdataasset[".filterFields"] = array();
$tdataasset[".requiredSearchFields"] = array();

$tdataasset[".googleLikeFields"] = array();
$tdataasset[".googleLikeFields"][] = "_id";
$tdataasset[".googleLikeFields"][] = "account_id";
$tdataasset[".googleLikeFields"][] = "failed";
$tdataasset[".googleLikeFields"][] = "asset_id";
$tdataasset[".googleLikeFields"][] = "destination_id";
$tdataasset[".googleLikeFields"][] = "device_id";
$tdataasset[".googleLikeFields"][] = "product_series_id";
$tdataasset[".googleLikeFields"][] = "created";
$tdataasset[".googleLikeFields"][] = "create_at";




$tdataasset[".printerPageOrientation"] = 0;
$tdataasset[".nPrinterPageScale"] = 100;

$tdataasset[".nPrinterSplitRecords"] = 40;

$tdataasset[".geocodingEnabled"] = false;










$tdataasset[".pageSize"] = 20;

$tdataasset[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataasset[".strOrderBy"] = $tstrOrderBy;

$tdataasset[".orderindexes"] = array();


$tdataasset[".sqlHead"] = "";
$tdataasset[".sqlFrom"] = "";
$tdataasset[".sqlWhereExpr"] = "";
$tdataasset[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataasset[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataasset[".arrGroupsPerPage"] = $arrGPP;

$tdataasset[".highlightSearchResults"] = true;

$tableKeysasset = array();
$tableKeysasset[] = "_id";
$tdataasset[".Keys"] = $tableKeysasset;


$tdataasset[".hideMobileList"] = array();




//	_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "_id";
	$fdata["GoodName"] = "_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("asset","_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "hits/hits/*/_id";

	
		$fdata["FullName"] = "_id";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdataasset["_id"] = $fdata;
		$tdataasset[".searchableFields"][] = "_id";
//	account_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "account_id";
	$fdata["GoodName"] = "account_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("asset","account_id");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "hits/hits/*/_source/account_id";

	
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


	$tdataasset["account_id"] = $fdata;
		$tdataasset[".searchableFields"][] = "account_id";
//	failed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "failed";
	$fdata["GoodName"] = "failed";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("asset","failed");
	$fdata["FieldType"] = 3;


	
	
			

	
		$fdata["sourceSingle"] = "_shards/failed";

		$fdata["FullName"] = "failed";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdataasset["failed"] = $fdata;
		$tdataasset[".searchableFields"][] = "failed";
//	asset_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "asset_id";
	$fdata["GoodName"] = "asset_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("asset","asset_id");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "hits/hits/*/_source/asset_id";

	
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


	$tdataasset["asset_id"] = $fdata;
		$tdataasset[".searchableFields"][] = "asset_id";
//	destination_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "destination_id";
	$fdata["GoodName"] = "destination_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("asset","destination_id");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "hits/hits/*/_source/destination_id";

	
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


	$tdataasset["destination_id"] = $fdata;
		$tdataasset[".searchableFields"][] = "destination_id";
//	device_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "device_id";
	$fdata["GoodName"] = "device_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("asset","device_id");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "hits/hits/*/_source/device_id";

	
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


	$tdataasset["device_id"] = $fdata;
		$tdataasset[".searchableFields"][] = "device_id";
//	product_series_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "product_series_id";
	$fdata["GoodName"] = "product_series_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("asset","product_series_id");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "hits/hits/*/_source/product_series_id";

	
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


	$tdataasset["product_series_id"] = $fdata;
		$tdataasset[".searchableFields"][] = "product_series_id";
//	created
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "created";
	$fdata["GoodName"] = "created";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("asset","created");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "hits/hits/*/_source/meta/created";

	
		$fdata["FullName"] = "created";

	
	
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


	$tdataasset["created"] = $fdata;
		$tdataasset[".searchableFields"][] = "created";
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("asset","create_at");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "hits/hits/*/_source/meta/create_at";

	
		$fdata["FullName"] = "create_at";

	
	
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


	$tdataasset["create_at"] = $fdata;
		$tdataasset[".searchableFields"][] = "create_at";


$tables_data["asset"]=&$tdataasset;
$field_labels["asset"] = &$fieldLabelsasset;
$fieldToolTips["asset"] = &$fieldToolTipsasset;
$placeHolders["asset"] = &$placeHoldersasset;
$page_titles["asset"] = &$pageTitlesasset;


changeTextControlsToDate( "asset" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["asset"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["asset"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="View";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="account";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "account";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["asset"][0] = $masterParams;
				$masterTablesData["asset"][0]["masterKeys"] = array();
	$masterTablesData["asset"][0]["masterKeys"][]="account_id";
				$masterTablesData["asset"][0]["detailKeys"] = array();
	$masterTablesData["asset"][0]["detailKeys"][]="account_id";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="View";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="product_series";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "product_series";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["asset"][1] = $masterParams;
				$masterTablesData["asset"][1]["masterKeys"] = array();
	$masterTablesData["asset"][1]["masterKeys"][]="account_id";
				$masterTablesData["asset"][1]["detailKeys"] = array();
	$masterTablesData["asset"][1]["detailKeys"][]="account_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/asset_ops.php" ) );



	
				;

									

$tdataasset[".sqlquery"] = $queryData_asset;



include_once(getabspath("include/asset_events.php"));
$tdataasset[".hasEvents"] = true;

?>