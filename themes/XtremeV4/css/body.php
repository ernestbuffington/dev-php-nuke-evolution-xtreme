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

global $screen_width, $screen_height;

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

/*---------------------------------------------------------------*/
/* CSS DROP-DOWN MENU NAVIGATION v3                              */
/*                                                               */
/* Designed and Coded By: TheMortal                              */
/* Coded On: 14th January, 2019                                  */
/* Copyright © 2019 TheMortal All Rights Reserved                */
/*                                                               */
/* DO NOT STEAL AND/OR USE THIS NAVIGATIONS CSS CODE             */
/* WITHOUT WRITTEN PERMISSION FROM The Mortal                    */
/* He traded a goat for it and it's his!                         */
/*---------------------------------------------------------------*/

@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);

#cssmenu,
#cssmenu ul,
#cssmenu ul li,
#cssmenu ul li a,
#cssmenu #menu-button {
  margin: 0;
  padding: 0;
  border: 0;
  list-style: none;
  line-height: 1;
  display: block;
  position: relative;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

#cssmenu:after,
#cssmenu > ul:after {
  content: ".";
  display: block;
  clear: both;
  visibility: hidden;
  line-height: 0;
  height: 0;
}

#cssmenu #menu-button {
  display: none;
}

#cssmenu > ul {
  box-shadow: inset 0 -3px 0 rgba(0, 0, 0, 0.05);
}

#cssmenu.align-right > ul > li {
  float: right;
}

#cssmenu > ul > li {
  float: left;
  display: inline-block;
}

#cssmenu.align-center > ul {
  float: none;
  text-align: center;
  font-size: 0;
}

#cssmenu.align-center > ul > li {
  float: none;
}

#cssmenu.align-center ul ul {
  text-align: left;
}

#cssmenu > ul > li > a {
  padding: 8px 25px 21px 25px; /* Changes Top Padding Alignment *//* Top/Right/Bottom/Left */
  border-right: 0px solid rgba(80, 80, 80, 0.42); /* Changes Divider Lines */
  height: 29px; /* Changes Button & Dividers Height */
  text-decoration: none;
  font-size: 13px;
  font-weight: 500;
  color: #ffffff; /* Changes Button Text Color */
  text-transform: uppercase;
  letter-spacing: 1px;
}

#cssmenu > ul > li:hover > a,
#cssmenu > ul > li > a:hover {
  color: #D29A2B;
  background: #03070a;
  background: rgba(0, 0, 0, 0.4); /* Changes Hover Background Transparency */
  -webkit-transition: color 0.6s linear, background 0.6s linear;
  -moz-transition: color 0.6s linear, background 0.6s linear;
  -o-transition: color 0.6s linear, background 0.6s linear;
  transition: color 0.6s linear, background 0.6s linear;
}

#cssmenu > ul > li.has-sub > a {
  padding-right: 45px;
}

#cssmenu > ul > li.has-sub > a::after {
  content: "";
  position: absolute;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-top-color: #f599a4; /* Changes Arrow Color */
  right: 17px; /* Changes Arrow Spacing Right */
  top: 18px; /* Changes Arrow Height Alignment */
}

#cssmenu > ul > li.has-sub.active > a::after,
#cssmenu > ul > li.has-sub:hover > a {
  border-top-color: #D29A2B;
}

#cssmenu ul ul {
  position: absolute;
  left: -9999px;
  top: 60px;
  z-index: 9999;
  padding-top: 6px;
  font-size: 13px;
  opacity: 0;
  -webkit-transition: top 0.2s ease, opacity 0.2s ease-in;
  -moz-transition: top 0.2s ease, opacity 0.2s ease-in;
  -ms-transition: top 0.2s ease, opacity 0.2s ease-in;
  -o-transition: top 0.2s ease, opacity 0.2s ease-in;
  transition: top 0.2s ease, opacity 0.2s ease-in;
  border-left: 1px solid rgba(80, 80, 80, 0.42); /* Changes Divider Lines */
  border-right: 1px solid rgba(80, 80, 80, 0.42); /* Changes Divider Lines */
}

#cssmenu.align-right ul ul {
  text-align: right;
}

#cssmenu > ul > li > ul::after {
  content: "";
  position: absolute;
  width: 0;
  height: 0;
  border: 5px solid transparent;
  border-bottom-color: #D29A2B; /* Change Sub-Menu Arrow Up */
  top: -4px;
  left: 20px;
}

#cssmenu.align-right > ul > li > ul::after {
  left: auto;
  right: 20px;
}

#cssmenu ul ul ul::after {
  content: "";
  position: absolute;
  width: 0;
  height: 0;
  border: 5px solid transparent;
  border-right-color: #131313;
  top: 11px;
  left: -4px;
}

#cssmenu.align-right ul ul ul::after {
  border-right-color: transparent;
  border-left-color: #131313;
  left: auto;
  right: -4px;
}

#cssmenu > ul > li > ul {
  top: 120px;
}

#cssmenu > ul > li:hover > ul {
  top: 29px; /* Changes Submenu Spacing 0px Default */
  left: 0;
  opacity: 1;
}

#cssmenu.align-right > ul > li:hover > ul {
  left: auto;
  right: 0;
}

#cssmenu ul ul ul {
  padding-top: 0;
  padding-left: 6px;
}

#cssmenu.align-right ul ul ul {
  padding-right: 6px;
}

#cssmenu ul ul > li:hover > ul {
  left: 190px;
  top: 0;
  opacity: 1;
}

#cssmenu.align-right ul ul > li:hover > ul {
  left: auto;
  right: 100%;
  opacity: 1;
}

#cssmenu ul ul li a {
  text-decoration: none;
  font-weight: 400;
  padding: 11px 25px;
  width: 175px; /* Changes Width of Sub Menu */
  color: #868686;
  background: #152735;
  box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1), 1px 1px 1px rgba(0, 0, 0, 0.1), -1px 1px 1px rgba(0, 0, 0, 0.1);
}

#cssmenu ul ul li:hover > a,
#cssmenu ul ul li.active > a {
  color: #ffc600;
}

#cssmenu ul ul li:first-child > a {
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
}

#cssmenu ul ul li:last-child > a {
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
}

#cssmenu > ul > li > ul::after {
  position: absolute;
  display: block;
}

#cssmenu ul ul li.has-sub > a::after {
  content: "";
  position: absolute;
  width: 0;
  height: 0;
  border: 4px solid transparent;
  border-left-color: #868686;
  right: 17px;
  top: 14px;
}

#cssmenu.align-right ul ul li.has-sub > a::after {
  border-left-color: transparent;
  border-right-color: #868686;
  right: auto;
  left: 17px;
}

#cssmenu ul ul li.has-sub.active > a::after,
#cssmenu ul ul li.has-sub:hover > a::after {
  border-left-color: #f1f1f1;
}

#cssmenu.align-right ul ul li.has-sub.active > a::after,
#cssmenu.align-right ul ul li.has-sub:hover > a::after {
  border-right-color: #f1f1f1;
  border-left-color: transparent;
}

@media all and (max-width: 800px), only screen and (-webkit-min-device-pixel-ratio: 2) and (max-width: 1024px), only screen and (min--moz-device-pixel-ratio: 2) and (max-width: 1024px), only screen and (-o-min-device-pixel-ratio: 2/1) and (max-width: 1024px), only screen and (min-device-pixel-ratio: 2) and (max-width: 1024px), only screen and (min-resolution: 192dpi) and (max-width: 1024px), only screen and (min-resolution: 2dppx) and (max-width: 1024px) {
  
  #cssmenu {
    background: #0b5394;
  }
  
  #cssmenu > ul {
    display: none;
  }
  
  #cssmenu > ul.open {
    display: block;
    border-top: 1px solid rgba(0, 0, 0, 0.1);
  }
  
  #cssmenu.align-right > ul {
    float: none;
  }
  
  #cssmenu.align-center > ul {
    text-align: left;
  }
  
  #cssmenu > ul > li,
  #cssmenu.align-right > ul > li {
    float: none;
    display: block;
  }
  
  #cssmenu > ul > li > a {
    padding: 18px 25px 18px 25px;
    border-right: 0;
  }
  
  #cssmenu > ul > li:hover > a,
  #cssmenu > ul > li.active > a {
    background: rgba(0, 0, 0, 0.1);
  }
  
  #cssmenu #menu-button {
    display: block;
    text-decoration: none;
    font-size: 13px;
    font-weight: 700;
    color: RED;
    padding: 18px 25px 18px 25px; /* Top/Right/Bottom/Left */
    text-transform: uppercase;
    letter-spacing: 1px;
    cursor: pointer;
  }
  
  #cssmenu ul ul,
  #cssmenu ul li:hover > ul,
  #cssmenu > ul > li > ul,
  #cssmenu ul ul ul,
  #cssmenu ul ul li:hover > ul,
  #cssmenu.align-right ul ul,
  #cssmenu.align-right ul li:hover > ul,
  #cssmenu.align-right > ul > li > ul,
  #cssmenu.align-right ul ul ul,
  #cssmenu.align-right ul ul li:hover > ul {
    left: 0;
    right: auto;
    top: auto;
    opacity: 1;
    width: 100%;
    padding: 0;
    position: relative;
    text-align: left;
  }
  
  #cssmenu ul ul li {
    width: 100%;
  }
  
  #cssmenu ul ul li a {
    width: 100%;
    box-shadow: none;
    padding-left: 35px;
  }
  
  #cssmenu ul ul ul li a {
    padding-left: 45px;
  }
  
  #cssmenu ul ul li:first-child > a,
  #cssmenu ul ul li:last-child > a {
    border-radius: 0;
  }
  
  #cssmenu #menu-button::after {
    display: block;
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    content: '';
    position: absolute;
    height: 3px;
    width: 22px;
    border-top: 2px solid #f1f1f1;
    border-bottom: 2px solid #f1f1f1;
    right: 25px;
    top: 18px;
  }
  
  #cssmenu #menu-button::before {
    display: block;
    content: '';
    position: absolute;
    height: 3px;
    width: 22px;
    border-top: 2px solid #f1f1f1;
    right: 25px;
    top: 28px;
  }
  
  #cssmenu > ul > li.has-sub > a::after,
  #cssmenu ul ul li.has-sub > a::after {
    display: none;
  }
}
<?
