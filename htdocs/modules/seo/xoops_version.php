<?php
/**
 * Private message module
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code 
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         seo
 * @since           2.3.0
 * @author          Jan Pedersen
 * @author          Taiwen Jiang <phppp@users.sourceforge.net>
 * @version         $Id: 1.02 xoops_version.php 11699 2008-08-31 02:07:17Z timgno $
 */
 
/**
 * This is a temporary solution for merging XOOPS 2.0 and 2.2 series
 * A thorough solution will be available in XOOPS 3.0
 *
 */
if (!defined('XOOPS_ROOT_PATH')) {
    die('XOOPS root path not defined');
}

$modversion['name'] = _MI_SEO_NAME;
$modversion['version'] = 1.02;
$modversion['description'] = _MI_SEO_DESC;
$modversion['author'] = "Simon Roberts (simon@chronolabs.coop)";
$modversion['credits'] = "Deligent People, Timgno";
$modversion['license'] = "GNU GPL 2.0";
$modversion['license_url'] = "www.gnu.org/licenses/gpl-2.0.html/";
$modversion['image'] = "images/seo_slogo.png";
$modversion['dirname'] = "seo";
$modversion['status'] = "stable";


$modversion['release_date'] = "2013/06/19";	
$modversion['help'] = "page=help";
$modversion['module_status'] = "Beta 1";
	// Admin about
$modversion['release_info'] = "Beta 1 19/05/2013";
$modversion['release_file'] = XOOPS_URL."/modules/seo/docs/changelog.txt";
$modversion['manual'] = "Manual";
$modversion['manual_file'] = XOOPS_URL."/modules/seo/docs/manual.txt";
$modversion['module_website_url'] = "http://www.xoops.org/";
$modversion['module_website_name'] = "Xoops";
$modversion['demo_site_url'] = "http://www.xoops.org/modules/downloads/";
$modversion['demo_site_name'] = "Xoops Downloads";
$modversion['forum_site_url'] = "http://www.xoops.org/modules/newbb/";
$modversion['forum_site_name'] = "Xoops Community";	

$modversion['min_php'] = '5.2';
$modversion['min_xoops'] = '2.5';
$modversion['dirmoduleadmin'] = 'Frameworks/moduleclasses';
$modversion['icons16'] = 'Frameworks/moduleclasses/icons/16';
$modversion['icons32'] = 'Frameworks/moduleclasses/icons/32';
$modversion['min_db'] = array('mysql'=>'5.0.7', 'mysqli'=>'5.0.7');
$modversion['min_admin'] = '1.1';

$modversion['system_menu'] = 1;
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = 'admin/index.php';
$modversion['adminmenu'] = 'admin/menu.php';

$modversion['hasMain'] = 1;
?>