<?php
/**
 * Veritrans VT Direct mandiri click pay form block
 *
 * @category   Mage
 * @package    Mage_Veritrans_Vtmandiri_Block_Form
 * @author     denny
 * when Veritrans payment method is chosen, vtmandiri/form.phtml template will be rendered through this class.
 */
class Veritrans_Vtmandiri_Block_Form extends Mage_Payment_Block_Form
{
    
    protected function _construct()
    {
        parent::_construct();
		$this->setFormMessage(Mage::helper('vtmandiri/data')->_getFormMessage());
        $this->setTemplate('vtmandiri/form.phtml');
    }
}
?>