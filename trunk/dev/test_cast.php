<?php

require_once '../QuickBooks.php';

header('Content-Type: text/html; charset=utf-8'); 

$arr = array(
	'Keith Palmer, Shannon Daniels, Kurtis & Karli', 
	'Test of some UTF8 chars- Á, Æ, Ë, ¾, Õ, ä, ß, ú, ñ',
	'Test & Then Some',  
	'Test of already encoded &amp; data.', 
	);

$fields = array(
	'Name',
	'CompanyName',
	'FirstName',
	'LastName',
	'BillAddress_Addr1',
	'BillAddress_Addr2',
	'BillAddress_Addr3',
	'BillAddress_City',
	'BillAddress_State',
	'BillAddress_Country',
	'BillAddress_PostalCode',
	'ShipAddress_Addr1',
	'ShipAddress_Addr2',
	'ShipAddress_Addr3',
	'ShipAddress_City',
	'ShipAddress_State',
	'ShipAddress_Country',
	'ShipAddress_PostalCode',
	'Phone',
	'AltPhone',
	'Fax',
	'Email',
	'Contact', 
	'AltContact',
	);

print("\n");
foreach ($fields as $field)
{	
	foreach ($arr as $key => $value)
	{
		$cast = QuickBooks_Cast::cast(QUICKBOOKS_ADD_CUSTOMER, str_replace('_', ' ', $field), $value);

		print("\t" . $field . ': {' . $cast . '} (length: ' . strlen($cast) . ')' . "\n");
	}
	
	print("\n");
}
print("\n");