<?php
include_once 'dbconn.php';
/*
 * Following code will delete a product from table
 *
 */

// array for JSON response
$response = array();

// check for required fields
if (isset($_POST['u']) && $_POST['p']) {
    $u = $_POST['u'];
	$p = $_POST['p'];

    
    

    // mysql update row with matched pid
    $result = mysql_query("SELECT * FROM user WHERE user = '$u'  AND pass = '$p' ");
    
    // check if row deleted or not
    if (mysql_affected_rows() > 0) {
        // successfully updated
        $response["success"] = 1;
        $response["message"] = "successfully login";

        // echoing JSON response
        echo json_encode($response);
    } else {
        // no product found
        $response["success"] = 0;
        $response["message"] = "No found";

        // echo no users JSON
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