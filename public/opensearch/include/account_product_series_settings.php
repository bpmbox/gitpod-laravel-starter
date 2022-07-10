<?php
$tdataaccount_product_series = array();
$tdataaccount_product_series[".searchableFields"] = array();
$tdataaccount_product_series[".ShortName"] = "account_product_series";
$tdataaccount_product_series[".OwnerID"] = "";
$tdataaccount_product_series[".OriginalTable"] = "View";


$tdataaccount_product_series[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataaccount_product_series[".originalPagesByType"] = $tdataaccount_product_series[".pagesByType"];
$tdataaccount_product_series[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataaccount_product_series[".originalPages"] = $tdataaccount_product_series[".pages"];
$tdataaccount_product_series[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataaccount_product_series[".originalDefaultPages"] = $tdataaccount_product_series[".defaultPages"];

//	field labels
$fieldLabelsaccount_product_series = array();
$fieldToolTipsaccount_product_series = array();
$pageTitlesaccount_product_series = array();
$placeHoldersaccount_product_series = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsaccount_product_series["English"] = array();
	$fieldToolTipsaccount_product_series["English"] = array();
	$placeHoldersaccount_product_series["English"] = array();
	$pageTitlesaccount_product_series["English"] = array();
	$fieldLabelsaccount_product_series["English"]["_id"] = "Id";
	$fieldToolTipsaccount_product_series["English"]["_id"] = "";
	$placeHoldersaccount_product_series["English"]["_id"] = "";
	$fieldLabelsaccount_product_series["English"]["account_id"] = "Account Id";
	$fieldToolTipsaccount_product_series["English"]["account_id"] = "";
	$placeHoldersaccount_product_series["English"]["account_id"] = "";
	$fieldLabelsaccount_product_series["English"]["role1"] = "Role1";
	$fieldToolTipsaccount_product_series["English"]["role1"] = "";
	$placeHoldersaccount_product_series["English"]["role1"] = "";
	$fieldLabelsaccount_product_series["English"]["successful"] = "Successful";
	$fieldToolTipsaccount_product_series["English"]["successful"] = "";
	$placeHoldersaccount_product_series["English"]["successful"] = "";
	$fieldLabelsaccount_product_series["English"]["failed"] = "Failed";
	$fieldToolTipsaccount_product_series["English"]["failed"] = "";
	$placeHoldersaccount_product_series["English"]["failed"] = "";
	if (count($fieldToolTipsaccount_product_series["English"]))
		$tdataaccount_product_series[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsaccount_product_series["Japanese"] = array();
	$fieldToolTipsaccount_product_series["Japanese"] = array();
	$placeHoldersaccount_product_series["Japanese"] = array();
	$pageTitlesaccount_product_series["Japanese"] = array();
	$fieldLabelsaccount_product_series["Japanese"]["_id"] = "Id";
	$fieldToolTipsaccount_product_series["Japanese"]["_id"] = "";
	$placeHoldersaccount_product_series["Japanese"]["_id"] = "";
	$fieldLabelsaccount_product_series["Japanese"]["account_id"] = "Account Id";
	$fieldToolTipsaccount_product_series["Japanese"]["account_id"] = "";
	$placeHoldersaccount_product_series["Japanese"]["account_id"] = "";
	$fieldLabelsaccount_product_series["Japanese"]["role1"] = "Role1";
	$fieldToolTipsaccount_product_series["Japanese"]["role1"] = "";
	$placeHoldersaccount_product_series["Japanese"]["role1"] = "";
	$fieldLabelsaccount_product_series["Japanese"]["successful"] = "Successful";
	$fieldToolTipsaccount_product_series["Japanese"]["successful"] = "";
	$placeHoldersaccount_product_series["Japanese"]["successful"] = "";
	$fieldLabelsaccount_product_series["Japanese"]["failed"] = "Failed";
	$fieldToolTipsaccount_product_series["Japanese"]["failed"] = "";
	$placeHoldersaccount_product_series["Japanese"]["failed"] = "";
	if (count($fieldToolTipsaccount_product_series["Japanese"]))
		$tdataaccount_product_series[".isUseToolTips"] = true;
}


	$tdataaccount_product_series[".NCSearch"] = true;



$tdataaccount_product_series[".shortTableName"] = "account_product_series";
$tdataaccount_product_series[".nSecOptions"] = 0;

$tdataaccount_product_series[".mainTableOwnerID"] = "";
$tdataaccount_product_series[".entityType"] = 7;
$tdataaccount_product_series[".connId"] = "rest";


$tdataaccount_product_series[".strOriginalTableName"] = "View";

	



$tdataaccount_product_series[".showAddInPopup"] = false;

$tdataaccount_product_series[".showEditInPopup"] = false;

$tdataaccount_product_series[".showViewInPopup"] = false;

$tdataaccount_product_series[".listAjax"] = false;
//	temporary
//$tdataaccount_product_series[".listAjax"] = false;

	$tdataaccount_product_series[".audit"] = false;

	$tdataaccount_product_series[".locking"] = false;


$pages = $tdataaccount_product_series[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataaccount_product_series[".edit"] = true;
	$tdataaccount_product_series[".afterEditAction"] = 1;
	$tdataaccount_product_series[".closePopupAfterEdit"] = 1;
	$tdataaccount_product_series[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataaccount_product_series[".add"] = true;
$tdataaccount_product_series[".afterAddAction"] = 1;
$tdataaccount_product_series[".closePopupAfterAdd"] = 1;
$tdataaccount_product_series[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataaccount_product_series[".list"] = true;
}



$tdataaccount_product_series[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataaccount_product_series[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataaccount_product_series[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataaccount_product_series[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataaccount_product_series[".printFriendly"] = true;
}



$tdataaccount_product_series[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataaccount_product_series[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataaccount_product_series[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataaccount_product_series[".isUseAjaxSuggest"] = false;

$tdataaccount_product_series[".rowHighlite"] = true;





$tdataaccount_product_series[".ajaxCodeSnippetAdded"] = false;

$tdataaccount_product_series[".buttonsAdded"] = false;

$tdataaccount_product_series[".addPageEvents"] = false;

// use timepicker for search panel
$tdataaccount_product_series[".isUseTimeForSearch"] = false;


$tdataaccount_product_series[".badgeColor"] = "008b8b";


$tdataaccount_product_series[".allSearchFields"] = array();
$tdataaccount_product_series[".filterFields"] = array();
$tdataaccount_product_series[".requiredSearchFields"] = array();

$tdataaccount_product_series[".googleLikeFields"] = array();
$tdataaccount_product_series[".googleLikeFields"][] = "_id";
$tdataaccount_product_series[".googleLikeFields"][] = "account_id";
$tdataaccount_product_series[".googleLikeFields"][] = "role1";
$tdataaccount_product_series[".googleLikeFields"][] = "successful";
$tdataaccount_product_series[".googleLikeFields"][] = "failed";




$tdataaccount_product_series[".printerPageOrientation"] = 0;
$tdataaccount_product_series[".nPrinterPageScale"] = 100;

$tdataaccount_product_series[".nPrinterSplitRecords"] = 40;

$tdataaccount_product_series[".geocodingEnabled"] = false;










$tdataaccount_product_series[".pageSize"] = 20;

$tdataaccount_product_series[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataaccount_product_series[".strOrderBy"] = $tstrOrderBy;

$tdataaccount_product_series[".orderindexes"] = array();


$tdataaccount_product_series[".sqlHead"] = "";
$tdataaccount_product_series[".sqlFrom"] = "";
$tdataaccount_product_series[".sqlWhereExpr"] = "";
$tdataaccount_product_series[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataaccount_product_series[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataaccount_product_series[".arrGroupsPerPage"] = $arrGPP;

$tdataaccount_product_series[".highlightSearchResults"] = true;

$tableKeysaccount_product_series = array();
$tdataaccount_product_series[".Keys"] = $tableKeysaccount_product_series;


$tdataaccount_product_series[".hideMobileList"] = array();




//	_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "_id";
	$fdata["GoodName"] = "_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("account_product_series","_id");
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


	$tdataaccount_product_series["_id"] = $fdata;
		$tdataaccount_product_series[".searchableFields"][] = "_id";
//	account_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "account_id";
	$fdata["GoodName"] = "account_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("account_product_series","account_id");
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


	$tdataaccount_product_series["account_id"] = $fdata;
		$tdataaccount_product_series[".searchableFields"][] = "account_id";
//	role1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "role1";
	$fdata["GoodName"] = "role1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("account_product_series","role1");
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


	$tdataaccount_product_series["role1"] = $fdata;
		$tdataaccount_product_series[".searchableFields"][] = "role1";
//	successful
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "successful";
	$fdata["GoodName"] = "successful";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("account_product_series","successful");
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


	$tdataaccount_product_series["successful"] = $fdata;
		$tdataaccount_product_series[".searchableFields"][] = "successful";
//	failed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "failed";
	$fdata["GoodName"] = "failed";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("account_product_series","failed");
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


	$tdataaccount_product_series["failed"] = $fdata;
		$tdataaccount_product_series[".searchableFields"][] = "failed";


$tables_data["account_product_series"]=&$tdataaccount_product_series;
$field_labels["account_product_series"] = &$fieldLabelsaccount_product_series;
$fieldToolTips["account_product_series"] = &$fieldToolTipsaccount_product_series;
$placeHolders["account_product_series"] = &$placeHoldersaccount_product_series;
$page_titles["account_product_series"] = &$pageTitlesaccount_product_series;


changeTextControlsToDate( "account_product_series" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["account_product_series"] = array();
//	product_series
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="product_series";
		$detailsParam["dOriginalTable"] = "View";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "product_series";
	$detailsParam["dCaptionTable"] = GetTableCaption("product_series");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["account_product_series"][$dIndex] = $detailsParam;

	
		$detailsTablesData["account_product_series"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["account_product_series"][$dIndex]["masterKeys"][]="account_id";

				$detailsTablesData["account_product_series"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["account_product_series"][$dIndex]["detailKeys"][]="account_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["account_product_series"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="View";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="account";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "account";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["account_product_series"][0] = $masterParams;
				$masterTablesData["account_product_series"][0]["masterKeys"] = array();
	$masterTablesData["account_product_series"][0]["masterKeys"][]="account_id";
				$masterTablesData["account_product_series"][0]["detailKeys"] = array();
	$masterTablesData["account_product_series"][0]["detailKeys"][]="account_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/account_product_series_ops.php" ) );



	
				;

					

$tdataaccount_product_series[".sqlquery"] = $queryData_account_product_series;



include_once(getabspath("include/account_product_series_events.php"));
$tdataaccount_product_series[".hasEvents"] = true;

?>