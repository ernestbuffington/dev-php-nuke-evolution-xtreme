<?php

// eXtreme Styles mod cache. Generated on Wed, 12 May 2021 23:47:03 +0000 (time=1620863223)

?><div class="maintitle"><?php echo isset($this->vars['L_ADD_TITLE']) ? $this->vars['L_ADD_TITLE'] : $this->lang('L_ADD_TITLE'); ?></div>
<br />

<form action="<?php echo isset($this->vars['S_CONFIG_ACTION']) ? $this->vars['S_CONFIG_ACTION'] : $this->lang('S_CONFIG_ACTION'); ?>" method="post">
<table width="99%" cellpadding="3" cellspacing="1" border="0" align="center" class="forumline">

<tr>
<th colspan="2"><?php echo isset($this->vars['L_ADD_TITLE']) ? $this->vars['L_ADD_TITLE'] : $this->lang('L_ADD_TITLE'); ?></th>
</tr>

<tr> 
<td class="row1" width="38%"><?php echo isset($this->vars['L_NAME']) ? $this->vars['L_NAME'] : $this->lang('L_NAME'); ?><br />
<span class="gensmall"><?php echo isset($this->vars['L_NAME_DESC']) ? $this->vars['L_NAME_DESC'] : $this->lang('L_NAME_DESC'); ?></span>
</td>
<td class="row2" width="62%"> 
<input type="text" maxlength="100" size="25" name="add_gamename" value="" class="post" />
</td>
</tr>

<tr> 
<td class="row1" width="38%"><?php echo isset($this->vars['L_DESC']) ? $this->vars['L_DESC'] : $this->lang('L_DESC'); ?><br />
<span class="gensmall"><?php echo isset($this->vars['L_DESC_DESC']) ? $this->vars['L_DESC_DESC'] : $this->lang('L_DESC_DESC'); ?></span>
</td>
<td class="row2"> 
<textarea name="add_gamedesc" rows="5" cols="30" style="width: 255px" class="post"><?php echo isset($this->vars['GAME_DESCRIPTION']) ? $this->vars['GAME_DESCRIPTION'] : $this->lang('GAME_DESCRIPTION'); ?></textarea>
</td>
</tr>

<tr> 
<td class="row1" width="38%"><?php echo isset($this->vars['L_SCOREVAR']) ? $this->vars['L_SCOREVAR'] : $this->lang('L_SCOREVAR'); ?><br />
<span class="gensmall"><?php echo isset($this->vars['L_SCOREVAR_DESC']) ? $this->vars['L_SCOREVAR_DESC'] : $this->lang('L_SCOREVAR_DESC'); ?></span>
</td>
<td class="row2" width="62%"> 
<input type="text" maxlength="100" size="25" name="add_scorevar" value="" class="post" />
</td>
</tr>

<tr> 
<td class="row1" width="38%"><?php echo isset($this->vars['L_GAMEFILE']) ? $this->vars['L_GAMEFILE'] : $this->lang('L_GAMEFILE'); ?><br />
<span class="gensmall"><?php echo isset($this->vars['L_GAMEFILE_DESC']) ? $this->vars['L_GAMEFILE_DESC'] : $this->lang('L_GAMEFILE_DESC'); ?></span>
</td>
<td class="row2" width="62%"> 
<input type="text" maxlength="100" size="25" name="add_gamefile" value="" class="post" />
</td>
</tr>

<tr> 
<td class="row1" width="38%"><?php echo isset($this->vars['L_PICFILE']) ? $this->vars['L_PICFILE'] : $this->lang('L_PICFILE'); ?><br />
<span class="gensmall"><?php echo isset($this->vars['L_PICFILE_DESC']) ? $this->vars['L_PICFILE_DESC'] : $this->lang('L_PICFILE_DESC'); ?></span>
</td>
<td class="row2" width="62%"> 
<input type="text" maxlength="100" size="25" name="add_gamepicture" value="" class="post" />
</td>
</tr>

<tr> 
<td class="row1" width="38%"><?php echo isset($this->vars['L_CAT']) ? $this->vars['L_CAT'] : $this->lang('L_CAT'); ?><br />
<span class="gensmall"><?php echo isset($this->vars['L_CAT_DESC']) ? $this->vars['L_CAT_DESC'] : $this->lang('L_CAT_DESC'); ?></span>
</td>
<td class="row2" width="62%"> 
<select name="add_cat" class="post">
<?php echo isset($this->vars['CATEGORIES']) ? $this->vars['CATEGORIES'] : $this->lang('CATEGORIES'); ?>
</select>
</td>
</tr>

<tr> 
<td class="row1" width="38%"><?php echo isset($this->vars['L_TYPE']) ? $this->vars['L_TYPE'] : $this->lang('L_TYPE'); ?><br />
<span class="gensmall"><?php echo isset($this->vars['L_TYPE_DESC']) ? $this->vars['L_TYPE_DESC'] : $this->lang('L_TYPE_DESC'); ?></span>
</td>
<td class="row2"> 
<select name="add_gametype" class="post">
<option value="3" <?php echo isset($this->vars['SELECTED3']) ? $this->vars['SELECTED3'] : $this->lang('SELECTED3'); ?>>V3Arcade</option>
<option value="4" <?php echo isset($this->vars['SELECTED4']) ? $this->vars['SELECTED4'] : $this->lang('SELECTED4'); ?>>IBPro</option>
<option value="5" <?php echo isset($this->vars['SELECTED5']) ? $this->vars['SELECTED5'] : $this->lang('SELECTED5'); ?>>Activity</option>
</select>
</td>
</tr>

<tr> 
<td class="row1" width="38%"><?php echo isset($this->vars['L_WIDTH']) ? $this->vars['L_WIDTH'] : $this->lang('L_WIDTH'); ?><br />
<span class="gensmall"><?php echo isset($this->vars['L_WIDTH_DESC']) ? $this->vars['L_WIDTH_DESC'] : $this->lang('L_WIDTH_DESC'); ?></span>
</td>
<td class="row2" width="62%"> 
<input type="text" maxlength="5" size="5" name="add_gamewidth" value="550" class="post" />
</td>
</tr>

<tr> 
<td class="row1" width="38%"><?php echo isset($this->vars['L_HEIGHT']) ? $this->vars['L_HEIGHT'] : $this->lang('L_HEIGHT'); ?><br />
<span class="gensmall"><?php echo isset($this->vars['L_HEIGHT_DESC']) ? $this->vars['L_HEIGHT_DESC'] : $this->lang('L_HEIGHT_DESC'); ?></span>
</td>
<td class="row2" width="62%"> 
<input type="text" maxlength="5" size="5" name="add_gameheight" value="380" class="post" />
</td>
</tr>

<tr> 
<td class="cat" colspan="2" align="center">
<input type="submit" name="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" class="mainoption" />
</td>
</tr>

</table>
</form>
<br clear="all" />