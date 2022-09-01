<?php

// eXtreme Styles mod cache. Generated on Sat, 01 May 2021 23:53:09 +0000 (time=1619913189)

?><script language="JavaScript" type="text/javascript">
<!--
function toggle_check_all()
{
    for (var i=0; i < document.delete_ids.elements.length; i++)
    {
        var checkbox_element = document.delete_ids.elements[i];
        if ((checkbox_element.name != 'check_all_box') && (checkbox_element.type == 'checkbox'))
        {
            checkbox_element.checked = document.delete_ids.check_all_box.checked;
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
      <td align="center"><span class="gen"><?php echo isset($this->vars['L_STATUS']) ? $this->vars['L_STATUS'] : $this->lang('L_STATUS'); ?><br /></span>
      <span class="genmed"><strong><?php echo isset($this->vars['I_STATUS_MESSAGE']) ? $this->vars['I_STATUS_MESSAGE'] : $this->lang('I_STATUS_MESSAGE'); ?></strong></span><br /></td>
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
          <br /><?php echo isset($this->vars['NIVISEC_CHECKER_VERSION']) ? $this->vars['NIVISEC_CHECKER_VERSION'] : $this->lang('NIVISEC_CHECKER_VERSION'); ?></strong></span><br /><br />
      <span class="genmed"><?php echo isset($this->vars['L_PAGE_DESC']) ? $this->vars['L_PAGE_DESC'] : $this->lang('L_PAGE_DESC'); ?><br /><br /><?php echo isset($this->vars['VERSION_CHECK_DATA']) ? $this->vars['VERSION_CHECK_DATA'] : $this->lang('VERSION_CHECK_DATA'); ?></span></td>
    </tr>
  </table>

<form method="post" action="<?php echo isset($this->vars['S_MODE_ACTION']) ? $this->vars['S_MODE_ACTION'] : $this->lang('S_MODE_ACTION'); ?>" name="sort_and_mode">
  <table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
    <tr>
      <td align="right" nowrap="nowrap"><span class="genmed"><?php echo isset($this->vars['L_SELECT_SORT_METHOD']) ? $this->vars['L_SELECT_SORT_METHOD'] : $this->lang('L_SELECT_SORT_METHOD'); ?>:&nbsp;<?php echo isset($this->vars['S_MODE_SELECT']) ? $this->vars['S_MODE_SELECT'] : $this->lang('S_MODE_SELECT'); ?>&nbsp;&nbsp;<?php echo isset($this->vars['L_ORDER']) ? $this->vars['L_ORDER'] : $this->lang('L_ORDER'); ?>&nbsp;<?php echo isset($this->vars['S_ORDER_SELECT']) ? $this->vars['S_ORDER_SELECT'] : $this->lang('S_ORDER_SELECT'); ?>&nbsp;&nbsp; 
        <input type="submit" name="submit" value="<?php echo isset($this->vars['L_SORT']) ? $this->vars['L_SORT'] : $this->lang('L_SORT'); ?>" class="liteoption" />
        </span></td>
    </tr>
  </table>
</form>
<form method="post" action="<?php echo isset($this->vars['S_MODE_ACTION']) ? $this->vars['S_MODE_ACTION'] : $this->lang('S_MODE_ACTION'); ?>" name="delete_ids">
  <table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
    <tr> 
      <th height="25" class="thCornerL" align="right" width="3%"><input type="checkbox" name="check_all_box" onClick="toggle_check_all()"></th>
      <th class="thTop" align="left" width="45%"><?php echo isset($this->vars['L_TITLE']) ? $this->vars['L_TITLE'] : $this->lang('L_TITLE'); ?></th>
      <th class="thTop"><?php echo isset($this->vars['L_POSTER']) ? $this->vars['L_POSTER'] : $this->lang('L_POSTER'); ?></th>
      <th class="thTop"><?php echo isset($this->vars['L_TIME']) ? $this->vars['L_TIME'] : $this->lang('L_TIME'); ?></th>
      <th class="thTop"><?php echo isset($this->vars['L_MOVED_FROM']) ? $this->vars['L_MOVED_FROM'] : $this->lang('L_MOVED_FROM'); ?></th>
      <th class="thCornerR"><?php echo isset($this->vars['L_MOVED_TO']) ? $this->vars['L_MOVED_TO'] : $this->lang('L_MOVED_TO'); ?></th>
    </tr>
    <?php

$topicrow_count = ( isset($this->_tpldata['topicrow.']) ) ?  sizeof($this->_tpldata['topicrow.']) : 0;
for ($topicrow_i = 0; $topicrow_i < $topicrow_count; $topicrow_i++)
{
 $topicrow_item = &$this->_tpldata['topicrow.'][$topicrow_i];
 $topicrow_item['S_ROW_COUNT'] = $topicrow_i;
 $topicrow_item['S_NUM_ROWS'] = $topicrow_count;

?>
    <tr> 
      <td class="<?php echo isset($topicrow_item['ROW_CLASS']) ? $topicrow_item['ROW_CLASS'] : ''; ?>" align="right"><input type="checkbox" name="delete_id_<?php echo isset($topicrow_item['TOPIC_ID']) ? $topicrow_item['TOPIC_ID'] : ''; ?>"></td>
      <td class="<?php echo isset($topicrow_item['ROW_CLASS']) ? $topicrow_item['ROW_CLASS'] : ''; ?>"  align="left"><span class="gen"><?php echo isset($topicrow_item['TITLE']) ? $topicrow_item['TITLE'] : ''; ?></span></td>
      <td class="<?php echo isset($topicrow_item['ROW_CLASS']) ? $topicrow_item['ROW_CLASS'] : ''; ?>" align="center" valign="middle"><span class="gen"><?php echo isset($topicrow_item['POSTER']) ? $topicrow_item['POSTER'] : ''; ?></span></td>
      <td class="<?php echo isset($topicrow_item['ROW_CLASS']) ? $topicrow_item['ROW_CLASS'] : ''; ?>" align="center" valign="middle"><span class="gensmall"><?php echo isset($topicrow_item['TIME']) ? $topicrow_item['TIME'] : ''; ?></span></td>
      <td class="<?php echo isset($topicrow_item['ROW_CLASS']) ? $topicrow_item['ROW_CLASS'] : ''; ?>" align="center" valign="middle"><span class="gensmall"><?php echo isset($topicrow_item['MOVED_FROM']) ? $topicrow_item['MOVED_FROM'] : ''; ?></span></td>
      <td class="<?php echo isset($topicrow_item['ROW_CLASS']) ? $topicrow_item['ROW_CLASS'] : ''; ?>" align="center" valign="middle"><span class="gensmall"><?php echo isset($topicrow_item['MOVED_TO']) ? $topicrow_item['MOVED_TO'] : ''; ?></span></td>
    </tr>
    <?php

} // END topicrow

if(isset($topicrow_item)) { unset($topicrow_item); } 

?>
    <?php

$emptyrow_count = ( isset($this->_tpldata['emptyrow.']) ) ?  sizeof($this->_tpldata['emptyrow.']) : 0;
for ($emptyrow_i = 0; $emptyrow_i < $emptyrow_count; $emptyrow_i++)
{
 $emptyrow_item = &$this->_tpldata['emptyrow.'][$emptyrow_i];
 $emptyrow_item['S_ROW_COUNT'] = $emptyrow_i;
 $emptyrow_item['S_NUM_ROWS'] = $emptyrow_count;

?>
    <tr>
        <td class="row1" align="center" colspan="6"><span class="gen"><?php echo isset($this->vars['L_NO_TOPICS_FOUND']) ? $this->vars['L_NO_TOPICS_FOUND'] : $this->lang('L_NO_TOPICS_FOUND'); ?></span></td>
    </tr>
    <?php

} // END emptyrow

if(isset($emptyrow_item)) { unset($emptyrow_item); } 

?>
    <tr> 
      <td class="catbottom" colspan="6" height="28" align="center"><input type="submit" class="mainoption" value="<?php echo isset($this->vars['L_DELETE']) ? $this->vars['L_DELETE'] : $this->lang('L_DELETE'); ?>">&nbsp;&nbsp;<input type="reset" class="liteoption" value="<?php echo isset($this->vars['L_CLEAR']) ? $this->vars['L_CLEAR'] : $this->lang('L_CLEAR'); ?>"></td>
    </tr>
  </table>
</form>
  
<form method="post" action="<?php echo isset($this->vars['S_MODE_ACTION']) ? $this->vars['S_MODE_ACTION'] : $this->lang('S_MODE_ACTION'); ?>" name="delete_all_before">
  <table cellpadding="3" cellspacing="1" border="0" class="forumline" align="center">
      <tr>
          <td class="catHead" colspan="3"><span class='catTitle'><?php echo isset($this->vars['L_DELETE_FROM_EXPLAN']) ? $this->vars['L_DELETE_FROM_EXPLAN'] : $this->lang('L_DELETE_FROM_EXPLAN'); ?></span></td>
      </tr>
    <tr>
        <th height="25" class="thCornerL"><?php echo isset($this->vars['L_MONTH']) ? $this->vars['L_MONTH'] : $this->lang('L_MONTH'); ?><br />1 - 12</td>
        <th class="thTop"><?php echo isset($this->vars['L_DAY']) ? $this->vars['L_DAY'] : $this->lang('L_DAY'); ?><br />1 - 31</td>
        <th class="thCornerR"><?php echo isset($this->vars['L_YEAR']) ? $this->vars['L_YEAR'] : $this->lang('L_YEAR'); ?><br />1970 - 2038</td>
    </tr>
    <tr>
        <td class="row1" align="center"><input class="post" type="text" name="del_month" value="<?php echo isset($this->vars['S_MONTH']) ? $this->vars['S_MONTH'] : $this->lang('S_MONTH'); ?>" size="2" maxlength="2"></td>
        <td class="row2" align="center"><input class="post" type="text" name="del_day" value="<?php echo isset($this->vars['S_DAY']) ? $this->vars['S_DAY'] : $this->lang('S_DAY'); ?>" size="2" maxlength="2"></td>
        <td class="row1" align="center"><input class="post" type="text" name="del_year" value="<?php echo isset($this->vars['S_YEAR']) ? $this->vars['S_YEAR'] : $this->lang('S_YEAR'); ?>" size="4" maxlength="4"></td>
    </tr>
    <tr> 
      <td class="catbottom" colspan="3" height="28" align="center">
          <input type="hidden" name="delete_all_before_date" value="1">
          <input type="hidden" name="mode" value="<?php echo isset($this->vars['S_MODE']) ? $this->vars['S_MODE'] : $this->lang('S_MODE'); ?>">
          <input type="hidden" name="order" value="<?php echo isset($this->vars['S_ORDER']) ? $this->vars['S_ORDER'] : $this->lang('S_ORDER'); ?>">
          <input type="submit" value="<?php echo isset($this->vars['L_DELETE_BEFORE']) ? $this->vars['L_DELETE_BEFORE'] : $this->lang('L_DELETE_BEFORE'); ?>" class="mainoption">
      </td>
    </tr>
  </table>
 </form>