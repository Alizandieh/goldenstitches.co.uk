<?php  
defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header.php'); ?>
<div id="outer">
	<div id="header">
			<h1><a href="<?php       echo DIR_REL?>/"><?php      
				$block = Block::getByName('My_Site_Name');
				if($block && $block->bID) $block->display();
				else echo SITE;?></a>
			</h1>
		<h2><?php 
    $a = new Area('Slogan');
    $a->display($c);
?></h2>
	</div>
	<div id="menu">
		<ul>
<?php 
    $a = new Area('Header Nav');
    $a->display($c);
?>
		</ul>
	</div>
	<div id="content">
		<div id="xbg1"></div>
		<div id="primaryContentContainer">
			<div id="primaryContent">
				<p><?php 
print $innerContent;
?> 	</p>
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
