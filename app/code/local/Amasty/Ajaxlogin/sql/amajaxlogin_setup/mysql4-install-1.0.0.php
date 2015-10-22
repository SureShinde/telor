<?php
/**
* @author Amasty Team
* @copyright Copyright (c) 2013 Amasty (http://www.amasty.com)
* @package Amasty_Amajaxlogin
*/
$installer = new Mage_Eav_Model_Entity_Setup('core_setup');
$this->startSetup();
$installer->addAttribute('customer',
                    'amajaxlogin_g_id',
                     array(
                        'type' => 'text',
                        'visible' => false,
                        'required' => false,
                        'user_defined' => false                
                     )
                     );
                   
$installer->addAttribute('customer',
                    'amajaxlogin_g_token',
                     array(
                        'type' => 'text',
                        'visible' => false,
                        'required' => false,
                        'user_defined' => false                
                     )
                    ); 
                                     
$installer->addAttribute('customer',
                    'amajaxlogin_fb_id',
                     array(
                        'type' => 'text',
                        'visible' => false,
                        'required' => false,
                        'user_defined' => false                
                     )
                    ); 
                                     
$installer->addAttribute('customer',
                    'amajaxlogin_fb_token',
                     array(
                        'type' => 'text',
                        'visible' => false,
                        'required' => false,
                        'user_defined' => false                
                     )
                    );  
                                    
$installer->addAttribute('customer',
                    'amajaxlogin_tw_id',
                     array(
                        'type' => 'text',
                        'visible' => false,
                        'required' => false,
                        'user_defined' => false                
                     )
                    );   
                                   
$installer->addAttribute('customer',
                    'amajaxlogin_tw_token',
                     array(
                        'type' => 'text',
                        'visible' => false,
                        'required' => false,
                        'user_defined' => false                
                     )
                    );
$this->endSetup();
