<?php
if (!defined('ADMIN_FILE')) {
   exit('THIS FILE WAS NOT CALLED WITHIN ADMINISTRATION');
}

$module_name = basename(dirname(dirname(__FILE__)));
get_lang($module_name);

$op = $_GETVAR->get('op', 'request', 'string');

switch($op) 
{
    case 'a':
    case 'b':
    case 'c':
    case 'd':
    case 'e':
    case 'f':
    case 'g':
    case 'h':
    case 'i':
    case 'k':
    case 'l':
    case 'm':
    case 'n':
    case 'o':
    case 'p':
    case 'q':
    case 'r':
    case 's':
    case 't':
    case 'u':
    case 'v':
    case 'w':
    case 'x':
    case 'y':
    case 'z':
        include(NUKE_MODULES_DIR.$module_name.'/admin/index.php');
    break;
}

?>