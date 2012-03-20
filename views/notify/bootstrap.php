<?php defined('SYSPATH') or die('No direct script access.');
// Notify module view for Twitter Bootstrap 2.0
foreach ($msgs as $msg_type => $msgs_of_type):
    $class = NULL;
    if (in_array($msg_type, array('success', 'warning', 'info', 'error'))) {
        $class = ' alert-' . $msg_type;
    }?>
<div class="alert alert-block fade in<?=$class ?>">
    <a class="close" href="#" data-dismiss="alert">×</a>
    <?=count($msgs_of_type) ? implode("<br />\n", $msgs_of_type) : $msgs_of_type?>
</div>
<? endforeach ?>
