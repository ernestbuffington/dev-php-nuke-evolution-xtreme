<?php

// eXtreme Styles mod cache. Generated on Wed, 24 Mar 2021 04:29:19 +0000 (time=1616560159)

?><h1><?php echo isset($this->vars['L_DISALLOW_TITLE']) ? $this->vars['L_DISALLOW_TITLE'] : $this->lang('L_DISALLOW_TITLE'); ?></h1>

<p><?php echo isset($this->vars['L_DISALLOW_EXPLAIN']) ? $this->vars['L_DISALLOW_EXPLAIN'] : $this->lang('L_DISALLOW_EXPLAIN'); ?></p>

<form method="post" action="<?php echo isset($this->vars['S_FORM_ACTION']) ? $this->vars['S_FORM_ACTION'] : $this->lang('S_FORM_ACTION'); ?>"><table width="80%" cellspacing="1" cellpadding="4" border="0" align="center" class="forumline">
    <tr> 
        <th class="thHead" colspan="2"><?php echo isset($this->vars['L_ADD_DISALLOW']) ? $this->vars['L_ADD_DISALLOW'] : $this->lang('L_ADD_DISALLOW'); ?></th>
    </tr>
    <tr> 
        <td class="row1"><?php echo isset($this->vars['L_USERNAME']) ? $this->vars['L_USERNAME'] : $this->lang('L_USERNAME'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_ADD_EXPLAIN']) ? $this->vars['L_ADD_EXPLAIN'] : $this->lang('L_ADD_EXPLAIN'); ?></span></td>
        <td class="row2"><input type="text" name="disallowed_user" size="30" />&nbsp;<input type="submit" name="add_name" value="<?php echo isset($this->vars['L_ADD']) ? $this->vars['L_ADD'] : $this->lang('L_ADD'); ?>" class="mainoption" /></td>
    </tr>
    <tr> 
        <th class="thHead" colspan="2"><?php echo isset($this->vars['L_DELETE_DISALLOW']) ? $this->vars['L_DELETE_DISALLOW'] : $this->lang('L_DELETE_DISALLOW'); ?></th>
    </tr>
    <tr> 
        <td class="row1"><?php echo isset($this->vars['L_USERNAME']) ? $this->vars['L_USERNAME'] : $this->lang('L_USERNAME'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_DELETE_EXPLAIN']) ? $this->vars['L_DELETE_EXPLAIN'] : $this->lang('L_DELETE_EXPLAIN'); ?></span></td>
        <td class="row2"><?php echo isset($this->vars['S_DISALLOW_SELECT']) ? $this->vars['S_DISALLOW_SELECT'] : $this->lang('S_DISALLOW_SELECT'); ?>&nbsp;<input type="submit" name="delete_name" value="<?php echo isset($this->vars['L_DELETE']) ? $this->vars['L_DELETE'] : $this->lang('L_DELETE'); ?>" class="liteoption" /></td>
    </tr>
    <tr> 
        <td class="catBottom" colspan="2" align="center">&nbsp;</td>
    </tr>
</table></form>