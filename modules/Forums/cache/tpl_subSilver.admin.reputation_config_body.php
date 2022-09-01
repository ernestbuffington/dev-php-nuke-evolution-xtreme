<?php

// eXtreme Styles mod cache. Generated on Sat, 01 May 2021 23:47:56 +0000 (time=1619912876)

?><h1><?php echo isset($this->vars['L_REPUTATION_CONFIG_TITLE']) ? $this->vars['L_REPUTATION_CONFIG_TITLE'] : $this->lang('L_REPUTATION_CONFIG_TITLE'); ?></h1>

<p><?php echo isset($this->vars['L_REPUTATION_CONFIG_EXPLAIN']) ? $this->vars['L_REPUTATION_CONFIG_EXPLAIN'] : $this->lang('L_REPUTATION_CONFIG_EXPLAIN'); ?></p>

<form action="<?php echo isset($this->vars['S_CONFIG_ACTION']) ? $this->vars['S_CONFIG_ACTION'] : $this->lang('S_CONFIG_ACTION'); ?>" method="post"><table width="99%" cellpadding="4" cellspacing="1" border="0" align="center" class="forumline">
  <tr>
    <th class="thHead" colspan="2"><?php echo isset($this->vars['L_REPUTATION_CONFIG_TITLE']) ? $this->vars['L_REPUTATION_CONFIG_TITLE'] : $this->lang('L_REPUTATION_CONFIG_TITLE'); ?></th>
  </tr>
  <tr>
    <td width="100" class="row1" title="$rep_config['rep_disable']"><?php echo isset($this->vars['L_DISABLE_REP_SYSTEM']) ? $this->vars['L_DISABLE_REP_SYSTEM'] : $this->lang('L_DISABLE_REP_SYSTEM'); ?></td>
    <td class="row2" title="$rep_config['rep_disable']"><input type="radio" name="rep_disable" value="1" <?php echo isset($this->vars['S_DISABLE_REP_SYSTEM_YES']) ? $this->vars['S_DISABLE_REP_SYSTEM_YES'] : $this->lang('S_DISABLE_REP_SYSTEM_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" name="rep_disable" value="0" <?php echo isset($this->vars['S_DISABLE_REP_SYSTEM_NO']) ? $this->vars['S_DISABLE_REP_SYSTEM_NO'] : $this->lang('S_DISABLE_REP_SYSTEM_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
  </tr>
  <tr>
    <td class="row1" title="$rep_config['graphic_version']"><?php echo isset($this->vars['L_GRAPHIC_VERSION']) ? $this->vars['L_GRAPHIC_VERSION'] : $this->lang('L_GRAPHIC_VERSION'); ?></td>
    <td class="row2" title="$rep_config['graphic_version']"><input type="radio" name="graphic_version" value="1" <?php echo isset($this->vars['S_GRAPHIC_VERSION_YES']) ? $this->vars['S_GRAPHIC_VERSION_YES'] : $this->lang('S_GRAPHIC_VERSION_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" name="graphic_version" value="0" <?php echo isset($this->vars['S_GRAPHIC_VERSION_NO']) ? $this->vars['S_GRAPHIC_VERSION_NO'] : $this->lang('S_GRAPHIC_VERSION_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
  </tr>
  <tr>
    <td class="row1" title="$rep_config['show_stats_to_mods']"><?php echo isset($this->vars['L_SHOW_STATS_TO_MODS']) ? $this->vars['L_SHOW_STATS_TO_MODS'] : $this->lang('L_SHOW_STATS_TO_MODS'); ?><br /></td>
    <td class="row2" title="$rep_config['show_stats_to_mods']"><input type="radio" name="show_stats_to_mods" value="1" <?php echo isset($this->vars['S_SHOW_STATS_TO_MODS_YES']) ? $this->vars['S_SHOW_STATS_TO_MODS_YES'] : $this->lang('S_SHOW_STATS_TO_MODS_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" name="show_stats_to_mods" value="0" <?php echo isset($this->vars['S_SHOW_STATS_TO_MODS_NO']) ? $this->vars['S_SHOW_STATS_TO_MODS_NO'] : $this->lang('S_SHOW_STATS_TO_MODS_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
  </tr>
  <tr>
    <td class="row1" title="$rep_config['pm_notify']"><?php echo isset($this->vars['L_PM_NOTIFY']) ? $this->vars['L_PM_NOTIFY'] : $this->lang('L_PM_NOTIFY'); ?><br /></td>
    <td class="row2" title="$rep_config['pm_notify']"><input type="radio" name="pm_notify" value="1" <?php echo isset($this->vars['S_PM_NOTIFY_YES']) ? $this->vars['S_PM_NOTIFY_YES'] : $this->lang('S_PM_NOTIFY_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" name="pm_notify" value="0" <?php echo isset($this->vars['S_PM_NOTIFY_NO']) ? $this->vars['S_PM_NOTIFY_NO'] : $this->lang('S_PM_NOTIFY_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
  </tr>
  <tr>
    <td valign="middle" class="row1" title="$rep_config['default_amount']"><?php echo isset($this->vars['L_DEFAULT_AMOUNT']) ? $this->vars['L_DEFAULT_AMOUNT'] : $this->lang('L_DEFAULT_AMOUNT'); ?><br /></td>
    <td class="row2" title="$rep_config['default_amount']"><input class="post" type="text" maxlength="255" size="5" name="default_amount" value="<?php echo isset($this->vars['DEFAULT_AMOUNT']) ? $this->vars['DEFAULT_AMOUNT'] : $this->lang('DEFAULT_AMOUNT'); ?>" /></td>
  </tr>
  <tr>
    <td class="row1" title="$rep_config['posts_to_earn']"><?php echo isset($this->vars['L_POSTS_TO_EARN']) ? $this->vars['L_POSTS_TO_EARN'] : $this->lang('L_POSTS_TO_EARN'); ?><br /></td>
    <td class="row2" title="$rep_config['posts_to_earn']"><input class="post" type="text" maxlength="255" size="5" name="posts_to_earn" value="<?php echo isset($this->vars['POSTS_TO_EARN']) ? $this->vars['POSTS_TO_EARN'] : $this->lang('POSTS_TO_EARN'); ?>" /></td>
  </tr>
  <tr>
    <td class="row1" title="$rep_config['days_to_earn']"><?php echo isset($this->vars['L_DAYS_TO_EARN']) ? $this->vars['L_DAYS_TO_EARN'] : $this->lang('L_DAYS_TO_EARN'); ?><br /></td>
    <td class="row2" title="$rep_config['days_to_earn']"><input class="post" type="text" maxlength="255" size="5" name="days_to_earn" value="<?php echo isset($this->vars['DAYS_TO_EARN']) ? $this->vars['DAYS_TO_EARN'] : $this->lang('DAYS_TO_EARN'); ?>" /></td>
  </tr>
  <tr>
    <td class="row1" title="$rep_config['flood_control_time']"><?php echo isset($this->vars['L_FLOOD_CONTROL_TIME']) ? $this->vars['L_FLOOD_CONTROL_TIME'] : $this->lang('L_FLOOD_CONTROL_TIME'); ?><br /></td>
    <td class="row2" title="$rep_config['flood_control_time']"><input class="post" type="text" maxlength="255" size="5" name="flood_control_time" value="<?php echo isset($this->vars['FLOOD_CONTROL_TIME']) ? $this->vars['FLOOD_CONTROL_TIME'] : $this->lang('FLOOD_CONTROL_TIME'); ?>" /></td>
  </tr>
  <tr>
    <td valign="middle" class="row1" title="$rep_config['medal1_to_earn']"><?php echo isset($this->vars['L_MEDAL1_TO_EARN']) ? $this->vars['L_MEDAL1_TO_EARN'] : $this->lang('L_MEDAL1_TO_EARN'); ?>&nbsp;&nbsp;&nbsp;<img src="../images/reputation_medal_size_1.gif" alt="" border="0" align="middle"><br /></td>
    <td class="row2" title="$rep_config['medal1_to_earn']"><input class="post" type="text" maxlength="255" size="5" name="medal1_to_earn" value="<?php echo isset($this->vars['MEDAL1_TO_EARN']) ? $this->vars['MEDAL1_TO_EARN'] : $this->lang('MEDAL1_TO_EARN'); ?>" /></td>
  </tr>
  <tr>
    <td valign="middle" class="row1" title="$rep_config['medal2_to_earn']"><?php echo isset($this->vars['L_MEDAL2_TO_EARN']) ? $this->vars['L_MEDAL2_TO_EARN'] : $this->lang('L_MEDAL2_TO_EARN'); ?>&nbsp;&nbsp;&nbsp;<img src="../images/reputation_medal_size_2.gif" alt="" border="0" align="middle"><br /></td>
    <td class="row2" title="$rep_config['medal2_to_earn']"><input class="post" type="text" maxlength="255" size="5" name="medal2_to_earn" value="<?php echo isset($this->vars['MEDAL2_TO_EARN']) ? $this->vars['MEDAL2_TO_EARN'] : $this->lang('MEDAL2_TO_EARN'); ?>" /></td>
  </tr>
  <tr>
    <td valign="middle" class="row1" title="$rep_config['medal3_to_earn']"><?php echo isset($this->vars['L_MEDAL3_TO_EARN']) ? $this->vars['L_MEDAL3_TO_EARN'] : $this->lang('L_MEDAL3_TO_EARN'); ?>&nbsp;&nbsp;&nbsp;<img src="../images/reputation_medal_size_3.gif" alt="" border="0" align="middle"><br /></td>
    <td class="row2" title="$rep_config['medal3_to_earn']"><input class="post" type="text" maxlength="255" size="5" name="medal3_to_earn" value="<?php echo isset($this->vars['MEDAL3_TO_EARN']) ? $this->vars['MEDAL3_TO_EARN'] : $this->lang('MEDAL3_TO_EARN'); ?>" /></td>
  </tr>
  <tr>
    <td valign="middle" class="row1" title="$rep_config['medal4_to_earn']"><?php echo isset($this->vars['L_MEDAL4_TO_EARN']) ? $this->vars['L_MEDAL4_TO_EARN'] : $this->lang('L_MEDAL4_TO_EARN'); ?>&nbsp;&nbsp;&nbsp;<img src="../images/reputation_medal_size_4.gif" alt="" border="0" align="middle"><br /></td>
    <td class="row2" title="$rep_config['medal4_to_earn']"><input class="post" type="text" maxlength="255" size="5" name="medal4_to_earn" value="<?php echo isset($this->vars['MEDAL4_TO_EARN']) ? $this->vars['MEDAL4_TO_EARN'] : $this->lang('MEDAL4_TO_EARN'); ?>" /> <img src="../images/spacer.gif" alt="" width="100" height="1" border="0"></td>
  </tr>
  <tr>
    <td valign="middle" class="row1" title="$rep_config['given_rep_to_earn']"><?php echo isset($this->vars['L_GIVEN_REP_TO_EARN']) ? $this->vars['L_GIVEN_REP_TO_EARN'] : $this->lang('L_GIVEN_REP_TO_EARN'); ?><br /></td>
    <td class="row2" title="$rep_config['given_rep_to_earn']"><input class="post" type="text" maxlength="255" size="5" name="given_rep_to_earn" value="<?php echo isset($this->vars['GIVEN_REP_TO_EARN']) ? $this->vars['GIVEN_REP_TO_EARN'] : $this->lang('GIVEN_REP_TO_EARN'); ?>" /></td>
  </tr>
  <tr>
    <td valign="middle" class="row1" title="$rep_config['repsum_limit']"><?php echo isset($this->vars['L_REPSUM_LIMIT']) ? $this->vars['L_REPSUM_LIMIT'] : $this->lang('L_REPSUM_LIMIT'); ?><br /></td>
    <td class="row2" title="$rep_config['repsum_limit']"><input class="post" type="text" maxlength="255" size="5" name="repsum_limit" value="<?php echo isset($this->vars['REPSUM_LIMIT']) ? $this->vars['REPSUM_LIMIT'] : $this->lang('REPSUM_LIMIT'); ?>" /></td>
  </tr>
  <tr>
    <td class="catBottom" colspan="2" align="center"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?><input type="submit" name="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" class="mainoption" />&nbsp;&nbsp;<input type="reset" value="<?php echo isset($this->vars['L_RESET']) ? $this->vars['L_RESET'] : $this->lang('L_RESET'); ?>" class="liteoption" />
    </td>
  </tr>
</table></form>

<br clear="all" />