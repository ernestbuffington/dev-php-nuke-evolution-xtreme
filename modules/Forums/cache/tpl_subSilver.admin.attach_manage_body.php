<?php

// eXtreme Styles mod cache. Generated on Sat, 01 May 2021 23:49:13 +0000 (time=1619912953)

?>
<h1><?php echo isset($this->vars['L_MANAGE_TITLE']) ? $this->vars['L_MANAGE_TITLE'] : $this->lang('L_MANAGE_TITLE'); ?></h1>

<p><?php echo isset($this->vars['L_MANAGE_EXPLAIN']) ? $this->vars['L_MANAGE_EXPLAIN'] : $this->lang('L_MANAGE_EXPLAIN'); ?></p>

<?php echo isset($this->vars['ERROR_BOX']) ? $this->vars['ERROR_BOX'] : $this->lang('ERROR_BOX'); ?>

<form action="<?php echo isset($this->vars['S_ATTACH_ACTION']) ? $this->vars['S_ATTACH_ACTION'] : $this->lang('S_ATTACH_ACTION'); ?>" method="post">
<table width="99%" cellpadding="4" cellspacing="1" border="0" align="center" class="forumline">
    <tr>
      <th class="thHead" colspan="2"><?php echo isset($this->vars['L_ATTACHMENT_SETTINGS']) ? $this->vars['L_ATTACHMENT_SETTINGS'] : $this->lang('L_ATTACHMENT_SETTINGS'); ?></th>
    </tr>
    <tr>
        <td class="row1" width="80%"><?php echo isset($this->vars['L_UPLOAD_DIR']) ? $this->vars['L_UPLOAD_DIR'] : $this->lang('L_UPLOAD_DIR'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_UPLOAD_DIR_EXPLAIN']) ? $this->vars['L_UPLOAD_DIR_EXPLAIN'] : $this->lang('L_UPLOAD_DIR_EXPLAIN'); ?></span></td>
        <td class="row2"><input type="text" size="25" maxlength="100" name="upload_dir" class="post" value="<?php echo isset($this->vars['UPLOAD_DIR']) ? $this->vars['UPLOAD_DIR'] : $this->lang('UPLOAD_DIR'); ?>" /></td>
    </tr>
    <tr>
        <td class="row1" width="80%"><?php echo isset($this->vars['L_ATTACHMENT_IMG_PATH']) ? $this->vars['L_ATTACHMENT_IMG_PATH'] : $this->lang('L_ATTACHMENT_IMG_PATH'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_IMG_PATH_EXPLAIN']) ? $this->vars['L_IMG_PATH_EXPLAIN'] : $this->lang('L_IMG_PATH_EXPLAIN'); ?></span></td>
        <td class="row2"><input type="text" size="25" maxlength="100" name="upload_img" class="post" value="<?php echo isset($this->vars['ATTACHMENT_IMG_PATH']) ? $this->vars['ATTACHMENT_IMG_PATH'] : $this->lang('ATTACHMENT_IMG_PATH'); ?>" /></td>
    </tr>
    <tr>
        <td class="row1" width="80%"><?php echo isset($this->vars['L_ATTACHMENT_TOPIC_ICON']) ? $this->vars['L_ATTACHMENT_TOPIC_ICON'] : $this->lang('L_ATTACHMENT_TOPIC_ICON'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_TOPIC_ICON_EXPLAIN']) ? $this->vars['L_TOPIC_ICON_EXPLAIN'] : $this->lang('L_TOPIC_ICON_EXPLAIN'); ?></span></td>
        <td class="row2"><input type="text" size="25" maxlength="100" name="topic_icon" class="post" value="<?php echo isset($this->vars['TOPIC_ICON']) ? $this->vars['TOPIC_ICON'] : $this->lang('TOPIC_ICON'); ?>" /></td>
    </tr>
    <tr>
        <td class="row1" width="80%"><?php echo isset($this->vars['L_DISPLAY_ORDER']) ? $this->vars['L_DISPLAY_ORDER'] : $this->lang('L_DISPLAY_ORDER'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_DISPLAY_ORDER_EXPLAIN']) ? $this->vars['L_DISPLAY_ORDER_EXPLAIN'] : $this->lang('L_DISPLAY_ORDER_EXPLAIN'); ?></span></td>
        <td class="row2">
        <table border=0 cellpadding=0 cellspacing=0>
            <tr>
                <td><input type="radio" name="display_order" value="0" <?php echo isset($this->vars['DISPLAY_ORDER_DESC']) ? $this->vars['DISPLAY_ORDER_DESC'] : $this->lang('DISPLAY_ORDER_DESC'); ?> /> <?php echo isset($this->vars['L_DESC']) ? $this->vars['L_DESC'] : $this->lang('L_DESC'); ?></td>
            </tr>
            <tr>
                 <td><input type="radio" name="display_order" value="1" <?php echo isset($this->vars['DISPLAY_ORDER_ASC']) ? $this->vars['DISPLAY_ORDER_ASC'] : $this->lang('DISPLAY_ORDER_ASC'); ?> /> <?php echo isset($this->vars['L_ASC']) ? $this->vars['L_ASC'] : $this->lang('L_ASC'); ?></td>
            </tr>
        </table></td>
    </tr>
    <tr>
      <th class="thHead" colspan="2"><?php echo isset($this->vars['L_ATTACHMENT_FILESIZE_SETTINGS']) ? $this->vars['L_ATTACHMENT_FILESIZE_SETTINGS'] : $this->lang('L_ATTACHMENT_FILESIZE_SETTINGS'); ?></th>
    </tr>
    <tr>
        <td class="row1" width="80%"><?php echo isset($this->vars['L_MAX_FILESIZE']) ? $this->vars['L_MAX_FILESIZE'] : $this->lang('L_MAX_FILESIZE'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_MAX_FILESIZE_EXPLAIN']) ? $this->vars['L_MAX_FILESIZE_EXPLAIN'] : $this->lang('L_MAX_FILESIZE_EXPLAIN'); ?></span></td>
        <td class="row2"><input type="text" size="8" maxlength="15" name="max_filesize" class="post" value="<?php echo isset($this->vars['MAX_FILESIZE']) ? $this->vars['MAX_FILESIZE'] : $this->lang('MAX_FILESIZE'); ?>" /> <?php echo isset($this->vars['S_FILESIZE']) ? $this->vars['S_FILESIZE'] : $this->lang('S_FILESIZE'); ?></td>
    </tr>
    <tr>
        <td class="row1" width="80%"><?php echo isset($this->vars['L_ATTACH_QUOTA']) ? $this->vars['L_ATTACH_QUOTA'] : $this->lang('L_ATTACH_QUOTA'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_ATTACH_QUOTA_EXPLAIN']) ? $this->vars['L_ATTACH_QUOTA_EXPLAIN'] : $this->lang('L_ATTACH_QUOTA_EXPLAIN'); ?></span></td>
        <td class="row2"><input type="text" size="8" maxlength="15" name="attachment_quota" class="post" value="<?php echo isset($this->vars['ATTACHMENT_QUOTA']) ? $this->vars['ATTACHMENT_QUOTA'] : $this->lang('ATTACHMENT_QUOTA'); ?>" /> <?php echo isset($this->vars['S_FILESIZE_QUOTA']) ? $this->vars['S_FILESIZE_QUOTA'] : $this->lang('S_FILESIZE_QUOTA'); ?></td>
    </tr>
    <tr>
        <td class="row1" width="80%"><?php echo isset($this->vars['L_MAX_FILESIZE_PM']) ? $this->vars['L_MAX_FILESIZE_PM'] : $this->lang('L_MAX_FILESIZE_PM'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_MAX_FILESIZE_PM_EXPLAIN']) ? $this->vars['L_MAX_FILESIZE_PM_EXPLAIN'] : $this->lang('L_MAX_FILESIZE_PM_EXPLAIN'); ?></span></td>
        <td class="row2"><input type="text" size="8" maxlength="15" name="max_filesize_pm" class="post" value="<?php echo isset($this->vars['MAX_FILESIZE_PM']) ? $this->vars['MAX_FILESIZE_PM'] : $this->lang('MAX_FILESIZE_PM'); ?>" /> <?php echo isset($this->vars['S_FILESIZE_PM']) ? $this->vars['S_FILESIZE_PM'] : $this->lang('S_FILESIZE_PM'); ?></td>
    </tr>
    <tr>
        <td class="row1" width="80%"><?php echo isset($this->vars['L_DEFAULT_QUOTA_LIMIT']) ? $this->vars['L_DEFAULT_QUOTA_LIMIT'] : $this->lang('L_DEFAULT_QUOTA_LIMIT'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_DEFAULT_QUOTA_LIMIT_EXPLAIN']) ? $this->vars['L_DEFAULT_QUOTA_LIMIT_EXPLAIN'] : $this->lang('L_DEFAULT_QUOTA_LIMIT_EXPLAIN'); ?></span></td>
        <td class="row2">
        <table width="100%" align="center" cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td nowrap="nowrap"><?php echo isset($this->vars['S_DEFAULT_UPLOAD_LIMIT']) ? $this->vars['S_DEFAULT_UPLOAD_LIMIT'] : $this->lang('S_DEFAULT_UPLOAD_LIMIT'); ?></td>
            <td nowrap="nowrap"><span class="gensmall">&nbsp;<?php echo isset($this->vars['L_UPLOAD_QUOTA']) ? $this->vars['L_UPLOAD_QUOTA'] : $this->lang('L_UPLOAD_QUOTA'); ?>&nbsp;</span></td>
        </tr>
        <tr>
            <td nowrap="nowrap"><?php echo isset($this->vars['S_DEFAULT_PM_LIMIT']) ? $this->vars['S_DEFAULT_PM_LIMIT'] : $this->lang('S_DEFAULT_PM_LIMIT'); ?></td>
            <td nowrap="nowrap"><span class="gensmall">&nbsp;<?php echo isset($this->vars['L_PM_QUOTA']) ? $this->vars['L_PM_QUOTA'] : $this->lang('L_PM_QUOTA'); ?>&nbsp;</span></td>
        </tr>
        </table>
        </td>
    </tr>
    <tr>
      <th class="thHead" colspan="2"><?php echo isset($this->vars['L_ATTACHMENT_NUMBER_SETTINGS']) ? $this->vars['L_ATTACHMENT_NUMBER_SETTINGS'] : $this->lang('L_ATTACHMENT_NUMBER_SETTINGS'); ?></th>
    </tr>
    <tr>
        <td class="row1" width="80%"><?php echo isset($this->vars['L_MAX_ATTACHMENTS']) ? $this->vars['L_MAX_ATTACHMENTS'] : $this->lang('L_MAX_ATTACHMENTS'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_MAX_ATTACHMENTS_EXPLAIN']) ? $this->vars['L_MAX_ATTACHMENTS_EXPLAIN'] : $this->lang('L_MAX_ATTACHMENTS_EXPLAIN'); ?></span></td>
        <td class="row2"><input type="text" size="3" maxlength="3" name="max_attachments" class="post" value="<?php echo isset($this->vars['MAX_ATTACHMENTS']) ? $this->vars['MAX_ATTACHMENTS'] : $this->lang('MAX_ATTACHMENTS'); ?>" /></td>
    </tr>
    <tr>
        <td class="row1" width="80%"><?php echo isset($this->vars['L_MAX_ATTACHMENTS_PM']) ? $this->vars['L_MAX_ATTACHMENTS_PM'] : $this->lang('L_MAX_ATTACHMENTS_PM'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_MAX_ATTACHMENTS_PM_EXPLAIN']) ? $this->vars['L_MAX_ATTACHMENTS_PM_EXPLAIN'] : $this->lang('L_MAX_ATTACHMENTS_PM_EXPLAIN'); ?></span></td>
        <td class="row2"><input type="text" size="3" maxlength="3" name="max_attachments_pm" class="post" value="<?php echo isset($this->vars['MAX_ATTACHMENTS_PM']) ? $this->vars['MAX_ATTACHMENTS_PM'] : $this->lang('MAX_ATTACHMENTS_PM'); ?>" /></td>
    </tr>
    <tr>
      <th class="thHead" colspan="2"><?php echo isset($this->vars['L_ATTACHMENT_OPTIONS_SETTINGS']) ? $this->vars['L_ATTACHMENT_OPTIONS_SETTINGS'] : $this->lang('L_ATTACHMENT_OPTIONS_SETTINGS'); ?></th>
    </tr>
    <tr>
        <td class="row1" width="80%"><?php echo isset($this->vars['L_DISABLE_MOD']) ? $this->vars['L_DISABLE_MOD'] : $this->lang('L_DISABLE_MOD'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_DISABLE_MOD_EXPLAIN']) ? $this->vars['L_DISABLE_MOD_EXPLAIN'] : $this->lang('L_DISABLE_MOD_EXPLAIN'); ?></span></td>
        <td class="row2"><input type="radio" name="disable_mod" value="1" <?php echo isset($this->vars['DISABLE_MOD_YES']) ? $this->vars['DISABLE_MOD_YES'] : $this->lang('DISABLE_MOD_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" name="disable_mod" value="0" <?php echo isset($this->vars['DISABLE_MOD_NO']) ? $this->vars['DISABLE_MOD_NO'] : $this->lang('DISABLE_MOD_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
    </tr>
    <tr>
        <td class="row1" width="80%"><?php echo isset($this->vars['L_PM_ATTACH']) ? $this->vars['L_PM_ATTACH'] : $this->lang('L_PM_ATTACH'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_PM_ATTACH_EXPLAIN']) ? $this->vars['L_PM_ATTACH_EXPLAIN'] : $this->lang('L_PM_ATTACH_EXPLAIN'); ?></span></td>
        <td class="row2"><input type="radio" name="allow_pm_attach" value="1" <?php echo isset($this->vars['PM_ATTACH_YES']) ? $this->vars['PM_ATTACH_YES'] : $this->lang('PM_ATTACH_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" name="allow_pm_attach" value="0" <?php echo isset($this->vars['PM_ATTACH_NO']) ? $this->vars['PM_ATTACH_NO'] : $this->lang('PM_ATTACH_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
    </tr>
    <tr>
        <td class="row1" width="80%"><?php echo isset($this->vars['L_ATTACHMENT_TOPIC_REVIEW']) ? $this->vars['L_ATTACHMENT_TOPIC_REVIEW'] : $this->lang('L_ATTACHMENT_TOPIC_REVIEW'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_ATTACHMENT_TOPIC_REVIEW_EXPLAIN']) ? $this->vars['L_ATTACHMENT_TOPIC_REVIEW_EXPLAIN'] : $this->lang('L_ATTACHMENT_TOPIC_REVIEW_EXPLAIN'); ?></span></td>
        <td class="row2"><input type="radio" name="attachment_topic_review" value="1" <?php echo isset($this->vars['TOPIC_REVIEW_YES']) ? $this->vars['TOPIC_REVIEW_YES'] : $this->lang('TOPIC_REVIEW_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" name="attachment_topic_review" value="0" <?php echo isset($this->vars['TOPIC_REVIEW_NO']) ? $this->vars['TOPIC_REVIEW_NO'] : $this->lang('TOPIC_REVIEW_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
    </tr>
    <tr>
        <td class="row1" width="80%"><?php echo isset($this->vars['L_SHOW_APCP']) ? $this->vars['L_SHOW_APCP'] : $this->lang('L_SHOW_APCP'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_SHOW_APCP_EXPLAIN']) ? $this->vars['L_SHOW_APCP_EXPLAIN'] : $this->lang('L_SHOW_APCP_EXPLAIN'); ?></span></td>
        <td class="row2"><input type="radio" name="show_apcp" value="1" <?php echo isset($this->vars['SHOW_APCP_YES']) ? $this->vars['SHOW_APCP_YES'] : $this->lang('SHOW_APCP_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" name="show_apcp" value="0" <?php echo isset($this->vars['SHOW_APCP_NO']) ? $this->vars['SHOW_APCP_NO'] : $this->lang('SHOW_APCP_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
    </tr>
<?php

$switch_ftp_count = ( isset($this->_tpldata['switch_ftp.']) ) ?  sizeof($this->_tpldata['switch_ftp.']) : 0;
for ($switch_ftp_i = 0; $switch_ftp_i < $switch_ftp_count; $switch_ftp_i++)
{
 $switch_ftp_item = &$this->_tpldata['switch_ftp.'][$switch_ftp_i];
 $switch_ftp_item['S_ROW_COUNT'] = $switch_ftp_i;
 $switch_ftp_item['S_NUM_ROWS'] = $switch_ftp_count;

?>
    <tr>
        <td class="row1" width="80%"><?php echo isset($this->vars['L_FTP_UPLOAD']) ? $this->vars['L_FTP_UPLOAD'] : $this->lang('L_FTP_UPLOAD'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_FTP_UPLOAD_EXPLAIN']) ? $this->vars['L_FTP_UPLOAD_EXPLAIN'] : $this->lang('L_FTP_UPLOAD_EXPLAIN'); ?></span></td>
        <td class="row2"><input type="radio" name="allow_ftp_upload" value="1" <?php echo isset($this->vars['FTP_UPLOAD_YES']) ? $this->vars['FTP_UPLOAD_YES'] : $this->lang('FTP_UPLOAD_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" name="allow_ftp_upload" value="0" <?php echo isset($this->vars['FTP_UPLOAD_NO']) ? $this->vars['FTP_UPLOAD_NO'] : $this->lang('FTP_UPLOAD_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
    </tr>
    <tr>
      <th class="thHead" colspan="2"><?php echo isset($this->vars['L_ATTACHMENT_FTP_SETTINGS']) ? $this->vars['L_ATTACHMENT_FTP_SETTINGS'] : $this->lang('L_ATTACHMENT_FTP_SETTINGS'); ?></th>
    </tr>
    <tr>
        <td class="row1" width="80%"><?php echo isset($this->vars['L_ATTACHMENT_FTP_SERVER']) ? $this->vars['L_ATTACHMENT_FTP_SERVER'] : $this->lang('L_ATTACHMENT_FTP_SERVER'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_ATTACHMENT_FTP_SERVER_EXPLAIN']) ? $this->vars['L_ATTACHMENT_FTP_SERVER_EXPLAIN'] : $this->lang('L_ATTACHMENT_FTP_SERVER_EXPLAIN'); ?></span></td>
        <td class="row2"><input type="text" size="20" maxlength="100" name="ftp_server" class="post" value="<?php echo isset($this->vars['FTP_SERVER']) ? $this->vars['FTP_SERVER'] : $this->lang('FTP_SERVER'); ?>" /></td>
    </tr>
    <tr>
        <td class="row1" width="80%"><?php echo isset($this->vars['L_ATTACHMENT_FTP_PATH']) ? $this->vars['L_ATTACHMENT_FTP_PATH'] : $this->lang('L_ATTACHMENT_FTP_PATH'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_ATTACHMENT_FTP_PATH_EXPLAIN']) ? $this->vars['L_ATTACHMENT_FTP_PATH_EXPLAIN'] : $this->lang('L_ATTACHMENT_FTP_PATH_EXPLAIN'); ?></span></td>
        <td class="row2"><input type="text" size="20" maxlength="100" name="ftp_path" class="post" value="<?php echo isset($this->vars['FTP_PATH']) ? $this->vars['FTP_PATH'] : $this->lang('FTP_PATH'); ?>" /></td>
    </tr>
    <tr>
        <td class="row1" width="80%"><?php echo isset($this->vars['L_DOWNLOAD_PATH']) ? $this->vars['L_DOWNLOAD_PATH'] : $this->lang('L_DOWNLOAD_PATH'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_DOWNLOAD_PATH_EXPLAIN']) ? $this->vars['L_DOWNLOAD_PATH_EXPLAIN'] : $this->lang('L_DOWNLOAD_PATH_EXPLAIN'); ?></span></td>
        <td class="row2"><input type="text" size="20" maxlength="100" name="download_path" class="post" value="<?php echo isset($this->vars['DOWNLOAD_PATH']) ? $this->vars['DOWNLOAD_PATH'] : $this->lang('DOWNLOAD_PATH'); ?>" /></td>
    </tr>
    <tr>
        <td class="row1" width="80%"><?php echo isset($this->vars['L_FTP_PASSIVE_MODE']) ? $this->vars['L_FTP_PASSIVE_MODE'] : $this->lang('L_FTP_PASSIVE_MODE'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_FTP_PASSIVE_MODE_EXPLAIN']) ? $this->vars['L_FTP_PASSIVE_MODE_EXPLAIN'] : $this->lang('L_FTP_PASSIVE_MODE_EXPLAIN'); ?></span></td>
        <td class="row2"><input type="radio" name="ftp_pasv_mode" value="1" <?php echo isset($this->vars['FTP_PASV_MODE_YES']) ? $this->vars['FTP_PASV_MODE_YES'] : $this->lang('FTP_PASV_MODE_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" name="ftp_pasv_mode" value="0" <?php echo isset($this->vars['FTP_PASV_MODE_NO']) ? $this->vars['FTP_PASV_MODE_NO'] : $this->lang('FTP_PASV_MODE_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
    </tr>
    <tr>
        <td class="row1" width="80%"><?php echo isset($this->vars['L_ATTACHMENT_FTP_USER']) ? $this->vars['L_ATTACHMENT_FTP_USER'] : $this->lang('L_ATTACHMENT_FTP_USER'); ?></td>
        <td class="row2"><input type="text" size="20" maxlength="100" name="ftp_user" class="post" value="<?php echo isset($this->vars['FTP_USER']) ? $this->vars['FTP_USER'] : $this->lang('FTP_USER'); ?>" /></td>
    </tr>
    <tr>
        <td class="row1" width="80%"><?php echo isset($this->vars['L_ATTACHMENT_FTP_PASS']) ? $this->vars['L_ATTACHMENT_FTP_PASS'] : $this->lang('L_ATTACHMENT_FTP_PASS'); ?></td>
        <td class="row2"><input type="password" size="10" maxlength="20" name="ftp_pass" class="post" value="<?php echo isset($this->vars['FTP_PASS']) ? $this->vars['FTP_PASS'] : $this->lang('FTP_PASS'); ?>" /></td>
    </tr>
<?php

} // END switch_ftp

if(isset($switch_ftp_item)) { unset($switch_ftp_item); } 

?>
<?php

$switch_no_ftp_count = ( isset($this->_tpldata['switch_no_ftp.']) ) ?  sizeof($this->_tpldata['switch_no_ftp.']) : 0;
for ($switch_no_ftp_i = 0; $switch_no_ftp_i < $switch_no_ftp_count; $switch_no_ftp_i++)
{
 $switch_no_ftp_item = &$this->_tpldata['switch_no_ftp.'][$switch_no_ftp_i];
 $switch_no_ftp_item['S_ROW_COUNT'] = $switch_no_ftp_i;
 $switch_no_ftp_item['S_NUM_ROWS'] = $switch_no_ftp_count;

?>
    <input type="hidden" name="allow_ftp_upload" value="0" />
    <tr>
      <th class="thHead" colspan="2"><?php echo isset($this->vars['L_ATTACHMENT_FTP_SETTINGS']) ? $this->vars['L_ATTACHMENT_FTP_SETTINGS'] : $this->lang('L_ATTACHMENT_FTP_SETTINGS'); ?></th>
    </tr>
    <tr>
      <td class="row1" colspan="2" align="center"><span class="gen"><?php echo isset($this->vars['L_NO_FTP_EXTENSIONS']) ? $this->vars['L_NO_FTP_EXTENSIONS'] : $this->lang('L_NO_FTP_EXTENSIONS'); ?></span></td>
    </tr>
<?php

} // END switch_no_ftp

if(isset($switch_no_ftp_item)) { unset($switch_no_ftp_item); } 

?>
    <tr>
        <td class="catBottom" colspan="2" align="center"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?><input type="submit" name="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" class="mainoption" />&nbsp;&nbsp;<input type="reset" value="<?php echo isset($this->vars['L_RESET']) ? $this->vars['L_RESET'] : $this->lang('L_RESET'); ?>" class="liteoption" />&nbsp;&nbsp;<input type="submit" name="settings" value="<?php echo isset($this->vars['L_TEST_SETTINGS']) ? $this->vars['L_TEST_SETTINGS'] : $this->lang('L_TEST_SETTINGS'); ?>" class="liteoption" /></td>
    </tr>
</table></form>

<br />
<div align="center"><span class="copyright"><?php echo isset($this->vars['ATTACH_VERSION']) ? $this->vars['ATTACH_VERSION'] : $this->lang('ATTACH_VERSION'); ?></span></div>

<br clear="all" />
