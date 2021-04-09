<?php
# all facebook div tags should have the ampersand encoded from & to &amp;
# do not encode script tags with from & to &amp; - leave theme alone,
function facebook_likes()
{
global $sid, $appID, $my_url;
if(isset($appID)):	
echo '<div id="fb-root"></div>'."\n";
echo '<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0&appId='.$appID.'&autoLogAppEvents=1" nonce="dv0pyfMc"></script>'."\n";

echo '<div style="background-color: grey" class="fb-like" data-href="https://'.$my_url.'/modules.php?name=Blog&amp;file=article&amp;sid='.$sid.'" data-width="1209" data-layout="standard" data-action="like" data-size="large" data-share="true"></div>'."\n";
endif;
}
function facebook_comments() 
{
global $sid, $appID, $my_url;
if(isset($appID)):		
  #facebook comment plugin START
  echo '<div id="fb-root"></div>'."\n";
  echo '<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0&appId='.$appID.'&autoLogAppEvents=1" nonce="JBKXliWW"></script>'."\n";
  echo '<div style="background-color: grey" class="fb-comments" data-colorscheme="light" data-href="https://'.$my_url.'/modules.php?name=Blog&amp;file=article&amp;sid='.$sid.'" data-width="100%" data-numposts="5"></div>'."\n"; 
  #facebook comment plugin END
endif;
}

/**
 * Customize function: Used for dynamic page titles, This replaces the old Dynamic Titles mod, which required multiple database queries.
 *
 * @since Titanium v3.0.0
 */
function title_and_meta_tags()
{
	global $sitename, $appID, $name, $sid, $file, $db, $prefix, $nukeurl, $domain;
	
	$ThemeSel           = get_theme();
	$item_delim         = "&raquo;";
	$module_name 		= get_query_var( 'name', 'get', 'string', '' );
	$module_name_str    = str_replace(array('-','_'),' ',$module_name);

	# if the user is in the administration panel, simply change the page title to administration.
	if (defined('ADMIN_FILE')):
	$newpagetitle = $item_delim.' Administration';
	
	# if the user is visiting a module, change the page title to the module name.
	else:
	   if (isset($appID)): # This will not load if there is not a facebook app id.
	      
		             $facebookappid = "<meta property=\"fb:app_id\" content=\"".$appID."\" />\n";
		            $facebook_admin = "<meta property=\"fb:admins\" content=\"3788797984541781\" />\n"; # TheGhost's facebook user ID
	            $facebook_page_type = "<meta property=\"og:type\" content=\"website\" />\n";
		  //$google_site_verification = '<meta name="google-site-verification" content="o99pC0eeVthNETkL6I5knTEX4nTAOeBeJno4ZD-EvzY" />'."\n";
		  
		  if(!defined('HOME_FILE')):

	        # PHP-Nuke Titanium Shout Box Module v1.0
			if($module_name == Shout_Box):
			$facebook_ogimage_normal = '<meta property="og:image" content="https://'.$domain.'/themes/'.$ThemeSel.'/includes/facebook/'.$module_name.'/'.$module_name.'FB.png" />'."\n";
		    $facebook_ogimage = '<meta property="og:image:secure_url" content="https://'.$domain.'/themes/'.$ThemeSel.'/includes/facebook/'.$module_name.'/'.$module_name.'FB.png" />'."\n";
	        $newpagetitle= $sitename.' '.$item_delim.' Shout Box';
			$facebook_og_title = '<meta property="og:title" content="'.$newpagetitle.'">'."\n";  
            $facebook_ogdescription = "<meta property=\"og:description\" content=\"PHP-Nuke Titanium ".$item_delim." Shout Box Module v1.0\" />\n";
			else:
			$facebook_ogimage_normal = '<meta property="og:image" content="https://'.$domain.'/themes/'.$ThemeSel.'/includes/facebook/'.$module_name.'/'.$module_name.'.png" />'."\n";
			$facebook_ogimage = '<meta property="og:image:secure_url" content="https://'.$domain.'/themes/'.$ThemeSel.'/includes/facebook/'.$module_name.'/'.$module_name.'.png" />'."\n";
            endif;
	        
			
			$facebookimagetype = '<meta property="og:image:type" content="image/png" />'."\n";
            $facebook_ogimage_width = '<meta property="og:image:width" content="200" />'."\n";
            $facebook_ogimage_height = '<meta property="og:image:height" content="200" />'."\n";
		    $facebookimage_alt = '<meta property="og:image:alt" content="https://'.$domain.'/modules.php?name='.$name.'" />'."\n";
			$facebook_ogurl = "<meta property=\"og:url\" content=\"https://".$domain."/modules.php?name=$name\" />\n";
			
            if ($file == 'article' && isset($sid) && is_numeric($sid)):
	        
              list($art, $top) = $db->sql_ufetchrow("SELECT `title`, `topic` FROM `".$prefix."_stories` WHERE `sid`='".$sid."'", SQL_NUM);
    
	          if ($top) 
		      {
                 list($top, $topicimage) = $db->sql_ufetchrow("SELECT `topictext`,`topicimage` FROM `".$prefix."_topics` WHERE `topicid`='".$top."'", SQL_NUM);

                 if ($sitename == $top):
			     $newpagetitle= "$sitename $item_delim $art";
				 $facebook_og_title = '<meta property="og:title" content="'.$newpagetitle.'" />'."\n";
			     else:
			     $newpagetitle= "$sitename $item_delim $top $item_delim $art";
				 $facebook_og_title = '<meta property="og:title" content="'.$newpagetitle.'" />'."\n";
                 endif;
	             
				 $facebook_ogimage_normal = '<meta property="og:image" content="https://'.$domain.'/themes/'.$ThemeSel.'/includes/facebook/'.$module_name.'/'.$module_name.'.png" />'."\n";
	             $facebook_ogimage = '<meta property="og:image:secure_url" content="https://'.$domain.'/themes/'.$ThemeSel.'/includes/facebook/'.$module_name.'/'.$module_name.'.png" />'."\n";
                 
				 $facebook_ogurl = "<meta property=\"og:url\" content=\"https://".$domain."/modules.php?name=$name&file=article&sid=$sid\" />\n";
              	         $facebook_ia_markup_url = "<meta property=\"ia:markup_url\" content=\"https://".$domain."/modules.php?name=$name&file=article&sid=$sid\" />\n";
              	 $facebook_ia_markup_url_dev = "<meta property=\"ia:markup_url_dev\" content=\"https://".$domain."/modules.php?name=$name&file=article&sid=$sid\" />\n";
                           $facebook_ia_rules_url = "<meta property=\"ia:rules_url\" content=\"https://".$domain."/modules.php?name=$name&file=article&sid=$sid\" />\n";
				   $facebook_ia_rules_url_dev = "<meta property=\"ia:rules_url_dev\" content=\"https://".$domain."/modules.php?name=$name&file=article&sid=$sid\">\n";
				 //$facebook_page_id = "<meta property=\"fb:pages\" content=\"".HTTPS."modules.php?name=$name&file=article&sid=$sid\" />\n";
			     
				 list($hometext) = $db->sql_ufetchrow("SELECT `hometext` FROM `".$prefix."_stories` WHERE `sid`='".$sid."'", SQL_NUM);

			     $hometext = stripslashes(check_html($hometext, "nohtml")); 	 	 

                 $facebook_ogdescription = "<meta property=\"og:description\" content=\"$hometext\" />\n";
            }
			endif; 			
			   if (@file_exists(TITANIUM_THEMES_DIR.'/includes/facebook/'.$module_name.'/'.$module_name.'.php')): # Added by Ernest Buffington
	           include(TITANIUM_THEMES_DIR.'/includes/facebook/'.$module_name.'/'.$module_name.'.php');           # Load extra meta settings from each module
		       endif;
	      
		  # do all this shit if you are on the index.php page
		  else:
	             $facebook_ogimage_normal = '<meta property="og:image" content="https://'.$domain.'/themes/'.$ThemeSel.'/includes/facebook/Index/Index.png" />'."\n";
	        $facebook_ogimage = '<meta property="og:image:secure_url" content="https://'.$domain.'/themes/'.$ThemeSel.'/includes/facebook/Index/Index.png" />'."\n";
			$facebookimagetype = '<meta property="og:image:type" content="image/png" />'."\n";
            $facebook_ogimage_width = '<meta property="og:image:width" content="200" />'."\n";
            $facebook_ogimage_height = '<meta property="og:image:height" content="200" />'."\n";
		    $facebookimage_alt = '<meta property="og:image:alt" content="Title png File" />'."\n";
			$facebook_ogurl = "<meta property=\"og:url\" content=\"https://".$domain."/index.php\" />\n";
		    
                    $facebook_ia_markup_url = "<meta property=\"ia:markup_url\" content=\"https://".$domain."/index.php\" />\n";
            $facebook_ia_markup_url_dev = "<meta property=\"ia:markup_url_dev\" content=\"https://".$domain."/index.php\" />\n";
                      $facebook_ia_rules_url = "<meta property=\"ia:rules_url\" content=\"https://".$domain."/index.php\" />\n";
			  $facebook_ia_rules_url_dev = "<meta property=\"ia:rules_url_dev\" content=\"https://".$domain."/index.php\" />\n";
		    //$facebook_page_id = "<meta property=\"fb:pages\" content=\"".HTTPS."index.php\">\n";
            $facebook_ogdescription = "<meta property=\"og:description\" content=\"Programmers Making Connections. Coders Making a Difference. We have a new look, come visit us today...\" />\n";
	        $newpagetitle= "$sitename $item_delim $top $item_delim $art";
			$facebook_og_title = '<meta property="og:title" content="'.$newpagetitle.'" />'."\n";

			
			if (@file_exists(TITANIUM_THEMES_DIR.'/includes/facebook/Index/Index.php')): # Added by Ernest Buffington  
	        include(TITANIUM_THEMES_DIR.'/includes/facebook/Index/Index.php');           # Load extra meta settings for Index
		    endif;
		  endif;
	   endif;
	   $newpagetitle = ($module_name) ? $item_delim .' '.$module_name_str : '';
    endif;
	
    //echo $google_site_verification;
	if(isset($appID)):
	echo $facebook_admin;
	echo $facebook_page_type;
    echo $facebookappid;
    echo $facebook_ogimage_normal;
    echo $facebook_ogimage;
	echo $facebookimage_alt; 
    //echo $facebook_page_id;
	echo $facebook_ia_markup_url;
	echo $facebook_ia_markup_url_dev;
	echo $facebook_ia_rules_url;
	echo $facebook_ia_rules_url_dev;
	echo $facebook_ogurl;
    echo $facebook_ogimage_width;
    echo $facebook_ogimage_height;
    echo $facebookimagetype;
	echo $facebook_ogdescription;
	echo $facebook_og_title;
	endif;

	echo '<title>'.$sitename.' '.$newpagetitle.'</title>';
}

/**
 * Custom function: This will be used quite alot throughout the site, For such things as CMS, Block, Module & Theme version chekcing. 
 * @since v3.0.0b
 */
function get_titanium_version_information($version_check_url, $local_cache_location, $force_refresh=false) 
{
	$url   			= $version_check_url;
	$cache 			= $local_cache_location.'json.cache';
	$refresh		= 24 * 60 * 60; # check for a new version once a day. // 24 * 60 * 60

	if ($force_refresh || ((time() - filectime($cache)) > ($refresh) || 0 == filesize($cache))):

		# create a new cURL resource
		$ch = curl_init();

		# set URL and other appropriate options
		curl_setopt( $ch, CURLOPT_URL, $url );
		curl_setopt( $ch, CURLOPT_FAILONERROR, true );
		curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
		curl_setopt( $ch, CURLOPT_TIMEOUT, 7 );

		# grab URL and pass it to the browser
		$response = curl_exec( $ch );

		# close cURL resource, and free up system resources
		curl_close( $ch );

		$jsoncache 	= $response;

		# Insert json information into a locally stored file, This will prevent slow page load time from slow hosts.
		$handle 	= fopen( $cache, 'wb' ) or die( 'no fopen' );	
		fwrite( $handle, $jsoncache );
		fclose( $handle );

	else:
		# Retrieve the json cache from the locally stored file
		$jsoncache = file_get_contents( $cache );
	endif;

	$jsonobject = json_decode( $jsoncache, true );
	return $jsonobject;
}

function get_titanium_timeago( $ptime ) 
{
    $estimate_time = time() - $ptime;

    if( $estimate_time < 1 )
        return 'Secs';

    $condition = array( 
                12 * 30 * 24 * 60 * 60  =>  'Year',
                30 * 24 * 60 * 60       =>  'Month',
                24 * 60 * 60            =>  'Day',
                60 * 60                 =>  'Hour',
                60                      =>  'Min',
                1                       =>  'Sec'
    );

    foreach( $condition as $secs => $str )
    {
        $d = $estimate_time / $secs;

        if( $d >= 1 )
        {
            $r = round( $d );                                                                             // └════┘
            return '<div align="center"><strong>'.$r.'</strong><br />' . ' ' . $str . ( $r > 1 ? 's' : '' ) . ' <br /> </div>';
        }
    }
}
?>