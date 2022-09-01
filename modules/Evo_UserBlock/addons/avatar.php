<?php
/*=======================================================================
 PHP-Nuke Titanium v3.0.0 : Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/************************************************************************
   Nuke-Evolution: Server Info Administration
   ============================================
   Copyright (c) 2005 by The Nuke-Evolution Team

   Filename      : avatar.php
   Author(s)     : Technocrat (www.Nuke-Evolution.com)
   Version       : 1.0.0
   Date          : 05.19.2005 (mm.dd.yyyy)

   Notes         : Evo User Block Avatar Module
************************************************************************/

if(!defined('NUKE_EVO')) 
{
   die ("Illegal File Access");
}

global $avatar_overide_size, $make_xtreme_avatar_small, $board_config, $userinfo;
// START - this was added for the very whimpy small themes that have no block width! by Ernest Buffington 08/06/2019
if ($make_xtreme_avatar_small == true)
{
  $board_config['avatar_max_height'] = $avatar_overide_size;
  $board_config['avatar_max_width'] = $avatar_overide_size;
}
// END - this was added for the very whimpy small themes that have no block width! by Ernest Buffington 08/06/2019

$evouserinfo_avatar = '<div style="text-align:center">';

if (is_user() && $userinfo['user_avatar'])
{
	switch( $userinfo['user_avatar_type'])
	{
		# user_allowavatar = 1
		case USER_AVATAR_UPLOAD:
			$evouserinfo_avatar .= ( $board_config['allow_avatar_upload'] ) 
			? '<img class="rounded-corners-user-info" style="max-height: '.$board_config['avatar_max_height'].'px; max-width: '.$board_config['avatar_max_width'].'px;" src="' 
			. $board_config['avatar_path'] . '/' . $userinfo['user_avatar'] . '" alt="" border="0" />' : '';
			break;
		# user_allowavatar = 2
		case USER_AVATAR_REMOTE:
			$evouserinfo_avatar .= '<img class="rounded-corners-user-info" style="max-height: '.$board_config['avatar_max_height'].'px; max-width: '.$board_config['avatar_max_width'].'px;" src="
			'.avatar_resize($userinfo['user_avatar']).'" alt="" border="0" />';
			break;
		# user_allowavatar = 3
		case USER_AVATAR_GALLERY:
			$evouserinfo_avatar .= ( $board_config['allow_avatar_local'] ) ? '<img class="rounded-corners-user-info" style="max-height: '.$board_config['avatar_max_height'].'px; max-width: '
			.$board_config['avatar_max_width'].'px;" src="' . $board_config['avatar_gallery_path'] . '/' . (($userinfo['user_avatar'] == 'blank.png' || $userinfo['user_avatar'] 
			== 'gallery/blank.gif') ? 'blank.png' : $userinfo['user_avatar']) . '" alt="" border="0" />' : '';
			break;
   }
}
else
$evouserinfo_avatar .= '<img class="rounded-corners-user-info" style="max-height: '.$board_config['avatar_max_height'].'px; max-width: '
.$board_config['avatar_max_width'].'px;" src="'.$board_config['default_avatar_users_url'].'" alt="" border="0" />';

$evouserinfo_avatar .= '</div>';
?>