<?php
require_once( getabspath('connections/rest.php') );

class RestManager
{
	protected $_tablesConnectionIds;
	protected $_connectionsData;
	protected $_connectionsIdByName = array();

	function __construct()
	{
		$this->_setConnectionsData();
//		$this->_setTablesConnectionIds();
	}

	protected function _setTablesConnectionIds()
	{
		$connectionsIds = array();
		$connectionsIds["asset"] = "rest";
		$connectionsIds["account"] = "rest";
		$connectionsIds["product_series"] = "rest";
		$connectionsIds["account_product_series"] = "rest";
		$connectionsIds["invitation"] = "rest";
		$connectionsIds["contact"] = "rest";
		$connectionsIds["device"] = "rest";
		$connectionsIds["group"] = "rest";
		$connectionsIds["device_action"] = "rest";
		$connectionsIds["case_contact_role"] = "rest";
		$connectionsIds["payload"] = "rest";
		$connectionsIds["metric"] = "rest";
		$connectionsIds["case"] = "rest";
		$connectionsIds["casecomment"] = "rest";
		$connectionsIds["journal"] = "rest";
		$connectionsIds["link"] = "rest";
		$this->_tablesConnectionIds = &$connectionsIds;
	}

	protected function _setConnectionsData()
	{
		// content of this function can be modified on demo account
		// variable names $data and $connectionsData are important

		$connectionsData = array();

		$data = array();
		$data["connId"] = "rest";
		$data["connName"] = "Rest Api";

		$this->_connectionsIdByName["Rest Api"] = "rest";

		$data["url"] = "https://5fcf-35-247-78-206.ngrok.io";
		$data["authType"] = "custom";
				
	$connectionsData["rest"] = $data;
		$this->_connectionsData = &$connectionsData;
	}

	public function getConnection( $id ) {
		if( $id == spidGOOGLEDRIVE ) {
			return getGoogleDriveConnection();
		}
		if( $id == spidONEDRIVE ) {
			return getOneDriveConnection();
		}
		if( $id == spidDROPBOX ) {
			return getDropboxConnection();
		}
		if( !$this->_connectionsData[$id] ) {
			return null;
		}
		return new RestConnection( $this->_connectionsData[ $id ] );
	}

	public function idByName( $name ) {
		foreach( $this->_connectionsData as $id => $data ) {
			if( $data["connName"] == $name ) {
				return $id;
			}
		}
		
		//	return first available
		foreach( $this->_connectionsData as $id => $data ) {
			return $id;
		}

	}


}


?>