<?php 
/*===================================================================== */
/* PHP-Nuke Titanium | Nuke-Evolution Xtreme : A PHP-Nuke Fork          */
/* ==================================================================== */
/* PHP-NUKE: Advanced Content Management System                         */
/* ============================================                         */
/* Copyright (c) 2002 by Francisco Burzi                                */
/* http://phpnuke.org                                                   */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/
if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) 
exit('Access Denied');

//define('facebook', 'enabled');
if ( defined('facebook') ):
global $fb, $appID, $api_version, $appSecret, $my_url;
require_once __DIR__ . '/includes/Facebook/autoload.php';
# Your domain name i.e yoursite.com
$my_url = 'www.dev-php-nuke-evolution-xtreme.86it.us';
# you facebook app secret
$appSecret = '';
# your facebook app ID
$appID = '';
# The api version you have selected on your facebook app
$api_version = 'v14.0';

$fb = new Facebook\Facebook([
  'app_id' => $appID,
  'app_secret' => $appSecret,
  'default_graph_version' => $api_version, // API GRAPH VERSION
  ]);
endif;
  
