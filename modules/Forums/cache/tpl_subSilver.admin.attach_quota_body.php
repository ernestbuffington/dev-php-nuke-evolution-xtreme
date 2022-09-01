<?php

// eXtreme Styles mod cache. Generated on Sat, 15 May 2021 02:54:01 +0000 (time=1621047241)

?>
<h1><?php echo isset($this->vars['L_MANAGE_QUOTAS_TITLE']) ? $this->vars['L_MANAGE_QUOTAS_TITLE'] : $this->lang('L_MANAGE_QUOTAS_TITLE'); ?></h1>

<p><?php echo isset($this->vars['L_MANAGE_QUOTAS_EXPLAIN']) ? $this->vars['L_MANAGE_QUOTAS_EXPLAIN'] : $this->lang('L_MANAGE_QUOTAS_EXPLAIN'); ?></p>

<form method="post" action="<?php echo isset($this->vars['S_ATTACH_ACTION']) ? $this->vars['S_ATTACH_ACTION'] : $this->lang('S_ATTACH_ACTION'); ?>">
  <table width="99%" align="center" cellpadding="4" cellspacing="1" border="0" class="forumline">
    <tr> 
      <td class="catHead" colspan="5" align="center" height="28"><span class="cattitle"><?php echo isset($this->vars['L_MANAGE_QUOTAS_TITLE']) ? $this->vars['L_MANAGE_QUOTAS_TITLE'] : $this->lang('L_MANAGE_QUOTAS_TITLE'); ?></span> 
      </td>
    </tr>
    <tr>
        <th class="thCornerL"><?php echo isset($this->vars['L_DESCRIPTION']) ? $this->vars['L_DESCRIPTION'] : $this->lang('L_DESCRIPTION'); ?></th>
        <th class="thTop"><?php echo isset($this->vars['L_SIZE']) ? $this->vars['L_SIZE'] : $this->lang('L_SIZE'); ?></th>
        <th class="thCornerR"><?php echo isset($this->vars['L_ADD_NEW']) ? $this->vars['L_ADD_NEW'] : $this->lang('L_ADD_NEW'); ?></th>
    </tr>
    <tr>
        <td class="row1" align="center" valign="middle"><input type="text" size="20" maxlength="25" name="quota_description" class="post" value=""/></td>
        <td class="row2" align="center" valign="middle"><input type="text" size="8" maxlength="15" name="add_max_filesize" class="post" value="<?php echo isset($this->vars['MAX_FILESIZE']) ? $this->vars['MAX_FILESIZE'] : $this->lang('MAX_FILESIZE'); ?>" /> <?php echo isset($this->vars['S_FILESIZE']) ? $this->vars['S_FILESIZE'] : $this->lang('S_FILESIZE'); ?></td>
        <td class="row1" align="center" valign="middle"><input type="checkbox" name="add_quota_check" /></td>
    </tr>
    <tr align="right">
      <td class="catBottom" colspan="5" height="29"> <?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?> <input type="submit" name="submit" class="liteoption" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" /></td>
    </tr>
    <tr>
        <th class="thCornerL"><?php echo isset($this->vars['L_DESCRIPTION']) ? $this->vars['L_DESCRIPTION'] : $this->lang('L_DESCRIPTION'); ?></th>
        <th class="thTop"><?php echo isset($this->vars['L_SIZE']) ? $this->vars['L_SIZE'] : $this->lang('L_SIZE'); ?></th>
        <th class="thCornerR"><?php echo isset($this->vars['L_DELETE']) ? $this->vars['L_DELETE'] : $this->lang('L_DELETE'); ?></th>
    </tr>
<?php

$limit_row_count = ( isset($this->_tpldata['limit_row.']) ) ?  sizeof($this->_tpldata['limit_row.']) : 0;
for ($limit_row_i = 0; $limit_row_i < $limit_row_count; $limit_row_i++)
{
 $limit_row_item = &$this->_tpldata['limit_row.'][$limit_row_i];
 $limit_row_item['S_ROW_COUNT'] = $limit_row_i;
 $limit_row_item['S_NUM_ROWS'] = $limit_row_count;

?>
    <tr> 
      <td class="row1" align="center" valign="middle">
        <input type="hidden" name="quota_change_list[]" value="<?php echo isset($limit_row_item['QUOTA_ID']) ? $limit_row_item['QUOTA_ID'] : ''; ?>" />
      <table width="100%" align="center" cellpadding="0" cellspacing="0" border="0">
      <tr>
        <td class="row1" align="center" valign="middle" width="10%" wrap="nowrap"><strong><span class="gensmall"><a href="<?php echo isset($limit_row_item['U_VIEW']) ? $limit_row_item['U_VIEW'] : ''; ?>" class="gensmall"><?php echo isset($this->vars['L_VIEW']) ? $this->vars['L_VIEW'] : $this->lang('L_VIEW'); ?></a></span></strong></td>
        <td class="row1" align="left" valign="middle"><input type="text" size="20" maxlength="25" name="quota_desc_list[]" class="post" value="<?php echo isset($limit_row_item['QUOTA_NAME']) ? $limit_row_item['QUOTA_NAME'] : ''; ?>" /></td>
      </tr>
      </table>
      </td>    
      <td class="row2" align="center" valign="middle"><input type="text" size="8" maxlength="15" name="max_filesize_list[]" class="post" value="<?php echo isset($limit_row_item['MAX_FILESIZE']) ? $limit_row_item['MAX_FILESIZE'] : ''; ?>" /> <?php echo isset($limit_row_item['S_FILESIZE']) ? $limit_row_item['S_FILESIZE'] : ''; ?></td>
      <td class="row1" align="center" valign="middle"><input type="checkbox" name="quota_id_list[]" value="<?php echo isset($limit_row_item['QUOTA_ID']) ? $limit_row_item['QUOTA_ID'] : ''; ?>" /></td>
    </tr>
<?php

} // END limit_row

if(isset($limit_row_item)) { unset($limit_row_item); } 

?>
    <tr align="right">
      <td class="catBottom" colspan="5" height="29"> <input type="submit" name="submit" class="liteoption" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" /></td>
    </tr>
</table>
</form>

<!-- <?php echo isset($this->vars['QUOTA_LIMIT_SETTINGS']) ? $this->vars['QUOTA_LIMIT_SETTINGS'] : $this->lang('QUOTA_LIMIT_SETTINGS'); ?> -->

<?php

$switch_quota_limit_desc_count = ( isset($this->_tpldata['switch_quota_limit_desc.']) ) ?  sizeof($this->_tpldata['switch_quota_limit_desc.']) : 0;
for ($switch_quota_limit_desc_i = 0; $switch_quota_limit_desc_i < $switch_quota_limit_desc_count; $switch_quota_limit_desc_i++)
{
 $switch_quota_limit_desc_item = &$this->_tpldata['switch_quota_limit_desc.'][$switch_quota_limit_desc_i];
 $switch_quota_limit_desc_item['S_ROW_COUNT'] = $switch_quota_limit_desc_i;
 $switch_quota_limit_desc_item['S_NUM_ROWS'] = $switch_quota_limit_desc_count;

?>
<center><h1><?php echo isset($this->vars['L_QUOTA_LIMIT_DESC']) ? $this->vars['L_QUOTA_LIMIT_DESC'] : $this->lang('L_QUOTA_LIMIT_DESC'); ?></h1></center>

<table width="99%" cellspacing="0" cellpadding="0" border="0" align="center">
    <tr>
        <td align="left" width="49%">
            <table width="100%" class="forumline" cellspacing="1" cellpadding="4" border="0" align="left">
                <tr>
                    <th><?php echo isset($this->vars['L_ASSIGNED_USERS']) ? $this->vars['L_ASSIGNED_USERS'] : $this->lang('L_ASSIGNED_USERS'); ?> - <?php echo isset($this->vars['L_UPLOAD_QUOTA']) ? $this->vars['L_UPLOAD_QUOTA'] : $this->lang('L_UPLOAD_QUOTA'); ?></th>
                </tr>
                <tr>
                    <td class="row1" align="center">
                        <select style="width:99%" name="entries[]" multiple="multiple" size="5">
<?php

} // END switch_quota_limit_desc

if(isset($switch_quota_limit_desc_item)) { unset($switch_quota_limit_desc_item); } 

?>
                        <?php

$users_upload_row_count = ( isset($this->_tpldata['users_upload_row.']) ) ?  sizeof($this->_tpldata['users_upload_row.']) : 0;
for ($users_upload_row_i = 0; $users_upload_row_i < $users_upload_row_count; $users_upload_row_i++)
{
 $users_upload_row_item = &$this->_tpldata['users_upload_row.'][$users_upload_row_i];
 $users_upload_row_item['S_ROW_COUNT'] = $users_upload_row_i;
 $users_upload_row_item['S_NUM_ROWS'] = $users_upload_row_count;

?>
                        <option value="<?php echo isset($users_upload_row_item['USER_ID']) ? $users_upload_row_item['USER_ID'] : ''; ?>"><?php echo isset($users_upload_row_item['USERNAME']) ? $users_upload_row_item['USERNAME'] : ''; ?></option>
                        <?php

} // END users_upload_row

if(isset($users_upload_row_item)) { unset($users_upload_row_item); } 

?>
<?php

$switch_quota_limit_desc_count = ( isset($this->_tpldata['switch_quota_limit_desc.']) ) ?  sizeof($this->_tpldata['switch_quota_limit_desc.']) : 0;
for ($switch_quota_limit_desc_i = 0; $switch_quota_limit_desc_i < $switch_quota_limit_desc_count; $switch_quota_limit_desc_i++)
{
 $switch_quota_limit_desc_item = &$this->_tpldata['switch_quota_limit_desc.'][$switch_quota_limit_desc_i];
 $switch_quota_limit_desc_item['S_ROW_COUNT'] = $switch_quota_limit_desc_i;
 $switch_quota_limit_desc_item['S_NUM_ROWS'] = $switch_quota_limit_desc_count;

?>
                        </select>
                    </td>
                </tr>
            </table>
        </td>
        <td width="2%">
            &nbsp;&nbsp;&nbsp;
        </td>
        <td align="right" width="49%">
            <table width="100%" class="forumline" cellspacing="1" cellpadding="4" border="0" align="right">
                <tr>
                    <th><?php echo isset($this->vars['L_ASSIGNED_GROUPS']) ? $this->vars['L_ASSIGNED_GROUPS'] : $this->lang('L_ASSIGNED_GROUPS'); ?> - <?php echo isset($this->vars['L_UPLOAD_QUOTA']) ? $this->vars['L_UPLOAD_QUOTA'] : $this->lang('L_UPLOAD_QUOTA'); ?></th>
                </tr>
                <tr>
                    <td class="row1" align="center">
                    <select style="width:99%" name="entries[]" multiple="multiple" size="5">
<?php

} // END switch_quota_limit_desc

if(isset($switch_quota_limit_desc_item)) { unset($switch_quota_limit_desc_item); } 

?>
                    <?php

$groups_upload_row_count = ( isset($this->_tpldata['groups_upload_row.']) ) ?  sizeof($this->_tpldata['groups_upload_row.']) : 0;
for ($groups_upload_row_i = 0; $groups_upload_row_i < $groups_upload_row_count; $groups_upload_row_i++)
{
 $groups_upload_row_item = &$this->_tpldata['groups_upload_row.'][$groups_upload_row_i];
 $groups_upload_row_item['S_ROW_COUNT'] = $groups_upload_row_i;
 $groups_upload_row_item['S_NUM_ROWS'] = $groups_upload_row_count;

?>
                    <option value="<?php echo isset($groups_upload_row_item['GROUP_ID']) ? $groups_upload_row_item['GROUP_ID'] : ''; ?>"><?php echo isset($groups_upload_row_item['GROUPNAME']) ? $groups_upload_row_item['GROUPNAME'] : ''; ?></option>
                    <?php

} // END groups_upload_row

if(isset($groups_upload_row_item)) { unset($groups_upload_row_item); } 

?>
<?php

$switch_quota_limit_desc_count = ( isset($this->_tpldata['switch_quota_limit_desc.']) ) ?  sizeof($this->_tpldata['switch_quota_limit_desc.']) : 0;
for ($switch_quota_limit_desc_i = 0; $switch_quota_limit_desc_i < $switch_quota_limit_desc_count; $switch_quota_limit_desc_i++)
{
 $switch_quota_limit_desc_item = &$this->_tpldata['switch_quota_limit_desc.'][$switch_quota_limit_desc_i];
 $switch_quota_limit_desc_item['S_ROW_COUNT'] = $switch_quota_limit_desc_i;
 $switch_quota_limit_desc_item['S_NUM_ROWS'] = $switch_quota_limit_desc_count;

?>
                    </select>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            &nbsp;&nbsp;&nbsp;
        </td>
    </tr>
    <tr>
        <td align="left" width="49%">
            <table width="100%" class="forumline" cellspacing="1" cellpadding="4" border="0" align="left">
                <tr>
                    <th><?php echo isset($this->vars['L_ASSIGNED_USERS']) ? $this->vars['L_ASSIGNED_USERS'] : $this->lang('L_ASSIGNED_USERS'); ?> - <?php echo isset($this->vars['L_PM_QUOTA']) ? $this->vars['L_PM_QUOTA'] : $this->lang('L_PM_QUOTA'); ?></th>
                </tr>
                <tr>
                    <td class="row1" align="center">
                        <select style="width:99%" name="entries[]" multiple="multiple" size="5">
<?php

} // END switch_quota_limit_desc

if(isset($switch_quota_limit_desc_item)) { unset($switch_quota_limit_desc_item); } 

?>
                        <?php

$users_pm_row_count = ( isset($this->_tpldata['users_pm_row.']) ) ?  sizeof($this->_tpldata['users_pm_row.']) : 0;
for ($users_pm_row_i = 0; $users_pm_row_i < $users_pm_row_count; $users_pm_row_i++)
{
 $users_pm_row_item = &$this->_tpldata['users_pm_row.'][$users_pm_row_i];
 $users_pm_row_item['S_ROW_COUNT'] = $users_pm_row_i;
 $users_pm_row_item['S_NUM_ROWS'] = $users_pm_row_count;

?>
                        <option value="<?php echo isset($users_pm_row_item['USER_ID']) ? $users_pm_row_item['USER_ID'] : ''; ?>"><?php echo isset($users_pm_row_item['USERNAME']) ? $users_pm_row_item['USERNAME'] : ''; ?></option>
                        <?php

} // END users_pm_row

if(isset($users_pm_row_item)) { unset($users_pm_row_item); } 

?>
<?php

$switch_quota_limit_desc_count = ( isset($this->_tpldata['switch_quota_limit_desc.']) ) ?  sizeof($this->_tpldata['switch_quota_limit_desc.']) : 0;
for ($switch_quota_limit_desc_i = 0; $switch_quota_limit_desc_i < $switch_quota_limit_desc_count; $switch_quota_limit_desc_i++)
{
 $switch_quota_limit_desc_item = &$this->_tpldata['switch_quota_limit_desc.'][$switch_quota_limit_desc_i];
 $switch_quota_limit_desc_item['S_ROW_COUNT'] = $switch_quota_limit_desc_i;
 $switch_quota_limit_desc_item['S_NUM_ROWS'] = $switch_quota_limit_desc_count;

?>
                        </select>
                    </td>
                </tr>
            </table>
        </td>
        <td width="2%">
            &nbsp;&nbsp;&nbsp;
        </td>
        <td align="right" width="49%">
            <table width="100%" class="forumline" cellspacing="1" cellpadding="4" border="0" align="right">
                <tr>
                    <th><?php echo isset($this->vars['L_ASSIGNED_GROUPS']) ? $this->vars['L_ASSIGNED_GROUPS'] : $this->lang('L_ASSIGNED_GROUPS'); ?> - <?php echo isset($this->vars['L_PM_QUOTA']) ? $this->vars['L_PM_QUOTA'] : $this->lang('L_PM_QUOTA'); ?></th>
                </tr>
                <tr>
                    <td class="row1" align="center">
                    <select style="width:99%" name="entries[]" multiple="multiple" size="5">
<?php

} // END switch_quota_limit_desc

if(isset($switch_quota_limit_desc_item)) { unset($switch_quota_limit_desc_item); } 

?>
                    <?php

$groups_pm_row_count = ( isset($this->_tpldata['groups_pm_row.']) ) ?  sizeof($this->_tpldata['groups_pm_row.']) : 0;
for ($groups_pm_row_i = 0; $groups_pm_row_i < $groups_pm_row_count; $groups_pm_row_i++)
{
 $groups_pm_row_item = &$this->_tpldata['groups_pm_row.'][$groups_pm_row_i];
 $groups_pm_row_item['S_ROW_COUNT'] = $groups_pm_row_i;
 $groups_pm_row_item['S_NUM_ROWS'] = $groups_pm_row_count;

?>
                    <option value="<?php echo isset($groups_pm_row_item['GROUP_ID']) ? $groups_pm_row_item['GROUP_ID'] : ''; ?>"><?php echo isset($groups_pm_row_item['GROUPNAME']) ? $groups_pm_row_item['GROUPNAME'] : ''; ?></option>
                    <?php

} // END groups_pm_row

if(isset($groups_pm_row_item)) { unset($groups_pm_row_item); } 

?>
<?php

$switch_quota_limit_desc_count = ( isset($this->_tpldata['switch_quota_limit_desc.']) ) ?  sizeof($this->_tpldata['switch_quota_limit_desc.']) : 0;
for ($switch_quota_limit_desc_i = 0; $switch_quota_limit_desc_i < $switch_quota_limit_desc_count; $switch_quota_limit_desc_i++)
{
 $switch_quota_limit_desc_item = &$this->_tpldata['switch_quota_limit_desc.'][$switch_quota_limit_desc_i];
 $switch_quota_limit_desc_item['S_ROW_COUNT'] = $switch_quota_limit_desc_i;
 $switch_quota_limit_desc_item['S_NUM_ROWS'] = $switch_quota_limit_desc_count;

?>
                    </select>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<?php

} // END switch_quota_limit_desc

if(isset($switch_quota_limit_desc_item)) { unset($switch_quota_limit_desc_item); } 

?>

<br />
<div align="center"><span class="copyright"><?php echo isset($this->vars['ATTACH_VERSION']) ? $this->vars['ATTACH_VERSION'] : $this->lang('ATTACH_VERSION'); ?></span></div>

<br clear="all" />
