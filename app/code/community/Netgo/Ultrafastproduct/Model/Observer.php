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
class Netgo_Ultrafastproduct_Model_Observer  
{

   
	public function initProduct(Varien_Event_Observer $observer)
	{
		 
		$isactive=Mage::getStoreConfig('ufp_settings/ufpset_general/active');
  
		if($isactive==0)
			return;
	   
		$product = $observer->getEvent()->getProduct();
		//$product->setWeight(1);
		$product->setWebsiteIds(array('0'=>'1'));
        $hplObj =    Mage::helper('ultrafastproduct');
 
        /*Get all values*/
        //GENERAL TAB VALUES               
		$name			=	$hplObj->getByName('NAME');//$this->helper('Alfsft')->getName();
        $desc			=	$hplObj->getByName('DESCRIPTION'); 
		$SHORTDESC		=	$hplObj->getByName('SHORTDESC');
		$SKU			=	$hplObj->getByName('SKU');
		$WEIGHT 		=	$hplObj->getByName('WEIGHT'); 
		$STATUS			=	$hplObj->getByName('STATUS');
		$CUSVISIBILITY  =	$hplObj->getByName('CUSVISIBILITY');
		
		//PRICE TAB VALUES
		$PRICE 		=	$hplObj->getPriceTabValues('PRICE');
		$SPLPRICE 	=	$hplObj->getPriceTabValues('SPLPRICE');
		$TAX 		=	$hplObj->getPriceTabValues('TAX');
		
        //GET META DATA.
		$METATITLE 			=	$hplObj->getMetaData('METATITLE');
		$METADESCRIPTION 	=	$hplObj->getMetaData('METADESCRIPTION');
		$METAKEYWORD 		=	$hplObj->getMetaData('METAKEYWORD');
        //GET META DATA ENDS      
        
		//GET INVENTORY DATA
		$STOCKAVAIL 	=$hplObj->getStockData('STOCKAVAIL');
		$QTY 		=$hplObj->getStockData('QTY');
		//GET INVENTORY DATA ENDS
				/*Get all values ends*/
		  //set name
			$product->setName($name);
		  //set description	
			$product->setDescription($desc);
		  //set short description
			$product->setShortDescription($SHORTDESC);
          //set sku
			$product->setSku($SKU);
		  //set weight
			$product->setWeight($WEIGHT); 
		  //set price
			$product->setPrice($PRICE);
          //set special price
			$product->setSpecialPrice($SPLPRICE);
          //set status
			$product->setStatus($STATUS);
		  //set tax class id
			$product->setTaxClassId($TAX);
		  //set visibility
			$product->setVisibility($CUSVISIBILITY);
		  //SET meta data
			$product->setMetaTitle($METATITLE);
			$product->setMetaDescription($METADESCRIPTION);
			$product->setMetaKeyword($METAKEYWORD);
		
//UPDATE STOCK DATA
	        $stockItem = Mage::getModel('cataloginventory/stock_item');
            $stockItem->assignProduct($product);
            $stockItem->setData('is_in_stock',$STOCKAVAIL);
            $stockItem->setData('qty', $QTY);
            $product->setStockItem($stockItem);	  
//UPDATE STOCK DATA ENDS		 
           
		                 

	}

}
