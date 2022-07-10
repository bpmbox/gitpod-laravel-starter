<?php
$tdatagroup = array();
$tdatagroup[".searchableFields"] = array();
$tdatagroup[".ShortName"] = "group";
$tdatagroup[".OwnerID"] = "";
$tdatagroup[".OriginalTable"] = "View";


$tdatagroup[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatagroup[".originalPagesByType"] = $tdatagroup[".pagesByType"];
$tdatagroup[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatagroup[".originalPages"] = $tdatagroup[".pages"];
$tdatagroup[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatagroup[".originalDefaultPages"] = $tdatagroup[".defaultPages"];

//	field labels
$fieldLabelsgroup = array();
$fieldToolTipsgroup = array();
$pageTitlesgroup = array();
$placeHoldersgroup = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsgroup["English"] = array();
	$fieldToolTipsgroup["English"] = array();
	$placeHoldersgroup["English"] = array();
	$pageTitlesgroup["English"] = array();
	$fieldLabelsgroup["English"]["_id"] = "Id";
	$fieldToolTipsgroup["English"]["_id"] = "";
	$placeHoldersgroup["English"]["_id"] = "";
	$fieldLabelsgroup["English"]["account_id"] = "Account Id";
	$fieldToolTipsgroup["English"]["account_id"] = "";
	$placeHoldersgroup["English"]["account_id"] = "";
	$fieldLabelsgroup["English"]["role1"] = "Role1";
	$fieldToolTipsgroup["English"]["role1"] = "";
	$placeHoldersgroup["English"]["role1"] = "";
	$fieldLabelsgroup["English"]["successful"] = "Successful";
	$fieldToolTipsgroup["English"]["successful"] = "";
	$placeHoldersgroup["English"]["successful"] = "";
	$fieldLabelsgroup["English"]["failed"] = "Failed";
	$fieldToolTipsgroup["English"]["failed"] = "";
	$placeHoldersgroup["English"]["failed"] = "";
	if (count($fieldToolTipsgroup["English"]))
		$tdatagroup[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsgroup["Japanese"] = array();
	$fieldToolTipsgroup["Japanese"] = array();
	$placeHoldersgroup["Japanese"] = array();
	$pageTitlesgroup["Japanese"] = array();
	$fieldLabelsgroup["Japanese"]["_id"] = "Id";
	$fieldToolTipsgroup["Japanese"]["_id"] = "";
	$placeHoldersgroup["Japanese"]["_id"] = "";
	$fieldLabelsgroup["Japanese"]["account_id"] = "Account Id";
	$fieldToolTipsgroup["Japanese"]["account_id"] = "";
	$placeHoldersgroup["Japanese"]["account_id"] = "";
	$fieldLabelsgroup["Japanese"]["role1"] = "Role1";
	$fieldToolTipsgroup["Japanese"]["role1"] = "";
	$placeHoldersgroup["Japanese"]["role1"] = "";
	$fieldLabelsgroup["Japanese"]["successful"] = "Successful";
	$fieldToolTipsgroup["Japanese"]["successful"] = "";
	$placeHoldersgroup["Japanese"]["successful"] = "";
	$fieldLabelsgroup["Japanese"]["failed"] = "Failed";
	$fieldToolTipsgroup["Japanese"]["failed"] = "";
	$placeHoldersgroup["Japanese"]["failed"] = "";
	if (count($fieldToolTipsgroup["Japanese"]))
		$tdatagroup[".isUseToolTips"] = true;
}


	$tdatagroup[".NCSearch"] = true;



$tdatagroup[".shortTableName"] = "group";
$tdatagroup[".nSecOptions"] = 0;

$tdatagroup[".mainTableOwnerID"] = "";
$tdatagroup[".entityType"] = 7;
$tdatagroup[".connId"] = "rest";


$tdatagroup[".strOriginalTableName"] = "View";

	



$tdatagroup[".showAddInPopup"] = false;

$tdatagroup[".showEditInPopup"] = false;

$tdatagroup[".showViewInPopup"] = false;

$tdatagroup[".listAjax"] = false;
//	temporary
//$tdatagroup[".listAjax"] = false;

	$tdatagroup[".audit"] = false;

	$tdatagroup[".locking"] = false;


$pages = $tdatagroup[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagroup[".edit"] = true;
	$tdatagroup[".afterEditAction"] = 1;
	$tdatagroup[".closePopupAfterEdit"] = 1;
	$tdatagroup[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatagroup[".add"] = true;
$tdatagroup[".afterAddAction"] = 1;
$tdatagroup[".closePopupAfterAdd"] = 1;
$tdatagroup[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatagroup[".list"] = true;
}



$tdatagroup[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatagroup[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagroup[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagroup[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagroup[".printFriendly"] = true;
}



$tdatagroup[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagroup[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagroup[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagroup[".isUseAjaxSuggest"] = false;

$tdatagroup[".rowHighlite"] = true;





$tdatagroup[".ajaxCodeSnippetAdded"] = false;

$tdatagroup[".buttonsAdded"] = false;

$tdatagroup[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagroup[".isUseTimeForSearch"] = false;


$tdatagroup[".badgeColor"] = "8fbc8b";


$tdatagroup[".allSearchFields"] = array();
$tdatagroup[".filterFields"] = array();
$tdatagroup[".requiredSearchFields"] = array();

$tdatagroup[".googleLikeFields"] = array();
$tdatagroup[".googleLikeFields"][] = "_id";
$tdatagroup[".googleLikeFields"][] = "account_id";
$tdatagroup[".googleLikeFields"][] = "role1";
$tdatagroup[".googleLikeFields"][] = "successful";
$tdatagroup[".googleLikeFields"][] = "failed";




$tdatagroup[".printerPageOrientation"] = 0;
$tdatagroup[".nPrinterPageScale"] = 100;

$tdatagroup[".nPrinterSplitRecords"] = 40;

$tdatagroup[".geocodingEnabled"] = false;










$tdatagroup[".pageSize"] = 20;

$tdatagroup[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatagroup[".strOrderBy"] = $tstrOrderBy;

$tdatagroup[".orderindexes"] = array();


$tdatagroup[".sqlHead"] = "";
$tdatagroup[".sqlFrom"] = "";
$tdatagroup[".sqlWhereExpr"] = "";
$tdatagroup[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagroup[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagroup[".arrGroupsPerPage"] = $arrGPP;

$tdatagroup[".highlightSearchResults"] = true;

$tableKeysgroup = array();
$tdatagroup[".Keys"] = $tableKeysgroup;


$tdatagroup[".hideMobileList"] = array();




//	_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "_id";
	$fdata["GoodName"] = "_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("group","_id");
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


	$tdatagroup["_id"] = $fdata;
		$tdatagroup[".searchableFields"][] = "_id";
//	account_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "account_id";
	$fdata["GoodName"] = "account_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("group","account_id");
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


	$tdatagroup["account_id"] = $fdata;
		$tdatagroup[".searchableFields"][] = "account_id";
//	role1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "role1";
	$fdata["GoodName"] = "role1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("group","role1");
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


	$tdatagroup["role1"] = $fdata;
		$tdatagroup[".searchableFields"][] = "role1";
//	successful
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "successful";
	$fdata["GoodName"] = "successful";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("group","successful");
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


	$tdatagroup["successful"] = $fdata;
		$tdatagroup[".searchableFields"][] = "successful";
//	failed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "failed";
	$fdata["GoodName"] = "failed";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("group","failed");
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


	$tdatagroup["failed"] = $fdata;
		$tdatagroup[".searchableFields"][] = "failed";


$tables_data["group"]=&$tdatagroup;
$field_labels["group"] = &$fieldLabelsgroup;
$fieldToolTips["group"] = &$fieldToolTipsgroup;
$placeHolders["group"] = &$placeHoldersgroup;
$page_titles["group"] = &$pageTitlesgroup;


changeTextControlsToDate( "group" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["group"] = array();
//	device
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="device";
		$detailsParam["dOriginalTable"] = "View";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "device";
	$detailsParam["dCaptionTable"] = GetTableCaption("device");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["group"][$dIndex] = $detailsParam;

	
		$detailsTablesData["group"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["group"][$dIndex]["masterKeys"][]="account_id";

				$detailsTablesData["group"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["group"][$dIndex]["detailKeys"][]="account_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["group"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="View";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="account";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "account";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["group"][0] = $masterParams;
				$masterTablesData["group"][0]["masterKeys"] = array();
	$masterTablesData["group"][0]["masterKeys"][]="account_id";
				$masterTablesData["group"][0]["detailKeys"] = array();
	$masterTablesData["group"][0]["detailKeys"][]="account_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/group_ops.php" ) );



	
				;

					

$tdatagroup[".sqlquery"] = $queryData_group;



include_once(getabspath("include/group_events.php"));
$tdatagroup[".hasEvents"] = true;

?>