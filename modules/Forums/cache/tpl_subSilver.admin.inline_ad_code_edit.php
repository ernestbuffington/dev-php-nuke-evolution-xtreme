<?php

// eXtreme Styles mod cache. Generated on Sat, 15 May 2021 02:52:32 +0000 (time=1621047152)

?><h1><?php echo isset($this->vars['L_CONFIGURATION_TITLE']) ? $this->vars['L_CONFIGURATION_TITLE'] : $this->lang('L_CONFIGURATION_TITLE'); ?></h1>
<form action="<?php echo isset($this->vars['S_ACTION']) ? $this->vars['S_ACTION'] : $this->lang('S_ACTION'); ?>" method="post">
<table width="99%" cellpadding="4" cellspacing="1" border="0" align="center" class="forumline">
  <tr>
    <th class="thHead" colspan="3"><?php echo isset($this->vars['L_CONFIGURATION_TITLE']) ? $this->vars['L_CONFIGURATION_TITLE'] : $this->lang('L_CONFIGURATION_TITLE'); ?></th>
  </tr>
  <tr>
    <td class="row1"><?php echo isset($this->vars['L_NAME']) ? $this->vars['L_NAME'] : $this->lang('L_NAME'); ?></td>
    <td class="row2"><input type="text" value="<?php echo isset($this->vars['AD_NAME']) ? $this->vars['AD_NAME'] : $this->lang('AD_NAME'); ?>" name="ad_name" size="20" maxlength="30" /></td>
  </tr>
  <tr>
    <td class="row1"><?php echo isset($this->vars['L_CODE']) ? $this->vars['L_CODE'] : $this->lang('L_CODE'); ?></td>
    <td class="row2"><textarea name="ad_code" cols="60" rows="10"><?php echo isset($this->vars['AD_CODE']) ? $this->vars['AD_CODE'] : $this->lang('AD_CODE'); ?></textarea></td>
  </tr>
  <tr>
    <td class="catBottom" align="center" colspan="2"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?><input type="submit" name="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" class="mainoption" />&nbsp;&nbsp;<input type="reset" value="<?php echo isset($this->vars['L_RESET']) ? $this->vars['L_RESET'] : $this->lang('L_RESET'); ?>" class="liteoption" />
    </td>
  </tr>
</table>
</form>
<br clear="all" />