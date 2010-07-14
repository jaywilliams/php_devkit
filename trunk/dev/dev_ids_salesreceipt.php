<?php

ini_set('display_errors', 1);
error_reporting(E_ALL | E_STRICT);

require_once '../QuickBooks.php';

// 
$username = 'keith@consolibyte.com';
$password = 'password42';
$token = 'tex3r7hwifx6cci3zk43ibmnd';
$realmID = 173642438;

// 
$IPP = new QuickBooks_IPP();
$Context = $IPP->authenticate($username, $password, $token);
$IPP->application($Context, 'be9mh7qd5');

// Create a new Service for IDS access
$Service = new QuickBooks_IPP_Service_SalesReceipt();

//$list = $Service->findAll($Context, $realmID);


$SalesReceipt = new QuickBooks_IPP_Object_SalesReceipt();

$Header = new QuickBooks_IPP_Object_Header();
$Header->setDocNumber('TESTabcd');
$Header->setTxnDate(date('Y-m-d'));
$Header->setCustomerName('ConsoliBYTE, LLC');

$SalesReceipt->addHeader($Header);

$Line = new QuickBooks_IPP_Object_Line();
$Line->setAmount(525);
$Line->setItemName('Test Item 1');
$Line->setQty(5);


$SalesReceipt->addLine($Line);


$ID = $Service->add($Context, $realmID, $SalesReceipt);

print('new ID is: ' . $ID . "\n");

/*
print("\n\n");
print($Service->lastRequest() . "\n\n\n");
print("\n\n");
print($Service->lastResponse() . "\n\n\n");
print("\n\n");
*/
