<?php
#---------------------------------------------------------------------------------------#
# HEADER                                                                                #
#---------------------------------------------------------------------------------------#
# THEME INFO                                                                            #
# Inferno Theme v1.0 (Fixed & Full Width)                                               #
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

global $theme_name;

echo "\n\n/* Universal/css/body.php Fly Kit for PHP-Nuke Titanium - Design Themes On The Fly */\n"; 
echo "/* When we are done we will move this code to style.css */\n\n"; 

global $screen_width, $screen_height, $bgcolor1, $bgcolor2, $bgcolor3, $bgcolor4;

?>
/*---------------------------------------------------------------*/
/* Full Screen Video Background v1.0                             */
/*                                                               */
/* Designed and Coded By: TheGhost                               */
/* Coded On: 22nd January, 2007                                  */
/* Copyright © 2007 TheGhost All Rights Reserved                 */
/*                                                               */
/* This uses Advanced Resolution Checking v1.0                   */
/*---------------------------------------------------------------*/
.fullscreen-bg {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  overflow: hidden;
  z-index: -100;
}

.fullscreen-bg__video {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: <?=$screen_height?>;
}

@media (max-width: <?=$screen_width?>) {
  .fullscreen-bg {
  }

  .fullscreen-bg__video {
    display: none;
  }
}

body{
background-color: black;	
}

.top_and_bottom{
background-color: black;	
background-image: 
url(../../../themes/<?=$theme_name?>/backgrounds/glasstop.png),
url(../../../themes/<?=$theme_name?>/backgrounds/sidebox_bottom.png);
background-position:
top right,                   /* this positions the first image - TheGhost add 8/2/2019 */
bottom left;                 /* this positions the second image - TheGhost add 8/2/2019 */
background-repeat:
no-repeat;                   /* this applies to both images - TheGhost add 8/2/2019 */ 
}

body7 {
background: url(<?php echo BODY_BACKGROUND; ?>);
<?php echo BODY_CONTAIN; ?>
}

blink{
animation: blinker 0.6s linear infinite;
color: #1c87c9;
}

@keyframes blinker {  
50% { opacity: 0; }
}

.blink-one {
animation: blinker-one 1s linear infinite;
}

@keyframes blinker-one {  
0% { opacity: 0; }
}

.blink-two {
animation: blinker-two 1.4s linear infinite;
}

@keyframes blinker-two {  
100% { opacity: 0; }
}

.banner_left {
position: absolute;
margin: 15px 115px 15px 115px;
left: 0;
display:inline;
z-index: 778;
}

.banner_right {
position: absolute;
margin: -70px 115px 15px 10px;
right: 0;
display:inline;
z-index: 777;
}

.logo {
float: center;
position: relative;
margin: 0px 0px 0px 0px;
z-index: 777;
}

@import url(//db.onlinewebfonts.com/c/783dd6c2d08bdc67012a0eec73fc1702?family=80sPXLW00-Thin);

@font-face {font-family: "80sPXLW00-Thin"; src: url("//db.onlinewebfonts.com/t/783dd6c2d08bdc67012a0eec73fc1702.eot"); src: url("//db.onlinewebfonts.com/t/783dd6c2d08bdc67012a0eec73fc1702.eot?#iefix") format("embedded-opentype"), url("//db.onlinewebfonts.com/t/783dd6c2d08bdc67012a0eec73fc1702.woff2") format("woff2"), url("//db.onlinewebfonts.com/t/783dd6c2d08bdc67012a0eec73fc1702.woff") format("woff"), url("//db.onlinewebfonts.com/t/783dd6c2d08bdc67012a0eec73fc1702.ttf") format("truetype"), url("//db.onlinewebfonts.com/t/783dd6c2d08bdc67012a0eec73fc1702.svg#80sPXLW00-Thin") format("svg"); }

.marquee_one {
overflow: hidden;
margin: 10px;
font-family: "80sPXLW00-Thin";
width: 481px;
height: 20px;
border: 1px solid #404040;
position: absolute;
margin: -120px 115px 15px 115px;
left: 0;
display:inline;
z-index: 780;
background: black;
color: rgb(104, 182, 4);
}

.marquee_two {
overflow: hidden;
margin: 10px;
font-family: "80sPXLW00-Thin";
width: 481px;
height: 20px;
border: 1px solid #404040;
position: absolute;
margin: -120px 115px 15px 115px;
right: 0;
display:inline;
z-index: 779;
background: black;
color: rgb(104, 182, 4);
}
<?
