<?php
	defined('_JEXEC') or die('Restricted access');

	$app      	= JFactory::getApplication();
	$doc      	= JFactory::getDocument();
	$menu 		= $app->getMenu();
	$params		= $app->getTemplate(true)->params;
	$config 	= JFactory::getConfig();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" 
   xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
   <head>
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<div class="container">
			<div class="top"><jdoc:include type="modules" name="top" /></div>
			<div class="nav"><jdoc:include type="modules" name="nav" /></div>
			<div class="content">
				<div class="messages"><jdoc:include type="message" /></div>
				<div class="content-top"><jdoc:include type="modules" name="content-top" /></div>
				<div class="component"><jdoc:include type="component" /></div>
				<div class="content-bottom"><jdoc:include type="modules" name="content-bottom" /></div>
			</div>
			<div class="footer"><jdoc:include type="modules" name="footer" /></div>
		</div>
	</body>
</html>
