<?php

/*
 * Nibbleblog -
 * http://www.nibbleblog.com
 * Author Diego Najar

 * All Nibbleblog code is released under the GNU General Public License.
 * See COPYRIGHT.txt and LICENSE.txt.
*/

// Check installation
if( !file_exists('content/private') )
{
	header('Location:install.php');
	exit('<a href="./install.php">click to install Owloo Blog</a>');
}

// Boot
require('admin/boot/admin.bit');

// Plugins
foreach($plugins as $plugin)
	$plugin->boot();

// Load the controller and template / view
require(PATH_ADMIN_CONTROLLER.$layout['controller']);
require(PATH_ADMIN_TEMPLATES.$layout['template']);

?>