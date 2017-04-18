<?php 
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>
	
	<div class="clear"></div>

	<div id="main-content-container" class="grid_16">
		<div id="main-content-inner">
		
			<?php  
			$a = new Area('Main');
			$a->display($c);
			?>
			
		</div>
	
	</div>

	
<?php  $this->inc('elements/footer.php'); ?>
