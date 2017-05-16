<?php
include_once 'dbconn.php';
/*
 * Following code will create a new product row
 * All product details are read from HTTP Post Request
 */

// array for JSON response
$response = array();

//EditText n,u,p,l,e,m;
// check for required fields
if (isset($_POST['n']) && isset($_POST['u'])&& isset($_POST['p'])&& isset($_POST['s'])&& isset($_POST['l'])&& isset($_POST['e'])&& isset($_POST['m'])) {
    
    $name = $_POST['n'];
	$user = $_POST['u'];
	$pass = $_POST['p'];
	$gender = $_POST['s'];
	$loc = $_POST['l'];
	$email = $_POST['e'];
    $mob = $_POST['m'];


    // mysql inserting a new row
    $result = mysql_query("INSERT INTO user(name,user,pass,gender,loc,email,mob) VALUES('$name', '$user', '$pass', '$gender', '$loc', '$email', '$mob')");

    // check if row inserted or not
    if ($result) {
        // successfully inserted into database
        $response["success"] = 1;
        $response["message"] = "User successfully created.";

        // echoing JSON response
        echo json_encode($response);
    } else {
        // failed to insert row
        $response["success"] = 0;
        $response["message"] = "Oops! An error occurred.";
        
        // echoing JSON response
        echo json_encode($response);
    }
} else {
    // required field is missing
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";

    // echoing JSON response
    echo json_encode($response);
}
?>