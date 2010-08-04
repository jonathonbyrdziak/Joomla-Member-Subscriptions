<?php
/**
 * Joomla! 1.5 component subscriptions
 *
 * @version $Id: subscriptions.php 2010-06-23 11:53:05 svn $
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

jimport('joomla.application.component.model');

/**
 * subscriptions Component subscriptions Model
 *
 * @author      notwebdesign
 * @package		Joomla
 * @subpackage	subscriptions
 * @since 1.5
 */
class SubscriptionsModelSubscriptions extends JModel {
    /**
	 * Constructor
	 */
	function __construct() {
		parent::__construct();
    }
}
?>