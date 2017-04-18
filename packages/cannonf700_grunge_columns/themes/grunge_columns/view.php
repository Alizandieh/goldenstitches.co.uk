<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header.php');
?>

	<div class="columnzone">
    	<div class="full_columnbg">
		<div class="full_column">
			<div class="columncontent">
            <?php 
         	$a = new Area('Main');
         	$a->display($c);
         	?>
            <br />
			<?php  
			print $innerContent;
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