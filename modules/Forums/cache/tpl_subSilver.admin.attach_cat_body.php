<?php

// eXtreme Styles mod cache. Generated on Wed, 12 May 2021 22:55:48 +0000 (time=1620860148)

?>
<h1><?php echo isset($this->vars['L_MANAGE_CAT_TITLE']) ? $this->vars['L_MANAGE_CAT_TITLE'] : $this->lang('L_MANAGE_CAT_TITLE'); ?></h1>

<p><?php echo isset($this->vars['L_MANAGE_CAT_EXPLAIN']) ? $this->vars['L_MANAGE_CAT_EXPLAIN'] : $this->lang('L_MANAGE_CAT_EXPLAIN'); ?></p>

<?php echo isset($this->vars['ERROR_BOX']) ? $this->vars['ERROR_BOX'] : $this->lang('ERROR_BOX'); ?>

<form action="<?php echo isset($this->vars['S_ATTACH_ACTION']) ? $this->vars['S_ATTACH_ACTION'] : $this->lang('S_ATTACH_ACTION'); ?>" method="post">
<table width="99%" cellpadding="4" cellspacing="1" border="0" align="center" class="forumline">
    <tr>
      <th class="thHead" colspan="2"><?php echo isset($this->vars['L_SETTINGS_CAT_IMAGES']) ? $this->vars['L_SETTINGS_CAT_IMAGES'] : $this->lang('L_SETTINGS_CAT_IMAGES'); ?><br /><?php echo isset($this->vars['L_ASSIGNED_GROUP']) ? $this->vars['L_ASSIGNED_GROUP'] : $this->lang('L_ASSIGNED_GROUP'); ?>: <?php echo isset($this->vars['S_ASSIGNED_GROUP_IMAGES']) ? $this->vars['S_ASSIGNED_GROUP_IMAGES'] : $this->lang('S_ASSIGNED_GROUP_IMAGES'); ?></th>
    </tr>
    <tr>
        <td class="row1" width="80%"><?php echo isset($this->vars['L_DISPLAY_INLINED']) ? $this->vars['L_DISPLAY_INLINED'] : $this->lang('L_DISPLAY_INLINED'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_DISPLAY_INLINED_EXPLAIN']) ? $this->vars['L_DISPLAY_INLINED_EXPLAIN'] : $this->lang('L_DISPLAY_INLINED_EXPLAIN'); ?></span></td>
        <td class="row2"><input type="radio" name="img_display_inlined" value="1" <?php echo isset($this->vars['DISPLAY_INLINED_YES']) ? $this->vars['DISPLAY_INLINED_YES'] : $this->lang('DISPLAY_INLINED_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" name="img_display_inlined" value="0" <?php echo isset($this->vars['DISPLAY_INLINED_NO']) ? $this->vars['DISPLAY_INLINED_NO'] : $this->lang('DISPLAY_INLINED_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
    </tr>
<?php

$switch_thumbnail_support_count = ( isset($this->_tpldata['switch_thumbnail_support.']) ) ?  sizeof($this->_tpldata['switch_thumbnail_support.']) : 0;
for ($switch_thumbnail_support_i = 0; $switch_thumbnail_support_i < $switch_thumbnail_support_count; $switch_thumbnail_support_i++)
{
 $switch_thumbnail_support_item = &$this->_tpldata['switch_thumbnail_support.'][$switch_thumbnail_support_i];
 $switch_thumbnail_support_item['S_ROW_COUNT'] = $switch_thumbnail_support_i;
 $switch_thumbnail_support_item['S_NUM_ROWS'] = $switch_thumbnail_support_count;

?>
    <tr>
        <td class="row1" width="80%"><?php echo isset($this->vars['L_CREATE_THUMBNAIL']) ? $this->vars['L_CREATE_THUMBNAIL'] : $this->lang('L_CREATE_THUMBNAIL'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_CREATE_THUMBNAIL_EXPLAIN']) ? $this->vars['L_CREATE_THUMBNAIL_EXPLAIN'] : $this->lang('L_CREATE_THUMBNAIL_EXPLAIN'); ?></span></td>
        <td class="row2"><input type="radio" name="img_create_thumbnail" value="1" <?php echo isset($this->vars['CREATE_THUMBNAIL_YES']) ? $this->vars['CREATE_THUMBNAIL_YES'] : $this->lang('CREATE_THUMBNAIL_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" name="img_create_thumbnail" value="0" <?php echo isset($this->vars['CREATE_THUMBNAIL_NO']) ? $this->vars['CREATE_THUMBNAIL_NO'] : $this->lang('CREATE_THUMBNAIL_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
    </tr>
    <tr>
        <td class="row1" width="80%"><?php echo isset($this->vars['L_MIN_THUMB_FILESIZE']) ? $this->vars['L_MIN_THUMB_FILESIZE'] : $this->lang('L_MIN_THUMB_FILESIZE'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_MIN_THUMB_FILESIZE_EXPLAIN']) ? $this->vars['L_MIN_THUMB_FILESIZE_EXPLAIN'] : $this->lang('L_MIN_THUMB_FILESIZE_EXPLAIN'); ?></span></td>
        <td class="row2"><input type="text" size="7" maxlength="15" name="img_min_thumb_filesize" value="<?php echo isset($this->vars['IMAGE_MIN_THUMB_FILESIZE']) ? $this->vars['IMAGE_MIN_THUMB_FILESIZE'] : $this->lang('IMAGE_MIN_THUMB_FILESIZE'); ?>" class="post" /> <?php echo isset($this->vars['L_BYTES']) ? $this->vars['L_BYTES'] : $this->lang('L_BYTES'); ?></td>
    </tr>
    <tr>
        <td class="row1" width="80%"><?php echo isset($this->vars['L_USE_GD2']) ? $this->vars['L_USE_GD2'] : $this->lang('L_USE_GD2'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_USE_GD2_EXPLAIN']) ? $this->vars['L_USE_GD2_EXPLAIN'] : $this->lang('L_USE_GD2_EXPLAIN'); ?></span></td>
        <td class="row2"><input type="radio" name="use_gd2" value="1" <?php echo isset($this->vars['USE_GD2_YES']) ? $this->vars['USE_GD2_YES'] : $this->lang('USE_GD2_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" name="use_gd2" value="0" <?php echo isset($this->vars['USE_GD2_NO']) ? $this->vars['USE_GD2_NO'] : $this->lang('USE_GD2_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
    </tr>
<?php

} // END switch_thumbnail_support

if(isset($switch_thumbnail_support_item)) { unset($switch_thumbnail_support_item); } 

?>
    <tr>
        <td class="row1" width="80%"><?php echo isset($this->vars['L_IMAGICK_PATH']) ? $this->vars['L_IMAGICK_PATH'] : $this->lang('L_IMAGICK_PATH'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_IMAGICK_PATH_EXPLAIN']) ? $this->vars['L_IMAGICK_PATH_EXPLAIN'] : $this->lang('L_IMAGICK_PATH_EXPLAIN'); ?></span></td>
        <td class="row2"><input type="text" size="20" maxlength="200" name="img_imagick" value="<?php echo isset($this->vars['IMAGE_IMAGICK_PATH']) ? $this->vars['IMAGE_IMAGICK_PATH'] : $this->lang('IMAGE_IMAGICK_PATH'); ?>" class="post" /></td>
    </tr>
    <tr>
        <td class="row1" width="80%"><?php echo isset($this->vars['L_MAX_IMAGE_SIZE']) ? $this->vars['L_MAX_IMAGE_SIZE'] : $this->lang('L_MAX_IMAGE_SIZE'); ?> <br /><span class="gensmall"><?php echo isset($this->vars['L_MAX_IMAGE_SIZE_EXPLAIN']) ? $this->vars['L_MAX_IMAGE_SIZE_EXPLAIN'] : $this->lang('L_MAX_IMAGE_SIZE_EXPLAIN'); ?></span></td>
        <td class="row2"><input type="text" size="3" maxlength="4" name="img_max_width" value="<?php echo isset($this->vars['IMAGE_MAX_WIDTH']) ? $this->vars['IMAGE_MAX_WIDTH'] : $this->lang('IMAGE_MAX_WIDTH'); ?>" class="post" /> x <input type="text" size="3" maxlength="4" name="img_max_height" value="<?php echo isset($this->vars['IMAGE_MAX_HEIGHT']) ? $this->vars['IMAGE_MAX_HEIGHT'] : $this->lang('IMAGE_MAX_HEIGHT'); ?>" class="post" /></td>
    </tr>
    <tr>
        <td class="row1" width="80%"><?php echo isset($this->vars['L_IMAGE_LINK_SIZE']) ? $this->vars['L_IMAGE_LINK_SIZE'] : $this->lang('L_IMAGE_LINK_SIZE'); ?> <br /><span class="gensmall"><?php echo isset($this->vars['L_IMAGE_LINK_SIZE_EXPLAIN']) ? $this->vars['L_IMAGE_LINK_SIZE_EXPLAIN'] : $this->lang('L_IMAGE_LINK_SIZE_EXPLAIN'); ?></span></td>
        <td class="row2"><input type="text" size="3" maxlength="4" name="img_link_width" value="<?php echo isset($this->vars['IMAGE_LINK_WIDTH']) ? $this->vars['IMAGE_LINK_WIDTH'] : $this->lang('IMAGE_LINK_WIDTH'); ?>" class="post" /> x <input type="text" size="3" maxlength="4" name="img_link_height" value="<?php echo isset($this->vars['IMAGE_LINK_HEIGHT']) ? $this->vars['IMAGE_LINK_HEIGHT'] : $this->lang('IMAGE_LINK_HEIGHT'); ?>" class="post" /></td>
    </tr>
    <tr>
        <td class="catBottom" colspan="2" align="center"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?><input type="submit" name="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" class="mainoption" />&nbsp;&nbsp;<input type="reset" value="<?php echo isset($this->vars['L_RESET']) ? $this->vars['L_RESET'] : $this->lang('L_RESET'); ?>" class="liteoption" />&nbsp;&nbsp;<input type="submit" name="search_imagick" value="<?php echo isset($this->vars['L_SEARCH_IMAGICK']) ? $this->vars['L_SEARCH_IMAGICK'] : $this->lang('L_SEARCH_IMAGICK'); ?>" class="liteoption" />&nbsp;&nbsp;<input type="submit" name="cat_settings" value="<?php echo isset($this->vars['L_TEST_SETTINGS']) ? $this->vars['L_TEST_SETTINGS'] : $this->lang('L_TEST_SETTINGS'); ?>" class="liteoption" /></td>
    </tr>
</table></form>

<br />
<div align="center"><span class="copyright"><?php echo isset($this->vars['ATTACH_VERSION']) ? $this->vars['ATTACH_VERSION'] : $this->lang('ATTACH_VERSION'); ?></span></div>

<br clear="all" />
