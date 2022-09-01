<?php
# THEME INFO                                                                            #
# Universal Theme v1.0 (Fixed & Full Width)                                             #
#                                                                                       #
# Final Build Date 03/16/2021 Tuesday 12:54am                                           #
#                                                                                       #
# A Very Nice Fire and Brimstone Theme Design.                                          #
# Copyright © 2021 By: TheGhost AKA EABuffington                                        #
# e-Mail : ernest.buffington@gmail.com                                                  #
#---------------------------------------------------------------------------------------#
# CREATION INFO                                                                         #
# Created On: 03/16/2021 Tuesday 12:54am (v1.0)                                         #
#                                                                                       #
# Credit goes to Lonestar On: 1st August, 2019 (v3.0)                                   #
# HTML5 Theme Code By: Lonestar (Lonestar-Modules.com)                                  #
#                                                                                       #
# Credit goes to TheMortal                                                              #
# For his CSS MENU                                                                      #
#                                                                                       #
# Read CHANGELOG File for Updates & Upgrades Info                                       #
#                                                                                       #
# Designed By: TheGhost & Sebastian                                                     #
# Web Site: https://www.86it.us                                                         #
# Purpose: PHP-Nuke Titanium | Nuke Evolution Xtreme                                    #
#---------------------------------------------------------------------------------------#
# CMS INFO                                                                              #
# PHP-Nuke Copyright (c) 2006 by Francisco Burzi phpnuke.org                            #
# Nuke Evolution Xtreme (c) 2010 : Enhanced PHP-Nuke Web Portal System                  #
# PHP-Nuke Titanium (c) 2021     : Enhanced PHP-Nuke Web Portal System                  #
#---------------------------------------------------------------------------------------#
#                                                                                       #
# Special Honorable Mentions                                                            #
#---------------------------------------------------------------------------------------#
# killigan                                                                              # 
# -[04/17/2010] Updated Nuke Sentinel to version 2.6.01                                 # 
# -[04/17/2010] Updated Nuke Evolution to XHTML 1.0 Transitional                        #
#---------------------------------------------------------------------------------------#
# SgtLegend                                                                             #   
# -[04/17/2010] Updated Nuke Evolution to XHTML 1.0 Transitional                        #
# -[04/18/2010] Updated the installer/upgrade files and display                         #
# -[04/19/2010] Improved load time for global variables                                 #
# -[04/21/2010] Upgraded Swift mail to version 4.0.6                                    #
# -[04/21/2010] Upgraded HTML Purifier to version 4                                     # 
#---------------------------------------------------------------------------------------#
# Technocrat                                                                            # 
# -[04/22/2010] Added speed tweaks to the cache and PHP version compare                 #  
#---------------------------------------------------------------------------------------#
# Eyecu                                                                                 # 
# -[04/17/2010] Updated Nuke Evolution to XHTML 1.0 Transitional                        #
#---------------------------------------------------------------------------------------#
# Wolfstar                                                                              # 
# -[04/17/2010] Updated Nuke Evolution to XHTML 1.0 Transitional                        #
#---------------------------------------------------------------------------------------#

if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    exit('Access Denied');
}

/*--------------------------*/
/* Theme Article 
/*--------------------------*/
function themearticle($aid, $informant, $datetime, $modified, $title, $counter, $thetext, $topic, $topicname, $topicimage, $topictext, $writes = false) 
{
    global $admin, $sid, $tipath, $theme_name, $appID, $my_url;
    global $digits_color, $digits_txt_color;
	
echo "\n\n<!-- function themearticle START -->\n";

if (!empty($topicimage)) 
{
 $t_image = (file_exists(theme_images_dir.'topics/'.$topicimage)) ? theme_images_dir.'topics/'.$topicimage : $tipath.$topicimage;
 $topic_img = '<td width="25%" align="center" class="extra"><a href="modules.php?name=Blog&new_topic='.$topic.'"><img src="'.$t_image.'" border="0" alt="'.$topictext.'" title="'.$topictext.'"></a></td>';
	} 
	else 
	$topic_img = '';
	
	$notes = (!empty($notes)) ? '<br /><br /><strong>'._NOTE.'</strong> '.$notes : '';
	$content = '';
	
	if ($aid == $informant) 
	    $content = $thetext.$notes;
	else 
	{
		if ($writes)
		{
			if (!empty($informant)) 
			{
				$content = (is_array($informant)) ? '<a href="modules.php?name=Your_Account&amp;op=userinfo&amp;username='.$informant[0].'">'.$informant[1].'</a> ' : '<a href="modules.php?name=Your_Account&amp;op=userinfo&amp;username='.$informant.'">'.$informant.'</a> ';
			}
			else 
				$content = $anonymous.' ';
			
			$content .= _WRITES.' '.$thetext.$notes;
		} 
		else 
			$content .= $thetext.$notes;
	}

$posted .= '<strong>Posted by '.get_author($aid).' '.$datetime.'</strong>';
$reads = '(<span style="color: '.$digits_txt_color.';"> Reads :</span> <span style="color: '.$digits_color.';"><strong>'.$counter.'</strong></span> )';

print '<table class=blockz cellSpacing="0" cellPadding="0" border="0" width="100%">'."\n";
print '<tr><td width="39" style="background: repeat-x; background-image: url('.HTTPS.'themes/'.$theme_name.'/tables/OpenTable/invisible_pixel.gif);">'."\n";
print '<img src="'.HTTPS.'themes/'.$theme_name.'/tables/OpenTable/tlc.png" border="0" width="39" height="50"></td>'."\n";

print '<td valign="top" align="center" style="background: repeat-x; background-image: url('.HTTPS.'themes/'.$theme_name.'/tables/OpenTable/topmiddle.png);"><br />PHP-Nuke Evolution Xtreme (US Version)</td>'."\n";

print '<td align="right" width="39">'."\n";
print '<img src="'.HTTPS.'themes/'.$theme_name.'/tables/OpenTable/trc.png" border="0" width="39" height="50"></td>'."\n";
print '</tr>'."\n";
print '<tr><td colSpan="3">'."\n";
print '<table cellSpacing="0" cellPadding="0" width="100%" border="0">'."\n";
print '<tr>'."\n";
print '<td width="23" height="3" background="'.HTTPS.'themes/'.$theme_name.'/tables/OpenTable/leftside.png">'."\n";
print '<img src="'.HTTPS.'themes/'.$theme_name.'/tables/OpenTable/leftside.png" border="0" width="23" height="3"></td>'."\n";
print '<td width="100%">'."\n";
print '<table cellSpacing="0" cellPadding="8" width="100%" border="0" style="border-collapse: collapse" bordercolor="#111111">'."\n";
print '<tr>'."\n";
print '<td width="100%" bgcolor="#0b151f">'."\n";

# This stays no matter what START
print '<div align="center">';
print '<table style="background-color: none; height:100%; width:99%;" class="theme_article" align="center" border="5" cellpadding="15" cellspacing="20" dir="ltr" id="theme_article">';
print '<tbody>';
print '<tr>';
print '<td>';

print '<div align="center" style="padding-top:13px;">';
print '</div>';

echo '<div align="center" id="text"><h1><font size="6"><strong>'.$topictext.'</strong></font><br/></h1>';
print '</div>';

print '<div align="center" style="padding-top:1px;"><h2><font size="4"><strong>'.$title.'</strong></font></h2>';
print '</div>';

print ''.$posted.'';

print '<div align="center" style="padding-top:6px;">';
print '</div>';

echo "<!-- CONTENT THEME ARTICLE START -->\n\n";

//content START
echo '<div align="left" id="text">';
echo ''.$content.'</div>';
//content END

echo "\n\n<!-- CONTENT THEME ARTICLE END -->\n\n";

print blog_signature($aid);

echo "\n\n<!-- facebook functions START -->\n";
facebook_likes();
facebook_comments();
echo "<!-- facebook functions END -->\n\n\n";

echo '<div valign="bottom" align="right">'.$reads.'</div>';

print '</td>';
print '</tr>';
print '</tbody>';
print '</table>';
print '</div>';

# This stays no matter what END	

print '</td>';
print '</tr>';
print '</table>';
print '</td>';
print '<td width="23" height="3" background="'.HTTPS.'themes/'.$theme_name.'/tables/CloseTable/rightside.png">'."\n";
print '<img src="'.HTTPS.'themes/'.$theme_name.'/tables/CloseTable/rightside.png" border="0" width="23" height="3"></td>'."\n";
print '</tr>'."\n";
print '</table>'."\n";
print '</td>'."\n";
print '</tr>'."\n";
print '<tr>'."\n";

print '<td width="39" style="background: repeat-x; background-image: url('.HTTPS.'themes/'.$theme_name.'/tables/OpenTable/invisible_pixel.gif);">'."\n";
print '<img src="'.HTTPS.'themes/'.$theme_name.'/tables/CloseTable/lbc.png" border="0" width="39" height="50"></td>'."\n";

print '<td align="center" background="'.HTTPS.'themes/'.$theme_name.'/tables/CloseTable/bm.png"></td>'."\n";

print '<td width="39" style="background: repeat-x; background-image: url('.HTTPS.'themes/'.$theme_name.'/tables/OpenTable/invisible_pixel.gif);">'."\n";
print '<img src="'.HTTPS.'themes/'.$theme_name.'/tables/CloseTable/brc.png" border="0" width="39" height="50"></td>'."\n";

print '</tr>'."\n";
print '</table>'."\n";

# This sets the space between blogs listed START
print '<div align="center" style="padding-top:6px;">';
print '</div>';
# This sets the space between blogs listed END

echo "\n<!-- function themearticle END -->\n\n\n";
}
?>
