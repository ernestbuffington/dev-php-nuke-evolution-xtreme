<?php

// eXtreme Styles mod cache. Generated on Wed, 07 Apr 2021 00:45:19 +0000 (time=1617756319)

?><table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
    <tr>
        <td class="nav" align="left"><a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a></td>
    </tr>
</table>

<table class="forumline" width="100%" cellspacing="1" cellpadding="3" border="0">
    <tr>
        <th class="thHead" height="25" valign="middle"><span class="tableTitle"><?php echo isset($this->vars['MESSAGE_TITLE']) ? $this->vars['MESSAGE_TITLE'] : $this->lang('MESSAGE_TITLE'); ?></span></th>
    </tr>
    <tr>
        <td class="row1" align="center"><form action="<?php echo isset($this->vars['S_CONFIRM_ACTION']) ? $this->vars['S_CONFIRM_ACTION'] : $this->lang('S_CONFIRM_ACTION'); ?>" method="post"><span class="gen"><br /><?php echo isset($this->vars['MESSAGE_TEXT']) ? $this->vars['MESSAGE_TEXT'] : $this->lang('MESSAGE_TEXT'); ?><br /><br /><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?><input type="submit" name="confirm" value="<?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>" class="mainoption" />&nbsp;&nbsp;<input type="submit" name="cancel" value="<?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?>" class="liteoption" /></span></form></td>
    </tr>
</table>

<br />