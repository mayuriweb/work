<?php
// include db connect class
 require('db_connect.php');

    // connecting to db
 $db = new DB_CONNECT();
if (isset($_POST['shop_name']) && isset($_POST['area'])){
// check for required fields
$shop_name=$_POST['shop_name'];
$shop_area=$_POST['area'];



 $sql="select * from db_shop_register where shop_name='".$shop_name."' and area='".$shop_area."'";
$sql_result = mysql_query($sql);
$result=array();


if(mysql_num_rows($sql_result) > 0)
{
	$j=0;
	while($get_shop_detail = mysql_fetch_assoc($sql_result))
	{
	
	$result_shop[$j]['id']=$get_shop_detail['id'];
	$result_shop[$j]['shop_name']=$get_shop_detail['shop_name'];
	$result_shop[$j]['shop_name_area']=$get_shop_detail['shop_name'].",".$get_shop_detail['area'];
	$j++;
	}
	$result['shop_info']=$result_shop;
	$response["success"] = 1;
	$response["message"] = $result;
	die(json_encode($response));
}

} else {
    // required field is missing
    $response["success"] = 0;
    $response["message"] = "No Data Found";

    // echoing JSON response
    echo json_encode($response);
}
?>