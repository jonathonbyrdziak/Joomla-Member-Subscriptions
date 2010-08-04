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

/*
 * Define constants for all pages
 */
define( 'COM_SUBSCRIPTIONS_DIR', 'images'.DS.'subscriptions'.DS );
define( 'COM_SUBSCRIPTIONS_BASE', JPATH_ROOT.DS.COM_SUBSCRIPTIONS_DIR );
define( 'COM_SUBSCRIPTIONS_BASEURL', JURI::root().str_replace( DS, '/', COM_SUBSCRIPTIONS_DIR ));

// Require the base controller
require_once JPATH_COMPONENT.DS.'controller.php';

// Require the base controller
require_once JPATH_COMPONENT.DS.'helpers'.DS.'helper.php';

// Initialize the controller
$controller = new SubscriptionsController( );

// Perform the Request task
$controller->execute( JRequest::getCmd('task'));
$controller->redirect();
?>