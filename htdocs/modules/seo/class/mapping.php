<?php
	
	class SeoMapping extends XoopsObject
	{
		// Searches for Indication that this is the mapping method
		private function isMappingType($method, $lookfor) {
			$num = 0;
			foreach($lookfor as $key => $value) {
				if (is_array($value)) {
					if ($this->isMappingType($method, $value)==true)
						return true;
				} else {
					switch(strtolower($method)) {
						case 'get':
							if (isset($_GET[$key]))
								if ($_GET[$key] == $value) 
									$num++;
							break;
						case 'post':
							if (isset($_POST[$key]))
								if ($_POST[$key] == $value) 
									$num++;
							break;
						default:
						case 'request':
							if (isset($_REQUEST[$key]))
								if ($_REQUEST[$key] == $value) 
									$num++;
							break;
					}
				}
			}	
			if ($num == count($lookfor)) return true;
			return false;
		}
		
		function getSprintfMask($map, $args, $bouri, $index, $eof= '.html') {
			switch (strtoupper($map)) {
				case 'A':
					return sprintf("/%s/%s/%s/%s/%s/%s-%s-%s%s", $bouri, $index, $args[0], $args[1], $args[2], $args[3], $args[4], $args[5], $eof);
					break;
				case 'B':
					return sprintf("/%s/%s/%s/%s/%s-%s-%s-%s%s", $bouri, $index, $args[0], $args[1], $args[2], $args[3], $args[4], $args[5], $eof);
					break;
				case 'C':
					return sprintf("/%s/%s/%s/%s-%s-%s-%s-%s%s", $bouri, $index, $args[0], $args[1], $args[2], $args[3], $args[4], $args[5], $eof);
					break;
				case 'D':
					return sprintf("/%s/%s/%s-%s-%s-%s-%s-%s%s", $bouri, $index, $args[0], $args[1], $args[2], $args[3], $args[4], $args[5], $eof);
					break;
				case 'E':
					return sprintf("/%s/%s/%s/%s/%s/%s-%s-%s%s", $bouri, $index, $args[0], $args[1], $args[2], $args[3], $args[4], $args[5], $eof);
					break;
				case 'F':
					return sprintf("/%s/%s/%s/%s/%s-%s-%s-%s%s", $bouri, $index, $args[0], $args[1], $args[2], $args[3], $args[4], $args[5], $eof);
					break;
				case 'G':
					return sprintf("/%s/%s/%s/%s-%s-%s-%s-%s%s", $bouri, $index, $args[0], $args[1], $args[2], $args[3], $args[4], $args[5], $eof);
					break;
				case 'H':
					return sprintf("/%s/%s/%s-%s-%s-%s-%s-%s%s", $bouri, $index, $args[0], $args[1], $args[2], $args[3], $args[4], $args[5], $eof);
					break;
				case 'I':
					return sprintf("/%s/%s/%s/%s/%s/%s-%s-%s%s", $bouri, $index, $args[0], $args[1], $args[2], $args[3], $args[4], $args[5], $eof);
					break;
				case 'J':
					return sprintf("/%s/%s/%s/%s/%s-%s-%s-%s%s", $bouri, $index, $args[0], $args[1], $args[2], $args[3], $args[4], $args[5], $eof);
					break;
				case 'K':
					return sprintf("/%s/%s/%s/%s-%s-%s-%s-%s%s", $bouri, $index, $args[0], $args[1], $args[2], $args[3], $args[4], $args[5], $eof);
					break;
				case 'L':
					return sprintf("/%s/%s/%s-%s-%s-%s-%s-%s%s", $bouri, $index, $args[0], $args[1], $args[2], $args[3], $args[4], $args[5], $eof);
					break;
				case 'M':
					return sprintf("/%s/%s/%s-%s/%s-%s/%s-%s/%s%s", $bouri, $index, $args[0], $args[1], $args[2], $args[3], $args[4], $args[5], $eof);
					break;
				case 'N':
					return sprintf("/%s/%s/%s-%s/%s-%s/%s-%s%s", $bouri, $index, $args[0], $args[1], $args[2], $args[3], $args[4], $args[5], $eof);
					break;
				case 'O':
					return sprintf("/%s/%s/%s-%s/%s-%s-%s-%s%s", $bouri, $index, $args[0], $args[1], $args[2], $args[3], $args[4], $args[5], $eof);
					break;
				case 'P':
					return sprintf("/%s/%s/%s-%s-%s-%s-%s-%s%s", $bouri, $index, $args[0], $args[1], $args[2], $args[3], $args[4], $args[5], $eof);
					break;
				case 'Q':
					return sprintf("/%s/%s/%s/%s/%s/%s-%s-%s%s", $bouri, $index, $args[0], $args[1], $args[2], $args[3], $args[4], $args[5], $eof);
					break;
				case 'R':
					return sprintf("/%s/%s/%s/%s/%s-%s-%s-%s%s", $bouri, $index, $args[0], $args[1], $args[2], $args[3], $args[4], $args[5], $eof);
					break;
				case 'S':
					return sprintf("/%s/%s/%s/%s/%s/%s-%s-%s-%s%s", $bouri, $index, $args[0], $args[1], $args[2], $args[3], $args[4], $args[5], $eof);
					break;
				case 'T':
					return sprintf("/%s/%s/%s/%s/%s-%s-%s%s", $bouri, $index, $args[0], $args[1], $args[2], $args[3], $args[4], $args[5], $eof);
					break;
				case 'U':
					return sprintf("/%s/%s/%s/%s-%s-%s%s", $bouri, $index, $args[0], $args[1], $args[2], $args[3], $eof);
					break;
				case 'V':
					return sprintf("/%s/%s/%s-%s-%s%s", $bouri, $index, $args[0], $args[1], $args[2], $args[3], $eof);
					break;
				case 'W':
					return sprintf("/%s/%s/%s-%s-%s-%s-%s%s", $bouri, $index, $args[0], $args[1], $args[2], $args[3], $args[4], $args[5], $eof);
					break;
				case 'X':
					return sprintf("/%s/%s/%s-%s-%s-%s%s", $bouri, $index, $args[0], $args[1], $args[2], $args[3], $args[4], $eof);
					break;
				case 'Y':				
					return sprintf("/%s/%s/%s-%s-%s%s", $bouri, $index, $args[0], $args[1], $args[2], $args[3], $eof);
					break;
				case 'Z':
					return sprintf("/%s/%s/%s-%s%s", $bouri, $index, $args[0], $args[1], $eof);
					break;
			}
		}
		
		function getDetectedURL($map, $child) {
			$source_path = 'modules'.DS.$child->_mod_dirname.DS;
			if (strpos($_SERVER['PHP_SELF'], $source_path)>0) {
				$start = strpos($_SERVER['PHP_SELF'], $source_path)+strlen($source_path);
				$file = substr($_SERVER['PHP_SELF'], $start, strlen($_SERVER['PHP_SELF'])-$start);
				foreach($map as $mapid => $mapping) {
					if (isset($mapping[$file])&&is_array($mapping[$file])) {
						if ($this->isMappingType($mapping[$file]['method'], $mapping[$file]['this'])) {
							$args = array();
							foreach($child->{$mapping[$file]['function']}() as $key => $value) {
								if (!empty($value))
									$args[] = $value;
								else 
									$args[] = '0';
							}
						}
						$var = '_endofurl_'.$mapping['type'];
						return XOOPS_URL.$this->getSprintfMask($mapping['rewrite'], $args, $child->_baseurl, substr(md5($mapid.$file),0,10), $child->{$var});
					}
				}	
			}	
			return $_SERVER['REQUEST_URI'];
		}
		
		function setDetectedVariables($map, $child, $plot) {
			foreach($map as $mapid => $mapping) {
				foreach($mapping as $file => $map) {
					if ($plot == substr(md5($mapid.$file),0,10)) {
						foreach($map['map'] as $var => $from) {
							switch(strtolower($mapping[$file]['method'])) {
							case 'get':
							case 'request':
							default:
								if (isset($_GET[$from]))
									$_GET[$var] = $_GET[$from];
								break;
							case 'post':
								if (isset($_GET[$from]))
									$_POST[$var] = $_GET[$from];
								break;
							}
						}
						return DS.'modules'.DS.$child->_mod_dirname.DS.$file;
					}
				}
			}
		}
	}
	
	class SeoMappingHandler extends XoopsPersistableObjectHandler {

		// Realative Path Plugin Files
		var $_plugin_path = '/modules/seo/plugins/';
		
		// List of All Plugin Files
		var $_plugins = array();

		// List of All Objects of Plugin Files
		var $_obj_plugins = array();
		
		function __construct($db) {
			xoops_load('XoopsLists');
			foreach(XoopsLists::getFileListAsArray($GLOBALS['xoops']->path($this->_plugin_path)) as $file) {
				if (substr($file, strlen($file)-4, 4) = '.php') {
					$this->_plugins[substr($file, 0, strlen($file)-4)] = $file;					
				}
			}
			foreach($this->_plugins as $key => $file) {
				include_once($GLOBALS['xoops']->path($this->_plugin_path.$file));
				$class = ucfirst($key).'SeoPlugin';
				if (class_exists($class))
					$this->_obj_plugins[$key] = new $class; 
			}
		}
		
		function getURL() {
			if (is_object($GLOBALS['xoopsModule']))
				if ($GLOBALS['xoopsModule']->getVar('dirname')!='seo') {
					foreach($this->_obj_plugins as $key => $object) {
						if ($object->_mod_dirname == $GLOBALS['xoopsModule']->getVar('dirname')) {
							return $object->getURL();
						}
					}
				}	
			return $_SERVER['REQUEST_URI'];		
		}
		
		function getTarget() {
			if (is_object($GLOBALS['xoopsModule']))
				if ($GLOBALS['xoopsModule']->getVar('dirname')=='seo') {
					foreach($this->_obj_plugins as $key => $object) {
						if ($object->_baseurl == $_GET['baseurl']) {
							if ($target = $object->getTarget()) {
								return $GLOBALS['xoops']->path($target);
							}
						}
					}
				}	
			return $GLOBALS['xoops']->path('/index.php');		
		}
	}