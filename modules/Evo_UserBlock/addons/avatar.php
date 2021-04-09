<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
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

if(!defined('NUKE_EVO')) {
   die ("Illegal File Access");
}

global $evouserinfo_avatar, $board_config, $userinfo;

$evouserinfo_avatar = '<div class="evo-userblock-avatar" style="text-align:center">';
if (is_user() && $userinfo['user_avatar']):

	switch( $userinfo['user_avatar_type'] ):
	
		# user_allowavatar = 1
		case USER_AVATAR_UPLOAD:
			$evouserinfo_avatar .= ( $board_config['allow_avatar_upload'] ) ? '<img style="max-height: '.$board_config['avatar_max_height'].'px; max-width: '.$board_config['avatar_max_width'].'px;" src="' . $board_config['avatar_path'] . '/' . $userinfo['user_avatar'] . '" alt="" border="0" />' : '';
			break;

		# user_allowavatar = 2
		case USER_AVATAR_REMOTE:
			// $evouserinfo_avatar .= avatar_resize($userinfo['user_avatar']);
			$evouserinfo_avatar .= '<img style="max-height: '.$board_config['avatar_max_height'].'px; max-width: '.$board_config['avatar_max_width'].'px;" src="'.avatar_resize($userinfo['user_avatar']).'" alt="" border="0" />';
			break;

		# user_allowavatar = 3
		case USER_AVATAR_GALLERY:
			$evouserinfo_avatar .= ( $board_config['allow_avatar_local'] ) ? '<img style="max-height: '.$board_config['avatar_max_height'].'px; max-width: '.$board_config['avatar_max_width'].'px;" src="' . $board_config['avatar_gallery_path'] . '/' . (($userinfo['user_avatar'] == 'blank.gif' || $userinfo['user_avatar'] == 'gallery/blank.gif') ? 'blank.png' : $userinfo['user_avatar']) . '" alt="" border="0" />' : '';
			break;
	
	endswitch;

else:

    $evouserinfo_avatar .= '<img style="max-height: '.$board_config['avatar_max_height'].'px; max-width: '.$board_config['avatar_max_width'].'px;" src="'.$board_config['default_avatar_users_url'].'" alt="" border="0" />';
    
endif;
$evouserinfo_avatar .= '</div><br />';

?>