<?php

// eXtreme Styles mod cache. Generated on Wed, 12 May 2021 22:56:40 +0000 (time=1620860200)

?><h1><?php echo isset($this->vars['L_XDATA_ADMIN']) ? $this->vars['L_XDATA_ADMIN'] : $this->lang('L_XDATA_ADMIN'); ?></h1>

<p><?php echo isset($this->vars['L_FORM_DESCRIPTION']) ? $this->vars['L_FORM_DESCRIPTION'] : $this->lang('L_FORM_DESCRIPTION'); ?></p>
<br />

<table border="0" cellpadding="4" cellspacing="1" width="80%" class="forumline" align="center">
    <tr>
        <th align="center" height="25" class="thCornerL" nowrap="nowrap">&nbsp;<?php echo isset($this->vars['L_FIELD_NAME']) ? $this->vars['L_FIELD_NAME'] : $this->lang('L_FIELD_NAME'); ?>&nbsp;</th>
        <th align="center" class="thTop" nowrap="nowrap">&nbsp;<?php echo isset($this->vars['L_FIELD_TYPE']) ? $this->vars['L_FIELD_TYPE'] : $this->lang('L_FIELD_TYPE'); ?>&nbsp;</th>
        <th align="center" class="thTop" nowrap="nowrap">&nbsp;<?php echo isset($this->vars['L_MOVE']) ? $this->vars['L_MOVE'] : $this->lang('L_MOVE'); ?>&nbsp;</th>
        <th align="center" class="thCornerR" nowrap="nowrap">&nbsp;<?php echo isset($this->vars['L_OPERATIONS']) ? $this->vars['L_OPERATIONS'] : $this->lang('L_OPERATIONS'); ?>&nbsp;</th>
    </tr>
    <?php

$xd_field_count = ( isset($this->_tpldata['xd_field.']) ) ?  sizeof($this->_tpldata['xd_field.']) : 0;
for ($xd_field_i = 0; $xd_field_i < $xd_field_count; $xd_field_i++)
{
 $xd_field_item = &$this->_tpldata['xd_field.'][$xd_field_i];
 $xd_field_item['S_ROW_COUNT'] = $xd_field_i;
 $xd_field_item['S_NUM_ROWS'] = $xd_field_count;

?>
    <tr>
        <td class="row1" align="center" valign="middle"><?php echo isset($xd_field_item['FIELD_NAME']) ? $xd_field_item['FIELD_NAME'] : ''; ?></td>
        <td class="row2" align="center" valign="middle"><?php echo isset($xd_field_item['FIELD_TYPE']) ? $xd_field_item['FIELD_TYPE'] : ''; ?></td>
        <td class="row1" align="center" valign="middle">
              <a href="<?php echo isset($xd_field_item['U_MOVE_UP']) ? $xd_field_item['U_MOVE_UP'] : ''; ?>"><?php echo isset($this->vars['L_MOVE_UP']) ? $this->vars['L_MOVE_UP'] : $this->lang('L_MOVE_UP'); ?></a><br />
              <a href="<?php echo isset($xd_field_item['U_MOVE_DOWN']) ? $xd_field_item['U_MOVE_DOWN'] : ''; ?>"><?php echo isset($this->vars['L_MOVE_DOWN']) ? $this->vars['L_MOVE_DOWN'] : $this->lang('L_MOVE_DOWN'); ?></a>
        </td>
        <td class="row2" align="center" valign="middle">
            <a href="<?php echo isset($xd_field_item['U_EDIT']) ? $xd_field_item['U_EDIT'] : ''; ?>"><?php echo isset($this->vars['L_EDIT']) ? $this->vars['L_EDIT'] : $this->lang('L_EDIT'); ?></a><br />
            <?php

$normal_count = ( isset($xd_field_item['normal.']) ) ? sizeof($xd_field_item['normal.']) : 0;
for ($normal_i = 0; $normal_i < $normal_count; $normal_i++)
{
 $normal_item = &$xd_field_item['normal.'][$normal_i];
 $normal_item['S_ROW_COUNT'] = $normal_i;
 $normal_item['S_NUM_ROWS'] = $normal_count;

?>
            <a href="<?php echo isset($xd_field_item['U_DELETE']) ? $xd_field_item['U_DELETE'] : ''; ?>"><?php echo isset($this->vars['L_DELETE']) ? $this->vars['L_DELETE'] : $this->lang('L_DELETE'); ?></a>
            <?php

} // END normal

if(isset($normal_item)) { unset($normal_item); } 

?>
        </td>
    </tr>
    <?php

} // END xd_field

if(isset($xd_field_item)) { unset($xd_field_item); } 

?>
    <?php

$switch_no_fields_count = ( isset($this->_tpldata['switch_no_fields.']) ) ?  sizeof($this->_tpldata['switch_no_fields.']) : 0;
for ($switch_no_fields_i = 0; $switch_no_fields_i < $switch_no_fields_count; $switch_no_fields_i++)
{
 $switch_no_fields_item = &$this->_tpldata['switch_no_fields.'][$switch_no_fields_i];
 $switch_no_fields_item['S_ROW_COUNT'] = $switch_no_fields_i;
 $switch_no_fields_item['S_NUM_ROWS'] = $switch_no_fields_count;

?>
    <tr>
        <td colspan="4" class="row1" align="center" valign="middle" height="30"><?php echo isset($this->vars['L_NO_FIELDS']) ? $this->vars['L_NO_FIELDS'] : $this->lang('L_NO_FIELDS'); ?></td>
    </tr>
    <?php

} // END switch_no_fields

if(isset($switch_no_fields_item)) { unset($switch_no_fields_item); } 

?>
    <tr>
        <td class="catBottom" colspan="4" align="center" height="20">&nbsp;<a href="<?php echo isset($this->vars['U_ADD_FIELD']) ? $this->vars['U_ADD_FIELD'] : $this->lang('U_ADD_FIELD'); ?>"><?php echo isset($this->vars['L_ADD_FIELD']) ? $this->vars['L_ADD_FIELD'] : $this->lang('L_ADD_FIELD'); ?></a>&nbsp;</td>
    </tr>
</table>
<br />