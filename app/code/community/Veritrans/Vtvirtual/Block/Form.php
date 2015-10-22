<?php
/**
 * Veritrans VT Direct virtual account form block
 *
 * @category   Mage
 * @package    Mage_Veritrans_Vtvirtual_Block_Form
 * @author     denny
 * when Veritrans payment method is chosen, vtvirtual/form.phtml template will be rendered through this class.
 */
class Veritrans_Vtvirtual_Block_Form extends Mage_Payment_Block_Form
{
    
    protected function _construct()
    {
        parent::_construct();
		$this->setFormMessage(Mage::helper('vtvirtual/data')->_getFormMessage());
        $this->setTemplate('vtvirtual/form.phtml');
    }
}
?>