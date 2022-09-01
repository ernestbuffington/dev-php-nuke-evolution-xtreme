<?php

// eXtreme Styles mod cache. Generated on Wed, 12 May 2021 23:35:41 +0000 (time=1620862541)

?><script language="Javascript" type="text/javascript">
    //
    // Taking from the Attachment MOD of Acyd Burn
    //
    function select(status)
    {
        for (i = 0; i < document.log_list.length; i++)
        {
            document.log_list.elements[i].checked = status;
        }
    }
</script>

<h1><?php echo isset($this->vars['L_LOG_ACTIONS_TITLE']) ? $this->vars['L_LOG_ACTIONS_TITLE'] : $this->lang('L_LOG_ACTIONS_TITLE'); ?></h1>

<p><?php echo isset($this->vars['L_LOG_ACTION_EXPLAIN']) ? $this->vars['L_LOG_ACTION_EXPLAIN'] : $this->lang('L_LOG_ACTION_EXPLAIN'); ?></p>

<span class="gen"><?php echo isset($this->vars['GROUPS']) ? $this->vars['GROUPS'] : $this->lang('GROUPS'); ?></span><br />

<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
    <form method="post" action="<?php echo isset($this->vars['S_MODE_ACTION']) ? $this->vars['S_MODE_ACTION'] : $this->lang('S_MODE_ACTION'); ?>">
    <tr>
        <td align="right" nowrap="nowrap" colspan="2"><span class="genmed"><?php echo isset($this->vars['L_CHOOSE_SORT']) ? $this->vars['L_CHOOSE_SORT'] : $this->lang('L_CHOOSE_SORT'); ?> :&nbsp;<?php echo isset($this->vars['S_MODE_SELECT']) ? $this->vars['S_MODE_SELECT'] : $this->lang('S_MODE_SELECT'); ?>&nbsp;&nbsp;<?php echo isset($this->vars['L_ORDER']) ? $this->vars['L_ORDER'] : $this->lang('L_ORDER'); ?>&nbsp;<?php echo isset($this->vars['S_ORDER_SELECT']) ? $this->vars['S_ORDER_SELECT'] : $this->lang('S_ORDER_SELECT'); ?>&nbsp;&nbsp;</span>
        <input type="submit" name="submit" value="<?php echo isset($this->vars['L_GO']) ? $this->vars['L_GO'] : $this->lang('L_GO'); ?>" class="liteoption" />
        </td>
    </tr>
    </form>
</table>

<table width="99%" cellpadding="4" cellspacing="1" border="0" align="center" class="forumline">
<form method="post" name="log_list" action="<?php echo isset($this->vars['S_MODE_ACTION']) ? $this->vars['S_MODE_ACTION'] : $this->lang('S_MODE_ACTION'); ?>">
<tr>
        <th><?php echo isset($this->vars['L_ID_LOG']) ? $this->vars['L_ID_LOG'] : $this->lang('L_ID_LOG'); ?></th>
        <th><?php echo isset($this->vars['L_ACTION']) ? $this->vars['L_ACTION'] : $this->lang('L_ACTION'); ?></th>
        <th><?php echo isset($this->vars['L_TOPIC']) ? $this->vars['L_TOPIC'] : $this->lang('L_TOPIC'); ?></th>
        <th><?php echo isset($this->vars['L_DONE_BY']) ? $this->vars['L_DONE_BY'] : $this->lang('L_DONE_BY'); ?></th>
        <th><?php echo isset($this->vars['L_USER_IP']) ? $this->vars['L_USER_IP'] : $this->lang('L_USER_IP'); ?></th>
        <th><?php echo isset($this->vars['L_DATE']) ? $this->vars['L_DATE'] : $this->lang('L_DATE'); ?></th>
        <th><?php echo isset($this->vars['L_DELETE_LOG']) ? $this->vars['L_DELETE_LOG'] : $this->lang('L_DELETE_LOG'); ?></th>
</tr>
<?php

$record_row_count = ( isset($this->_tpldata['record_row.']) ) ?  sizeof($this->_tpldata['record_row.']) : 0;
for ($record_row_i = 0; $record_row_i < $record_row_count; $record_row_i++)
{
 $record_row_item = &$this->_tpldata['record_row.'][$record_row_i];
 $record_row_item['S_ROW_COUNT'] = $record_row_i;
 $record_row_item['S_NUM_ROWS'] = $record_row_count;

?>
<tr>
        <td class="row2"><center><?php echo isset($record_row_item['ID_LOG']) ? $record_row_item['ID_LOG'] : ''; ?></center></td>
        <td class="row1"><center><?php echo isset($record_row_item['ACTION']) ? $record_row_item['ACTION'] : ''; ?></center></td>
        <td class="row2"><center><?php echo isset($record_row_item['TOPIC']) ? $record_row_item['TOPIC'] : ''; ?>&nbsp;&nbsp;&nbsp;<?php echo isset($record_row_item['TOPIC_IMG']) ? $record_row_item['TOPIC_IMG'] : ''; ?></center></td>
        <td class="row1"><center><?php echo isset($record_row_item['USERNAME']) ? $record_row_item['USERNAME'] : ''; ?></center></td>
        <td class="row2"><center><a href="<?php echo isset($record_row_item['U_WHOIS_IP']) ? $record_row_item['U_WHOIS_IP'] : ''; ?>" target="_blank"><?php echo isset($record_row_item['USER_IP']) ? $record_row_item['USER_IP'] : ''; ?></a></center></td>
        <td class="row1"><center><?php echo isset($record_row_item['DATE']) ? $record_row_item['DATE'] : ''; ?></center></td>
        <td class="row2" align="center" valign="middle"><input type="checkbox" name="log_list[]" value="<?php echo isset($record_row_item['ID_LOG']) ? $record_row_item['ID_LOG'] : ''; ?>" /></td>
</tr>
<?php

} // END record_row

if(isset($record_row_item)) { unset($record_row_item); } 

?>
<tr>
 <td class="catHead" colspan="9" height="28" align="right"> 
        <input type="submit" name="delete" class="liteoption" value="<?php echo isset($this->vars['L_DELETE']) ? $this->vars['L_DELETE'] : $this->lang('L_DELETE'); ?>" />
        <input type="submit" name="<?php echo isset($this->vars['L_CANCEL']) ? $this->vars['L_CANCEL'] : $this->lang('L_CANCEL'); ?>" class="liteoption" value="<?php echo isset($this->vars['L_CANCEL']) ? $this->vars['L_CANCEL'] : $this->lang('L_CANCEL'); ?>" onClick="self.location.href='<?php echo isset($this->vars['S_CANCEL_ACTION']) ? $this->vars['S_CANCEL_ACTION'] : $this->lang('S_CANCEL_ACTION'); ?>'" />
      </td>
</tr>
<tr> 
      <td class="catBottom" colspan="9" height="28" align="right"><strong><span class="gensmall"><a href="javascript:select(true);" class="gensmall"><?php echo isset($this->vars['L_MARK_ALL']) ? $this->vars['L_MARK_ALL'] : $this->lang('L_MARK_ALL'); ?></a> :: <a href="javascript:select(false);" class="gensmall"><?php echo isset($this->vars['L_UNMARK_ALL']) ? $this->vars['L_UNMARK_ALL'] : $this->lang('L_UNMARK_ALL'); ?></a></span></strong></td>
    </tr>
</table>

<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tr> 
    <td><span class="nav"><?php echo isset($this->vars['PAGE_NUMBER']) ? $this->vars['PAGE_NUMBER'] : $this->lang('PAGE_NUMBER'); ?></span></td>
    <td align="right"><span class="nav"><?php echo isset($this->vars['PAGINATION']) ? $this->vars['PAGINATION'] : $this->lang('PAGINATION'); ?></span></td>
  </tr>
</table>
</form>

<br clear="all">