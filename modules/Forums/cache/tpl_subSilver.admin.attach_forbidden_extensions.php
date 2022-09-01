<?php

// eXtreme Styles mod cache. Generated on Wed, 12 May 2021 23:49:19 +0000 (time=1620863359)

?>
<h1><?php echo isset($this->vars['L_EXTENSIONS_TITLE']) ? $this->vars['L_EXTENSIONS_TITLE'] : $this->lang('L_EXTENSIONS_TITLE'); ?></h1>

<p><?php echo isset($this->vars['L_EXTENSIONS_EXPLAIN']) ? $this->vars['L_EXTENSIONS_EXPLAIN'] : $this->lang('L_EXTENSIONS_EXPLAIN'); ?></p>

<?php echo isset($this->vars['ERROR_BOX']) ? $this->vars['ERROR_BOX'] : $this->lang('ERROR_BOX'); ?>

<form method="post" action="<?php echo isset($this->vars['S_ATTACH_ACTION']) ? $this->vars['S_ATTACH_ACTION'] : $this->lang('S_ATTACH_ACTION'); ?>">
  <table width="99%" align="center" cellpadding="4" cellspacing="1" border="0" class="forumline">
    <tr> 
      <td class="catHead" colspan="5" align="center" height="28"><span class="cattitle"><?php echo isset($this->vars['L_EXTENSIONS_TITLE']) ? $this->vars['L_EXTENSIONS_TITLE'] : $this->lang('L_EXTENSIONS_TITLE'); ?></span> 
      </td>
    </tr>
    <tr> 
      <th class="thLeft">&nbsp;<?php echo isset($this->vars['L_EXTENSION']) ? $this->vars['L_EXTENSION'] : $this->lang('L_EXTENSION'); ?>&nbsp;</th>
      <th class="thRight">&nbsp;<?php echo isset($this->vars['L_ADD_NEW']) ? $this->vars['L_ADD_NEW'] : $this->lang('L_ADD_NEW'); ?>&nbsp;</th>
    </tr>
    <tr>
        <td class="row1" align="center" valign="middle"><input type="text" size="8" maxlength="15" name="add_extension" class="post" value=""/></td>
        <td class="row2" align="center" valign="middle"><input type="checkbox" name="add_extension_check" /></td>
    </tr>
    <tr align="right">
      <td class="catBottom" colspan="5" height="29"> <?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?> <input type="submit" name="submit" class="liteoption" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" /></td>
    </tr>
    <tr> 
      <th class="thLeft">&nbsp;<?php echo isset($this->vars['L_EXTENSION']) ? $this->vars['L_EXTENSION'] : $this->lang('L_EXTENSION'); ?>&nbsp;</th>
      <th class="thRight">&nbsp;<?php echo isset($this->vars['L_DELETE']) ? $this->vars['L_DELETE'] : $this->lang('L_DELETE'); ?>&nbsp;</th>
    </tr>
<?php

$extensionrow_count = ( isset($this->_tpldata['extensionrow.']) ) ?  sizeof($this->_tpldata['extensionrow.']) : 0;
for ($extensionrow_i = 0; $extensionrow_i < $extensionrow_count; $extensionrow_i++)
{
 $extensionrow_item = &$this->_tpldata['extensionrow.'][$extensionrow_i];
 $extensionrow_item['S_ROW_COUNT'] = $extensionrow_i;
 $extensionrow_item['S_NUM_ROWS'] = $extensionrow_count;

?>
    <tr> 
      <td class="row1" align="center" valign="middle"><span class="postdetails"><?php echo isset($extensionrow_item['EXTENSION_NAME']) ? $extensionrow_item['EXTENSION_NAME'] : ''; ?></span></td>
      <td class="row2" align="center" valign="middle"><input type="checkbox" name="extension_id_list[]" value="<?php echo isset($extensionrow_item['EXTENSION_ID']) ? $extensionrow_item['EXTENSION_ID'] : ''; ?>" /></td>
    </tr>
<?php

} // END extensionrow

if(isset($extensionrow_item)) { unset($extensionrow_item); } 

?>
    <tr align="right">
      <td class="catBottom" colspan="5" height="29"> <input type="submit" name="submit" class="liteoption" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" /></td>
    </tr>
</table>

</form>

<br />
<div align="center"><span class="copyright"><?php echo isset($this->vars['ATTACH_VERSION']) ? $this->vars['ATTACH_VERSION'] : $this->lang('ATTACH_VERSION'); ?></span></div>

<br clear="all" />
