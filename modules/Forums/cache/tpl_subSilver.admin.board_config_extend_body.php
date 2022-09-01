<?php

// eXtreme Styles mod cache. Generated on Sat, 01 May 2021 23:53:55 +0000 (time=1619913235)

?><h1><?php echo isset($this->vars['L_TITLE']) ? $this->vars['L_TITLE'] : $this->lang('L_TITLE'); ?></h1>

<p><?php echo isset($this->vars['L_TITLE_EXPLAIN']) ? $this->vars['L_TITLE_EXPLAIN'] : $this->lang('L_TITLE_EXPLAIN'); ?></p>


<form action="<?php echo isset($this->vars['S_ACTION']) ? $this->vars['S_ACTION'] : $this->lang('S_ACTION'); ?>" method="post">
<table width="100%" cellpadding="0" cellspacing="1" border="0" align="center" class="forumline">
<tr>
	<th colspan="2"><?php echo isset($this->vars['L_MOD_NAME']) ? $this->vars['L_MOD_NAME'] : $this->lang('L_MOD_NAME'); ?></th>
</tr>
<tr>
	<td valign="top" class="row3" width="250">
		<?php

$menu_count = ( isset($this->_tpldata['menu.']) ) ?  sizeof($this->_tpldata['menu.']) : 0;
for ($menu_i = 0; $menu_i < $menu_count; $menu_i++)
{
 $menu_item = &$this->_tpldata['menu.'][$menu_i];
 $menu_item['S_ROW_COUNT'] = $menu_i;
 $menu_item['S_NUM_ROWS'] = $menu_count;

?>
		<table cellpadding="0" cellspacing="1" border="0" class="bodyline" width="100%">
		<tr>
			<td class="row3" align="center">
				<?php

$title_open_count = ( isset($menu_item['title_open.']) ) ? sizeof($menu_item['title_open.']) : 0;
for ($title_open_i = 0; $title_open_i < $title_open_count; $title_open_i++)
{
 $title_open_item = &$menu_item['title_open.'][$title_open_i];
 $title_open_item['S_ROW_COUNT'] = $title_open_i;
 $title_open_item['S_NUM_ROWS'] = $title_open_count;

?>
				<table cellspacing="0" cellpadding="2" border="0" width="100%">
				<tr>
					<td class="cat" align="center"><a href="<?php echo isset($menu_item['U_MENU']) ? $menu_item['U_MENU'] : ''; ?>" class="cattitle"><?php echo isset($menu_item['L_MENU']) ? $menu_item['L_MENU'] : ''; ?></a></td>
				</tr>
				</table>
				<?php

} // END title_open

if(isset($title_open_item)) { unset($title_open_item); } 

?>
				<table cellpadding="10" cellspacing="1" border="0" class="bodyline" width="100%">
				<?php

$title_close_count = ( isset($menu_item['title_close.']) ) ? sizeof($menu_item['title_close.']) : 0;
for ($title_close_i = 0; $title_close_i < $title_close_count; $title_close_i++)
{
 $title_close_item = &$menu_item['title_close.'][$title_close_i];
 $title_close_item['S_ROW_COUNT'] = $title_close_i;
 $title_close_item['S_NUM_ROWS'] = $title_close_count;

?>
				<tr>
					<td class="<?php echo isset($menu_item['CLASS']) ? $menu_item['CLASS'] : ''; ?>" align="center"><a href="<?php echo isset($menu_item['U_MENU']) ? $menu_item['U_MENU'] : ''; ?>" class="gen"><?php echo isset($menu_item['L_MENU']) ? $menu_item['L_MENU'] : ''; ?></a></td>
				</tr>
				<?php

} // END title_close

if(isset($title_close_item)) { unset($title_close_item); } 

?>
				<?php

$mod_count = ( isset($menu_item['mod.']) ) ? sizeof($menu_item['mod.']) : 0;
for ($mod_i = 0; $mod_i < $mod_count; $mod_i++)
{
 $mod_item = &$menu_item['mod.'][$mod_i];
 $mod_item['S_ROW_COUNT'] = $mod_i;
 $mod_item['S_NUM_ROWS'] = $mod_count;

?>
				<tr>
					<td class="<?php echo isset($mod_item['CLASS']) ? $mod_item['CLASS'] : ''; ?>" align="<?php echo isset($mod_item['ALIGN']) ? $mod_item['ALIGN'] : ''; ?>" nowrap="nowrap" width="100%">
						<a href="<?php echo isset($mod_item['U_MOD']) ? $mod_item['U_MOD'] : ''; ?>" class="gen"><?php echo isset($mod_item['L_MOD']) ? $mod_item['L_MOD'] : ''; ?></a>
						<?php

$sub_count = ( isset($mod_item['sub.']) ) ? sizeof($mod_item['sub.']) : 0;
for ($sub_i = 0; $sub_i < $sub_count; $sub_i++)
{
 $sub_item = &$mod_item['sub.'][$sub_i];
 $sub_item['S_ROW_COUNT'] = $sub_i;
 $sub_item['S_NUM_ROWS'] = $sub_count;

?>
						<hr />
						<table cellpadding="2" cellspacing="1" border="0" align="left" width="100%">
							<?php

$row_count = ( isset($sub_item['row.']) ) ? sizeof($sub_item['row.']) : 0;
for ($row_i = 0; $row_i < $row_count; $row_i++)
{
 $row_item = &$sub_item['row.'][$row_i];
 $row_item['S_ROW_COUNT'] = $row_i;
 $row_item['S_NUM_ROWS'] = $row_count;

?>
							<tr>
								<td align="left" class="<?php echo isset($row_item['CLASS']) ? $row_item['CLASS'] : ''; ?>" nowrap="nowrap"><span class="genmed">&nbsp;&nbsp;&raquo;&nbsp;<a href="<?php echo isset($row_item['U_MOD']) ? $row_item['U_MOD'] : ''; ?>" class="genmed"><?php echo isset($row_item['L_MOD']) ? $row_item['L_MOD'] : ''; ?></a>&nbsp;&nbsp;</span></td>
							</tr>
							<?php

} // END row

if(isset($row_item)) { unset($row_item); } 

?>
						</table>
						<?php

} // END sub

if(isset($sub_item)) { unset($sub_item); } 

?>
					</td>
				</tr>
				<?php

} // END mod

if(isset($mod_item)) { unset($mod_item); } 

?>
				</table>
			</td>
		</tr>
		</table>
		<?php

} // END menu

if(isset($menu_item)) { unset($menu_item); } 

?>
	</td>
	<td valign="top" class="row3">
		<table cellpadding="5" cellspacing="1" border="0" width="100%" class="bodyline">
		<?php

$field_count = ( isset($this->_tpldata['field.']) ) ?  sizeof($this->_tpldata['field.']) : 0;
for ($field_i = 0; $field_i < $field_count; $field_i++)
{
 $field_item = &$this->_tpldata['field.'][$field_i];
 $field_item['S_ROW_COUNT'] = $field_i;
 $field_item['S_NUM_ROWS'] = $field_count;

?>
		<tr>
			<td class="row1" width="50%"><span class="gen"><?php echo isset($field_item['L_NAME']) ? $field_item['L_NAME'] : ''; ?></span><span class="gensmall"><?php echo isset($field_item['L_EXPLAIN']) ? $field_item['L_EXPLAIN'] : ''; ?></span></td>
			<td class="row2" width="50%" nowrap="nowrap"><span class="gen"><?php echo isset($field_item['INPUT']) ? $field_item['INPUT'] : ''; ?></span><span class="gensmall"><?php echo isset($field_item['OVERRIDE']) ? $field_item['OVERRIDE'] : ''; ?></span></td>
		</tr>
		<?php

} // END field

if(isset($field_item)) { unset($field_item); } 

?>
		</table>
	</td>
</tr>
<tr>
	<td class="catBottom" colspan="2" align="center"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?>
		<input type="submit" name="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" class="mainoption" />&nbsp;&nbsp;
		<input type="reset" value="<?php echo isset($this->vars['L_RESET']) ? $this->vars['L_RESET'] : $this->lang('L_RESET'); ?>" class="liteoption" />
	</td>
</tr>
</table></form>