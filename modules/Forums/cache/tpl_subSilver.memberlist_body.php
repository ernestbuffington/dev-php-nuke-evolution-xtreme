<?php

// eXtreme Styles mod cache. Generated on Tue, 18 May 2021 19:51:04 +0000 (time=1621367464)

?><form method="post" action="<?php echo isset($this->vars['S_MODE_ACTION']) ? $this->vars['S_MODE_ACTION'] : $this->lang('S_MODE_ACTION'); ?>" name="post">
  <table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
    <tr> 
      <td align="left"><span class="nav"><a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>" class="nav"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a></span></td>
      <td align="right" nowrap="nowrap"><span class="genmed"><?php echo isset($this->vars['L_SELECT_SORT_METHOD']) ? $this->vars['L_SELECT_SORT_METHOD'] : $this->lang('L_SELECT_SORT_METHOD'); ?>:&nbsp;<?php echo isset($this->vars['S_MODE_SELECT']) ? $this->vars['S_MODE_SELECT'] : $this->lang('S_MODE_SELECT'); ?>&nbsp;&nbsp;<?php echo isset($this->vars['L_ORDER']) ? $this->vars['L_ORDER'] : $this->lang('L_ORDER'); ?>&nbsp;<?php echo isset($this->vars['S_ORDER_SELECT']) ? $this->vars['S_ORDER_SELECT'] : $this->lang('S_ORDER_SELECT'); ?>&nbsp;&nbsp; 
        <input type="submit" name="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" class="liteoption" />
        </span></td>
    </tr>
<tr> 
      <td align="left"><span class="nav">&nbsp;</span></td>
      <td align="right" nowrap="nowrap"><span class="genmed">
      <input type="text"  class="post" name="username" maxlength="25" size="25" tabindex="1" value="" />&nbsp;<input type="submit" name="submituser" value="<?php echo isset($this->vars['L_LOOK_UP']) ? $this->vars['L_LOOK_UP'] : $this->lang('L_LOOK_UP'); ?>" class="mainoption" />&nbsp;<input type="submit" name="usersubmit" value="<?php echo isset($this->vars['L_FIND_USERNAME']) ? $this->vars['L_FIND_USERNAME'] : $this->lang('L_FIND_USERNAME'); ?>" class="liteoption" onClick="window.open('<?php echo isset($this->vars['U_SEARCH_USER']) ? $this->vars['U_SEARCH_USER'] : $this->lang('U_SEARCH_USER'); ?>', '_phpbbsearch', 'HEIGHT=250,resizable=yes,WIDTH=400');return false;" />
      </span></td>
    </tr>    
  </table>
  <table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
    <tr> 
      <th height="25" class="thCornerL" nowrap="nowrap">#</th>
      <th class="thTop" nowrap="nowrap">&nbsp;</th>
      <th class="thTop" nowrap="nowrap"><?php echo isset($this->vars['L_USERNAME']) ? $this->vars['L_USERNAME'] : $this->lang('L_USERNAME'); ?></th>
      <th class="thTop" nowrap="nowrap"><?php echo isset($this->vars['L_EMAIL']) ? $this->vars['L_EMAIL'] : $this->lang('L_EMAIL'); ?></th>
      <th class="thTop" nowrap="nowrap"><?php echo isset($this->vars['L_FROM']) ? $this->vars['L_FROM'] : $this->lang('L_FROM'); ?></th>
      <th class="thTop" nowrap="nowrap"><?php echo isset($this->vars['L_JOINED']) ? $this->vars['L_JOINED'] : $this->lang('L_JOINED'); ?></th>
      <th class="thTop" nowrap="nowrap"><?php echo isset($this->vars['L_ONLINE_STATUS']) ? $this->vars['L_ONLINE_STATUS'] : $this->lang('L_ONLINE_STATUS'); ?></th>
      <th class="thTop" nowrap="nowrap"><?php echo isset($this->vars['L_POSTS']) ? $this->vars['L_POSTS'] : $this->lang('L_POSTS'); ?></th>
      <th class="thCornerR" nowrap="nowrap"><?php echo isset($this->vars['L_WEBSITE']) ? $this->vars['L_WEBSITE'] : $this->lang('L_WEBSITE'); ?></th>
    </tr>
    <?php

$no_username_count = ( isset($this->_tpldata['no_username.']) ) ?  sizeof($this->_tpldata['no_username.']) : 0;
for ($no_username_i = 0; $no_username_i < $no_username_count; $no_username_i++)
{
 $no_username_item = &$this->_tpldata['no_username.'][$no_username_i];
 $no_username_item['S_ROW_COUNT'] = $no_username_i;
 $no_username_item['S_NUM_ROWS'] = $no_username_count;

?>
    <tr> 
      <td class="row1" align="center" colspan="9"><span class="gen">&nbsp;<?php echo isset($no_username_item['NO_USER_ID_SPECIFIED']) ? $no_username_item['NO_USER_ID_SPECIFIED'] : ''; ?>&nbsp;</span></td>
    </tr>
    <?php

} // END no_username

if(isset($no_username_item)) { unset($no_username_item); } 

?>
    <?php

$memberrow_count = ( isset($this->_tpldata['memberrow.']) ) ?  sizeof($this->_tpldata['memberrow.']) : 0;
for ($memberrow_i = 0; $memberrow_i < $memberrow_count; $memberrow_i++)
{
 $memberrow_item = &$this->_tpldata['memberrow.'][$memberrow_i];
 $memberrow_item['S_ROW_COUNT'] = $memberrow_i;
 $memberrow_item['S_NUM_ROWS'] = $memberrow_count;

?>
    <tr> 
      <td class="<?php echo isset($memberrow_item['ROW_CLASS']) ? $memberrow_item['ROW_CLASS'] : ''; ?>" align="center"><span class="gen">&nbsp;<?php echo isset($memberrow_item['ROW_NUMBER']) ? $memberrow_item['ROW_NUMBER'] : ''; ?>&nbsp;</span></td>
      <td class="<?php echo isset($memberrow_item['ROW_CLASS']) ? $memberrow_item['ROW_CLASS'] : ''; ?>" align="center">&nbsp;<?php echo isset($memberrow_item['PM_IMG']) ? $memberrow_item['PM_IMG'] : ''; ?>&nbsp;</td>
      <td class="<?php echo isset($memberrow_item['ROW_CLASS']) ? $memberrow_item['ROW_CLASS'] : ''; ?>" align="center"><span class="gen"><a href="<?php echo isset($memberrow_item['U_VIEWPROFILE']) ? $memberrow_item['U_VIEWPROFILE'] : ''; ?>" class="gen"><?php echo isset($memberrow_item['USERNAME']) ? $memberrow_item['USERNAME'] : ''; ?></a></span></td>
      <td class="<?php echo isset($memberrow_item['ROW_CLASS']) ? $memberrow_item['ROW_CLASS'] : ''; ?>" align="center" valign="middle">&nbsp;<?php echo isset($memberrow_item['EMAIL_IMG']) ? $memberrow_item['EMAIL_IMG'] : ''; ?>&nbsp;</td>
      <td class="<?php echo isset($memberrow_item['ROW_CLASS']) ? $memberrow_item['ROW_CLASS'] : ''; ?>" align="center" valign="middle"><span class="gen"><?php echo isset($memberrow_item['FROM']) ? $memberrow_item['FROM'] : ''; ?></span></td>
      <td class="<?php echo isset($memberrow_item['ROW_CLASS']) ? $memberrow_item['ROW_CLASS'] : ''; ?>" align="center" valign="middle"><span class="gensmall"><?php echo isset($memberrow_item['JOINED']) ? $memberrow_item['JOINED'] : ''; ?></span></td>
      <td class="<?php echo isset($memberrow_item['ROW_CLASS']) ? $memberrow_item['ROW_CLASS'] : ''; ?>" align="center" valign="middle"><span class="gen"><?php echo isset($memberrow_item['ONLINE_STATUS']) ? $memberrow_item['ONLINE_STATUS'] : ''; ?></span></td>
      <td class="<?php echo isset($memberrow_item['ROW_CLASS']) ? $memberrow_item['ROW_CLASS'] : ''; ?>" align="center" valign="middle"><span class="gen"><?php echo isset($memberrow_item['POSTS']) ? $memberrow_item['POSTS'] : ''; ?></span></td>
      <td class="<?php echo isset($memberrow_item['ROW_CLASS']) ? $memberrow_item['ROW_CLASS'] : ''; ?>" align="center">&nbsp;<?php echo isset($memberrow_item['WWW_IMG']) ? $memberrow_item['WWW_IMG'] : ''; ?>&nbsp;</td>
    </tr>
    <?php

} // END memberrow

if(isset($memberrow_item)) { unset($memberrow_item); } 

?>
    <tr> 
      <td class="catbottom" colspan="9" height="28">&nbsp;</td>
    </tr>
  </table>
  <table width="100%" cellspacing="2" border="0" align="center" cellpadding="2">
    <tr> 
      <td align="right" valign="top"></td>
    </tr>
  </table>

<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tr> 
    <td><span class="nav"><?php echo isset($this->vars['PAGE_NUMBER']) ? $this->vars['PAGE_NUMBER'] : $this->lang('PAGE_NUMBER'); ?></span></td>
    <td align="right"><span class="gensmall"><?php echo isset($this->vars['S_TIMEZONE']) ? $this->vars['S_TIMEZONE'] : $this->lang('S_TIMEZONE'); ?></span><br /><span class="nav"><?php echo isset($this->vars['PAGINATION']) ? $this->vars['PAGINATION'] : $this->lang('PAGINATION'); ?></span></td>
  </tr>
</table></form>

<table width="100%" cellspacing="2" border="0" align="center">
  <tr> 
    <td valign="top" align="right"><?php echo isset($this->vars['JUMPBOX']) ? $this->vars['JUMPBOX'] : $this->lang('JUMPBOX'); ?></td>
  </tr>
</table>