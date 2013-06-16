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
 * @author      Gregory Mage (AKA Mage)
 * @version     $Id: 1.02 about.php 11699 2013-05-19 14:13:12Z timgno $
 */
require dirname(__FILE__) . '/header.php';
// Display Admin header
xoops_cp_header();

$aboutAdmin = new ModuleAdmin();
echo $aboutAdmin->addNavigation('about.php');
echo $aboutAdmin->renderAbout('YDRUY5QZQHAHS', false);

include 'footer.php';