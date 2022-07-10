<?php
$tdatajournal = array();
$tdatajournal[".searchableFields"] = array();
$tdatajournal[".ShortName"] = "journal";
$tdatajournal[".OwnerID"] = "";
$tdatajournal[".OriginalTable"] = "View";


$tdatajournal[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatajournal[".originalPagesByType"] = $tdatajournal[".pagesByType"];
$tdatajournal[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatajournal[".originalPages"] = $tdatajournal[".pages"];
$tdatajournal[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatajournal[".originalDefaultPages"] = $tdatajournal[".defaultPages"];

//	field labels
$fieldLabelsjournal = array();
$fieldToolTipsjournal = array();
$pageTitlesjournal = array();
$placeHoldersjournal = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsjournal["English"] = array();
	$fieldToolTipsjournal["English"] = array();
	$placeHoldersjournal["English"] = array();
	$pageTitlesjournal["English"] = array();
	$fieldLabelsjournal["English"]["_id"] = "Id";
	$fieldToolTipsjournal["English"]["_id"] = "";
	$placeHoldersjournal["English"]["_id"] = "";
	$fieldLabelsjournal["English"]["account_id"] = "Account Id";
	$fieldToolTipsjournal["English"]["account_id"] = "";
	$placeHoldersjournal["English"]["account_id"] = "";
	$fieldLabelsjournal["English"]["role1"] = "Role1";
	$fieldToolTipsjournal["English"]["role1"] = "";
	$placeHoldersjournal["English"]["role1"] = "";
	$fieldLabelsjournal["English"]["successful"] = "Successful";
	$fieldToolTipsjournal["English"]["successful"] = "";
	$placeHoldersjournal["English"]["successful"] = "";
	$fieldLabelsjournal["English"]["failed"] = "Failed";
	$fieldToolTipsjournal["English"]["failed"] = "";
	$placeHoldersjournal["English"]["failed"] = "";
	$fieldLabelsjournal["English"]["_index"] = "Index";
	$fieldToolTipsjournal["English"]["_index"] = "";
	$placeHoldersjournal["English"]["_index"] = "";
	$fieldLabelsjournal["English"]["_type"] = "Type";
	$fieldToolTipsjournal["English"]["_type"] = "";
	$placeHoldersjournal["English"]["_type"] = "";
	$fieldLabelsjournal["English"]["product_series_id"] = "Product Series Id";
	$fieldToolTipsjournal["English"]["product_series_id"] = "";
	$placeHoldersjournal["English"]["product_series_id"] = "";
	$fieldLabelsjournal["English"]["original_id"] = "Original Id";
	$fieldToolTipsjournal["English"]["original_id"] = "";
	$placeHoldersjournal["English"]["original_id"] = "";
	$fieldLabelsjournal["English"]["name"] = "Name";
	$fieldToolTipsjournal["English"]["name"] = "";
	$placeHoldersjournal["English"]["name"] = "";
	$fieldLabelsjournal["English"]["update_at"] = "Update At";
	$fieldToolTipsjournal["English"]["update_at"] = "";
	$placeHoldersjournal["English"]["update_at"] = "";
	$fieldLabelsjournal["English"]["created"] = "Created";
	$fieldToolTipsjournal["English"]["created"] = "";
	$placeHoldersjournal["English"]["created"] = "";
	$fieldLabelsjournal["English"]["create_at"] = "Create At";
	$fieldToolTipsjournal["English"]["create_at"] = "";
	$placeHoldersjournal["English"]["create_at"] = "";
	$fieldLabelsjournal["English"]["updated"] = "Updated";
	$fieldToolTipsjournal["English"]["updated"] = "";
	$placeHoldersjournal["English"]["updated"] = "";
	$fieldLabelsjournal["English"]["update_at1"] = "Update At1";
	$fieldToolTipsjournal["English"]["update_at1"] = "";
	$placeHoldersjournal["English"]["update_at1"] = "";
	$fieldLabelsjournal["English"]["deleted"] = "Deleted";
	$fieldToolTipsjournal["English"]["deleted"] = "";
	$placeHoldersjournal["English"]["deleted"] = "";
	$fieldLabelsjournal["English"]["delete_at"] = "Delete At";
	$fieldToolTipsjournal["English"]["delete_at"] = "";
	$placeHoldersjournal["English"]["delete_at"] = "";
	$fieldLabelsjournal["English"]["is_deleted"] = "Is Deleted";
	$fieldToolTipsjournal["English"]["is_deleted"] = "";
	$placeHoldersjournal["English"]["is_deleted"] = "";
	if (count($fieldToolTipsjournal["English"]))
		$tdatajournal[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsjournal["Japanese"] = array();
	$fieldToolTipsjournal["Japanese"] = array();
	$placeHoldersjournal["Japanese"] = array();
	$pageTitlesjournal["Japanese"] = array();
	$fieldLabelsjournal["Japanese"]["_id"] = "Id";
	$fieldToolTipsjournal["Japanese"]["_id"] = "";
	$placeHoldersjournal["Japanese"]["_id"] = "";
	$fieldLabelsjournal["Japanese"]["account_id"] = "Account Id";
	$fieldToolTipsjournal["Japanese"]["account_id"] = "";
	$placeHoldersjournal["Japanese"]["account_id"] = "";
	$fieldLabelsjournal["Japanese"]["role1"] = "Role1";
	$fieldToolTipsjournal["Japanese"]["role1"] = "";
	$placeHoldersjournal["Japanese"]["role1"] = "";
	$fieldLabelsjournal["Japanese"]["successful"] = "Successful";
	$fieldToolTipsjournal["Japanese"]["successful"] = "";
	$placeHoldersjournal["Japanese"]["successful"] = "";
	$fieldLabelsjournal["Japanese"]["failed"] = "Failed";
	$fieldToolTipsjournal["Japanese"]["failed"] = "";
	$placeHoldersjournal["Japanese"]["failed"] = "";
	$fieldLabelsjournal["Japanese"]["_index"] = "Index";
	$fieldToolTipsjournal["Japanese"]["_index"] = "";
	$placeHoldersjournal["Japanese"]["_index"] = "";
	$fieldLabelsjournal["Japanese"]["_type"] = "Type";
	$fieldToolTipsjournal["Japanese"]["_type"] = "";
	$placeHoldersjournal["Japanese"]["_type"] = "";
	$fieldLabelsjournal["Japanese"]["product_series_id"] = "Product Series Id";
	$fieldToolTipsjournal["Japanese"]["product_series_id"] = "";
	$placeHoldersjournal["Japanese"]["product_series_id"] = "";
	$fieldLabelsjournal["Japanese"]["original_id"] = "Original Id";
	$fieldToolTipsjournal["Japanese"]["original_id"] = "";
	$placeHoldersjournal["Japanese"]["original_id"] = "";
	$fieldLabelsjournal["Japanese"]["name"] = "Name";
	$fieldToolTipsjournal["Japanese"]["name"] = "";
	$placeHoldersjournal["Japanese"]["name"] = "";
	$fieldLabelsjournal["Japanese"]["update_at"] = "Update At";
	$fieldToolTipsjournal["Japanese"]["update_at"] = "";
	$placeHoldersjournal["Japanese"]["update_at"] = "";
	$fieldLabelsjournal["Japanese"]["created"] = "Created";
	$fieldToolTipsjournal["Japanese"]["created"] = "";
	$placeHoldersjournal["Japanese"]["created"] = "";
	$fieldLabelsjournal["Japanese"]["create_at"] = "Create At";
	$fieldToolTipsjournal["Japanese"]["create_at"] = "";
	$placeHoldersjournal["Japanese"]["create_at"] = "";
	$fieldLabelsjournal["Japanese"]["updated"] = "Updated";
	$fieldToolTipsjournal["Japanese"]["updated"] = "";
	$placeHoldersjournal["Japanese"]["updated"] = "";
	$fieldLabelsjournal["Japanese"]["update_at1"] = "Update At1";
	$fieldToolTipsjournal["Japanese"]["update_at1"] = "";
	$placeHoldersjournal["Japanese"]["update_at1"] = "";
	$fieldLabelsjournal["Japanese"]["deleted"] = "Deleted";
	$fieldToolTipsjournal["Japanese"]["deleted"] = "";
	$placeHoldersjournal["Japanese"]["deleted"] = "";
	$fieldLabelsjournal["Japanese"]["delete_at"] = "Delete At";
	$fieldToolTipsjournal["Japanese"]["delete_at"] = "";
	$placeHoldersjournal["Japanese"]["delete_at"] = "";
	$fieldLabelsjournal["Japanese"]["is_deleted"] = "Is Deleted";
	$fieldToolTipsjournal["Japanese"]["is_deleted"] = "";
	$placeHoldersjournal["Japanese"]["is_deleted"] = "";
	if (count($fieldToolTipsjournal["Japanese"]))
		$tdatajournal[".isUseToolTips"] = true;
}


	$tdatajournal[".NCSearch"] = true;



$tdatajournal[".shortTableName"] = "journal";
$tdatajournal[".nSecOptions"] = 0;

$tdatajournal[".mainTableOwnerID"] = "";
$tdatajournal[".entityType"] = 7;
$tdatajournal[".connId"] = "rest";


$tdatajournal[".strOriginalTableName"] = "View";

	



$tdatajournal[".showAddInPopup"] = false;

$tdatajournal[".showEditInPopup"] = false;

$tdatajournal[".showViewInPopup"] = false;

$tdatajournal[".listAjax"] = false;
//	temporary
//$tdatajournal[".listAjax"] = false;

	$tdatajournal[".audit"] = false;

	$tdatajournal[".locking"] = false;


$pages = $tdatajournal[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatajournal[".edit"] = true;
	$tdatajournal[".afterEditAction"] = 1;
	$tdatajournal[".closePopupAfterEdit"] = 1;
	$tdatajournal[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatajournal[".add"] = true;
$tdatajournal[".afterAddAction"] = 1;
$tdatajournal[".closePopupAfterAdd"] = 1;
$tdatajournal[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatajournal[".list"] = true;
}



$tdatajournal[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatajournal[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatajournal[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatajournal[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatajournal[".printFriendly"] = true;
}



$tdatajournal[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatajournal[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatajournal[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatajournal[".isUseAjaxSuggest"] = false;

$tdatajournal[".rowHighlite"] = true;





$tdatajournal[".ajaxCodeSnippetAdded"] = false;

$tdatajournal[".buttonsAdded"] = false;

$tdatajournal[".addPageEvents"] = false;

// use timepicker for search panel
$tdatajournal[".isUseTimeForSearch"] = false;


$tdatajournal[".badgeColor"] = "1E90FF";


$tdatajournal[".allSearchFields"] = array();
$tdatajournal[".filterFields"] = array();
$tdatajournal[".requiredSearchFields"] = array();

$tdatajournal[".googleLikeFields"] = array();
$tdatajournal[".googleLikeFields"][] = "_id";
$tdatajournal[".googleLikeFields"][] = "account_id";
$tdatajournal[".googleLikeFields"][] = "role1";
$tdatajournal[".googleLikeFields"][] = "successful";
$tdatajournal[".googleLikeFields"][] = "failed";
$tdatajournal[".googleLikeFields"][] = "_index";
$tdatajournal[".googleLikeFields"][] = "_type";
$tdatajournal[".googleLikeFields"][] = "product_series_id";
$tdatajournal[".googleLikeFields"][] = "original_id";
$tdatajournal[".googleLikeFields"][] = "name";
$tdatajournal[".googleLikeFields"][] = "update_at";
$tdatajournal[".googleLikeFields"][] = "created";
$tdatajournal[".googleLikeFields"][] = "create_at";
$tdatajournal[".googleLikeFields"][] = "updated";
$tdatajournal[".googleLikeFields"][] = "update_at1";
$tdatajournal[".googleLikeFields"][] = "deleted";
$tdatajournal[".googleLikeFields"][] = "delete_at";
$tdatajournal[".googleLikeFields"][] = "is_deleted";




$tdatajournal[".printerPageOrientation"] = 0;
$tdatajournal[".nPrinterPageScale"] = 100;

$tdatajournal[".nPrinterSplitRecords"] = 40;

$tdatajournal[".geocodingEnabled"] = false;










$tdatajournal[".pageSize"] = 20;

$tdatajournal[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatajournal[".strOrderBy"] = $tstrOrderBy;

$tdatajournal[".orderindexes"] = array();


$tdatajournal[".sqlHead"] = "";
$tdatajournal[".sqlFrom"] = "";
$tdatajournal[".sqlWhereExpr"] = "";
$tdatajournal[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatajournal[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatajournal[".arrGroupsPerPage"] = $arrGPP;

$tdatajournal[".highlightSearchResults"] = true;

$tableKeysjournal = array();
$tdatajournal[".Keys"] = $tableKeysjournal;


$tdatajournal[".hideMobileList"] = array();




//	_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "_id";
	$fdata["GoodName"] = "_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("journal","_id");
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


	$tdatajournal["_id"] = $fdata;
		$tdatajournal[".searchableFields"][] = "_id";
//	account_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "account_id";
	$fdata["GoodName"] = "account_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("journal","account_id");
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


	$tdatajournal["account_id"] = $fdata;
		$tdatajournal[".searchableFields"][] = "account_id";
//	role1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "role1";
	$fdata["GoodName"] = "role1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("journal","role1");
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


	$tdatajournal["role1"] = $fdata;
		$tdatajournal[".searchableFields"][] = "role1";
//	successful
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "successful";
	$fdata["GoodName"] = "successful";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("journal","successful");
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


	$tdatajournal["successful"] = $fdata;
		$tdatajournal[".searchableFields"][] = "successful";
//	failed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "failed";
	$fdata["GoodName"] = "failed";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("journal","failed");
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


	$tdatajournal["failed"] = $fdata;
		$tdatajournal[".searchableFields"][] = "failed";
//	_index
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "_index";
	$fdata["GoodName"] = "_index";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("journal","_index");
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


	$tdatajournal["_index"] = $fdata;
		$tdatajournal[".searchableFields"][] = "_index";
//	_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "_type";
	$fdata["GoodName"] = "_type";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("journal","_type");
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


	$tdatajournal["_type"] = $fdata;
		$tdatajournal[".searchableFields"][] = "_type";
//	product_series_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "product_series_id";
	$fdata["GoodName"] = "product_series_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("journal","product_series_id");
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


	$tdatajournal["product_series_id"] = $fdata;
		$tdatajournal[".searchableFields"][] = "product_series_id";
//	original_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "original_id";
	$fdata["GoodName"] = "original_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("journal","original_id");
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


	$tdatajournal["original_id"] = $fdata;
		$tdatajournal[".searchableFields"][] = "original_id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("journal","name");
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


	$tdatajournal["name"] = $fdata;
		$tdatajournal[".searchableFields"][] = "name";
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("journal","update_at");
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


	$tdatajournal["update_at"] = $fdata;
		$tdatajournal[".searchableFields"][] = "update_at";
//	created
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "created";
	$fdata["GoodName"] = "created";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("journal","created");
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


	$tdatajournal["created"] = $fdata;
		$tdatajournal[".searchableFields"][] = "created";
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("journal","create_at");
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


	$tdatajournal["create_at"] = $fdata;
		$tdatajournal[".searchableFields"][] = "create_at";
//	updated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "updated";
	$fdata["GoodName"] = "updated";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("journal","updated");
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


	$tdatajournal["updated"] = $fdata;
		$tdatajournal[".searchableFields"][] = "updated";
//	update_at1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "update_at1";
	$fdata["GoodName"] = "update_at1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("journal","update_at1");
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


	$tdatajournal["update_at1"] = $fdata;
		$tdatajournal[".searchableFields"][] = "update_at1";
//	deleted
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "deleted";
	$fdata["GoodName"] = "deleted";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("journal","deleted");
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


	$tdatajournal["deleted"] = $fdata;
		$tdatajournal[".searchableFields"][] = "deleted";
//	delete_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "delete_at";
	$fdata["GoodName"] = "delete_at";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("journal","delete_at");
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


	$tdatajournal["delete_at"] = $fdata;
		$tdatajournal[".searchableFields"][] = "delete_at";
//	is_deleted
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "is_deleted";
	$fdata["GoodName"] = "is_deleted";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("journal","is_deleted");
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


	$tdatajournal["is_deleted"] = $fdata;
		$tdatajournal[".searchableFields"][] = "is_deleted";


$tables_data["journal"]=&$tdatajournal;
$field_labels["journal"] = &$fieldLabelsjournal;
$fieldToolTips["journal"] = &$fieldToolTipsjournal;
$placeHolders["journal"] = &$placeHoldersjournal;
$page_titles["journal"] = &$pageTitlesjournal;


changeTextControlsToDate( "journal" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["journal"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["journal"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/journal_ops.php" ) );



	
				;

																		

$tdatajournal[".sqlquery"] = $queryData_journal;



include_once(getabspath("include/journal_events.php"));
$tdatajournal[".hasEvents"] = true;

?>