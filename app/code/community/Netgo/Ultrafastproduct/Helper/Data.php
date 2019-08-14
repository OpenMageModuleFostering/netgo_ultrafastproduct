<?php
/***************************************
 *** Ultra Fast Product Extension ***
 ***************************************
 *
 * @copyright   Copyright (c) 2015
 * @company     NetAttingo Technologies
 * @package     Netgo_Prohistory
 * @author 		Vipin
 * @dev			77vips@gmail.com
 *
 */
class Netgo_Ultrafastproduct_Helper_Data extends Mage_Core_Helper_Abstract
{
  
	public function __construct()
    {	    
	   //if module is disabled then return from here.
	   $isactive=Mage::getStoreConfig('ufp_settings/ufpset_general/active');//die;
	   if($isactive==0){
		   return;
	   }
    }
	public  function getByName($name)
	{
		return Mage::getStoreConfig('ufp_settings/ufpset_settings/'.$name);
	}

	public  function getMetaData($name)
	 {
		 return Mage::getStoreConfig('ufp_settings/ufpset_metadata/'.$name);
	 }

	public  function getPriceTabValues($name)
     {
		 return Mage::getStoreConfig('ufp_settings/ufpset_prices/'.$name);
     }

	public  function getStockData($name)
     {
		return Mage::getStoreConfig('ufp_settings/ufpset_inventory/'.$name);
     }
 
}
	 
