<?php
if (!defined('MODULE_FILE')) {
   die('You can\'t access this file directly...');
}

$module_name = basename(dirname(dirname(__FILE__)));

get_lang($module_name);

if ( is_mod_admin($module_name) )
{ 

echo "THIS WILL BE THE NEW CONTROL PANEL FOR facebook_SandBox";
}
else
{ 
    DisplayError('<strong>'._ERROR.'</strong><br /><br />' . _NO_ADMIN_RIGHTS . $module_name);
}

?>