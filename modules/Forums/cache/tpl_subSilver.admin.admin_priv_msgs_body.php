<?php

// eXtreme Styles mod cache. Generated on Wed, 28 Apr 2021 08:05:23 +0000 (time=1619597123)

?><script language="JavaScript" type="text/javascript">
<!--
function toggle_check_all()
{
    var archive_text = "archive_id";
    
    for (var i=0; i < document.msgrow_values.elements.length; i++)
    {
        var checkbox_element = document.msgrow_values.elements[i];
        if ((checkbox_element.name != 'check_all_del_box') && (checkbox_element.name != 'check_all_arch_box') && (checkbox_element.type == 'checkbox'))
        {
            if (checkbox_element.name.search("archive_id") != -1)
            {        
                checkbox_element.checked = document.msgrow_values.check_all_arch_box.checked;
            }
            else
            {            
                checkbox_element.checked = document.msgrow_values.check_all_del_box.checked;            
            }
        }
    }
}
-->
</script>
<?php

$statusrow_count = ( isset($this->_tpldata['statusrow.']) ) ?  sizeof($this->_tpldata['statusrow.']) : 0;
for ($statusrow_i = 0; $statusrow_i < $statusrow_count; $statusrow_i++)
{
 $statusrow_item = &$this->_tpldata['statusrow.'][$statusrow_i];
 $statusrow_item['S_ROW_COUNT'] = $statusrow_i;
 $statusrow_item['S_NUM_ROWS'] = $statusrow_count;

?>
<table width="100%" cellspacing="2" cellpadding="2" border="1" align="center">
    <tr> 
      <td align="center"><?php echo isset($this->vars['L_STATUS']) ? $this->vars['L_STATUS'] : $this->lang('L_STATUS'); ?><br /><strong><?php echo isset($this->vars['I_STATUS_MESSAGE']) ? $this->vars['I_STATUS_MESSAGE'] : $this->lang('I_STATUS_MESSAGE'); ?></strong></td>
    </tr>
  </table>
<?php

} // END statusrow

if(isset($statusrow_item)) { unset($statusrow_item); } 

?>
<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
    <tr> 
      <td align="left"><span class="maintitle"><?php echo isset($this->vars['L_PAGE_NAME']) ? $this->vars['L_PAGE_NAME'] : $this->lang('L_PAGE_NAME'); ?></span>
          <br /><span class="gensmall"><strong><?php echo isset($this->vars['L_VERSION']) ? $this->vars['L_VERSION'] : $this->lang('L_VERSION'); ?> <?php echo isset($this->vars['VERSION']) ? $this->vars['VERSION'] : $this->lang('VERSION'); ?>
          </strong></span><br /><br />
      <span class="genmed"><?php echo isset($this->vars['L_PAGE_DESC']) ? $this->vars['L_PAGE_DESC'] : $this->lang('L_PAGE_DESC'); ?></span><br /><br /><?php echo isset($this->vars['URL_SWITCH_MODE']) ? $this->vars['URL_SWITCH_MODE'] : $this->lang('URL_SWITCH_MODE'); ?></td>
    </tr>
</table>
  
<form method="post" action="<?php echo isset($this->vars['S_MODE_ACTION']) ? $this->vars['S_MODE_ACTION'] : $this->lang('S_MODE_ACTION'); ?>" name="sort_and_pmtype">
  <table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
    <tr>
    <td width="40%"><span class="gen"><strong><?php echo isset($this->vars['L_UTILS']) ? $this->vars['L_UTILS'] : $this->lang('L_UTILS'); ?></strong></span><ul><li>
    <a href="<?php echo isset($this->vars['URL_ORPHAN']) ? $this->vars['URL_ORPHAN'] : $this->lang('URL_ORPHAN'); ?>" class="genmed"><?php echo isset($this->vars['L_REMOVE_OLD']) ? $this->vars['L_REMOVE_OLD'] : $this->lang('L_REMOVE_OLD'); ?></a>
    <li><a href="<?php echo isset($this->vars['URL_SENT']) ? $this->vars['URL_SENT'] : $this->lang('URL_SENT'); ?>" class="genmed"><?php echo isset($this->vars['L_REMOVE_SENT']) ? $this->vars['L_REMOVE_SENT'] : $this->lang('L_REMOVE_SENT'); ?></a>
    <li><a href="<?php echo isset($this->vars['URL_ALL']) ? $this->vars['URL_ALL'] : $this->lang('URL_ALL'); ?>" class="genmed"><?php echo isset($this->vars['L_REMOVE_ALL']) ? $this->vars['L_REMOVE_ALL'] : $this->lang('L_REMOVE_ALL'); ?></a></ul></td>
        <td align="right" nowrap="nowrap"><span class="genmed"><?php echo isset($this->vars['L_FILTER_BY']) ? $this->vars['L_FILTER_BY'] : $this->lang('L_FILTER_BY'); ?>:&nbsp;<?php echo isset($this->vars['S_PMTYPE_SELECT']) ? $this->vars['S_PMTYPE_SELECT'] : $this->lang('S_PMTYPE_SELECT'); ?></span><br /><br /><span class="genmed"><?php echo isset($this->vars['L_SELECT_SORT_METHOD']) ? $this->vars['L_SELECT_SORT_METHOD'] : $this->lang('L_SELECT_SORT_METHOD'); ?>:&nbsp;<?php echo isset($this->vars['S_MODE_SELECT']) ? $this->vars['S_MODE_SELECT'] : $this->lang('S_MODE_SELECT'); ?>&nbsp;&nbsp;<?php echo isset($this->vars['L_ORDER']) ? $this->vars['L_ORDER'] : $this->lang('L_ORDER'); ?>&nbsp;<?php echo isset($this->vars['S_ORDER_SELECT']) ? $this->vars['S_ORDER_SELECT'] : $this->lang('S_ORDER_SELECT'); ?></span>
        <br /><br /><span class="genmed"><?php echo isset($this->vars['L_TO']) ? $this->vars['L_TO'] : $this->lang('L_TO'); ?>:&nbsp;<input type="text" class="post" size="10" maxlength="32" name="filter_to" value="<?php echo isset($this->vars['S_FILTER_TO']) ? $this->vars['S_FILTER_TO'] : $this->lang('S_FILTER_TO'); ?>">&nbsp;&nbsp;<?php echo isset($this->vars['L_FROM']) ? $this->vars['L_FROM'] : $this->lang('L_FROM'); ?>:&nbsp;<input type="text" class="post" size="10" maxlength="32" name="filter_from" value="<?php echo isset($this->vars['S_FILTER_FROM']) ? $this->vars['S_FILTER_FROM'] : $this->lang('S_FILTER_FROM'); ?>"></span>
        </td>
        <td align="center" valign="middle" rowspan="2"><input type="submit" name="submit" value="<?php echo isset($this->vars['L_SORT']) ? $this->vars['L_SORT'] : $this->lang('L_SORT'); ?>" class="liteoption"></td>
    </tr><tr>      <input type="hidden" name="mode" value="<?php echo isset($this->vars['S_MODE']) ? $this->vars['S_MODE'] : $this->lang('S_MODE'); ?>"><td>&nbsp;</td>
    <td align="right" valign="top" nowrap="nowrap">
        </span></td>
    </tr>
  </table></form>
<?php echo isset($this->vars['PM_MESSAGE']) ? $this->vars['PM_MESSAGE'] : $this->lang('PM_MESSAGE'); ?>
<form method="post" action="<?php echo isset($this->vars['S_MODE_ACTION']) ? $this->vars['S_MODE_ACTION'] : $this->lang('S_MODE_ACTION'); ?>" name="msgrow_values">
<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tr> 
    <td valign="top"><span class="nav"><?php echo isset($this->vars['PAGE_NUMBER']) ? $this->vars['PAGE_NUMBER'] : $this->lang('PAGE_NUMBER'); ?></span></td>
    <td align="right" valign="top"><span class="nav"><?php echo isset($this->vars['PAGINATION']) ? $this->vars['PAGINATION'] : $this->lang('PAGINATION'); ?>&nbsp;</span><br />&nbsp;</td>
  </tr>
</table>

<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
  <tr> 
    <td style="height:@ 30px; width: 5%; text-align: center" class="catHead"><?php echo isset($this->vars['L_DELETE']) ? $this->vars['L_DELETE'] : $this->lang('L_DELETE'); ?><br /><input type="checkbox" name="check_all_del_box" onClick="JavaScript:<?php echo isset($this->vars['JS_ARCHIVE_COMMENT_1']) ? $this->vars['JS_ARCHIVE_COMMENT_1'] : $this->lang('JS_ARCHIVE_COMMENT_1'); ?>check_all_arch_box.checked = false;<?php echo isset($this->vars['JS_ARCHIVE_COMMENT_2']) ? $this->vars['JS_ARCHIVE_COMMENT_2'] : $this->lang('JS_ARCHIVE_COMMENT_2'); ?> toggle_check_all();"></td>
<?php

$archive_avail_switch_count = ( isset($this->_tpldata['archive_avail_switch.']) ) ?  sizeof($this->_tpldata['archive_avail_switch.']) : 0;
for ($archive_avail_switch_i = 0; $archive_avail_switch_i < $archive_avail_switch_count; $archive_avail_switch_i++)
{
 $archive_avail_switch_item = &$this->_tpldata['archive_avail_switch.'][$archive_avail_switch_i];
 $archive_avail_switch_item['S_ROW_COUNT'] = $archive_avail_switch_i;
 $archive_avail_switch_item['S_NUM_ROWS'] = $archive_avail_switch_count;

?>
      <td class="catHead" width="5%"><?php echo isset($this->vars['L_ARCHIVE']) ? $this->vars['L_ARCHIVE'] : $this->lang('L_ARCHIVE'); ?><br /><input type="checkbox" name="check_all_arch_box" onClick="JavaScript:check_all_del_box.checked = false; toggle_check_all();"></td>
<?php

} // END archive_avail_switch

if(isset($archive_avail_switch_item)) { unset($archive_avail_switch_item); } 

?>
      <td class="catHead" align="left"><?php echo isset($this->vars['L_SUBJECT']) ? $this->vars['L_SUBJECT'] : $this->lang('L_SUBJECT'); ?></td>
      <td class="catHead"><?php echo isset($this->vars['L_FROM']) ? $this->vars['L_FROM'] : $this->lang('L_FROM'); ?></td>
      <td class="catHead"><?php echo isset($this->vars['L_TO']) ? $this->vars['L_TO'] : $this->lang('L_TO'); ?></td>
      <td class="catHead"><?php echo isset($this->vars['L_SENT_DATE']) ? $this->vars['L_SENT_DATE'] : $this->lang('L_SENT_DATE'); ?></td>
      <td class="catHead"><?php echo isset($this->vars['L_PM_TYPE']) ? $this->vars['L_PM_TYPE'] : $this->lang('L_PM_TYPE'); ?></td>
    </tr>
    <?php

$empty_switch_count = ( isset($this->_tpldata['empty_switch.']) ) ?  sizeof($this->_tpldata['empty_switch.']) : 0;
for ($empty_switch_i = 0; $empty_switch_i < $empty_switch_count; $empty_switch_i++)
{
 $empty_switch_item = &$this->_tpldata['empty_switch.'][$empty_switch_i];
 $empty_switch_item['S_ROW_COUNT'] = $empty_switch_i;
 $empty_switch_item['S_NUM_ROWS'] = $empty_switch_count;

?>
    <tr><td colspan="6" class="row1" align="center"><?php echo isset($this->vars['L_NO_PMS']) ? $this->vars['L_NO_PMS'] : $this->lang('L_NO_PMS'); ?></td></tr>
    <?php

} // END empty_switch

if(isset($empty_switch_item)) { unset($empty_switch_item); } 

?>
    <?php

$msgrow_count = ( isset($this->_tpldata['msgrow.']) ) ?  sizeof($this->_tpldata['msgrow.']) : 0;
for ($msgrow_i = 0; $msgrow_i < $msgrow_count; $msgrow_i++)
{
 $msgrow_item = &$this->_tpldata['msgrow.'][$msgrow_i];
 $msgrow_item['S_ROW_COUNT'] = $msgrow_i;
 $msgrow_item['S_NUM_ROWS'] = $msgrow_count;

?>
    <tr>  
    <td class="<?php echo isset($msgrow_item['ROW_CLASS']) ? $msgrow_item['ROW_CLASS'] : ''; ?>" align="center"><input type="checkbox" name="delete_id_<?php echo isset($msgrow_item['PM_ID']) ? $msgrow_item['PM_ID'] : ''; ?>" onClick="JavaScript:<?php echo isset($this->vars['JS_ARCHIVE_COMMENT_1']) ? $this->vars['JS_ARCHIVE_COMMENT_1'] : $this->lang('JS_ARCHIVE_COMMENT_1'); ?>archive_id_<?php echo isset($msgrow_item['PM_ID']) ? $msgrow_item['PM_ID'] : ''; ?>.checked = false<?php echo isset($this->vars['JS_ARCHIVE_COMMENT_2']) ? $this->vars['JS_ARCHIVE_COMMENT_2'] : $this->lang('JS_ARCHIVE_COMMENT_2'); ?>;"></td>
<?php

$archive_avail_switch_msg_count = ( isset($msgrow_item['archive_avail_switch_msg.']) ) ? sizeof($msgrow_item['archive_avail_switch_msg.']) : 0;
for ($archive_avail_switch_msg_i = 0; $archive_avail_switch_msg_i < $archive_avail_switch_msg_count; $archive_avail_switch_msg_i++)
{
 $archive_avail_switch_msg_item = &$msgrow_item['archive_avail_switch_msg.'][$archive_avail_switch_msg_i];
 $archive_avail_switch_msg_item['S_ROW_COUNT'] = $archive_avail_switch_msg_i;
 $archive_avail_switch_msg_item['S_NUM_ROWS'] = $archive_avail_switch_msg_count;

?>
      <td class="<?php echo isset($msgrow_item['ROW_CLASS']) ? $msgrow_item['ROW_CLASS'] : ''; ?>" align="center"><input type="checkbox" name="archive_id_<?php echo isset($msgrow_item['PM_ID']) ? $msgrow_item['PM_ID'] : ''; ?>" onClick="JavaScript:delete_id_<?php echo isset($msgrow_item['PM_ID']) ? $msgrow_item['PM_ID'] : ''; ?>.checked = false;"></td>
<?php

} // END archive_avail_switch_msg

if(isset($archive_avail_switch_msg_item)) { unset($archive_avail_switch_msg_item); } 

?>
      <td class="<?php echo isset($msgrow_item['ROW_CLASS']) ? $msgrow_item['ROW_CLASS'] : ''; ?>" align="left"><a href="<?php echo isset($msgrow_item['U_INLINE_VIEWMSG']) ? $msgrow_item['U_INLINE_VIEWMSG'] : ''; ?>" onClick="<?php echo isset($msgrow_item['U_VIEWMSG']) ? $msgrow_item['U_VIEWMSG'] : ''; ?>"><?php echo isset($msgrow_item['SUBJECT']) ? $msgrow_item['SUBJECT'] : ''; ?></a></td>
      <td class="<?php echo isset($msgrow_item['ROW_CLASS']) ? $msgrow_item['ROW_CLASS'] : ''; ?>" valign="middle"><?php echo isset($msgrow_item['FROM']) ? $msgrow_item['FROM'] : ''; ?><?php echo isset($msgrow_item['FROM_IP']) ? $msgrow_item['FROM_IP'] : ''; ?></td>
      <td class="<?php echo isset($msgrow_item['ROW_CLASS']) ? $msgrow_item['ROW_CLASS'] : ''; ?>" valign="middle"><?php echo isset($msgrow_item['TO']) ? $msgrow_item['TO'] : ''; ?></td>
      <td class="<?php echo isset($msgrow_item['ROW_CLASS']) ? $msgrow_item['ROW_CLASS'] : ''; ?>" valign="middle"><?php echo isset($msgrow_item['DATE']) ? $msgrow_item['DATE'] : ''; ?></td>
      <td class="<?php echo isset($msgrow_item['ROW_CLASS']) ? $msgrow_item['ROW_CLASS'] : ''; ?>" valign="middle"><?php echo isset($msgrow_item['PM_TYPE']) ? $msgrow_item['PM_TYPE'] : ''; ?></td>
    </tr>
    <?php

} // END msgrow

if(isset($msgrow_item)) { unset($msgrow_item); } 

?>
    <tr> 
      <td class="catbottom" colspan="6" height="28" align="center">
      <input type="hidden" name="mode" value="<?php echo isset($this->vars['S_MODE']) ? $this->vars['S_MODE'] : $this->lang('S_MODE'); ?>">
      <input type="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" class="mainoption">
      &nbsp;&nbsp;
      <input type="reset" value="<?php echo isset($this->vars['L_RESET']) ? $this->vars['L_RESET'] : $this->lang('L_RESET'); ?>" class="liteoption"></td>
    </tr>
  </table>

<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tr> 
    <td valign="bottom"><span class="nav"><?php echo isset($this->vars['PAGE_NUMBER']) ? $this->vars['PAGE_NUMBER'] : $this->lang('PAGE_NUMBER'); ?></span></td>
    <td align="right" valign="bottom">&nbsp;<br /><?php echo isset($this->vars['PAGINATION']) ? $this->vars['PAGINATION'] : $this->lang('PAGINATION'); ?></td>
  </tr>
</table></form>
<hr />
<strong><?php echo isset($this->vars['L_OPTIONS']) ? $this->vars['L_OPTIONS'] : $this->lang('L_OPTIONS'); ?></strong> <!--<span class="gensmall">(<a href="">About These</a>)</span>--><br />
<?php echo isset($this->vars['L_PM_VIEW_TYPE']) ? $this->vars['L_PM_VIEW_TYPE'] : $this->lang('L_PM_VIEW_TYPE'); ?> - <?php echo isset($this->vars['URL_INLINE_MESSAGE_TYPE']) ? $this->vars['URL_INLINE_MESSAGE_TYPE'] : $this->lang('URL_INLINE_MESSAGE_TYPE'); ?> | <?php echo isset($this->vars['URL_POPUP_MESSAGE_TYPE']) ? $this->vars['URL_POPUP_MESSAGE_TYPE'] : $this->lang('URL_POPUP_MESSAGE_TYPE'); ?><br />
<?php echo isset($this->vars['L_SHOW_IP']) ? $this->vars['L_SHOW_IP'] : $this->lang('L_SHOW_IP'); ?> - <?php echo isset($this->vars['URL_SHOW_IP_ON']) ? $this->vars['URL_SHOW_IP_ON'] : $this->lang('URL_SHOW_IP_ON'); ?> | <?php echo isset($this->vars['URL_SHOW_IP_OFF']) ? $this->vars['URL_SHOW_IP_OFF'] : $this->lang('URL_SHOW_IP_OFF'); ?><br />
<?php echo isset($this->vars['L_ROWS_PER_PAGE']) ? $this->vars['L_ROWS_PER_PAGE'] : $this->lang('L_ROWS_PER_PAGE'); ?> (<?php echo isset($this->vars['L_CURRENT']) ? $this->vars['L_CURRENT'] : $this->lang('L_CURRENT'); ?>: <?php echo isset($this->vars['CURRENT_ROWS']) ? $this->vars['CURRENT_ROWS'] : $this->lang('CURRENT_ROWS'); ?>) - <?php echo isset($this->vars['URL_ROWS_PLUS_5']) ? $this->vars['URL_ROWS_PLUS_5'] : $this->lang('URL_ROWS_PLUS_5'); ?> | <?php echo isset($this->vars['URL_ROWS_MINUS_5']) ? $this->vars['URL_ROWS_MINUS_5'] : $this->lang('URL_ROWS_MINUS_5'); ?><br />
<?php echo isset($this->vars['L_ARCHIVE_FEATURE']) ? $this->vars['L_ARCHIVE_FEATURE'] : $this->lang('L_ARCHIVE_FEATURE'); ?> - <?php echo isset($this->vars['URL_ARCHIVE_ENABLE_LINK']) ? $this->vars['URL_ARCHIVE_ENABLE_LINK'] : $this->lang('URL_ARCHIVE_ENABLE_LINK'); ?> | <?php echo isset($this->vars['URL_ARCHIVE_DISABLE_LINK']) ? $this->vars['URL_ARCHIVE_DISABLE_LINK'] : $this->lang('URL_ARCHIVE_DISABLE_LINK'); ?>