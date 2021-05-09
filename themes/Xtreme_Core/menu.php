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

if (!is_user()) 
{
   # not logged in FORUMS menu START	
   if ($name == 'Forums'):

   echo '<div align="center">';
   
       echo ' <div class="btn-group">';
       echo '    <a href="index.php" class="btn btn-primary dropbtn" role="button">Home</a>';
       echo '    <a href="modules.php?name=Forums" class="btn btn-primary adropbtn" role="button">Forum Index</a>';
       echo '    <a href="modules.php?name=Forums&file=search&search_id=newposts" class="btn btn-primary dropbtn" role="button">New Posts</a>';
       echo '    <a href="modules.php?name=Forums&file=search&search_id=unanswered" class="btn btn-primary dropbtn" role="button">Unanswered Topics</a>';
       echo '    <a href="modules.php?name=Forums&file=search" class="btn btn-primary dropbtn" role="button">Search</a>';
       echo '  </div>';


    echo '</div>';
	# not logged in FORUMS menu END

    # not logged in Links START	
    elseif ($name == 'Web_Links'):



    # not logged in Links END	
else:

   echo '<div align="center">';

   echo '<div class="btn-group">';
   echo '     <a href="index.php" class="btn btn-primary adropbtn" role="button">Home</a>';
   echo '      <a href="modules.php?name=Forums" class="btn btn-primary dropbtn" role="button">Forums</a>';
   echo '      <a href="modules.php?name=Web_Links" class="btn btn-primary dropbtn" role="button">Links</a>';


   echo '<div class="btn-group">';
   echo '       <a class="btn dropbtn btn-primary dropdown-toggle" data-toggle="dropdown" role="button">Downloads</a>';
   echo '       <ul class="dropdown-menu dropbtn dropdown-content" role="menu">';
   echo '         <li><strong><a href="modules.php?name=File_Repository" class="btn btn-primary dropbtn" role="button">Main Downloads</a></strong></li>';
   echo '         <li><strong><a href="modules.php?name=File_Repository&action=newdownloads" class="btn btn-primary dropbtn" role="button">New Downloads</a></strong></li>';
   echo '         <li><strong><a href="modules.php?name=File_Repository&action=mostpopular" class="btn btn-primary dropbtn" role="button">Popular Downloads</a></strong></li>';
   echo '         <li><strong><a href="modules.php?name=File_Repository&action=statistics" class="btn btn-primary dropbtn" role="button">Download Statistics</a></strong></li>';
   echo '         <li><strong><a href="modules.php?name=File_Repository&action=search" class="btn btn-primary dropbtn" role="button">Search Downloads</a></strong></li>';
   echo '         <li><strong><a href="modules.php?name=File_Repository&action=submitdownload" class="btn btn-primary dropbtn" role="button">Upload A File</a></strong></li>';
   echo '       </ul>';
   echo '</div>';

    echo '<div class="btn-group">';
    echo '       <a class="btn dropbtn btn-primary dropdown-toggle" data-toggle="dropdown" role="button">Blog</a>';
    echo '       <ul class="dropdown-menu dropbtn dropdown-content" role="menu">';
    if (is_mod_admin('super')):
    echo '         <li><strong><a href="admin.php?op=adminStory" class="btn btn-primary dropbtn" role="button">Post New Blog</a></strong></li>';
    echo '         <li><strong><a href="admin.php?op=topicsmanager" class="btn btn-primary dropbtn" role="button">Create New Blog Topic</a></strong></li>';
    echo '         <li><strong><a href="admin.php?op=AddCategory" class="btn btn-primary dropbtn" role="button">Create New Blog Category</a></strong></li>';
    endif;
    echo '         <li><strong><a href="modules.php?name=Blog" class="btn btn-primary dropbtn" role="button">View Blog Posts</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=Blog_Topics" class="btn btn-primary dropbtn" role="button">View Blog Topics</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=Blog_Archive" class="btn btn-primary dropbtn" role="button">View Blog Archives</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=Blog_Top" class="btn btn-primary dropbtn" role="button">View Top 10 Blog Posts</a></strong></li>';
    if (!is_mod_admin('super'))
	echo '         <li><strong><a href="modules.php?name=Blog_Submit" class="btn btn-primary dropbtn" role="button">Submit Blog Post</a></strong></li>';
    echo '       </ul>';
    echo '</div>';

   echo '<div class="btn-group">';
   echo '       <a href="modules.php?name=FAQ" class="btn btn-primary dropbtn" role="button">FAQ</a>';
   echo '</div>';

   echo '<div class="btn-group">';
   echo '       <a href="modules.php?name=Your_Account" class="btn btn-primary dropbtn" role="button">My Account</a>';
   echo '</div>';
   
   
   echo '</div></div>';

endif;
} 


if (is_user()) 
{
    if ($name == 'Forums'):
    
	echo '<div align="center">';
    echo '<div class="btn-group">';

    echo ' <div class="btn-group">';
    echo '    <a href="index.php" class="btn btn-primary dropbtn" role="button">Home</a>';
    echo '    <a href="modules.php?name=Forums" class="btn btn-primary adropbtn" role="button">Forum Index</a>';
    echo '    <a href="modules.php?name=Forums&file=search&search_id=newposts" class="btn btn-primary dropbtn" role="button">New Posts</a>';
    echo '    <a href="modules.php?name=Forums&file=search&search_id=unanswered" class="btn btn-primary dropbtn" role="button">Unanswered Topics</a>';
    echo '    <a href="modules.php?name=Forums&file=search" class="btn btn-primary dropbtn" role="button">Search</a>';
    echo '  </div>';


    echo '</div></div>';
	
    ############################################################################################################################################################### 
    # logged in Private Messages START	
    elseif ($name == 'Private_Messages'):

    if( isset($_POST['folder']) || isset($_GET['folder'])):
        $folder = (isset($_POST['folder']) ) ? $_POST['folder'] : $_GET['folder'];
        
		if (is_string($folder)): 
        $folder = htmlspecialchars($folder);
        else: 
        $folder = '';
        endif;

        if($folder != 'inbox' && $folder != 'outbox' && $folder != 'sentbox' && $folder != 'savebox'):
        $folder = 'inbox';
		endif;
    
    else:
        $folder = 'inbox';
    endif;
	
    echo '<div align="center">';
    echo '    <div class="btn-group">';
     
    echo '     <a href="index.php" class="btn btn-primary dropbtn" role="button">Home</a>';
	
	if($folder != 'outbox' && $folder != 'sentbox' && $folder != 'savebox')
    echo '      <a href="modules.php?name=Private_Messages&folder=inbox" class="btn btn-primary adropbtn" role="button">In Box</a>';
    else
	echo '      <a href="modules.php?name=Private_Messages&folder=inbox" class="btn btn-primary dropbtn" role="button">In Box</a>';
	
	if($folder == 'sentbox')
	echo '      <a href="modules.php?name=Private_Messages&folder=sentbox" class="btn btn-primary adropbtn" role="button">Sent Box</a>';
    else
	echo '      <a href="modules.php?name=Private_Messages&folder=sentbox" class="btn btn-primary dropbtn" role="button">Sent Box</a>';
	
	if($folder == 'outbox')
	echo '      <a href="modules.php?name=Private_Messages&folder=outbox" class="btn btn-primary adropbtn" role="button">Out Box</a>';
	else
	echo '      <a href="modules.php?name=Private_Messages&folder=outbox" class="btn btn-primary dropbtn" role="button">Out Box</a>';
	
	if($folder == 'savebox')
    echo '      <a href="modules.php?name=Private_Messages&folder=savebox" class="btn btn-primary adropbtn" role="button">Saved Box</a>';
    else
	echo '      <a href="modules.php?name=Private_Messages&folder=savebox" class="btn btn-primary dropbtn" role="button">Saved Box</a>';

    
    echo '    </div>';
    echo '</div>';
    # logged in Private Messages END	





    ############################################################################################################################################################### 
    # logged in File_Repository START	
    elseif ($name == 'File_Repository'):

    echo '<div align="center">';
    echo '    <div class="btn-group">';
     
    echo '     <a href="index.php" class="btn btn-primary dropbtn" role="button">Home</a>';
    echo '      <a href="modules.php?name=Forums" class="btn btn-primary dropbtn" role="button">Forums</a>';
    echo '      <a href="modules.php?name=Web_Links" class="btn btn-primary dropbtn" role="button">Links</a>';

    echo '<div class="btn-group">';
    echo '       <a class="btn dropbtn btn-primary adropbtn adropdown-toggle" data-toggle="dropdown" role="button">Downloads</a>';
    echo '       <ul class="dropdown-menu adropbtn dropdown-content" role="menu">';
    echo '         <li><strong><a href="modules.php?name=File_Repository" class="btn btn-primary dropbtn" role="button">Main Downloads</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=File_Repository&action=newdownloads" class="btn btn-primary dropbtn" role="button">New Downloads</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=File_Repository&action=mostpopular" class="btn btn-primary dropbtn" role="button">Popular Downloads</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=File_Repository&action=statistics" class="btn btn-primary dropbtn" role="button">Download Statistics</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=File_Repository&action=search" class="btn btn-primary dropbtn" role="button">Search Downloads</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=File_Repository&action=submitdownload" class="btn btn-primary dropbtn" role="button">Upload A File</a></strong></li>';
    echo '       </ul>';
    echo '</div>';

    echo '<div class="btn-group">';
    echo '       <a class="btn dropbtn btn-primary dropdown-toggle" data-toggle="dropdown" role="button">Blog</a>';
    echo '       <ul class="dropdown-menu dropbtn dropdown-content" role="menu">';
    if (is_mod_admin('super')):
    echo '         <li><strong><a href="admin.php?op=adminStory" class="btn btn-primary dropbtn" role="button">Post New Blog</a></strong></li>';
    echo '         <li><strong><a href="admin.php?op=topicsmanager" class="btn btn-primary dropbtn" role="button">Create New Blog Topic</a></strong></li>';
    echo '         <li><strong><a href="admin.php?op=AddCategory" class="btn btn-primary dropbtn" role="button">Create New Blog Category</a></strong></li>';
    endif;
    echo '         <li><strong><a href="modules.php?name=Blog" class="btn btn-primary dropbtn" role="button">View Blog Posts</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=Blog_Topics" class="btn btn-primary dropbtn" role="button">View Blog Topics</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=Blog_Archive" class="btn btn-primary dropbtn" role="button">View Blog Archives</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=Blog_Top" class="btn btn-primary dropbtn" role="button">View Top 10 Blog Posts</a></strong></li>';
    if (!is_mod_admin('super'))
	echo '         <li><strong><a href="modules.php?name=Blog_Submit" class="btn btn-primary dropbtn" role="button">Submit Blog Post</a></strong></li>';
    echo '       </ul>';
    echo '</div>';

   echo '<div class="btn-group">';
   echo '       <a href="modules.php?name=FAQ" class="btn btn-primary dropbtn" role="button">FAQ</a>';
   echo '</div>';

   echo '<div class="btn-group">';
    echo '       <a class="btn dropbtn btn-primary dropdown-toggle" data-toggle="dropdown" role="button">My Account</a>';
    echo '       <ul class="dropdown-menu dropbtn dropdown-content" role="menu">';
    echo '         <li><strong><a href="modules.php?name=Private_Messages" class="btn btn-primary dropbtn" role="button">Message Center</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=Network_Bookmarks" class="btn btn-primary dropbtn" role="button">My Bookmarks</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=Image_Repository" class="btn btn-primary dropbtn" role="button">My Images</a></strong></li>';

    echo '         <li><strong><a href="modules.php?name=Groups" class="btn btn-primary dropbtn" role="button">My Groups</a></strong></li>';

    echo '         <li><strong><a href="modules.php?name=Your_Account" class="btn btn-primary dropbtn" role="button">View Pofile</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=Profile&mode=editprofile" class="btn btn-primary dropbtn" role="button">Edit Pofile</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=Your_Account&op=chgtheme" class="btn btn-primary dropbtn" role="button">Theme Selection</a></strong></li>';

    echo '       </ul>';
   echo '</div>';
    # logged in File_Repository END	












    ############################################################################################################################################################### 
    # logged in FAQ START	
    elseif ($name == 'FAQ'):

    echo '<div align="center">';
    echo '    <div class="btn-group">';
     
    echo '     <a href="index.php" class="btn btn-primary dropbtn" role="button">Home</a>';
    echo '      <a href="modules.php?name=Forums" class="btn btn-primary dropbtn" role="button">Forums</a>';
    echo '      <a href="modules.php?name=Web_Links" class="btn btn-primary dropbtn" role="button">Links</a>';

    echo '<div class="btn-group">';
    echo '       <a class="btn dropbtn btn-primary dropdown-toggle" data-toggle="dropdown" role="button">Downloads</a>';
    echo '       <ul class="dropdown-menu dropbtn dropdown-content" role="menu">';
    echo '         <li><strong><a href="modules.php?name=File_Repository" class="btn btn-primary dropbtn" role="button">Main Downloads</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=File_Repository&action=newdownloads" class="btn btn-primary dropbtn" role="button">New Downloads</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=File_Repository&action=mostpopular" class="btn btn-primary dropbtn" role="button">Popular Downloads</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=File_Repository&action=statistics" class="btn btn-primary dropbtn" role="button">Download Statistics</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=File_Repository&action=search" class="btn btn-primary dropbtn" role="button">Search Downloads</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=File_Repository&action=submitdownload" class="btn btn-primary dropbtn" role="button">Upload A File</a></strong></li>';
    echo '       </ul>';
    echo '</div>';

    echo '<div class="btn-group">';
    echo '       <a class="btn dropbtn btn-primary dropdown-toggle" data-toggle="dropdown" role="button">Blog</a>';
    echo '       <ul class="dropdown-menu dropbtn dropdown-content" role="menu">';
    if (is_mod_admin('super')):
    echo '         <li><strong><a href="admin.php?op=adminStory" class="btn btn-primary dropbtn" role="button">Post New Blog</a></strong></li>';
    echo '         <li><strong><a href="admin.php?op=topicsmanager" class="btn btn-primary dropbtn" role="button">Create New Blog Topic</a></strong></li>';
    echo '         <li><strong><a href="admin.php?op=AddCategory" class="btn btn-primary dropbtn" role="button">Create New Blog Category</a></strong></li>';
    endif;
    echo '         <li><strong><a href="modules.php?name=Blog" class="btn btn-primary dropbtn" role="button">View Blog Posts</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=Blog_Topics" class="btn btn-primary dropbtn" role="button">View Blog Topics</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=Blog_Archive" class="btn btn-primary dropbtn" role="button">View Blog Archives</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=Blog_Top" class="btn btn-primary dropbtn" role="button">View Top 10 Blog Posts</a></strong></li>';
    if (!is_mod_admin('super'))
	echo '         <li><strong><a href="modules.php?name=Blog_Submit" class="btn btn-primary dropbtn" role="button">Submit Blog Post</a></strong></li>';
    echo '       </ul>';
    echo '</div>';

   echo '<div class="btn-group">';
   echo '       <a href="modules.php?name=FAQ" class="btn btn-primary adropbtn" role="button">FAQ</a>';
   echo '</div>';

   echo '<div class="btn-group">';
    echo '       <a class="btn dropbtn btn-primary dropdown-toggle" data-toggle="dropdown" role="button">My Account</a>';
    echo '       <ul class="dropdown-menu dropbtn dropdown-content" role="menu">';
    echo '         <li><strong><a href="modules.php?name=Private_Messages" class="btn btn-primary dropbtn" role="button">Message Center</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=Network_Bookmarks" class="btn btn-primary dropbtn" role="button">My Bookmarks</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=Image_Repository" class="btn btn-primary dropbtn" role="button">My Images</a></strong></li>';

    echo '         <li><strong><a href="modules.php?name=Groups" class="btn btn-primary dropbtn" role="button">My Groups</a></strong></li>';

    echo '         <li><strong><a href="modules.php?name=Your_Account" class="btn btn-primary dropbtn" role="button">View Pofile</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=Profile&mode=editprofile" class="btn btn-primary dropbtn" role="button">Edit Pofile</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=Your_Account&op=chgtheme" class="btn btn-primary dropbtn" role="button">Theme Selection</a></strong></li>';

    echo '       </ul>';
   echo '</div>';
    # logged in FAQ END	

    # logged in FAQ START	
    elseif ($name == 'Image_Repository'):

    echo '<div align="center">';
    echo '    <div class="btn-group">';
     
    echo '     <a href="index.php" class="btn btn-primary dropbtn" role="button">Home</a>';
    echo '      <a href="modules.php?name=Forums" class="btn btn-primary dropbtn" role="button">Forums</a>';
    echo '      <a href="modules.php?name=Web_Links" class="btn btn-primary dropbtn" role="button">Links</a>';

    echo '<div class="btn-group">';
    echo '       <a class="btn dropbtn btn-primary dropdown-toggle" data-toggle="dropdown" role="button">Downloads</a>';
    echo '       <ul class="dropdown-menu dropbtn dropdown-content" role="menu">';
    echo '         <li><strong><a href="modules.php?name=File_Repository" class="btn btn-primary dropbtn" role="button">Main Downloads</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=File_Repository&action=newdownloads" class="btn btn-primary dropbtn" role="button">New Downloads</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=File_Repository&action=mostpopular" class="btn btn-primary dropbtn" role="button">Popular Downloads</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=File_Repository&action=statistics" class="btn btn-primary dropbtn" role="button">Download Statistics</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=File_Repository&action=search" class="btn btn-primary dropbtn" role="button">Search Downloads</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=File_Repository&action=submitdownload" class="btn btn-primary dropbtn" role="button">Upload A File</a></strong></li>';
    echo '       </ul>';
    echo '</div>';

    echo '<div class="btn-group">';
    echo '       <a class="btn dropbtn btn-primary dropdown-toggle" data-toggle="dropdown" role="button">Blog</a>';
    echo '       <ul class="dropdown-menu dropbtn dropdown-content" role="menu">';
    if (is_mod_admin('super')):
    echo '         <li><strong><a href="admin.php?op=adminStory" class="btn btn-primary dropbtn" role="button">Post New Blog</a></strong></li>';
    echo '         <li><strong><a href="admin.php?op=topicsmanager" class="btn btn-primary dropbtn" role="button">Create New Blog Topic</a></strong></li>';
    echo '         <li><strong><a href="admin.php?op=AddCategory" class="btn btn-primary dropbtn" role="button">Create New Blog Category</a></strong></li>';
    endif;
    echo '         <li><strong><a href="modules.php?name=Blog" class="btn btn-primary dropbtn" role="button">View Blog Posts</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=Blog_Topics" class="btn btn-primary dropbtn" role="button">View Blog Topics</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=Blog_Archive" class="btn btn-primary dropbtn" role="button">View Blog Archives</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=Blog_Top" class="btn btn-primary dropbtn" role="button">View Top 10 Blog Posts</a></strong></li>';
    if (!is_mod_admin('super'))
	echo '         <li><strong><a href="modules.php?name=Blog_Submit" class="btn btn-primary dropbtn" role="button">Submit Blog Post</a></strong></li>';
    echo '       </ul>';
    echo '</div>';

   echo '<div class="btn-group">';
   echo '       <a href="modules.php?name=FAQ" class="btn btn-primary dropbtn" role="button">FAQ</a>';
   echo '</div>';

   echo '<div class="btn-group">';
    echo '       <a class="btn dropbtn btn-primary dropdown-toggle" data-toggle="dropdown" role="button">My Account</a>';
    echo '       <ul class="dropdown-menu dropbtn dropdown-content" role="menu">';
    echo '         <li><strong><a href="modules.php?name=Private_Messages" class="btn btn-primary dropbtn" role="button">Message Center</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=Network_Bookmarks" class="btn btn-primary dropbtn" role="button">My Bookmarks</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=Image_Repository" class="btn btn-primary dropbtn" role="button">My Images</a></strong></li>';

    echo '         <li><strong><a href="modules.php?name=Groups" class="btn btn-primary dropbtn" role="button">My Groups</a></strong></li>';

    echo '         <li><strong><a href="modules.php?name=Your_Account" class="btn btn-primary dropbtn" role="button">View Pofile</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=Profile&mode=editprofile" class="btn btn-primary dropbtn" role="button">Edit Pofile</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=Your_Account&op=chgtheme" class="btn btn-primary dropbtn" role="button">Theme Selection</a></strong></li>';

    echo '       </ul>';
   echo '</div>';
    # logged in Image_Repository END	


    ############################################################################################################################################################### 
    # logged in Links START	
    elseif ($name == 'Web_Links'):

    echo '<div align="center">';
    echo '    <div class="btn-group">';
     
    echo '     <a href="index.php" class="btn btn-primary dropbtn" role="button">Home</a>';
    echo '      <a href="modules.php?name=Forums" class="btn btn-primary dropbtn" role="button">Forums</a>';
    echo '      <a href="modules.php?name=Web_Links" class="btn btn-primary adropbtn" role="button">Links</a>';

    echo '<div class="btn-group">';
    echo '       <a class="btn dropbtn btn-primary dropdown-toggle" data-toggle="dropdown" role="button">Downloads</a>';
    echo '       <ul class="dropdown-menu dropbtn dropdown-content" role="menu">';
    echo '         <li><strong><a href="modules.php?name=File_Repository" class="btn btn-primary dropbtn" role="button">Main Downloads</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=File_Repository&action=newdownloads" class="btn btn-primary dropbtn" role="button">New Downloads</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=File_Repository&action=mostpopular" class="btn btn-primary dropbtn" role="button">Popular Downloads</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=File_Repository&action=statistics" class="btn btn-primary dropbtn" role="button">Download Statistics</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=File_Repository&action=search" class="btn btn-primary dropbtn" role="button">Search Downloads</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=File_Repository&action=submitdownload" class="btn btn-primary dropbtn" role="button">Upload A File</a></strong></li>';
    echo '       </ul>';
    echo '</div>';

    echo '<div class="btn-group">';
    echo '       <a class="btn dropbtn btn-primary dropdown-toggle" data-toggle="dropdown" role="button">Blog</a>';
    echo '       <ul class="dropdown-menu dropbtn dropdown-content" role="menu">';
    if (is_mod_admin('super')):
    echo '         <li><strong><a href="admin.php?op=adminStory" class="btn btn-primary dropbtn" role="button">Post New Blog</a></strong></li>';
    echo '         <li><strong><a href="admin.php?op=topicsmanager" class="btn btn-primary dropbtn" role="button">Create New Blog Topic</a></strong></li>';
    echo '         <li><strong><a href="admin.php?op=AddCategory" class="btn btn-primary dropbtn" role="button">Create New Blog Category</a></strong></li>';
    endif;
    echo '         <li><strong><a href="modules.php?name=Blog" class="btn btn-primary dropbtn" role="button">View Blog Posts</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=Blog_Topics" class="btn btn-primary dropbtn" role="button">View Blog Topics</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=Blog_Archive" class="btn btn-primary dropbtn" role="button">View Blog Archives</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=Blog_Top" class="btn btn-primary dropbtn" role="button">View Top 10 Blog Posts</a></strong></li>';
    if (!is_mod_admin('super'))
	echo '         <li><strong><a href="modules.php?name=Blog_Submit" class="btn btn-primary dropbtn" role="button">Submit Blog Post</a></strong></li>';
    echo '       </ul>';
    echo '</div>';

   echo '<div class="btn-group">';
   echo '       <a href="modules.php?name=FAQ" class="btn btn-primary dropbtn" role="button">FAQ</a>';
   echo '</div>';

   echo '<div class="btn-group">';
    echo '       <a class="btn dropbtn btn-primary dropdown-toggle" data-toggle="dropdown" role="button">My Account</a>';
    echo '       <ul class="dropdown-menu dropbtn dropdown-content" role="menu">';
    echo '         <li><strong><a href="modules.php?name=Private_Messages" class="btn btn-primary dropbtn" role="button">Message Center</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=Network_Bookmarks" class="btn btn-primary dropbtn" role="button">My Bookmarks</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=Image_Repository" class="btn btn-primary dropbtn" role="button">My Images</a></strong></li>';

    echo '         <li><strong><a href="modules.php?name=Groups" class="btn btn-primary dropbtn" role="button">My Groups</a></strong></li>';

    echo '         <li><strong><a href="modules.php?name=Your_Account" class="btn btn-primary dropbtn" role="button">View Pofile</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=Profile&mode=editprofile" class="btn btn-primary dropbtn" role="button">Edit Pofile</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=Your_Account&op=chgtheme" class="btn btn-primary dropbtn" role="button">Theme Selection</a></strong></li>';

    echo '       </ul>';
   echo '</div>';
    # logged in Links END	













    ############################################################################################################################################################### 
    # logged in Blog START	
    elseif (($name == 'Blog') OR ($name == 'Blog_Topics') OR ($name == 'Blog_Archive') OR ($name == 'Blog_Top') OR ($name == 'Blog_Submit')):

    echo '<div align="center">';
    echo '    <div class="btn-group">';
     
    echo '     <a href="index.php" class="btn btn-primary dropbtn" role="button">Home</a>';
    echo '      <a href="modules.php?name=Forums" class="btn btn-primary dropbtn" role="button">Forums</a>';
    echo '      <a href="modules.php?name=Web_Links" class="btn btn-primary dropbtn" role="button">Links</a>';

    echo '<div class="btn-group">';
    echo '       <a class="btn dropbtn btn-primary dropdown-toggle" data-toggle="dropdown" role="button">Downloads</a>';
    echo '       <ul class="dropdown-menu dropbtn dropdown-content" role="menu">';
    echo '         <li><strong><a href="modules.php?name=File_Repository" class="btn btn-primary dropbtn" role="button">Main Downloads</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=File_Repository&action=newdownloads" class="btn btn-primary dropbtn" role="button">New Downloads</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=File_Repository&action=mostpopular" class="btn btn-primary dropbtn" role="button">Popular Downloads</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=File_Repository&action=statistics" class="btn btn-primary dropbtn" role="button">Download Statistics</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=File_Repository&action=search" class="btn btn-primary dropbtn" role="button">Search Downloads</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=File_Repository&action=submitdownload" class="btn btn-primary dropbtn" role="button">Upload A File</a></strong></li>';
    echo '       </ul>';
    echo '</div>';

    echo '<div class="btn-group">';
    echo '       <a class="btn adropbtn btn-primary dropdown-toggle" data-toggle="dropdown" role="button">Blog</a>';
    echo '       <ul class="dropdown-menu dropbtn dropdown-content" role="menu">';
    if (is_mod_admin('super')):
    echo '         <li><strong><a href="admin.php?op=adminStory" class="btn btn-primary dropbtn" role="button">Post New Blog</a></strong></li>';
    echo '         <li><strong><a href="admin.php?op=topicsmanager" class="btn btn-primary dropbtn" role="button">Create New Blog Topic</a></strong></li>';
    echo '         <li><strong><a href="admin.php?op=AddCategory" class="btn btn-primary dropbtn" role="button">Create New Blog Category</a></strong></li>';
    endif;
    echo '         <li><strong><a href="modules.php?name=Blog" class="btn btn-primary dropbtn" role="button">View Blog Posts</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=Blog_Topics" class="btn btn-primary dropbtn" role="button">View Blog Topics</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=Blog_Archive" class="btn btn-primary dropbtn" role="button">View Blog Archives</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=Blog_Top" class="btn btn-primary dropbtn" role="button">View Top 10 Blog Posts</a></strong></li>';
    if (!is_mod_admin('super'))
	echo '         <li><strong><a href="modules.php?name=Blog_Submit" class="btn btn-primary dropbtn" role="button">Submit Blog Post</a></strong></li>';
    echo '       </ul>';
    echo '</div>';

   echo '<div class="btn-group">';
   echo '       <a href="modules.php?name=FAQ" class="btn btn-primary dropbtn" role="button">FAQ</a>';
   echo '</div>';

   echo '<div class="btn-group">';
    echo '       <a class="btn dropbtn btn-primary dropdown-toggle" data-toggle="dropdown" role="button">My Account</a>';
    echo '       <ul class="dropdown-menu dropbtn dropdown-content" role="menu">';
    echo '         <li><strong><a href="modules.php?name=Private_Messages" class="btn btn-primary dropbtn" role="button">Message Center</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=Network_Bookmarks" class="btn btn-primary dropbtn" role="button">My Bookmarks</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=Image_Repository" class="btn btn-primary dropbtn" role="button">My Images</a></strong></li>';

    echo '         <li><strong><a href="modules.php?name=Groups" class="btn btn-primary dropbtn" role="button">My Groups</a></strong></li>';

    echo '         <li><strong><a href="modules.php?name=Your_Account" class="btn btn-primary dropbtn" role="button">View Pofile</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=Profile&mode=editprofile" class="btn btn-primary dropbtn" role="button">Edit Pofile</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=Your_Account&op=chgtheme" class="btn btn-primary dropbtn" role="button">Theme Selection</a></strong></li>';

    echo '       </ul>';
   echo '</div>';
    # logged in Blog END	





































else:

 echo '<div align="center">';
echo '<div class="btn-group">';
     
    echo '     <a href="index.php" class="btn btn-primary adropbtn" role="button">Home</a>';
    echo '      <a href="modules.php?name=Forums" class="btn btn-primary dropbtn" role="button">Forums</a>';
    echo '      <a href="modules.php?name=Web_Links" class="btn btn-primary dropbtn" role="button">Links</a>';

    echo '<div class="btn-group">';
    echo '       <a class="btn dropbtn btn-primary dropdown-toggle" data-toggle="dropdown" role="button">Downloads</a>';
    echo '       <ul class="dropdown-menu dropbtn dropdown-content" role="menu">';
    echo '         <li><strong><a href="modules.php?name=File_Repository" class="btn btn-primary dropbtn" role="button">Main Downloads</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=File_Repository&action=newdownloads" class="btn btn-primary dropbtn" role="button">New Downloads</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=File_Repository&action=mostpopular" class="btn btn-primary dropbtn" role="button">Popular Downloads</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=File_Repository&action=statistics" class="btn btn-primary dropbtn" role="button">Download Statistics</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=File_Repository&action=search" class="btn btn-primary dropbtn" role="button">Search Downloads</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=File_Repository&action=submitdownload" class="btn btn-primary dropbtn" role="button">Upload A File</a></strong></li>';
    echo '       </ul>';
    echo '</div>';

    echo '<div class="btn-group">';
    echo '       <a class="btn dropbtn btn-primary dropdown-toggle" data-toggle="dropdown" role="button">Blog</a>';
    echo '       <ul class="dropdown-menu dropbtn dropdown-content" role="menu">';
    if (is_mod_admin('super')):
    echo '         <li><strong><a href="admin.php?op=adminStory" class="btn btn-primary dropbtn" role="button">Post New Blog</a></strong></li>';
    echo '         <li><strong><a href="admin.php?op=topicsmanager" class="btn btn-primary dropbtn" role="button">Create New Blog Topic</a></strong></li>';
    echo '         <li><strong><a href="admin.php?op=AddCategory" class="btn btn-primary dropbtn" role="button">Create New Blog Category</a></strong></li>';
    endif;
    echo '         <li><strong><a href="modules.php?name=Blog" class="btn btn-primary dropbtn" role="button">View Blog Posts</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=Blog_Topics" class="btn btn-primary dropbtn" role="button">View Blog Topics</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=Blog_Archive" class="btn btn-primary dropbtn" role="button">View Blog Archives</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=Blog_Top" class="btn btn-primary dropbtn" role="button">View Top 10 Blog Posts</a></strong></li>';
    if (!is_mod_admin('super'))
	echo '         <li><strong><a href="modules.php?name=Blog_Submit" class="btn btn-primary dropbtn" role="button">Submit Blog Post</a></strong></li>';
    echo '       </ul>';
    echo '</div>';

   echo '<div class="btn-group">';
   echo '       <a href="modules.php?name=FAQ" class="btn btn-primary dropbtn" role="button">FAQ</a>';
   echo '</div>';

   echo '<div class="btn-group">';
    echo '       <a class="btn dropbtn btn-primary dropdown-toggle" data-toggle="dropdown" role="button">My Account</a>';
    echo '       <ul class="dropdown-menu dropbtn dropdown-content" role="menu">';
    echo '         <li><strong><a href="modules.php?name=Private_Messages" class="btn btn-primary dropbtn" role="button">Message Center</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=Network_Bookmarks" class="btn btn-primary dropbtn" role="button">My Bookmarks</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=Image_Repository" class="btn btn-primary dropbtn" role="button">My Images</a></strong></li>';

    echo '         <li><strong><a href="modules.php?name=Groups" class="btn btn-primary dropbtn" role="button">My Groups</a></strong></li>';

    echo '         <li><strong><a href="modules.php?name=Your_Account" class="btn btn-primary dropbtn" role="button">View Pofile</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=Profile&mode=editprofile" class="btn btn-primary dropbtn" role="button">Edit Pofile</a></strong></li>';
    echo '         <li><strong><a href="modules.php?name=Your_Account&op=chgtheme" class="btn btn-primary dropbtn" role="button">Theme Selection</a></strong></li>';

    echo '       </ul>';
   echo '</div>';
    


echo '</div>';
 echo '</div>';

endif;
}

if (is_mod_admin('super'))
{

}
echo '<div align="center" style="padding-top:8px;">';
echo '</div>';
?>
