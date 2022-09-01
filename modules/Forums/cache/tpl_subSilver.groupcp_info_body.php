<?php

// eXtreme Styles mod cache. Generated on Tue, 18 May 2021 19:53:50 +0000 (time=1621367630)

?><form action="<?php echo isset($this->vars['S_GROUPCP_ACTION']) ? $this->vars['S_GROUPCP_ACTION'] : $this->lang('S_GROUPCP_ACTION'); ?>" method="post">

<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
    <tr>
        <td align="left" class="nav"><a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>" class="nav"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a></td>
    </tr>
</table>

<table class="forumline" width="100%" cellspacing="1" cellpadding="4" border="0">
    <tr> 
        <th class="thHead" colspan="7" height="25"><span class="tableTitle"><?php echo isset($this->vars['L_GROUP_INFORMATION']) ? $this->vars['L_GROUP_INFORMATION'] : $this->lang('L_GROUP_INFORMATION'); ?></span></th>
    </tr>
    <tr> 
        <td class="row1" width="20%"><span class="gen"><?php echo isset($this->vars['L_GROUP_NAME']) ? $this->vars['L_GROUP_NAME'] : $this->lang('L_GROUP_NAME'); ?>:</span></td>
        <td class="row2"><span class="gen"><strong><?php echo isset($this->vars['GROUP_NAME']) ? $this->vars['GROUP_NAME'] : $this->lang('GROUP_NAME'); ?></strong></span></td>
    </tr>
    <tr> 
        <td class="row1" width="20%"><span class="gen"><?php echo isset($this->vars['L_GROUP_DESC']) ? $this->vars['L_GROUP_DESC'] : $this->lang('L_GROUP_DESC'); ?>:</span></td>
        <td class="row2"><span class="gen"><?php echo isset($this->vars['GROUP_DESC']) ? $this->vars['GROUP_DESC'] : $this->lang('GROUP_DESC'); ?></span></td>
    </tr>
    <tr> 
        <td class="row1" width="20%"><span class="gen"><?php echo isset($this->vars['L_GROUP_MEMBERSHIP']) ? $this->vars['L_GROUP_MEMBERSHIP'] : $this->lang('L_GROUP_MEMBERSHIP'); ?>:</span></td>
        <td class="row2"><span class="gen"><?php echo isset($this->vars['GROUP_DETAILS']) ? $this->vars['GROUP_DETAILS'] : $this->lang('GROUP_DETAILS'); ?> &nbsp;&nbsp;
        <?php

$switch_subscribe_group_input_count = ( isset($this->_tpldata['switch_subscribe_group_input.']) ) ?  sizeof($this->_tpldata['switch_subscribe_group_input.']) : 0;
for ($switch_subscribe_group_input_i = 0; $switch_subscribe_group_input_i < $switch_subscribe_group_input_count; $switch_subscribe_group_input_i++)
{
 $switch_subscribe_group_input_item = &$this->_tpldata['switch_subscribe_group_input.'][$switch_subscribe_group_input_i];
 $switch_subscribe_group_input_item['S_ROW_COUNT'] = $switch_subscribe_group_input_i;
 $switch_subscribe_group_input_item['S_NUM_ROWS'] = $switch_subscribe_group_input_count;

?>
        <input class="mainoption" type="submit" name="joingroup" value="<?php echo isset($this->vars['L_JOIN_GROUP']) ? $this->vars['L_JOIN_GROUP'] : $this->lang('L_JOIN_GROUP'); ?>" />
        <?php

} // END switch_subscribe_group_input

if(isset($switch_subscribe_group_input_item)) { unset($switch_subscribe_group_input_item); } 

?>
        <?php

$switch_unsubscribe_group_input_count = ( isset($this->_tpldata['switch_unsubscribe_group_input.']) ) ?  sizeof($this->_tpldata['switch_unsubscribe_group_input.']) : 0;
for ($switch_unsubscribe_group_input_i = 0; $switch_unsubscribe_group_input_i < $switch_unsubscribe_group_input_count; $switch_unsubscribe_group_input_i++)
{
 $switch_unsubscribe_group_input_item = &$this->_tpldata['switch_unsubscribe_group_input.'][$switch_unsubscribe_group_input_i];
 $switch_unsubscribe_group_input_item['S_ROW_COUNT'] = $switch_unsubscribe_group_input_i;
 $switch_unsubscribe_group_input_item['S_NUM_ROWS'] = $switch_unsubscribe_group_input_count;

?>
        <input class="mainoption" type="submit" name="unsub" value="<?php echo isset($this->vars['L_UNSUBSCRIBE_GROUP']) ? $this->vars['L_UNSUBSCRIBE_GROUP'] : $this->lang('L_UNSUBSCRIBE_GROUP'); ?>" />
        <?php

} // END switch_unsubscribe_group_input

if(isset($switch_unsubscribe_group_input_item)) { unset($switch_unsubscribe_group_input_item); } 

?>
        </span></td>
    </tr>
    <?php

$switch_mod_option_count = ( isset($this->_tpldata['switch_mod_option.']) ) ?  sizeof($this->_tpldata['switch_mod_option.']) : 0;
for ($switch_mod_option_i = 0; $switch_mod_option_i < $switch_mod_option_count; $switch_mod_option_i++)
{
 $switch_mod_option_item = &$this->_tpldata['switch_mod_option.'][$switch_mod_option_i];
 $switch_mod_option_item['S_ROW_COUNT'] = $switch_mod_option_i;
 $switch_mod_option_item['S_NUM_ROWS'] = $switch_mod_option_count;

?>
    <tr> 
        <td class="row1" width="20%"><span class="gen"><?php echo isset($this->vars['L_GROUP_TYPE']) ? $this->vars['L_GROUP_TYPE'] : $this->lang('L_GROUP_TYPE'); ?>:</span></td>
        <td class="row2"><span class="gen"><input type="radio" name="group_type" value="<?php echo isset($this->vars['S_GROUP_OPEN_TYPE']) ? $this->vars['S_GROUP_OPEN_TYPE'] : $this->lang('S_GROUP_OPEN_TYPE'); ?>" <?php echo isset($this->vars['S_GROUP_OPEN_CHECKED']) ? $this->vars['S_GROUP_OPEN_CHECKED'] : $this->lang('S_GROUP_OPEN_CHECKED'); ?> /> <?php echo isset($this->vars['L_GROUP_OPEN']) ? $this->vars['L_GROUP_OPEN'] : $this->lang('L_GROUP_OPEN'); ?> &nbsp;&nbsp;<input type="radio" name="group_type" value="<?php echo isset($this->vars['S_GROUP_CLOSED_TYPE']) ? $this->vars['S_GROUP_CLOSED_TYPE'] : $this->lang('S_GROUP_CLOSED_TYPE'); ?>" <?php echo isset($this->vars['S_GROUP_CLOSED_CHECKED']) ? $this->vars['S_GROUP_CLOSED_CHECKED'] : $this->lang('S_GROUP_CLOSED_CHECKED'); ?> />    <?php echo isset($this->vars['L_GROUP_CLOSED']) ? $this->vars['L_GROUP_CLOSED'] : $this->lang('L_GROUP_CLOSED'); ?> &nbsp;&nbsp;<input type="radio" name="group_type" value="<?php echo isset($this->vars['S_GROUP_HIDDEN_TYPE']) ? $this->vars['S_GROUP_HIDDEN_TYPE'] : $this->lang('S_GROUP_HIDDEN_TYPE'); ?>" <?php echo isset($this->vars['S_GROUP_HIDDEN_CHECKED']) ? $this->vars['S_GROUP_HIDDEN_CHECKED'] : $this->lang('S_GROUP_HIDDEN_CHECKED'); ?> />    <?php echo isset($this->vars['L_GROUP_HIDDEN']) ? $this->vars['L_GROUP_HIDDEN'] : $this->lang('L_GROUP_HIDDEN'); ?> &nbsp;&nbsp; <input class="mainoption" type="submit" name="groupstatus" value="<?php echo isset($this->vars['L_UPDATE']) ? $this->vars['L_UPDATE'] : $this->lang('L_UPDATE'); ?>" /></span></td>
    </tr>
    <?php

} // END switch_mod_option

if(isset($switch_mod_option_item)) { unset($switch_mod_option_item); } 

?>
</table>

<?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?>

</form>

<form action="<?php echo isset($this->vars['S_GROUPCP_ACTION']) ? $this->vars['S_GROUPCP_ACTION'] : $this->lang('S_GROUPCP_ACTION'); ?>" method="post" name="post">
<table width="100%" cellpadding="4" cellspacing="1" border="0" class="forumline">
    <tr> 
      <th class="thCornerL" height="25"><?php echo isset($this->vars['L_PM']) ? $this->vars['L_PM'] : $this->lang('L_PM'); ?></th>
      <th class="thTop"><?php echo isset($this->vars['L_USERNAME']) ? $this->vars['L_USERNAME'] : $this->lang('L_USERNAME'); ?></th>
      <th class="thTop"><?php echo isset($this->vars['L_POSTS']) ? $this->vars['L_POSTS'] : $this->lang('L_POSTS'); ?></th>
      <th class="thTop"><?php echo isset($this->vars['L_FROM']) ? $this->vars['L_FROM'] : $this->lang('L_FROM'); ?></th>
      <th class="thTop"><?php echo isset($this->vars['L_EMAIL']) ? $this->vars['L_EMAIL'] : $this->lang('L_EMAIL'); ?></th>
      <th class="thTop"><?php echo isset($this->vars['L_ONLINE_STATUS']) ? $this->vars['L_ONLINE_STATUS'] : $this->lang('L_ONLINE_STATUS'); ?></th>
      <th class="thTop"><?php echo isset($this->vars['L_WEBSITE']) ? $this->vars['L_WEBSITE'] : $this->lang('L_WEBSITE'); ?></th>
      <th class="thCornerR"><?php echo isset($this->vars['L_SELECT']) ? $this->vars['L_SELECT'] : $this->lang('L_SELECT'); ?></th>
    </tr>
    <tr> 
      <td class="catSides" colspan="9" height="28"><span class="cattitle"><?php echo isset($this->vars['L_GROUP_MODERATOR']) ? $this->vars['L_GROUP_MODERATOR'] : $this->lang('L_GROUP_MODERATOR'); ?></span></td>
    </tr>
    <tr> 
      <td class="row1" align="center"> <?php echo isset($this->vars['MOD_PM_IMG']) ? $this->vars['MOD_PM_IMG'] : $this->lang('MOD_PM_IMG'); ?> </td>
      <td class="row1" align="center"><span class="gen"><a href="<?php echo isset($this->vars['U_MOD_VIEWPROFILE']) ? $this->vars['U_MOD_VIEWPROFILE'] : $this->lang('U_MOD_VIEWPROFILE'); ?>" class="gen"><?php echo isset($this->vars['MOD_USERNAME']) ? $this->vars['MOD_USERNAME'] : $this->lang('MOD_USERNAME'); ?></a></span></td>
      <td class="row1" align="center" valign="middle"><span class="gen"><?php echo isset($this->vars['MOD_POSTS']) ? $this->vars['MOD_POSTS'] : $this->lang('MOD_POSTS'); ?></span></td>
      <td class="row1" align="center" valign="middle"><span class="gen"><?php echo isset($this->vars['MOD_FROM']) ? $this->vars['MOD_FROM'] : $this->lang('MOD_FROM'); ?></span></td>
      <td class="row1" align="center" valign="middle"><span class="gen"><?php echo isset($this->vars['MOD_EMAIL_IMG']) ? $this->vars['MOD_EMAIL_IMG'] : $this->lang('MOD_EMAIL_IMG'); ?></span></td>
      <td class="row1" align="center" valign="middle"><span class="gen"><?php echo isset($this->vars['MOD_ONLINE_STATUS']) ? $this->vars['MOD_ONLINE_STATUS'] : $this->lang('MOD_ONLINE_STATUS'); ?></span></td>
      <td class="row1" align="center"><?php echo isset($this->vars['MOD_WWW_IMG']) ? $this->vars['MOD_WWW_IMG'] : $this->lang('MOD_WWW_IMG'); ?></td>
      <td class="row1" align="center"> &nbsp; </td>
    </tr>
    <tr> 
      <td class="catSides" colspan="9" height="28"><span class="cattitle"><?php echo isset($this->vars['L_GROUP_MEMBERS']) ? $this->vars['L_GROUP_MEMBERS'] : $this->lang('L_GROUP_MEMBERS'); ?></span></td>
    </tr>
    <?php

$member_row_count = ( isset($this->_tpldata['member_row.']) ) ?  sizeof($this->_tpldata['member_row.']) : 0;
for ($member_row_i = 0; $member_row_i < $member_row_count; $member_row_i++)
{
 $member_row_item = &$this->_tpldata['member_row.'][$member_row_i];
 $member_row_item['S_ROW_COUNT'] = $member_row_i;
 $member_row_item['S_NUM_ROWS'] = $member_row_count;

?>
    <tr> 
      <td class="<?php echo isset($member_row_item['ROW_CLASS']) ? $member_row_item['ROW_CLASS'] : ''; ?>" align="center"> <?php echo isset($member_row_item['PM_IMG']) ? $member_row_item['PM_IMG'] : ''; ?> </td>
      <td class="<?php echo isset($member_row_item['ROW_CLASS']) ? $member_row_item['ROW_CLASS'] : ''; ?>" align="center"><span class="gen"><a href="<?php echo isset($member_row_item['U_VIEWPROFILE']) ? $member_row_item['U_VIEWPROFILE'] : ''; ?>" class="gen"><?php echo isset($member_row_item['USERNAME']) ? $member_row_item['USERNAME'] : ''; ?></a></span></td>
      <td class="<?php echo isset($member_row_item['ROW_CLASS']) ? $member_row_item['ROW_CLASS'] : ''; ?>" align="center"><span class="gen"><?php echo isset($member_row_item['POSTS']) ? $member_row_item['POSTS'] : ''; ?></span></td>
      <td class="<?php echo isset($member_row_item['ROW_CLASS']) ? $member_row_item['ROW_CLASS'] : ''; ?>" align="center"><span class="gen"> <?php echo isset($member_row_item['FROM']) ? $member_row_item['FROM'] : ''; ?> 
        </span></td>
      <td class="<?php echo isset($member_row_item['ROW_CLASS']) ? $member_row_item['ROW_CLASS'] : ''; ?>" align="center" valign="middle"><span class="gen"><?php echo isset($member_row_item['EMAIL_IMG']) ? $member_row_item['EMAIL_IMG'] : ''; ?></span></td>
      <td class="<?php echo isset($member_row_item['ROW_CLASS']) ? $member_row_item['ROW_CLASS'] : ''; ?>" align="center" valign="middle"><span class="gen"><?php echo isset($member_row_item['ONLINE_STATUS']) ? $member_row_item['ONLINE_STATUS'] : ''; ?></span></td>
      <td class="<?php echo isset($member_row_item['ROW_CLASS']) ? $member_row_item['ROW_CLASS'] : ''; ?>" align="center"> <?php echo isset($member_row_item['WWW_IMG']) ? $member_row_item['WWW_IMG'] : ''; ?></td>
      <td class="<?php echo isset($member_row_item['ROW_CLASS']) ? $member_row_item['ROW_CLASS'] : ''; ?>" align="center"> 
      <?php

$switch_mod_option_count = ( isset($member_row_item['switch_mod_option.']) ) ? sizeof($member_row_item['switch_mod_option.']) : 0;
for ($switch_mod_option_i = 0; $switch_mod_option_i < $switch_mod_option_count; $switch_mod_option_i++)
{
 $switch_mod_option_item = &$member_row_item['switch_mod_option.'][$switch_mod_option_i];
 $switch_mod_option_item['S_ROW_COUNT'] = $switch_mod_option_i;
 $switch_mod_option_item['S_NUM_ROWS'] = $switch_mod_option_count;

?>
      <input type="checkbox" name="members[]" value="<?php echo isset($member_row_item['USER_ID']) ? $member_row_item['USER_ID'] : ''; ?>" /> 
      <?php

} // END switch_mod_option

if(isset($switch_mod_option_item)) { unset($switch_mod_option_item); } 

?>
      </td>
    </tr>
    <?php

} // END member_row

if(isset($member_row_item)) { unset($member_row_item); } 

?>

    <?php

$switch_no_members_count = ( isset($this->_tpldata['switch_no_members.']) ) ?  sizeof($this->_tpldata['switch_no_members.']) : 0;
for ($switch_no_members_i = 0; $switch_no_members_i < $switch_no_members_count; $switch_no_members_i++)
{
 $switch_no_members_item = &$this->_tpldata['switch_no_members.'][$switch_no_members_i];
 $switch_no_members_item['S_ROW_COUNT'] = $switch_no_members_i;
 $switch_no_members_item['S_NUM_ROWS'] = $switch_no_members_count;

?>
    <tr> 
      <td class="row1" colspan="8" align="center"><span class="gen"><?php echo isset($this->vars['L_NO_MEMBERS']) ? $this->vars['L_NO_MEMBERS'] : $this->lang('L_NO_MEMBERS'); ?></span></td>
    </tr>
    <?php

} // END switch_no_members

if(isset($switch_no_members_item)) { unset($switch_no_members_item); } 

?>

    <?php

$switch_hidden_group_count = ( isset($this->_tpldata['switch_hidden_group.']) ) ?  sizeof($this->_tpldata['switch_hidden_group.']) : 0;
for ($switch_hidden_group_i = 0; $switch_hidden_group_i < $switch_hidden_group_count; $switch_hidden_group_i++)
{
 $switch_hidden_group_item = &$this->_tpldata['switch_hidden_group.'][$switch_hidden_group_i];
 $switch_hidden_group_item['S_ROW_COUNT'] = $switch_hidden_group_i;
 $switch_hidden_group_item['S_NUM_ROWS'] = $switch_hidden_group_count;

?>
    <tr> 
      <td class="row1" colspan="8" align="center"><span class="gen"><?php echo isset($this->vars['L_HIDDEN_MEMBERS']) ? $this->vars['L_HIDDEN_MEMBERS'] : $this->lang('L_HIDDEN_MEMBERS'); ?></span></td>
    </tr>
    <?php

} // END switch_hidden_group

if(isset($switch_hidden_group_item)) { unset($switch_hidden_group_item); } 

?>

    <?php

$switch_mod_option_count = ( isset($this->_tpldata['switch_mod_option.']) ) ?  sizeof($this->_tpldata['switch_mod_option.']) : 0;
for ($switch_mod_option_i = 0; $switch_mod_option_i < $switch_mod_option_count; $switch_mod_option_i++)
{
 $switch_mod_option_item = &$this->_tpldata['switch_mod_option.'][$switch_mod_option_i];
 $switch_mod_option_item['S_ROW_COUNT'] = $switch_mod_option_i;
 $switch_mod_option_item['S_NUM_ROWS'] = $switch_mod_option_count;

?>
    <tr>
        <td class="catBottom" colspan="9" align="right">
            <span class="cattitle"><input type="submit" name="remove" value="<?php echo isset($this->vars['L_REMOVE_SELECTED']) ? $this->vars['L_REMOVE_SELECTED'] : $this->lang('L_REMOVE_SELECTED'); ?>" class="mainoption" /></span>
        </td>
    </tr>
    <?php

} // END switch_mod_option

if(isset($switch_mod_option_item)) { unset($switch_mod_option_item); } 

?>
</table>

<table width="100%" cellspacing="2" border="0" align="center" cellpadding="2">
    <tr>
        <td align="left" valign="top">
        <?php

$switch_mod_option_count = ( isset($this->_tpldata['switch_mod_option.']) ) ?  sizeof($this->_tpldata['switch_mod_option.']) : 0;
for ($switch_mod_option_i = 0; $switch_mod_option_i < $switch_mod_option_count; $switch_mod_option_i++)
{
 $switch_mod_option_item = &$this->_tpldata['switch_mod_option.'][$switch_mod_option_i];
 $switch_mod_option_item['S_ROW_COUNT'] = $switch_mod_option_i;
 $switch_mod_option_item['S_NUM_ROWS'] = $switch_mod_option_count;

?>
        <span class="genmed"><input type="text"  class="post" name="username" maxlength="50" size="20" /> <input type="submit" name="add" value="<?php echo isset($this->vars['L_ADD_MEMBER']) ? $this->vars['L_ADD_MEMBER'] : $this->lang('L_ADD_MEMBER'); ?>" class="mainoption" /></span><br /><br />
        <?php

} // END switch_mod_option

if(isset($switch_mod_option_item)) { unset($switch_mod_option_item); } 

?>
        <span class="nav"><?php echo isset($this->vars['PAGE_NUMBER']) ? $this->vars['PAGE_NUMBER'] : $this->lang('PAGE_NUMBER'); ?></span></td>
        <td align="right" valign="top"><span class="gensmall"><?php echo isset($this->vars['S_TIMEZONE']) ? $this->vars['S_TIMEZONE'] : $this->lang('S_TIMEZONE'); ?></span><br /><span class="nav"><?php echo isset($this->vars['PAGINATION']) ? $this->vars['PAGINATION'] : $this->lang('PAGINATION'); ?></span></td>
    </tr>
</table>

<?php echo isset($this->vars['PENDING_USER_BOX']) ? $this->vars['PENDING_USER_BOX'] : $this->lang('PENDING_USER_BOX'); ?>

<?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?></form>

<table width="100%" cellspacing="2" border="0" align="center">
  <tr> 
    <td valign="top" align="right"><?php echo isset($this->vars['JUMPBOX']) ? $this->vars['JUMPBOX'] : $this->lang('JUMPBOX'); ?></td>
  </tr>
</table>