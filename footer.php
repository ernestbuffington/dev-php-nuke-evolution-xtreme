<?php
/*======================================================================= 
  PHP-Nuke Titanium | Nuke-Evolution Xtreme : PHP-Nuke Web Portal System
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
      Nuke Patched                             v3.1.0       06/26/2005
      Debugger                                 v1.0.0       11/14/2005
      Auto Optimize                            v1.0.0       11/19/2005
      Module Simplifications                   v1.0.0       11/19/2005
-=[Other]=-
      DB Connector                             v1.0.0       06/07/2005
      Queries Count                            v2.0.1       08/21/2005
-=[Mod]=-
      Admin Icon/Link Pos                      v1.0.0       06/07/2005
	  NSN Center Blocks                        v2.2.1       05/26/2009
 ************************************************************************/
if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME']))
exit('Access Denied');

if(!defined('HEADER')) 
return;

define('NUKE_FOOTER', true);

function footmsg() 
{
    global $foot1, 
	       $foot2, 
		   $foot3,
		   $foot4, 
	   $copyright, 
	  $total_time, 
	  $start_time, 
	     $footmsg, 
		      $db,
			 $db2, 
   $queries_count, 
   $usrclearcache, 
        $debugger, 
		   $debug, 
		   $cache, 
	   $use_cache,
	       $index,
	      $prefix,
		    $user, 
	 $user_prefix,
	      $cookie,
	    $storynum,
   $Default_Theme,
            $home,
			$name,
		   $admin,
     $persistency, 
$do_gzip_compress, 
	   $start_mem;

    static $has_echoed;

    if(isset($has_echoed) && $has_echoed == 1) 
	return; 

global $powered_by;
$powered_by = '<font size="3">PHP-Nuke Evolution Xtreme Copyright &copy; 2010 2021<br /> by Ernest Buffington and The 86it Developers Network.<br /> 
 All logos, trademarks and posts in this site are property of their respective owners, all the rest <br />&copy; '.date('l jS \of F Y h:i:s A').' by Brandon Maintenance Management, LLC.<br />
 Powered by PHP-Nuke Evolution Xtreme v3.0.1b<br /><br />
 <strong>CREDITS</strong><br />
 PHP-Nuke Copyright &copy; 2006 by Francisco Burzi.<br /> 
 Bob Marion of NukeScripts.Net<br />  
 Ernest Buffington of 86it.us<br>
 PHP-Nuke Evolution Basic<br /> 
 PHP-Nuke Evolution Xtreme UK Version<br />
 PHP-Nuke Evolution Xtreme US Version<br />
 PHP-Nuke Titanium US Version<br />
 </font>
 ';

        $footmsg = "<span class=\"footmsg\">\n";
        
$footmsg .= '<font size="5"><strong><a class="greatminds" href="modules.php?name=Google-Site-Map" target="_self"><font color="#4285f4">G</font><font color="#ea4335">o</font><font color="#fbbc05">o</font><font color="#4285f4">g</font><font color="#34a853">l</font><font color="#ea4335">e</font> <font color="#4285f4">S</font><font color="#ea4335">i</font><font color="#fbbc05">t</font><font color="#4285f4">e</font><font color="#ea4335">m</font><font color="#34a853">a</font><font color="#ea4335">p</font></a></strong></font><br />';
		
		if (!empty($foot1)) {
            $footmsg .= $foot1."\n";
        }
        if (!empty($foot2)) {
            $footmsg .= $foot2."\n";
        }
        if (!empty($foot3)) {
            $footmsg .= $foot3."\n";
        }

        // DO NOT REMOVE THE FOLLOWING COPYRIGHT LINE. YOU'RE NOT ALLOWED TO REMOVE NOR EDIT THIS.
        // IF YOU REALLY NEED TO REMOVE IT AND HAVE MY WRITTEN AUTHORIZATION CHECK:
        // http://phpnuke.org/modules.php?name=Commercial_License
        // PLAY FAIR AND SUPPORT THE DEVELOPMENT, PLEASE!
        //$footmsg .= '<br />'.$copyright.'<br />';
        //$footmsg = (preg_match(HEX_PREG,$footmsg)) ? $footmsg : $footmsg."<br />".ord_crypt_decode(HEX_CACHED)."<br />";
        global $digits_color;

        		$footmsg .= "[ "
                  . "<a href=\"".HTTPS."modules.php?name=Network&file=about\">"
                  . "About Us</a> ] - [ "
                  . "<a href=\"".HTTPS."modules.php?name=Network&file=disclaimer\">"
                  . "Disclaimer Statement</a> ] - [ "
                  . "<a href=\"".HTTPS."modules.php?name=Network&file=privacy\">"
                  . "Privacy Statement</a> ] - [ "
                  . "<a href=\"".HTTPS."modules.php?name=Network&file=terms\">"
                  . "Terms of Use</a> ]<br>\n";
				  
		$total_time = (get_microtime() - $start_time);
        $total_time = '<span class="copyright">[ '._PAGEGENERATION."<strong><font color='".$digits_color."'> ".substr($total_time,0,4)."</font></strong> "._SECONDS."";
        
		if ($start_mem > 0) 
		{
            $total_mem = memory_get_usage()-$start_mem;
            $total_time .= ' | Memory Usage: <strong><font color="'.$digits_color.'">'.(($total_mem >= 1048576) 
			? round((round($total_mem / 1048576 * 100) / 100), 2).' MB' : (($total_mem >= 1024) 
			? round((round($total_mem / 1024 * 100) / 100), 2).' KB' : $total_mem.' Bytes'));
			$total_time .= '</font></strong>';
        }

        # START Queries Count v2.0.1
        if($queries_count) {
            $total_time .= ' | DB Queries: <strong><font color="'.$digits_color.'">' . $db->num_queries;
			$total_time .= '</font></strong>';
        }
        # END Queries Count v2.0.1

        $total_time .= ' ]';
        $total_time .= '</span>';

        # START Auto Optimize v1.0.0
        if(is_admin()) {
            $first_time = false;
            if (($last_optimize = $cache->load('last_optimize', 'config')) === false) {
                $last_optimize = time();
                $first_time = true;
            }
			
            //For information on how to change the auto-optimize intervals
            //Please see www.php.net/strtotime
            //Default: -1 day
            $interval = strtotime('-1 day');
            if (($last_optimize <= $interval) || ($first_time && $cache->valid && $use_cache))
            {
                if ($db->sql_optimize()) {
                    $cache->save('last_optimize', 'config', time());
                    $total_time .= "<br />Database Optimized";
                }
            }
           
		    # START Module Simplifications v1.0.0
			update_modules();
		    # END Module Simplifications v1.0.0

        }
        # END Auto Optimize v1.0.0
	
    $footmsg .= $total_time."<br />\n</span>\n";

    # START Debugger v1.0.0
    if(is_admin() && $debugger->debug && count($debugger->errors) > 0) 
	{
       $footmsg .= "<br /><center><strong>Debugging:</strong></center>";
       $footmsg .= "<table border='0' width='80%' align='center'><tr><td>";
       $footmsg .= $debugger->return_errors();
       $footmsg .= "</td></tr></table>";
    }
    
	if (is_admin()) 
	{
            echo $db->print_debug();
    }
    # END Debugger v1.0.0
	
	$debug_sql = false;
	
	if (is_admin() && !is_bool($debug) && $debug == 'full') 
	{
		$strstart = strlen(NUKE_BASE_DIR);
			$debug_sql = '<span class="genmed" style="font-weight: bold;">SQL Debug:</span><br /><br />';
			
			foreach ($db->querylist as $file => $queries) 
			{
				$file = substr($file, $strstart);
				if (empty($file)) $file = 'unknown file';
				$debug_sql .= '<span style="font-weight: bold;">'.$file.'</span><ul>';
				foreach ($queries as $query) { $debug_sql .= "<li>$query</li>"; }
				$debug_sql .= '</ul>';
			}
			$debug_sql .= '<span style="color: #0000FF; font-weight: bold;">*</span> - Result freed<br /><br />';
	}
	echo $debug_sql;
	unset($debug_sql);

	global $browser;
	
	# with this span tag it is invisble to the main website
	if ($browser == 'Bot' || $browser == 'Other') 
    {
        $footmsg .= '<span style="display:none;"><a href="includes/trap.php">Do Not Click</a></span>'.PHP_EOL;
    }
	# with this span tag it is invisble to the main website
	
        # START updated 09/12/2019 Ernest Allen Buffington
        if($use_cache && $usrclearcache) 
		{
          $footmsg .= "<form method='post' name='clear_cache' action='".$_SERVER['REQUEST_URI']."'>";
          $footmsg .= "<input type='hidden' name='clear_cache' value='1'>";
          $footmsg .= ""._SITECACHED . "</span> <a href=\"javascript:clear_cache.submit()\">" . _UPDATECACHE . "</a>";
          $footmsg .= "</form>";
        }
		# END updated 09/12/2019 Ernest Allen Buffington
		
	echo $footmsg;
    $has_echoed = 1;

echo "\n<!-- START facebook connector -->\n";
if ( defined('facebook') ):
echo '<div id="status">'."\n";
echo '</div>'."\n";
echo '<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>'."\n";
endif;
echo "<!-- END facebook connector -->\n\n";

}

# START Admin Icon/Link Pos v1.0.0
if ( defined('ADMIN_FILE') && defined('ADMIN_POS') && is_admin())
{
    global $admin;
    $admin1 = base64_decode($admin);
    $admin1 = addslashes($admin1);
    $admin1 = explode(':', $admin1);
    $aid = $admin1[0];
    unset($admin1);
    echo "<br />";
    GraphicAdmin(0);
}
# END Admin Icon/Link Pos v1.0.0

# START NSN Center Blocks v2.2.1
if (defined('HOME_FILE')) 
{
    blocks('Down');
	
	// If you want either of the following on all pages simply
	// move the include to before if (defined('HOME_FILE'))
	//
	// Visit www.evolution-xtreme.com for support if your stuck, oh wait you can't becuase it does not exists anymore!
	include(NUKE_INCLUDE_DIR.'cblocks3.php');
	include(NUKE_INCLUDE_DIR.'cblocks4.php');
}
# END NSN Center Blocks v2.2.1

# look to see if a copyright file exist for the currently displayed module START
$pageURL = "".HTTPS."modules/".$module_name."/copyright.php";

if (defined('MODULE_FILE') && !defined("HOME_FILE") AND file_exists("modules/".$module_name."/copyright.php")) 
{
    echo "<script type=\"text/javascript\">\n";
    echo "<!--\n";
    echo "function openwindow(w,h){\n";
    echo "var left = (screen.width/2)-(w/2);\n";
    echo "var top = (screen.height/2)-(h/2);\n";

    if ($name == 'Groups')
    {
echo "window.open ('".HTTPS."modules/Groups/copyright.php','Copyright','toolbar=no,location=no,directories=no,status=no,scrollbars=yes,resizable=no,copyhistory=no,width='+w+',height='+h+', top='+top+', left='+left);\n";
    }
    else
    if ($name == 'Members_List')
    {
       echo "window.open ('".HTTPS."modules/Members_List/copyright.php','Copyright','toolbar=no,location=no,directories=no,status=no,scrollbars=yes,resizable=no,copyhistory=no,width='+w+',height='+h+', top='+top+', left='+left);\n";
    }
    else
    if ($name == 'FAQ')
	{
       echo "<div align=\"right\"><a href=\"javascript:openwindow(400,200)\">86it Network FAQ's &copy;</a></div>";
	}
    else
	if ($name == 'Members_List')
	{
       echo "<div align=\"right\"><a href=\"javascript:openwindow(400,200)\">86it Users List &copy;</a></div>";
	}
    else
	if ($name == 'Groups')
	{
       echo "<div align=\"right\"><a href=\"javascript:openwindow(400,200)\">86it Network Groups &copy;</a></div>";
	}
    else
    {
       echo "window.open ('$pageURL','Copyright','toolbar=no,location=no,directories=no,status=no,scrollbars=yes,resizable=no,copyhistory=no,width='+w+',height='+h+', top='+top+', left='+left);\n";
    }

echo "}\n";
echo "//-->\n";
echo "</script>\n\n";
}

# just a  normal module load without it being displayed by default when index.php loads, look to see if a copyright file exist for the currently displayed module START
//     $cpname = preg_replace("/_/", " ", $module_name);
//     echo "<div align=\"right\"><a href=\"javascript:openwindow(420,200)\">$cpname &copy;</a></div>";
# just a  normal module load without it being displayed by default when index.php loads, look to see if a copyright file exist for the currently displayed module END


# This loads the admin panel when you got the admin area START
if (!defined('HOME_FILE') AND defined('MODULE_FILE') AND (file_exists(NUKE_MODULES_DIR.$name.'/admin/panel.php') && is_admin())) 
{
    OpenTable();
    include_once(NUKE_MODULES_DIR . $name . '/admin/panel.php');
    CloseTable();
}
# This loads the admin panel when you got the admin area END
themefooter();

# needed for the forum admin area START
if (!defined('IN_PHPBB')) 
echo "<div style=\"display:none\" id=\"resizemod\"></div>";
# needed for the forum admin area END

# you can include a custom footer if you so choose, this really has no real use but was put in a previous version of Nuke! START
if (file_exists(NUKE_INCLUDE_DIR . 'custom_files/custom_footer.php')) 
include_once(NUKE_INCLUDE_DIR . 'custom_files/custom_footer.php');
# you can include a custom footer if you so choose, this really has no real use but was put in a previous version of Nuke! END

writeBODYJS();

echo "\n<!-- START Bottom Primary Body Tags -->\n";
#main <body> closing tag!
echo '</body>'."\n";
#main <html> closing tag!
echo '</html>'."\n";
echo "<!-- END Bottom Primary Body Tags -->\n\n";

# ReSync the website cache!
# Set up the cache class reference
$cache = new cache($use_cache);
$cache->resync();

/*****[BEGIN]******************************************
 [ Other:   DB Connectors                      v2.0.0 ]
 [ Other:   Persistent DB Connection           v2.0.0 ]
 ******************************************************/
if(is_object($db))
$db->sql_close(); //close local database
if(is_object($db2))
$db2->sql_close(); //close network user database
if(is_object($db3))
$db3->sql_close(); //close music database
/*****[END]********************************************
 [ Other:   DB Connectors                      v2.0.0 ]
 [ Other:   Persistent DB Connection           v2.0.0 ]
 ******************************************************/

if(GZIPSUPPORT && $do_gzip_compress) 
{
    $gzip_contents = ob_get_contents();
    ob_end_clean();
    $gzip_size = strlen($gzip_contents);
    $gzip_crc = crc32($gzip_contents);
    $gzip_contents = gzcompress($gzip_contents, 9);
    $gzip_contents = substr($gzip_contents, 0, strlen($gzip_contents) - 4);
    echo "\x1f\x8b\x08\x00\x00\x00\x00\x00";
    echo $gzip_contents;
    echo pack('V', $gzip_crc);
    echo pack('V', $gzip_size);
}
ob_end_flush();
exit;
?>
