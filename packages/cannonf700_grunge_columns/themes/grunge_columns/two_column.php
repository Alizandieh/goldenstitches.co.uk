<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header.php');
?>
	
	<div class="columnzone">
    	<div class="two_columnbg">
		<div class="left_column">
			<div class="columncontent">
				<?php 
         	$a = new Area('Sidebar');
         	$a->display($c);
         	?>
			</div>
		</div>
		<div class="right_column">
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
