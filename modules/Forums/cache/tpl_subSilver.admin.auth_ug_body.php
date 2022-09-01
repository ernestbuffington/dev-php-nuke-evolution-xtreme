<?php

// eXtreme Styles mod cache. Generated on Wed, 28 Apr 2021 01:39:08 +0000 (time=1619573948)

?><h1><?php echo isset($this->vars['L_AUTH_TITLE']) ? $this->vars['L_AUTH_TITLE'] : $this->lang('L_AUTH_TITLE'); ?></h1>

<h2><?php echo isset($this->vars['L_USER_OR_GROUPNAME']) ? $this->vars['L_USER_OR_GROUPNAME'] : $this->lang('L_USER_OR_GROUPNAME'); ?>: <?php echo isset($this->vars['USERNAME']) ? $this->vars['USERNAME'] : $this->lang('USERNAME'); ?></h2>

<form method="post" action="<?php echo isset($this->vars['S_AUTH_ACTION']) ? $this->vars['S_AUTH_ACTION'] : $this->lang('S_AUTH_ACTION'); ?>">

<?php

$switch_user_auth_count = ( isset($this->_tpldata['switch_user_auth.']) ) ?  sizeof($this->_tpldata['switch_user_auth.']) : 0;
for ($switch_user_auth_i = 0; $switch_user_auth_i < $switch_user_auth_count; $switch_user_auth_i++)
{
 $switch_user_auth_item = &$this->_tpldata['switch_user_auth.'][$switch_user_auth_i];
 $switch_user_auth_item['S_ROW_COUNT'] = $switch_user_auth_i;
 $switch_user_auth_item['S_NUM_ROWS'] = $switch_user_auth_count;

?>
<p><?php echo isset($this->vars['USER_LEVEL']) ? $this->vars['USER_LEVEL'] : $this->lang('USER_LEVEL'); ?></p>
<p><?php echo isset($this->vars['USER_GROUP_MEMBERSHIPS']) ? $this->vars['USER_GROUP_MEMBERSHIPS'] : $this->lang('USER_GROUP_MEMBERSHIPS'); ?></p>
<?php

} // END switch_user_auth

if(isset($switch_user_auth_item)) { unset($switch_user_auth_item); } 

?>

<?php

$switch_group_auth_count = ( isset($this->_tpldata['switch_group_auth.']) ) ?  sizeof($this->_tpldata['switch_group_auth.']) : 0;
for ($switch_group_auth_i = 0; $switch_group_auth_i < $switch_group_auth_count; $switch_group_auth_i++)
{
 $switch_group_auth_item = &$this->_tpldata['switch_group_auth.'][$switch_group_auth_i];
 $switch_group_auth_item['S_ROW_COUNT'] = $switch_group_auth_i;
 $switch_group_auth_item['S_NUM_ROWS'] = $switch_group_auth_count;

?>
<p><?php echo isset($this->vars['GROUP_MEMBERSHIP']) ? $this->vars['GROUP_MEMBERSHIP'] : $this->lang('GROUP_MEMBERSHIP'); ?></p>
<?php

} // END switch_group_auth

if(isset($switch_group_auth_item)) { unset($switch_group_auth_item); } 

?>

<h2><?php echo isset($this->vars['L_PERMISSIONS']) ? $this->vars['L_PERMISSIONS'] : $this->lang('L_PERMISSIONS'); ?></h2>

<p><?php echo isset($this->vars['L_AUTH_EXPLAIN']) ? $this->vars['L_AUTH_EXPLAIN'] : $this->lang('L_AUTH_EXPLAIN'); ?></p>

  <table cellspacing="1" cellpadding="4" border="0" align="center" class="forumline">
    <tr> 
      <th width="30%" class="thCornerL"><?php echo isset($this->vars['L_FORUM']) ? $this->vars['L_FORUM'] : $this->lang('L_FORUM'); ?></th>
      <?php

$acltype_count = ( isset($this->_tpldata['acltype.']) ) ?  sizeof($this->_tpldata['acltype.']) : 0;
for ($acltype_i = 0; $acltype_i < $acltype_count; $acltype_i++)
{
 $acltype_item = &$this->_tpldata['acltype.'][$acltype_i];
 $acltype_item['S_ROW_COUNT'] = $acltype_i;
 $acltype_item['S_NUM_ROWS'] = $acltype_count;

?>
      <th class="thTop"><?php echo isset($acltype_item['L_UG_ACL_TYPE']) ? $acltype_item['L_UG_ACL_TYPE'] : ''; ?></th>
      <?php

} // END acltype

if(isset($acltype_item)) { unset($acltype_item); } 

?>
      <th class="thCornerR"><?php echo isset($this->vars['L_MODERATOR_STATUS']) ? $this->vars['L_MODERATOR_STATUS'] : $this->lang('L_MODERATOR_STATUS'); ?></th>
    </tr>
    <?php

$forums_count = ( isset($this->_tpldata['forums.']) ) ?  sizeof($this->_tpldata['forums.']) : 0;
for ($forums_i = 0; $forums_i < $forums_count; $forums_i++)
{
 $forums_item = &$this->_tpldata['forums.'][$forums_i];
 $forums_item['S_ROW_COUNT'] = $forums_i;
 $forums_item['S_NUM_ROWS'] = $forums_count;

?>
    <tr> 
      <td class="<?php echo isset($forums_item['ROW_CLASS']) ? $forums_item['ROW_CLASS'] : ''; ?>" align="center"><?php echo isset($forums_item['FORUM_NAME']) ? $forums_item['FORUM_NAME'] : ''; ?></td>
      <?php

$aclvalues_count = ( isset($forums_item['aclvalues.']) ) ? sizeof($forums_item['aclvalues.']) : 0;
for ($aclvalues_i = 0; $aclvalues_i < $aclvalues_count; $aclvalues_i++)
{
 $aclvalues_item = &$forums_item['aclvalues.'][$aclvalues_i];
 $aclvalues_item['S_ROW_COUNT'] = $aclvalues_i;
 $aclvalues_item['S_NUM_ROWS'] = $aclvalues_count;

?>
      <td class="<?php echo isset($forums_item['ROW_CLASS']) ? $forums_item['ROW_CLASS'] : ''; ?>" align="center"><?php echo isset($aclvalues_item['S_ACL_SELECT']) ? $aclvalues_item['S_ACL_SELECT'] : ''; ?></td>
      <?php

} // END aclvalues

if(isset($aclvalues_item)) { unset($aclvalues_item); } 

?>
      <td class="<?php echo isset($forums_item['ROW_CLASS']) ? $forums_item['ROW_CLASS'] : ''; ?>" align="center"><?php echo isset($forums_item['S_MOD_SELECT']) ? $forums_item['S_MOD_SELECT'] : ''; ?></td>
    </tr>
    <?php

} // END forums

if(isset($forums_item)) { unset($forums_item); } 

?>
    <tr> 
      <td colspan="<?php echo isset($this->vars['S_COLUMN_SPAN']) ? $this->vars['S_COLUMN_SPAN'] : $this->lang('S_COLUMN_SPAN'); ?>" class="row1" align="center"> <span class="gensmall"><?php echo isset($this->vars['U_SWITCH_MODE']) ? $this->vars['U_SWITCH_MODE'] : $this->lang('U_SWITCH_MODE'); ?></span></td>
    </tr>
    <tr>
      <td colspan="<?php echo isset($this->vars['S_COLUMN_SPAN']) ? $this->vars['S_COLUMN_SPAN'] : $this->lang('S_COLUMN_SPAN'); ?>" class="catBottom" align="center"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?> 
        <input type="submit" name="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" class="mainoption" />
        &nbsp;&nbsp; 
        <input type="reset" value="<?php echo isset($this->vars['L_RESET']) ? $this->vars['L_RESET'] : $this->lang('L_RESET'); ?>" class="liteoption" name="reset" />
      </td>
    </tr>
  </table>
</form>