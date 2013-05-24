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

$gridMode = $template->params->get('bs_rowmode','row-fluid');
$mondrianFullWidthContent = $template->params->get('mondrian_full_width_content','1');

$this->wrightLeadingExtraClass = "container-fluid";
$this->wrightIntroItemsClass = "container-fluid";

if ($gridMode == "row" and $mondrianFullWidthContent) {
	$this->wrightLeadingExtraClass = "container";
	$this->wrightIntroItemsClass = " container";
	$this->wrightLeadingItemElementsStructure = Array(
		'image',
		'article-info',
		'div.leading-content',
			'icons',
			'title',
			'content',
		'/div'
	);
}

require_once(JPATH_THEMES.'/'.$app->getTemplate().'/'.'wright'.'/'.'html'.'/'.'overrider.php');
include(Overrider::getOverride('com_content.category','blog'));
?>