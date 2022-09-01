<?php

// eXtreme Styles mod cache. Generated on Sat, 01 May 2021 23:49:11 +0000 (time=1619912951)

?>
<h1><?php echo isset($this->vars['L_CONTROL_PANEL_TITLE']) ? $this->vars['L_CONTROL_PANEL_TITLE'] : $this->lang('L_CONTROL_PANEL_TITLE'); ?></h1>

<p><?php echo isset($this->vars['L_CONTROL_PANEL_EXPLAIN']) ? $this->vars['L_CONTROL_PANEL_EXPLAIN'] : $this->lang('L_CONTROL_PANEL_EXPLAIN'); ?></p>

<form method="post" action="<?php echo isset($this->vars['S_MODE_ACTION']) ? $this->vars['S_MODE_ACTION'] : $this->lang('S_MODE_ACTION'); ?>">
  <table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
    <tr> 
      <td align="right" nowrap="nowrap"><span class="genmed"><?php echo isset($this->vars['L_VIEW']) ? $this->vars['L_VIEW'] : $this->lang('L_VIEW'); ?>:&nbsp;<?php echo isset($this->vars['S_VIEW_SELECT']) ? $this->vars['S_VIEW_SELECT'] : $this->lang('S_VIEW_SELECT'); ?>&nbsp;&nbsp; 
        <input type="submit" name="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" class="liteoption" />
        </span></td>
    </tr>
  </table>

<table width="100%" cellpadding="4" cellspacing="1" border="0" class="forumline">
  <tr> 
    <th width="50%" nowrap="nowrap" height="25" class="thCornerL"><?php echo isset($this->vars['L_STATISTIC']) ? $this->vars['L_STATISTIC'] : $this->lang('L_STATISTIC'); ?></th>
    <th width="50%" height="25" class="thCornerR"><?php echo isset($this->vars['L_VALUE']) ? $this->vars['L_VALUE'] : $this->lang('L_VALUE'); ?></th>
  </tr>
  <tr> 
    <td class="row1" nowrap="nowrap"><?php echo isset($this->vars['L_NUMBER_OF_ATTACHMENTS']) ? $this->vars['L_NUMBER_OF_ATTACHMENTS'] : $this->lang('L_NUMBER_OF_ATTACHMENTS'); ?>:</td>
    <td class="row2"><strong><?php echo isset($this->vars['NUMBER_OF_ATTACHMENTS']) ? $this->vars['NUMBER_OF_ATTACHMENTS'] : $this->lang('NUMBER_OF_ATTACHMENTS'); ?></strong></td>
  </tr>
  <tr> 
    <td class="row1" nowrap="nowrap"><?php echo isset($this->vars['L_TOTAL_FILESIZE']) ? $this->vars['L_TOTAL_FILESIZE'] : $this->lang('L_TOTAL_FILESIZE'); ?>:</td>
    <td class="row2"><strong><?php echo isset($this->vars['TOTAL_FILESIZE']) ? $this->vars['TOTAL_FILESIZE'] : $this->lang('TOTAL_FILESIZE'); ?></strong></td>
  </tr>
  <tr> 
    <td class="row1" nowrap="nowrap"><?php echo isset($this->vars['L_ATTACH_QUOTA']) ? $this->vars['L_ATTACH_QUOTA'] : $this->lang('L_ATTACH_QUOTA'); ?>:</td>
    <td class="row2"><strong><?php echo isset($this->vars['ATTACH_QUOTA']) ? $this->vars['ATTACH_QUOTA'] : $this->lang('ATTACH_QUOTA'); ?></strong></td>
  </tr>
  <tr> 
    <td class="row1" nowrap="nowrap"><?php echo isset($this->vars['L_NUMBER_OF_POSTS']) ? $this->vars['L_NUMBER_OF_POSTS'] : $this->lang('L_NUMBER_OF_POSTS'); ?>:</td>
    <td class="row2"><strong><?php echo isset($this->vars['NUMBER_OF_POSTS']) ? $this->vars['NUMBER_OF_POSTS'] : $this->lang('NUMBER_OF_POSTS'); ?></strong></td>
  </tr>
  <tr> 
    <td class="row1" nowrap="nowrap"><?php echo isset($this->vars['L_NUMBER_OF_PMS']) ? $this->vars['L_NUMBER_OF_PMS'] : $this->lang('L_NUMBER_OF_PMS'); ?>:</td>
    <td class="row2"><strong><?php echo isset($this->vars['NUMBER_OF_PMS']) ? $this->vars['NUMBER_OF_PMS'] : $this->lang('NUMBER_OF_PMS'); ?></strong></td>
  </tr>
  <tr> 
    <td class="row1" nowrap="nowrap"><?php echo isset($this->vars['L_NUMBER_OF_TOPICS']) ? $this->vars['L_NUMBER_OF_TOPICS'] : $this->lang('L_NUMBER_OF_TOPICS'); ?>:</td>
    <td class="row2"><strong><?php echo isset($this->vars['NUMBER_OF_TOPICS']) ? $this->vars['NUMBER_OF_TOPICS'] : $this->lang('NUMBER_OF_TOPICS'); ?></strong></td>
  </tr>
  <tr> 
    <td class="row1" nowrap="nowrap"><?php echo isset($this->vars['L_NUMBER_OF_USERS']) ? $this->vars['L_NUMBER_OF_USERS'] : $this->lang('L_NUMBER_OF_USERS'); ?>:</td>
    <td class="row2"><strong><?php echo isset($this->vars['NUMBER_OF_USERS']) ? $this->vars['NUMBER_OF_USERS'] : $this->lang('NUMBER_OF_USERS'); ?></strong></td>
  </tr>
</table>
</form>

<br />
<div align="center"><span class="copyright"><?php echo isset($this->vars['ATTACH_VERSION']) ? $this->vars['ATTACH_VERSION'] : $this->lang('ATTACH_VERSION'); ?></span></div>
