<?php

// eXtreme Styles mod cache. Generated on Thu, 13 May 2021 09:59:55 +0000 (time=1620899995)

?><h1><?php echo isset($this->vars['L_AUTH_TITLE']) ? $this->vars['L_AUTH_TITLE'] : $this->lang('L_AUTH_TITLE'); ?></h1>

<p><?php echo isset($this->vars['L_AUTH_EXPLAIN']) ? $this->vars['L_AUTH_EXPLAIN'] : $this->lang('L_AUTH_EXPLAIN'); ?></p>

<h2><?php echo isset($this->vars['L_FORUM']) ? $this->vars['L_FORUM'] : $this->lang('L_FORUM'); ?>: <?php echo isset($this->vars['FORUM_NAME']) ? $this->vars['FORUM_NAME'] : $this->lang('FORUM_NAME'); ?></h2>

<form method="post" action="<?php echo isset($this->vars['S_FORUMAUTH_ACTION']) ? $this->vars['S_FORUMAUTH_ACTION'] : $this->lang('S_FORUMAUTH_ACTION'); ?>">
  <table cellspacing="1" cellpadding="4" border="0" align="center" class="forumline">
    <tr> 
      <?php

$forum_auth_titles_count = ( isset($this->_tpldata['forum_auth_titles.']) ) ?  sizeof($this->_tpldata['forum_auth_titles.']) : 0;
for ($forum_auth_titles_i = 0; $forum_auth_titles_i < $forum_auth_titles_count; $forum_auth_titles_i++)
{
 $forum_auth_titles_item = &$this->_tpldata['forum_auth_titles.'][$forum_auth_titles_i];
 $forum_auth_titles_item['S_ROW_COUNT'] = $forum_auth_titles_i;
 $forum_auth_titles_item['S_NUM_ROWS'] = $forum_auth_titles_count;

?>
      <th class="thTop"><?php echo isset($forum_auth_titles_item['CELL_TITLE']) ? $forum_auth_titles_item['CELL_TITLE'] : ''; ?></th>
      <?php

} // END forum_auth_titles

if(isset($forum_auth_titles_item)) { unset($forum_auth_titles_item); } 

?>
    </tr>
    <tr> 
      <?php

$forum_auth_data_count = ( isset($this->_tpldata['forum_auth_data.']) ) ?  sizeof($this->_tpldata['forum_auth_data.']) : 0;
for ($forum_auth_data_i = 0; $forum_auth_data_i < $forum_auth_data_count; $forum_auth_data_i++)
{
 $forum_auth_data_item = &$this->_tpldata['forum_auth_data.'][$forum_auth_data_i];
 $forum_auth_data_item['S_ROW_COUNT'] = $forum_auth_data_i;
 $forum_auth_data_item['S_NUM_ROWS'] = $forum_auth_data_count;

?>
      <td class="row1" align="center"><?php echo isset($forum_auth_data_item['S_AUTH_LEVELS_SELECT']) ? $forum_auth_data_item['S_AUTH_LEVELS_SELECT'] : ''; ?></td>
      <?php

} // END forum_auth_data

if(isset($forum_auth_data_item)) { unset($forum_auth_data_item); } 

?>
    </tr>
    <tr> 
      <td colspan="<?php echo isset($this->vars['S_COLUMN_SPAN']) ? $this->vars['S_COLUMN_SPAN'] : $this->lang('S_COLUMN_SPAN'); ?>" align="center" class="row1"> <span class="gensmall"><?php echo isset($this->vars['U_SWITCH_MODE']) ? $this->vars['U_SWITCH_MODE'] : $this->lang('U_SWITCH_MODE'); ?></span></td>
    </tr>
    <tr>
      <td colspan="<?php echo isset($this->vars['S_COLUMN_SPAN']) ? $this->vars['S_COLUMN_SPAN'] : $this->lang('S_COLUMN_SPAN'); ?>" class="catBottom" align="center"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?> 
        <input type="submit" name="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" class="mainoption" />
        &nbsp;&nbsp; 
        <input type="reset" value="<?php echo isset($this->vars['L_RESET']) ? $this->vars['L_RESET'] : $this->lang('L_RESET'); ?>" name="reset" class="liteoption" />
      </td>
    </tr>
  </table>
</form>