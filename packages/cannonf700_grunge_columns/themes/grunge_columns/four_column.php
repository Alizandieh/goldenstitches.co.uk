<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header.php');
?>
	
	<div class="columnzone">
    	<div class="four_columnbg">
		<div class="column1">
			<div class="columncontent">
				<?php 
         	$a = new Area('Sidebar');
         	$a->display($c);
         	?>
			</div>
		</div>
		<div class="column2">
			<div class="columncontent">
			  <?php 
         	$a = new Area('Main');
         	$a->display($c);
         	?>

			</div>
		</div>
		<div class="column3">
			<div class="columncontent">
			  <?php 
         	$a = new Area('Column3');
         	$a->display($c);
         	?>
			</div>
		</div>
		<div class="column4">
			<div class="columncontent">
			  <?php 
         	$a = new Area('Column4');
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