<?php # JOHN 3:16 #
/***************************************************************************
 *                            viewtopic_whoview.php 
 *                            -------------------
 *   begin                : Staurday, May 15, 2021
 *   Author               : Ernest Allen Buffington
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: memberlist.php,v 1.36.2.8 2003/06/09 13:06:19 psotfx Exp $
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

define('IN_PHPBB', true);
$phpbb_root_path = 'modules/Forums/';
include($phpbb_root_path.'extension.inc');
include($phpbb_root_path.'common.'.$phpEx);
include('header.php');

# Start session management
$userdata = session_pagestart($user_ip, PAGE_TOPIC_VIEW, $nukeuser);
init_userprefs($userdata);
# End session management


# Start add - Who viewed a topic MOD
if(isset($_GET[POST_TOPIC_URL]))
$topic_id = intval($_GET[POST_TOPIC_URL]);
elseif(isset($_POST[POST_TOPIC_URL]))
$topic_id = intval($_POST[POST_TOPIC_URL]);

if(!$userdata['session_logged_in']): 
	$header_location = (@preg_match("/Microsoft|WebSTAR|Xitami/",getenv("SERVER_SOFTWARE"))) ? "Refresh: 0; URL=" : "Location: "; 
	header($header_location . append_sid("login.$phpEx?redirect=topic_view_users.$phpEx&".POST_TOPIC_URL."=$topic_id", true));
	exit;
endif;

# find the forum, in which the topic are located
if(empty($topic_id))$topic_id = 0;
$sql = "SELECT f.forum_id FROM ".TOPICS_TABLE." t, ".FORUMS_TABLE." f WHERE f.forum_id = t.forum_id AND t.topic_id=$topic_id";
if(!($result = $db->sql_query($sql)))
message_die(GENERAL_ERROR, "Could not obtain topic information", '', __LINE__, __FILE__, $sql);
if(!($forum_topic_data = $db->sql_fetchrow($result)))
message_die(GENERAL_MESSAGE, 'Topic_post_not_exist');
$forum_id = $forum_topic_data['forum_id'];
list($topic_title) = $db->sql_ufetchrow("SELECT `topic_title` FROM `".TOPICS_TABLE."` WHERE `topic_id`=$topic_id", SQL_NUM);
$topic_link = '<a href="modules.php?name=Forums&file=viewtopic&t='.$topic_id.'" target="_self">'.$topic_title.'</a>';
# End add - Who viewed a topic MOD

$start = (isset($_GET['start'])) ? intval($_GET['start']) : 0;

if(isset($_GET['mode']) || isset($_POST['mode'])):
$mode = ( isset($_POST['mode']) ) ? htmlspecialchars($_POST['mode']) : htmlspecialchars($_GET['mode']);
else:
$mode = 'joined';
endif;

if(isset($_POST['order'])):
$sort_order = ($_POST['order'] == 'ASC') ? 'ASC' : 'DESC';
elseif(isset($_GET['order'])):
$sort_order = ($_GET['order'] == 'ASC') ? 'ASC' : 'DESC';
else:
$sort_order = 'ASC';
endif;

# Memberlist sorting
$mode_types_text = array($lang['Sort_User_ID'], $lang['Sort_Username'], $lang['Sort_Joined'], $lang['Topic_time'], $lang['Topic_count']);
$mode_types = array('user_id', 'username', 'joindate', 'topic_time', 'topic_count');
$select_sort_mode = '<select name="mode">';
for($i = 0; $i < count($mode_types_text); $i++):
$selected = ( $mode == $mode_types[$i] ) ? ' selected="selected"' : '';
$select_sort_mode .= '<option value="'.$mode_types[$i].'"'.$selected.'>'.$mode_types_text[$i].'</option>';
endfor;
$select_sort_mode .= '</select>';
$select_sort_order = '<select name="order">';
if($sort_order == 'ASC')
$select_sort_order .= '<option value="ASC" selected="selected">'.$lang['Sort_Ascending'].'</option><option value="DESC">'.$lang['Sort_Descending'].'</option>';
else
$select_sort_order .= '<option value="ASC">'.$lang['Sort_Ascending'].'</option><option value="DESC" selected="selected">'.$lang['Sort_Descending'].'</option>';
$select_sort_order .= '</select>';
$select_sort_order .= '<input type="hidden" name="'.POST_TOPIC_URL.'" value="'.$topic_id.'"/>';

# Generate page
$page_title = $lang['Memberlist'];
include("includes/page_header.php");

$template->set_filenames(array(
	'body' => 'viewtopic_whoview.tpl')
);
make_jumpbox('viewforum.'.$phpEx);

$template->assign_vars(
	array(
		'L_LAST_VIEWED' => $lang['Topic_time'],
		'L_TOPIC_COUNT' => $lang['Topic_count'],
		'L_AGE' => $lang['Sort_Age'], 
		'S_MODE_SELECT' => $select_sort_mode,
		'S_ORDER_SELECT' => $select_sort_order,
		'S_MODE_ACTION' => append_sid("viewtopic_whoview.$phpEx")
	)
);

switch($mode):
 case 'joined':
  $order_by = "u.user_regdate $sort_order LIMIT $start, ".$board_config['topics_per_page'];
	break;
  case 'username':
   $order_by = "u.username $sort_order LIMIT $start, ".$board_config['topics_per_page'];
	 break;
  case 'user_id':
   $order_by = "u.user_id $sort_order LIMIT $start, ".$board_config['topics_per_page'];
	break;
  case 'topic_count':
   $order_by = "tv.view_count $sort_order LIMIT $start, ".$board_config['topics_per_page'];
	break;
  case 'topic_time':
   $order_by = "tv.view_time $sort_order LIMIT $start, ".$board_config['topics_per_page'];
	break;
  default:
   $order_by = "u.user_id $sort_order LIMIT $start, ".$board_config['topics_per_page'];
	break;
endswitch;

$sql = "SELECT u.username, 
                u.user_id, 
		 u.user_viewemail, 
		     u.user_email, 
			  u.user_from, 
		 u.user_from_flag, 
		   u.user_website, 
		    u.user_avatar, 
	   u.user_avatar_type, 
	   u.user_allowavatar, 
  u.user_allow_viewonline, 
      u.user_session_time, 
	      u.user_facebook, 
		     tv.view_time, 
			tv.view_count
	
	FROM ".USERS_TABLE." u, ".TOPIC_VIEW_TABLE." tv WHERE u.user_id = tv.user_id AND tv.topic_id= ".$topic_id." ORDER BY $order_by";

if(!($result = $db->sql_query($sql)))
message_die(GENERAL_ERROR, 'Could not query users', '', __LINE__, __FILE__, $sql);

if($row = $db->sql_fetchrow($result)):

	$i = 0;
	do
	{
		$username = $row['username'];
		$user_id = $row['user_id'];
		$user_from = ( !empty($row['user_from']) ) ? $row['user_from'] : '&nbsp;';
		$joined	= $row['user_regdate'];
		
		# Get the date and time the user last viewed the topic.
		$view_time = ($row['view_time']) ? create_date($board_config['default_dateformat'],$row['view_time'], $board_config['board_timezone']) : $lang['Never_last_logon'];
		
		# Get the amount of times the user has viewed.
		$view_count	= ($row['view_count']) ? $row['view_count'] : 0;
		
		# Get the users Facebook link.
		$facebook = (($row['user_facebook']) ? '<a href="https://www.facebook.com/'.$row['user_facebook'].'" 
		target="_blank">'.get_evo_icon('evo-sprite facebook tooltip', $lang['Visit_facebook']).'</a>&nbsp;' : '');
		
		# Display the users country of origin.
		$user_flag = (!empty($row['user_from_flag'])) ? 
		'&nbsp;'.get_evo_icon('countries '.str_replace('.png','',$row['user_from_flag'])).'&nbsp;' : '&nbsp;'.get_evo_icon('countries unknown').'&nbsp;';
		
		# Send user a private message.
		$pm	= '<a href="'.append_sid("privmsg.$phpEx?mode=post&amp;".POST_USERS_URL."=$user_id").'">'.get_evo_icon('evo-sprite 
		mail tooltip', sprintf($lang['Send_private_message'],$username)).'</a>';
		
		# Website URL
		$www = ($row['user_website']) ? '<a href="'.$row['user_website'].'" target="_userwww">'.get_evo_icon('evo-sprite globe tooltip', $lang['Visit_website']).'</a>&nbsp;' : '';

       # This is broken in UK version
	   # Mod: Online/Offline/Hidden v2.2.7 START
       if($row['user_session_time'] >= (time()-$board_config['online_time'])):
         
		 if($row['user_allow_viewonline']):
         $online_status = '<a href="'.append_sid("viewonline.$phpEx").'" title="'.sprintf($lang['is_online'],$row['username']).'"'.$online_color.'><strong>'.$lang['Online'].'</strong></a>';
         
		 elseif($userdata['user_level'] == ADMIN || $userdata['user_id'] == $row['user_id'] ):
         $online_status = '<em><a href="'.append_sid("viewonline.$phpEx").'" title="'.sprintf($lang['is_hidden'],$profiledata['username']).'"'.$hidden_color.'>'.$lang['Hidden'].'</a></em>';
         
		 else:
         $online_status = '<span title="'.sprintf($lang['is_offline'], $row['username']).'"'.$offline_color.'><strong>'.$lang['Offline'].'</strong></span>';
         endif;

       else:
       $online_status = '<span title="'.sprintf($lang['is_offline'], $row['username']) . '"' . $offline_color . '><strong>'.$lang['Offline'].'</strong></span>';
       endif;
       # Mod: Online/Offline/Hidden v2.2.7 END
 		if(strlen($user_from) == 6)
		$user_from = 'The InterWebs';
		 
        # Nobody gives a shit about Anonymous people
		if($username == 'Anonymous')
		continue;
		
		$template->assign_block_vars('memberrow', array(
			'ROW_NUMBER' 	=> $i + ($_GET['start'] + 1),
			'USERNAME' 		=> UsernameColor($username),
			'FROM' 			=> $user_from,
			'FLAG'			=> $user_flag,
			'FACEBOOK'		=> $facebook,
			'VIEW_TIME' 	=> $view_time,
			'VIEW_COUNT' 	=> $view_count,
			'PROFILE' 		=> $profile,
			'PM' 			=> $pm,
			'WWW' 			=> $www,
			'ONLINE_STATUS' => $online_status,
			'TOPICTITLE'    => $topic_title,
			'TOPICLINK'     => $topic_link,
			'U_VIEWPROFILE' => append_sid("profile.$phpEx?mode=viewprofile&amp;".POST_USERS_URL."=$user_id"))
		);

		$i++;
	}
	while($row = $db->sql_fetchrow($result));
	
endif;

if($mode != 'topten' || $board_config['topics_per_page'] < 10):
    # Start replacement - Who viewed a topic MOD
	$sql = "SELECT count(*) AS total
		FROM ".TOPIC_VIEW_TABLE."
		WHERE topic_id = " . $topic_id;
    # End replacement - Who viewed a topic MOD
	if(!($result = $db->sql_query($sql))):
	message_die(GENERAL_ERROR, 'Error getting total users', '', __LINE__, __FILE__, $sql);
    endif;
	if($total = $db->sql_fetchrow($result)):
	   $total_members = $total['total'];
       # Start replacement - Who viewed a topic MOD
       $pagination = generate_pagination("topic_view_users.$phpEx?".POST_TOPIC_URL."=$topic_id&amp;
	   mode=$mode&amp;order=$sort_order", $total_members, $board_config['topics_per_page'], $start). '&nbsp;';
       # End replacement - Who viewed a topic MOD
	endif;
else:
	$pagination = '&nbsp;';
	$total_members = 10;
endif;

$template->assign_vars(array(
	'PAGINATION' => $pagination,
	'PAGE_NUMBER' => sprintf($lang['Page_of'], (floor($start / $board_config['topics_per_page']) + 1), ceil($total_members / $board_config['topics_per_page'])), 
	'L_GOTO_PAGE' => $lang['Goto_page'])
);
$template->pparse('body');
include("includes/page_tail.$phpEx");
?>
