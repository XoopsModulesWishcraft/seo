<?php

defined('XOOPS_ROOT_PATH') or die('Restricted access');

class SeoRewritePreload extends XoopsPreloadItem
{
	function eventCoreHeaderStart($args)
    {
   		$mapping_handler = xoops_getmodulehandler('mapping', 'seo');
		$url = $mapping_handler->getUrl();
   		if (!strpos($url, $_SERVER['REQUEST_URI'])&&!empty($url)&&empty($_POST)) {
			header( "HTTP/1.1 301 Moved Permanently" ); 
			header( "Location: ".$url);
			exit;
		}
    }
    
}
?>