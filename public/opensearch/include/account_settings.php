<?php
$tdataaccount = array();
$tdataaccount[".searchableFields"] = array();
$tdataaccount[".ShortName"] = "account";
$tdataaccount[".OwnerID"] = "";
$tdataaccount[".OriginalTable"] = "View";


$tdataaccount[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataaccount[".originalPagesByType"] = $tdataaccount[".pagesByType"];
$tdataaccount[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataaccount[".originalPages"] = $tdataaccount[".pages"];
$tdataaccount[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataaccount[".originalDefaultPages"] = $tdataaccount[".defaultPages"];

//	field labels
$fieldLabelsaccount = array();
$fieldToolTipsaccount = array();
$pageTitlesaccount = array();
$placeHoldersaccount = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsaccount["English"] = array();
	$fieldToolTipsaccount["English"] = array();
	$placeHoldersaccount["English"] = array();
	$pageTitlesaccount["English"] = array();
	$fieldLabelsaccount["English"]["_id"] = "Id";
	$fieldToolTipsaccount["English"]["_id"] = "";
	$placeHoldersaccount["English"]["_id"] = "";
	$fieldLabelsaccount["English"]["account_id"] = "Account Id";
	$fieldToolTipsaccount["English"]["account_id"] = "";
	$placeHoldersaccount["English"]["account_id"] = "";
	$fieldLabelsaccount["English"]["role1"] = "Role1";
	$fieldToolTipsaccount["English"]["role1"] = "";
	$placeHoldersaccount["English"]["role1"] = "";
	$fieldLabelsaccount["English"]["successful"] = "Successful";
	$fieldToolTipsaccount["English"]["successful"] = "";
	$placeHoldersaccount["English"]["successful"] = "";
	$fieldLabelsaccount["English"]["failed"] = "Failed";
	$fieldToolTipsaccount["English"]["failed"] = "";
	$placeHoldersaccount["English"]["failed"] = "";
	if (count($fieldToolTipsaccount["English"]))
		$tdataaccount[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsaccount["Japanese"] = array();
	$fieldToolTipsaccount["Japanese"] = array();
	$placeHoldersaccount["Japanese"] = array();
	$pageTitlesaccount["Japanese"] = array();
	$fieldLabelsaccount["Japanese"]["_id"] = "Id";
	$fieldToolTipsaccount["Japanese"]["_id"] = "";
	$placeHoldersaccount["Japanese"]["_id"] = "";
	$fieldLabelsaccount["Japanese"]["account_id"] = "Account Id";
	$fieldToolTipsaccount["Japanese"]["account_id"] = "";
	$placeHoldersaccount["Japanese"]["account_id"] = "";
	$fieldLabelsaccount["Japanese"]["role1"] = "Role1";
	$fieldToolTipsaccount["Japanese"]["role1"] = "";
	$placeHoldersaccount["Japanese"]["role1"] = "";
	$fieldLabelsaccount["Japanese"]["successful"] = "Successful";
	$fieldToolTipsaccount["Japanese"]["successful"] = "";
	$placeHoldersaccount["Japanese"]["successful"] = "";
	$fieldLabelsaccount["Japanese"]["failed"] = "Failed";
	$fieldToolTipsaccount["Japanese"]["failed"] = "";
	$placeHoldersaccount["Japanese"]["failed"] = "";
	if (count($fieldToolTipsaccount["Japanese"]))
		$tdataaccount[".isUseToolTips"] = true;
}


	$tdataaccount[".NCSearch"] = true;



$tdataaccount[".shortTableName"] = "account";
$tdataaccount[".nSecOptions"] = 0;

$tdataaccount[".mainTableOwnerID"] = "";
$tdataaccount[".entityType"] = 7;
$tdataaccount[".connId"] = "rest";


$tdataaccount[".strOriginalTableName"] = "View";

	



$tdataaccount[".showAddInPopup"] = false;

$tdataaccount[".showEditInPopup"] = false;

$tdataaccount[".showViewInPopup"] = false;

$tdataaccount[".listAjax"] = false;
//	temporary
//$tdataaccount[".listAjax"] = false;

	$tdataaccount[".audit"] = false;

	$tdataaccount[".locking"] = false;


$pages = $tdataaccount[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataaccount[".edit"] = true;
	$tdataaccount[".afterEditAction"] = 1;
	$tdataaccount[".closePopupAfterEdit"] = 1;
	$tdataaccount[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataaccount[".add"] = true;
$tdataaccount[".afterAddAction"] = 1;
$tdataaccount[".closePopupAfterAdd"] = 1;
$tdataaccount[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataaccount[".list"] = true;
}



$tdataaccount[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataaccount[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataaccount[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataaccount[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataaccount[".printFriendly"] = true;
}



$tdataaccount[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataaccount[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataaccount[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataaccount[".isUseAjaxSuggest"] = false;

$tdataaccount[".rowHighlite"] = true;





$tdataaccount[".ajaxCodeSnippetAdded"] = false;

$tdataaccount[".buttonsAdded"] = false;

$tdataaccount[".addPageEvents"] = false;

// use timepicker for search panel
$tdataaccount[".isUseTimeForSearch"] = false;


$tdataaccount[".badgeColor"] = "DC143C";


$tdataaccount[".allSearchFields"] = array();
$tdataaccount[".filterFields"] = array();
$tdataaccount[".requiredSearchFields"] = array();

$tdataaccount[".googleLikeFields"] = array();
$tdataaccount[".googleLikeFields"][] = "_id";
$tdataaccount[".googleLikeFields"][] = "account_id";
$tdataaccount[".googleLikeFields"][] = "role1";
$tdataaccount[".googleLikeFields"][] = "successful";
$tdataaccount[".googleLikeFields"][] = "failed";




$tdataaccount[".printerPageOrientation"] = 0;
$tdataaccount[".nPrinterPageScale"] = 100;

$tdataaccount[".nPrinterSplitRecords"] = 40;

$tdataaccount[".geocodingEnabled"] = false;










$tdataaccount[".pageSize"] = 20;

$tdataaccount[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataaccount[".strOrderBy"] = $tstrOrderBy;

$tdataaccount[".orderindexes"] = array();


$tdataaccount[".sqlHead"] = "";
$tdataaccount[".sqlFrom"] = "";
$tdataaccount[".sqlWhereExpr"] = "";
$tdataaccount[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataaccount[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataaccount[".arrGroupsPerPage"] = $arrGPP;

$tdataaccount[".highlightSearchResults"] = true;

$tableKeysaccount = array();
$tableKeysaccount[] = "_id";
$tdataaccount[".Keys"] = $tableKeysaccount;


$tdataaccount[".hideMobileList"] = array();




//	_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "_id";
	$fdata["GoodName"] = "_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("account","_id");
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


	$tdataaccount["_id"] = $fdata;
		$tdataaccount[".searchableFields"][] = "_id";
//	account_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "account_id";
	$fdata["GoodName"] = "account_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("account","account_id");
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


	$tdataaccount["account_id"] = $fdata;
		$tdataaccount[".searchableFields"][] = "account_id";
//	role1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "role1";
	$fdata["GoodName"] = "role1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("account","role1");
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


	$tdataaccount["role1"] = $fdata;
		$tdataaccount[".searchableFields"][] = "role1";
//	successful
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "successful";
	$fdata["GoodName"] = "successful";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("account","successful");
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


	$tdataaccount["successful"] = $fdata;
		$tdataaccount[".searchableFields"][] = "successful";
//	failed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "failed";
	$fdata["GoodName"] = "failed";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("account","failed");
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


	$tdataaccount["failed"] = $fdata;
		$tdataaccount[".searchableFields"][] = "failed";


$tables_data["account"]=&$tdataaccount;
$field_labels["account"] = &$fieldLabelsaccount;
$fieldToolTips["account"] = &$fieldToolTipsaccount;
$placeHolders["account"] = &$placeHoldersaccount;
$page_titles["account"] = &$pageTitlesaccount;


changeTextControlsToDate( "account" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["account"] = array();
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


		
	$detailsTablesData["account"][$dIndex] = $detailsParam;

	
		$detailsTablesData["account"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["account"][$dIndex]["masterKeys"][]="account_id";

				$detailsTablesData["account"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["account"][$dIndex]["detailKeys"][]="account_id";
//	account_product_series
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="account_product_series";
		$detailsParam["dOriginalTable"] = "View";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "account_product_series";
	$detailsParam["dCaptionTable"] = GetTableCaption("account_product_series");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["account"][$dIndex] = $detailsParam;

	
		$detailsTablesData["account"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["account"][$dIndex]["masterKeys"][]="account_id";

				$detailsTablesData["account"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["account"][$dIndex]["detailKeys"][]="account_id";
//	invitation
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="invitation";
		$detailsParam["dOriginalTable"] = "View";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "invitation";
	$detailsParam["dCaptionTable"] = GetTableCaption("invitation");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["account"][$dIndex] = $detailsParam;

	
		$detailsTablesData["account"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["account"][$dIndex]["masterKeys"][]="account_id";

				$detailsTablesData["account"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["account"][$dIndex]["detailKeys"][]="account_id";
//	contact
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="contact";
		$detailsParam["dOriginalTable"] = "View";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "contact";
	$detailsParam["dCaptionTable"] = GetTableCaption("contact");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["account"][$dIndex] = $detailsParam;

	
		$detailsTablesData["account"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["account"][$dIndex]["masterKeys"][]="account_id";

				$detailsTablesData["account"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["account"][$dIndex]["detailKeys"][]="account_id";
//	group
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="group";
		$detailsParam["dOriginalTable"] = "View";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "group";
	$detailsParam["dCaptionTable"] = GetTableCaption("group");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["account"][$dIndex] = $detailsParam;

	
		$detailsTablesData["account"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["account"][$dIndex]["masterKeys"][]="account_id";

				$detailsTablesData["account"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["account"][$dIndex]["detailKeys"][]="account_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["account"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/account_ops.php" ) );



	
				;

					

$tdataaccount[".sqlquery"] = $queryData_account;



include_once(getabspath("include/account_events.php"));
$tdataaccount[".hasEvents"] = true;

?>