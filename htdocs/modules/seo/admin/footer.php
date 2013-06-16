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
 * @author      Txmod Xoops (AKA Timgno) http://www.txmodxoops.org
 * @version     $Id: 1.02 footer.php 11699 2013-05-19 14:13:12Z timgno $
 */
$maintainedby = _AM_MODULEADMIN_ADMIN_FOOTER;
echo <<<EOT
<div class='center'><a href='http://www.xoops.org' target='_blank'>
          <img src='{$pathIcon32}/xoopsmicrobutton.gif' alt='XOOPS' title='XOOPS'></a></div>
{$maintainedby}
EOT;
xoops_cp_footer();
?>