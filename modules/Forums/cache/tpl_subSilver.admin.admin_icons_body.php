<?php

// eXtreme Styles mod cache. Generated on Wed, 12 May 2021 23:51:50 +0000 (time=1620863510)

?><h1><?php echo isset($this->vars['L_TITLE']) ? $this->vars['L_TITLE'] : $this->lang('L_TITLE'); ?></h1>
<p><?php echo isset($this->vars['L_TITLE_EXPLAIN']) ? $this->vars['L_TITLE_EXPLAIN'] : $this->lang('L_TITLE_EXPLAIN'); ?></p>

<form action="<?php echo isset($this->vars['S_ACTION']) ? $this->vars['S_ACTION'] : $this->lang('S_ACTION'); ?>" method="post">
<table width="100%" cellpadding="2" cellspacing="0">
  <tr>
	<td><span class="nav"><a href="<?php echo isset($this->vars['S_ACTION']) ? $this->vars['S_ACTION'] : $this->lang('S_ACTION'); ?>" class="nav"><?php echo isset($this->vars['L_TITLE']) ? $this->vars['L_TITLE'] : $this->lang('L_TITLE'); ?></a></span></td>
  </tr>
</table>

<table width="100%" cellpadding="4" cellspacing="1" border="0" class="forumline">
  <tr>
	<td class="catHead" style="width: 10px; height: 30px; text-align: center; text-transform: uppercase;"><?php echo isset($this->vars['L_TITLE']) ? $this->vars['L_TITLE'] : $this->lang('L_TITLE'); ?></td>
	<td class="catHead" style="height: 30px; text-align: center; text-transform: uppercase;"><?php echo isset($this->vars['L_TITLE_KEY']) ? $this->vars['L_TITLE_KEY'] : $this->lang('L_TITLE_KEY'); ?></td>
	<td class="catHead" style="height: 30px; text-align: center; text-transform: uppercase;"><?php echo isset($this->vars['L_PERMISSIONS']) ? $this->vars['L_PERMISSIONS'] : $this->lang('L_PERMISSIONS'); ?></td>
	<td class="catHead" style="height: 30px; text-align: center; text-transform: uppercase;"><?php echo isset($this->vars['L_DEFAULT']) ? $this->vars['L_DEFAULT'] : $this->lang('L_DEFAULT'); ?></td>
	<td class="catHead" style="height: 30px; text-align: center; text-transform: uppercase;"><?php echo isset($this->vars['L_USAGE']) ? $this->vars['L_USAGE'] : $this->lang('L_USAGE'); ?></td>
	<td class="catHead" style="height: 30px; text-align: center; text-transform: uppercase;" colspan="2"><?php echo isset($this->vars['L_ACTION']) ? $this->vars['L_ACTION'] : $this->lang('L_ACTION'); ?></td>
  </tr>
  <?php

$row_count = ( isset($this->_tpldata['row.']) ) ?  sizeof($this->_tpldata['row.']) : 0;
for ($row_i = 0; $row_i < $row_count; $row_i++)
{
 $row_item = &$this->_tpldata['row.'][$row_i];
 $row_item['S_ROW_COUNT'] = $row_i;
 $row_item['S_NUM_ROWS'] = $row_count;

?>

  <tr>
	<td class="row1" style="width: 10px; text-align: center"><?php echo isset($row_item['ICON']) ? $row_item['ICON'] : ''; ?></td>
	<td class="row1"><?php echo isset($row_item['L_LANG']) ? $row_item['L_LANG'] : ''; ?><?php echo isset($row_item['LANG_KEY']) ? $row_item['LANG_KEY'] : ''; ?></td>
	<td class="row2" align="center"><span class="gen"><?php echo isset($row_item['L_AUTH']) ? $row_item['L_AUTH'] : ''; ?></span></td>
	<td class="row2" align="center"><?php

$default_count = ( isset($row_item['default.']) ) ? sizeof($row_item['default.']) : 0;
for ($default_i = 0; $default_i < $default_count; $default_i++)
{
 $default_item = &$row_item['default.'][$default_i];
 $default_item['S_ROW_COUNT'] = $default_i;
 $default_item['S_NUM_ROWS'] = $default_count;

?><?php echo isset($default_item['L_DEFAULT']) ? $default_item['L_DEFAULT'] : ''; ?><br /><?php

} // END default

if(isset($default_item)) { unset($default_item); } 

?></td>
	<td class="row2" align="center"><?php echo isset($row_item['USAGE']) ? $row_item['USAGE'] : ''; ?></td>
	<td class="row3" align="center">
		<a href="<?php echo isset($row_item['U_EDIT']) ? $row_item['U_EDIT'] : ''; ?>" alt="<?php echo isset($this->vars['L_EDIT']) ? $this->vars['L_EDIT'] : $this->lang('L_EDIT'); ?>" class="genmed"><?php echo isset($this->vars['L_EDIT']) ? $this->vars['L_EDIT'] : $this->lang('L_EDIT'); ?></a>&nbsp;&nbsp;
		<a href="<?php echo isset($row_item['U_DELETE']) ? $row_item['U_DELETE'] : ''; ?>" alt="<?php echo isset($this->vars['L_DELETE']) ? $this->vars['L_DELETE'] : $this->lang('L_DELETE'); ?>" class="genmed"><?php echo isset($this->vars['L_DELETE']) ? $this->vars['L_DELETE'] : $this->lang('L_DELETE'); ?></a>
	</td>
	<td class="row3" align="center">
		<a href="<?php echo isset($row_item['U_MOVEUP']) ? $row_item['U_MOVEUP'] : ''; ?>" alt="<?php echo isset($this->vars['L_MOVEUP']) ? $this->vars['L_MOVEUP'] : $this->lang('L_MOVEUP'); ?>" class="genmed"><?php echo isset($this->vars['L_MOVEUP']) ? $this->vars['L_MOVEUP'] : $this->lang('L_MOVEUP'); ?></a><br />
		<a href="<?php echo isset($row_item['U_MOVEDW']) ? $row_item['U_MOVEDW'] : ''; ?>" alt="<?php echo isset($this->vars['L_MOVEDW']) ? $this->vars['L_MOVEDW'] : $this->lang('L_MOVEDW'); ?>" class="genmed"><?php echo isset($this->vars['L_MOVEDW']) ? $this->vars['L_MOVEDW'] : $this->lang('L_MOVEDW'); ?></a>
	</td>
  </tr>
  
  <?php

} // END row

if(isset($row_item)) { unset($row_item); } 

?>
  <tr>
	<td class="catBottom" colspan="7" align="center"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?><input type="submit" name="create" class="mainoption" value="<?php echo isset($this->vars['L_CREATE']) ? $this->vars['L_CREATE'] : $this->lang('L_CREATE'); ?>" /></td>
  </tr>
</table>
</form>