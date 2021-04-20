<?php 
/*=======================================================================
  86it Network Config File
 =======================================================================*/

/************************************************************************/
/* PHP-NUKE: Advanced Content Management System                         */
/* ============================================                         */
/*                                                                      */
/* Copyright (c) 2002 by Francisco Burzi                                */
/* http://phpnuke.org                                                   */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/
if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) exit('Access Denied');

# Network database globals
global $dbhost2, $dbname2, $dbuname2, $db2, $network_prefix; 

# Un-Comment the following line to enable 86it Network support!
//define('network', 'enabled');
if ( defined('network') ):
# ip address of domain of MySQL server use local host if we are hosting your web portal!
$dbhost2 = 'localhost';
# Network database - This never changes
$dbname2 = 'hub_db';
# Database user name - one will be assined to you - request one from the webmaster!
$dbuname2 = 'some_database_user';
$dbpass2 = 'some_database_password';
# This never changes
$network_prefix = 'network'; 
endif;
?>
