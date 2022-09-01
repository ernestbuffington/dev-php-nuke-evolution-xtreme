<?php

// eXtreme Styles mod cache. Generated on Sat, 15 May 2021 02:50:04 +0000 (time=1621047004)

?><h1><?php echo isset($this->vars['L_CONFIG_TITLE']) ? $this->vars['L_CONFIG_TITLE'] : $this->lang('L_CONFIG_TITLE'); ?></h1>

<p><?php echo isset($this->vars['L_CONFIG_EXPLAIN']) ? $this->vars['L_CONFIG_EXPLAIN'] : $this->lang('L_CONFIG_EXPLAIN'); ?></p>

<?php echo isset($this->vars['ERROR_BOX']) ? $this->vars['ERROR_BOX'] : $this->lang('ERROR_BOX'); ?>

<table class="forumline" align="center" width="45%">
    <tr>
        <th class="thHead"><?php echo isset($this->vars['L_MESSAGES']) ? $this->vars['L_MESSAGES'] : $this->lang('L_MESSAGES'); ?></th>
    </tr>
    <tr>
        <td class="row3"><span class="gen"><?php echo isset($this->vars['MESSAGE']) ? $this->vars['MESSAGE'] : $this->lang('MESSAGE'); ?></td>
    </tr>
</table>
<form action="<?php echo isset($this->vars['S_ACTION']) ? $this->vars['S_ACTION'] : $this->lang('S_ACTION'); ?>" method="post">
<table width="99%" cellpadding="4" cellspacing="1" border="0" align="center" class="forumline">
    <tr>
      <th class="thHead" colspan="2"><?php echo isset($this->vars['L_CONFIGURATION']) ? $this->vars['L_CONFIGURATION'] : $this->lang('L_CONFIGURATION'); ?></th>
    </tr>
    <tr>
        <td class="row1"><span class="gen"><?php echo isset($this->vars['L_RETURN_LIMIT']) ? $this->vars['L_RETURN_LIMIT'] : $this->lang('L_RETURN_LIMIT'); ?></span><br /><span class="gensmall"><?php echo isset($this->vars['L_RETURN_LIMIT_EXPLAIN']) ? $this->vars['L_RETURN_LIMIT_EXPLAIN'] : $this->lang('L_RETURN_LIMIT_EXPLAIN'); ?></span></td>
        <td class="row2"><input type="text" size="10" maxlength="10" name="return_limit" value="<?php echo isset($this->vars['RETURN_LIMIT']) ? $this->vars['RETURN_LIMIT'] : $this->lang('RETURN_LIMIT'); ?>" /></td>
    </tr>
<!--    <tr>
      <th class="thHead" colspan="2">L_LANGUAGE_CONFIGURATION</th>
    </tr>-->
    <tr>
      <th class="thHead" colspan="2"><?php echo isset($this->vars['L_RESET_SETTINGS_TITLE']) ? $this->vars['L_RESET_SETTINGS_TITLE'] : $this->lang('L_RESET_SETTINGS_TITLE'); ?></th>
    </tr>
    <tr>
        <td class="row1"><span class="gen"><?php echo isset($this->vars['L_RESET_CACHE']) ? $this->vars['L_RESET_CACHE'] : $this->lang('L_RESET_CACHE'); ?></span><br /><span class="gensmall"><?php echo isset($this->vars['L_RESET_CACHE_EXPLAIN']) ? $this->vars['L_RESET_CACHE_EXPLAIN'] : $this->lang('L_RESET_CACHE_EXPLAIN'); ?></span></td>
        <td class="row2"><input type="checkbox" name="reset_cache" /></td>
    </tr>
    <tr>
        <td class="row1"><span class="gen"><?php echo isset($this->vars['L_RESET_VIEW_COUNT']) ? $this->vars['L_RESET_VIEW_COUNT'] : $this->lang('L_RESET_VIEW_COUNT'); ?></span><br /><span class="gensmall"><?php echo isset($this->vars['L_RESET_VIEW_COUNT_EXPLAIN']) ? $this->vars['L_RESET_VIEW_COUNT_EXPLAIN'] : $this->lang('L_RESET_VIEW_COUNT_EXPLAIN'); ?></span></td>
        <td class="row2"><input type="checkbox" name="reset_view_count" /></td>
    </tr>
    <tr>
        <td class="row1"><span class="gen"><?php echo isset($this->vars['L_RESET_INSTALL_DATE']) ? $this->vars['L_RESET_INSTALL_DATE'] : $this->lang('L_RESET_INSTALL_DATE'); ?></span><br /><span class="gensmall"><?php echo isset($this->vars['L_RESET_INSTALL_DATE_EXPLAIN']) ? $this->vars['L_RESET_INSTALL_DATE_EXPLAIN'] : $this->lang('L_RESET_INSTALL_DATE_EXPLAIN'); ?></span></td>
        <td class="row2"><input type="checkbox" name="reset_install_date" /></td>
    </tr>
    <tr>
        <td class="row1"><?php echo isset($this->vars['L_PURGE_MODULE_DIRECTORY']) ? $this->vars['L_PURGE_MODULE_DIRECTORY'] : $this->lang('L_PURGE_MODULE_DIRECTORY'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_PURGE_MODULE_DIRECTORY_EXPLAIN']) ? $this->vars['L_PURGE_MODULE_DIRECTORY_EXPLAIN'] : $this->lang('L_PURGE_MODULE_DIRECTORY_EXPLAIN'); ?></span></td>
        <td class="row2"><input type="checkbox" name="purge_module_directory" /></td>
    </tr>
    <tr>
        <td class="catBottom" colspan="2" align="center"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?><input type="submit" name="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" class="mainoption" />&nbsp;&nbsp;<input type="reset" value="<?php echo isset($this->vars['L_RESET']) ? $this->vars['L_RESET'] : $this->lang('L_RESET'); ?>" class="liteoption" /></td>
    </tr>
</table></form>

<br />
<div align="center"><span class="copyright"><?php echo isset($this->vars['VERSION_INFO']) ? $this->vars['VERSION_INFO'] : $this->lang('VERSION_INFO'); ?><br /><?php echo isset($this->vars['INSTALL_INFO']) ? $this->vars['INSTALL_INFO'] : $this->lang('INSTALL_INFO'); ?><br /><?php echo isset($this->vars['VIEWED_INFO']) ? $this->vars['VIEWED_INFO'] : $this->lang('VIEWED_INFO'); ?></span></div>

<br clear="all" />