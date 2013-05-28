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

// wrightIntroRowsClass envuelve a cada fila de intro -- row / row-fluid
// wrightIntroExtraClass envuelve a cada intro
// wrightIntroItemsClass envuelve a todos los intro  -- container / container-fluid
$template = $app->getTemplate(true);

$gridMode = $template->params->get('bs_rowmode','row');

$this->wrightLeadingItemsClass = "container-fluid";  // envuelve a todos los leading
$this->wrightLeadingExtraClass = "";  // envuelve a cada leading


$this->wrightComplementOuterClass = "container-fluid"; // -- links, subcategories, pagination -- container / container-fluid
$this->wrightComplementInnerClass = "row-fluid"; // -- links, subcategories, pagination -- container / container-

$this->wrightIntroItemsClass= "container-fluid";
// $sidebarClass= ' no-sidebar';

$sidebarExistsClass = $template->params->get('sidebarExists',1);
if ($gridMode == "row" &&  $sidebarExistsClass== 1) {
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
	$this->wrightIntroItemsClass= "container";
}elseif($gridMode == "row"){
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
}

require_once(JPATH_THEMES.'/'.$app->getTemplate().'/'.'wright'.'/'.'html'.'/'.'overrider.php');
include(Overrider::getOverride('com_content.category','blog'));
?>

