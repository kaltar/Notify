<?php foreach ($msgs as $msg_type => $msgs_of_type): ?>
	<?php 
	switch ($msg_type) 
	{
		case 'error':
			$class	= 'error';
			$icon	= 'cross.png';
		break;
		case 'success':
			$class	= 'success';
			$icon	= 'tick.png';
		break;
		default:
			$class	= 'notice';
			$icon	= 'information.png';
		break;
	}
	?>
	<p class="<?php echo $class; ?>"><img src="http://bluetrip.org/sites/bluetrip.org/themes/starkish/demo/img/icons/<?php echo $icon; ?>" alt="" style="padding-right: 10px;"/><?php echo implode('<br>',$msgs_of_type);?>.</p>
<?php endforeach ?>
