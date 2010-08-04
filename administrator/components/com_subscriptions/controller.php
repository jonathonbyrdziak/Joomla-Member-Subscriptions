<?php
/**
 * Joomla! 1.5 component subscriptions
 *
 * @version $Id: controller.php 2010-06-23 11:53:05 svn $
 * @author Jonathon Byrd
 * @package Joomla
 * @subpackage subscriptions
 * @license Copyright (c) 2010 - All Rights Reserved
 *
 * Component is designed to manage subscriptions
 *
 * This component file was created using the Joomla Component Creator by Not Web Design
 * http://www.notwebdesign.com/joomla_component_creator/
 *
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

jimport( 'joomla.application.component.controller' );
require_once( JPATH_COMPONENT.DS.'helpers'.DS.'helper.php' );

/**
 * subscriptions Controller
 *
 * @package Joomla
 * @subpackage subscriptions
 */
class SubscriptionsController extends JController {
    /**
     * Constructor
     * @access private
     * @subpackage subscriptions
     */
    function __construct() {
        //Get View
        if(JRequest::getCmd('view') == '') {
            JRequest::setVar('view', 'default');
        }
        $this->item_type = 'Default';
        parent::__construct();
    }
}
?>