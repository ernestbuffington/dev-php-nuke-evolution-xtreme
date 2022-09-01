<?php

// eXtreme Styles mod cache. Generated on Fri, 30 Apr 2021 07:53:49 +0000 (time=1619769229)

?><table cellpadding="4" cellspacing="1" border="0" class="forumline" style="width: 99%;">
  <tr <?php echo isset($this->vars['DHTML_HAND']) ? $this->vars['DHTML_HAND'] : $this->lang('DHTML_HAND'); ?> <?php echo isset($this->vars['DHTML_ONCLICK']) ? $this->vars['DHTML_ONCLICK'] : $this->lang('DHTML_ONCLICK'); ?>"show(<?php echo isset($this->vars['DHTML_ID']) ? $this->vars['DHTML_ID'] : $this->lang('DHTML_ID'); ?>)">
    <td class="catHead menu" colspan="2" style="height: 35px; font-weight: bold; text-align: center; text-transform: uppercase;"><?php echo isset($this->vars['L_EMAIL_SETTINGS']) ? $this->vars['L_EMAIL_SETTINGS'] : $this->lang('L_EMAIL_SETTINGS'); ?></td>
  </tr>
</table>

<span id="<?php echo isset($this->vars['DHTML_ID']) ? $this->vars['DHTML_ID'] : $this->lang('DHTML_ID'); ?>" <?php echo isset($this->vars['DHTML_DISPLAY']) ? $this->vars['DHTML_DISPLAY'] : $this->lang('DHTML_DISPLAY'); ?>>
<table cellpadding="4" cellspacing="1" border="0" class="forumline" style="width: 99%;">
  <tr>
    <td class="row1" style="height: 35px; width: 50%;"><?php echo isset($this->vars['L_ADMIN_EMAIL']) ? $this->vars['L_ADMIN_EMAIL'] : $this->lang('L_ADMIN_EMAIL'); ?></td>
    <td class="row2" style="height: 35px; width: 50%;"><input class="post" type="text" size="25" maxlength="100" name="board_email" value="<?php echo isset($this->vars['EMAIL_FROM']) ? $this->vars['EMAIL_FROM'] : $this->lang('EMAIL_FROM'); ?>" /></td>
  </tr>

  <tr>
    <td class="row1" style="height: 35px; width: 50%;">
      <span style="display: inline-block; float: left; margin-top: 2px;"><?php echo isset($this->vars['L_EMAIL_SIG']) ? $this->vars['L_EMAIL_SIG'] : $this->lang('L_EMAIL_SIG'); ?></span>
      <span class="evo-sprite help tooltip float-right" title="<?php echo isset($this->vars['L_EMAIL_SIG_EXPLAIN']) ? $this->vars['L_EMAIL_SIG_EXPLAIN'] : $this->lang('L_EMAIL_SIG_EXPLAIN'); ?>"></span>
    </td>
    <td class="row2" style="height: 35px; width: 50%;"><textarea name="board_email_sig" rows="5" cols="30"><?php echo isset($this->vars['EMAIL_SIG']) ? $this->vars['EMAIL_SIG'] : $this->lang('EMAIL_SIG'); ?></textarea></td>
  </tr>

  <tr>
    <td class="catHead center" colspan="2" style="height: 35px;">SMTP Options</td>
  </tr>

  <tr>
    <td class="row1" style="height: 35px; width: 50%;">
      <span style="display: inline-block; float: left; margin-top: 2px;"><?php echo isset($this->vars['L_USE_SMTP']) ? $this->vars['L_USE_SMTP'] : $this->lang('L_USE_SMTP'); ?></span>
      <span class="evo-sprite help tooltip float-right" title="<?php echo isset($this->vars['L_USE_SMTP_EXPLAIN']) ? $this->vars['L_USE_SMTP_EXPLAIN'] : $this->lang('L_USE_SMTP_EXPLAIN'); ?>"></span>
    </td>
    <td class="row2" style="height: 35px; width: 50%;">
      <input type="radio" name="smtp_delivery" value="1" <?php echo isset($this->vars['SMTP_YES']) ? $this->vars['SMTP_YES'] : $this->lang('SMTP_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?> |
      <input type="radio" name="smtp_delivery" value="0" <?php echo isset($this->vars['SMTP_NO']) ? $this->vars['SMTP_NO'] : $this->lang('SMTP_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?>
    </td>
  </tr>

  <tr>
    <td class="row1" style="height: 35px; width: 50%;"><?php echo isset($this->vars['L_SMTP_HOST']) ? $this->vars['L_SMTP_HOST'] : $this->lang('L_SMTP_HOST'); ?></td>
    <td class="row2" style="height: 35px; width: 50%;"><input class="post" type="text" name="smtp_host" value="<?php echo isset($this->vars['SMTP_HOST']) ? $this->vars['SMTP_HOST'] : $this->lang('SMTP_HOST'); ?>" size="25" maxlength="50" /></td>
  </tr>

  <tr>
    <td class="row1" style="height: 35px; width: 50%;">
      <span style="display: inline-block; float: left; margin-top: 2px;"><?php echo isset($this->vars['L_SMTP_ENCRYPTION']) ? $this->vars['L_SMTP_ENCRYPTION'] : $this->lang('L_SMTP_ENCRYPTION'); ?></span>
      <span class="evo-sprite help tooltip-html float-right" title="<?php echo isset($this->vars['L_SMTP_ENCRYPTION_EXPLAIN']) ? $this->vars['L_SMTP_ENCRYPTION_EXPLAIN'] : $this->lang('L_SMTP_ENCRYPTION_EXPLAIN'); ?>"></span
    </td>
    <td class="row2" style="height: 35px; width: 50%;">
      <input type="radio" class="smtp_encryption" id="none" name="smtp_encryption" value="none" <?php echo isset($this->vars['SMTP_ENCRYPT_NONE']) ? $this->vars['SMTP_ENCRYPT_NONE'] : $this->lang('SMTP_ENCRYPT_NONE'); ?> />&nbsp;<label for="none">None</label> |
      <input type="radio" class="smtp_encryption" id="ssl" name="smtp_encryption" value="ssl" <?php echo isset($this->vars['SMTP_ENCRYPT_SSL']) ? $this->vars['SMTP_ENCRYPT_SSL'] : $this->lang('SMTP_ENCRYPT_SSL'); ?> />&nbsp;<label for="ssl">SSL</label> |
      <input type="radio" class="smtp_encryption" id="tls" name="smtp_encryption" value="tls" <?php echo isset($this->vars['SMTP_ENCRYPT_TLS']) ? $this->vars['SMTP_ENCRYPT_TLS'] : $this->lang('SMTP_ENCRYPT_TLS'); ?> />&nbsp;<label for="tls">TLS</label>
    </td>
  </tr>

  <tr>
    <td class="row1" style="height: 35px; width: 50%;"><?php echo isset($this->vars['L_SMTP_PORT']) ? $this->vars['L_SMTP_PORT'] : $this->lang('L_SMTP_PORT'); ?></td>
    <td class="row2" style="height: 35px; width: 50%;"><input class="post" type="number" id="smtp_port" name="smtp_port" value="<?php echo isset($this->vars['SMTP_PORT']) ? $this->vars['SMTP_PORT'] : $this->lang('SMTP_PORT'); ?>" /></td>
  </tr>

  <tr>
    <td class="row1" style="height: 35px; width: 50%;"><?php echo isset($this->vars['L_SMTP_AUTHENTICATION']) ? $this->vars['L_SMTP_AUTHENTICATION'] : $this->lang('L_SMTP_AUTHENTICATION'); ?></td>
    <td class="row2" style="height: 35px; width: 50%;">
      <input type="radio" id="off" name="smtp_auth" value="0" <?php echo isset($this->vars['SMTP_AUTH_NO']) ? $this->vars['SMTP_AUTH_NO'] : $this->lang('SMTP_AUTH_NO'); ?> />&nbsp;<label for="off">Off</label> |
      <input type="radio" id="on" name="smtp_auth" value="1" <?php echo isset($this->vars['SMTP_AUTH_YES']) ? $this->vars['SMTP_AUTH_YES'] : $this->lang('SMTP_AUTH_YES'); ?> />&nbsp;<label for="on">On</label>
    </td>
  </tr>

  <tr class="smtp_auth_settings"<?php echo isset($this->vars['SMTP_AUTH_VIEW']) ? $this->vars['SMTP_AUTH_VIEW'] : $this->lang('SMTP_AUTH_VIEW'); ?>>
    <td class="row1" style="height: 35px; width: 50%;">
      <span style="display: inline-block; float: left; margin-top: 2px;"><?php echo isset($this->vars['L_SMTP_USERNAME']) ? $this->vars['L_SMTP_USERNAME'] : $this->lang('L_SMTP_USERNAME'); ?></span>
      <span class="evo-sprite help tooltip float-right" title="<?php echo isset($this->vars['L_SMTP_USERNAME_EXPLAIN']) ? $this->vars['L_SMTP_USERNAME_EXPLAIN'] : $this->lang('L_SMTP_USERNAME_EXPLAIN'); ?>"></span>
    </td>
    <td class="row2" style="height: 35px; width: 50%;"><input class="post" type="text" name="smtp_username" value="<?php echo isset($this->vars['SMTP_USERNAME']) ? $this->vars['SMTP_USERNAME'] : $this->lang('SMTP_USERNAME'); ?>" size="25" maxlength="255" /></td>
  </tr>

  <tr class="smtp_auth_settings"<?php echo isset($this->vars['SMTP_AUTH_VIEW']) ? $this->vars['SMTP_AUTH_VIEW'] : $this->lang('SMTP_AUTH_VIEW'); ?>>
    <td class="row1" style="height: 35px; width: 50%;">
      <span style="display: inline-block; float: left; margin-top: 2px;"><?php echo isset($this->vars['L_SMTP_PASSWORD']) ? $this->vars['L_SMTP_PASSWORD'] : $this->lang('L_SMTP_PASSWORD'); ?></span>
      <span class="evo-sprite help tooltip-interact float-right" title="<?php echo isset($this->vars['L_SMTP_PASSWORD_EXPLAIN']) ? $this->vars['L_SMTP_PASSWORD_EXPLAIN'] : $this->lang('L_SMTP_PASSWORD_EXPLAIN'); ?>"></span>
    </td>
    <td class="row2" style="height: 35px; width: 50%;"><input class="post" type="password" name="smtp_password" value="<?php echo isset($this->vars['SMTP_PASSWORD']) ? $this->vars['SMTP_PASSWORD'] : $this->lang('SMTP_PASSWORD'); ?>" size="25" maxlength="255" /></td>
  </tr>
</table>
</span>