<?php
/**
 * @package     Mondrian
 * @subpackage  Template File
 *
 * @copyright   Copyright (C) 2005 - 2013 Joomlashack. Meritage Assets.  All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 *
 * Do not edit this file directly. You can copy it and create a new file called
 * 'custom.php' in the same folder, and it will override this file. That way
 * if you update the template ever, your changes will not be lost.
 */
// no direct access

defined('_JEXEC') or die('Restricted access');

?>
<doctype>
<html>
<head>
    
<w:head />
</head>
<body class="<?php if ($bodyclass != "") { echo $bodyclass . $responsive;  } ?> <?php echo $mondrianFtBlogClass . $fixedClass; ?>">
    <?php if ($this->countModules('toolbar')) : ?>
        <!-- toolbar -->
        <?php if (!$mondrianToolbarDisplayed) : ?>
            <div class="mondrianToolbarSwitch"></div>
        <?php endif; ?>
        <div class="wrappToolbar<?php echo ($mondrianToolbarDisplayed ? '' : ' collapsedToolbar'); ?>">
            <w:nav containerClass="<?php echo $containerClass ?> mondrian-toolbar-container<?php echo ($mondrianToolbarDisplayed ? '' : ' collapsedToolbarInner'); ?>" rowClass="<?php echo $gridMode;?>" wrapClass="navbar-fixed-top" type="toolbar" name="toolbar" />
        </div>
    <?php endif; ?>
    <?php if ($this->countModules('floating-menu')) : ?>
        <div class="mondrianFloatingContainer">
            <div class="mondrianFloatingToggle" data-toggle="collapse" data-target=".mondrianFloatingModule"></div>
            <div class="mondrianFloatingModule collapse">
                <w:module type="none" name="floating-menu" chrome="xhtml" />
            </div>
        </div>
    <?php endif; ?>
    <div class="mondrian-main">
        <!-- header -->
            <header id="header" class="<?php if ($mondrianLogoAbsolute): ?>header-absolute<?php endif; ?>">
                <div class="<?php echo $containerClass ?>">
                    <div class="<?php echo $gridMode; ?> clearfix wrapp-logo">
                        <w:logo name="top" type="xhtml"/>
                    </div>
                </div>
            </header>

        <?php if ($this->countModules('menu')) : ?>
        <!-- menu -->
                <w:nav containerClass="<?php echo $containerClass ?>" rowClass="<?php echo $gridMode;?>" name="menu" />
        <?php endif; ?>
        
        <!-- featured -->
        <?php if ($this->countModules('featured')) : ?>
            <div id="featured">
                <w:module type="none" name="featured" chrome="xhtml" />
            </div>
        <?php endif; ?>
        <!-- grid-top -->
        <?php if ($this->countModules('grid-top')) : ?>
            <div id="grid-top" class="<?php echo $gridTopBackground; ?>">
                <div class="<?php echo $containerClass; ?>">
                    <w:module type="row-fluid" name="grid-top" chrome="wrightflexgrid" />
                </div>
            </div>
        <?php endif; ?>
        <?php if ($this->countModules('grid-top2')) : ?>
        <!-- grid-top2 -->
            <div id="grid-top2" class="<?php echo $gridTop2Background; ?>">
                <div class="<?php echo $containerClass; ?>">
                    <w:module type="row-fluid" name="grid-top2" chrome="wrightflexgrid" />
                </div>
            </div>
        <?php endif; ?>
        <div class="<?php echo $mainContainer;?> main-wrapp">
            <div id="main-content" class="<?php echo $mainGridMode; ?>">
                <!-- sidebar1 -->
                <aside id="sidebar1" class="mondrian-col">
                    <w:module name="sidebar1" chrome="xhtml" />
                </aside>
                <!-- main -->
                <section id="main" class="mondrian-col">
                    <?php if ($this->countModules('above-content') || $this->countModules('breadcrumbs')) : ?>
                        <?php if ($mainComplementContainer != '') : ?>

                            <div class="<?php echo $mainComplementContainer ?>">
                                    <div class="<?php echo $mainComplementGridMode ?>">
                                        <div class="<?php echo $mainComplementSpan ?>">
                            <?php endif; ?>

                                        <?php if ($this->countModules('above-content')) : ?>
                                        <!-- above-content -->
                                            <div id="above-content">
                                                <w:module type="none" name="above-content" chrome="xhtml" />
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($this->countModules('breadcrumbs')) : ?>
                                            <!-- breadcrumbs -->
                                            <div id="breadcrumbs">
                                                <w:module type="single" name="breadcrumbs" chrome="none" />
                                            </div>
                                        <?php endif; ?>
                            <?php if ($mainComplementContainer != '') : ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>

                    <!-- component -->
                    <w:content />

                    <?php if ($this->countModules('below-content')) : ?>
                    <!-- below-content -->
                        <?php if ($mainComplementContainer != '') : ?>
                        <div class="<?php echo $mainComplementContainer ?>">
                                <div class="<?php echo $mainComplementGridMode ?>">
                                    <div class="<?php echo $mainComplementSpan ?>">
                        <?php endif; ?>
                            <div id="below-content">
                                <w:module type="none" name="below-content" chrome="xhtml" />
                            </div>
                            
                        <?php if ($mainComplementContainer != '') : ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php endif; ?>
                </section>
                <!-- sidebar2 -->
                <aside id="sidebar2" class="mondrian-col">
                    <w:module name="sidebar2" chrome="xhtml" />
                </aside>
            </div>
        </div>
        <?php if ($this->countModules('grid-bottom')) : ?>
        <!-- grid-bottom -->
        <div id="grid-bottom" class="<?php echo $gridBottomBackground; ?>">
            <div class="<?php echo $containerClass; ?>">
                <w:module type="row-fluid" name="grid-bottom" chrome="wrightflexgrid" />
            </div>
        </div>
        <?php endif; ?>
        <?php if ($this->countModules('grid-bottom2')) : ?>
            <!-- grid-bottom2 -->
            <div id="grid-bottom2" >
                <div class="<?php echo $containerClass; ?>">
                    <div class="bd-grid-bottom2"></div>
                    <div class="grid-bottom2-inner">
                        <w:module type="row-fluid" name="grid-bottom2" chrome="wrightflexgrid" />
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if ($this->countModules('bottom-menu')) : ?>
        <!-- bottom-menu -->
                <w:nav containerClass="<?php echo $containerClass ?>" rowClass="<?php echo $gridMode;?>" name="bottom-menu" />
        <?php endif; ?>
    </div>

    <!-- footer -->
    <div class="wrapper-footer">
        <footer id="footer" class="<?php if ($this->params->get('stickyFooter',1)) : ?> sticky<?php endif;?>">
             <div class="<?php echo $containerClass; ?> footer-inner">
                 <?php if ($this->countModules('footer')) : ?>
                     <w:module type="row-fluid" name="footer" chrome="wrightflexgrid" />
                  <?php endif; ?>
                 <w:footer />
             </div>
        </footer>
    </div>

    <?php if(!$mondrianToolbarDisplayed): ?>
        <script type='text/javascript' src='<?php echo JURI::root(true) ?>/templates/js_mondrian/js/mondrian.js'></script>
    <?php endif; ?>
</body>
</html>
