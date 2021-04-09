<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/********************************************************/
/* NukeSentinel(tm)                                     */
/* By: NukeScripts(tm) (http://www.nukescripts.net)     */
/* Copyright (c) 2000-2008 by NukeScripts(tm)           */
/* See CREDITS.txt for ALL contributors                 */
/********************************************************/

if(!defined('NUKE_EVO')) exit;

global $db, $prefix, $ab_config, $currentlang;

function block_Sentinel_Center_cache($block_cachetime) 
{
    global $db, $prefix, $cache;
    if ((($blockcache = cache_load('sentinel_center', 'blocks')) === false) || empty($blockcache) || intval($blockcache[0]['stat_created']) < (time() - intval($block_cachetime))) {
        $result = dburow('SELECT COUNT(ip_addr) AS `count` FROM `'.$prefix.'_nsnst_blocked_ips`');
        $blockcache[1]['count'] = $result['count'];
        dbfree($result);
        $blockcache[0]['stat_created'] = time();
        cache_set('sentinel_center', 'blocks', $blockcache);
    }
    return $blockcache;
}

$blocksession = block_Sentinel_Center_cache( get_evo_option('block_cachetime') );

$content = '';
$total_ips = $blocksession[1]['count'];
if( empty($blocksession[1]['count']) ):
	$total_ips = 0;
endif;

$content .= '<center><img src="modules/NukeSentinel/images/nukesentinel_large.png" height="60" width="468" alt="'._AB_WARNED.'" title="'._AB_WARNED.'" /><br />'._AB_HAVECAUGHT.' '.intval($total_ips).' '._AB_SHAMEFULHACKERS.'</center>'."\n";
$content .= '<hr /><center><a href="http://www.nukescripts.net" target="_blank">'._AB_NUKESENTINEL.'</a></center>'."\n";

?>