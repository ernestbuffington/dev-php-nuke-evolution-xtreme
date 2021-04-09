<?php

/*----------------------------------------------------------------*/
/* THEME INFO                                                     */
/* XtremeV3 Theme v3.0 (Fixed & Full Width)                       */
/*                                                                */
/* A Very Nice Clean Grey Styled Design.                          */
/* Copyright © 2019 By: RealmDesignz.com | All Rights Reserved    */
/*----------------------------------------------------------------*/
/* CREATION INFO                                                  */
/* Created On: 24th December, 2018 (v3.0)                         */
/*                                                                */
/* Updated On: 6th Jan, 2019 (v3.0)                               */
/* HTML5 Theme Code Updated By: Lonestar (Lonestar-Modules.com)   */
/*                                                                */
/* Read CHANGELOG File for Updates & Upgrades Info                */
/*                                                                */
/* Designed By: The Mortal                                        */
/* Web Site: www.realmdesignz.com                                 */
/* Purpose: Xtreme v3 CMS                                         */
/*----------------------------------------------------------------*/
/* CMS INFO                                                       */
/* PHP-Nuke Copyright (c) 2005 by Francisco Burzi phpnuke.org     */
/* Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System      */
/*----------------------------------------------------------------*/

if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    exit('Access Denied');
}

$theme_name = basename(dirname(__FILE__));

/*--------------------------*/
/* Theme Management Section */
/*--------------------------*/
include(NUKE_THEMES_DIR.$theme_name.'/theme_info.php');

/*-------------------------*/
/* Theme Colors Definition */
/*-------------------------*/
global $ThemeInfo;
$bgcolor1   = $ThemeInfo['bgcolor1'];
$bgcolor2   = $ThemeInfo['bgcolor2'];
$bgcolor3   = $ThemeInfo['bgcolor3'];
$bgcolor4   = $ThemeInfo['bgcolor4'];
$textcolor1 = $ThemeInfo['textcolor1'];
$textcolor2 = $ThemeInfo['textcolor2'];

define('xtremev3_theme_dir', 'themes/'.$theme_name.'/');
define('xtremev3_images_dir', xtremev3_theme_dir.'images/');
define('xtremev3_style_dir', xtremev3_theme_dir.'style/');
define('xtremev3_js_dir', xtremev3_style_dir.'js/');
define('xtremev3_hdr_images', xtremev3_images_dir.'hdr/');
define('xtremev3_ftr_images', xtremev3_images_dir.'ftr/');

define('xtremev3_width', ((substr($ThemeInfo['themewidth'], -1) == '%') ? str_replace('%','',($ThemeInfo['themewidth'])).'%' : str_replace('px','',($ThemeInfo['themewidth'])).'px'));

define('xtremev3_copyright', 'XtremeV3 Theme Designed By: The Mortal<br />Copyright &copy '.date('Y').' RealmDesignz.com<br />All Rights Reserved');
define('xtremev3_copyright_click', 'Click the Link to Display Copyrights');

addCSSToHead(xtremev3_style_dir.'style.css','file');
addCSSToHead(xtremev3_style_dir.'menu.css','file');

/*-------------------*/
/* OpenTable Section */
/*-------------------*/
function OpenTable() 
{
echo '<section id="flex-container">'
    .'  <div class="tb1"></div>'
    .'  <div class="tb2"></div>'
    .'  <div class="tb3"></div>'
    .'</section>'

    .'<section id="flex-container" class="body-background2">'
    .'  <div class="tb4"></div>'
    .'  <div class="tb5">';
}

function CloseTable() 
{
echo '  </div>'
    .'  <div class="tb6"></div>'
    .'</section>'

    .'<section id="flex-container">'
    .'  <div class="tb7"></div>'
    .'  <div class="tb8"></div>'
    .'  <div class="tb9"></div>'
    .'</section>';
}

# I missed these out on purpose, they will be deprecated in the next update.
function OpenTable2() 
{

}

# I missed these out on purpose, they will be deprecated in the next update.
function CloseTable2() 
{

}

/*---------------------*/
/* FormatStory Section */
/*---------------------*/
function FormatStory($thetext, $notes, $aid, $informant) 
{
global $anonymous;

$notes = !empty($notes) ? '<br /><br /><strong>'._NOTE.'</strong> <em>'.$notes.'</em>' : '';	
if ($aid == $informant) 
{
   echo '<span class="content" color="#505050">'.$thetext.$notes.'</span>';
} 
else 
{
   if (defined('WRITES')) 
   {
      if (!empty($informant)) 
      {
         if ( is_array($informant) ):
            $boxstuff = '<a href="modules.php?name=Your_Account&amp;op=userinfo&amp;username='.$informant[0].'">'.$informant[1].'</a>';
         else:
            $boxstuff = '<a href="modules.php?name=Your_Account&amp;op=userinfo&amp;username='.$informant.'">'.$informant.'</a>';
         endif;
} 
else 
{
            $boxstuff = $anonymous.' ';
      }
            $boxstuff .= _WRITES.' <em>'.$thetext.'</em>'.$notes;
} 
else 
{
            $boxstuff .= $thetext . $notes;
      }
      echo '<span class="content" color="#505050">' . $boxstuff . '</span>';
   }
}

/*----------------*/
/* Header Section */
/*----------------*/
function themeheader() 
{
	include_once(xtremev3_theme_dir.'HDRxtremev3.php');
}

/*----------------*/
/* Footer Section */
/*----------------*/
function themefooter() 
{
	include_once(xtremev3_theme_dir.'FTRxtremev3.php');
}

/*--------------------*/
/* News Index Section */
/*--------------------*/
function themeindex($aid, $informant, $time, $title, $counter, $topic, $thetext, $notes, $morelink, $topicname, $topicimage, $topictext, $writes = false) 
{
global $anonymous, $tipath, $theme_name, $sid, $ThemeSel, $nukeurl, $customlang;

    if (!empty($topicimage)):
    
        $t_image = (file_exists(xtremev3_images_dir.'topics/'.$topicimage)) ? xtremev3_images_dir.'topics/'.$topicimage : $tipath.$topicimage;
        $topic_img = '<td class="col-3 extra" style="text-align:center;"><a href="modules.php?name=News&new_topic='.$topic.'"><img src="'.$t_image.'" border="0" alt="'.$topictext.'" title="'.$topictext.'"></a></td>';

    else:
        $topic_img = '';
    endif;

    $notes = (!empty($notes)) ? '<br /><br /><strong>'._NOTE.'</strong> '.$notes : '';
    $content = '';

    if ($aid == $informant):
        $content = $thetext.$notes;
    else: 

        if ($writes):

            if (!empty($informant)) :
                $content = (is_array($informant)) ? '<a href="modules.php?name=Your_Account&amp;op=userinfo&amp;username='.$informant[0].'">'.$informant[1].'</a> ' : '<a href="modules.php?name=Your_Account&amp;op=userinfo&amp;username='.$informant.'">'.$informant.'</a> ';
            else:
                $content = $anonymous.' ';
            endif;
            $content .= _WRITES.' '.$thetext.$notes;

        else:
            $content .= $thetext.$notes;
        endif;

    endif;

$posted = sprintf($customlang['global']['posted_by'], get_author($aid), $time);
$datetime = substr($morelink, 0, strpos($morelink, '|')-strlen($morelink));
$morelink = substr($morelink, strlen($datetime)+2);
$reads = '( <span style="color: yellow;">'.$customlang['global']['reads'].'</span>: <span style="color: red;">'.$counter.'</span> )';

// echo ( get_query_var('name', 'get') ) ? '' : '<br />';
echo '<article class="news-article">'
    .'  <section id="flex-container">'
    .'    <div class="st1"></div>'
    .'    <div class="st2"><div class="storytitle-wrapper"><span class="storytitle">'.$title.'</span></div></div>'
    .'    <div class="st3"></div>'
    .'  </section>'
    .'  <section id="flex-container">'
    .'    <div class="st4"></div>'
    .'    <div class="st5" class="col-12"><span class="content" style="vertical-align: top">'.$content.'</span><br /><br /></div>'
    .'    <div class="st6"></div>'
    .'  </section>'
    .'  <section id="flex-container">'
    .'    <div class="st7"></div>'
    .'    <div class="st8">'
    .'      <div class="postedoption">'.$posted.'<br />'.$datetime.' '.$topictext.' | '.$morelink.' '.$reads.'</div></div>'
    .'      <div class="st9"></div>'
    .'  </section>'
    .'</article>';
    // .'<br />';
}

/*----------------------*/
/* News Article Section */
/*----------------------*/
function themearticle($aid, $informant, $datetime, $title, $thetext, $topic, $topicname, $topicimage, $topictext, $writes = false) 
{
global $admin, $sid, $tipath, $theme_name;

	if (!empty($topicimage)) 
	{
		$t_image = (file_exists(xtremev3_images_dir.'topics/'.$topicimage)) ? xtremev3_images_dir.'topics/'.$topicimage : $tipath.$topicimage;
		$topic_img = '<td width="25%" align="center" class="extra"><a href="modules.php?name=News&new_topic='.$topic.'"><img src="'.$t_image.'" border="0" alt="'.$topictext.'" title="'.$topictext.'"></a></td>';
	} 
	else 
	{
		$topic_img = '';
	}
	$notes = (!empty($notes)) ? '<br /><br /><strong>'._NOTE.'</strong> '.$notes : '';
	$content = '';
	if ($aid == $informant) 
	{
	    $content = $thetext.$notes;
	} 
	else 
	{
		if ($writes)
		{
			if (!empty($informant)) 
			{
				$content = (is_array($informant)) ? '<a href="modules.php?name=Your_Account&amp;op=userinfo&amp;username='.$informant[0].'">'.$informant[1].'</a> ' : '<a href="modules.php?name=Your_Account&amp;op=userinfo&amp;username='.$informant.'">'.$informant.'</a> ';
			}
			else 
			{
				$content = $anonymous.' ';
			}
			$content .= _WRITES.' '.$thetext.$notes;
		} 
		else 
		{
			$content .= $thetext.$notes;
		}
	}

$posted = _POSTEDON.' '.$datetime.' '._BY.' ';
$posted .= get_author($aid);

echo '<article>'
    .'  <section id="flex-container">'
    .'      <div class="st1"></div>'
    .'      <div class="st2"><div style="padding-top: 14px;"><span class="storytitle">'.$title.'</span></div></div>'
    .'      <div class="st3"></div>'
    .'  </section>'
    .'  <section id="flex-container">'
    .'      <div class="st4"></div>'
    .'      <div class="st5" class="col-12"><span class="content" style="vertical-align: top">'.$content.'</span><br /><br /></div>'
    .'      <div class="st6"></div>'
    .'  </section>'
    .'  <section id="flex-container">'
    .'      <div class="st7"></div>'
    .'      <div class="st8"><div class="postedoption">'.$posted.'</div></div>'
    .'      <div class="st9"></div>'
    .'  </section>'
    .'</article>';
}

/*-------------------*/
/* Centerbox Section */
/*-------------------*/
function themecenterbox($title, $content) 
{
OpenTable();
  echo '<center><span class="option"><strong>'.$title.'</strong></span></center>'.$content;
CloseTable();
}

/*-----------------*/
/* Preview Section */
/*-----------------*/
function themepreview($title, $hometext, $bodytext='', $notes='') 
{
echo '<strong>'.$title.'</strong><br /><br />'.$hometext;
echo (!empty($bodytext)) ? '<br /><br />'.$bodytext : '';
echo (!empty($notes)) ? '<br /><br /><strong>'._NOTE.'</strong> <em>'.$notes.'</em>' : '';
}

/*-----------------*/
/* Sidebox Section */
/*-----------------*/
function themesidebox($title, $content, $bid = 0) 
{
echo '<aside>'
    .'  <div class="bl1"><div style="padding-top: 15px; text-align:center;"><span class="blocktitle" >'.$title.'</span></div></div>'
    .'  <div class="bl2">'
    .'    <div class="bl5-content" style="margin: auto;">'.$content.'</div>'
    .'  </div>'
    .'  <div class="bl3"></div>'
    .'</aside>'
    .'<br />';
}

?>