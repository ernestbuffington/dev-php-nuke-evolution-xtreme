<?php

// eXtreme Styles mod cache. Generated on Sat, 15 May 2021 02:54:16 +0000 (time=1621047256)

?>
<?php echo isset($this->vars['GROUP_PERMISSIONS_BOX']) ? $this->vars['GROUP_PERMISSIONS_BOX'] : $this->lang('GROUP_PERMISSIONS_BOX'); ?>

<?php echo isset($this->vars['PERM_ERROR_BOX']) ? $this->vars['PERM_ERROR_BOX'] : $this->lang('PERM_ERROR_BOX'); ?>

<h1><?php echo isset($this->vars['L_EXTENSION_GROUPS_TITLE']) ? $this->vars['L_EXTENSION_GROUPS_TITLE'] : $this->lang('L_EXTENSION_GROUPS_TITLE'); ?></h1>

<p><?php echo isset($this->vars['L_EXTENSION_GROUPS_EXPLAIN']) ? $this->vars['L_EXTENSION_GROUPS_EXPLAIN'] : $this->lang('L_EXTENSION_GROUPS_EXPLAIN'); ?></p>

<?php echo isset($this->vars['ERROR_BOX']) ? $this->vars['ERROR_BOX'] : $this->lang('ERROR_BOX'); ?>

<form method="post" action="<?php echo isset($this->vars['S_ATTACH_ACTION']) ? $this->vars['S_ATTACH_ACTION'] : $this->lang('S_ATTACH_ACTION'); ?>">
  <table width="100%" align="center" cellpadding="4" cellspacing="1" border="0" class="forumline">
    <tr> 
      <td class="catHead" colspan="8" align="center" height="28"><span class="cattitle"><?php echo isset($this->vars['L_EXTENSION_GROUPS_TITLE']) ? $this->vars['L_EXTENSION_GROUPS_TITLE'] : $this->lang('L_EXTENSION_GROUPS_TITLE'); ?></span> 
      </td>
    </tr>
    <tr> 
      <th class="thLeft">&nbsp;<?php echo isset($this->vars['L_EXTENSION_GROUP']) ? $this->vars['L_EXTENSION_GROUP'] : $this->lang('L_EXTENSION_GROUP'); ?>&nbsp;</th>
      <th>&nbsp;<?php echo isset($this->vars['L_SPECIAL_CATEGORY']) ? $this->vars['L_SPECIAL_CATEGORY'] : $this->lang('L_SPECIAL_CATEGORY'); ?>&nbsp;</th>
      <th>&nbsp;<?php echo isset($this->vars['L_ALLOWED']) ? $this->vars['L_ALLOWED'] : $this->lang('L_ALLOWED'); ?>&nbsp;</th>
      <th>&nbsp;<?php echo isset($this->vars['L_DOWNLOAD_MODE']) ? $this->vars['L_DOWNLOAD_MODE'] : $this->lang('L_DOWNLOAD_MODE'); ?>&nbsp;</th>
      <th>&nbsp;<?php echo isset($this->vars['L_UPLOAD_ICON']) ? $this->vars['L_UPLOAD_ICON'] : $this->lang('L_UPLOAD_ICON'); ?>&nbsp;</th>
      <th>&nbsp;<?php echo isset($this->vars['L_MAX_FILESIZE']) ? $this->vars['L_MAX_FILESIZE'] : $this->lang('L_MAX_FILESIZE'); ?>&nbsp;</th>
      <th>&nbsp;<?php echo isset($this->vars['L_ALLOWED_FORUMS']) ? $this->vars['L_ALLOWED_FORUMS'] : $this->lang('L_ALLOWED_FORUMS'); ?>&nbsp;</th>
      <th class="thRight">&nbsp;<?php echo isset($this->vars['L_ADD_NEW']) ? $this->vars['L_ADD_NEW'] : $this->lang('L_ADD_NEW'); ?>&nbsp;</th>
    </tr>
    <tr>
      <td class="row1" align="center" valign="middle">
      <table width="100%" align="center" cellpadding="0" cellspacing="0" border="0">
      <tr>
        <td class="row1" align="center" valign="middle" width="10%" wrap="nowrap">&nbsp;</td>
      <td class="row1" align="left" valign="middle"><input type="text" size="20" maxlength="100" name="add_extension_group" class="post" value="<?php echo isset($this->vars['ADD_GROUP_NAME']) ? $this->vars['ADD_GROUP_NAME'] : $this->lang('ADD_GROUP_NAME'); ?>" /></td>
      </tr>
      </table>
      </td>
      <td class="row2" align="center" valign="middle"><?php echo isset($this->vars['S_SELECT_CAT']) ? $this->vars['S_SELECT_CAT'] : $this->lang('S_SELECT_CAT'); ?></td>
      <td class="row1" align="center" valign="middle"><input type="checkbox" name="add_allowed" /></td>
      <td class="row2" align="center" valign="middle"><?php echo isset($this->vars['S_ADD_DOWNLOAD_MODE']) ? $this->vars['S_ADD_DOWNLOAD_MODE'] : $this->lang('S_ADD_DOWNLOAD_MODE'); ?></td>
      <td class="row1" align="center" valign="middle"><input type="text" size="15" maxlength="100" name="add_upload_icon" class="post" value="<?php echo isset($this->vars['UPLOAD_ICON']) ? $this->vars['UPLOAD_ICON'] : $this->lang('UPLOAD_ICON'); ?>" /></td>
      <td class="row2" align="center" valign="middle"><input type="text" size="3" maxlength="15" name="add_max_filesize" class="post" value="<?php echo isset($this->vars['MAX_FILESIZE']) ? $this->vars['MAX_FILESIZE'] : $this->lang('MAX_FILESIZE'); ?>" /> <?php echo isset($this->vars['S_FILESIZE']) ? $this->vars['S_FILESIZE'] : $this->lang('S_FILESIZE'); ?></td>
      <td class="row1" align="center" valign="middle">&nbsp;</td>
      <td class="row2" align="center" valign="middle"><input type="checkbox" name="add_extension_group_check" /></td>
    </tr>
    <tr align="right"> 
      <td class="catBottom" colspan="8" height="29"><input type="submit" name="submit" class="liteoption" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" /></td>
    </tr>
    <tr> 
      <th class="thLeft">&nbsp;<?php echo isset($this->vars['L_EXTENSION_GROUP']) ? $this->vars['L_EXTENSION_GROUP'] : $this->lang('L_EXTENSION_GROUP'); ?>&nbsp;</th>
      <th>&nbsp;<?php echo isset($this->vars['L_SPECIAL_CATEGORY']) ? $this->vars['L_SPECIAL_CATEGORY'] : $this->lang('L_SPECIAL_CATEGORY'); ?>&nbsp;</th>
      <th>&nbsp;<?php echo isset($this->vars['L_ALLOWED']) ? $this->vars['L_ALLOWED'] : $this->lang('L_ALLOWED'); ?>&nbsp;</th>
      <th>&nbsp;<?php echo isset($this->vars['L_DOWNLOAD_MODE']) ? $this->vars['L_DOWNLOAD_MODE'] : $this->lang('L_DOWNLOAD_MODE'); ?>&nbsp;</th>
      <th>&nbsp;<?php echo isset($this->vars['L_UPLOAD_ICON']) ? $this->vars['L_UPLOAD_ICON'] : $this->lang('L_UPLOAD_ICON'); ?>&nbsp;</th>
      <th>&nbsp;<?php echo isset($this->vars['L_MAX_FILESIZE']) ? $this->vars['L_MAX_FILESIZE'] : $this->lang('L_MAX_FILESIZE'); ?>&nbsp;</th>
      <th>&nbsp;<?php echo isset($this->vars['L_ALLOWED_FORUMS']) ? $this->vars['L_ALLOWED_FORUMS'] : $this->lang('L_ALLOWED_FORUMS'); ?>&nbsp;</th>
      <th class="thRight">&nbsp;<?php echo isset($this->vars['L_DELETE']) ? $this->vars['L_DELETE'] : $this->lang('L_DELETE'); ?>&nbsp;</th>
    </tr>
  <?php

$grouprow_count = ( isset($this->_tpldata['grouprow.']) ) ?  sizeof($this->_tpldata['grouprow.']) : 0;
for ($grouprow_i = 0; $grouprow_i < $grouprow_count; $grouprow_i++)
{
 $grouprow_item = &$this->_tpldata['grouprow.'][$grouprow_i];
 $grouprow_item['S_ROW_COUNT'] = $grouprow_i;
 $grouprow_item['S_NUM_ROWS'] = $grouprow_count;

?>
    <tr> 
      <input type="hidden" name="group_change_list[]" value="<?php echo isset($grouprow_item['GROUP_ID']) ? $grouprow_item['GROUP_ID'] : ''; ?>" />
      <td class="row1" align="center" valign="middle">
      <table width="100%" align="center" cellpadding="0" cellspacing="0" border="0">
      <tr>
        <td class="row1" align="center" valign="middle" width="10%" wrap="nowrap"><strong><span class="gensmall"><a href="<?php echo isset($grouprow_item['U_VIEWGROUP']) ? $grouprow_item['U_VIEWGROUP'] : ''; ?>" class="gensmall"><?php echo isset($grouprow_item['CAT_BOX']) ? $grouprow_item['CAT_BOX'] : ''; ?></a></span></strong></td>
        <td class="row1" align="left" valign="middle"><input type="text" size="20" maxlength="100" name="extension_group_list[]" class="post" value="<?php echo isset($grouprow_item['EXTENSION_GROUP']) ? $grouprow_item['EXTENSION_GROUP'] : ''; ?>" /></td>
      </tr>
      </table>
      </td>
      <td class="row2" align="center" valign="middle"><?php echo isset($grouprow_item['S_SELECT_CAT']) ? $grouprow_item['S_SELECT_CAT'] : ''; ?></td>
      <td class="row1" align="center" valign="middle"><input type="checkbox" name="allowed_list[]" value="<?php echo isset($grouprow_item['GROUP_ID']) ? $grouprow_item['GROUP_ID'] : ''; ?>" <?php echo isset($grouprow_item['S_ALLOW_SELECTED']) ? $grouprow_item['S_ALLOW_SELECTED'] : ''; ?> /></td>
      <td class="row2" align="center" valign="middle"><?php echo isset($grouprow_item['S_DOWNLOAD_MODE']) ? $grouprow_item['S_DOWNLOAD_MODE'] : ''; ?></td>
      <td class="row1" align="center" valign="middle"><input type="text" size="15" maxlength="100" name="upload_icon_list[]" class="post" value="<?php echo isset($grouprow_item['UPLOAD_ICON']) ? $grouprow_item['UPLOAD_ICON'] : ''; ?>" /></td>
      <td class="row2" align="center" valign="middle"><input type="text" size="3" maxlength="15" name="max_filesize_list[]" class="post" value="<?php echo isset($grouprow_item['MAX_FILESIZE']) ? $grouprow_item['MAX_FILESIZE'] : ''; ?>" /> <?php echo isset($grouprow_item['S_FILESIZE']) ? $grouprow_item['S_FILESIZE'] : ''; ?></td>
      <td class="row1" align="center" valign="middle"><span class="gensmall"><a href="<?php echo isset($grouprow_item['U_FORUM_PERMISSIONS']) ? $grouprow_item['U_FORUM_PERMISSIONS'] : ''; ?>" class="gensmall"><?php echo isset($this->vars['L_FORUM_PERMISSIONS']) ? $this->vars['L_FORUM_PERMISSIONS'] : $this->lang('L_FORUM_PERMISSIONS'); ?></a></span></td>
      <td class="row2" align="center" valign="middle"><input type="checkbox" name="group_id_list[]" value="<?php echo isset($grouprow_item['GROUP_ID']) ? $grouprow_item['GROUP_ID'] : ''; ?>" /></td>
    </tr>
  <?php

$extensionrow_count = ( isset($grouprow_item['extensionrow.']) ) ? sizeof($grouprow_item['extensionrow.']) : 0;
for ($extensionrow_i = 0; $extensionrow_i < $extensionrow_count; $extensionrow_i++)
{
 $extensionrow_item = &$grouprow_item['extensionrow.'][$extensionrow_i];
 $extensionrow_item['S_ROW_COUNT'] = $extensionrow_i;
 $extensionrow_item['S_NUM_ROWS'] = $extensionrow_count;

?>

  <tr> 
    <td class="row2" align="center" valign="middle"><span class="postdetails"><?php echo isset($extensionrow_item['EXTENSION']) ? $extensionrow_item['EXTENSION'] : ''; ?></span></td>
    <td class="row2" align="center" valign="middle"><span class="postdetails"><?php echo isset($extensionrow_item['EXPLANATION']) ? $extensionrow_item['EXPLANATION'] : ''; ?></span></td>
    <td class="row2" align="center" valign="middle">&nbsp;</td>
    <td class="row2" align="center" valign="middle">&nbsp;</td>
    <td class="row2" align="center" valign="middle">&nbsp;</td>
    <td class="row2" align="center" valign="middle">&nbsp;</td>
    <td class="row2" align="center" valign="middle">&nbsp;</td>
    <td class="row2" align="center" valign="middle">&nbsp;</td>
  </tr>

  <?php

} // END extensionrow

if(isset($extensionrow_item)) { unset($extensionrow_item); } 

?>
  <?php

} // END grouprow

if(isset($grouprow_item)) { unset($grouprow_item); } 

?>

    <tr align="right"> 
      <td class="catBottom" colspan="8" height="29"> 
      <input type="submit" name="<?php echo isset($this->vars['L_CANCEL']) ? $this->vars['L_CANCEL'] : $this->lang('L_CANCEL'); ?>" class="liteoption" value="<?php echo isset($this->vars['L_CANCEL']) ? $this->vars['L_CANCEL'] : $this->lang('L_CANCEL'); ?>" onClick="self.location.href='<?php echo isset($this->vars['S_CANCEL_ACTION']) ? $this->vars['S_CANCEL_ACTION'] : $this->lang('S_CANCEL_ACTION'); ?>'" />
      <input type="submit" name="submit" class="liteoption" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" /></td>
    </tr>
</table>

</form>

<br />
<div align="center"><span class="copyright"><?php echo isset($this->vars['ATTACH_VERSION']) ? $this->vars['ATTACH_VERSION'] : $this->lang('ATTACH_VERSION'); ?></span></div>

<br clear="all" />
