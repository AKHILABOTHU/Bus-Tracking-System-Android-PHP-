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
			 $product["id"]=$result["id"];
            $product["from_"]=$result["from_"];
            $product["r1"] =  $result["la1"];
            $product["a1"]  = $result["lo1"] ;
            $product["r2"]  = $result["la2"] ;
            $product["a2"]  = $result["lo2"] ;
            $product["r3"] =  $result["la3"];
            $product["a3"] =  $result["lo3"];
            $product["r4"] =  $result["la4"];
            $product["a4"]  = $result["lo4"] ;
            $product["r5"]  = $result["la5"] ;
            $product["a5"]  = $result["lo5"] ;
            $product["to_"] = $result["to_"];
			
			 $product["s"]=$result["from_"];
			$product["s1"] =  $result["r2"];
            $product["s2"] =  $result["r3"];
            $product["s3"] =  $result["r4"];
            $product["d"]  = $result["r5"] ;
           
           $result1 = mysql_query("SELECT * FROM bus WHERE id ='$result[id]' ");
		   if (mysql_num_rows($result1) > 0) {

            $result = mysql_fetch_array($result1);
			$product["blat"]=$result["lat"];
            $product["blng"]=$result["lng"];
			}
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