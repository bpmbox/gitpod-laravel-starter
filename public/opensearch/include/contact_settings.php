<?php
$tdatacontact = array();
$tdatacontact[".searchableFields"] = array();
$tdatacontact[".ShortName"] = "contact";
$tdatacontact[".OwnerID"] = "";
$tdatacontact[".OriginalTable"] = "View";


$tdatacontact[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatacontact[".originalPagesByType"] = $tdatacontact[".pagesByType"];
$tdatacontact[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatacontact[".originalPages"] = $tdatacontact[".pages"];
$tdatacontact[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatacontact[".originalDefaultPages"] = $tdatacontact[".defaultPages"];

//	field labels
$fieldLabelscontact = array();
$fieldToolTipscontact = array();
$pageTitlescontact = array();
$placeHolderscontact = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscontact["English"] = array();
	$fieldToolTipscontact["English"] = array();
	$placeHolderscontact["English"] = array();
	$pageTitlescontact["English"] = array();
	$fieldLabelscontact["English"]["_id"] = "Id";
	$fieldToolTipscontact["English"]["_id"] = "";
	$placeHolderscontact["English"]["_id"] = "";
	$fieldLabelscontact["English"]["account_id"] = "Account Id";
	$fieldToolTipscontact["English"]["account_id"] = "";
	$placeHolderscontact["English"]["account_id"] = "";
	$fieldLabelscontact["English"]["role1"] = "Role1";
	$fieldToolTipscontact["English"]["role1"] = "";
	$placeHolderscontact["English"]["role1"] = "";
	$fieldLabelscontact["English"]["successful"] = "Successful";
	$fieldToolTipscontact["English"]["successful"] = "";
	$placeHolderscontact["English"]["successful"] = "";
	$fieldLabelscontact["English"]["failed"] = "Failed";
	$fieldToolTipscontact["English"]["failed"] = "";
	$placeHolderscontact["English"]["failed"] = "";
	if (count($fieldToolTipscontact["English"]))
		$tdatacontact[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelscontact["Japanese"] = array();
	$fieldToolTipscontact["Japanese"] = array();
	$placeHolderscontact["Japanese"] = array();
	$pageTitlescontact["Japanese"] = array();
	$fieldLabelscontact["Japanese"]["_id"] = "Id";
	$fieldToolTipscontact["Japanese"]["_id"] = "";
	$placeHolderscontact["Japanese"]["_id"] = "";
	$fieldLabelscontact["Japanese"]["account_id"] = "Account Id";
	$fieldToolTipscontact["Japanese"]["account_id"] = "";
	$placeHolderscontact["Japanese"]["account_id"] = "";
	$fieldLabelscontact["Japanese"]["role1"] = "Role1";
	$fieldToolTipscontact["Japanese"]["role1"] = "";
	$placeHolderscontact["Japanese"]["role1"] = "";
	$fieldLabelscontact["Japanese"]["successful"] = "Successful";
	$fieldToolTipscontact["Japanese"]["successful"] = "";
	$placeHolderscontact["Japanese"]["successful"] = "";
	$fieldLabelscontact["Japanese"]["failed"] = "Failed";
	$fieldToolTipscontact["Japanese"]["failed"] = "";
	$placeHolderscontact["Japanese"]["failed"] = "";
	if (count($fieldToolTipscontact["Japanese"]))
		$tdatacontact[".isUseToolTips"] = true;
}


	$tdatacontact[".NCSearch"] = true;



$tdatacontact[".shortTableName"] = "contact";
$tdatacontact[".nSecOptions"] = 0;

$tdatacontact[".mainTableOwnerID"] = "";
$tdatacontact[".entityType"] = 7;
$tdatacontact[".connId"] = "rest";


$tdatacontact[".strOriginalTableName"] = "View";

	



$tdatacontact[".showAddInPopup"] = false;

$tdatacontact[".showEditInPopup"] = false;

$tdatacontact[".showViewInPopup"] = false;

$tdatacontact[".listAjax"] = false;
//	temporary
//$tdatacontact[".listAjax"] = false;

	$tdatacontact[".audit"] = false;

	$tdatacontact[".locking"] = false;


$pages = $tdatacontact[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontact[".edit"] = true;
	$tdatacontact[".afterEditAction"] = 1;
	$tdatacontact[".closePopupAfterEdit"] = 1;
	$tdatacontact[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacontact[".add"] = true;
$tdatacontact[".afterAddAction"] = 1;
$tdatacontact[".closePopupAfterAdd"] = 1;
$tdatacontact[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontact[".list"] = true;
}



$tdatacontact[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontact[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontact[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontact[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontact[".printFriendly"] = true;
}



$tdatacontact[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontact[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontact[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontact[".isUseAjaxSuggest"] = false;

$tdatacontact[".rowHighlite"] = true;





$tdatacontact[".ajaxCodeSnippetAdded"] = false;

$tdatacontact[".buttonsAdded"] = false;

$tdatacontact[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontact[".isUseTimeForSearch"] = false;


$tdatacontact[".badgeColor"] = "00c2c5";


$tdatacontact[".allSearchFields"] = array();
$tdatacontact[".filterFields"] = array();
$tdatacontact[".requiredSearchFields"] = array();

$tdatacontact[".googleLikeFields"] = array();
$tdatacontact[".googleLikeFields"][] = "_id";
$tdatacontact[".googleLikeFields"][] = "account_id";
$tdatacontact[".googleLikeFields"][] = "role1";
$tdatacontact[".googleLikeFields"][] = "successful";
$tdatacontact[".googleLikeFields"][] = "failed";




$tdatacontact[".printerPageOrientation"] = 0;
$tdatacontact[".nPrinterPageScale"] = 100;

$tdatacontact[".nPrinterSplitRecords"] = 40;

$tdatacontact[".geocodingEnabled"] = false;










$tdatacontact[".pageSize"] = 20;

$tdatacontact[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacontact[".strOrderBy"] = $tstrOrderBy;

$tdatacontact[".orderindexes"] = array();


$tdatacontact[".sqlHead"] = "";
$tdatacontact[".sqlFrom"] = "";
$tdatacontact[".sqlWhereExpr"] = "";
$tdatacontact[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontact[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontact[".arrGroupsPerPage"] = $arrGPP;

$tdatacontact[".highlightSearchResults"] = true;

$tableKeyscontact = array();
$tdatacontact[".Keys"] = $tableKeyscontact;


$tdatacontact[".hideMobileList"] = array();




//	_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "_id";
	$fdata["GoodName"] = "_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("contact","_id");
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


	$tdatacontact["_id"] = $fdata;
		$tdatacontact[".searchableFields"][] = "_id";
//	account_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "account_id";
	$fdata["GoodName"] = "account_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("contact","account_id");
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


	$tdatacontact["account_id"] = $fdata;
		$tdatacontact[".searchableFields"][] = "account_id";
//	role1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "role1";
	$fdata["GoodName"] = "role1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("contact","role1");
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


	$tdatacontact["role1"] = $fdata;
		$tdatacontact[".searchableFields"][] = "role1";
//	successful
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "successful";
	$fdata["GoodName"] = "successful";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("contact","successful");
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


	$tdatacontact["successful"] = $fdata;
		$tdatacontact[".searchableFields"][] = "successful";
//	failed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "failed";
	$fdata["GoodName"] = "failed";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("contact","failed");
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


	$tdatacontact["failed"] = $fdata;
		$tdatacontact[".searchableFields"][] = "failed";


$tables_data["contact"]=&$tdatacontact;
$field_labels["contact"] = &$fieldLabelscontact;
$fieldToolTips["contact"] = &$fieldToolTipscontact;
$placeHolders["contact"] = &$placeHolderscontact;
$page_titles["contact"] = &$pageTitlescontact;


changeTextControlsToDate( "contact" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["contact"] = array();
//	invitation
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="invitation";
		$detailsParam["dOriginalTable"] = "View";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "invitation";
	$detailsParam["dCaptionTable"] = GetTableCaption("invitation");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["contact"][$dIndex] = $detailsParam;

	
		$detailsTablesData["contact"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["contact"][$dIndex]["masterKeys"][]="account_id";

				$detailsTablesData["contact"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["contact"][$dIndex]["detailKeys"][]="account_id";
//	case_contact_role
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="case_contact_role";
		$detailsParam["dOriginalTable"] = "View";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "case_contact_role";
	$detailsParam["dCaptionTable"] = GetTableCaption("case_contact_role");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["contact"][$dIndex] = $detailsParam;

	
		$detailsTablesData["contact"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["contact"][$dIndex]["masterKeys"][]="account_id";

				$detailsTablesData["contact"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["contact"][$dIndex]["detailKeys"][]="account_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["contact"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="View";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="account";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "account";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["contact"][0] = $masterParams;
				$masterTablesData["contact"][0]["masterKeys"] = array();
	$masterTablesData["contact"][0]["masterKeys"][]="account_id";
				$masterTablesData["contact"][0]["detailKeys"] = array();
	$masterTablesData["contact"][0]["detailKeys"][]="account_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/contact_ops.php" ) );



	
				;

					

$tdatacontact[".sqlquery"] = $queryData_contact;



include_once(getabspath("include/contact_events.php"));
$tdatacontact[".hasEvents"] = true;

?>