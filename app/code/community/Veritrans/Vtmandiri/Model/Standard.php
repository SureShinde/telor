<?php
/**
 * Veritrans VT Direct mandiri click pay Model Standard
 *
 * @category   Mage
 * @package    Mage_Veritrans_Vtmandiri_Model_Standard
 * @author     denny
 * this class is used after placing order, if the payment is Veritrans, this class will be called and link to redirectAction at Veritrans_Vtmandiri_PaymentController class
 */
class Veritrans_Vtmandiri_Model_Standard extends Mage_Payment_Model_Method_Abstract {
	protected $_code = 'vtmandiri';
	
	protected $_isInitializeNeeded      = true;
	protected $_canUseInternal          = true;
	protected $_canUseForMultishipping  = false;
	
	protected $_formBlockType = 'vtmandiri/form';
  protected $_infoBlockType = 'vtmandiri/info';
	
	// call to redirectAction function at Veritrans_Vtweb_PaymentController
	public function getOrderPlaceRedirectUrl() {
		return Mage::getUrl('vtmandiri/payment/redirect', array('_secure' => true));
	}
}
?>