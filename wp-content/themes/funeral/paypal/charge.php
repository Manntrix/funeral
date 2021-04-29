<?php
require_once "vendor/autoload.php";
  
use Omnipay\Omnipay;
  
$gateway = Omnipay::create('PayPal_Pro');
$gateway->setUsername('rudra.brainium-merchant_api1.gmail.com');
$gateway->setPassword('9XTLJ3CAYYV6AKJ5');
$gateway->setSignature('Al3UTKLI1i68WmIDgQz7KCVQD1kLAScdoLy8RJnZaCQs4JXNVE3QI0xi');
$gateway->setTestMode(true); // here 'true' is for sandbox. Pass 'false' when go live
  
if (isset($_POST['submit'])) {
  
    $arr_expiry = explode("/", $_POST['expiry']);
  
    $formData = array(
        'firstName' => $_POST['first-name'],
        'lastName' => $_POST['last-name'],
        'number' => $_POST['number'],
        'expiryMonth' => trim($arr_expiry[0]),
        'expiryYear' => trim($arr_expiry[1]),
        'cvv' => $_POST['cvc']
    );
  
    try {
        // Send purchase request
        $response = $gateway->purchase([
                'amount' => $_POST['amount'],
                'currency' => 'USD',
                'card' => $formData
        ])->send();
  
        // Process response
        if ($response->isSuccessful()) {
  
            // Payment was successful
            echo "Payment is successful. Your Transaction ID is: ". $response->getTransactionReference();
  
        } else {
            // Payment failed
            echo "Payment failed. ". $response->getMessage();
        }
    } catch(Exception $e) {
        echo $e->getMessage();
    }
}