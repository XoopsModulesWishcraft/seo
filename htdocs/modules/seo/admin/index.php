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
 * @version     $Id: 1.02 index.php 11557 2013-05-19 14:13:12Z timgno $
 */
require dirname(__FILE__) . '/header.php';

$index_admin = new ModuleAdmin();
// Display Admin header
xoops_cp_header();
echo $index_admin->renderIndex();

// Display Xoops footer
include "footer.php";