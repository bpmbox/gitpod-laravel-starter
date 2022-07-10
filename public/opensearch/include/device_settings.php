<?php
$tdatadevice = array();
$tdatadevice[".searchableFields"] = array();
$tdatadevice[".ShortName"] = "device";
$tdatadevice[".OwnerID"] = "";
$tdatadevice[".OriginalTable"] = "View";


$tdatadevice[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadevice[".originalPagesByType"] = $tdatadevice[".pagesByType"];
$tdatadevice[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadevice[".originalPages"] = $tdatadevice[".pages"];
$tdatadevice[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadevice[".originalDefaultPages"] = $tdatadevice[".defaultPages"];

//	field labels
$fieldLabelsdevice = array();
$fieldToolTipsdevice = array();
$pageTitlesdevice = array();
$placeHoldersdevice = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdevice["English"] = array();
	$fieldToolTipsdevice["English"] = array();
	$placeHoldersdevice["English"] = array();
	$pageTitlesdevice["English"] = array();
	$fieldLabelsdevice["English"]["_id"] = "Id";
	$fieldToolTipsdevice["English"]["_id"] = "";
	$placeHoldersdevice["English"]["_id"] = "";
	$fieldLabelsdevice["English"]["account_id"] = "Account Id";
	$fieldToolTipsdevice["English"]["account_id"] = "";
	$placeHoldersdevice["English"]["account_id"] = "";
	$fieldLabelsdevice["English"]["role1"] = "Role1";
	$fieldToolTipsdevice["English"]["role1"] = "";
	$placeHoldersdevice["English"]["role1"] = "";
	$fieldLabelsdevice["English"]["successful"] = "Successful";
	$fieldToolTipsdevice["English"]["successful"] = "";
	$placeHoldersdevice["English"]["successful"] = "";
	$fieldLabelsdevice["English"]["failed"] = "Failed";
	$fieldToolTipsdevice["English"]["failed"] = "";
	$placeHoldersdevice["English"]["failed"] = "";
	if (count($fieldToolTipsdevice["English"]))
		$tdatadevice[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsdevice["Japanese"] = array();
	$fieldToolTipsdevice["Japanese"] = array();
	$placeHoldersdevice["Japanese"] = array();
	$pageTitlesdevice["Japanese"] = array();
	$fieldLabelsdevice["Japanese"]["_id"] = "Id";
	$fieldToolTipsdevice["Japanese"]["_id"] = "";
	$placeHoldersdevice["Japanese"]["_id"] = "";
	$fieldLabelsdevice["Japanese"]["account_id"] = "Account Id";
	$fieldToolTipsdevice["Japanese"]["account_id"] = "";
	$placeHoldersdevice["Japanese"]["account_id"] = "";
	$fieldLabelsdevice["Japanese"]["role1"] = "Role1";
	$fieldToolTipsdevice["Japanese"]["role1"] = "";
	$placeHoldersdevice["Japanese"]["role1"] = "";
	$fieldLabelsdevice["Japanese"]["successful"] = "Successful";
	$fieldToolTipsdevice["Japanese"]["successful"] = "";
	$placeHoldersdevice["Japanese"]["successful"] = "";
	$fieldLabelsdevice["Japanese"]["failed"] = "Failed";
	$fieldToolTipsdevice["Japanese"]["failed"] = "";
	$placeHoldersdevice["Japanese"]["failed"] = "";
	if (count($fieldToolTipsdevice["Japanese"]))
		$tdatadevice[".isUseToolTips"] = true;
}


	$tdatadevice[".NCSearch"] = true;



$tdatadevice[".shortTableName"] = "device";
$tdatadevice[".nSecOptions"] = 0;

$tdatadevice[".mainTableOwnerID"] = "";
$tdatadevice[".entityType"] = 7;
$tdatadevice[".connId"] = "rest";


$tdatadevice[".strOriginalTableName"] = "View";

	



$tdatadevice[".showAddInPopup"] = false;

$tdatadevice[".showEditInPopup"] = false;

$tdatadevice[".showViewInPopup"] = false;

$tdatadevice[".listAjax"] = false;
//	temporary
//$tdatadevice[".listAjax"] = false;

	$tdatadevice[".audit"] = false;

	$tdatadevice[".locking"] = false;


$pages = $tdatadevice[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadevice[".edit"] = true;
	$tdatadevice[".afterEditAction"] = 1;
	$tdatadevice[".closePopupAfterEdit"] = 1;
	$tdatadevice[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadevice[".add"] = true;
$tdatadevice[".afterAddAction"] = 1;
$tdatadevice[".closePopupAfterAdd"] = 1;
$tdatadevice[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadevice[".list"] = true;
}



$tdatadevice[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadevice[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadevice[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadevice[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadevice[".printFriendly"] = true;
}



$tdatadevice[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadevice[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadevice[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadevice[".isUseAjaxSuggest"] = false;

$tdatadevice[".rowHighlite"] = true;





$tdatadevice[".ajaxCodeSnippetAdded"] = false;

$tdatadevice[".buttonsAdded"] = false;

$tdatadevice[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadevice[".isUseTimeForSearch"] = false;


$tdatadevice[".badgeColor"] = "dc143c";


$tdatadevice[".allSearchFields"] = array();
$tdatadevice[".filterFields"] = array();
$tdatadevice[".requiredSearchFields"] = array();

$tdatadevice[".googleLikeFields"] = array();
$tdatadevice[".googleLikeFields"][] = "_id";
$tdatadevice[".googleLikeFields"][] = "account_id";
$tdatadevice[".googleLikeFields"][] = "role1";
$tdatadevice[".googleLikeFields"][] = "successful";
$tdatadevice[".googleLikeFields"][] = "failed";




$tdatadevice[".printerPageOrientation"] = 0;
$tdatadevice[".nPrinterPageScale"] = 100;

$tdatadevice[".nPrinterSplitRecords"] = 40;

$tdatadevice[".geocodingEnabled"] = false;










$tdatadevice[".pageSize"] = 20;

$tdatadevice[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadevice[".strOrderBy"] = $tstrOrderBy;

$tdatadevice[".orderindexes"] = array();


$tdatadevice[".sqlHead"] = "";
$tdatadevice[".sqlFrom"] = "";
$tdatadevice[".sqlWhereExpr"] = "";
$tdatadevice[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadevice[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadevice[".arrGroupsPerPage"] = $arrGPP;

$tdatadevice[".highlightSearchResults"] = true;

$tableKeysdevice = array();
$tdatadevice[".Keys"] = $tableKeysdevice;


$tdatadevice[".hideMobileList"] = array();




//	_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "_id";
	$fdata["GoodName"] = "_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("device","_id");
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


	$tdatadevice["_id"] = $fdata;
		$tdatadevice[".searchableFields"][] = "_id";
//	account_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "account_id";
	$fdata["GoodName"] = "account_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("device","account_id");
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


	$tdatadevice["account_id"] = $fdata;
		$tdatadevice[".searchableFields"][] = "account_id";
//	role1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "role1";
	$fdata["GoodName"] = "role1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("device","role1");
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


	$tdatadevice["role1"] = $fdata;
		$tdatadevice[".searchableFields"][] = "role1";
//	successful
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "successful";
	$fdata["GoodName"] = "successful";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("device","successful");
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


	$tdatadevice["successful"] = $fdata;
		$tdatadevice[".searchableFields"][] = "successful";
//	failed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "failed";
	$fdata["GoodName"] = "failed";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("device","failed");
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


	$tdatadevice["failed"] = $fdata;
		$tdatadevice[".searchableFields"][] = "failed";


$tables_data["device"]=&$tdatadevice;
$field_labels["device"] = &$fieldLabelsdevice;
$fieldToolTips["device"] = &$fieldToolTipsdevice;
$placeHolders["device"] = &$placeHoldersdevice;
$page_titles["device"] = &$pageTitlesdevice;


changeTextControlsToDate( "device" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["device"] = array();
//	device_action
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="device_action";
		$detailsParam["dOriginalTable"] = "View";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "device_action";
	$detailsParam["dCaptionTable"] = GetTableCaption("device_action");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["device"][$dIndex] = $detailsParam;

	
		$detailsTablesData["device"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["device"][$dIndex]["masterKeys"][]="account_id";

				$detailsTablesData["device"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["device"][$dIndex]["detailKeys"][]="account_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["device"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="View";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="group";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "group";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["device"][0] = $masterParams;
				$masterTablesData["device"][0]["masterKeys"] = array();
	$masterTablesData["device"][0]["masterKeys"][]="account_id";
				$masterTablesData["device"][0]["detailKeys"] = array();
	$masterTablesData["device"][0]["detailKeys"][]="account_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/device_ops.php" ) );



	
				;

					

$tdatadevice[".sqlquery"] = $queryData_device;



include_once(getabspath("include/device_events.php"));
$tdatadevice[".hasEvents"] = true;

?>