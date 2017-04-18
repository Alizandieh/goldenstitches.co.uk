<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header.php');
?>

	<div class="columnzone">
    	<div class="left_sidebarbg">
		<div class="column1">
			<div class="columncontent">
				  <?php 
         	$a = new Area('Sidebar');
         	$a->display($c);
         	?>
			</div>
		</div>
		<div class="right_main">
			<div class="columncontent">
			    <div class="pageSection">
				<?php   $ai = new Area('Blog Post Header'); $ai->display($c); ?>
			</div>
			<div class="pageSection">
				<h1><?php   echo $c->getCollectionName(); ?></h1>
				<p class="meta"><?php   echo t('Posted by')?> <?php   echo $c->getVersionObject()->getVersionAuthorUserName(); ?> on <?php   echo $c->getCollectionDatePublic('F j, Y'); ?></p>		
			</div>
			<div class="pageSection">
				<?php   $as = new Area('Main'); $as->display($c); ?>
			</div>
			<div class="pageSection">
				<?php   $a = new Area('Blog Post More'); $a->display($c); ?>
			</div>
			<div class="pageSection">
				<?php   $ai = new Area('Blog Post Footer'); $ai->display($c); ?>
			</div>
			</div>
		</div>
		<div class="clear"></div>
        </div>
	</div>
  <div class="clear"></div>
	<div class="clear"></div>
<?php 
$this->inc('elements/footer.php');
?>