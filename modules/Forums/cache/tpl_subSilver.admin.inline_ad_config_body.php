<?php

// eXtreme Styles mod cache. Generated on Wed, 12 May 2021 22:56:35 +0000 (time=1620860195)

?><h1><?php echo isset($this->vars['L_CONFIGURATION_TITLE']) ? $this->vars['L_CONFIGURATION_TITLE'] : $this->lang('L_CONFIGURATION_TITLE'); ?></h1>

<form action="<?php echo isset($this->vars['S_CONFIG_ACTION']) ? $this->vars['S_CONFIG_ACTION'] : $this->lang('S_CONFIG_ACTION'); ?>" method="post"><table width="99%" cellpadding="4" cellspacing="1" border="0" align="center" class="forumline">
  <tr>
    <th class="thHead" colspan="2"><?php echo isset($this->vars['L_CONFIGURATION_TITLE']) ? $this->vars['L_CONFIGURATION_TITLE'] : $this->lang('L_CONFIGURATION_TITLE'); ?></th>
  </tr>
  <tr>
    <td class="row1"><?php echo isset($this->vars['L_AD_AFTER_POST']) ? $this->vars['L_AD_AFTER_POST'] : $this->lang('L_AD_AFTER_POST'); ?></td>
    <td class="row2"><input class="post" type="text" maxlength="3" size="5" name="ad_after_post" value="<?php echo isset($this->vars['AD_AFTER_POST']) ? $this->vars['AD_AFTER_POST'] : $this->lang('AD_AFTER_POST'); ?>" /></td>
  </tr>
  <tr>
    <td class="row1"><?php echo isset($this->vars['L_AD_EVERY_POST']) ? $this->vars['L_AD_EVERY_POST'] : $this->lang('L_AD_EVERY_POST'); ?></td>
    <td class="row2"><input class="post" type="text" maxlength="3" size="5" name="ad_every_post" value="<?php echo isset($this->vars['AD_EVERY_POST']) ? $this->vars['AD_EVERY_POST'] : $this->lang('AD_EVERY_POST'); ?>" /></td>
  </tr>
  <tr>
    <td class="row1"><?php echo isset($this->vars['L_AD_STYLE']) ? $this->vars['L_AD_STYLE'] : $this->lang('L_AD_STYLE'); ?></td>
    <td class="row2"><input type="radio" name="ad_old_style" value="0" <?php echo isset($this->vars['AD_NEW_STYLE']) ? $this->vars['AD_NEW_STYLE'] : $this->lang('AD_NEW_STYLE'); ?> /><?php echo isset($this->vars['L_AD_NEW_STYLE']) ? $this->vars['L_AD_NEW_STYLE'] : $this->lang('L_AD_NEW_STYLE'); ?><input type="radio" name="ad_old_style" value="1" <?php echo isset($this->vars['AD_OLD_STYLE']) ? $this->vars['AD_OLD_STYLE'] : $this->lang('AD_OLD_STYLE'); ?> /><?php echo isset($this->vars['L_AD_OLD_STYLE']) ? $this->vars['L_AD_OLD_STYLE'] : $this->lang('L_AD_OLD_STYLE'); ?></td>
  </tr>
  <tr>
    <td class="row1"><?php echo isset($this->vars['L_AD_DISPLAY']) ? $this->vars['L_AD_DISPLAY'] : $this->lang('L_AD_DISPLAY'); ?></td>
    <td class="row2"><input type="radio" name="ad_who" value="1" <?php echo isset($this->vars['AD_ALL']) ? $this->vars['AD_ALL'] : $this->lang('AD_ALL'); ?> /><?php echo isset($this->vars['L_AD_ALL']) ? $this->vars['L_AD_ALL'] : $this->lang('L_AD_ALL'); ?><input type="radio" name="ad_who" value="0" <?php echo isset($this->vars['AD_REG']) ? $this->vars['AD_REG'] : $this->lang('AD_REG'); ?> /><?php echo isset($this->vars['L_AD_REG']) ? $this->vars['L_AD_REG'] : $this->lang('L_AD_REG'); ?><input type="radio" name="ad_who" value="-1" <?php echo isset($this->vars['AD_GUEST']) ? $this->vars['AD_GUEST'] : $this->lang('AD_GUEST'); ?> /><?php echo isset($this->vars['L_AD_GUEST']) ? $this->vars['L_AD_GUEST'] : $this->lang('L_AD_GUEST'); ?></td>
  </tr>
  <tr>
    <td class="row1"><?php echo isset($this->vars['L_AD_EXCLUDE']) ? $this->vars['L_AD_EXCLUDE'] : $this->lang('L_AD_EXCLUDE'); ?></td>
    <td class="row2"><select name="ad_no_groups[]" size="5" multiple="multiple"> <?php echo isset($this->vars['AD_NO_GROUPS']) ? $this->vars['AD_NO_GROUPS'] : $this->lang('AD_NO_GROUPS'); ?> </select></td>
  </tr>
  <tr>
    <td class="row1"><?php echo isset($this->vars['L_AD_FORUMS']) ? $this->vars['L_AD_FORUMS'] : $this->lang('L_AD_FORUMS'); ?></td>
    <td class="row2"><select name="ad_no_forums[]" size="5" multiple="multiple"> <?php echo isset($this->vars['AD_FORUMS']) ? $this->vars['AD_FORUMS'] : $this->lang('AD_FORUMS'); ?> </select></td>
  </tr>
  <tr>
    <td class="row1"><?php echo isset($this->vars['L_AD_POST_THRESHOLD']) ? $this->vars['L_AD_POST_THRESHOLD'] : $this->lang('L_AD_POST_THRESHOLD'); ?></td>
    <td class="row2"><input class="post" type="text" maxlength="5" size="8" name="ad_post_threshold" value="<?php echo isset($this->vars['AD_POST_THRESHOLD']) ? $this->vars['AD_POST_THRESHOLD'] : $this->lang('AD_POST_THRESHOLD'); ?>" /></td>
  </tr>
  <tr>
    <td class="catBottom" align="center" colspan="2"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?><input type="submit" name="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" class="mainoption" />&nbsp;&nbsp;<input type="reset" value="<?php echo isset($this->vars['L_RESET']) ? $this->vars['L_RESET'] : $this->lang('L_RESET'); ?>" class="liteoption" />
    </td>
  </tr>

</table></form>

<br clear="all" />