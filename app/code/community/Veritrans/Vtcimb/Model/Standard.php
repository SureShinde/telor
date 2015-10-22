<?php
/**
 * Veritrans VT Direct cimb clicks Model Standard
 *
 * @category   Mage
 * @package    Mage_Veritrans_Vtcimb_Model_Standard
 * @author     denny
 * this class is used after placing order, if the payment is Veritrans, this class will be called and link to redirectAction at Veritrans_Vtcimb_PaymentController class
 */
class Veritrans_Vtcimb_Model_Standard extends Mage_Payment_Model_Method_Abstract {
	protected $_code = 'vtcimb';
	
	protected $_isInitializeNeeded      = true;
	protected $_canUseInternal          = true;
	protected $_canUseForMultishipping  = false;
	
	protected $_formBlockType = 'vtcimb/form';
  protected $_infoBlockType = 'vtcimb/info';
	
	// call to redirectAction function at Veritrans_Vtweb_PaymentController
	public function getOrderPlaceRedirectUrl() {
		return Mage::getUrl('vtcimb/payment/redirect', array('_secure' => true));
	}
}
?>