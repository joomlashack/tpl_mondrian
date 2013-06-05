<?php
/**
 * @copyright	Copyright (C) 2005 - 2013 Joomlashack / Meritage Assets
 * @author		Joomlashack / Meritage Assets
 * @package		Wright
 *
 * Use this file to add any PHP to the template before it is executed
 */
 
// Restrict Access to within Joomla
defined('_JEXEC') or die('Restricted access');

// WrightTemplate class, for special settings on Wright
class WrightTemplate extends WrightTemplateBase {
}

$wrightTemplate = WrightTemplate::getInstance();

// get the bootstrap row mode ( row / row-fluid )
$gridMode = $this->params->get('bs_rowmode','row');
$containerClass = ($gridMode == 'row-fluid' ? 'container-fluid' : 'container');
$fixedClass = ($gridMode == 'row-fluid' ? '' : ' fixed');

$bodyclass = "";
if ($this->countModules('toolbar')) {
    $bodyclass = "toolbarpadding";
}

$responsivePage = ($this->params->get('responsive','1') == '1' ? true : false);
$responsive = ($responsivePage ? ' responsive' : ' no-responsive');

$mondrianFullWidthBg = ($this->params->get('mondrian_full_width_background','0') == '1' ? true : false);
$mondrianFtBlogClass = ($mondrianFullWidthBg ? ' mondrianFtBlog' : '');

$sidebarExists = (JModuleHelper::getModules('sidebar1') || JModuleHelper::getModules('sidebar2'));  // check if there's a sidebar at all

$mondrianLogoAbsolute = ($this->params->get('mondrian_logo_on_featured','0') == '1' ? true : false);
$mondrianGridTopBackground = $this->params->get('mondrian_grid_top_background_color','color_six');
$mondrianGridTop2Background = $this->params->get('mondrian_grid_top2_background_color','color_six');
$mondrianGridTop3Background = $this->params->get('mondrian_grid_top3_background_color','color_six');


$gridTopBackground = ' ' . $mondrianGridTopBackground;
$gridTop2Background = ' ' . $mondrianGridTop2Background;
$gridTop3Background = ' ' . $mondrianGridTop3Background;

$mondrianToolbarDisplayed = ($this->params->get('mondrian_toolbar_displayed','1') == '1' ? true : false);
$mondrianToolbarDisplayedClass = ($mondrianToolbarDisplayed ? ' toolbarDisplayed' : '');


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
