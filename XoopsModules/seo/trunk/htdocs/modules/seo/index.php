<?php
	include (dirname(dirname(dirname(__FILE__))).'/mainfile.php');
	$mapping_handler = xoops_getmodulehandler('mapping', 'seo');
	require($mapping_handler->getTarget());
?>