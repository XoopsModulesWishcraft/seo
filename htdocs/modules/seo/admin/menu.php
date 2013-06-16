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
 * @version     $Id: 1.02 menu.php 11557 2013-05-19 14:13:12Z timgno $
 */
$module_handler =& xoops_gethandler('module');
$xoopsModule =& XoopsModule::getByDirname(basename(dirname(dirname(__FILE__))));
$moduleInfo =& $module_handler->get($xoopsModule->getVar('mid'));
$pathImageAdmin = $moduleInfo->getInfo('icons32');

$i = 1;
$adminmenu[$i] = array(
    'title' => _MI_SEO_HOME,
    'link' => 'admin/index.php',
	'icon' => '../../'.$pathImageAdmin.'/home.png');
$i++;
$adminmenu[$i] = array(
    'title' => _MI_SEO_ABOUT,
    'link' => 'admin/about.php',
	'icon' => '../../'.$pathImageAdmin.'/about.png');