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
class Netgo_Ultrafastproduct_Model_Attributes_Stockavail
{
   
	public function toOptionArray()
    {
		return array(
		array('value' => 0, 'label' => Mage::helper('catalog')->__('Out of Stock')),
		array('value' => 1, 'label' => Mage::helper('catalog')->__('In Stock')),
		);
    }
}
?>
