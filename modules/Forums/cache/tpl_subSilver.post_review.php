<?php

// eXtreme Styles mod cache. Generated on Tue, 18 May 2021 19:52:46 +0000 (time=1621367566)

?><script language="Javascript" type="text/javascript">
<!--
    function open_postreview(ref)
    {
        height = screen.height / 3;
        width = screen.width / 2;
        window.open(ref, '_phpbbpostreview', 'HEIGHT=' + height + ',WIDTH=' + width + ',resizable=yes,scrollbars=yes');
    }
//-->
</script>

<table class="forumline" width="100%" cellspacing="1" cellpadding="3" border="0">
    <tr align="right">
        <td class="catHead" colspan="2" height="28"><span class="nav"><a href="<?php echo isset($this->vars['U_VIEW_OLDER_POST']) ? $this->vars['U_VIEW_OLDER_POST'] : $this->lang('U_VIEW_OLDER_POST'); ?>" class="nav"><?php echo isset($this->vars['L_VIEW_PREVIOUS_POST']) ? $this->vars['L_VIEW_PREVIOUS_POST'] : $this->lang('L_VIEW_PREVIOUS_POST'); ?></a> :: <a href="<?php echo isset($this->vars['U_VIEW_NEWER_POST']) ? $this->vars['U_VIEW_NEWER_POST'] : $this->lang('U_VIEW_NEWER_POST'); ?>" class="nav"><?php echo isset($this->vars['L_VIEW_NEXT_POST']) ? $this->vars['L_VIEW_NEXT_POST'] : $this->lang('L_VIEW_NEXT_POST'); ?></a> &nbsp;</span></td>
    </tr>
    <tr>
        <th class="thRight" nowrap="nowrap"><?php echo isset($this->vars['L_AUTHOR']) ? $this->vars['L_AUTHOR'] : $this->lang('L_AUTHOR'); ?></th>
    </tr>
    <?php

$postrow_count = ( isset($this->_tpldata['postrow.']) ) ?  sizeof($this->_tpldata['postrow.']) : 0;
for ($postrow_i = 0; $postrow_i < $postrow_count; $postrow_i++)
{
 $postrow_item = &$this->_tpldata['postrow.'][$postrow_i];
 $postrow_item['S_ROW_COUNT'] = $postrow_i;
 $postrow_item['S_NUM_ROWS'] = $postrow_count;

?>
    <tr>
        <td class="<?php echo isset($postrow_item['ROW_CLASS']) ? $postrow_item['ROW_CLASS'] : ''; ?>" width="100%" height="28" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td width="100%" align="center"><span class="name"><a name="<?php echo isset($postrow_item['U_POST_ID']) ? $postrow_item['U_POST_ID'] : ''; ?>"></a><strong><?php echo isset($postrow_item['POSTER_NAME']) ? $postrow_item['POSTER_NAME'] : ''; ?></strong></span><br /><span class="postdetails"><?php echo isset($postrow_item['POSTER_RANK']) ? $postrow_item['POSTER_RANK'] : ''; ?><br /><?php echo isset($postrow_item['RANK_IMAGE']) ? $postrow_item['RANK_IMAGE'] : ''; ?><?php echo isset($postrow_item['POSTER_AVATAR']) ? $postrow_item['POSTER_AVATAR'] : ''; ?><br /><br /><?php echo isset($postrow_item['POSTER_JOINED']) ? $postrow_item['POSTER_JOINED'] : ''; ?><br /><?php echo isset($postrow_item['POSTER_POSTS']) ? $postrow_item['POSTER_POSTS'] : ''; ?><br /><?php echo isset($postrow_item['POSTER_FROM']) ? $postrow_item['POSTER_FROM'] : ''; ?><br /><?php echo isset($postrow_item['POSTER_ONLINE_STATUS']) ? $postrow_item['POSTER_ONLINE_STATUS'] : ''; ?></span></td>
            </tr>
        </table></td>
    </tr>
    <tr> 
        <td class="spaceRow" colspan="2" height="1"><img src="themes/chromo/forums/images/spacer.gif" alt="" width="1" height="1" /></td>
    </tr>
    <?php

} // END postrow

if(isset($postrow_item)) { unset($postrow_item); } 

?>
    <tr>
        <th class="thRight" nowrap="nowrap"><?php echo isset($this->vars['L_MESSAGE']) ? $this->vars['L_MESSAGE'] : $this->lang('L_MESSAGE'); ?></th>
    </tr>
    <?php

$postrow_count = ( isset($this->_tpldata['postrow.']) ) ?  sizeof($this->_tpldata['postrow.']) : 0;
for ($postrow_i = 0; $postrow_i < $postrow_count; $postrow_i++)
{
 $postrow_item = &$this->_tpldata['postrow.'][$postrow_i];
 $postrow_item['S_ROW_COUNT'] = $postrow_i;
 $postrow_item['S_NUM_ROWS'] = $postrow_count;

?>
    <tr>
        <td class="<?php echo isset($postrow_item['ROW_CLASS']) ? $postrow_item['ROW_CLASS'] : ''; ?>" width="100%" height="28" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td width="100%"><img src="<?php echo isset($postrow_item['MINI_POST_IMG']) ? $postrow_item['MINI_POST_IMG'] : ''; ?>" width="12" height="9" alt="<?php echo isset($postrow_item['L_MINI_POST_ALT']) ? $postrow_item['L_MINI_POST_ALT'] : ''; ?>" title="<?php echo isset($postrow_item['L_MINI_POST_ALT']) ? $postrow_item['L_MINI_POST_ALT'] : ''; ?>" border="0" /><span class="postdetails"><?php echo isset($this->vars['L_POSTED']) ? $this->vars['L_POSTED'] : $this->lang('L_POSTED'); ?>: <?php echo isset($postrow_item['POST_DATE']) ? $postrow_item['POST_DATE'] : ''; ?><span class="gen">&nbsp;</span>&nbsp;&nbsp;&nbsp;<?php echo isset($this->vars['L_POST_SUBJECT']) ? $this->vars['L_POST_SUBJECT'] : $this->lang('L_POST_SUBJECT'); ?>: <?php echo isset($postrow_item['POST_SUBJECT']) ? $postrow_item['POST_SUBJECT'] : ''; ?></span></td>
                <td valign="top" align="right" nowrap="nowrap"><?php echo isset($postrow_item['QUOTE_IMG']) ? $postrow_item['QUOTE_IMG'] : ''; ?> <?php echo isset($postrow_item['REPORT_IMG']) ? $postrow_item['REPORT_IMG'] : ''; ?></td>
            </tr>
            <tr> 
                <td colspan="2"><hr /></td>
            </tr>
            <tr>
                <td colspan="2"><span class="postbody"><?php echo isset($postrow_item['MESSAGE']) ? $postrow_item['MESSAGE'] : ''; ?><?php echo isset($postrow_item['SIGNATURE']) ? $postrow_item['SIGNATURE'] : ''; ?></span><?php echo isset($postrow_item['ATTACHMENTS']) ? $postrow_item['ATTACHMENTS'] : ''; ?><span class="gensmall"><?php echo isset($postrow_item['EDITED_MESSAGE']) ? $postrow_item['EDITED_MESSAGE'] : ''; ?></span></td>
            </tr>
        </table></td>
    </tr>
    <tr> 
        <td class="<?php echo isset($postrow_item['ROW_CLASS']) ? $postrow_item['ROW_CLASS'] : ''; ?>" width="100%" height="28" valign="bottom" nowrap="nowrap"><table cellspacing="0" cellpadding="0" border="0" height="18" width="18">
            <tr> 
                <td valign="middle" nowrap="nowrap"><?php echo isset($postrow_item['PROFILE_IMG']) ? $postrow_item['PROFILE_IMG'] : ''; ?> <?php echo isset($postrow_item['PM_IMG']) ? $postrow_item['PM_IMG'] : ''; ?> <?php echo isset($postrow_item['EMAIL_IMG']) ? $postrow_item['EMAIL_IMG'] : ''; ?> <?php echo isset($postrow_item['WWW_IMG']) ? $postrow_item['WWW_IMG'] : ''; ?> <?php echo isset($postrow_item['AIM_IMG']) ? $postrow_item['AIM_IMG'] : ''; ?> <?php echo isset($postrow_item['YIM_IMG']) ? $postrow_item['YIM_IMG'] : ''; ?> <?php echo isset($postrow_item['MSN_IMG']) ? $postrow_item['MSN_IMG'] : ''; ?><script language="JavaScript" type="text/javascript"><!-- 

    if ( navigator.userAgent.toLowerCase().indexOf('mozilla') != -1 && navigator.userAgent.indexOf('5.') == -1 )
        document.write(' <?php echo isset($postrow_item['ICQ_IMG']) ? $postrow_item['ICQ_IMG'] : ''; ?>');
    else
        document.write('</td><td>&nbsp;</td><td valign="top" nowrap="nowrap"><div style="position:relative"><div style="position:absolute"><?php echo isset($postrow_item['ICQ_IMG']) ? $postrow_item['ICQ_IMG'] : ''; ?></div><div style="position:absolute;left:3px;top:-1px"><?php echo isset($postrow_item['ICQ_STATUS_IMG']) ? $postrow_item['ICQ_STATUS_IMG'] : ''; ?></div></div>');
                
                //--></script><noscript><?php echo isset($postrow_item['ICQ_IMG']) ? $postrow_item['ICQ_IMG'] : ''; ?></noscript></td>
            </tr>
        </table></td>
    </tr>
    <?php

} // END postrow

if(isset($postrow_item)) { unset($postrow_item); } 

?>
</table>