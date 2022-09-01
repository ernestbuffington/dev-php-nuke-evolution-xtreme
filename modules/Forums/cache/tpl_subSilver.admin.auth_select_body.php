<?php

// eXtreme Styles mod cache. Generated on Sat, 01 May 2021 23:53:00 +0000 (time=1619913180)

?><h1><?php echo isset($this->vars['L_AUTH_TITLE']) ? $this->vars['L_AUTH_TITLE'] : $this->lang('L_AUTH_TITLE'); ?></h1>

<p><?php echo isset($this->vars['L_AUTH_EXPLAIN']) ? $this->vars['L_AUTH_EXPLAIN'] : $this->lang('L_AUTH_EXPLAIN'); ?></p>

<form method="post" action="<?php echo isset($this->vars['S_AUTH_ACTION']) ? $this->vars['S_AUTH_ACTION'] : $this->lang('S_AUTH_ACTION'); ?>"><table cellspacing="1" cellpadding="4" border="0" align="center" class="forumline">
    <tr>
        <th class="thHead" align="center"><?php echo isset($this->vars['L_AUTH_SELECT']) ? $this->vars['L_AUTH_SELECT'] : $this->lang('L_AUTH_SELECT'); ?></th>
    </tr>
    <tr>
        <td class="row1" align="center"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?><?php echo isset($this->vars['S_AUTH_SELECT']) ? $this->vars['S_AUTH_SELECT'] : $this->lang('S_AUTH_SELECT'); ?>&nbsp;&nbsp;<input type="submit" value="<?php echo isset($this->vars['L_LOOK_UP']) ? $this->vars['L_LOOK_UP'] : $this->lang('L_LOOK_UP'); ?>" class="mainoption" />&nbsp;</td>
    </tr>
</table></form>