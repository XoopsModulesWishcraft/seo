<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 * Seo header file
 * Manage content page
 *
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package     seo
 * @since       2.5.5
 * @author      Andricq Nicolas (AKA MusS)
 * @version     $Id: 1.02 header.php 11699 2013-05-19 14:13:12Z timgno $
 */
require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/include/cp_header.php';

$modsDirname = basename(dirname(dirname(__FILE__)));

$pathModAdmin = $GLOBALS['xoops']->path('/Frameworks/moduleclasses/moduleadmin/moduleadmin.php');
if ( file_exists($pathModAdmin)){
   include_once $pathModAdmin;
   //return true;
}else{
   redirect_header("../../../admin.php", 5, _AM_MODULEADMIN_MISSING, false); 
   //return false;
}
if (!isset($xoopsTpl) || !is_object($xoopsTpl)) {
	include_once(XOOPS_ROOT_PATH . '/class/template.php');
	$xoopsTpl = new XoopsTpl();
}

xoops_load('xoopsformloader');
$module_handler = xoops_gethandler('module');
$thisModule = $module_handler->getByDirname(basename(dirname(dirname(__FILE__))));
// Icons path
$pathIcon16 = '../../../' . $thisModule->getInfo('icons16');
$pathIcon32 = '../../../' . $thisModule->getInfo('icons32');
// Assign icons path
$xoopsTpl->assign('pathIcon16', $pathIcon16);
$xoopsTpl->assign('pathIcon32', $pathIcon32);