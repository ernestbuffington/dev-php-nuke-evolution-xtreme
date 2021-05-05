<?php
#---------------------------------------------------------------------------------------#
# HEADER NAVIGATION SYSTEM                                                              #
#---------------------------------------------------------------------------------------#
# THEME INFO                                                                            #
# Xtreme Core v1.0 (Fixed & Full Width)                                                 #
#                                                                                       #
# Final Build Date 05/04/2021 Tuesday 12:54am                                           #
#                                                                                       #
# A Very Nice Gold Theme Design.                                                        #
# Copyright © 2021 By: TheGhost AKA EABuffington                                        #
# e-Mail : ernest.buffington@gmail.com                                                  #
#---------------------------------------------------------------------------------------#
# CREATION INFO                                                                         #
# Created On: 05/04/2021 Tuesday 12:54am (v1.0)                                         #
#                                                                                       #
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

#------------------------------------#
# CSS Drop-Down Navigation System v9 #
#------------------------------------#
if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])){ exit('Access Denied');}

global $bgcolor1, $bgcolor2, $bgcolor3, $bgcolor4, $user, $cookie, $prefix, $sitekey, $db, $name, $banners, $user_prefix, $userinfo, $admin, $admin_file, $ThemeInfo;

########################
# DO NOT EDIT THIS LINE
#####################################################################################################################
echo '<div id="cssmenu" class="align-center">';
#####################################################################################################################
if (!is_user()) 
{
if ($name == 'Forums'):
?>
<div align="center">
 <div class="btn-group">
    <a href="index.php" class="btn btn-primary dropbtn" role="button">Home</a>
    <a href="modules.php?name=Forums" class="btn btn-primary adropbtn" role="button">Forum Index</a>
    <a href="modules.php?name=Forums&file=search&search_id=newposts" class="btn btn-primary dropbtn" role="button">New Posts</a>
    <a href="modules.php?name=Forums&file=search&search_id=unanswered" class="btn btn-primary dropbtn" role="button">Unanswered Topics</a>
    <a href="modules.php?name=Forums&file=search" class="btn btn-primary dropbtn" role="button">Search</a>
  </div>


</div>
<?
else:
?>
<div align="center">





<div class="btn-group">
     <a href="index.php" class="btn btn-primary adropbtn" role="button">Home</a>
      <a href="modules.php?name=Forums" class="btn btn-primary dropbtn" role="button">Forums</a>
      <a href="modules.php?name=Web_Links" class="btn btn-primary dropbtn" role="button">Links</a>


       <div class="btn-group">
       <a class="btn dropbtn btn-primary dropdown-toggle" data-toggle="dropdown" role="button">Downloads</a>
       <ul class="dropdown-menu dropbtn dropdown-content" role="menu">
         <li><strong><a href="modules.php?name=File_Repository" class="btn btn-primary dropbtn" role="button">Main Downloads</a></strong></li>
         <li><strong><a href="modules.php?name=File_Repository&action=newdownloads" class="btn btn-primary dropbtn" role="button">New Downloads</a></strong></li>
         <li><strong><a href="modules.php?name=File_Repository&action=mostpopular" class="btn btn-primary dropbtn" role="button">Popular Downloads</a></strong></li>
         <li><strong><a href="modules.php?name=File_Repository&action=statistics" class="btn btn-primary dropbtn" role="button">Download Statistics</a></strong></li>
         <li><strong><a href="modules.php?name=File_Repository&action=search" class="btn btn-primary dropbtn" role="button">Search Downloads</a></strong></li>
         <li><strong><a href="modules.php?name=File_Repository&action=submitdownload" class="btn btn-primary dropbtn" role="button">Upload A File</a></strong></li>
       </ul>
       </div>

       <div class="btn-group">
       <a class="btn dropbtn btn-primary dropdown-toggle" data-toggle="dropdown" role="button">Blogs</a>
       <ul class="dropdown-menu dropbtn dropdown-content" role="menu">
         <li><strong><a href="modules.php?name=Blog" class="btn btn-primary dropbtn" role="button">Blogs</a></strong></li>
         <li><strong><a href="modules.php?name=Blog_Topics" class="btn btn-primary dropbtn" role="button">Blog Topics</a></strong></li>
         <li><strong><a href="modules.php?name=Blog_Archive" class="btn btn-primary dropbtn" role="button">Blog Archives</a></strong></li>
         <li><strong><a href="modules.php?name=Blog_Top" class="btn btn-primary dropbtn" role="button">Blog Top 10</a></strong></li>
         <li><strong><a href="modules.php?name=Blog_Submit" class="btn btn-primary dropbtn" role="button">Submit Blog</a></strong></li>
       </ul>
       </div>

       <div class="btn-group">
       <a href="modules.php?name=FAQ" class="btn btn-primary dropbtn" role="button">FAQ</a>
       </div>

       <div class="btn-group">
       <a href="modules.php?name=Your_Account" class="btn btn-primary dropbtn" role="button">My Account</a>
       </div>
</div></div>
<?
endif;
} 





if (is_user()) 
{
if ($name == 'Forums'):
?>
<div align="center">
 <div class="btn-group">
    <a href="index.php" class="btn btn-primary dropbtn" role="button">Home</a>
    <a href="modules.php?name=Forums" class="btn btn-primary adropbtn" role="button">Forum Index</a>
    <a href="modules.php?name=Forums&file=search&search_id=newposts" class="btn btn-primary dropbtn" role="button">New Posts</a>
    <a href="modules.php?name=Forums&file=search&search_id=unanswered" class="btn btn-primary dropbtn" role="button">Unanswered Topics</a>
    <a href="modules.php?name=Forums&file=search" class="btn btn-primary dropbtn" role="button">Search</a>
  </div>
</div>
<?
else:
?>
<div align="center">
    <div class="btn-group">
     
     <a href="index.php" class="btn btn-primary adropbtn" role="button">Home</a>
      <a href="modules.php?name=Forums" class="btn btn-primary dropbtn" role="button">Forums</a>
      <a href="modules.php?name=Web_Links" class="btn btn-primary dropbtn" role="button">Links</a>

<div class="btn-group">
       <a class="btn dropbtn btn-primary dropdown-toggle" data-toggle="dropdown" role="button">Downloads</a>
       <ul class="dropdown-menu dropbtn dropdown-content" role="menu">
         <li><strong><a href="modules.php?name=File_Repository" class="btn btn-primary dropbtn" role="button">Main Downloads</a></strong></li>
         <li><strong><a href="modules.php?name=File_Repository&action=newdownloads" class="btn btn-primary dropbtn" role="button">New Downloads</a></strong></li>
         <li><strong><a href="modules.php?name=File_Repository&action=mostpopular" class="btn btn-primary dropbtn" role="button">Popular Downloads</a></strong></li>
         <li><strong><a href="modules.php?name=File_Repository&action=statistics" class="btn btn-primary dropbtn" role="button">Download Statistics</a></strong></li>
         <li><strong><a href="modules.php?name=File_Repository&action=search" class="btn btn-primary dropbtn" role="button">Search Downloads</a></strong></li>
         <li><strong><a href="modules.php?name=File_Repository&action=submitdownload" class="btn btn-primary dropbtn" role="button">Upload A File</a></strong></li>
       </ul>
</div>

<div class="btn-group">
       <a class="btn dropbtn btn-primary dropdown-toggle" data-toggle="dropdown" role="button">Blogs</a>
       <ul class="dropdown-menu dropbtn dropdown-content" role="menu">
         <li><strong><a href="modules.php?name=Blog" class="btn btn-primary dropbtn" role="button">Blogs</a></strong></li>
         <li><strong><a href="modules.php?name=Blog_Topics" class="btn btn-primary dropbtn" role="button">Blog Topics</a></strong></li>
         <li><strong><a href="modules.php?name=Blog_Archive" class="btn btn-primary dropbtn" role="button">Blog Archives</a></strong></li>
         <li><strong><a href="modules.php?name=Blog_Top" class="btn btn-primary dropbtn" role="button">Blog Top 10</a></strong></li>
         <li><strong><a href="modules.php?name=Blog_Submit" class="btn btn-primary dropbtn" role="button">Submit Blog</a></strong></li>
       </ul>
</div>

       <a href="modules.php?name=FAQ" class="btn btn-primary dropbtn" role="button">FAQ</a>

<div class="btn-group">
       <a class="btn dropbtn btn-primary dropdown-toggle" data-toggle="dropdown" role="button">My Account</a>
       <ul class="dropdown-menu dropbtn dropdown-content" role="menu">
         <li><a href="modules.php?name=Private_Messages" class="btn btn-primary dropbtn" role="button">My InBox</a></li>
         <li><a href="modules.php?name=Image_Repository" class="btn btn-primary dropbtn" role="button">My Image Vault</a></li>
         <li><a href="modules.php?name=Network_Bookmarks" class="btn btn-primary dropbtn" role="button">My Bookmark Vault</a></li>
         <li><a href="modules.php?name=Profile&mode=editprofile" class="btn btn-primary dropbtn" role="button">Change My Info</a></li>
         <li><a href="modules.php?name=Your_Account&op=chgtheme" class="btn btn-primary dropbtn" role="button">Change My Theme</a></li>
         <li><a href="modules.php?name=Your_Account&op=logout" class="btn btn-primary dropbtn" role="button">Logout</a></li>
       </ul>
</div>
    
    
    </div>
</div>
<?
endif;
}

if (is_mod_admin('super'))
{

}
echo '</div>';
?>
