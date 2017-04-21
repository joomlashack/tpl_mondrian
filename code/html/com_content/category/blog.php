<?php
/**
 * @package     Mondrian
 * @subpackage  Overrider
 *
 * @copyright   Copyright (C) 2005 - 2013 Joomlashack. Meritage Assets.  All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

$app = JFactory::getApplication();

$template = $app->getTemplate(true);

$sidebarExists = (JModuleHelper::getModules('sidebar1') || JModuleHelper::getModules('sidebar2'));  // check if there's a sidebar at all
$mondrianFullWidthBg = ($template->params->get('mondrian_full_width_background','0') == '1' ? true : false);
$gridMode = $template->params->get('bs_rowmode','row');  // template's gridMode
$containerClass = ($gridMode == 'row-fluid' ? 'container-fluid' : 'container');

$this->wrightLeadingExtraClass = 'full-leading';
if ($mondrianFullWidthBg && !$sidebarExists) {

$this->wrightLeadingItemElementsStructure = Array(
    'div.' . $containerClass,
        'div.' . $gridMode,
            'div.span12',
                'div.leading-content',
                    'title',
                    'icons',
                    'article-info',
                    'image',
                    'legendtop',
                    'content',
                    'legendbottom',
                    'article-info-below',
                    'article-info-split',
                '/div',
            '/div',
        '/div',
    '/div',
);

        $this->wrightIntroItemsClass = $containerClass;  // Class added to the intro articles (adds an extra wrapper)
        $this->wrightIntroRowMode = $gridMode;  // row mode for each row of the intro articles

        $this->wrightComplementOuterClass = $containerClass; // Class added to the complements (links, subcategories and pagination) - adds an extra wrapper for all of them
        $this->wrightComplementExtraClass = $gridMode; // Class added to each complement (links, subcategories and pagination - as blocks).  Adds an extra wrapper before the "Inner" div
        $this->wrightComplementInnerClass = 'span12'; // Class added to each complement (links, subcategories and pagination - as blocks).  Adds an extra wrapper when needed, or uses the existing one if found
}


require_once(JPATH_THEMES.'/'.$app->getTemplate().'/'.'wright'.'/'.'html'.'/'.'overrider.php');
include(Overrider::getOverride('com_content.category','blog'));
?>