<?php

// eXtreme Styles mod cache. Generated on Wed, 31 Aug 2022 17:42:41 +0000 (time=1661967761)

?><?php

$user_row_count = ( isset($this->_tpldata['user_row.']) ) ?  sizeof($this->_tpldata['user_row.']) : 0;
for ($user_row_i = 0; $user_row_i < $user_row_count; $user_row_i++)
{
 $user_row_item = &$this->_tpldata['user_row.'][$user_row_i];
 $user_row_item['S_ROW_COUNT'] = $user_row_i;
 $user_row_item['S_NUM_ROWS'] = $user_row_count;

?>
<script type="text/javascript">
  nuke_jq(function($)
  {
  	// var user_id = '<?php echo isset($user_row_item['USER_ID']) ? $user_row_item['USER_ID'] : ''; ?>';
  	$('#user<?php echo isset($user_row_item['USER_ID']) ? $user_row_item['USER_ID'] : ''; ?>').click(function() 
  	{
    	$('.user<?php echo isset($user_row_item['USER_ID']) ? $user_row_item['USER_ID'] : ''; ?>').toggle();
    });

  	$('toggle_button').click(function() 
  	{
    	$('.toogleme').toggle();
	});

  });
</script>
<?php

} // END user_row

if(isset($user_row_item)) { unset($user_row_item); } 

?>
<form action="<?php echo isset($this->vars['S_ACTION']) ? $this->vars['S_ACTION'] : $this->lang('S_ACTION'); ?>" method="post">
<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
  <tr>
    <td class="catHead" colspan="8" style="height: 35px; text-align: center; text-transform: uppercase;"><?php echo isset($this->vars['L_TITLE']) ? $this->vars['L_TITLE'] : $this->lang('L_TITLE'); ?></td>
  </tr>
  <tr>
    <td class="row1" colspan="8" style="width: 100%;">
      <table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
        <tr>
          <td class="row1" style="width: 100%;"><?php echo isset($this->vars['L_DESCRIPTION']) ? $this->vars['L_DESCRIPTION'] : $this->lang('L_DESCRIPTION'); ?></td>
          <td class="row1" align="right" nowrap="nowrap"><?php echo isset($this->vars['L_FILTER']) ? $this->vars['L_FILTER'] : $this->lang('L_FILTER'); ?></td>
          <td class="row1" nowrap="nowrap"><input type="text" size="20" value="<?php echo isset($this->vars['S_FILTER']) ? $this->vars['S_FILTER'] : $this->lang('S_FILTER'); ?>" name="filter"></td>
          <td class="row1" nowrap="nowrap">
            <select name="find_by" class="post">
              <option value="find_username"<?php echo isset($this->vars['SELECTED_FIND_USERNAME']) ? $this->vars['SELECTED_FIND_USERNAME'] : $this->lang('SELECTED_FIND_USERNAME'); ?>><?php echo isset($this->vars['L_SORT_USERNAME']) ? $this->vars['L_SORT_USERNAME'] : $this->lang('L_SORT_USERNAME'); ?></option>
              <option value="find_user_email"<?php echo isset($this->vars['SELECTED_FIND_EMAIL']) ? $this->vars['SELECTED_FIND_EMAIL'] : $this->lang('SELECTED_FIND_EMAIL'); ?>><?php echo isset($this->vars['L_SORT_EMAIL']) ? $this->vars['L_SORT_EMAIL'] : $this->lang('L_SORT_EMAIL'); ?></option>
              <option value="find_user_website"<?php echo isset($this->vars['SELECTED_FIND_WEBSITE']) ? $this->vars['SELECTED_FIND_WEBSITE'] : $this->lang('SELECTED_FIND_WEBSITE'); ?>><?php echo isset($this->vars['L_SORT_WEBSITE']) ? $this->vars['L_SORT_WEBSITE'] : $this->lang('L_SORT_WEBSITE'); ?></option>
		    </select>
		  </td>
          <td class="row1" align="right" nowrap="nowrap"><?php echo isset($this->vars['L_SORT_BY']) ? $this->vars['L_SORT_BY'] : $this->lang('L_SORT_BY'); ?></td>
          <td class="row1" nowrap="nowrap">
            <select name="sort" class="post">
              <option value="user_id"<?php echo isset($this->vars['SELECTED_USER_ID']) ? $this->vars['SELECTED_USER_ID'] : $this->lang('SELECTED_USER_ID'); ?>><?php echo isset($this->vars['L_SORT_USER_ID']) ? $this->vars['L_SORT_USER_ID'] : $this->lang('L_SORT_USER_ID'); ?></option>
              <option value="user_active"<?php echo isset($this->vars['SELECTED_ACTIVE']) ? $this->vars['SELECTED_ACTIVE'] : $this->lang('SELECTED_ACTIVE'); ?>><?php echo isset($this->vars['L_SORT_ACTIVE']) ? $this->vars['L_SORT_ACTIVE'] : $this->lang('L_SORT_ACTIVE'); ?></option>
              <option value="username"<?php echo isset($this->vars['SELECTED_USERNAME']) ? $this->vars['SELECTED_USERNAME'] : $this->lang('SELECTED_USERNAME'); ?>><?php echo isset($this->vars['L_SORT_USERNAME']) ? $this->vars['L_SORT_USERNAME'] : $this->lang('L_SORT_USERNAME'); ?></option>
              <option value="user_regdate"<?php echo isset($this->vars['SELECTED_JOINED']) ? $this->vars['SELECTED_JOINED'] : $this->lang('SELECTED_JOINED'); ?>><?php echo isset($this->vars['L_SORT_JOINED']) ? $this->vars['L_SORT_JOINED'] : $this->lang('L_SORT_JOINED'); ?></option>
              <option value="user_session_time"<?php echo isset($this->vars['SELECTED_ACTIVTY']) ? $this->vars['SELECTED_ACTIVTY'] : $this->lang('SELECTED_ACTIVTY'); ?>><?php echo isset($this->vars['L_SORT_ACTIVTY']) ? $this->vars['L_SORT_ACTIVTY'] : $this->lang('L_SORT_ACTIVTY'); ?></option>
              <option value="user_level"<?php echo isset($this->vars['SELECTED_USER_LEVEL']) ? $this->vars['SELECTED_USER_LEVEL'] : $this->lang('SELECTED_USER_LEVEL'); ?>><?php echo isset($this->vars['L_SORT_USER_LEVEL']) ? $this->vars['L_SORT_USER_LEVEL'] : $this->lang('L_SORT_USER_LEVEL'); ?></option>
              <option value="user_posts"<?php echo isset($this->vars['SELECTED_POSTS']) ? $this->vars['SELECTED_POSTS'] : $this->lang('SELECTED_POSTS'); ?>><?php echo isset($this->vars['L_SORT_POSTS']) ? $this->vars['L_SORT_POSTS'] : $this->lang('L_SORT_POSTS'); ?></option>
              <option value="user_rank"<?php echo isset($this->vars['SELECTED_RANK']) ? $this->vars['SELECTED_RANK'] : $this->lang('SELECTED_RANK'); ?>><?php echo isset($this->vars['L_SORT_RANK']) ? $this->vars['L_SORT_RANK'] : $this->lang('L_SORT_RANK'); ?></option>
              <option value="user_email"<?php echo isset($this->vars['SELECTED_EMAIL']) ? $this->vars['SELECTED_EMAIL'] : $this->lang('SELECTED_EMAIL'); ?>><?php echo isset($this->vars['L_SORT_EMAIL']) ? $this->vars['L_SORT_EMAIL'] : $this->lang('L_SORT_EMAIL'); ?></option>
              <option value="user_website"<?php echo isset($this->vars['SELECTED_WEBSITE']) ? $this->vars['SELECTED_WEBSITE'] : $this->lang('SELECTED_WEBSITE'); ?>><?php echo isset($this->vars['L_SORT_WEBSITE']) ? $this->vars['L_SORT_WEBSITE'] : $this->lang('L_SORT_WEBSITE'); ?></option>
		    </select>
		  </td>
          <td class="row1" nowrap="nowrap">
            <select name="order" class="post">
              <option value="ASC"<?php echo isset($this->vars['SELECTED_ASCENDING']) ? $this->vars['SELECTED_ASCENDING'] : $this->lang('SELECTED_ASCENDING'); ?>><?php echo isset($this->vars['L_ASCENDING']) ? $this->vars['L_ASCENDING'] : $this->lang('L_ASCENDING'); ?></option>
              <option value="DESC"<?php echo isset($this->vars['SELECTED_DESCENDING']) ? $this->vars['SELECTED_DESCENDING'] : $this->lang('SELECTED_DESCENDING'); ?>><?php echo isset($this->vars['L_DESCENDING']) ? $this->vars['L_DESCENDING'] : $this->lang('L_DESCENDING'); ?></option>
            </select>
          </td>
          <td class="row1" nowrap="nowrap"><?php echo isset($this->vars['L_SHOW']) ? $this->vars['L_SHOW'] : $this->lang('L_SHOW'); ?></td>
          <td class="row1" nowrap="nowrap"><input type="text" size="5" value="<?php echo isset($this->vars['S_SHOW']) ? $this->vars['S_SHOW'] : $this->lang('S_SHOW'); ?>" name="show"></td>
          <td class="row1" nowrap="nowrap"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?><input type="submit" value="<?php echo isset($this->vars['S_SORT']) ? $this->vars['S_SORT'] : $this->lang('S_SORT'); ?>" name="change_sort" class="liteoption"></td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td class="catHead" colspan="8" style="height: 35px; text-align: center; text-transform: uppercase;">&nbsp;</td>
  </tr>
  <tr>
    <td class="row1" colspan="8">
      <table style="width: 100%;" cellpadding="4" cellspacing="1" border="0" class="forumline">  
        <tr>
          <?php

$alphanumsearch_count = ( isset($this->_tpldata['alphanumsearch.']) ) ?  sizeof($this->_tpldata['alphanumsearch.']) : 0;
for ($alphanumsearch_i = 0; $alphanumsearch_i < $alphanumsearch_count; $alphanumsearch_i++)
{
 $alphanumsearch_item = &$this->_tpldata['alphanumsearch.'][$alphanumsearch_i];
 $alphanumsearch_item['S_ROW_COUNT'] = $alphanumsearch_i;
 $alphanumsearch_item['S_NUM_ROWS'] = $alphanumsearch_count;

?>
          <td class="catHead" style="height: 35px; text-align: center; width: <?php echo isset($alphanumsearch_item['SEARCH_SIZE']) ? $alphanumsearch_item['SEARCH_SIZE'] : ''; ?>;"><a href="<?php echo isset($alphanumsearch_item['SEARCH_LINK']) ? $alphanumsearch_item['SEARCH_LINK'] : ''; ?>" class="genmed"><?php echo isset($alphanumsearch_item['SEARCH_TERM']) ? $alphanumsearch_item['SEARCH_TERM'] : ''; ?></a></td>
          <?php

} // END alphanumsearch

if(isset($alphanumsearch_item)) { unset($alphanumsearch_item); } 

?>
        </tr>
      </table>
    </td>    
  </tr> 
  <tr>
    <td class="catHead" colspan="2" style="height: 35px; text-align: center; width: 13%;">&nbsp;</td>
    <td class="catHead" style="height: 35px; text-align: center; width: 25%;"><?php echo isset($this->vars['L_USERNAME']) ? $this->vars['L_USERNAME'] : $this->lang('L_USERNAME'); ?></td>
    <td class="catHead" style="height: 35px; text-align: center; width: 6%;"><?php echo isset($this->vars['L_ACTIVE']) ? $this->vars['L_ACTIVE'] : $this->lang('L_ACTIVE'); ?></td>
    <td class="catHead" style="height: 35px; text-align: center; width: 15%;"><?php echo isset($this->vars['L_JOINED']) ? $this->vars['L_JOINED'] : $this->lang('L_JOINED'); ?></td>
    <td class="catHead" style="height: 35px; text-align: center; width: 15%;"><?php echo isset($this->vars['L_ACTIVTY']) ? $this->vars['L_ACTIVTY'] : $this->lang('L_ACTIVTY'); ?></td>
    <td class="catHead" style="height: 35px; text-align: center; width: 6%;"><?php echo isset($this->vars['L_POSTS']) ? $this->vars['L_POSTS'] : $this->lang('L_POSTS'); ?></td>
    <td class="catHead" style="height: 35px; text-align: center; width: 20%;"><?php echo isset($this->vars['L_WEBSITE']) ? $this->vars['L_WEBSITE'] : $this->lang('L_WEBSITE'); ?></td>
  </tr>
  <?php

$user_row_count = ( isset($this->_tpldata['user_row.']) ) ?  sizeof($this->_tpldata['user_row.']) : 0;
for ($user_row_i = 0; $user_row_i < $user_row_count; $user_row_i++)
{
 $user_row_item = &$this->_tpldata['user_row.'][$user_row_i];
 $user_row_item['S_ROW_COUNT'] = $user_row_i;
 $user_row_item['S_NUM_ROWS'] = $user_row_count;

?>
  <tr>
    <td class="row1" style="height: 35px; text-align: center;"><input type="checkbox" name="<?php echo isset($this->vars['S_USER_VARIABLE']) ? $this->vars['S_USER_VARIABLE'] : $this->lang('S_USER_VARIABLE'); ?>[]" value="<?php echo isset($user_row_item['USER_ID']) ? $user_row_item['USER_ID'] : ''; ?>"></td>
    <td class="row1" style="height: 35px; text-align: center;"><a href="javascript:void(0);" id="user<?php echo isset($user_row_item['USER_ID']) ? $user_row_item['USER_ID'] : ''; ?>"><?php echo isset($this->vars['L_OPEN_CLOSE']) ? $this->vars['L_OPEN_CLOSE'] : $this->lang('L_OPEN_CLOSE'); ?></a></td>
    <td class="row1" style="height: 35px;"><a href="<?php echo isset($user_row_item['U_PROFILE']) ? $user_row_item['U_PROFILE'] : ''; ?>" target="_blank" <?php echo isset($user_row_item['STYLE_COLOR']) ? $user_row_item['STYLE_COLOR'] : ''; ?>><?php echo isset($user_row_item['USERNAME']) ? $user_row_item['USERNAME'] : ''; ?></a></td>
    <td class="row1" style="height: 35px; text-align: center;"><?php echo isset($user_row_item['ACTIVE']) ? $user_row_item['ACTIVE'] : ''; ?></td>
    <td class="row1" style="height: 35px;"><?php echo isset($user_row_item['JOINED']) ? $user_row_item['JOINED'] : ''; ?></td>
    <td class="row1" style="height: 35px;"><?php echo isset($user_row_item['LAST_ACTIVITY']) ? $user_row_item['LAST_ACTIVITY'] : ''; ?></td>
    <td class="row1" style="height: 35px; text-align: center;"><?php echo isset($user_row_item['POSTS']) ? $user_row_item['POSTS'] : ''; ?></td>
    <td class="row1" style="height: 35px;"><?php echo isset($user_row_item['U_WEBSITE']) ? $user_row_item['U_WEBSITE'] : ''; ?></td>
  </tr>

  <tr class="user<?php echo isset($user_row_item['USER_ID']) ? $user_row_item['USER_ID'] : ''; ?> toogleme" style="display: none;">
    <!-- <td class="<?php echo isset($user_row_item['ROW_CLASS']) ? $user_row_item['ROW_CLASS'] : ''; ?>" colspan="1">&nbsp;</td> -->
    <td class="<?php echo isset($user_row_item['ROW_CLASS']) ? $user_row_item['ROW_CLASS'] : ''; ?>" colspan="8">
      <table style="width: 100%;" cellpadding="4" cellspacing="1" border="0" class="forumline">
        <tr>
          <td class="<?php echo isset($user_row_item['ROW_CLASS']) ? $user_row_item['ROW_CLASS'] : ''; ?>" style="height: 35px; width: 33.3%;"><span style="font-weight: bold;"><?php echo isset($this->vars['L_RANK']) ? $this->vars['L_RANK'] : $this->lang('L_RANK'); ?>:</span> <?php echo isset($user_row_item['RANK']) ? $user_row_item['RANK'] : ''; ?> &nbsp; <?php echo isset($user_row_item['I_RANK']) ? $user_row_item['I_RANK'] : ''; ?></td>
          <td class="<?php echo isset($user_row_item['ROW_CLASS']) ? $user_row_item['ROW_CLASS'] : ''; ?>" style="height: 35px; width: 33.3%;"><span style="font-weight: bold;"><?php echo isset($this->vars['L_GROUP']) ? $this->vars['L_GROUP'] : $this->lang('L_GROUP'); ?>:</span>
            <?php

$group_row_count = ( isset($user_row_item['group_row.']) ) ? sizeof($user_row_item['group_row.']) : 0;
for ($group_row_i = 0; $group_row_i < $group_row_count; $group_row_i++)
{
 $group_row_item = &$user_row_item['group_row.'][$group_row_i];
 $group_row_item['S_ROW_COUNT'] = $group_row_i;
 $group_row_item['S_NUM_ROWS'] = $group_row_count;

?>
              <a href="<?php echo isset($group_row_item['U_GROUP']) ? $group_row_item['U_GROUP'] : ''; ?>" class="gen" target="_blank"><?php echo isset($group_row_item['GROUP_NAME']) ? $group_row_item['GROUP_NAME'] : ''; ?></a> (<?php echo isset($group_row_item['GROUP_STATUS']) ? $group_row_item['GROUP_STATUS'] : ''; ?>)<br />
            <?php

} // END group_row

if(isset($group_row_item)) { unset($group_row_item); } 

?>
            <?php

$no_group_row_count = ( isset($user_row_item['no_group_row.']) ) ? sizeof($user_row_item['no_group_row.']) : 0;
for ($no_group_row_i = 0; $no_group_row_i < $no_group_row_count; $no_group_row_i++)
{
 $no_group_row_item = &$user_row_item['no_group_row.'][$no_group_row_i];
 $no_group_row_item['S_ROW_COUNT'] = $no_group_row_i;
 $no_group_row_item['S_NUM_ROWS'] = $no_group_row_count;

?>
              <?php echo isset($no_group_row_item['L_NONE']) ? $no_group_row_item['L_NONE'] : ''; ?><br />
            <?php

} // END no_group_row

if(isset($no_group_row_item)) { unset($no_group_row_item); } 

?>
          </td>
          <td class="<?php echo isset($user_row_item['ROW_CLASS']) ? $user_row_item['ROW_CLASS'] : ''; ?>" style="height: 35px; width: 33.3%;"><span style="font-weight: bold;"><?php echo isset($this->vars['L_POSTS']) ? $this->vars['L_POSTS'] : $this->lang('L_POSTS'); ?>:</span> <?php echo isset($user_row_item['POSTS']) ? $user_row_item['POSTS'] : ''; ?> &nbsp; <a href="<?php echo isset($user_row_item['U_SEARCH']) ? $user_row_item['U_SEARCH'] : ''; ?>" target="_blank"><?php echo isset($this->vars['L_FIND_ALL_POSTS']) ? $this->vars['L_FIND_ALL_POSTS'] : $this->lang('L_FIND_ALL_POSTS'); ?></a></span></td>
        </tr>
        <tr>
          <td class="<?php echo isset($user_row_item['ROW_CLASS']) ? $user_row_item['ROW_CLASS'] : ''; ?>" colspan="3" style="height: 35px;"><span style="font-weight: bold;"><?php echo isset($this->vars['L_WEBSITE']) ? $this->vars['L_WEBSITE'] : $this->lang('L_WEBSITE'); ?>:</span> <a href="<?php echo isset($user_row_item['U_WEBSITE']) ? $user_row_item['U_WEBSITE'] : ''; ?>" target="_blank"><?php echo isset($user_row_item['U_WEBSITE']) ? $user_row_item['U_WEBSITE'] : ''; ?></a></span></td>
        </tr>
        <tr>
          <td class="<?php echo isset($user_row_item['ROW_CLASS']) ? $user_row_item['ROW_CLASS'] : ''; ?>"><a href="<?php echo isset($user_row_item['U_MANAGE']) ? $user_row_item['U_MANAGE'] : ''; ?>"><?php echo isset($this->vars['L_MANAGE']) ? $this->vars['L_MANAGE'] : $this->lang('L_MANAGE'); ?></a><br /><a href="<?php echo isset($user_row_item['U_PERMISSIONS']) ? $user_row_item['U_PERMISSIONS'] : ''; ?>"><?php echo isset($this->vars['L_PERMISSIONS']) ? $this->vars['L_PERMISSIONS'] : $this->lang('L_PERMISSIONS'); ?></a><br /><a href="mailto:<?php echo isset($user_row_item['EMAIL']) ? $user_row_item['EMAIL'] : ''; ?>"><?php echo isset($this->vars['L_EMAIL']) ? $this->vars['L_EMAIL'] : $this->lang('L_EMAIL'); ?> [ <?php echo isset($user_row_item['EMAIL']) ? $user_row_item['EMAIL'] : ''; ?> ]</a><br /><a href="<?php echo isset($user_row_item['U_PM']) ? $user_row_item['U_PM'] : ''; ?>"><?php echo isset($this->vars['L_PM']) ? $this->vars['L_PM'] : $this->lang('L_PM'); ?></a></td>
          <td colspan="2" class="<?php echo isset($user_row_item['ROW_CLASS']) ? $user_row_item['ROW_CLASS'] : ''; ?>"><?php echo isset($user_row_item['I_AVATAR']) ? $user_row_item['I_AVATAR'] : ''; ?></td>
        </tr>
      </table>
    </td>
  </tr>
  <?php

} // END user_row

if(isset($user_row_item)) { unset($user_row_item); } 

?>
  <tr>
    <td class="catbottom" colspan="5">
      <select name="mode" class="post">
        <option value=""><?php echo isset($this->vars['L_SELECT']) ? $this->vars['L_SELECT'] : $this->lang('L_SELECT'); ?></option>
        <option value="delete"><?php echo isset($this->vars['L_DELETE']) ? $this->vars['L_DELETE'] : $this->lang('L_DELETE'); ?></option>
        <option value="ban"><?php echo isset($this->vars['L_BAN']) ? $this->vars['L_BAN'] : $this->lang('L_BAN'); ?></option>
        <option value="activate"><?php echo isset($this->vars['L_ACTIVATE_DEACTIVATE']) ? $this->vars['L_ACTIVATE_DEACTIVATE'] : $this->lang('L_ACTIVATE_DEACTIVATE'); ?></option>
        <option value="group"><?php echo isset($this->vars['L_ADD_GROUP']) ? $this->vars['L_ADD_GROUP'] : $this->lang('L_ADD_GROUP'); ?></option>
      </select>
      <input type="submit" name="go" value="<?php echo isset($this->vars['L_GO']) ? $this->vars['L_GO'] : $this->lang('L_GO'); ?>" class="mainoption">
    </td>
    <td class="catbottom" colspan="1" style="text-align: center;"><?php echo isset($this->vars['PAGE_NUMBER']) ? $this->vars['PAGE_NUMBER'] : $this->lang('PAGE_NUMBER'); ?></td>
    <td class="catbottom" colspan="2" style="text-align: right;"><?php echo isset($this->vars['PAGINATION']) ? $this->vars['PAGINATION'] : $this->lang('PAGINATION'); ?></td>
  </tr>
</table>

<!-- <table width="100%" cellpadding="3" cellspacing="1" border="0">
	<tr>
		<td align="left" width="50%"><span class="gen"><?php echo isset($this->vars['PAGE_NUMBER']) ? $this->vars['PAGE_NUMBER'] : $this->lang('PAGE_NUMBER'); ?></span></td>
		<td align="right" width="50%"><span class="gen"><?php echo isset($this->vars['PAGINATION']) ? $this->vars['PAGINATION'] : $this->lang('PAGINATION'); ?></span></td>
	</tr>
</table> -->
</form>

<br clear="all" />
