<?php  
defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header.php'); ?>
<div id="outer">
	<div id="header">
			<!-- <h1><a href="<?php       echo DIR_REL?>/"><?php      
				$block = Block::getByName('My_Site_Name');
				if($block && $block->bID) $block->display();
				else echo SITE;?></a>
			</h1> -->
	</div>
	<div id="menu"></div>
    <div id="xbg1">
			<?php 
                $a = new Area('Header Nav');
                $a->display($c);
            ?> 
    </div>
	<div id="content">
		
		<div id="primaryContentContainer">
			<div id="primaryContent">
				<p><?php 
    $a = new Area('Main');
    $a->display($c);
?></p>
			</div>
		</div>
		<div id="secondaryContent">
			<p><?php 
    $a = new Area('Sidebar');
    $a->display($c);
?></p>
		</div>
		<div class="clear"></div>
	</div>
    <?php      $this->inc('elements/footer.php'); ?>
