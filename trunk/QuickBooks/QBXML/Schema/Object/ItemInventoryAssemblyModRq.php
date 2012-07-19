<?php

/**
 * Schema object for: ItemInventoryAssemblyModRq
 *
 * @author "Keith Palmer Jr." <Keith@ConsoliByte.com>
 * @author "Jay Williams" <jay@myd3.com>
 * @license LICENSE.txt
 *
 * @package QuickBooks
 * @subpackage QBXML
 */

/**
 *
 */
require_once 'QuickBooks.php';

/**
 *
 */
require_once 'QuickBooks/QBXML/Schema/Object.php';

/**
 *
 */
class QuickBooks_QBXML_Schema_Object_ItemInventoryAssemblyModRq extends QuickBooks_QBXML_Schema_Object
{
	protected function &_qbxmlWrapper()
	{
		static $wrapper = 'ItemInventoryAssemblyMod';

		return $wrapper;
	}

	protected function &_dataTypePaths()
	{
		static $paths = array (
		'ListID' => 'IDTYPE',
		'EditSequence' => 'STRTYPE',
		'Name' => 'STRTYPE',
		'IsActive' => 'BOOLTYPE',
		'ParentRef ListID' => 'IDTYPE',
		'ParentRef FullName' => 'STRTYPE',
		'UnitOfMeasureSetRef ListID' => 'IDTYPE',
		'UnitOfMeasureSetRef FullName' => 'STRTYPE',
		'ForceUOMChange' => 'BOOLTYPE',
		'SalesTaxCodeRef ListID' => 'IDTYPE',
		'SalesTaxCodeRef FullName' => 'STRTYPE',
		'SalesDesc' => 'STRTYPE',
		'SalesPrice' => 'PRICETYPE',
		'IncomeAccountRef ListID' => 'IDTYPE',
		'IncomeAccountRef FullName' => 'STRTYPE',
		'ApplyIncomeAccountRefToExistingTxns' => 'BOOLTYPE',
		'PurchaseDesc' => 'STRTYPE',
		'PurchaseCost' => 'PRICETYPE',
		'COGSAccountRef ListID' => 'IDTYPE',
		'COGSAccountRef FullName' => 'STRTYPE',
		'PrefVendorRef ListID' => 'IDTYPE',
		'PrefVendorRef FullName' => 'STRTYPE',
		'AssetAccountRef ListID' => 'IDTYPE',
		'AssetAccountRef FullName' => 'STRTYPE',
		'BuildPoint' => 'QUANTYPE',
		'ClearItemsInGroup' => 'BOOLTYPE',
		// ItemInventoryAssemblyLine?
		'IncludeRetElement' => 'STRTYPE',
		);

		return $paths;
	}

	protected function &_maxLengthPaths()
	{
		static $paths = array (
		'ListID' => 0,
		'EditSequence' => 16,
		'Name' => 31,
		'IsActive' => 0,
		'ParentRef ListID' => 0,
		'ParentRef FullName' => 0,
		'UnitOfMeasureSetRef ListID' => 0,
		'UnitOfMeasureSetRef FullName' => 31,
		'ForceUOMChange' => 0,
		'SalesTaxCodeRef ListID' => 0,
		'SalesTaxCodeRef FullName' => 3,
		'SalesDesc' => 4095,
		'SalesPrice' => 0,
		'IncomeAccountRef ListID' => 0,
		'IncomeAccountRef FullName' => 159,
		'ApplyIncomeAccountRefToExistingTxns' => 0,
		'PurchaseDesc' => 4095,
		'PurchaseCost' => 0,
		'COGSAccountRef ListID' => 0,
		'COGSAccountRef FullName' => 159,
		'PrefVendorRef ListID' => 0,
		'PrefVendorRef FullName' => 41,
		'AssetAccountRef ListID' => 0,
		'AssetAccountRef FullName' => 159,
		'BuildPoint' => 0,
		'ClearItemsInGroup' => 0,
		// ItemInventoryAssemblyLine?
		'IncludeRetElement' => 50,
		);

		return $paths;
	}

	protected function &_isOptionalPaths()
	{
		static $paths = array (
		'ListID' => false,
		'EditSequence' => false,
		'Name' => true,
		'IsActive' => true,
		'ParentRef ListID' => true,
		'ParentRef FullName' => true,
		'UnitOfMeasureSetRef ListID' => true,
		'UnitOfMeasureSetRef FullName' => true,
		'ForceUOMChange' => true,
		'SalesTaxCodeRef ListID' => true,
		'SalesTaxCodeRef FullName' => true,
		'SalesDesc' => true,
		'SalesPrice' => true,
		'IncomeAccountRef ListID' => true,
		'IncomeAccountRef FullName' => true,
		'ApplyIncomeAccountRefToExistingTxns' => true,
		'PurchaseDesc' => true,
		'PurchaseCost' => true,
		'COGSAccountRef ListID' => true,
		'COGSAccountRef FullName' => true,
		'PrefVendorRef ListID' => true,
		'PrefVendorRef FullName' => true,
		'AssetAccountRef ListID' => true,
		'AssetAccountRef FullName' => true,
		'BuildPoint' => true,
		'ClearItemsInGroup' => true,
		// ItemInventoryAssemblyLine?
		'IncludeRetElement' => true,

		);
	}

	protected function &_sinceVersionPaths()
	{
		static $paths = array (
		'ListID' => 999.99,
		'EditSequence' => 999.99,
		'Name' => 999.99,
		'IsActive' => 999.99,
		'ParentRef ListID' => 999.99,
		'ParentRef FullName' => 999.99,
		'UnitOfMeasureSetRef ListID' => 7,
		'UnitOfMeasureSetRef FullName' => 7,
		'ForceUOMChange' => 7,
		'SalesTaxCodeRef ListID' => 999.99,
		'SalesTaxCodeRef FullName' => 999.99,
		'SalesDesc' => 999.99,
		'SalesPrice' => 999.99,
		'IncomeAccountRef ListID' => 7,
		'IncomeAccountRef FullName' => 7,
		'ApplyIncomeAccountRefToExistingTxns' => 7,
		'PurchaseDesc' => 999.99,
		'PurchaseCost' => 999.99,
		'COGSAccountRef ListID' => 999.99,
		'COGSAccountRef FullName' => 999.99,
		'PrefVendorRef ListID' => 999.99,
		'PrefVendorRef FullName' => 999.99,
		'AssetAccountRef ListID' => 999.99,
		'AssetAccountRef FullName' => 999.99,
		'BuildPoint' => 999.99,
		'ClearItemsInGroup' => 999.99,
		// ItemInventoryAssemblyLine?
		'IncludeRetElement' => 4,
		);

		return $paths;
	}

	protected function &_isRepeatablePaths()
	{
		static $paths = array (
		'ListID' => false,
		'EditSequence' => false,
		'Name' => false,
		'IsActive' => false,
		'ParentRef ListID' => false,
		'ParentRef FullName' => false,
		'UnitOfMeasureSetRef ListID' => false,
		'UnitOfMeasureSetRef FullName' => false,
		'ForceUOMChange' => false,
		'SalesTaxCodeRef ListID' => false,
		'SalesTaxCodeRef FullName' => false,
		'SalesDesc' => false,
		'SalesPrice' => false,
		'IncomeAccountRef ListID' => false,
		'IncomeAccountRef FullName' => false,
		'ApplyIncomeAccountRefToExistingTxns' => false,
		'PurchaseDesc' => false,
		'PurchaseCost' => false,
		'COGSAccountRef ListID' => false,
		'COGSAccountRef FullName' => false,
		'PrefVendorRef ListID' => false,
		'PrefVendorRef FullName' => false,
		'AssetAccountRef ListID' => false,
		'AssetAccountRef FullName' => false,
		'BuildPoint' => false,
		'ClearItemsInGroup' => false,
		// ItemInventoryAssemblyLine?
		'IncludeRetElement' => true,
		);

		return $paths;
	}

	protected function &_reorderPathsPaths()
	{
		static $paths = array (
		0  => 'ListID',
		1  => 'EditSequence',
		2  => 'Name',
		3  => 'IsActive',
		4  => 'ParentRef ListID',
		5  => 'ParentRef FullName',
		6  => 'UnitOfMeasureSetRef ListID',
		7  => 'UnitOfMeasureSetRef FullName',
		8  => 'ForceUOMChange',
		9  => 'SalesTaxCodeRef ListID',
		10 => 'SalesTaxCodeRef FullName',
		11 => 'SalesDesc',
		12 => 'SalesPrice',
		13 => 'IncomeAccountRef ListID',
		14 => 'IncomeAccountRef FullName',
		15 => 'ApplyIncomeAccountRefToExistingTxns',
		16 => 'PurchaseDesc',
		17 => 'PurchaseCost',
		18 => 'COGSAccountRef ListID',
		19 => 'COGSAccountRef FullName',
		20 => 'PrefVendorRef ListID',
		21 => 'PrefVendorRef FullName',
		22 => 'AssetAccountRef ListID',
		23 => 'AssetAccountRef FullName',
		24 => 'BuildPoint',
		25 => 'ClearItemsInGroup',
		// ItemInventoryAssemblyLine?
		26 => 'IncludeRetElement',
		);

		return $paths;
	}
}
