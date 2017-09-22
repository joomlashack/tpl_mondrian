<?php
/**
 * @package     Wright
 * @subpackage  TemplateBase
 *
 * @copyright   Copyright (C) 2005 - 2014 Joomlashack. Meritage Assets.  All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// Restrict Access to within Joomla
defined('_JEXEC') or die('Restricted access');

require_once dirname(__FILE__) . '/wright/template/wrighttemplatebase.php';

/**
 * WrightTemplate class, for special settings on Wright
 *
 * @package     Wright
 * @subpackage  TemplateBase
 * @since       3.0
 */
class WrightTemplate extends WrightTemplateBase
{
	public $templateName = '{templateName}';

	public $documentationLink = '{documentationLink}';

	public $menuPositions = Array('toolbar','menu','bottom-menu','floating-menu');  
}
