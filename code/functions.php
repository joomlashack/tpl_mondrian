<?php
/**
 * @package     Mondrian
 * @subpackage  Functions
 *
 * @copyright   Copyright (C) 2005 - 2013 Joomlashack. Meritage Assets.  All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// Restrict Access to within Joomla
defined('_JEXEC') or die('Restricted access');

$wrightTemplate = WrightTemplate::getInstance();

// get the bootstrap row mode ( row / row-fluid )
$gridMode = $this->params->get('bs_rowmode','row');
$containerClass = ($gridMode == 'row-fluid' ? 'container-fluid' : 'container');
$fixedClass = ($gridMode == 'row-fluid' ? '' : ' fixed');


$responsivePage = ($this->params->get('responsive','1') == '1' ? true : false);
$responsive = ($responsivePage ? ' responsive' : ' no-responsive');

$mondrianFullWidthBg = ($this->params->get('mondrian_full_width_background','0') == '1' ? true : false);
$mondrianFtBlogClass = ($mondrianFullWidthBg ? ' mondrianFtBlog' : '');

$sidebarExists = (JModuleHelper::getModules('sidebar1') || JModuleHelper::getModules('sidebar2'));  // check if there's a sidebar at all

$mondrianLogoAbsolute = ($this->params->get('mondrian_logo_on_featured','0') == '1' ? true : false);

$mondrianToolbarDisplayed = ($this->params->get('mondrian_toolbar_displayed','1') == '1' ? true : false);
$mondrianToolbarDisplayedClass = ($mondrianToolbarDisplayed == true ? ' toolbarDisplayed' : ' toolbarNoDisplayed');

$mainContainer = $containerClass;
$mainGridMode = $gridMode;
$mainSpan = 'span12';

$mainComplementContainer = '';
$mainComplementGridMode = '';
$mainComplementSpan = '';

if ($mondrianFullWidthBg && $sidebarExists == '') {
    $mainContainer = '';
    $mainGridMode = '';
    $mainSpan = '';
    $wrightTemplate->useMainSpans = false;
    $mainComplementContainer = $containerClass;
    $mainComplementGridMode = $gridMode;
    $mainComplementSpan = 'span12';
}
