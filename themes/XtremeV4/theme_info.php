<?
#---------------------------------------------------------------------------------------#
# THEME CONFIG FILE                                                                     #
#---------------------------------------------------------------------------------------#
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

if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) 
exit('Quit trying to hack my website!');

$current_theme = basename(dirname(__FILE__));

global $theme_options;

$theme_options   = array();

$theme_options[] = array( "name" => "Xtreme v4.0 Theme Options",
                    "type" => "heading");

$theme_options[] = array( "name" => "Upload your logo",
                    "desc" => "Upload your logo. We recommend keeping it within reasonable size. Max width 400px and minimum height of 110px.",
                    "id"   => "logo",
                    "std"  => "img/logo.png",
                    "type" => "upload");

$theme_options[] = array( "name" => "Theme Width",
                    "desc" => "Set the theme width",
                    "id"   => "themewidth",
                    "std"  => "93%",
                    "type" => "text");

$theme_options[] = array( "name" => "BG Color 1",
                    "id"   => "bg_color_1",
                    "std"  => "#454545",
                    "type" => "text");

$theme_options[] = array( "name" => "BG Color 2",
                    "id"   => "bg_color_2",
                    "std"  => "#383838",
                    "type" => "text");

$theme_options[] = array( "name" => "BG Color 3",
                    "id"   => "bg_color_3",
                    "std"  => "#383838",
                    "type" => "text");

$theme_options[] = array( "name" => "BG Color 4",
                    "id"   => "bg_color_4",
                    "std"  => "#383838",
                    "type" => "text");

$theme_options[] = array( 'name'      => 'Select single/category/archive page template',
					'desc'      => 'Choose template for your category/archive page.',
					'id'        => 'archive_template',
					'std'       => 'right',
					'type'      => 'select',
					'options'   => array(
					'full'      => 'Full width',
					'right'     => 'Right Sidebar',
					'left'      => 'Left Sidebar'
					));


$param_names = array(
	'Theme Width<br /><span class="textmed">93% is the default.</span>',
	'global = $bgcolor1',
	'global = $bgcolor2',
	'global = $bgcolor3',
	'global = $bgcolor4',
	'global = $textcolor1',
	'global = $textcolor2',
	'Footer Message 1',
	'Footer Message 2',
	'Scroll To Top Arrow',
	'reCaptcha Skin<br /><span class="textmed">white | dark</span>' 
);

$params = array(
	'themewidth',
	'bgcolor1',
	'bgcolor2',
	'bgcolor3',
	'bgcolor4',
	'textcolor1',
	'textcolor2',
	'fms1',
	'fms2',
	'uitotophover',
	'recaptcha_skin'
);

$default = array(
	'93%',
	'#454545',
	'#383838',
	'#383838',
	'#383838',
	'#ccc',
	'#ccc',
	'Go to Theme Options to Edit Footer Message Line 1',
	'Go to Theme Options to Edit Footer Message Line 2',
	'#D29A2B',
	'dark'
);

global $ThemeInfo;
$ThemeInfo = LoadThemeInfo($current_theme);
?>
