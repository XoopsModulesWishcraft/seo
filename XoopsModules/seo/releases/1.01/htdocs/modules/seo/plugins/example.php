<?php

	class ExampleSeoPlugin extends SeoMapping 
	{
		// Module Dirname for Plugin
		var $_mod_dirname = 'example';

		// Default Base of URL if not set in module config 
		var $_baseurl = 'example';

		// Default End of URL for HTML
		var $_endofurl_html = '.html';
		
		// Default End of URL for RSS
		var $_endofurl_rss = '.rss';

		// Default End of URL for PDF
		var $_endofurl_pdf = '.pdf';

		// Default End of URL for XML
		var $_endofurl_xml = '.xml';

		// Default End of URL for JPEG
		var $_endofurl_jpg = '.jpg';

		// Default End of URL for PNG
		var $_endofurl_png = '.png';

		// Default End of URL for GIF
		var $_endofurl_gif = '.gif';
		
		// module config variable names for mod rewrite
		var $_mod_vars = 	array(	'baseurl' 		=> 		'_baseurl',
									'endofurl' 		=> 		'_endofurl_html',
									'endofurl_rss' 	=> 		'_endofurl_rss',
									'endofurl_pdf' 	=> 		'_endofurl_pdf',
									'endofurl_xml' 	=> 		'_endofurl_xml',
									'endofurl_jpg' 	=> 		'_endofurl_jpg',
									'endofurl_png' 	=> 		'_endofurl_png',
									'endofurl_gif' 	=> 		'_endofurl_gif');
		
		// module rewrite variable names and file for mod rewrite
		var $_mod_files = 	array(	'A' 	=> 		array('index.php' 	=> 		array(		'type' 		=> 		'html',
																							'rewrite' 	=> 		'A',
																							'method' 	=> 		'get',   /* get/post */
																							'this'		=>		array(	
																														'0'				=>		array('op'	=>	'default'),
																														'1'				=>		array('op'	=>	'index')	
																												),
																							'function' 	=> 		'getIndexVariablesA', 
																							'map' 		=> 		array(	'op'			=>		'arg1', 
																														'cat'			=>		'arg1', 
																														'topic'			=>		'arg3', 
																														'catid'			=>		'arg4', 
																														'subjectid'		=>		'arg5', 
																														'topicid'		=>		'arg6', 
																												 )
																				)
													),
									'B' 	=>		array('index.php' 	=> 		array(		'type' 		=> 		'html',
																							'rewrite' 	=> 		'X',
																							'method' 	=> 		'get',   /* get/post */
																							'this'		=>		array(	'op' 			=>		'category'),
																							'function' 	=> 		'getIndexVariablesX', 
																							'map' 		=> 		array(	'op'			=>		'arg1',
																														'catid'			=>		'arg2', 
																														'start'			=>		'start', 
																														'limit'			=>		'limit')
																				)
													)
							);
		
		
		// module config holder
		var $_mod_config = array();
		
		// module holder
		var $_mod = null;
		
		function __construct()
		{
			$module_handler = xoops_gethandler('module');
			$config_handler = xoops_gethandler('config');
			$this->_mod = $module_handler->getByDirname($this->_mod_dirname);
			if (is_object($this->_mod)) 
			{ 
				$this->_mod_config = $config_handler->getConfigList($this->_mod->getVar('mid'));
				foreach($this->_mod_config as $key => $value) 
				{
					if (in_array($key, array_keys($this->_mod_vars))&&!empty($value))
					{
						$this->${$this->_mod_vars[$key]} = $value;	
					}	 
				}
				return $this;
			} else {
				return false;
			}
		}

		// Required Default Function for getting population URL		
		function getURL() 
		{
			return $this->getDetectedURL($this->_mod_files, $this);
		}
		
		// Required Default Function for getting population target
		function getTarget() 
		{
			return $this->setDetectedVariables($this->_mod_files, $this, $_GET['plot']);
		}
		
		// Function to return arguments in order for Rewritemodule A
		function getIndexVariablesA() {
			// Normally would access modules classes to find names of categories, items etc for arguments.
			return array(	'arg1' => 'someone', 
							'arg2' => 'something', 
							'arg3' => 'somemore', 
							'arg4' => '1',
							'arg5' => '10', 
							'arg6' => '1');
		}
		
		// Function to return arguments in order for Rewritemodule X
		function getIndexVariablesX() {
			// Normally would access modules classes to find names of categories, items etc for arguments.
			return array(	'arg1' => '11', 
							'arg2' => '3', 
							'arg3' => '0', 
							'arg4' => '10');
		}
		
	}