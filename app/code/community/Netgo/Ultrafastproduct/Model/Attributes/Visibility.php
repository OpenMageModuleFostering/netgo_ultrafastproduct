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
class Netgo_Ultrafastproduct_Model_Attributes_Visibility
{
	public function toOptionArray()
    {
        return Mage::getSingleton('catalog/product_visibility')->getOptionArray();
    }
}
?>
