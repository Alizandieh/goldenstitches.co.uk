<?php   defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<html lang="<?php echo LANGUAGE?>">

<head>

<?php   Loader::element('header_required'); ?>

<!-- Site Header Content //-->

<link rel="stylesheet" href="<?php  echo $this->getThemePath(); ?>/css/reset.css" />
<link rel="stylesheet" href="<?php  echo $this->getThemePath(); ?>/css/text.css" />
<link rel="stylesheet" href="<?php  echo $this->getThemePath(); ?>/css/960_24_col.css" />
<link rel="stylesheet" media="screen" type="text/css" href="<?php  echo $this->getThemePath(); ?>/main.css" />
<link rel="stylesheet" media="screen" type="text/css" href="<?php  echo $this->getThemePath(); ?>/typography.css" />
<link href='http://fonts.googleapis.com/css?family=Merriweather:400,700,900,300' rel='stylesheet' type='text/css' />


<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript" charset="utf-8"></script> -->


</head>

<body>

<!--start main container -->

<div id="main-container" class="container_24">

	<div id="header">
	
	
		<?php  
		$a = new GlobalArea('Site Name');
		$a->display();
		?>

		<?php  
		$a = new GlobalArea('Header Nav');
		$a->display();
		?>
		
		
	</div>
	
	<div class="clear"></div>
