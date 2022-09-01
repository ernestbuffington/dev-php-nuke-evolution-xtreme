<?php

// eXtreme Styles mod cache. Generated on Wed, 28 Apr 2021 01:37:28 +0000 (time=1619573848)

?><script language="javascript" type="text/javascript">
<!--
function update_rank(newimage)
{
   document.rank_image.src = newimage;
}
//-->
</script>
<script language="javascript" type="text/javascript">
<!--
function update_rank(newimage)
{
	if(newimage != '')
	{
		document.rank_image.src = '../' + newimage;
		document.post.rank_image_path.value = newimage;
	}
	else
	{
		document.rank_image.src = '../images/spacer.gif';
		document.post.rank_image_path.value = '';
	}
}
//-->
</script>
<h1><?php echo isset($this->vars['L_RANKS_TITLE']) ? $this->vars['L_RANKS_TITLE'] : $this->lang('L_RANKS_TITLE'); ?></h1>

<p><?php echo isset($this->vars['L_RANKS_TEXT']) ? $this->vars['L_RANKS_TEXT'] : $this->lang('L_RANKS_TEXT'); ?></p>

<form action="<?php echo isset($this->vars['S_RANK_ACTION']) ? $this->vars['S_RANK_ACTION'] : $this->lang('S_RANK_ACTION'); ?>" method="post" name="post"><table class="forumline" cellpadding="4" cellspacing="1" border="0" align="center">
    <tr>
        <th class="thTop" colspan="2"><?php echo isset($this->vars['L_RANKS_TITLE']) ? $this->vars['L_RANKS_TITLE'] : $this->lang('L_RANKS_TITLE'); ?></th>
    </tr>
    <tr>
        <td class="row1" width="38%"><span class="gen"><?php echo isset($this->vars['L_RANK_TITLE']) ? $this->vars['L_RANK_TITLE'] : $this->lang('L_RANK_TITLE'); ?>:</span></td>
        <td class="row2"><input type="text" name="title" size="40" maxlength="100" value="<?php echo isset($this->vars['RANK']) ? $this->vars['RANK'] : $this->lang('RANK'); ?>" /></td>
    </tr>
    <tr>
        <td class="row1"><span class="gen"><?php echo isset($this->vars['L_RANK_SPECIAL']) ? $this->vars['L_RANK_SPECIAL'] : $this->lang('L_RANK_SPECIAL'); ?></span></td>
        <td class="row2"><input type="radio" name="special_rank" value="-1" <?php echo isset($this->vars['DAYS_RANK']) ? $this->vars['DAYS_RANK'] : $this->lang('DAYS_RANK'); ?> /><?php echo isset($this->vars['L_DAYS_RANK']) ? $this->vars['L_DAYS_RANK'] : $this->lang('L_DAYS_RANK'); ?><br /><input type="radio" name="special_rank" value="0" <?php echo isset($this->vars['NOT_SPECIAL_RANK']) ? $this->vars['NOT_SPECIAL_RANK'] : $this->lang('NOT_SPECIAL_RANK'); ?> /><?php echo isset($this->vars['L_POSTS_RANK']) ? $this->vars['L_POSTS_RANK'] : $this->lang('L_POSTS_RANK'); ?><br /><input type="radio" name="special_rank" value="1" <?php echo isset($this->vars['SPECIAL_RANK']) ? $this->vars['SPECIAL_RANK'] : $this->lang('SPECIAL_RANK'); ?> /><?php echo isset($this->vars['L_SPECIAL_RANK']) ? $this->vars['L_SPECIAL_RANK'] : $this->lang('L_SPECIAL_RANK'); ?><br /><input type="radio" name="special_rank" value="2" <?php echo isset($this->vars['GUEST_RANK']) ? $this->vars['GUEST_RANK'] : $this->lang('GUEST_RANK'); ?> /><?php echo isset($this->vars['L_GUEST']) ? $this->vars['L_GUEST'] : $this->lang('L_GUEST'); ?><br /><input type="radio" name="special_rank" value="3" <?php echo isset($this->vars['BANNED_RANK']) ? $this->vars['BANNED_RANK'] : $this->lang('BANNED_RANK'); ?> /><?php echo isset($this->vars['L_BANNED']) ? $this->vars['L_BANNED'] : $this->lang('L_BANNED'); ?><br /></td>
    </tr>
    <tr>
        <td class="row1" width="38%"><span class="gen"><?php echo isset($this->vars['L_MIN_M_D']) ? $this->vars['L_MIN_M_D'] : $this->lang('L_MIN_M_D'); ?>:</span></td>
        <td class="row2"><input type="text" name="min_posts" size="5" maxlength="10" value="<?php echo isset($this->vars['MINIMUM']) ? $this->vars['MINIMUM'] : $this->lang('MINIMUM'); ?>" /></td>
    </tr>
    <tr> 
        <td class="row1" width="38%"><span class="gen"><?php echo isset($this->vars['L_RANK_IMAGE']) ? $this->vars['L_RANK_IMAGE'] : $this->lang('L_RANK_IMAGE'); ?>:</span><br /> 
        <span class="gensmall"><?php echo isset($this->vars['L_RANK_IMAGE_EXPLAIN']) ? $this->vars['L_RANK_IMAGE_EXPLAIN'] : $this->lang('L_RANK_IMAGE_EXPLAIN'); ?></span></td> 
        <td class="row2"><?php echo isset($this->vars['RANK_LIST']) ? $this->vars['RANK_LIST'] : $this->lang('RANK_LIST'); ?></td>
	</tr>
	<tr>
		<td class="row1" width="38%"><span class="gen"><?php echo isset($this->vars['L_CURRENT_RANK']) ? $this->vars['L_CURRENT_RANK'] : $this->lang('L_CURRENT_RANK'); ?>:</span></td>
		<td class="row2"><?php echo isset($this->vars['IMAGE_DISPLAY']) ? $this->vars['IMAGE_DISPLAY'] : $this->lang('IMAGE_DISPLAY'); ?></td> 
    </tr>
        <td class="catBottom" colspan="2" align="center"><input type="submit" name="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" class="mainoption" />&nbsp;&nbsp;<input type="reset" value="<?php echo isset($this->vars['L_RESET']) ? $this->vars['L_RESET'] : $this->lang('L_RESET'); ?>" class="liteoption" /></td>
    </tr>
</table>
<?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?></form>