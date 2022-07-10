<?php
$tdatainvitation = array();
$tdatainvitation[".searchableFields"] = array();
$tdatainvitation[".ShortName"] = "invitation";
$tdatainvitation[".OwnerID"] = "";
$tdatainvitation[".OriginalTable"] = "View";


$tdatainvitation[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatainvitation[".originalPagesByType"] = $tdatainvitation[".pagesByType"];
$tdatainvitation[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatainvitation[".originalPages"] = $tdatainvitation[".pages"];
$tdatainvitation[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatainvitation[".originalDefaultPages"] = $tdatainvitation[".defaultPages"];

//	field labels
$fieldLabelsinvitation = array();
$fieldToolTipsinvitation = array();
$pageTitlesinvitation = array();
$placeHoldersinvitation = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsinvitation["English"] = array();
	$fieldToolTipsinvitation["English"] = array();
	$placeHoldersinvitation["English"] = array();
	$pageTitlesinvitation["English"] = array();
	$fieldLabelsinvitation["English"]["_id"] = "Id";
	$fieldToolTipsinvitation["English"]["_id"] = "";
	$placeHoldersinvitation["English"]["_id"] = "";
	$fieldLabelsinvitation["English"]["account_id"] = "Account Id";
	$fieldToolTipsinvitation["English"]["account_id"] = "";
	$placeHoldersinvitation["English"]["account_id"] = "";
	$fieldLabelsinvitation["English"]["_index"] = "Index";
	$fieldToolTipsinvitation["English"]["_index"] = "";
	$placeHoldersinvitation["English"]["_index"] = "";
	$fieldLabelsinvitation["English"]["_type"] = "Type";
	$fieldToolTipsinvitation["English"]["_type"] = "";
	$placeHoldersinvitation["English"]["_type"] = "";
	$fieldLabelsinvitation["English"]["invited_id"] = "Invited Id";
	$fieldToolTipsinvitation["English"]["invited_id"] = "";
	$placeHoldersinvitation["English"]["invited_id"] = "";
	$fieldLabelsinvitation["English"]["email"] = "Email";
	$fieldToolTipsinvitation["English"]["email"] = "";
	$placeHoldersinvitation["English"]["email"] = "";
	$fieldLabelsinvitation["English"]["invite_at"] = "Invite At";
	$fieldToolTipsinvitation["English"]["invite_at"] = "";
	$placeHoldersinvitation["English"]["invite_at"] = "";
	$fieldLabelsinvitation["English"]["expire_at"] = "Expire At";
	$fieldToolTipsinvitation["English"]["expire_at"] = "";
	$placeHoldersinvitation["English"]["expire_at"] = "";
	$fieldLabelsinvitation["English"]["magiclink"] = "Magiclink";
	$fieldToolTipsinvitation["English"]["magiclink"] = "";
	$placeHoldersinvitation["English"]["magiclink"] = "";
	$fieldLabelsinvitation["English"]["accept_at"] = "Accept At";
	$fieldToolTipsinvitation["English"]["accept_at"] = "";
	$placeHoldersinvitation["English"]["accept_at"] = "";
	$fieldLabelsinvitation["English"]["finish_at"] = "Finish At";
	$fieldToolTipsinvitation["English"]["finish_at"] = "";
	$placeHoldersinvitation["English"]["finish_at"] = "";
	$fieldLabelsinvitation["English"]["contact_id"] = "Contact Id";
	$fieldToolTipsinvitation["English"]["contact_id"] = "";
	$placeHoldersinvitation["English"]["contact_id"] = "";
	$fieldLabelsinvitation["English"]["update_at"] = "Update At";
	$fieldToolTipsinvitation["English"]["update_at"] = "";
	$placeHoldersinvitation["English"]["update_at"] = "";
	if (count($fieldToolTipsinvitation["English"]))
		$tdatainvitation[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsinvitation["Japanese"] = array();
	$fieldToolTipsinvitation["Japanese"] = array();
	$placeHoldersinvitation["Japanese"] = array();
	$pageTitlesinvitation["Japanese"] = array();
	$fieldLabelsinvitation["Japanese"]["_id"] = "Id";
	$fieldToolTipsinvitation["Japanese"]["_id"] = "";
	$placeHoldersinvitation["Japanese"]["_id"] = "";
	$fieldLabelsinvitation["Japanese"]["account_id"] = "Account Id";
	$fieldToolTipsinvitation["Japanese"]["account_id"] = "";
	$placeHoldersinvitation["Japanese"]["account_id"] = "";
	$fieldLabelsinvitation["Japanese"]["_index"] = "Index";
	$fieldToolTipsinvitation["Japanese"]["_index"] = "";
	$placeHoldersinvitation["Japanese"]["_index"] = "";
	$fieldLabelsinvitation["Japanese"]["_type"] = "Type";
	$fieldToolTipsinvitation["Japanese"]["_type"] = "";
	$placeHoldersinvitation["Japanese"]["_type"] = "";
	$fieldLabelsinvitation["Japanese"]["invited_id"] = "Invited Id";
	$fieldToolTipsinvitation["Japanese"]["invited_id"] = "";
	$placeHoldersinvitation["Japanese"]["invited_id"] = "";
	$fieldLabelsinvitation["Japanese"]["email"] = "Email";
	$fieldToolTipsinvitation["Japanese"]["email"] = "";
	$placeHoldersinvitation["Japanese"]["email"] = "";
	$fieldLabelsinvitation["Japanese"]["invite_at"] = "Invite At";
	$fieldToolTipsinvitation["Japanese"]["invite_at"] = "";
	$placeHoldersinvitation["Japanese"]["invite_at"] = "";
	$fieldLabelsinvitation["Japanese"]["expire_at"] = "Expire At";
	$fieldToolTipsinvitation["Japanese"]["expire_at"] = "";
	$placeHoldersinvitation["Japanese"]["expire_at"] = "";
	$fieldLabelsinvitation["Japanese"]["magiclink"] = "Magiclink";
	$fieldToolTipsinvitation["Japanese"]["magiclink"] = "";
	$placeHoldersinvitation["Japanese"]["magiclink"] = "";
	$fieldLabelsinvitation["Japanese"]["accept_at"] = "Accept At";
	$fieldToolTipsinvitation["Japanese"]["accept_at"] = "";
	$placeHoldersinvitation["Japanese"]["accept_at"] = "";
	$fieldLabelsinvitation["Japanese"]["finish_at"] = "Finish At";
	$fieldToolTipsinvitation["Japanese"]["finish_at"] = "";
	$placeHoldersinvitation["Japanese"]["finish_at"] = "";
	$fieldLabelsinvitation["Japanese"]["contact_id"] = "Contact Id";
	$fieldToolTipsinvitation["Japanese"]["contact_id"] = "";
	$placeHoldersinvitation["Japanese"]["contact_id"] = "";
	$fieldLabelsinvitation["Japanese"]["update_at"] = "Update At";
	$fieldToolTipsinvitation["Japanese"]["update_at"] = "";
	$placeHoldersinvitation["Japanese"]["update_at"] = "";
	if (count($fieldToolTipsinvitation["Japanese"]))
		$tdatainvitation[".isUseToolTips"] = true;
}


	$tdatainvitation[".NCSearch"] = true;



$tdatainvitation[".shortTableName"] = "invitation";
$tdatainvitation[".nSecOptions"] = 0;

$tdatainvitation[".mainTableOwnerID"] = "";
$tdatainvitation[".entityType"] = 7;
$tdatainvitation[".connId"] = "rest";


$tdatainvitation[".strOriginalTableName"] = "View";

	



$tdatainvitation[".showAddInPopup"] = false;

$tdatainvitation[".showEditInPopup"] = false;

$tdatainvitation[".showViewInPopup"] = false;

$tdatainvitation[".listAjax"] = false;
//	temporary
//$tdatainvitation[".listAjax"] = false;

	$tdatainvitation[".audit"] = false;

	$tdatainvitation[".locking"] = false;


$pages = $tdatainvitation[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatainvitation[".edit"] = true;
	$tdatainvitation[".afterEditAction"] = 1;
	$tdatainvitation[".closePopupAfterEdit"] = 1;
	$tdatainvitation[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatainvitation[".add"] = true;
$tdatainvitation[".afterAddAction"] = 1;
$tdatainvitation[".closePopupAfterAdd"] = 1;
$tdatainvitation[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatainvitation[".list"] = true;
}



$tdatainvitation[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatainvitation[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatainvitation[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatainvitation[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatainvitation[".printFriendly"] = true;
}



$tdatainvitation[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatainvitation[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatainvitation[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatainvitation[".isUseAjaxSuggest"] = false;

$tdatainvitation[".rowHighlite"] = true;





$tdatainvitation[".ajaxCodeSnippetAdded"] = false;

$tdatainvitation[".buttonsAdded"] = false;

$tdatainvitation[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainvitation[".isUseTimeForSearch"] = false;


$tdatainvitation[".badgeColor"] = "d2691e";


$tdatainvitation[".allSearchFields"] = array();
$tdatainvitation[".filterFields"] = array();
$tdatainvitation[".requiredSearchFields"] = array();

$tdatainvitation[".googleLikeFields"] = array();
$tdatainvitation[".googleLikeFields"][] = "_id";
$tdatainvitation[".googleLikeFields"][] = "account_id";
$tdatainvitation[".googleLikeFields"][] = "_index";
$tdatainvitation[".googleLikeFields"][] = "_type";
$tdatainvitation[".googleLikeFields"][] = "invited_id";
$tdatainvitation[".googleLikeFields"][] = "email";
$tdatainvitation[".googleLikeFields"][] = "invite_at";
$tdatainvitation[".googleLikeFields"][] = "expire_at";
$tdatainvitation[".googleLikeFields"][] = "magiclink";
$tdatainvitation[".googleLikeFields"][] = "accept_at";
$tdatainvitation[".googleLikeFields"][] = "finish_at";
$tdatainvitation[".googleLikeFields"][] = "contact_id";
$tdatainvitation[".googleLikeFields"][] = "update_at";




$tdatainvitation[".printerPageOrientation"] = 0;
$tdatainvitation[".nPrinterPageScale"] = 100;

$tdatainvitation[".nPrinterSplitRecords"] = 40;

$tdatainvitation[".geocodingEnabled"] = false;










$tdatainvitation[".pageSize"] = 20;

$tdatainvitation[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatainvitation[".strOrderBy"] = $tstrOrderBy;

$tdatainvitation[".orderindexes"] = array();


$tdatainvitation[".sqlHead"] = "";
$tdatainvitation[".sqlFrom"] = "";
$tdatainvitation[".sqlWhereExpr"] = "";
$tdatainvitation[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainvitation[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainvitation[".arrGroupsPerPage"] = $arrGPP;

$tdatainvitation[".highlightSearchResults"] = true;

$tableKeysinvitation = array();
$tdatainvitation[".Keys"] = $tableKeysinvitation;


$tdatainvitation[".hideMobileList"] = array();




//	_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "_id";
	$fdata["GoodName"] = "_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("invitation","_id");
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


	$tdatainvitation["_id"] = $fdata;
		$tdatainvitation[".searchableFields"][] = "_id";
//	account_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "account_id";
	$fdata["GoodName"] = "account_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("invitation","account_id");
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


	$tdatainvitation["account_id"] = $fdata;
		$tdatainvitation[".searchableFields"][] = "account_id";
//	_index
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "_index";
	$fdata["GoodName"] = "_index";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("invitation","_index");
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


	$tdatainvitation["_index"] = $fdata;
		$tdatainvitation[".searchableFields"][] = "_index";
//	_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "_type";
	$fdata["GoodName"] = "_type";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("invitation","_type");
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


	$tdatainvitation["_type"] = $fdata;
		$tdatainvitation[".searchableFields"][] = "_type";
//	invited_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "invited_id";
	$fdata["GoodName"] = "invited_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("invitation","invited_id");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "hits/hits/*/_source/invited_id";

	
		$fdata["FullName"] = "invited_id";

	
	
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


	$tdatainvitation["invited_id"] = $fdata;
		$tdatainvitation[".searchableFields"][] = "invited_id";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("invitation","email");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "hits/hits/*/_source/email";

	
		$fdata["FullName"] = "email";

	
	
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


	$tdatainvitation["email"] = $fdata;
		$tdatainvitation[".searchableFields"][] = "email";
//	invite_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "invite_at";
	$fdata["GoodName"] = "invite_at";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("invitation","invite_at");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "hits/hits/*/_source/invite_at";

	
		$fdata["FullName"] = "invite_at";

	
	
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


	$tdatainvitation["invite_at"] = $fdata;
		$tdatainvitation[".searchableFields"][] = "invite_at";
//	expire_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "expire_at";
	$fdata["GoodName"] = "expire_at";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("invitation","expire_at");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "hits/hits/*/_source/expire_at";

	
		$fdata["FullName"] = "expire_at";

	
	
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


	$tdatainvitation["expire_at"] = $fdata;
		$tdatainvitation[".searchableFields"][] = "expire_at";
//	magiclink
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "magiclink";
	$fdata["GoodName"] = "magiclink";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("invitation","magiclink");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "hits/hits/*/_source/magiclink";

	
		$fdata["FullName"] = "magiclink";

	
	
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


	$tdatainvitation["magiclink"] = $fdata;
		$tdatainvitation[".searchableFields"][] = "magiclink";
//	accept_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "accept_at";
	$fdata["GoodName"] = "accept_at";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("invitation","accept_at");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "hits/hits/*/_source/accept_at";

	
		$fdata["FullName"] = "accept_at";

	
	
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


	$tdatainvitation["accept_at"] = $fdata;
		$tdatainvitation[".searchableFields"][] = "accept_at";
//	finish_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "finish_at";
	$fdata["GoodName"] = "finish_at";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("invitation","finish_at");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "hits/hits/*/_source/finish_at";

	
		$fdata["FullName"] = "finish_at";

	
	
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


	$tdatainvitation["finish_at"] = $fdata;
		$tdatainvitation[".searchableFields"][] = "finish_at";
//	contact_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "contact_id";
	$fdata["GoodName"] = "contact_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("invitation","contact_id");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "hits/hits/*/_source/contact_id";

	
		$fdata["FullName"] = "contact_id";

	
	
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


	$tdatainvitation["contact_id"] = $fdata;
		$tdatainvitation[".searchableFields"][] = "contact_id";
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("invitation","update_at");
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


	$tdatainvitation["update_at"] = $fdata;
		$tdatainvitation[".searchableFields"][] = "update_at";


$tables_data["invitation"]=&$tdatainvitation;
$field_labels["invitation"] = &$fieldLabelsinvitation;
$fieldToolTips["invitation"] = &$fieldToolTipsinvitation;
$placeHolders["invitation"] = &$placeHoldersinvitation;
$page_titles["invitation"] = &$pageTitlesinvitation;


changeTextControlsToDate( "invitation" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["invitation"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["invitation"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="View";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="account";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "account";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["invitation"][0] = $masterParams;
				$masterTablesData["invitation"][0]["masterKeys"] = array();
	$masterTablesData["invitation"][0]["masterKeys"][]="account_id";
				$masterTablesData["invitation"][0]["detailKeys"] = array();
	$masterTablesData["invitation"][0]["detailKeys"][]="account_id";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="View";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="contact";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "contact";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["invitation"][1] = $masterParams;
				$masterTablesData["invitation"][1]["masterKeys"] = array();
	$masterTablesData["invitation"][1]["masterKeys"][]="account_id";
				$masterTablesData["invitation"][1]["detailKeys"] = array();
	$masterTablesData["invitation"][1]["detailKeys"][]="account_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/invitation_ops.php" ) );



	
				;

													

$tdatainvitation[".sqlquery"] = $queryData_invitation;



include_once(getabspath("include/invitation_events.php"));
$tdatainvitation[".hasEvents"] = true;

?>