<?php

// eXtreme Styles mod cache. Generated on Sat, 01 May 2021 23:53:07 +0000 (time=1619913187)

?><h1><?php echo isset($this->vars['L_FORUM_PRUNE']) ? $this->vars['L_FORUM_PRUNE'] : $this->lang('L_FORUM_PRUNE'); ?></h1>

<form method="post" action="<?php echo isset($this->vars['S_FORUMPRUNE_ACTION']) ? $this->vars['S_FORUMPRUNE_ACTION'] : $this->lang('S_FORUMPRUNE_ACTION'); ?>"><table cellspacing="1" cellpadding="4" border="0" align="center" class="forumline">
    <tr>
        
      <th class="thHead" align="center"><?php echo isset($this->vars['L_SELECT_FORUM']) ? $this->vars['L_SELECT_FORUM'] : $this->lang('L_SELECT_FORUM'); ?></th>
    </tr>
    <tr>
        <td class="row1" align="center"><?php echo isset($this->vars['S_FORUMS_SELECT']) ? $this->vars['S_FORUMS_SELECT'] : $this->lang('S_FORUMS_SELECT'); ?> &nbsp;<input type="submit" name="pruneset" value="<?php echo isset($this->vars['L_LOOK_UP']) ? $this->vars['L_LOOK_UP'] : $this->lang('L_LOOK_UP'); ?>" class="mainoption">&nbsp;</td>
    </tr>
</table></form>