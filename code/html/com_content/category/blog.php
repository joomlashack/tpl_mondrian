<?php
/**
 * @version		$Id: default.php 22355 2011-11-07 05:11:58Z github_bot $
 * @package		Joomla.Site
 * @subpackage	mod_menu
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

$app = JFactory::getApplication();

$template = $app->getTemplate(true);

$gridMode = $template->params->get('bs_rowmode','row');

$this->wrightLeadingItemsClass = "container-fluid";  // envuelve a todos los leading
$this->wrightLeadingExtraClass = "";  // envuelve a cada leading

// wrightIntroItemsClass envuelve a todos los intro  -- container / container-fluid
// wrightIntroRowsClass envuelve a cada fila de intro -- row / row-fluid
// wrightIntroExtraClass envuelve a cada intro

$this->wrightComplementOuterClass = "container-fluid"; // -- links, subcategories, pagination -- container / container-fluid
$this->wrightComplementInnerClass = "row-fluid"; // -- links, subcategories, pagination -- container / container-

$this->wrightIntroItemsClass= "container-fluid";
if ($gridMode == "row") {
	$this->wrightLeadingItemElementsStructure = Array(
		'div.container',
			'div.row',
				'div.span12',
					'div.leading-content',
						'title',
						'icons',
						'article-info',
						'image',
						'content',
					'/div',
				'/div',
			'/div',
		'/div',
	);
	$this->wrightComplementOuterClass = "container"; // -- links, subcategories, pagination -- container / container-fluid
	$this->wrightLeadingItemsClass = "";  // envuelve a todos los leading
	$this->wrightIntroItemsClass= "container";
}

require_once(JPATH_THEMES.'/'.$app->getTemplate().'/'.'wright'.'/'.'html'.'/'.'overrider.php');
include(Overrider::getOverride('com_content.category','blog'));
?>

