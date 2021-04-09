<?php

/*------------------------------------*/
/* CSS Drop-Down Navigation System v3 */
/*------------------------------------*/
if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) 
{
    exit('Access Denied');
}
global $user, $cookie, $prefix, $sitekey, $db, $name, $banners, $user_prefix, $userinfo, $admin, $admin_file, $ThemeInfo;

echo '<div id="cssmenu" class="align-center">'

  .'<ul>'
  .'   <li class="active"><a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a></li>'
  .'   <li class="has-sub"><a href="modules.php?name=Forums"><i class="fa fa-fw fa-object-group"></i> FORUMS</a>'
  .'      <ul>'
  .'         <li><a href="modules.php?name=Forums&amp;file=search">FORUM SEARCH</a></li>'
  .'         <li><a href="modules.php?name=Forums&amp;file=search&amp;search_id=newposts">NEW POSTS</a></li>'
  .'         <li><a href="modules.php?name=Forums&amp;file=search&amp;search_id=unanswered">UNANSWERED POSTS</a></li>'
  .'         <li><a href="modules.php?name=Forums&amp;file=search&amp;search_id=egosearch">VIEW YOUR POSTS</a></li>'
  .'      </ul>'
  .'   </li>'
  .'   <li class="has-sub"><a href="modules.php?name=File_Repository"><i class="fa fa-fw fa-file"></i> FILES</a>'
  .'      <ul>'
  .'         <li><a href="modules.php?name=File_Repository&action=newdownloads">NEW FILES</a></li>'
  .'         <li><a href="modules.php?name=File_Repository&action=submitdownload">ADD FILE(S)</a></li>'
  .'         <li><a href="modules.php?name=File_Repository&action=mostpopular">POPULAR FILE(S)</a></li>'
  .'      </ul>'
  .'   </li>'
  .'   <li><a href="modules.php?name=Image_Repository"><i class="fa fa-fw fa-image"></i> IMAGE HOST</a></li>'
  .'   <li class="has-sub"><a href="#"><i class="fa fa-fw fa-bars"></i> OTHER PAGES</a>'
  .'      <ul>'
  .'         <li><a href="modules.php?name=Members_List">MEMBERS</a></li>'
  .'         <li><a href="modules.php?name=News">NEWS</a></li>'
  .'         <li><a href="modules.php?name=Topics">NEWS TOPICS</a></li>'
  .'         <li><a href="modules.php?name=Web_Links">WEB LINKS</a></li>'
  .'         <li><a href="modules.php?name=HTML_Newsletter">NEWS LETTER</a></li>'
  .'         <li><a href="modules.php?name=Recommend_Us">RECOMMEND US</a></li>'
  .'         <li><a href="modules.php?name=Content">CONTENT</a></li>'
  .'         <li><a href="modules.php?name=Surveys">SURVEYS</a></li>'
  .'         <li><a href="modules.php?name=Feedback">CONTACT US</a></li>'
  .'     </ul>'
  .'   </li>'
  .'   <li>'.(( !is_user() ) ? '<a href="modules.php?name=Your_Account&op=new_user"><i class="fa fa-fw fa-registered"></i> REGISTER</a>' : '<a href="modules.php?name=Your_Account"><i class="fa fa-fw fa-registered"></i>ACCOUNT</a>').'</li>'
  .'</ul>'

.'</div>';

?>