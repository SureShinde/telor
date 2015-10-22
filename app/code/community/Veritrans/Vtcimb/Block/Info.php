<?php
/**
 * Veritrans VT direct cimb clicks form block
 *
 * @category   Mage
 * @package    Mage_Veritrans_Vtcimb_Block_Form
 * @author     denny
 * when Veritrans payment method is chosen, vtcimb/info.phtml template will be rendered at the right side, in progress bar.
 */
class Veritrans_Vtcimb_Block_Info extends Mage_Payment_Block_Info
{
    
    protected function _construct()
    {
        parent::_construct();
		$this->setInfoMessage( Mage::helper('vtcimb/data')->_getInfoTypeIsImage() == true ? 
		'<img src="'. $this->getSkinUrl('images/Veritrans.png'). '"/>' : '<b>'. Mage::helper('vtcimb/data')->_getTitle() . '</b>');
		$this->setPaymentMethodTitle( Mage::helper('vtcimb/data')->_getTitle() );
        $this->setTemplate('vtcimb/info.phtml');
    }
}
?>
