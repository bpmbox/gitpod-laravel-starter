<?php
class eventsBase
{
	var $events = array();
	var $maps = array();
	function exists($event, $table = "")
	{
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
}

class class_GlobalEvents extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["rest_authenticaterest"]=true;


//	onscreen events



		}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// REST connection
function rest_authenticaterest($connection, $mode, $request, $code)
{

		
$username = 'admin';
$password = 'admin';

$request->addBasicAuthorization( $username, $password );

;		
} // function rest_authenticaterest

		
		
		
		

//	onscreen events




}
?>
