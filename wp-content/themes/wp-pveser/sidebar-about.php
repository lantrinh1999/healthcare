<?php 
$s_b_ = get_field('sidebar_banner', 'option');

?>

<?php if (!empty($s_b_['banner_1'])): ?>
	<div class="left_banner left-sidebar-widget mt_30 mb_50"> 
		<a href="<?= !empty($s_b_['link_1']) ? $s_b_['link_1'] : '#' ?>"><img src="<?= $s_b_['banner_1'] ?>" alt="Left Banner" class="img-responsive" /></a> 
	</div>
<?php endif ?>





</div>