<?php
/**
 * Veritrans VT Direct cimb clicks form block
 *
 * @category   Mage
 * @package    Mage_Veritrans_Vtcimb_Block_Form
 * @author     denny
 * when Veritrans payment method is chosen, vtcimb/form.phtml template will be rendered through this class.
 */
class Veritrans_Vtcimb_Block_Form extends Mage_Payment_Block_Form
{
    
    protected function _construct()
    {
        parent::_construct();
		$this->setFormMessage(Mage::helper('vtcimb/data')->_getFormMessage());
        $this->setTemplate('vtcimb/form.phtml');
    }
}
?>