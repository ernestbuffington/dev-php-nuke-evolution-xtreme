<?php

// eXtreme Styles mod cache. Generated on Sat, 01 May 2021 23:52:58 +0000 (time=1619913178)

?><div id="overDiv" style="position:absolute; visibility:hidden; z-index:1000;"></div>
<script type="text/javascript" language="JavaScript" src="../templates/subSilver/images/auth_overall_forum/overlib.js"></script>
<script type="text/javascript" language="JavaScript" src="../templates/subSilver/images/auth_overall_forum/admin_overall_forumauth.js"></script>
<h1><?php echo isset($this->vars['L_FORUM_TITLE']) ? $this->vars['L_FORUM_TITLE'] : $this->lang('L_FORUM_TITLE'); ?></h1>

<p><?php echo isset($this->vars['L_FORUM_EXPLAIN']) ? $this->vars['L_FORUM_EXPLAIN'] : $this->lang('L_FORUM_EXPLAIN'); ?></p>

<form method="post" action="<?php echo isset($this->vars['S_FORUM_ACTION']) ? $this->vars['S_FORUM_ACTION'] : $this->lang('S_FORUM_ACTION'); ?>"><table width="100%" cellpadding="4" cellspacing="1" border="0" class="forumline" align="center">
	<tr>
		<th class="thHead" colspan="14"><?php echo isset($this->vars['L_FORUM_TITLE']) ? $this->vars['L_FORUM_TITLE'] : $this->lang('L_FORUM_TITLE'); ?></th>
	</tr>
	<tr>
	  <td class="row1" align="center" valign="middle" colspan="14">
	  		<table width="50%" cellpadding="4" cellspacing="1" border="0" class="forumline" align="center">
				<tr>
					<td class="row1">
						<?php

$authedit_count = ( isset($this->_tpldata['authedit.']) ) ?  sizeof($this->_tpldata['authedit.']) : 0;
for ($authedit_i = 0; $authedit_i < $authedit_count; $authedit_i++)
{
 $authedit_item = &$this->_tpldata['authedit.'][$authedit_i];
 $authedit_item['S_ROW_COUNT'] = $authedit_i;
 $authedit_item['S_NUM_ROWS'] = $authedit_count;

?>
						<a href="javascript:void(0);" onClick="return start_edit('<?php echo isset($authedit_item['VALUE']) ? $authedit_item['VALUE'] : ''; ?>', '<?php echo isset($authedit_item['NAME']) ? $authedit_item['NAME'] : ''; ?>');" class="gen"><img src="../templates/subSilver/images/auth_overall_forum/<?php echo isset($authedit_item['NAME']) ? $authedit_item['NAME'] : ''; ?>.gif">&nbsp;<?php echo isset($authedit_item['NAME']) ? $authedit_item['NAME'] : ''; ?></a><br />
						<?php

} // END authedit

if(isset($authedit_item)) { unset($authedit_item); } 

?>
					</td><td class="row2">
						<a href="javascript:void(0);" onClick="return start_restore();" class="gen"><?php echo isset($this->vars['L_FORUM_OVERALL_RESTORE']) ? $this->vars['L_FORUM_OVERALL_RESTORE'] : $this->lang('L_FORUM_OVERALL_RESTORE'); ?></a><br /><br />
						<a href="javascript:void(0);" onClick="return stop_edit();" class="gen"><?php echo isset($this->vars['L_FORUM_OVERALL_STOP']) ? $this->vars['L_FORUM_OVERALL_STOP'] : $this->lang('L_FORUM_OVERALL_STOP'); ?></a>
					</td>
				</tr>
				<tr>
					<td class="row3" colspan="2"><span class="gensmall"><?php echo isset($this->vars['L_FORUM_EXPLAIN_EDIT']) ? $this->vars['L_FORUM_EXPLAIN_EDIT'] : $this->lang('L_FORUM_EXPLAIN_EDIT'); ?></span></td>
				</tr>
			</table>
		</td>
	</tr>
	<?php

$catrow_count = ( isset($this->_tpldata['catrow.']) ) ?  sizeof($this->_tpldata['catrow.']) : 0;
for ($catrow_i = 0; $catrow_i < $catrow_count; $catrow_i++)
{
 $catrow_item = &$this->_tpldata['catrow.'][$catrow_i];
 $catrow_item['S_ROW_COUNT'] = $catrow_i;
 $catrow_item['S_NUM_ROWS'] = $catrow_count;

?>
	<tr>
		<td class="catLeft" width="100%"><span class="cattitle"><b><a href="<?php echo isset($catrow_item['U_VIEWCAT']) ? $catrow_item['U_VIEWCAT'] : ''; ?>"><?php echo isset($catrow_item['CAT_DESC']) ? $catrow_item['CAT_DESC'] : ''; ?></a></b></span></td>
		<td class="cat" align="center" valign="middle"><span class="gen">View</span></td>
		<td class="cat" align="center" valign="middle"><span class="gen">Read</span></td>
		<td class="cat" align="center" valign="middle"><span class="gen">Post</span></td>
		<td class="cat" align="center" valign="middle"><span class="gen">Reply</span></td>
		<td class="cat" align="center" valign="middle"><span class="gen">Edit</span></td>
		<td class="cat" align="center" valign="middle"><span class="gen">Del</span></td>
		<td class="cat" align="center" valign="middle"><span class="gen">Sticky</span></td>
		<td class="cat" align="center" valign="middle"><span class="gen">Ann</span></td>
		<td class="cat" align="center" valign="middle"><span class="gen">Global</span></td>
		<td class="cat" align="center" valign="middle"><span class="gen">Vote</span></td>
		<td class="cat" align="center" valign="middle"><span class="gen">Poll </span></td>
		<td class="cat" align="center" valign="middle"><span class="gen">Attach</span></td>
		<td class="cat" align="center" valign="middle"><span class="gen">Download</span></td>
	</tr>
	<?php

$forumrow_count = ( isset($catrow_item['forumrow.']) ) ? sizeof($catrow_item['forumrow.']) : 0;
for ($forumrow_i = 0; $forumrow_i < $forumrow_count; $forumrow_i++)
{
 $forumrow_item = &$catrow_item['forumrow.'][$forumrow_i];
 $forumrow_item['S_ROW_COUNT'] = $forumrow_i;
 $forumrow_item['S_NUM_ROWS'] = $forumrow_count;

?>
	<tr> 
		<td class="row1"><span class="gen"><?php echo isset($forumrow_item['FORUM_NAME']) ? $forumrow_item['FORUM_NAME'] : ''; ?></span></td>
		<td class="row2"><img src="../templates/subSilver/images/auth_overall_forum/<?php echo isset($forumrow_item['AUTH_VIEW_IMG']) ? $forumrow_item['AUTH_VIEW_IMG'] : ''; ?>.gif" onClick="return change_auth(this,'<?php echo isset($forumrow_item['AUTH_VIEW_IMG']) ? $forumrow_item['AUTH_VIEW_IMG'] : ''; ?>',<?php echo isset($forumrow_item['FORUM_ID']) ? $forumrow_item['FORUM_ID'] : ''; ?>,'VIEW');"><input type="hidden" id="auth_<?php echo isset($forumrow_item['FORUM_ID']) ? $forumrow_item['FORUM_ID'] : ''; ?>_VIEW" name="auth[<?php echo isset($forumrow_item['FORUM_ID']) ? $forumrow_item['FORUM_ID'] : ''; ?>][VIEW]"></td>
		<td class="row2"><img src="../templates/subSilver/images/auth_overall_forum/<?php echo isset($forumrow_item['AUTH_READ_IMG']) ? $forumrow_item['AUTH_READ_IMG'] : ''; ?>.gif"  onClick="return change_auth(this,'<?php echo isset($forumrow_item['AUTH_READ_IMG']) ? $forumrow_item['AUTH_READ_IMG'] : ''; ?>',<?php echo isset($forumrow_item['FORUM_ID']) ? $forumrow_item['FORUM_ID'] : ''; ?>,'READ');"><input type="hidden" id="auth_<?php echo isset($forumrow_item['FORUM_ID']) ? $forumrow_item['FORUM_ID'] : ''; ?>_READ" name="auth[<?php echo isset($forumrow_item['FORUM_ID']) ? $forumrow_item['FORUM_ID'] : ''; ?>][READ]"></td>
		<td class="row2"><img src="../templates/subSilver/images/auth_overall_forum/<?php echo isset($forumrow_item['AUTH_POST_IMG']) ? $forumrow_item['AUTH_POST_IMG'] : ''; ?>.gif" onClick="return change_auth(this,'<?php echo isset($forumrow_item['AUTH_POST_IMG']) ? $forumrow_item['AUTH_POST_IMG'] : ''; ?>',<?php echo isset($forumrow_item['FORUM_ID']) ? $forumrow_item['FORUM_ID'] : ''; ?>,'POST');"><input type="hidden" id="auth_<?php echo isset($forumrow_item['FORUM_ID']) ? $forumrow_item['FORUM_ID'] : ''; ?>_POST" name="auth[<?php echo isset($forumrow_item['FORUM_ID']) ? $forumrow_item['FORUM_ID'] : ''; ?>][POST]"></td>
		<td class="row2"><img src="../templates/subSilver/images/auth_overall_forum/<?php echo isset($forumrow_item['AUTH_REPLY_IMG']) ? $forumrow_item['AUTH_REPLY_IMG'] : ''; ?>.gif" onClick="return change_auth(this,'<?php echo isset($forumrow_item['AUTH_REPLY_IMG']) ? $forumrow_item['AUTH_REPLY_IMG'] : ''; ?>',<?php echo isset($forumrow_item['FORUM_ID']) ? $forumrow_item['FORUM_ID'] : ''; ?>,'REPLY');"><input type="hidden" id="auth_<?php echo isset($forumrow_item['FORUM_ID']) ? $forumrow_item['FORUM_ID'] : ''; ?>_REPLY" name="auth[<?php echo isset($forumrow_item['FORUM_ID']) ? $forumrow_item['FORUM_ID'] : ''; ?>][REPLY]"></td>
		<td class="row2"><img src="../templates/subSilver/images/auth_overall_forum/<?php echo isset($forumrow_item['AUTH_EDIT_IMG']) ? $forumrow_item['AUTH_EDIT_IMG'] : ''; ?>.gif" onClick="return change_auth(this,'<?php echo isset($forumrow_item['AUTH_EDIT_IMG']) ? $forumrow_item['AUTH_EDIT_IMG'] : ''; ?>',<?php echo isset($forumrow_item['FORUM_ID']) ? $forumrow_item['FORUM_ID'] : ''; ?>,'EDIT');"><input type="hidden" id="auth_<?php echo isset($forumrow_item['FORUM_ID']) ? $forumrow_item['FORUM_ID'] : ''; ?>_EDIT" name="auth[<?php echo isset($forumrow_item['FORUM_ID']) ? $forumrow_item['FORUM_ID'] : ''; ?>][EDIT]"></td>
		<td class="row2"><img src="../templates/subSilver/images/auth_overall_forum/<?php echo isset($forumrow_item['AUTH_DELETE_IMG']) ? $forumrow_item['AUTH_DELETE_IMG'] : ''; ?>.gif" onClick="return change_auth(this,'<?php echo isset($forumrow_item['AUTH_DELETE_IMG']) ? $forumrow_item['AUTH_DELETE_IMG'] : ''; ?>',<?php echo isset($forumrow_item['FORUM_ID']) ? $forumrow_item['FORUM_ID'] : ''; ?>,'DELETE');"><input type="hidden" id="auth_<?php echo isset($forumrow_item['FORUM_ID']) ? $forumrow_item['FORUM_ID'] : ''; ?>_DELETE" name="auth[<?php echo isset($forumrow_item['FORUM_ID']) ? $forumrow_item['FORUM_ID'] : ''; ?>][DELETE]"></td>
		<td class="row2"><img src="../templates/subSilver/images/auth_overall_forum/<?php echo isset($forumrow_item['AUTH_STICKY_IMG']) ? $forumrow_item['AUTH_STICKY_IMG'] : ''; ?>.gif" onClick="return change_auth(this,'<?php echo isset($forumrow_item['AUTH_STICKY_IMG']) ? $forumrow_item['AUTH_STICKY_IMG'] : ''; ?>',<?php echo isset($forumrow_item['FORUM_ID']) ? $forumrow_item['FORUM_ID'] : ''; ?>,'STICKY');"><input type="hidden" id="auth_<?php echo isset($forumrow_item['FORUM_ID']) ? $forumrow_item['FORUM_ID'] : ''; ?>_STICKY" name="auth[<?php echo isset($forumrow_item['FORUM_ID']) ? $forumrow_item['FORUM_ID'] : ''; ?>][STICKY]"></td>
		<td class="row2"><img src="../templates/subSilver/images/auth_overall_forum/<?php echo isset($forumrow_item['AUTH_ANNOUNCE_IMG']) ? $forumrow_item['AUTH_ANNOUNCE_IMG'] : ''; ?>.gif" onClick="return change_auth(this,'<?php echo isset($forumrow_item['AUTH_ANNOUNCE_IMG']) ? $forumrow_item['AUTH_ANNOUNCE_IMG'] : ''; ?>',<?php echo isset($forumrow_item['FORUM_ID']) ? $forumrow_item['FORUM_ID'] : ''; ?>,'ANNOUNCE');"><input type="hidden" id="auth_<?php echo isset($forumrow_item['FORUM_ID']) ? $forumrow_item['FORUM_ID'] : ''; ?>_ANNOUNCE" name="auth[<?php echo isset($forumrow_item['FORUM_ID']) ? $forumrow_item['FORUM_ID'] : ''; ?>][ANNOUNCE]"></td>
		<td class="row2"><img src="../templates/subSilver/images/auth_overall_forum/<?php echo isset($forumrow_item['AUTH_ANNOUNCE_IMG']) ? $forumrow_item['AUTH_ANNOUNCE_IMG'] : ''; ?>.gif" onClick="return change_auth(this,'<?php echo isset($forumrow_item['AUTH_ANNOUNCE_IMG']) ? $forumrow_item['AUTH_ANNOUNCE_IMG'] : ''; ?>',<?php echo isset($forumrow_item['FORUM_ID']) ? $forumrow_item['FORUM_ID'] : ''; ?>,'GLOBALANNOUNCE');"><input type="hidden" id="auth_<?php echo isset($forumrow_item['FORUM_ID']) ? $forumrow_item['FORUM_ID'] : ''; ?>_GLOBALANNOUNCE" name="auth[<?php echo isset($forumrow_item['FORUM_ID']) ? $forumrow_item['FORUM_ID'] : ''; ?>][GLOBALANNOUNCE]"></td>
		<td class="row2"><img src="../templates/subSilver/images/auth_overall_forum/<?php echo isset($forumrow_item['AUTH_VOTE_IMG']) ? $forumrow_item['AUTH_VOTE_IMG'] : ''; ?>.gif" onClick="return change_auth(this,'<?php echo isset($forumrow_item['AUTH_VOTE_IMG']) ? $forumrow_item['AUTH_VOTE_IMG'] : ''; ?>',<?php echo isset($forumrow_item['FORUM_ID']) ? $forumrow_item['FORUM_ID'] : ''; ?>,'VOTE');"><input type="hidden" id="auth_<?php echo isset($forumrow_item['FORUM_ID']) ? $forumrow_item['FORUM_ID'] : ''; ?>_VOTE" name="auth[<?php echo isset($forumrow_item['FORUM_ID']) ? $forumrow_item['FORUM_ID'] : ''; ?>][VOTE]"></td>
		<td class="row2"><img src="../templates/subSilver/images/auth_overall_forum/<?php echo isset($forumrow_item['AUTH_POLLCREATE_IMG']) ? $forumrow_item['AUTH_POLLCREATE_IMG'] : ''; ?>.gif" onClick="return change_auth(this,'<?php echo isset($forumrow_item['AUTH_POLLCREATE_IMG']) ? $forumrow_item['AUTH_POLLCREATE_IMG'] : ''; ?>',<?php echo isset($forumrow_item['FORUM_ID']) ? $forumrow_item['FORUM_ID'] : ''; ?>,'POLLCREATE');"><input type="hidden" id="auth_<?php echo isset($forumrow_item['FORUM_ID']) ? $forumrow_item['FORUM_ID'] : ''; ?>_POLLCREATE" name="auth[<?php echo isset($forumrow_item['FORUM_ID']) ? $forumrow_item['FORUM_ID'] : ''; ?>][POLLCREATE]"></td>
		<td class="row2"><img src="../templates/subSilver/images/auth_overall_forum/<?php echo isset($forumrow_item['AUTH_ATTACHMENTS_IMG']) ? $forumrow_item['AUTH_ATTACHMENTS_IMG'] : ''; ?>.gif" onClick="return change_auth(this,'<?php echo isset($forumrow_item['AUTH_ATTACHMENTS_IMG']) ? $forumrow_item['AUTH_ATTACHMENTS_IMG'] : ''; ?>',<?php echo isset($forumrow_item['FORUM_ID']) ? $forumrow_item['FORUM_ID'] : ''; ?>,'ATTACHMENTS');"><input type="hidden" id="auth_<?php echo isset($forumrow_item['FORUM_ID']) ? $forumrow_item['FORUM_ID'] : ''; ?>_ATTACHMENTS" name="auth[<?php echo isset($forumrow_item['FORUM_ID']) ? $forumrow_item['FORUM_ID'] : ''; ?>][ATTACHMENTS]"></td>
		<td class="row2"><img src="../templates/subSilver/images/auth_overall_forum/<?php echo isset($forumrow_item['AUTH_DOWNLOAD_IMG']) ? $forumrow_item['AUTH_DOWNLOAD_IMG'] : ''; ?>.gif" onClick="return change_auth(this,'<?php echo isset($forumrow_item['AUTH_DOWNLOAD_IMG']) ? $forumrow_item['AUTH_DOWNLOAD_IMG'] : ''; ?>',<?php echo isset($forumrow_item['FORUM_ID']) ? $forumrow_item['FORUM_ID'] : ''; ?>,'DOWNLOAD');"><input type="hidden" id="auth_<?php echo isset($forumrow_item['FORUM_ID']) ? $forumrow_item['FORUM_ID'] : ''; ?>_DOWNLOAD" name="auth[<?php echo isset($forumrow_item['FORUM_ID']) ? $forumrow_item['FORUM_ID'] : ''; ?>][DOWNLOAD]"></td>
	</tr>
	<?php

} // END forumrow

if(isset($forumrow_item)) { unset($forumrow_item); } 

?>
	<?php

} // END catrow

if(isset($catrow_item)) { unset($catrow_item); } 

?>
	<tr>
		<td colspan="14" class="catBottom" align="center"><input type="submit" class="liteoption" name="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" /></td>
	</tr>
</table></form>
