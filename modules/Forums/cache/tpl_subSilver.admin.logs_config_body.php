<?php

// eXtreme Styles mod cache. Generated on Wed, 12 May 2021 22:53:27 +0000 (time=1620860007)

?><h1><?php echo isset($this->vars['L_LOG_CONFIG_TITLE']) ? $this->vars['L_LOG_CONFIG_TITLE'] : $this->lang('L_LOG_CONFIG_TITLE'); ?></h1>

<p><?php echo isset($this->vars['L_LOG_CONFIG_TITLE_EXPLAIN']) ? $this->vars['L_LOG_CONFIG_TITLE_EXPLAIN'] : $this->lang('L_LOG_CONFIG_TITLE_EXPLAIN'); ?></p>

<form action="<?php echo isset($this->vars['S_CONFIG_ACTION']) ? $this->vars['S_CONFIG_ACTION'] : $this->lang('S_CONFIG_ACTION'); ?>" method="post"><table width="99%" cellpadding="4" cellspacing="1" border="0" align="center" class="forumline">
    <tr>
      <th class="thHead" colspan="2"><?php echo isset($this->vars['L_GENERAL_LOG_CONFIG']) ? $this->vars['L_GENERAL_LOG_CONFIG'] : $this->lang('L_GENERAL_LOG_CONFIG'); ?></th>
    </tr>
    <tr>
        <td class="row1"><?php echo isset($this->vars['L_ALLOW_OTHER_ADMIN']) ? $this->vars['L_ALLOW_OTHER_ADMIN'] : $this->lang('L_ALLOW_OTHER_ADMIN'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_ALLOW_OTHER_ADMIN_EXPLAIN']) ? $this->vars['L_ALLOW_OTHER_ADMIN_EXPLAIN'] : $this->lang('L_ALLOW_OTHER_ADMIN_EXPLAIN'); ?></span></td>
        <td class="row2"><input type="radio" name="all_admin" value="0" <?php echo isset($this->vars['S_DISALLOW_ALL_ADMIN']) ? $this->vars['S_DISALLOW_ALL_ADMIN'] : $this->lang('S_DISALLOW_ALL_ADMIN'); ?> /><?php echo isset($this->vars['L_DISABLED']) ? $this->vars['L_DISABLED'] : $this->lang('L_DISABLED'); ?>&nbsp; &nbsp;<input type="radio" name="all_admin" value="1" <?php echo isset($this->vars['S_ALLOW_ALL_ADMIN']) ? $this->vars['S_ALLOW_ALL_ADMIN'] : $this->lang('S_ALLOW_ALL_ADMIN'); ?> /><?php echo isset($this->vars['L_ENABLED']) ? $this->vars['L_ENABLED'] : $this->lang('L_ENABLED'); ?></td>
    </tr>
    <tr> 
        <td class="row1"><?php echo isset($this->vars['L_ADD_ADMIN_USERNAME']) ? $this->vars['L_ADD_ADMIN_USERNAME'] : $this->lang('L_ADD_ADMIN_USERNAME'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_USERNAME_ADD_ADMIN_EXPLAIN']) ? $this->vars['L_USERNAME_ADD_ADMIN_EXPLAIN'] : $this->lang('L_USERNAME_ADD_ADMIN_EXPLAIN'); ?></span></td>
        <td class="row2"><?php echo isset($this->vars['S_ADD_ADMIN']) ? $this->vars['S_ADD_ADMIN'] : $this->lang('S_ADD_ADMIN'); ?>&nbsp;<input type="submit" name="add_admin" value="<?php echo isset($this->vars['L_ADD']) ? $this->vars['L_ADD'] : $this->lang('L_ADD'); ?>" class="liteoption" /></td>
    </tr>
    <tr>
        <td class="row1"><?php echo isset($this->vars['L_DELETE_ADMIN_USERNAME']) ? $this->vars['L_DELETE_ADMIN_USERNAME'] : $this->lang('L_DELETE_ADMIN_USERNAME'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_USERNAME_DELETE_ADMIN_EXPLAIN']) ? $this->vars['L_USERNAME_DELETE_ADMIN_EXPLAIN'] : $this->lang('L_USERNAME_DELETE_ADMIN_EXPLAIN'); ?></span></td>
        <td class="row2"><?php echo isset($this->vars['S_DELETE_ADMIN']) ? $this->vars['S_DELETE_ADMIN'] : $this->lang('S_DELETE_ADMIN'); ?>&nbsp;<input type="submit" name="delete_admin" value="<?php echo isset($this->vars['L_DELETE']) ? $this->vars['L_DELETE'] : $this->lang('L_DELETE'); ?>" class="liteoption" /></td>
    </tr>
        <tr>
        <td class="catBottom" colspan="2" align="center"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?><input type="submit" name="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" class="mainoption" />&nbsp;&nbsp;<input type="reset" value="<?php echo isset($this->vars['L_RESET']) ? $this->vars['L_RESET'] : $this->lang('L_RESET'); ?>" class="liteoption" />
        </td>
    </tr>
</table>
</form>

<form action="<?php echo isset($this->vars['S_CONFIG_ACTION']) ? $this->vars['S_CONFIG_ACTION'] : $this->lang('S_CONFIG_ACTION'); ?>" method="post"><table width="99%" cellpadding="4" cellspacing="1" border="0" align="center" class="forumline">
    <tr>
      <th class="thHead" colspan="2"><?php echo isset($this->vars['L_PRUNE_LOG']) ? $this->vars['L_PRUNE_LOG'] : $this->lang('L_PRUNE_LOG'); ?></th>
    </tr>
    <tr> 
        <td class="row1"><?php echo isset($this->vars['L_PRUNE']) ? $this->vars['L_PRUNE'] : $this->lang('L_PRUNE'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_PRUNE_EXPLAIN']) ? $this->vars['L_PRUNE_EXPLAIN'] : $this->lang('L_PRUNE_EXPLAIN'); ?></span></td>
        <td class="row2"><input type="text" name="prune_days" size="5" class="liteoption" />&nbsp;<input type="submit" name="do_prune" value="<?php echo isset($this->vars['L_DO_PRUNE']) ? $this->vars['L_DO_PRUNE'] : $this->lang('L_DO_PRUNE'); ?>" class="mainoption" /></td>
    </tr>
</table>
</form>
<br clear="all" />