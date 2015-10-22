<?php
/**
 * Veritrans VT direct mandiri click pay form block
 *
 * @category   Mage
 * @package    Mage_Veritrans_Vtmandiri_Block_Form
 * @author     denny
 * when Veritrans payment method is chosen, vtmandiri/info.phtml template will be rendered at the right side, in progress bar.
 */
class Veritrans_Vtmandiri_Block_Info extends Mage_Payment_Block_Info
{
    
    protected function _construct()
    {
        parent::_construct();
		$this->setInfoMessage( Mage::helper('vtmandiri/data')->_getInfoTypeIsImage() == true ? 
		'<img src="'. $this->getSkinUrl('images/Veritrans.png'). '"/>' : '<b>'. Mage::helper('vtmandiri/data')->_getTitle() . '</b>');
		$this->setPaymentMethodTitle( Mage::helper('vtmandiri/data')->_getTitle() );
        $this->setTemplate('vtmandiri/info.phtml');
    }
}
?>
