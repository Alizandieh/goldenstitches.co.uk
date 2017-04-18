<?php       defined('C5_EXECUTE') or die(_("Access Denied.")); ?>
	<div id="footer">
		<p><?php 
    $a = new Area('Footer');
    $a->display($c);
?>	
</p>
<p>
158 NEW KING'S ROAD . LONDON . SW6 4LZ<br/>
020 7371 8687<br/>

			&copy; <?php      echo date('Y')?> <a href="<?php      echo DIR_REL?>/"><?php      echo SITE?></a>.
			&nbsp;&nbsp;
			<?php      echo t('All rights reserved.')?>
            <span style="margin-left:10px;">Web developed by <a href="mailto:ali.zandieh@gmail.com">Ali Zandieh</a></span>
			
			
</p>

	</div>
</div>
<?php       Loader::element('footer_required'); ?>

</body>
</html>