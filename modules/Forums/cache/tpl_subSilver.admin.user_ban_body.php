<?php

// eXtreme Styles mod cache. Generated on Wed, 12 May 2021 22:52:38 +0000 (time=1620859958)

?><h1><?php echo isset($this->vars['L_BAN_TITLE']) ? $this->vars['L_BAN_TITLE'] : $this->lang('L_BAN_TITLE'); ?></h1>

<p><?php echo isset($this->vars['L_BAN_EXPLAIN']) ? $this->vars['L_BAN_EXPLAIN'] : $this->lang('L_BAN_EXPLAIN'); ?></p>

<form method="post" name="post" action="<?php echo isset($this->vars['S_BANLIST_ACTION']) ? $this->vars['S_BANLIST_ACTION'] : $this->lang('S_BANLIST_ACTION'); ?>"><table width="80%" cellspacing="1" cellpadding="4" border="0" align="center" class="forumline">
    <tr> 
      <th class="thHead" colspan="2"><?php echo isset($this->vars['L_BAN_USER']) ? $this->vars['L_BAN_USER'] : $this->lang('L_BAN_USER'); ?></th>
    </tr>
    <tr> 
      <td class="row1"><?php echo isset($this->vars['L_USERNAME']) ? $this->vars['L_USERNAME'] : $this->lang('L_USERNAME'); ?>:</td>
      <td class="row2"><input type="text" class="post" name="username" maxlength="50" size="20" /> <input type="hidden" name="mode" value="edit" /><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?> <input type="submit" name="usersubmit" value="<?php echo isset($this->vars['L_FIND_USERNAME']) ? $this->vars['L_FIND_USERNAME'] : $this->lang('L_FIND_USERNAME'); ?>" class="liteoption" onClick="window.open('<?php echo isset($this->vars['U_SEARCH_USER']) ? $this->vars['U_SEARCH_USER'] : $this->lang('U_SEARCH_USER'); ?>', '_phpbbsearch', 'HEIGHT=250,resizable=yes,WIDTH=400');return false;" /></td>
    </tr>
    <tr> 
      <th class="thHead" colspan="2"><?php echo isset($this->vars['L_UNBAN_USER']) ? $this->vars['L_UNBAN_USER'] : $this->lang('L_UNBAN_USER'); ?></th>
    </tr>
    <tr> 
      <td class="row1"><?php echo isset($this->vars['L_USERNAME']) ? $this->vars['L_USERNAME'] : $this->lang('L_USERNAME'); ?>: <br /><span class="gensmall"><?php echo isset($this->vars['L_UNBAN_USER_EXPLAIN']) ? $this->vars['L_UNBAN_USER_EXPLAIN'] : $this->lang('L_UNBAN_USER_EXPLAIN'); ?></span></td>
      <td class="row2"><?php echo isset($this->vars['S_UNBAN_USERLIST_SELECT']) ? $this->vars['S_UNBAN_USERLIST_SELECT'] : $this->lang('S_UNBAN_USERLIST_SELECT'); ?></td>
    </tr>
    <tr> 
      <th class="thHead" colspan="2"><?php echo isset($this->vars['L_BAN_IP']) ? $this->vars['L_BAN_IP'] : $this->lang('L_BAN_IP'); ?></th>
    </tr>
    <tr> 
      <td class="row1"><?php echo isset($this->vars['L_IP_OR_HOSTNAME']) ? $this->vars['L_IP_OR_HOSTNAME'] : $this->lang('L_IP_OR_HOSTNAME'); ?>: <br /><span class="gensmall"><?php echo isset($this->vars['L_BAN_IP_EXPLAIN']) ? $this->vars['L_BAN_IP_EXPLAIN'] : $this->lang('L_BAN_IP_EXPLAIN'); ?></span></td>
      <td class="row2"><input type="text" name="ban_ip" size="35" /></td>
    </tr>
    <tr> 
      <th class="thHead" colspan="2"><?php echo isset($this->vars['L_UNBAN_IP']) ? $this->vars['L_UNBAN_IP'] : $this->lang('L_UNBAN_IP'); ?></th>
    </tr>
    <tr> 
      <td class="row1"><?php echo isset($this->vars['L_IP_OR_HOSTNAME']) ? $this->vars['L_IP_OR_HOSTNAME'] : $this->lang('L_IP_OR_HOSTNAME'); ?>: <br /><span class="gensmall"><?php echo isset($this->vars['L_UNBAN_IP_EXPLAIN']) ? $this->vars['L_UNBAN_IP_EXPLAIN'] : $this->lang('L_UNBAN_IP_EXPLAIN'); ?></span></td>
      <td class="row2"><?php echo isset($this->vars['S_UNBAN_IPLIST_SELECT']) ? $this->vars['S_UNBAN_IPLIST_SELECT'] : $this->lang('S_UNBAN_IPLIST_SELECT'); ?></td>
    </tr>
    <tr> 
      <th class="thHead" colspan="2"><?php echo isset($this->vars['L_BAN_EMAIL']) ? $this->vars['L_BAN_EMAIL'] : $this->lang('L_BAN_EMAIL'); ?></th>
    </tr>
    <tr> 
      <td class="row1"><?php echo isset($this->vars['L_EMAIL_ADDRESS']) ? $this->vars['L_EMAIL_ADDRESS'] : $this->lang('L_EMAIL_ADDRESS'); ?>: <br /><span class="gensmall"><?php echo isset($this->vars['L_BAN_EMAIL_EXPLAIN']) ? $this->vars['L_BAN_EMAIL_EXPLAIN'] : $this->lang('L_BAN_EMAIL_EXPLAIN'); ?></span></td>
      <td class="row2"><input type="text" name="ban_email" size="35" /></td>
    </tr>
    <tr> 
      <th class="thHead" colspan="2"><?php echo isset($this->vars['L_UNBAN_EMAIL']) ? $this->vars['L_UNBAN_EMAIL'] : $this->lang('L_UNBAN_EMAIL'); ?></th>
    </tr>
    <tr> 
      <td class="row1"><?php echo isset($this->vars['L_EMAIL_ADDRESS']) ? $this->vars['L_EMAIL_ADDRESS'] : $this->lang('L_EMAIL_ADDRESS'); ?>: <br /><span class="gensmall"><?php echo isset($this->vars['L_UNBAN_EMAIL_EXPLAIN']) ? $this->vars['L_UNBAN_EMAIL_EXPLAIN'] : $this->lang('L_UNBAN_EMAIL_EXPLAIN'); ?></span></td>
      <td class="row2"><?php echo isset($this->vars['S_UNBAN_EMAILLIST_SELECT']) ? $this->vars['S_UNBAN_EMAILLIST_SELECT'] : $this->lang('S_UNBAN_EMAILLIST_SELECT'); ?></td>
    </tr>
    <tr> 
      <td class="catBottom" colspan="2" align="center"><input type="submit" name="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" class="mainoption" />&nbsp;&nbsp;<input type="reset" value="<?php echo isset($this->vars['L_RESET']) ? $this->vars['L_RESET'] : $this->lang('L_RESET'); ?>" class="liteoption" /></td>
    </tr>
</table></form>

<p><?php echo isset($this->vars['L_BAN_EXPLAIN_WARN']) ? $this->vars['L_BAN_EXPLAIN_WARN'] : $this->lang('L_BAN_EXPLAIN_WARN'); ?></p>