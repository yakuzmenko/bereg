<?php
/**
 * @version		$Id: index.php 21720 2011-07-01 08:31:15Z chdemko $
 * @package		Joomla.Site
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/* The following line loads the MooTools JavaScript Library */
JHtml::_('behavior.framework', true);

/* The following line gets the application object for things like displaying the site name */
$app = JFactory::getApplication();
?>
<?php echo '<?'; ?>xml version="1.0" encoding="<?php echo $this->_charset ?>"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
	<head>
		<!-- The following JDOC Head tag loads all the header and meta information from your site config and content. -->
		<jdoc:include type="head" />

		<!-- The following five lines load the Blueprint CSS Framework (http://blueprintcss.org). If you don't want to use this framework, delete these lines. -->
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/blueprint/screen.css" type="text/css" media="screen, projection" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/blueprint/print.css" type="text/css" media="print" />

		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/blueprint/plugins/fancy-type/screen.css" type="text/css" media="screen, projection" />
    	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/blueprint/plugins/joomla-nav/screen.css" type="text/css" media="screen" />

		<!-- The following line loads the template CSS file located in the template folder. -->
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />

		<!-- The following four lines load the Blueprint CSS Framework and the template CSS file for right-to-left languages. If you don't want to use these, delete these lines. -->
		<?php if($this->direction == 'rtl') : ?>
			<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/blueprint/plugins/rtl/screen.css" type="text/css" />
			<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template_rtl.css" type="text/css" />
		<?php endif; ?>

		<!-- The following line loads the template JavaScript file located in the template folder. It's blank by default. -->
        
	</head>
	<body>
		<div class="container">
			<div class="joomla-header span-16 append-1">
				<h1><?php echo $app->getCfg('sitename'); ?></h1>
			</div>
			<?php if($this->countModules('atomic-search')) : ?>
				<div class="joomla-search span-7 last">
	  	 			<jdoc:include type="modules" name="atomic-search" style="none" />
				</div>
			<?php endif; ?>
		</div>
		<?php if($this->countModules('position-0')) : ?>
		   <div class="levy">
            <img alt="" src="/templates/atomic/images/levy.png" />
            </div>
			<jdoc:include type="modules" name="position-0" style="container" />
            <div class="pravy">
            <img alt="" src="/templates/atomic/images/pravy.png" />
            </div>
		<?php endif; ?>

		<div class="container">
			<div class="span-16 append-1">
			<?php if($this->countModules('atomic-topquote')) : ?>
				<jdoc:include type="modules" name="atomic-topquote" style="none" />
			<?php endif; ?>
				<jdoc:include type="message" />
				<jdoc:include type="component" />
				<hr />
			<?php if($this->countModules('atomic-bottomleft')) : ?>
			 	<div class="span-7 colborder">
					<jdoc:include type="modules" name="atomic-bottomleft" style="bottommodule" />
	        	</div>
	        <?php endif; ?>

	        <?php if($this->countModules('atomic-bottommiddle')) : ?>
				<div class="span-7 last">
	        		<jdoc:include type="modules" name="atomic-bottommiddle" style="bottommodule" />
				</div>
			<?php endif; ?>
			</div>
			<?php if($this->countModules('atomic-sidebar')) : ?>
				<div class="span-7 last">
	        		<jdoc:include type="modules" name="atomic-sidebar" style="sidebar" />
				</div>
			<?php endif; ?>

			<div class="joomla-footer span-16 append-1">
				<hr />
				&copy;<?php echo date('Y'); ?> <?php echo $app->getCfg('sitename'); ?>
			</div>
		</div>
	</body>
</html>
