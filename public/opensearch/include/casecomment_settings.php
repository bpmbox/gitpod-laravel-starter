<?php
$tdatacasecomment = array();
$tdatacasecomment[".searchableFields"] = array();
$tdatacasecomment[".ShortName"] = "casecomment";
$tdatacasecomment[".OwnerID"] = "";
$tdatacasecomment[".OriginalTable"] = "View";


$tdatacasecomment[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatacasecomment[".originalPagesByType"] = $tdatacasecomment[".pagesByType"];
$tdatacasecomment[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatacasecomment[".originalPages"] = $tdatacasecomment[".pages"];
$tdatacasecomment[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatacasecomment[".originalDefaultPages"] = $tdatacasecomment[".defaultPages"];

//	field labels
$fieldLabelscasecomment = array();
$fieldToolTipscasecomment = array();
$pageTitlescasecomment = array();
$placeHolderscasecomment = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscasecomment["English"] = array();
	$fieldToolTipscasecomment["English"] = array();
	$placeHolderscasecomment["English"] = array();
	$pageTitlescasecomment["English"] = array();
	$fieldLabelscasecomment["English"]["_id"] = "Id";
	$fieldToolTipscasecomment["English"]["_id"] = "";
	$placeHolderscasecomment["English"]["_id"] = "";
	$fieldLabelscasecomment["English"]["account_id"] = "Account Id";
	$fieldToolTipscasecomment["English"]["account_id"] = "";
	$placeHolderscasecomment["English"]["account_id"] = "";
	$fieldLabelscasecomment["English"]["role1"] = "Role1";
	$fieldToolTipscasecomment["English"]["role1"] = "";
	$placeHolderscasecomment["English"]["role1"] = "";
	$fieldLabelscasecomment["English"]["successful"] = "Successful";
	$fieldToolTipscasecomment["English"]["successful"] = "";
	$placeHolderscasecomment["English"]["successful"] = "";
	$fieldLabelscasecomment["English"]["failed"] = "Failed";
	$fieldToolTipscasecomment["English"]["failed"] = "";
	$placeHolderscasecomment["English"]["failed"] = "";
	$fieldLabelscasecomment["English"]["_index"] = "Index";
	$fieldToolTipscasecomment["English"]["_index"] = "";
	$placeHolderscasecomment["English"]["_index"] = "";
	$fieldLabelscasecomment["English"]["_type"] = "Type";
	$fieldToolTipscasecomment["English"]["_type"] = "";
	$placeHolderscasecomment["English"]["_type"] = "";
	$fieldLabelscasecomment["English"]["product_series_id"] = "Product Series Id";
	$fieldToolTipscasecomment["English"]["product_series_id"] = "";
	$placeHolderscasecomment["English"]["product_series_id"] = "";
	$fieldLabelscasecomment["English"]["original_id"] = "Original Id";
	$fieldToolTipscasecomment["English"]["original_id"] = "";
	$placeHolderscasecomment["English"]["original_id"] = "";
	$fieldLabelscasecomment["English"]["name"] = "Name";
	$fieldToolTipscasecomment["English"]["name"] = "";
	$placeHolderscasecomment["English"]["name"] = "";
	$fieldLabelscasecomment["English"]["update_at"] = "Update At";
	$fieldToolTipscasecomment["English"]["update_at"] = "";
	$placeHolderscasecomment["English"]["update_at"] = "";
	$fieldLabelscasecomment["English"]["created"] = "Created";
	$fieldToolTipscasecomment["English"]["created"] = "";
	$placeHolderscasecomment["English"]["created"] = "";
	$fieldLabelscasecomment["English"]["create_at"] = "Create At";
	$fieldToolTipscasecomment["English"]["create_at"] = "";
	$placeHolderscasecomment["English"]["create_at"] = "";
	$fieldLabelscasecomment["English"]["updated"] = "Updated";
	$fieldToolTipscasecomment["English"]["updated"] = "";
	$placeHolderscasecomment["English"]["updated"] = "";
	$fieldLabelscasecomment["English"]["update_at1"] = "Update At1";
	$fieldToolTipscasecomment["English"]["update_at1"] = "";
	$placeHolderscasecomment["English"]["update_at1"] = "";
	$fieldLabelscasecomment["English"]["deleted"] = "Deleted";
	$fieldToolTipscasecomment["English"]["deleted"] = "";
	$placeHolderscasecomment["English"]["deleted"] = "";
	$fieldLabelscasecomment["English"]["delete_at"] = "Delete At";
	$fieldToolTipscasecomment["English"]["delete_at"] = "";
	$placeHolderscasecomment["English"]["delete_at"] = "";
	$fieldLabelscasecomment["English"]["is_deleted"] = "Is Deleted";
	$fieldToolTipscasecomment["English"]["is_deleted"] = "";
	$placeHolderscasecomment["English"]["is_deleted"] = "";
	if (count($fieldToolTipscasecomment["English"]))
		$tdatacasecomment[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelscasecomment["Japanese"] = array();
	$fieldToolTipscasecomment["Japanese"] = array();
	$placeHolderscasecomment["Japanese"] = array();
	$pageTitlescasecomment["Japanese"] = array();
	$fieldLabelscasecomment["Japanese"]["_id"] = "Id";
	$fieldToolTipscasecomment["Japanese"]["_id"] = "";
	$placeHolderscasecomment["Japanese"]["_id"] = "";
	$fieldLabelscasecomment["Japanese"]["account_id"] = "Account Id";
	$fieldToolTipscasecomment["Japanese"]["account_id"] = "";
	$placeHolderscasecomment["Japanese"]["account_id"] = "";
	$fieldLabelscasecomment["Japanese"]["role1"] = "Role1";
	$fieldToolTipscasecomment["Japanese"]["role1"] = "";
	$placeHolderscasecomment["Japanese"]["role1"] = "";
	$fieldLabelscasecomment["Japanese"]["successful"] = "Successful";
	$fieldToolTipscasecomment["Japanese"]["successful"] = "";
	$placeHolderscasecomment["Japanese"]["successful"] = "";
	$fieldLabelscasecomment["Japanese"]["failed"] = "Failed";
	$fieldToolTipscasecomment["Japanese"]["failed"] = "";
	$placeHolderscasecomment["Japanese"]["failed"] = "";
	$fieldLabelscasecomment["Japanese"]["_index"] = "Index";
	$fieldToolTipscasecomment["Japanese"]["_index"] = "";
	$placeHolderscasecomment["Japanese"]["_index"] = "";
	$fieldLabelscasecomment["Japanese"]["_type"] = "Type";
	$fieldToolTipscasecomment["Japanese"]["_type"] = "";
	$placeHolderscasecomment["Japanese"]["_type"] = "";
	$fieldLabelscasecomment["Japanese"]["product_series_id"] = "Product Series Id";
	$fieldToolTipscasecomment["Japanese"]["product_series_id"] = "";
	$placeHolderscasecomment["Japanese"]["product_series_id"] = "";
	$fieldLabelscasecomment["Japanese"]["original_id"] = "Original Id";
	$fieldToolTipscasecomment["Japanese"]["original_id"] = "";
	$placeHolderscasecomment["Japanese"]["original_id"] = "";
	$fieldLabelscasecomment["Japanese"]["name"] = "Name";
	$fieldToolTipscasecomment["Japanese"]["name"] = "";
	$placeHolderscasecomment["Japanese"]["name"] = "";
	$fieldLabelscasecomment["Japanese"]["update_at"] = "Update At";
	$fieldToolTipscasecomment["Japanese"]["update_at"] = "";
	$placeHolderscasecomment["Japanese"]["update_at"] = "";
	$fieldLabelscasecomment["Japanese"]["created"] = "Created";
	$fieldToolTipscasecomment["Japanese"]["created"] = "";
	$placeHolderscasecomment["Japanese"]["created"] = "";
	$fieldLabelscasecomment["Japanese"]["create_at"] = "Create At";
	$fieldToolTipscasecomment["Japanese"]["create_at"] = "";
	$placeHolderscasecomment["Japanese"]["create_at"] = "";
	$fieldLabelscasecomment["Japanese"]["updated"] = "Updated";
	$fieldToolTipscasecomment["Japanese"]["updated"] = "";
	$placeHolderscasecomment["Japanese"]["updated"] = "";
	$fieldLabelscasecomment["Japanese"]["update_at1"] = "Update At1";
	$fieldToolTipscasecomment["Japanese"]["update_at1"] = "";
	$placeHolderscasecomment["Japanese"]["update_at1"] = "";
	$fieldLabelscasecomment["Japanese"]["deleted"] = "Deleted";
	$fieldToolTipscasecomment["Japanese"]["deleted"] = "";
	$placeHolderscasecomment["Japanese"]["deleted"] = "";
	$fieldLabelscasecomment["Japanese"]["delete_at"] = "Delete At";
	$fieldToolTipscasecomment["Japanese"]["delete_at"] = "";
	$placeHolderscasecomment["Japanese"]["delete_at"] = "";
	$fieldLabelscasecomment["Japanese"]["is_deleted"] = "Is Deleted";
	$fieldToolTipscasecomment["Japanese"]["is_deleted"] = "";
	$placeHolderscasecomment["Japanese"]["is_deleted"] = "";
	if (count($fieldToolTipscasecomment["Japanese"]))
		$tdatacasecomment[".isUseToolTips"] = true;
}


	$tdatacasecomment[".NCSearch"] = true;



$tdatacasecomment[".shortTableName"] = "casecomment";
$tdatacasecomment[".nSecOptions"] = 0;

$tdatacasecomment[".mainTableOwnerID"] = "";
$tdatacasecomment[".entityType"] = 7;
$tdatacasecomment[".connId"] = "rest";


$tdatacasecomment[".strOriginalTableName"] = "View";

	



$tdatacasecomment[".showAddInPopup"] = false;

$tdatacasecomment[".showEditInPopup"] = false;

$tdatacasecomment[".showViewInPopup"] = false;

$tdatacasecomment[".listAjax"] = false;
//	temporary
//$tdatacasecomment[".listAjax"] = false;

	$tdatacasecomment[".audit"] = false;

	$tdatacasecomment[".locking"] = false;


$pages = $tdatacasecomment[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacasecomment[".edit"] = true;
	$tdatacasecomment[".afterEditAction"] = 1;
	$tdatacasecomment[".closePopupAfterEdit"] = 1;
	$tdatacasecomment[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacasecomment[".add"] = true;
$tdatacasecomment[".afterAddAction"] = 1;
$tdatacasecomment[".closePopupAfterAdd"] = 1;
$tdatacasecomment[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacasecomment[".list"] = true;
}



$tdatacasecomment[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacasecomment[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacasecomment[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacasecomment[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacasecomment[".printFriendly"] = true;
}



$tdatacasecomment[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacasecomment[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacasecomment[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacasecomment[".isUseAjaxSuggest"] = false;

$tdatacasecomment[".rowHighlite"] = true;





$tdatacasecomment[".ajaxCodeSnippetAdded"] = false;

$tdatacasecomment[".buttonsAdded"] = false;

$tdatacasecomment[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacasecomment[".isUseTimeForSearch"] = false;


$tdatacasecomment[".badgeColor"] = "3cb371";


$tdatacasecomment[".allSearchFields"] = array();
$tdatacasecomment[".filterFields"] = array();
$tdatacasecomment[".requiredSearchFields"] = array();

$tdatacasecomment[".googleLikeFields"] = array();
$tdatacasecomment[".googleLikeFields"][] = "_id";
$tdatacasecomment[".googleLikeFields"][] = "account_id";
$tdatacasecomment[".googleLikeFields"][] = "role1";
$tdatacasecomment[".googleLikeFields"][] = "successful";
$tdatacasecomment[".googleLikeFields"][] = "failed";
$tdatacasecomment[".googleLikeFields"][] = "_index";
$tdatacasecomment[".googleLikeFields"][] = "_type";
$tdatacasecomment[".googleLikeFields"][] = "product_series_id";
$tdatacasecomment[".googleLikeFields"][] = "original_id";
$tdatacasecomment[".googleLikeFields"][] = "name";
$tdatacasecomment[".googleLikeFields"][] = "update_at";
$tdatacasecomment[".googleLikeFields"][] = "created";
$tdatacasecomment[".googleLikeFields"][] = "create_at";
$tdatacasecomment[".googleLikeFields"][] = "updated";
$tdatacasecomment[".googleLikeFields"][] = "update_at1";
$tdatacasecomment[".googleLikeFields"][] = "deleted";
$tdatacasecomment[".googleLikeFields"][] = "delete_at";
$tdatacasecomment[".googleLikeFields"][] = "is_deleted";




$tdatacasecomment[".printerPageOrientation"] = 0;
$tdatacasecomment[".nPrinterPageScale"] = 100;

$tdatacasecomment[".nPrinterSplitRecords"] = 40;

$tdatacasecomment[".geocodingEnabled"] = false;










$tdatacasecomment[".pageSize"] = 20;

$tdatacasecomment[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacasecomment[".strOrderBy"] = $tstrOrderBy;

$tdatacasecomment[".orderindexes"] = array();


$tdatacasecomment[".sqlHead"] = "";
$tdatacasecomment[".sqlFrom"] = "";
$tdatacasecomment[".sqlWhereExpr"] = "";
$tdatacasecomment[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacasecomment[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacasecomment[".arrGroupsPerPage"] = $arrGPP;

$tdatacasecomment[".highlightSearchResults"] = true;

$tableKeyscasecomment = array();
$tdatacasecomment[".Keys"] = $tableKeyscasecomment;


$tdatacasecomment[".hideMobileList"] = array();




//	_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "_id";
	$fdata["GoodName"] = "_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("casecomment","_id");
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


	$tdatacasecomment["_id"] = $fdata;
		$tdatacasecomment[".searchableFields"][] = "_id";
//	account_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "account_id";
	$fdata["GoodName"] = "account_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("casecomment","account_id");
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


	$tdatacasecomment["account_id"] = $fdata;
		$tdatacasecomment[".searchableFields"][] = "account_id";
//	role1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "role1";
	$fdata["GoodName"] = "role1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("casecomment","role1");
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


	$tdatacasecomment["role1"] = $fdata;
		$tdatacasecomment[".searchableFields"][] = "role1";
//	successful
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "successful";
	$fdata["GoodName"] = "successful";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("casecomment","successful");
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


	$tdatacasecomment["successful"] = $fdata;
		$tdatacasecomment[".searchableFields"][] = "successful";
//	failed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "failed";
	$fdata["GoodName"] = "failed";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("casecomment","failed");
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


	$tdatacasecomment["failed"] = $fdata;
		$tdatacasecomment[".searchableFields"][] = "failed";
//	_index
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "_index";
	$fdata["GoodName"] = "_index";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("casecomment","_index");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "hits/hits/*/_index";

	
		$fdata["FullName"] = "_index";

	
	
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


	$tdatacasecomment["_index"] = $fdata;
		$tdatacasecomment[".searchableFields"][] = "_index";
//	_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "_type";
	$fdata["GoodName"] = "_type";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("casecomment","_type");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "hits/hits/*/_type";

	
		$fdata["FullName"] = "_type";

	
	
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


	$tdatacasecomment["_type"] = $fdata;
		$tdatacasecomment[".searchableFields"][] = "_type";
//	product_series_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "product_series_id";
	$fdata["GoodName"] = "product_series_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("casecomment","product_series_id");
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


	$tdatacasecomment["product_series_id"] = $fdata;
		$tdatacasecomment[".searchableFields"][] = "product_series_id";
//	original_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "original_id";
	$fdata["GoodName"] = "original_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("casecomment","original_id");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "hits/hits/*/_source/original_id";

	
		$fdata["FullName"] = "original_id";

	
	
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


	$tdatacasecomment["original_id"] = $fdata;
		$tdatacasecomment[".searchableFields"][] = "original_id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("casecomment","name");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "hits/hits/*/_source/name";

	
		$fdata["FullName"] = "name";

	
	
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


	$tdatacasecomment["name"] = $fdata;
		$tdatacasecomment[".searchableFields"][] = "name";
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("casecomment","update_at");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "hits/hits/*/_source/update_at";

	
		$fdata["FullName"] = "update_at";

	
	
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


	$tdatacasecomment["update_at"] = $fdata;
		$tdatacasecomment[".searchableFields"][] = "update_at";
//	created
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "created";
	$fdata["GoodName"] = "created";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("casecomment","created");
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


	$tdatacasecomment["created"] = $fdata;
		$tdatacasecomment[".searchableFields"][] = "created";
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("casecomment","create_at");
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


	$tdatacasecomment["create_at"] = $fdata;
		$tdatacasecomment[".searchableFields"][] = "create_at";
//	updated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "updated";
	$fdata["GoodName"] = "updated";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("casecomment","updated");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "hits/hits/*/_source/meta/updated";

	
		$fdata["FullName"] = "updated";

	
	
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


	$tdatacasecomment["updated"] = $fdata;
		$tdatacasecomment[".searchableFields"][] = "updated";
//	update_at1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "update_at1";
	$fdata["GoodName"] = "update_at1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("casecomment","update_at1");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "hits/hits/*/_source/meta/update_at";

	
		$fdata["FullName"] = "update_at1";

	
	
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


	$tdatacasecomment["update_at1"] = $fdata;
		$tdatacasecomment[".searchableFields"][] = "update_at1";
//	deleted
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "deleted";
	$fdata["GoodName"] = "deleted";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("casecomment","deleted");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "hits/hits/*/_source/meta/deleted";

	
		$fdata["FullName"] = "deleted";

	
	
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


	$tdatacasecomment["deleted"] = $fdata;
		$tdatacasecomment[".searchableFields"][] = "deleted";
//	delete_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "delete_at";
	$fdata["GoodName"] = "delete_at";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("casecomment","delete_at");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "hits/hits/*/_source/meta/delete_at";

	
		$fdata["FullName"] = "delete_at";

	
	
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


	$tdatacasecomment["delete_at"] = $fdata;
		$tdatacasecomment[".searchableFields"][] = "delete_at";
//	is_deleted
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "is_deleted";
	$fdata["GoodName"] = "is_deleted";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("casecomment","is_deleted");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "hits/hits/*/_source/is_deleted";

	
		$fdata["FullName"] = "is_deleted";

	
	
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


	$tdatacasecomment["is_deleted"] = $fdata;
		$tdatacasecomment[".searchableFields"][] = "is_deleted";


$tables_data["casecomment"]=&$tdatacasecomment;
$field_labels["casecomment"] = &$fieldLabelscasecomment;
$fieldToolTips["casecomment"] = &$fieldToolTipscasecomment;
$placeHolders["casecomment"] = &$placeHolderscasecomment;
$page_titles["casecomment"] = &$pageTitlescasecomment;


changeTextControlsToDate( "casecomment" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["casecomment"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["casecomment"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="View";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="case";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "case";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["casecomment"][0] = $masterParams;
				$masterTablesData["casecomment"][0]["masterKeys"] = array();
	$masterTablesData["casecomment"][0]["masterKeys"][]="account_id";
				$masterTablesData["casecomment"][0]["detailKeys"] = array();
	$masterTablesData["casecomment"][0]["detailKeys"][]="account_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/casecomment_ops.php" ) );



	
				;

																		

$tdatacasecomment[".sqlquery"] = $queryData_casecomment;



include_once(getabspath("include/casecomment_events.php"));
$tdatacasecomment[".hasEvents"] = true;

?>