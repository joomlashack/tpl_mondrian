<?php
/**
 * @package     Oficina
 * @subpackage  Component
 *
 * @copyright   Copyright (C) 2005 - 2013 Joomlashack. Meritage Assets.  All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined( '_JEXEC' ) or die( 'Restricted access' );

$lang = JFactory::getLanguage();
$tag = $lang->getTag();
$dir = ($lang->isRTL() ? "rtl" : "ltr");

?>
<!DOCTYPE html>
<html lang="<?php echo $tag ?>" dir="<?php echo $dir ?>">
<head>
<jdoc:include type="head" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/wright/css/template.css.php" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/wright/css/template-responsive.css.php" type="text/css" />
</head>
<body class="contentpane">
	<jdoc:include type="message" />
	<jdoc:include type="component" />
</body>
</html>
