<?php
// Read the JSON file
$json_data = file_get_contents('payment_data.json');

if ($json_data === false) {
    die('Error reading JSON file');
}

// Decode the JSON data into a PHP array
$data = json_decode($json_data, true);

if ($data === null) {
    die('Error decoding JSON data');
}

// Access and display the data
$payment_id = $data['payment_id'];
$display_name = $data['display_name'];
$country_code = $data['country_code'];
$mobile_number = $data['mobile_number'];
$plan_name = $data['plan_name'];
$amount = $data['amount'];
$tax = $data['tax'];
$total_amount = $data['total_amount'];
$orderid = $data['orderid'];
$referenceid = $data['referenceid'];
$paymentmethod = $data['paymentmethod'];
$payment_status = $data['payment_status'];
$payment_date = $data['payment_date'];

echo "payment_id: $payment_id<br>";
echo "display_name: $display_name<br>";
echo "country_code: $country_code<br>";
echo "mobile_number: $mobile_number<br>";
echo "plan_name: $plan_name<br>";
echo "amount: $amount<br>";
echo "tax: $tax<br>";
echo "total_amount: $total_amount<br>";
echo "orderid: $orderid<br>";
echo "referenceid: $referenceid<br>";
echo "paymentmethod: $paymentmethod<br>";
echo "payment_status: $payment_status<br>";
echo "payment_date: $payment_date<br>";
?>
