<?php
$product_name = $_POST['product_name'];
$price = $_POST['product_price'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

include 'instamojo/Instamojo.php';
$api = new Instamojo\Instamojo('test_9b5bda0751168123a8b4289952f', 'test_74fb1bf68a4dc317baa6147dcc2', 'https://test.instamojo.com/api/1.1/');
try {
    
    $response = $api->paymentRequestCreate(array(
        "purpose" => "$product_name",
        "amount" => "$price",
        "send_email" => true,
        "email" => $email,
        "buyer_name" => $name,
        "phone" => $phone,
        "send_sms" =>true,
        "allow_repeated_payments" => false,
        "redirect_url" => "http://studshop.000webhostapp.com/thankyou.php",
        "webhook" =>"http://studshop.000webhostapp.com/webhook.php"
        ));
    // print_r($response);
    $pay_url=$response['longurl'];
    header("location: $pay_url");
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}
?>