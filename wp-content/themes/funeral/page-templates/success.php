<?php
/**
*
* Template Name: Success
*
* The template for displaying content in full width.
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site may use a
* different template.
*
* @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package KJL
*/
get_header();

?>
<?php
//require_once("paypal_pro.inc.php");
//if(!@include("paypal_pro.inc.php")) throw new Exception("Failed to include 'script.php'");
 require_once(get_template_directory() . '/paypal_pro.inc.php');
$firstName =urlencode( $_POST['firstName']);
$lastName =urlencode( $_POST['lastName']);
$creditCardType =urlencode( $_POST['creditCardType']);
$creditCardNumber = urlencode($_POST['creditCardNumber']);
$expDateMonth =urlencode( $_POST['expDateMonth']);
$padDateMonth = str_pad($expDateMonth, 2, '0', STR_PAD_LEFT);
$expDateYear =urlencode( $_POST['expDateYear']);
$cvv2Number = urlencode($_POST['cvv2Number']);
$address1 = urlencode($_POST['address1']);
$address2 = urlencode($_POST['address2']);
$city = urlencode($_POST['city']);
$state =urlencode( $_POST['state']);
$zip = urlencode($_POST['zip']);
$amount = urlencode($_POST['amount']);
$currencyCode="USD";
$paymentAction = urlencode("Sale");
if($_POST['recurring'] == 1) // For Recurring
{
	$profileStartDate = urlencode(date('Y-m-d h:i:s'));
	$billingPeriod = urlencode($_POST['billingPeriod']);// or "Day", "Week", "SemiMonth", "Year"
	$billingFreq = urlencode($_POST['billingFreq']);// combination of this and billingPeriod must be at most a year
	$initAmt = $amount;
	$failedInitAmtAction = urlencode("ContinueOnFailure");
	$desc = urlencode("Recurring $".$amount);
	$autoBillAmt = urlencode("AddToNextBilling");
	$profileReference = urlencode("Anonymous");
	$methodToCall = 'CreateRecurringPaymentsProfile';
	$nvpRecurring ='&BILLINGPERIOD='.$billingPeriod.'&BILLINGFREQUENCY='.$billingFreq.'&PROFILESTARTDATE='.$profileStartDate.'&INITAMT='.$initAmt.'&FAILEDINITAMTACTION='.$failedInitAmtAction.'&DESC='.$desc.'&AUTOBILLAMT='.$autoBillAmt.'&PROFILEREFERENCE='.$profileReference;
}
else
{
	$nvpRecurring = '';
	$methodToCall = 'doDirectPayment';
}



$nvpstr='&PAYMENTACTION='.$paymentAction.'&AMT='.$amount.'&CREDITCARDTYPE='.$creditCardType.'&ACCT='.$creditCardNumber.'&EXPDATE='.         $padDateMonth.$expDateYear.'&CVV2='.$cvv2Number.'&FIRSTNAME='.$firstName.'&LASTNAME='.$lastName.'&STREET='.$address1.'&CITY='.$city.'&STATE='.$state.'&ZIP='.$zip.'&COUNTRYCODE=US&CURRENCYCODE='.$currencyCode.$nvpRecurring;


$paypalPro = new paypal_pro('tjsparksmusic_api1.gmail.com', 'BTMF3HWB8V4S5SMD', 'AIv4vtkroJKR3aSr2NM3.kt8wDaeASpWN.oAjgO8n02jf6I8D2U8ImDG', '', '', FALSE, FALSE );
$resArray = $paypalPro->hash_call($methodToCall,$nvpstr);
$ack = strtoupper($resArray["ACK"]);
echo $ack;
exit;
if($ack!="SUCCESS")
{
	echo '<tr>';
		echo '<td colspan="2" style="font-weight:bold;color:red;" align="center">Error! Please check that u will provide all information correctly :(</td>';
	echo '</tr>';
	echo '<tr>';
		echo '<td align="right">Ack:</td>';
		echo '<td>'.$resArray["ACK"].'</td>';
	echo '</tr>';
	echo '<tr>';
		echo '<td align="right">Correlation ID:</td>';
		echo '<td>'.$resArray['CORRELATIONID'].'</td>';
	echo '</tr>';
}
else
{
	echo '<tr>';
		echo '<td colspan="2" style="font-weight:bold;color:Green" align="center">Thank You For Your Payment :)</td>';
	echo '</tr>';
	echo '<tr>';
		echo '<td align="right"> Transaction ID:</td>';
		echo '<td>'.$resArray["TRANSACTIONID"].'</td>';
	echo '</tr>';
	echo '<tr>';
		echo '<td align="right"> Amount:</td>';
		echo '<td>'.$currencyCode.$resArray['AMT'].'</td>';
	echo '</tr>';
}
?>
<?php
get_footer();
?>