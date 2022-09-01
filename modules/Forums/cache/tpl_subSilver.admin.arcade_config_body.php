<?php

// eXtreme Styles mod cache. Generated on Sat, 01 May 2021 23:49:01 +0000 (time=1619912941)

?><div class="maintitle"><?php echo isset($this->vars['L_CONFIGURATION_TITLE']) ? $this->vars['L_CONFIGURATION_TITLE'] : $this->lang('L_CONFIGURATION_TITLE'); ?></div>
<br />
<p><?php echo isset($this->vars['L_CONFIGURATION_EXPLAIN']) ? $this->vars['L_CONFIGURATION_EXPLAIN'] : $this->lang('L_CONFIGURATION_EXPLAIN'); ?></p>
<form action="<?php echo isset($this->vars['S_CONFIG_ACTION']) ? $this->vars['S_CONFIG_ACTION'] : $this->lang('S_CONFIG_ACTION'); ?>" method="post">
<table width="99%" cellpadding="3" cellspacing="1" border="0" align="center" class="forumline">
<tr>
<th colspan="2"><?php echo isset($this->vars['L_GENERAL_SETTINGS']) ? $this->vars['L_GENERAL_SETTINGS'] : $this->lang('L_GENERAL_SETTINGS'); ?></th>
</tr>
<!-- use_category_mod -->
<tr>
<td class="row1" width="38%"><?php echo isset($this->vars['L_USE_CATEGORY_MOD']) ? $this->vars['L_USE_CATEGORY_MOD'] : $this->lang('L_USE_CATEGORY_MOD'); ?><br />
<span class="gensmall"><?php echo isset($this->vars['L_USE_CATEGORY_MOD_EXPLAIN']) ? $this->vars['L_USE_CATEGORY_MOD_EXPLAIN'] : $this->lang('L_USE_CATEGORY_MOD_EXPLAIN'); ?></span>
</td>
<td class="row2" width="62%">
<input type="radio" name="use_category_mod" value="1" <?php echo isset($this->vars['S_USE_CATEGORY_MOD_YES']) ? $this->vars['S_USE_CATEGORY_MOD_YES'] : $this->lang('S_USE_CATEGORY_MOD_YES'); ?> />
<?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;
<input type="radio" name="use_category_mod" value="0" <?php echo isset($this->vars['S_USE_CATEGORY_MOD_NO']) ? $this->vars['S_USE_CATEGORY_MOD_NO'] : $this->lang('S_USE_CATEGORY_MOD_NO'); ?> />
<?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?>
</td>
</tr>
<!-- use_fav_category -->
<tr>
<td class="row1" width="38%"><?php echo isset($this->vars['L_USE_FAV_CATEGORY']) ? $this->vars['L_USE_FAV_CATEGORY'] : $this->lang('L_USE_FAV_CATEGORY'); ?><br />
<span class="gensmall"><?php echo isset($this->vars['L_USE_FAV_CATEGORY_EXPLAIN']) ? $this->vars['L_USE_FAV_CATEGORY_EXPLAIN'] : $this->lang('L_USE_FAV_CATEGORY_EXPLAIN'); ?></span>
</td>
<td class="row2" width="62%">
<input type="radio" name="use_fav_category" value="1" <?php echo isset($this->vars['S_USE_FAV_CATEGORY_YES']) ? $this->vars['S_USE_FAV_CATEGORY_YES'] : $this->lang('S_USE_FAV_CATEGORY_YES'); ?> />
<?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>
<input type="radio" name="use_fav_category" value="0" <?php echo isset($this->vars['S_USE_FAV_CATEGORY_NO']) ? $this->vars['S_USE_FAV_CATEGORY_NO'] : $this->lang('S_USE_FAV_CATEGORY_NO'); ?> />
<?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?>
</td>
</tr>
<!-- category_preview_games -->
<tr>
<td class="row1" width="38%"><?php echo isset($this->vars['L_CATEGORY_PREVIEW_GAMES']) ? $this->vars['L_CATEGORY_PREVIEW_GAMES'] : $this->lang('L_CATEGORY_PREVIEW_GAMES'); ?><br />
<span class="gensmall"><?php echo isset($this->vars['L_CATEGORY_PREVIEW_GAMES_EXPLAIN']) ? $this->vars['L_CATEGORY_PREVIEW_GAMES_EXPLAIN'] : $this->lang('L_CATEGORY_PREVIEW_GAMES_EXPLAIN'); ?></span>
</td>
<td class="row2" width="62%">
<input type="text" maxlength="100" size="5" name="category_preview_games" value="<?php echo isset($this->vars['S_CATEGORY_PREVIEW_GAMES']) ? $this->vars['S_CATEGORY_PREVIEW_GAMES'] : $this->lang('S_CATEGORY_PREVIEW_GAMES'); ?>" class="post" />
</td>
</tr>
<!-- games_par_page -->
<tr>
<td class="row1" width="38%"><?php echo isset($this->vars['L_GAMES_PAR_PAGE']) ? $this->vars['L_GAMES_PAR_PAGE'] : $this->lang('L_GAMES_PAR_PAGE'); ?><br />
<span class="gensmall"><?php echo isset($this->vars['L_GAMES_PAR_PAGE_EXPLAIN']) ? $this->vars['L_GAMES_PAR_PAGE_EXPLAIN'] : $this->lang('L_GAMES_PAR_PAGE_EXPLAIN'); ?></span>
</td>
<td class="row2" width="62%">
<input type="text" maxlength="100" size="5" name="games_par_page" value="<?php echo isset($this->vars['S_GAMES_PAR_PAGE']) ? $this->vars['S_GAMES_PAR_PAGE'] : $this->lang('S_GAMES_PAR_PAGE'); ?>" class="post" />
</td>
</tr>
<!-- game_order -->
<tr>
<td class="row1" width="38%"><?php echo isset($this->vars['L_GAME_ORDER']) ? $this->vars['L_GAME_ORDER'] : $this->lang('L_GAME_ORDER'); ?><br />
<span class="gensmall"><?php echo isset($this->vars['L_GAME_ORDER_EXPLAIN']) ? $this->vars['L_GAME_ORDER_EXPLAIN'] : $this->lang('L_GAME_ORDER_EXPLAIN'); ?></span></td>
<td class="row2" width="62%">
<select name='game_order' class="post" >
<?php echo isset($this->vars['S_GAME_ORDER']) ? $this->vars['S_GAME_ORDER'] : $this->lang('S_GAME_ORDER'); ?>
</select>
</td>
</tr>
<!-- linkcat_align -->
<tr>
<td class="row1" width="38%"><?php echo isset($this->vars['L_LINKCAT_ALIGN']) ? $this->vars['L_LINKCAT_ALIGN'] : $this->lang('L_LINKCAT_ALIGN'); ?><br />
<span class="gensmall"><?php echo isset($this->vars['L_LINKCAT_ALIGN_EXPLAIN']) ? $this->vars['L_LINKCAT_ALIGN_EXPLAIN'] : $this->lang('L_LINKCAT_ALIGN_EXPLAIN'); ?></span></td>
<td class="row2" width="62%">
<select name='linkcat_align' class="post" >
<?php echo isset($this->vars['S_LINKCAT_ALIGN']) ? $this->vars['S_LINKCAT_ALIGN'] : $this->lang('S_LINKCAT_ALIGN'); ?>
</select>
</td>
</tr>
<!-- arcade_announcement -->
<tr>
<td class="row1" width="38%"><?php echo isset($this->vars['L_ARCADE_ANNOUNCEMENT']) ? $this->vars['L_ARCADE_ANNOUNCEMENT'] : $this->lang('L_ARCADE_ANNOUNCEMENT'); ?><br />
<span class="gensmall"><?php echo isset($this->vars['L_ARCADE_ANNOUNCEMENT_EXPLAIN']) ? $this->vars['L_ARCADE_ANNOUNCEMENT_EXPLAIN'] : $this->lang('L_ARCADE_ANNOUNCEMENT_EXPLAIN'); ?></span></td>
<td align='left' class='row2'>
<textarea NAME='arcade_announcement' class="post" ROWS='2' COLS='60' wrap='virtual'><?php echo isset($this->vars['S_ARCADE_ANNOUNCEMENT']) ? $this->vars['S_ARCADE_ANNOUNCEMENT'] : $this->lang('S_ARCADE_ANNOUNCEMENT'); ?></textarea>
</td>
</tr>
<tr>
<th colspan="2"><?php echo isset($this->vars['L_GAME_ACCESS_SETTINGS']) ? $this->vars['L_GAME_ACCESS_SETTINGS'] : $this->lang('L_GAME_ACCESS_SETTINGS'); ?></th>
</tr>
<!-- limit_by_posts -->
<tr>
<td class="row1" width="38%"><?php echo isset($this->vars['L_LIMIT_BY_POSTS']) ? $this->vars['L_LIMIT_BY_POSTS'] : $this->lang('L_LIMIT_BY_POSTS'); ?><br />
<span class="gensmall"><?php echo isset($this->vars['L_LIMIT_BY_POSTS_EXPLAIN']) ? $this->vars['L_LIMIT_BY_POSTS_EXPLAIN'] : $this->lang('L_LIMIT_BY_POSTS_EXPLAIN'); ?></span>
</td>
<td class="row2" width="62%">
<input type="radio" name="limit_by_posts" value="1" <?php echo isset($this->vars['S_LIMIT_BY_POSTS_YES']) ? $this->vars['S_LIMIT_BY_POSTS_YES'] : $this->lang('S_LIMIT_BY_POSTS_YES'); ?> />
<?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;
<input type="radio" name="limit_by_posts" value="0" <?php echo isset($this->vars['S_LIMIT_BY_POSTS_NO']) ? $this->vars['S_LIMIT_BY_POSTS_NO'] : $this->lang('S_LIMIT_BY_POSTS_NO'); ?> />
<?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?>
</td>
</tr>
<!-- limit_type -->
<tr>
<td class="row1" width="38%"><?php echo isset($this->vars['L_LIMIT_TYPE']) ? $this->vars['L_LIMIT_TYPE'] : $this->lang('L_LIMIT_TYPE'); ?><br />
<span class="gensmall"><?php echo isset($this->vars['L_LIMIT_TYPE_EXPLAIN']) ? $this->vars['L_LIMIT_TYPE_EXPLAIN'] : $this->lang('L_LIMIT_TYPE_EXPLAIN'); ?></span>
</td>
<td class="row2" width="62%">
<input type="radio" name="limit_type" value="posts" <?php echo isset($this->vars['S_LIMIT_TYPE_POSTS']) ? $this->vars['S_LIMIT_TYPE_POSTS'] : $this->lang('S_LIMIT_TYPE_POSTS'); ?> />
<?php echo isset($this->vars['L_POSTS_ONLY']) ? $this->vars['L_POSTS_ONLY'] : $this->lang('L_POSTS_ONLY'); ?><br />
<input type="radio" name="limit_type" value="date" <?php echo isset($this->vars['S_LIMIT_TYPE_DATE']) ? $this->vars['S_LIMIT_TYPE_DATE'] : $this->lang('S_LIMIT_TYPE_DATE'); ?> />
<?php echo isset($this->vars['L_POSTS_DATE']) ? $this->vars['L_POSTS_DATE'] : $this->lang('L_POSTS_DATE'); ?>
</td>
</tr>
<!-- posts_needed -->
<tr>
<td class="row1" width="38%"><?php echo isset($this->vars['L_POSTS_NEEDED']) ? $this->vars['L_POSTS_NEEDED'] : $this->lang('L_POSTS_NEEDED'); ?><br />
<span class="gensmall"><?php echo isset($this->vars['L_POSTS_NEEDED_EXPLAIN']) ? $this->vars['L_POSTS_NEEDED_EXPLAIN'] : $this->lang('L_POSTS_NEEDED_EXPLAIN'); ?></span>
</td>
<td class="row2" width="62%">
<input type="text" maxlength="100" size="5" name="posts_needed" value="<?php echo isset($this->vars['S_POSTS_NEEDED']) ? $this->vars['S_POSTS_NEEDED'] : $this->lang('S_POSTS_NEEDED'); ?>" class="post" />
</td>
</tr>
<!-- days_limit -->
<tr>
<td class="row1" width="38%"><?php echo isset($this->vars['L_DAYS_LIMIT']) ? $this->vars['L_DAYS_LIMIT'] : $this->lang('L_DAYS_LIMIT'); ?><br />
<span class="gensmall"><?php echo isset($this->vars['L_DAYS_LIMIT_EXPLAIN']) ? $this->vars['L_DAYS_LIMIT_EXPLAIN'] : $this->lang('L_DAYS_LIMIT_EXPLAIN'); ?></span>
</td>
<td class="row2" width="62%">
<input type="text" maxlength="100" size="5" name="days_limit" value="<?php echo isset($this->vars['S_DAYS_LIMIT']) ? $this->vars['S_DAYS_LIMIT'] : $this->lang('S_DAYS_LIMIT'); ?>" class="post" />
</td>
</tr>
<tr>
<th colspan="2"><?php echo isset($this->vars['L_GAMES_AREA_SETTINGS']) ? $this->vars['L_GAMES_AREA_SETTINGS'] : $this->lang('L_GAMES_AREA_SETTINGS'); ?></th>
</tr>
<!-- display_winner_avatar -->
<tr>
<td class="row1" width="38%"><?php echo isset($this->vars['L_DISPLAY_WINNER_AVATAR']) ? $this->vars['L_DISPLAY_WINNER_AVATAR'] : $this->lang('L_DISPLAY_WINNER_AVATAR'); ?><br />
<span class="gensmall"><?php echo isset($this->vars['L_DISPLAY_WINNER_AVATAR_EXPLAIN']) ? $this->vars['L_DISPLAY_WINNER_AVATAR_EXPLAIN'] : $this->lang('L_DISPLAY_WINNER_AVATAR_EXPLAIN'); ?></span>
</td>
<td class="row2" width="62%">
<input type="radio" name="display_winner_avatar" value="1" <?php echo isset($this->vars['S_DISPLAY_WINNER_AVATAR_YES']) ? $this->vars['S_DISPLAY_WINNER_AVATAR_YES'] : $this->lang('S_DISPLAY_WINNER_AVATAR_YES'); ?> />
<?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;
<input type="radio" name="display_winner_avatar" value="0" <?php echo isset($this->vars['S_DISPLAY_WINNER_AVATAR_NO']) ? $this->vars['S_DISPLAY_WINNER_AVATAR_NO'] : $this->lang('S_DISPLAY_WINNER_AVATAR_NO'); ?> />
<?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?>
</td>
</tr>
<tr>
<td class="row1" width="38%"><?php echo isset($this->vars['L_WINNER_AVATAR_POSITION']) ? $this->vars['L_WINNER_AVATAR_POSITION'] : $this->lang('L_WINNER_AVATAR_POSITION'); ?><br />
<span class="gensmall"><?php echo isset($this->vars['L_WINNER_AVATAR_POSITION_EXPLAIN']) ? $this->vars['L_WINNER_AVATAR_POSITION_EXPLAIN'] : $this->lang('L_WINNER_AVATAR_POSITION_EXPLAIN'); ?></span>
</td>
<td class="row2" width="62%">
<input type="radio" name="winner_avatar_position" value="left" <?php echo isset($this->vars['S_WINNER_AVATAR_LEFT']) ? $this->vars['S_WINNER_AVATAR_LEFT'] : $this->lang('S_WINNER_AVATAR_LEFT'); ?> />
<?php echo isset($this->vars['L_LEFT']) ? $this->vars['L_LEFT'] : $this->lang('L_LEFT'); ?><br />
<input type="radio" name="winner_avatar_position" value="right" <?php echo isset($this->vars['S_WINNER_AVATAR_RIGHT']) ? $this->vars['S_WINNER_AVATAR_RIGHT'] : $this->lang('S_WINNER_AVATAR_RIGHT'); ?> />
<?php echo isset($this->vars['L_RIGHT']) ? $this->vars['L_RIGHT'] : $this->lang('L_RIGHT'); ?>
</td>
</tr>
<!-- maxsize_avatar -->
<tr>
<td class="row1" width="38%"><?php echo isset($this->vars['L_MAXSIZE_AVATAR']) ? $this->vars['L_MAXSIZE_AVATAR'] : $this->lang('L_MAXSIZE_AVATAR'); ?><br />
<span class="gensmall"><?php echo isset($this->vars['L_MAXSIZE_AVATAR_EXPLAIN']) ? $this->vars['L_MAXSIZE_AVATAR_EXPLAIN'] : $this->lang('L_MAXSIZE_AVATAR_EXPLAIN'); ?></span>
</td>
<td class="row2" width="62%">
<input type="text" maxlength="10" size="5" name="maxsize_avatar" value="<?php echo isset($this->vars['S_MAXSIZE_AVATAR']) ? $this->vars['S_MAXSIZE_AVATAR'] : $this->lang('S_MAXSIZE_AVATAR'); ?>" class="post" />
</td>
</tr>

<tr>
<th colspan="2"><?php echo isset($this->vars['L_STATARCADE_SETTINGS']) ? $this->vars['L_STATARCADE_SETTINGS'] : $this->lang('L_STATARCADE_SETTINGS'); ?></th>
</tr>
<!-- stat_par_page -->
<tr>
<td class="row1" width="38%"><?php echo isset($this->vars['L_STAT_PAR_PAGE']) ? $this->vars['L_STAT_PAR_PAGE'] : $this->lang('L_STAT_PAR_PAGE'); ?><br />
<span class="gensmall"><?php echo isset($this->vars['L_STAT_PAR_PAGE_EXPLAIN']) ? $this->vars['L_STAT_PAR_PAGE_EXPLAIN'] : $this->lang('L_STAT_PAR_PAGE_EXPLAIN'); ?></span>
</td>
<td class="row2" width="62%">
<input type="text" maxlength="100" size="5" name="stat_par_page" value="<?php echo isset($this->vars['S_STAT_PAR_PAGE']) ? $this->vars['S_STAT_PAR_PAGE'] : $this->lang('S_STAT_PAR_PAGE'); ?>" class="post" />
</td>
</tr>
<tr>
<td class="cat" colspan="2" align="center"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?>
<input type="submit" name="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" class="mainoption" />
&nbsp;&nbsp;
<input type="reset" value="<?php echo isset($this->vars['L_RESET']) ? $this->vars['L_RESET'] : $this->lang('L_RESET'); ?>" class="button" />
</td>
</tr>

</table>
</form>
<br clear="all" />