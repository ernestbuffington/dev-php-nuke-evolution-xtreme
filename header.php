<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
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

/*****[CHANGES]**********************************************************
-=[Base]=-
      NukeSentinel                             v2.5.00      07/11/2006
      Nuke Patched                             v3.1.0       06/26/2005
      Advanced Security Extension              v1.0.0       12/22/2005
-=[Other]=-
      Dynamic Titles                           v1.0.0       06/11/2005
-=[Mod]=-
      Collapsing Blocks                        v1.0.0       08/16/2005
	  NSN Center Blocks                        v2.2.1       05/26/2009
	  Auto MimeType                            v1.0.0       04/09/2021 
 ************************************************************************/

if(!defined('HEADER')) 
    define('HEADER', true);
else 
    return;

if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) exit('Access Denied');

require_once(dirname(__FILE__).'/mainfile.php');

$add_count = array();

function head() 
{
    global $sitename, $ab_config, $modheader, $cache;

    $ThemeSel = get_theme();
    
	# Auto MimeType v1.0.0 START
	if (@file_exists(NUKE_THEMES_DIR.$ThemeSel.'/includes/mimetype.php'))  
    include(NUKE_THEMES_DIR.$ThemeSel.'/includes/mimetype.php');
	else 
	{
      echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd" />'."\n";
      echo '<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="'._LANGCODE.'" />'."\n";
      echo '<html xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="https://www.facebook.com/2008/fbml" />'."\n"; 
      echo "<!-- START <head> -->\n";
      echo '<head>'."\n";
      echo '<!--[if IE]>'."\n";
      echo '<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />'."\n";
      echo '<![endif]-->'."\n";
      echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />'."\n";
      echo '<meta http-equiv="Content-Language" content="'._LANGCODE.'" />'."\n";
      echo '<meta http-equiv="Content-Style-Type" content="text/css" />'."\n";
      echo '<meta http-equiv="Content-Script-Type" content="text/javascript" />'."\n";
    }	
	# Auto MimeType v1.0.0 END

    include_once(NUKE_INCLUDE_DIR.'meta.php');

    # function to grab the page title.
    //the_pagetitle();
	title_and_meta_tags();

    include_once(NUKE_INCLUDE_DIR.'javascript.php');
    include_once(NUKE_THEMES_DIR.$ThemeSel.'/theme.php');

    if ((($favicon = $cache->load('favicon', 'config')) === false) || empty($favicon)) 
	{
        if (file_exists(NUKE_BASE_DIR.'favicon.ico')) 
            $favicon = "favicon.ico";
		else
		if (file_exists(NUKE_IMAGES_DIR.'favicon.ico')) 
            $favicon = "images/favicon.ico";
		else 
		if (file_exists(NUKE_THEMES_DIR.$ThemeSel.'/images/favicon.ico')) 
            $favicon = "themes/$ThemeSel/images/favicon.ico";
		else 
            $favicon = 'none';
        
		if ($favicon != 'none') 
        echo "<link rel=\"shortcut icon\" href=\"$favicon\" type=\"image/x-icon\" />\n";
        
        $cache->save('favicon', 'config', $favicon);
    } 
	else 
	{
        if ($favicon != 'none') 
        echo "<link rel=\"shortcut icon\" href=\"$favicon\" type=\"image/x-icon\" />\n";
    }

    if (is_active('News')) 
    echo "<link rel='alternate' type='application/rss+xml' title='RSS ".$sitename." &raquo; News' href='rss.php?feed=news' />\n";
	elseif (is_active('ForumNews')) 
    echo "<link rel='alternate' type='application/rss+xml' title='RSS ".$sitename." &raquo; ForumNews' href='rss.php?feed=forumnews' />\n";
	elseif (is_active('Forums')) 
    echo "<link rel='alternate' type='application/rss+xml' title='RSS ".$sitename." &raquo; Forums' href='rss.php?feed=forums' />\n";
	elseif (is_active('Downloads')) 
    echo "<link rel='alternate' type='application/rss+xml' title='RSS ".$sitename." &raquo; Downloads' href='rss.php?feed=downloads' />\n";
	elseif (is_active('Web_Links')) 
    echo "<link rel='alternate' type='application/rss+xml' title='RSS ".$sitename." &raquo; Web Links' href='rss.php?feed=weblinks' />\n";

    global $browser;

    if(isset($modheader)) 
    echo $modheader;

    writeHEAD();
    
    if ((($custom_head = $cache->load('custom_head', 'config')) === false) || empty($custom_head)) 
	{
        $custom_head = array();
    
	    if (file_exists(NUKE_INCLUDE_DIR.'custom_files/custom_head.php')) 
            $custom_head[] = 'custom_head';
        
		if (file_exists(NUKE_INCLUDE_DIR.'custom_files/custom_header.php')) 
            $custom_head[] = 'custom_header';
        
		if (!empty($custom_head))
		{ 
            foreach ($custom_head as $file) 
            include_once(NUKE_INCLUDE_DIR.'custom_files/'.$file.'.php');
        }
        
		$cache->save('custom_head', 'config', $custom_head);
    }
	else 
	{
        if (!empty($custom_head)) 
		{
            foreach ($custom_head as $file) 
            include_once(NUKE_INCLUDE_DIR.'custom_files/'.$file.'.php');
        }
    }
    /* ----- as you can probably tell this is used for IE compatibility ----- */
    echo '<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script><![endif]-->'."\n";
    echo "</head>\n";
    themeheader();
/*****[BEGIN]******************************************
 [ Base:    NukeSentinel                      v2.5.00 ]
 ******************************************************/
    if($ab_config['site_switch'] == 1) 
    echo '<center><img src="modules/NukeSentinel/images/disabled.png" alt="'._AB_SITEDISABLED.'" title="'._AB_SITEDISABLED.'" border="0" /></center><br />';
/*****[END]********************************************
 [ Base:    NukeSentinel                      v2.5.00 ]
 ******************************************************/
}

function online() 
{
    global $prefix, $db, $name, $board_config, $userinfo;
    $ip = get_user_IP();
    $url = (defined('ADMIN_FILE')) ? 'index.php' : Fix_Quotes($_SERVER['REQUEST_URI']);
    $uname = $ip;
    $guest = 1;
    $user_agent = get_user_agent();
    
	if (is_user()):

        $uname = $userinfo['username'];
        $guest = 0;

    elseif($user_agent['engine'] == 'bot'):

        $uname = $user_agent['bot'];
        $guest = 3;

    endif;

    $custom_title = $name;
    $url = str_replace("&amp;", "&", $url);
	$url = addslashes($url);
    $past = time() - $board_config['online_time'];
    $db->sql_query('DELETE FROM '._SESSION_TABLE.' WHERE time < "'.$past.'"');
    $ctime = time();

    /**
     * A replace into sql command was added, to prevent the duplication of users, This also saves on several lines of code.
     *
     * @since 2.0.9E
     */
    $db->sql_query("REPLACE INTO `"._SESSION_TABLE."` (uname, 
	                                                    time, 
												   starttime, 
												   host_addr, 
												       guest, 
													  module, 
													     url) 
														 
	values ('".$uname."', 
	        '".$ctime."', 
			'".$ctime."', 
			'".$ip."', 
			'".$guest."', 
			'".$custom_title."', 
			'".$url."');");

    /**
     * This sql replace command is to track who has been to the site and records their last visit.
     *
     * @since 2.0.9E
     */
    if ( $guest == 0 )
        $db->sql_query("REPLACE INTO `"._USERS_WHO_BEEN."` (`user_ID`, 
		                                                   `username`, 
														 `last_visit`) 
														 
	values ('".$userinfo['user_id']."', 
	        '".$userinfo['username']."', 
			".time().");");
}

online();
head();

if (!defined('ADMIN_FILE')):
	include_once(NUKE_INCLUDE_DIR.'counter.php');
	if (defined('HOME_FILE')):
		include_once(NUKE_INCLUDE_DIR.'messagebox.php');
		blocks('Center');
		// If you want either of the following on all pages simply, move the include to before if (defined('HOME_FILE'))
		include(NUKE_INCLUDE_DIR.'cblocks1.php');
		include(NUKE_INCLUDE_DIR.'cblocks2.php');
    endif;
endif;
?>
