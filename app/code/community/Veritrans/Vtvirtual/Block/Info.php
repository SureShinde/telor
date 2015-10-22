<?php
/**
 * Veritrans VT direct virtual account form block
 *
 * @category   Mage
 * @package    Mage_Veritrans_Vtvirtual_Block_Form
 * @author     denny
 * when Veritrans payment method is chosen, vtvirtual/info.phtml template will be rendered at the right side, in progress bar.
 */
class Veritrans_Vtvirtual_Block_Info extends Mage_Payment_Block_Info
{
    
    protected function _construct()
    {
        parent::_construct();
		$this->setInfoMessage( Mage::helper('vtvirtual/data')->_getInfoTypeIsImage() == true ? 
		'<img src="'. $this->getSkinUrl('images/Veritrans.png'). '"/>' : '<b>'. Mage::helper('vtvirtual/data')->_getTitle() . '</b>');
		$this->setPaymentMethodTitle( Mage::helper('vtvirtual/data')->_getTitle() );
        $this->setTemplate('vtvirtual/info.phtml');
    }
}
?>
