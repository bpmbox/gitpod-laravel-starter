<?php
$tdatadevice_action = array();
$tdatadevice_action[".searchableFields"] = array();
$tdatadevice_action[".ShortName"] = "device_action";
$tdatadevice_action[".OwnerID"] = "";
$tdatadevice_action[".OriginalTable"] = "View";


$tdatadevice_action[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadevice_action[".originalPagesByType"] = $tdatadevice_action[".pagesByType"];
$tdatadevice_action[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadevice_action[".originalPages"] = $tdatadevice_action[".pages"];
$tdatadevice_action[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadevice_action[".originalDefaultPages"] = $tdatadevice_action[".defaultPages"];

//	field labels
$fieldLabelsdevice_action = array();
$fieldToolTipsdevice_action = array();
$pageTitlesdevice_action = array();
$placeHoldersdevice_action = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdevice_action["English"] = array();
	$fieldToolTipsdevice_action["English"] = array();
	$placeHoldersdevice_action["English"] = array();
	$pageTitlesdevice_action["English"] = array();
	$fieldLabelsdevice_action["English"]["_id"] = "Id";
	$fieldToolTipsdevice_action["English"]["_id"] = "";
	$placeHoldersdevice_action["English"]["_id"] = "";
	$fieldLabelsdevice_action["English"]["account_id"] = "Account Id";
	$fieldToolTipsdevice_action["English"]["account_id"] = "";
	$placeHoldersdevice_action["English"]["account_id"] = "";
	$fieldLabelsdevice_action["English"]["role1"] = "Role1";
	$fieldToolTipsdevice_action["English"]["role1"] = "";
	$placeHoldersdevice_action["English"]["role1"] = "";
	$fieldLabelsdevice_action["English"]["successful"] = "Successful";
	$fieldToolTipsdevice_action["English"]["successful"] = "";
	$placeHoldersdevice_action["English"]["successful"] = "";
	$fieldLabelsdevice_action["English"]["failed"] = "Failed";
	$fieldToolTipsdevice_action["English"]["failed"] = "";
	$placeHoldersdevice_action["English"]["failed"] = "";
	if (count($fieldToolTipsdevice_action["English"]))
		$tdatadevice_action[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsdevice_action["Japanese"] = array();
	$fieldToolTipsdevice_action["Japanese"] = array();
	$placeHoldersdevice_action["Japanese"] = array();
	$pageTitlesdevice_action["Japanese"] = array();
	$fieldLabelsdevice_action["Japanese"]["_id"] = "Id";
	$fieldToolTipsdevice_action["Japanese"]["_id"] = "";
	$placeHoldersdevice_action["Japanese"]["_id"] = "";
	$fieldLabelsdevice_action["Japanese"]["account_id"] = "Account Id";
	$fieldToolTipsdevice_action["Japanese"]["account_id"] = "";
	$placeHoldersdevice_action["Japanese"]["account_id"] = "";
	$fieldLabelsdevice_action["Japanese"]["role1"] = "Role1";
	$fieldToolTipsdevice_action["Japanese"]["role1"] = "";
	$placeHoldersdevice_action["Japanese"]["role1"] = "";
	$fieldLabelsdevice_action["Japanese"]["successful"] = "Successful";
	$fieldToolTipsdevice_action["Japanese"]["successful"] = "";
	$placeHoldersdevice_action["Japanese"]["successful"] = "";
	$fieldLabelsdevice_action["Japanese"]["failed"] = "Failed";
	$fieldToolTipsdevice_action["Japanese"]["failed"] = "";
	$placeHoldersdevice_action["Japanese"]["failed"] = "";
	if (count($fieldToolTipsdevice_action["Japanese"]))
		$tdatadevice_action[".isUseToolTips"] = true;
}


	$tdatadevice_action[".NCSearch"] = true;



$tdatadevice_action[".shortTableName"] = "device_action";
$tdatadevice_action[".nSecOptions"] = 0;

$tdatadevice_action[".mainTableOwnerID"] = "";
$tdatadevice_action[".entityType"] = 7;
$tdatadevice_action[".connId"] = "rest";


$tdatadevice_action[".strOriginalTableName"] = "View";

	



$tdatadevice_action[".showAddInPopup"] = false;

$tdatadevice_action[".showEditInPopup"] = false;

$tdatadevice_action[".showViewInPopup"] = false;

$tdatadevice_action[".listAjax"] = false;
//	temporary
//$tdatadevice_action[".listAjax"] = false;

	$tdatadevice_action[".audit"] = false;

	$tdatadevice_action[".locking"] = false;


$pages = $tdatadevice_action[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadevice_action[".edit"] = true;
	$tdatadevice_action[".afterEditAction"] = 1;
	$tdatadevice_action[".closePopupAfterEdit"] = 1;
	$tdatadevice_action[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadevice_action[".add"] = true;
$tdatadevice_action[".afterAddAction"] = 1;
$tdatadevice_action[".closePopupAfterAdd"] = 1;
$tdatadevice_action[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadevice_action[".list"] = true;
}



$tdatadevice_action[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadevice_action[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadevice_action[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadevice_action[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadevice_action[".printFriendly"] = true;
}



$tdatadevice_action[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadevice_action[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadevice_action[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadevice_action[".isUseAjaxSuggest"] = false;

$tdatadevice_action[".rowHighlite"] = true;





$tdatadevice_action[".ajaxCodeSnippetAdded"] = false;

$tdatadevice_action[".buttonsAdded"] = false;

$tdatadevice_action[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadevice_action[".isUseTimeForSearch"] = false;


$tdatadevice_action[".badgeColor"] = "daa520";


$tdatadevice_action[".allSearchFields"] = array();
$tdatadevice_action[".filterFields"] = array();
$tdatadevice_action[".requiredSearchFields"] = array();

$tdatadevice_action[".googleLikeFields"] = array();
$tdatadevice_action[".googleLikeFields"][] = "_id";
$tdatadevice_action[".googleLikeFields"][] = "account_id";
$tdatadevice_action[".googleLikeFields"][] = "role1";
$tdatadevice_action[".googleLikeFields"][] = "successful";
$tdatadevice_action[".googleLikeFields"][] = "failed";




$tdatadevice_action[".printerPageOrientation"] = 0;
$tdatadevice_action[".nPrinterPageScale"] = 100;

$tdatadevice_action[".nPrinterSplitRecords"] = 40;

$tdatadevice_action[".geocodingEnabled"] = false;










$tdatadevice_action[".pageSize"] = 20;

$tdatadevice_action[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadevice_action[".strOrderBy"] = $tstrOrderBy;

$tdatadevice_action[".orderindexes"] = array();


$tdatadevice_action[".sqlHead"] = "";
$tdatadevice_action[".sqlFrom"] = "";
$tdatadevice_action[".sqlWhereExpr"] = "";
$tdatadevice_action[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadevice_action[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadevice_action[".arrGroupsPerPage"] = $arrGPP;

$tdatadevice_action[".highlightSearchResults"] = true;

$tableKeysdevice_action = array();
$tdatadevice_action[".Keys"] = $tableKeysdevice_action;


$tdatadevice_action[".hideMobileList"] = array();




//	_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "_id";
	$fdata["GoodName"] = "_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("device_action","_id");
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


	$tdatadevice_action["_id"] = $fdata;
		$tdatadevice_action[".searchableFields"][] = "_id";
//	account_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "account_id";
	$fdata["GoodName"] = "account_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("device_action","account_id");
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


	$tdatadevice_action["account_id"] = $fdata;
		$tdatadevice_action[".searchableFields"][] = "account_id";
//	role1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "role1";
	$fdata["GoodName"] = "role1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("device_action","role1");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "hits/hits/*/_source/role";

	
		$fdata["FullName"] = "role1";

	
	
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


	$tdatadevice_action["role1"] = $fdata;
		$tdatadevice_action[".searchableFields"][] = "role1";
//	successful
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "successful";
	$fdata["GoodName"] = "successful";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("device_action","successful");
	$fdata["FieldType"] = 3;


	
	
			

	
		$fdata["sourceSingle"] = "_shards/successful";

		$fdata["FullName"] = "successful";

	
	
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


	$tdatadevice_action["successful"] = $fdata;
		$tdatadevice_action[".searchableFields"][] = "successful";
//	failed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "failed";
	$fdata["GoodName"] = "failed";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("device_action","failed");
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


	$tdatadevice_action["failed"] = $fdata;
		$tdatadevice_action[".searchableFields"][] = "failed";


$tables_data["device_action"]=&$tdatadevice_action;
$field_labels["device_action"] = &$fieldLabelsdevice_action;
$fieldToolTips["device_action"] = &$fieldToolTipsdevice_action;
$placeHolders["device_action"] = &$placeHoldersdevice_action;
$page_titles["device_action"] = &$pageTitlesdevice_action;


changeTextControlsToDate( "device_action" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["device_action"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["device_action"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="View";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="device";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "device";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["device_action"][0] = $masterParams;
				$masterTablesData["device_action"][0]["masterKeys"] = array();
	$masterTablesData["device_action"][0]["masterKeys"][]="account_id";
				$masterTablesData["device_action"][0]["detailKeys"] = array();
	$masterTablesData["device_action"][0]["detailKeys"][]="account_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/device_action_ops.php" ) );



	
				;

					

$tdatadevice_action[".sqlquery"] = $queryData_device_action;



include_once(getabspath("include/device_action_events.php"));
$tdatadevice_action[".hasEvents"] = true;

?>