<?php

// eXtreme Styles mod cache. Generated on Wed, 12 May 2021 23:52:12 +0000 (time=1620863532)

?>
<h1><?php echo isset($this->vars['L_TITLE']) ? $this->vars['L_TITLE'] : $this->lang('L_TITLE'); ?></h1>

<p><?php echo isset($this->vars['L_TITLE_EXPLAIN']) ? $this->vars['L_TITLE_EXPLAIN'] : $this->lang('L_TITLE_EXPLAIN'); ?></p>

<form action="<?php echo isset($this->vars['S_ACTION']) ? $this->vars['S_ACTION'] : $this->lang('S_ACTION'); ?>" method="post">
<table width="100%" cellpadding="2" cellspacing="0">
<tr>
	<td><span class="nav"><a href="<?php echo isset($this->vars['S_ACTION']) ? $this->vars['S_ACTION'] : $this->lang('S_ACTION'); ?>" class="nav"><?php echo isset($this->vars['L_TITLE']) ? $this->vars['L_TITLE'] : $this->lang('L_TITLE'); ?></a></span></td>
</tr>
</table>

<table width="100%" cellpadding="4" cellspacing="1" border="0" class="forumline">
<tr>
	<th align="center" colspan="2"><?php echo isset($this->vars['L_TITLE']) ? $this->vars['L_TITLE'] : $this->lang('L_TITLE'); ?></th>
</tr>
<tr>
	<td class="row1" width="50%"><span class="gen"><?php echo isset($this->vars['L_LANG']) ? $this->vars['L_LANG'] : $this->lang('L_LANG'); ?></span><br /><span class="gensmall"><?php echo isset($this->vars['L_LANG_EXPLAIN']) ? $this->vars['L_LANG_EXPLAIN'] : $this->lang('L_LANG_EXPLAIN'); ?></span></td>
	<td class="row2">
		&nbsp;<?php echo isset($this->vars['S_LANGS']) ? $this->vars['S_LANGS'] : $this->lang('S_LANGS'); ?><br />
		&nbsp;<input name="icon_title" class="post" type="text" size="40" maxlength="255" value="<?php echo isset($this->vars['ICON_TITLE_KEY']) ? $this->vars['ICON_TITLE_KEY'] : $this->lang('ICON_TITLE_KEY'); ?>" />
		&nbsp;<span class="gensmall"><?php echo isset($this->vars['ICON_TITLE']) ? $this->vars['ICON_TITLE'] : $this->lang('ICON_TITLE'); ?></span>
	</td>
</tr>
<tr>
	<td class="row1"><span class="gen"><?php echo isset($this->vars['L_ICON']) ? $this->vars['L_ICON'] : $this->lang('L_ICON'); ?></span><br /><span class="gensmall"><?php echo isset($this->vars['L_ICON_EXPLAIN']) ? $this->vars['L_ICON_EXPLAIN'] : $this->lang('L_ICON_EXPLAIN'); ?></span></td>
	<td class="row2">
		<table width="100%" cellpadding="2" cellspacing="1" border="0" />
		<tr>
			<td><span class="gensmall"><?php echo isset($this->vars['ICON']) ? $this->vars['ICON'] : $this->lang('ICON'); ?></span></td>
			<td width="100%">
				&nbsp;<?php echo isset($this->vars['S_ICONS']) ? $this->vars['S_ICONS'] : $this->lang('S_ICONS'); ?><br />
				&nbsp;<input name="icon_url" class="post" type="text" size="40" maxlength="255" value="<?php echo isset($this->vars['ICON_URL']) ? $this->vars['ICON_URL'] : $this->lang('ICON_URL'); ?>" />
			</td>
		</tr>
		</table>
	</td>
</tr>
<tr>
	<td class="row1"><span class="gen"><?php echo isset($this->vars['L_AUTH']) ? $this->vars['L_AUTH'] : $this->lang('L_AUTH'); ?></span><br /><span class="gensmall"><?php echo isset($this->vars['L_AUTH_EXPLAIN']) ? $this->vars['L_AUTH_EXPLAIN'] : $this->lang('L_AUTH_EXPLAIN'); ?></span></td>
	<td class="row2">&nbsp;<?php echo isset($this->vars['S_AUTHS']) ? $this->vars['S_AUTHS'] : $this->lang('S_AUTHS'); ?></td>
</tr>
<tr>
	<td class="row1"><span class="gen"><?php echo isset($this->vars['L_DEFAULT']) ? $this->vars['L_DEFAULT'] : $this->lang('L_DEFAULT'); ?></span><br /><span class="gensmall"><?php echo isset($this->vars['L_DEFAULT_EXPLAIN']) ? $this->vars['L_DEFAULT_EXPLAIN'] : $this->lang('L_DEFAULT_EXPLAIN'); ?></span></td>
	<td class="row2">
		<table width="100%" cellpadding="2" cellspacing="0" border="0">
		<?php

$defaults_count = ( isset($this->_tpldata['defaults.']) ) ?  sizeof($this->_tpldata['defaults.']) : 0;
for ($defaults_i = 0; $defaults_i < $defaults_count; $defaults_i++)
{
 $defaults_item = &$this->_tpldata['defaults.'][$defaults_i];
 $defaults_item['S_ROW_COUNT'] = $defaults_i;
 $defaults_item['S_NUM_ROWS'] = $defaults_count;

?>
		<tr>
			<td><input name="ids[]" type="checkbox" value="<?php echo isset($defaults_item['ID']) ? $defaults_item['ID'] : ''; ?>"<?php echo isset($defaults_item['CHECKED']) ? $defaults_item['CHECKED'] : ''; ?> /></td>
			<td width="100%" nowrap="nowrap"><span class="gen"><?php echo isset($defaults_item['NAME']) ? $defaults_item['NAME'] : ''; ?></span></td>
		</tr>
		<?php

} // END defaults

if(isset($defaults_item)) { unset($defaults_item); } 

?>
		</table>
	</td>
</tr>
<tr>
	<td class="catBottom" colspan="2" align="center"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?>
		<input type="submit" name="submit" class="mainoption" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" />&nbsp;
		<input type="submit" name="refresh" class="liteoption" value="<?php echo isset($this->vars['L_REFRESH']) ? $this->vars['L_REFRESH'] : $this->lang('L_REFRESH'); ?>" />&nbsp;
		<input type="submit" name="cancel" class="liteoption" value="<?php echo isset($this->vars['L_CANCEL']) ? $this->vars['L_CANCEL'] : $this->lang('L_CANCEL'); ?>" />
	</td>
</tr>
</table>
</form>