<?php
$tdataproduct_series = array();
$tdataproduct_series[".searchableFields"] = array();
$tdataproduct_series[".ShortName"] = "product_series";
$tdataproduct_series[".OwnerID"] = "";
$tdataproduct_series[".OriginalTable"] = "View";


$tdataproduct_series[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataproduct_series[".originalPagesByType"] = $tdataproduct_series[".pagesByType"];
$tdataproduct_series[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataproduct_series[".originalPages"] = $tdataproduct_series[".pages"];
$tdataproduct_series[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataproduct_series[".originalDefaultPages"] = $tdataproduct_series[".defaultPages"];

//	field labels
$fieldLabelsproduct_series = array();
$fieldToolTipsproduct_series = array();
$pageTitlesproduct_series = array();
$placeHoldersproduct_series = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsproduct_series["English"] = array();
	$fieldToolTipsproduct_series["English"] = array();
	$placeHoldersproduct_series["English"] = array();
	$pageTitlesproduct_series["English"] = array();
	$fieldLabelsproduct_series["English"]["_id"] = "Id";
	$fieldToolTipsproduct_series["English"]["_id"] = "";
	$placeHoldersproduct_series["English"]["_id"] = "";
	$fieldLabelsproduct_series["English"]["account_id"] = "Account Id";
	$fieldToolTipsproduct_series["English"]["account_id"] = "";
	$placeHoldersproduct_series["English"]["account_id"] = "";
	$fieldLabelsproduct_series["English"]["role1"] = "Role1";
	$fieldToolTipsproduct_series["English"]["role1"] = "";
	$placeHoldersproduct_series["English"]["role1"] = "";
	$fieldLabelsproduct_series["English"]["successful"] = "Successful";
	$fieldToolTipsproduct_series["English"]["successful"] = "";
	$placeHoldersproduct_series["English"]["successful"] = "";
	$fieldLabelsproduct_series["English"]["failed"] = "Failed";
	$fieldToolTipsproduct_series["English"]["failed"] = "";
	$placeHoldersproduct_series["English"]["failed"] = "";
	$fieldLabelsproduct_series["English"]["_index"] = "Index";
	$fieldToolTipsproduct_series["English"]["_index"] = "";
	$placeHoldersproduct_series["English"]["_index"] = "";
	$fieldLabelsproduct_series["English"]["_type"] = "Type";
	$fieldToolTipsproduct_series["English"]["_type"] = "";
	$placeHoldersproduct_series["English"]["_type"] = "";
	$fieldLabelsproduct_series["English"]["product_series_id"] = "Product Series Id";
	$fieldToolTipsproduct_series["English"]["product_series_id"] = "";
	$placeHoldersproduct_series["English"]["product_series_id"] = "";
	$fieldLabelsproduct_series["English"]["original_id"] = "Original Id";
	$fieldToolTipsproduct_series["English"]["original_id"] = "";
	$placeHoldersproduct_series["English"]["original_id"] = "";
	$fieldLabelsproduct_series["English"]["name"] = "Name";
	$fieldToolTipsproduct_series["English"]["name"] = "";
	$placeHoldersproduct_series["English"]["name"] = "";
	$fieldLabelsproduct_series["English"]["update_at"] = "Update At";
	$fieldToolTipsproduct_series["English"]["update_at"] = "";
	$placeHoldersproduct_series["English"]["update_at"] = "";
	$fieldLabelsproduct_series["English"]["created"] = "Created";
	$fieldToolTipsproduct_series["English"]["created"] = "";
	$placeHoldersproduct_series["English"]["created"] = "";
	$fieldLabelsproduct_series["English"]["create_at"] = "Create At";
	$fieldToolTipsproduct_series["English"]["create_at"] = "";
	$placeHoldersproduct_series["English"]["create_at"] = "";
	$fieldLabelsproduct_series["English"]["updated"] = "Updated";
	$fieldToolTipsproduct_series["English"]["updated"] = "";
	$placeHoldersproduct_series["English"]["updated"] = "";
	$fieldLabelsproduct_series["English"]["update_at1"] = "Update At1";
	$fieldToolTipsproduct_series["English"]["update_at1"] = "";
	$placeHoldersproduct_series["English"]["update_at1"] = "";
	$fieldLabelsproduct_series["English"]["deleted"] = "Deleted";
	$fieldToolTipsproduct_series["English"]["deleted"] = "";
	$placeHoldersproduct_series["English"]["deleted"] = "";
	$fieldLabelsproduct_series["English"]["delete_at"] = "Delete At";
	$fieldToolTipsproduct_series["English"]["delete_at"] = "";
	$placeHoldersproduct_series["English"]["delete_at"] = "";
	$fieldLabelsproduct_series["English"]["is_deleted"] = "Is Deleted";
	$fieldToolTipsproduct_series["English"]["is_deleted"] = "";
	$placeHoldersproduct_series["English"]["is_deleted"] = "";
	if (count($fieldToolTipsproduct_series["English"]))
		$tdataproduct_series[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsproduct_series["Japanese"] = array();
	$fieldToolTipsproduct_series["Japanese"] = array();
	$placeHoldersproduct_series["Japanese"] = array();
	$pageTitlesproduct_series["Japanese"] = array();
	$fieldLabelsproduct_series["Japanese"]["_id"] = "Id";
	$fieldToolTipsproduct_series["Japanese"]["_id"] = "";
	$placeHoldersproduct_series["Japanese"]["_id"] = "";
	$fieldLabelsproduct_series["Japanese"]["account_id"] = "Account Id";
	$fieldToolTipsproduct_series["Japanese"]["account_id"] = "";
	$placeHoldersproduct_series["Japanese"]["account_id"] = "";
	$fieldLabelsproduct_series["Japanese"]["role1"] = "Role1";
	$fieldToolTipsproduct_series["Japanese"]["role1"] = "";
	$placeHoldersproduct_series["Japanese"]["role1"] = "";
	$fieldLabelsproduct_series["Japanese"]["successful"] = "Successful";
	$fieldToolTipsproduct_series["Japanese"]["successful"] = "";
	$placeHoldersproduct_series["Japanese"]["successful"] = "";
	$fieldLabelsproduct_series["Japanese"]["failed"] = "Failed";
	$fieldToolTipsproduct_series["Japanese"]["failed"] = "";
	$placeHoldersproduct_series["Japanese"]["failed"] = "";
	$fieldLabelsproduct_series["Japanese"]["_index"] = "Index";
	$fieldToolTipsproduct_series["Japanese"]["_index"] = "";
	$placeHoldersproduct_series["Japanese"]["_index"] = "";
	$fieldLabelsproduct_series["Japanese"]["_type"] = "Type";
	$fieldToolTipsproduct_series["Japanese"]["_type"] = "";
	$placeHoldersproduct_series["Japanese"]["_type"] = "";
	$fieldLabelsproduct_series["Japanese"]["product_series_id"] = "Product Series Id";
	$fieldToolTipsproduct_series["Japanese"]["product_series_id"] = "";
	$placeHoldersproduct_series["Japanese"]["product_series_id"] = "";
	$fieldLabelsproduct_series["Japanese"]["original_id"] = "Original Id";
	$fieldToolTipsproduct_series["Japanese"]["original_id"] = "";
	$placeHoldersproduct_series["Japanese"]["original_id"] = "";
	$fieldLabelsproduct_series["Japanese"]["name"] = "Name";
	$fieldToolTipsproduct_series["Japanese"]["name"] = "";
	$placeHoldersproduct_series["Japanese"]["name"] = "";
	$fieldLabelsproduct_series["Japanese"]["update_at"] = "Update At";
	$fieldToolTipsproduct_series["Japanese"]["update_at"] = "";
	$placeHoldersproduct_series["Japanese"]["update_at"] = "";
	$fieldLabelsproduct_series["Japanese"]["created"] = "Created";
	$fieldToolTipsproduct_series["Japanese"]["created"] = "";
	$placeHoldersproduct_series["Japanese"]["created"] = "";
	$fieldLabelsproduct_series["Japanese"]["create_at"] = "Create At";
	$fieldToolTipsproduct_series["Japanese"]["create_at"] = "";
	$placeHoldersproduct_series["Japanese"]["create_at"] = "";
	$fieldLabelsproduct_series["Japanese"]["updated"] = "Updated";
	$fieldToolTipsproduct_series["Japanese"]["updated"] = "";
	$placeHoldersproduct_series["Japanese"]["updated"] = "";
	$fieldLabelsproduct_series["Japanese"]["update_at1"] = "Update At1";
	$fieldToolTipsproduct_series["Japanese"]["update_at1"] = "";
	$placeHoldersproduct_series["Japanese"]["update_at1"] = "";
	$fieldLabelsproduct_series["Japanese"]["deleted"] = "Deleted";
	$fieldToolTipsproduct_series["Japanese"]["deleted"] = "";
	$placeHoldersproduct_series["Japanese"]["deleted"] = "";
	$fieldLabelsproduct_series["Japanese"]["delete_at"] = "Delete At";
	$fieldToolTipsproduct_series["Japanese"]["delete_at"] = "";
	$placeHoldersproduct_series["Japanese"]["delete_at"] = "";
	$fieldLabelsproduct_series["Japanese"]["is_deleted"] = "Is Deleted";
	$fieldToolTipsproduct_series["Japanese"]["is_deleted"] = "";
	$placeHoldersproduct_series["Japanese"]["is_deleted"] = "";
	if (count($fieldToolTipsproduct_series["Japanese"]))
		$tdataproduct_series[".isUseToolTips"] = true;
}


	$tdataproduct_series[".NCSearch"] = true;



$tdataproduct_series[".shortTableName"] = "product_series";
$tdataproduct_series[".nSecOptions"] = 0;

$tdataproduct_series[".mainTableOwnerID"] = "";
$tdataproduct_series[".entityType"] = 7;
$tdataproduct_series[".connId"] = "rest";


$tdataproduct_series[".strOriginalTableName"] = "View";

	



$tdataproduct_series[".showAddInPopup"] = false;

$tdataproduct_series[".showEditInPopup"] = false;

$tdataproduct_series[".showViewInPopup"] = false;

$tdataproduct_series[".listAjax"] = false;
//	temporary
//$tdataproduct_series[".listAjax"] = false;

	$tdataproduct_series[".audit"] = false;

	$tdataproduct_series[".locking"] = false;


$pages = $tdataproduct_series[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataproduct_series[".edit"] = true;
	$tdataproduct_series[".afterEditAction"] = 1;
	$tdataproduct_series[".closePopupAfterEdit"] = 1;
	$tdataproduct_series[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataproduct_series[".add"] = true;
$tdataproduct_series[".afterAddAction"] = 1;
$tdataproduct_series[".closePopupAfterAdd"] = 1;
$tdataproduct_series[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataproduct_series[".list"] = true;
}



$tdataproduct_series[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataproduct_series[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataproduct_series[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataproduct_series[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataproduct_series[".printFriendly"] = true;
}



$tdataproduct_series[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataproduct_series[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataproduct_series[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataproduct_series[".isUseAjaxSuggest"] = false;

$tdataproduct_series[".rowHighlite"] = true;





$tdataproduct_series[".ajaxCodeSnippetAdded"] = false;

$tdataproduct_series[".buttonsAdded"] = false;

$tdataproduct_series[".addPageEvents"] = false;

// use timepicker for search panel
$tdataproduct_series[".isUseTimeForSearch"] = false;


$tdataproduct_series[".badgeColor"] = "cd5c5c";


$tdataproduct_series[".allSearchFields"] = array();
$tdataproduct_series[".filterFields"] = array();
$tdataproduct_series[".requiredSearchFields"] = array();

$tdataproduct_series[".googleLikeFields"] = array();
$tdataproduct_series[".googleLikeFields"][] = "_id";
$tdataproduct_series[".googleLikeFields"][] = "account_id";
$tdataproduct_series[".googleLikeFields"][] = "role1";
$tdataproduct_series[".googleLikeFields"][] = "successful";
$tdataproduct_series[".googleLikeFields"][] = "failed";
$tdataproduct_series[".googleLikeFields"][] = "_index";
$tdataproduct_series[".googleLikeFields"][] = "_type";
$tdataproduct_series[".googleLikeFields"][] = "product_series_id";
$tdataproduct_series[".googleLikeFields"][] = "original_id";
$tdataproduct_series[".googleLikeFields"][] = "name";
$tdataproduct_series[".googleLikeFields"][] = "update_at";
$tdataproduct_series[".googleLikeFields"][] = "created";
$tdataproduct_series[".googleLikeFields"][] = "create_at";
$tdataproduct_series[".googleLikeFields"][] = "updated";
$tdataproduct_series[".googleLikeFields"][] = "update_at1";
$tdataproduct_series[".googleLikeFields"][] = "deleted";
$tdataproduct_series[".googleLikeFields"][] = "delete_at";
$tdataproduct_series[".googleLikeFields"][] = "is_deleted";




$tdataproduct_series[".printerPageOrientation"] = 0;
$tdataproduct_series[".nPrinterPageScale"] = 100;

$tdataproduct_series[".nPrinterSplitRecords"] = 40;

$tdataproduct_series[".geocodingEnabled"] = false;










$tdataproduct_series[".pageSize"] = 20;

$tdataproduct_series[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataproduct_series[".strOrderBy"] = $tstrOrderBy;

$tdataproduct_series[".orderindexes"] = array();


$tdataproduct_series[".sqlHead"] = "";
$tdataproduct_series[".sqlFrom"] = "";
$tdataproduct_series[".sqlWhereExpr"] = "";
$tdataproduct_series[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataproduct_series[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataproduct_series[".arrGroupsPerPage"] = $arrGPP;

$tdataproduct_series[".highlightSearchResults"] = true;

$tableKeysproduct_series = array();
$tdataproduct_series[".Keys"] = $tableKeysproduct_series;


$tdataproduct_series[".hideMobileList"] = array();




//	_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "_id";
	$fdata["GoodName"] = "_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("product_series","_id");
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


	$tdataproduct_series["_id"] = $fdata;
		$tdataproduct_series[".searchableFields"][] = "_id";
//	account_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "account_id";
	$fdata["GoodName"] = "account_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("product_series","account_id");
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


	$tdataproduct_series["account_id"] = $fdata;
		$tdataproduct_series[".searchableFields"][] = "account_id";
//	role1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "role1";
	$fdata["GoodName"] = "role1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("product_series","role1");
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


	$tdataproduct_series["role1"] = $fdata;
		$tdataproduct_series[".searchableFields"][] = "role1";
//	successful
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "successful";
	$fdata["GoodName"] = "successful";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("product_series","successful");
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


	$tdataproduct_series["successful"] = $fdata;
		$tdataproduct_series[".searchableFields"][] = "successful";
//	failed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "failed";
	$fdata["GoodName"] = "failed";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("product_series","failed");
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


	$tdataproduct_series["failed"] = $fdata;
		$tdataproduct_series[".searchableFields"][] = "failed";
//	_index
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "_index";
	$fdata["GoodName"] = "_index";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("product_series","_index");
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


	$tdataproduct_series["_index"] = $fdata;
		$tdataproduct_series[".searchableFields"][] = "_index";
//	_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "_type";
	$fdata["GoodName"] = "_type";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("product_series","_type");
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


	$tdataproduct_series["_type"] = $fdata;
		$tdataproduct_series[".searchableFields"][] = "_type";
//	product_series_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "product_series_id";
	$fdata["GoodName"] = "product_series_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("product_series","product_series_id");
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


	$tdataproduct_series["product_series_id"] = $fdata;
		$tdataproduct_series[".searchableFields"][] = "product_series_id";
//	original_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "original_id";
	$fdata["GoodName"] = "original_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("product_series","original_id");
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


	$tdataproduct_series["original_id"] = $fdata;
		$tdataproduct_series[".searchableFields"][] = "original_id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("product_series","name");
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


	$tdataproduct_series["name"] = $fdata;
		$tdataproduct_series[".searchableFields"][] = "name";
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("product_series","update_at");
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


	$tdataproduct_series["update_at"] = $fdata;
		$tdataproduct_series[".searchableFields"][] = "update_at";
//	created
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "created";
	$fdata["GoodName"] = "created";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("product_series","created");
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


	$tdataproduct_series["created"] = $fdata;
		$tdataproduct_series[".searchableFields"][] = "created";
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("product_series","create_at");
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


	$tdataproduct_series["create_at"] = $fdata;
		$tdataproduct_series[".searchableFields"][] = "create_at";
//	updated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "updated";
	$fdata["GoodName"] = "updated";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("product_series","updated");
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


	$tdataproduct_series["updated"] = $fdata;
		$tdataproduct_series[".searchableFields"][] = "updated";
//	update_at1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "update_at1";
	$fdata["GoodName"] = "update_at1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("product_series","update_at1");
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


	$tdataproduct_series["update_at1"] = $fdata;
		$tdataproduct_series[".searchableFields"][] = "update_at1";
//	deleted
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "deleted";
	$fdata["GoodName"] = "deleted";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("product_series","deleted");
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


	$tdataproduct_series["deleted"] = $fdata;
		$tdataproduct_series[".searchableFields"][] = "deleted";
//	delete_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "delete_at";
	$fdata["GoodName"] = "delete_at";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("product_series","delete_at");
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


	$tdataproduct_series["delete_at"] = $fdata;
		$tdataproduct_series[".searchableFields"][] = "delete_at";
//	is_deleted
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "is_deleted";
	$fdata["GoodName"] = "is_deleted";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("product_series","is_deleted");
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


	$tdataproduct_series["is_deleted"] = $fdata;
		$tdataproduct_series[".searchableFields"][] = "is_deleted";


$tables_data["product_series"]=&$tdataproduct_series;
$field_labels["product_series"] = &$fieldLabelsproduct_series;
$fieldToolTips["product_series"] = &$fieldToolTipsproduct_series;
$placeHolders["product_series"] = &$placeHoldersproduct_series;
$page_titles["product_series"] = &$pageTitlesproduct_series;


changeTextControlsToDate( "product_series" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["product_series"] = array();
//	asset
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="asset";
		$detailsParam["dOriginalTable"] = "View";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "asset";
	$detailsParam["dCaptionTable"] = GetTableCaption("asset");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["product_series"][$dIndex] = $detailsParam;

	
		$detailsTablesData["product_series"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["product_series"][$dIndex]["masterKeys"][]="account_id";

				$detailsTablesData["product_series"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["product_series"][$dIndex]["detailKeys"][]="account_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["product_series"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="View";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="account_product_series";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "account_product_series";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["product_series"][0] = $masterParams;
				$masterTablesData["product_series"][0]["masterKeys"] = array();
	$masterTablesData["product_series"][0]["masterKeys"][]="account_id";
				$masterTablesData["product_series"][0]["detailKeys"] = array();
	$masterTablesData["product_series"][0]["detailKeys"][]="account_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/product_series_ops.php" ) );



	
				;

																		

$tdataproduct_series[".sqlquery"] = $queryData_product_series;



include_once(getabspath("include/product_series_events.php"));
$tdataproduct_series[".hasEvents"] = true;

?>