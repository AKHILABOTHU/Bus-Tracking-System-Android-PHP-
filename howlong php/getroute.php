<?php
include_once 'dbconn.php';
/*
 * Following code will get single product details
 * A product is identified by product id (pid)
 */

// array for JSON response
$response = array();

// check for post data
if (isset($_GET["fr"])&& ($_GET["to"])) {
    $fr = $_GET['fr'];
	$to = $_GET['to'];

    // get a product from products table
    $result = mysql_query("SELECT * FROM trackk WHERE from_ = '$fr' AND to_ = '$to'");

    if (!empty($result)) {
        // check for empty result
        if (mysql_num_rows($result) > 0) {

            $result = mysql_fetch_array($result);

            $product = array();
            $product["from_"]=  $result["from_"];
            $product["r1"] =$result["r1"];
            $product["a1"]  = $result["a1"] ;
            $product["r2"]  = $result["r2"] ;
            $product["a2"]  = $result["a2"] ;
            $product ["r3"] = $result ["r3"];
            $product ["a3"] = $result ["a3"];
            $product ["r4"] = $result ["r4"];
            $product["a4"]  = $result["a4"] ;
            $product["r5"]  = $result["r5"] ;
            $product["a5"]  = $result["a5"] ;
            $product["to_"] = $result["to_"];
           
            // success
            $response["success"] = 1;

            // user node
            $response["product"] = array();

            array_push($response["product"], $product);

            // echoing JSON response
            echo json_encode($response);
        } else {
            // no product found
            $response["success"] = 0;
            $response["message"] = "No Route found";

            // echo no users JSON
            echo json_encode($response);
        }
    } else {
        // no product found
        $response["success"] = 0;
        $response["message"] = "No Route found";

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