<?php

// eXtreme Styles mod cache. Generated on Wed, 07 Apr 2021 12:10:17 +0000 (time=1617797417)

?><table class="forumline" width="100%" cellspacing="1" cellpadding="3" border="0">
	<tr>
		<th class="thHead" height="25" valign="middle"><span class="tableTitle"><?php echo isset($this->vars['MESSAGE_TITLE']) ? $this->vars['MESSAGE_TITLE'] : $this->lang('MESSAGE_TITLE'); ?></span></th>
	</tr>
	<tr>
		<td class="row1" align="center"><form action="<?php echo isset($this->vars['S_ACTION']) ? $this->vars['S_ACTION'] : $this->lang('S_ACTION'); ?>" method="post"><span class="gen"><br /><?php echo isset($this->vars['MESSAGE_TEXT']) ? $this->vars['MESSAGE_TEXT'] : $this->lang('MESSAGE_TEXT'); ?><br /><br /><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?>
			<select name="<?php echo isset($this->vars['S_GROUP_VARIABLE']) ? $this->vars['S_GROUP_VARIABLE'] : $this->lang('S_GROUP_VARIABLE'); ?>" class="post">
				<option value=""><?php echo isset($this->vars['L_SELECT']) ? $this->vars['L_SELECT'] : $this->lang('L_SELECT'); ?></option>
				<?php

$grouprow_count = ( isset($this->_tpldata['grouprow.']) ) ?  sizeof($this->_tpldata['grouprow.']) : 0;
for ($grouprow_i = 0; $grouprow_i < $grouprow_count; $grouprow_i++)
{
 $grouprow_item = &$this->_tpldata['grouprow.'][$grouprow_i];
 $grouprow_item['S_ROW_COUNT'] = $grouprow_i;
 $grouprow_item['S_NUM_ROWS'] = $grouprow_count;

?>
				<option value="<?php echo isset($grouprow_item['GROUP_ID']) ? $grouprow_item['GROUP_ID'] : ''; ?>"><?php echo isset($grouprow_item['GROUP_NAME']) ? $grouprow_item['GROUP_NAME'] : ''; ?></option>
				<?php

} // END grouprow

if(isset($grouprow_item)) { unset($grouprow_item); } 

?>
			</select>
		<input type="submit" name="confirm" value="<?php echo isset($this->vars['L_GO']) ? $this->vars['L_GO'] : $this->lang('L_GO'); ?>" class="mainoption" /><input type="submit" name="cancel" value="<?php echo isset($this->vars['L_CANCEL']) ? $this->vars['L_CANCEL'] : $this->lang('L_CANCEL'); ?>" class="liteoption" /></span></form></td>
	</tr>
</table>

<br clear="all" />
