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
			    <?php 
         	$a = new Area('Main');
         	$a->display($c);
         	?>
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