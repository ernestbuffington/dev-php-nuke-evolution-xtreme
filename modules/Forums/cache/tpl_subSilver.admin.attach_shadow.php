<?php

// eXtreme Styles mod cache. Generated on Sat, 15 May 2021 02:54:04 +0000 (time=1621047244)

?>
<h1><?php echo isset($this->vars['L_SHADOW_TITLE']) ? $this->vars['L_SHADOW_TITLE'] : $this->lang('L_SHADOW_TITLE'); ?></h1>

<p><?php echo isset($this->vars['L_SHADOW_EXPLAIN']) ? $this->vars['L_SHADOW_EXPLAIN'] : $this->lang('L_SHADOW_EXPLAIN'); ?></p>

<?php echo isset($this->vars['ERROR_BOX']) ? $this->vars['ERROR_BOX'] : $this->lang('ERROR_BOX'); ?>

<script language="Javascript" type="text/javascript">
    //
    // Should really check the browser to stop this whining ...
    //
    function select_switch(status)
    {
        for (i = 0; i < document.shadow_list.length; i++)
        {
            document.shadow_list.elements[i].checked = status;
        }
    }
</script>

<form method="post" name="shadow_list" action="<?php echo isset($this->vars['S_ATTACH_ACTION']) ? $this->vars['S_ATTACH_ACTION'] : $this->lang('S_ATTACH_ACTION'); ?>">

  <table width="100%" align="center" cellpadding="4" cellspacing="1" border="0" class="forumline">
    <tr> 
      <td class="catHead" colspan="5" align="center" height="28"><span class="cattitle"><?php echo isset($this->vars['L_SHADOW_TITLE']) ? $this->vars['L_SHADOW_TITLE'] : $this->lang('L_SHADOW_TITLE'); ?></span> 
      </td>
    </tr>
    <tr> 
      <th class="thLeft">&nbsp;<?php echo isset($this->vars['L_ATTACHMENT']) ? $this->vars['L_ATTACHMENT'] : $this->lang('L_ATTACHMENT'); ?>&nbsp;</th>
      <th>&nbsp;<?php echo isset($this->vars['L_COMMENT']) ? $this->vars['L_COMMENT'] : $this->lang('L_COMMENT'); ?>&nbsp;</th>
      <th class="thRight">&nbsp;<?php echo isset($this->vars['L_DELETE']) ? $this->vars['L_DELETE'] : $this->lang('L_DELETE'); ?>&nbsp;</th>
    </tr>
    <tr> 
      <td class="spaceRow" colspan="5" align="center"><span class="gensmall"><?php echo isset($this->vars['L_EXPLAIN_FILE']) ? $this->vars['L_EXPLAIN_FILE'] : $this->lang('L_EXPLAIN_FILE'); ?></span></td>
    </tr>
  <?php

$file_shadow_row_count = ( isset($this->_tpldata['file_shadow_row.']) ) ?  sizeof($this->_tpldata['file_shadow_row.']) : 0;
for ($file_shadow_row_i = 0; $file_shadow_row_i < $file_shadow_row_count; $file_shadow_row_i++)
{
 $file_shadow_row_item = &$this->_tpldata['file_shadow_row.'][$file_shadow_row_i];
 $file_shadow_row_item['S_ROW_COUNT'] = $file_shadow_row_i;
 $file_shadow_row_item['S_NUM_ROWS'] = $file_shadow_row_count;

?>
    <tr> 
      <td class="row2" align="center" valign="middle"><span class="postdetails"><a class="postdetails" href="<?php echo isset($file_shadow_row_item['U_ATTACHMENT']) ? $file_shadow_row_item['U_ATTACHMENT'] : ''; ?>" target="_blank"><?php echo isset($file_shadow_row_item['ATTACH_FILENAME']) ? $file_shadow_row_item['ATTACH_FILENAME'] : ''; ?></a></span></td>
      <td class="row1" align="center" valign="middle"><span class="postdetails"><?php echo isset($file_shadow_row_item['ATTACH_COMMENT']) ? $file_shadow_row_item['ATTACH_COMMENT'] : ''; ?></span></td>
      <td class="row2" align="center" valign="middle"><input type="checkbox" name="attach_file_list[]" value="<?php echo isset($file_shadow_row_item['ATTACH_ID']) ? $file_shadow_row_item['ATTACH_ID'] : ''; ?>" /></td>
    </tr>
  <?php

} // END file_shadow_row

if(isset($file_shadow_row_item)) { unset($file_shadow_row_item); } 

?>
    <tr> 
      <th class="thLeft">&nbsp;<?php echo isset($this->vars['L_ATTACHMENT']) ? $this->vars['L_ATTACHMENT'] : $this->lang('L_ATTACHMENT'); ?>&nbsp;</th>
      <th>&nbsp;<?php echo isset($this->vars['L_COMMENT']) ? $this->vars['L_COMMENT'] : $this->lang('L_COMMENT'); ?>&nbsp;</th>
      <th class="thRight">&nbsp;<?php echo isset($this->vars['L_DELETE']) ? $this->vars['L_DELETE'] : $this->lang('L_DELETE'); ?>&nbsp;</th>
    </tr>
    <tr> 
      <td class="spaceRow" colspan="5" align="center"><span class="gensmall"><?php echo isset($this->vars['L_EXPLAIN_ROW']) ? $this->vars['L_EXPLAIN_ROW'] : $this->lang('L_EXPLAIN_ROW'); ?></span></td>
    </tr>
  <?php

$table_shadow_row_count = ( isset($this->_tpldata['table_shadow_row.']) ) ?  sizeof($this->_tpldata['table_shadow_row.']) : 0;
for ($table_shadow_row_i = 0; $table_shadow_row_i < $table_shadow_row_count; $table_shadow_row_i++)
{
 $table_shadow_row_item = &$this->_tpldata['table_shadow_row.'][$table_shadow_row_i];
 $table_shadow_row_item['S_ROW_COUNT'] = $table_shadow_row_i;
 $table_shadow_row_item['S_NUM_ROWS'] = $table_shadow_row_count;

?>
    <tr> 
      <td class="row2" align="center" valign="middle"><span class="postdetails"><?php echo isset($table_shadow_row_item['ATTACH_FILENAME']) ? $table_shadow_row_item['ATTACH_FILENAME'] : ''; ?></span></td>
      <td class="row1" align="center" valign="middle"><span class="postdetails"><?php echo isset($table_shadow_row_item['ATTACH_COMMENT']) ? $table_shadow_row_item['ATTACH_COMMENT'] : ''; ?></span></td>
      <td class="row2" align="center" valign="middle"><input type="checkbox" name="attach_id_list[]" value="<?php echo isset($table_shadow_row_item['ATTACH_ID']) ? $table_shadow_row_item['ATTACH_ID'] : ''; ?>" /></td>
    </tr>
  <?php

} // END table_shadow_row

if(isset($table_shadow_row_item)) { unset($table_shadow_row_item); } 

?>
    <tr align="right"> 
      <td class="catBottom" colspan="5" height="29">
      <input type="submit" name="submit" class="liteoption" value="<?php echo isset($this->vars['L_DELETE_MARKED']) ? $this->vars['L_DELETE_MARKED'] : $this->lang('L_DELETE_MARKED'); ?>" /></td>
    </tr>
</table>
<?php echo isset($this->vars['S_HIDDEN']) ? $this->vars['S_HIDDEN'] : $this->lang('S_HIDDEN'); ?>

  <table width="100%" cellspacing="2" border="0" align="center" cellpadding="2">
    <tr> 
      <td align="right" valign="top" nowrap="nowrap"><strong><span class="gensmall"><a href="javascript:select_switch(true);" class="gensmall"><?php echo isset($this->vars['L_MARK_ALL']) ? $this->vars['L_MARK_ALL'] : $this->lang('L_MARK_ALL'); ?></a> :: <a href="javascript:select_switch(false);" class="gensmall"><?php echo isset($this->vars['L_UNMARK_ALL']) ? $this->vars['L_UNMARK_ALL'] : $this->lang('L_UNMARK_ALL'); ?></a></span></strong></td>
    </tr>
  </table>

</form>

<br />
<div align="center"><span class="copyright"><?php echo isset($this->vars['ATTACH_VERSION']) ? $this->vars['ATTACH_VERSION'] : $this->lang('ATTACH_VERSION'); ?></span></div>

<br clear="all" />
