<?php

// eXtreme Styles mod cache. Generated on Sat, 22 May 2021 13:28:46 +0000 (time=1621690126)

?><h1><?php echo isset($this->vars['L_FORUM_DELETE']) ? $this->vars['L_FORUM_DELETE'] : $this->lang('L_FORUM_DELETE'); ?></h1>

<p><?php echo isset($this->vars['L_FORUM_DELETE_EXPLAIN']) ? $this->vars['L_FORUM_DELETE_EXPLAIN'] : $this->lang('L_FORUM_DELETE_EXPLAIN'); ?></p>

<form action="<?php echo isset($this->vars['S_FORUM_ACTION']) ? $this->vars['S_FORUM_ACTION'] : $this->lang('S_FORUM_ACTION'); ?>" method="post">
  <table cellpadding="4" cellspacing="1" border="0" class="forumline" align="center">
    <tr> 
      <th colspan="2" class="thHead"><?php echo isset($this->vars['L_FORUM_DELETE']) ? $this->vars['L_FORUM_DELETE'] : $this->lang('L_FORUM_DELETE'); ?></th>
      </tr>
    <tr> 
      <td class="row1"><?php echo isset($this->vars['L_FORUM_NAME']) ? $this->vars['L_FORUM_NAME'] : $this->lang('L_FORUM_NAME'); ?></td>
      <td class="row1"><span class="row1"><?php echo isset($this->vars['NAME']) ? $this->vars['NAME'] : $this->lang('NAME'); ?></span></td>
    </tr>
    <tr> 
      <td class="row1"><?php echo isset($this->vars['L_MOVE_CONTENTS']) ? $this->vars['L_MOVE_CONTENTS'] : $this->lang('L_MOVE_CONTENTS'); ?></td>
      <td class="row1"><?php echo isset($this->vars['S_SELECT_TO']) ? $this->vars['S_SELECT_TO'] : $this->lang('S_SELECT_TO'); ?></td>
    </tr>
    <tr> 
      <td class="catBottom" colspan="2" align="center"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?><input type="submit" name="submit" value="<?php echo isset($this->vars['S_SUBMIT_VALUE']) ? $this->vars['S_SUBMIT_VALUE'] : $this->lang('S_SUBMIT_VALUE'); ?>" class="mainoption" /></td>
    </tr>
  </table>
</form>