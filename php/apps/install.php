<?php

/**
 * Short description for class
 *
 * Long description for class (if any)...
 *
 */ 

require_once('../Util/bootstrap.php');
require_once('../libs/Mobile_Detect.php');  // example of usage "http://mobiledetect.net/"
header('Content-Type: application/json');
$data = array("Test" => "Armin");
echo json_encode($data);

/*
Description: This endpoint is called when the user installs the app on their device. 
There are 5 extra parameters that can be used for some extra information about the app that we want to collect. 
Token parameters is used so that only authorized users can call our service

Method: POST 

URL: /apps/install

Parameters:

{
	“app_id”: “com.myappid.app”,
	// device info
	“device”: “iphone8”
	… send as much as you can depending on the device
	“Operating Systemparam1”: “”,
	“Processorparam2”: “”,
	“Memoryparam3”: “”,
	“Supported Networkparam4”: “”,
	“param5”: “”,
	“token”: “12345”
}

Response:

HTTP 200 for successful user login. 

*/



/*
******PSEUDOCODE******

- Get all params and store them into variables
- Validate them 
- Check if the app exists in the system
- Store the user data in the database
- Return user ID back to the app

*/
 function getDeviceInfo()
 {
	$detect = new Mobile_Detect;

 }
?>
