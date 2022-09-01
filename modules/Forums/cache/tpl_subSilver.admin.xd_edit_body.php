<?php

// eXtreme Styles mod cache. Generated on Tue, 18 May 2021 16:35:10 +0000 (time=1621355710)

?><h1><?php echo isset($this->vars['L_XDATA_ADMIN']) ? $this->vars['L_XDATA_ADMIN'] : $this->lang('L_XDATA_ADMIN'); ?></h1>
<br />

<form action="<?php echo isset($this->vars['U_FORM_ACTION']) ? $this->vars['U_FORM_ACTION'] : $this->lang('U_FORM_ACTION'); ?>" method="post">

<table border="0" cellpadding="4" cellspacing="1" width="80%" class="forumline" align="center">
    <tr>
        <th align="center" height="25" class="thHead" nowrap="nowrap" colspan="2">&nbsp;<?php echo isset($this->vars['L_BASIC_OPTIONS']) ? $this->vars['L_BASIC_OPTIONS'] : $this->lang('L_BASIC_OPTIONS'); ?>&nbsp;</th>
    </tr>
    <tr>
        <td class="row1">
            <span class="gen"><?php echo isset($this->vars['L_NAME']) ? $this->vars['L_NAME'] : $this->lang('L_NAME'); ?></span>
        </td>
        <td class="row2">
            <input type="text" name="field_name" value="<?php echo isset($this->vars['NAME']) ? $this->vars['NAME'] : $this->lang('NAME'); ?>" />
        </td>
    </tr>
    <tr>
        <td class="row1">
            <span class="gen"><?php echo isset($this->vars['L_DESCRIPTION']) ? $this->vars['L_DESCRIPTION'] : $this->lang('L_DESCRIPTION'); ?></span>
        </td>
        <td class="row2">
            <textarea name="field_desc" style="width: 300px" rows="3" cols="30"><?php echo isset($this->vars['DESCRIPTION']) ? $this->vars['DESCRIPTION'] : $this->lang('DESCRIPTION'); ?></textarea>
        </td>
    </tr>
    <tr>
        <td class="row1">
            <span class="gen"><?php echo isset($this->vars['L_TYPE']) ? $this->vars['L_TYPE'] : $this->lang('L_TYPE'); ?></span>
        </td>
        <td class="row2">
            <select name="field_type">
                <option value="text" <?php echo isset($this->vars['TEXT_SELECTED']) ? $this->vars['TEXT_SELECTED'] : $this->lang('TEXT_SELECTED'); ?>><?php echo isset($this->vars['L_TEXT']) ? $this->vars['L_TEXT'] : $this->lang('L_TEXT'); ?></option>
                <option value="textarea" <?php echo isset($this->vars['TEXTAREA_SELECTED']) ? $this->vars['TEXTAREA_SELECTED'] : $this->lang('TEXTAREA_SELECTED'); ?>><?php echo isset($this->vars['L_TEXTAREA']) ? $this->vars['L_TEXTAREA'] : $this->lang('L_TEXTAREA'); ?></option>
                <option value="radio" <?php echo isset($this->vars['RADIO_SELECTED']) ? $this->vars['RADIO_SELECTED'] : $this->lang('RADIO_SELECTED'); ?>><?php echo isset($this->vars['L_RADIO']) ? $this->vars['L_RADIO'] : $this->lang('L_RADIO'); ?></option>
                <option value="select" <?php echo isset($this->vars['SELECT_SELECTED']) ? $this->vars['SELECT_SELECTED'] : $this->lang('SELECT_SELECTED'); ?>><?php echo isset($this->vars['L_SELECT']) ? $this->vars['L_SELECT'] : $this->lang('L_SELECT'); ?></option>
				<option value="checkbox" <?php echo isset($this->vars['CHECKBOX_SELECTED']) ? $this->vars['CHECKBOX_SELECTED'] : $this->lang('CHECKBOX_SELECTED'); ?>><?php echo isset($this->vars['L_CHECKBOX']) ? $this->vars['L_CHECKBOX'] : $this->lang('L_CHECKBOX'); ?></option>
                <option value="custom" <?php echo isset($this->vars['CUSTOM_SELECTED']) ? $this->vars['CUSTOM_SELECTED'] : $this->lang('CUSTOM_SELECTED'); ?>><?php echo isset($this->vars['L_CUSTOM']) ? $this->vars['L_CUSTOM'] : $this->lang('L_CUSTOM'); ?></option>
								<option value="date" <?php echo isset($this->vars['DATE_SELECTED']) ? $this->vars['DATE_SELECTED'] : $this->lang('DATE_SELECTED'); ?>><?php echo isset($this->vars['L_DATE']) ? $this->vars['L_DATE'] : $this->lang('L_DATE'); ?></option>
            </select>
        </td>
    </tr>
    <tr>
        <td class="row1">
            <span class="gen"><?php echo isset($this->vars['L_LENGTH']) ? $this->vars['L_LENGTH'] : $this->lang('L_LENGTH'); ?></span><br />
            <span class="gensmall"><?php echo isset($this->vars['L_LENGTH_EXPLAIN']) ? $this->vars['L_LENGTH_EXPLAIN'] : $this->lang('L_LENGTH_EXPLAIN'); ?></span>
        </td>
        <td class="row2">
            <input type="text" name="field_length" value="<?php echo isset($this->vars['LENGTH']) ? $this->vars['LENGTH'] : $this->lang('LENGTH'); ?>" />
        </td>
    </tr>
    <tr>
        <td class="row1">
            <span class="gen"><?php echo isset($this->vars['L_VALUES']) ? $this->vars['L_VALUES'] : $this->lang('L_VALUES'); ?></span><br />
            <span class="gensmall"><?php echo isset($this->vars['L_VALUES_EXPLAIN']) ? $this->vars['L_VALUES_EXPLAIN'] : $this->lang('L_VALUES_EXPLAIN'); ?></span>
        </td>
        <td class="row2">
            <textarea name="field_values" value="<?php echo isset($this->vars['VALUES']) ? $this->vars['VALUES'] : $this->lang('VALUES'); ?>" rows="6" cols="30" style="width: 300px"><?php echo isset($this->vars['VALUES']) ? $this->vars['VALUES'] : $this->lang('VALUES'); ?></textarea>
        </td>
    </tr>

    <tr>
        <td class="row1">
            <span class="gen"><?php echo isset($this->vars['L_ALLOW_BBCODE']) ? $this->vars['L_ALLOW_BBCODE'] : $this->lang('L_ALLOW_BBCODE'); ?></span>
        </td>
        <td class="row2">
            <input type="radio" name="allow_bbcode" value="1"<?php echo isset($this->vars['ALLOW_BBCODE_YES_CHECKED']) ? $this->vars['ALLOW_BBCODE_YES_CHECKED'] : $this->lang('ALLOW_BBCODE_YES_CHECKED'); ?> /><span class="gen"><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?></span>&nbsp;&nbsp;
            <input type="radio" name="allow_bbcode" value="0"<?php echo isset($this->vars['ALLOW_BBCODE_NO_CHECKED']) ? $this->vars['ALLOW_BBCODE_NO_CHECKED'] : $this->lang('ALLOW_BBCODE_NO_CHECKED'); ?> /><span class="gen"><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></span>&nbsp;&nbsp;
        </td>
    </tr>
    <tr>
        <td class="row1">
            <span class="gen"><?php echo isset($this->vars['L_ALLOW_SMILIES']) ? $this->vars['L_ALLOW_SMILIES'] : $this->lang('L_ALLOW_SMILIES'); ?></span>
        </td>
        <td class="row2">
            <input type="radio" name="allow_smilies" value="1"<?php echo isset($this->vars['ALLOW_SMILIES_YES_CHECKED']) ? $this->vars['ALLOW_SMILIES_YES_CHECKED'] : $this->lang('ALLOW_SMILIES_YES_CHECKED'); ?> /><span class="gen"><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?></span>&nbsp;&nbsp;
            <input type="radio" name="allow_smilies" value="0"<?php echo isset($this->vars['ALLOW_SMILIES_NO_CHECKED']) ? $this->vars['ALLOW_SMILIES_NO_CHECKED'] : $this->lang('ALLOW_SMILIES_NO_CHECKED'); ?> /><span class="gen"><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></span>&nbsp;&nbsp;
        </td>
    </tr>
    <tr>
        <td class="row1">
            <span class="gen"><?php echo isset($this->vars['L_ALLOW_HTML']) ? $this->vars['L_ALLOW_HTML'] : $this->lang('L_ALLOW_HTML'); ?></span>
        </td>
        <td class="row2">
            <input type="radio" name="allow_html" value="1"<?php echo isset($this->vars['ALLOW_HTML_YES_CHECKED']) ? $this->vars['ALLOW_HTML_YES_CHECKED'] : $this->lang('ALLOW_HTML_YES_CHECKED'); ?> /><span class="gen"><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?></span>&nbsp;&nbsp;
            <input type="radio" name="allow_html" value="0"<?php echo isset($this->vars['ALLOW_HTML_NO_CHECKED']) ? $this->vars['ALLOW_HTML_NO_CHECKED'] : $this->lang('ALLOW_HTML_NO_CHECKED'); ?> /><span class="gen"><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></span>&nbsp;&nbsp;
        </td>
    </tr>
    <tr>
        <td class="row1">
            <span class="gen"><?php echo isset($this->vars['L_VIEWTOPIC']) ? $this->vars['L_VIEWTOPIC'] : $this->lang('L_VIEWTOPIC'); ?></span>
        </td>
        <td class="row2">
            <input type="radio" name="viewtopic" value="1"<?php echo isset($this->vars['VIEWTOPIC_YES_CHECKED']) ? $this->vars['VIEWTOPIC_YES_CHECKED'] : $this->lang('VIEWTOPIC_YES_CHECKED'); ?> /><span class="gen"><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?></span>&nbsp;&nbsp;
            <input type="radio" name="viewtopic" value="0"<?php echo isset($this->vars['VIEWTOPIC_NO_CHECKED']) ? $this->vars['VIEWTOPIC_NO_CHECKED'] : $this->lang('VIEWTOPIC_NO_CHECKED'); ?> /><span class="gen"><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></span>&nbsp;&nbsp;
        </td>
    </tr>
    <tr>
        <td class="row1">
            <span class="gen"><?php echo isset($this->vars['L_SIGNUP']) ? $this->vars['L_SIGNUP'] : $this->lang('L_SIGNUP'); ?></span>
        </td>
        <td class="row2">
            <input type="radio" name="signup" value="1"<?php echo isset($this->vars['SIGNUP_YES_CHECKED']) ? $this->vars['SIGNUP_YES_CHECKED'] : $this->lang('SIGNUP_YES_CHECKED'); ?> /><span class="gen"><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?></span>&nbsp;&nbsp;
            <input type="radio" name="signup" value="0"<?php echo isset($this->vars['SIGNUP_NO_CHECKED']) ? $this->vars['SIGNUP_NO_CHECKED'] : $this->lang('SIGNUP_NO_CHECKED'); ?> /><span class="gen"><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></span>&nbsp;&nbsp;
        </td>
    </tr>
    <tr>
        <td class="row1">
            <span class="gen"><?php echo isset($this->vars['L_DEFAULT_AUTH']) ? $this->vars['L_DEFAULT_AUTH'] : $this->lang('L_DEFAULT_AUTH'); ?></span><br />
            <span class="gensmall"><?php echo isset($this->vars['L_DEFAULT_AUTH_EXPLAIN']) ? $this->vars['L_DEFAULT_AUTH_EXPLAIN'] : $this->lang('L_DEFAULT_AUTH_EXPLAIN'); ?></span>
        </td>
        <td class="row2">
            <input type="radio" name="default_auth" value="<?php echo isset($this->vars['AUTH_ALLOW']) ? $this->vars['AUTH_ALLOW'] : $this->lang('AUTH_ALLOW'); ?>"<?php echo isset($this->vars['DEFAULT_AUTH_ALLOW_CHECKED']) ? $this->vars['DEFAULT_AUTH_ALLOW_CHECKED'] : $this->lang('DEFAULT_AUTH_ALLOW_CHECKED'); ?> /><span class="gen"><?php echo isset($this->vars['L_ALLOW']) ? $this->vars['L_ALLOW'] : $this->lang('L_ALLOW'); ?></span><br />
            <input type="radio" name="default_auth" value="<?php echo isset($this->vars['AUTH_DENY']) ? $this->vars['AUTH_DENY'] : $this->lang('AUTH_DENY'); ?>"<?php echo isset($this->vars['DEFAULT_AUTH_DENY_CHECKED']) ? $this->vars['DEFAULT_AUTH_DENY_CHECKED'] : $this->lang('DEFAULT_AUTH_DENY_CHECKED'); ?> /><span class="gen"><?php echo isset($this->vars['L_DENY']) ? $this->vars['L_DENY'] : $this->lang('L_DENY'); ?></span><br />
        </td>
    </tr>
    <tr>
      <td class="catBottom" colspan="2" align="center"><input type="submit" name="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" class="mainoption" />&nbsp;&nbsp;<input type="reset" value="<?php echo isset($this->vars['L_RESET']) ? $this->vars['L_RESET'] : $this->lang('L_RESET'); ?>" class="liteoption" /></td>
    </tr>
</table>

<br />

<table border="0" cellpadding="4" cellspacing="1" width="80%" class="forumline" align="center">
    <tr>
        <th align="center" height="25" class="thHead" nowrap="nowrap" colspan="2">&nbsp;<?php echo isset($this->vars['L_ADVANCED_OPTIONS']) ? $this->vars['L_ADVANCED_OPTIONS'] : $this->lang('L_ADVANCED_OPTIONS'); ?>&nbsp;</th>
    </tr>
    <tr>
        <td colspan="2" class="row3" height="35" align="center"><?php echo isset($this->vars['L_ADVANCED_NOTICE']) ? $this->vars['L_ADVANCED_NOTICE'] : $this->lang('L_ADVANCED_NOTICE'); ?></td>
    </tr>
    <tr>
        <td class="row1">
            <span class="gen"><?php echo isset($this->vars['L_DISPLAY_TYPE']) ? $this->vars['L_DISPLAY_TYPE'] : $this->lang('L_DISPLAY_TYPE'); ?></span><br />
            <span class="gensmall"><?php echo isset($this->vars['L_DISPLAY_REGISTER_EXPLAIN']) ? $this->vars['L_DISPLAY_REGISTER_EXPLAIN'] : $this->lang('L_DISPLAY_REGISTER_EXPLAIN'); ?></span>
        </td>
        <td class="row2">
            <input type="radio" name="display_register" value="1"<?php echo isset($this->vars['DISPLAY_REGISTER_NORMAL_CHECKED']) ? $this->vars['DISPLAY_REGISTER_NORMAL_CHECKED'] : $this->lang('DISPLAY_REGISTER_NORMAL_CHECKED'); ?> /><span class="gen"><?php echo isset($this->vars['L_NORMAL']) ? $this->vars['L_NORMAL'] : $this->lang('L_NORMAL'); ?></span>&nbsp;&nbsp;
            <input type="radio" name="display_register" value="0"<?php echo isset($this->vars['DISPLAY_REGISTER_NONE_CHECKED']) ? $this->vars['DISPLAY_REGISTER_NONE_CHECKED'] : $this->lang('DISPLAY_REGISTER_NONE_CHECKED'); ?> /><span class="gen"><?php echo isset($this->vars['L_NONE']) ? $this->vars['L_NONE'] : $this->lang('L_NONE'); ?></span>&nbsp;&nbsp;
            <input type="radio" name="display_register" value="2"<?php echo isset($this->vars['DISPLAY_REGISTER_ROOT_CHECKED']) ? $this->vars['DISPLAY_REGISTER_ROOT_CHECKED'] : $this->lang('DISPLAY_REGISTER_ROOT_CHECKED'); ?> /><span class="gen"><?php echo isset($this->vars['L_ROOT']) ? $this->vars['L_ROOT'] : $this->lang('L_ROOT'); ?></span>
        </td>
    </tr>
    <tr>
        <td class="row1">
            <span class="gen"><?php echo isset($this->vars['L_DISPLAY_TYPE']) ? $this->vars['L_DISPLAY_TYPE'] : $this->lang('L_DISPLAY_TYPE'); ?></span><br />
            <span class="gensmall"><?php echo isset($this->vars['L_DISPLAY_PROFILE_EXPLAIN']) ? $this->vars['L_DISPLAY_PROFILE_EXPLAIN'] : $this->lang('L_DISPLAY_PROFILE_EXPLAIN'); ?></span>
        </td>
        <td class="row2">
            <input type="radio" name="display_viewprofile" value="1"<?php echo isset($this->vars['DISPLAY_PROFILE_NORMAL_CHECKED']) ? $this->vars['DISPLAY_PROFILE_NORMAL_CHECKED'] : $this->lang('DISPLAY_PROFILE_NORMAL_CHECKED'); ?> /><span class="gen"><?php echo isset($this->vars['L_NORMAL']) ? $this->vars['L_NORMAL'] : $this->lang('L_NORMAL'); ?></span>&nbsp;&nbsp;
            <input type="radio" name="display_viewprofile" value="0"<?php echo isset($this->vars['DISPLAY_PROFILE_NONE_CHECKED']) ? $this->vars['DISPLAY_PROFILE_NONE_CHECKED'] : $this->lang('DISPLAY_PROFILE_NONE_CHECKED'); ?> /><span class="gen"><?php echo isset($this->vars['L_NONE']) ? $this->vars['L_NONE'] : $this->lang('L_NONE'); ?></span>&nbsp;&nbsp;
            <input type="radio" name="display_viewprofile" value="2"<?php echo isset($this->vars['DISPLAY_PROFILE_ROOT_CHECKED']) ? $this->vars['DISPLAY_PROFILE_ROOT_CHECKED'] : $this->lang('DISPLAY_PROFILE_ROOT_CHECKED'); ?> /><span class="gen"><?php echo isset($this->vars['L_ROOT']) ? $this->vars['L_ROOT'] : $this->lang('L_ROOT'); ?></span>
        </td>
    </tr>
    <tr>
        <td class="row1">
            <span class="gen"><?php echo isset($this->vars['L_DISPLAY_TYPE']) ? $this->vars['L_DISPLAY_TYPE'] : $this->lang('L_DISPLAY_TYPE'); ?></span><br />
            <span class="gensmall"><?php echo isset($this->vars['L_DISPLAY_POSTING_EXPLAIN']) ? $this->vars['L_DISPLAY_POSTING_EXPLAIN'] : $this->lang('L_DISPLAY_POSTING_EXPLAIN'); ?></span>
        </td>
        <td class="row2">
            <input type="radio" name="display_posting" value="1"<?php echo isset($this->vars['DISPLAY_POSTING_NORMAL_CHECKED']) ? $this->vars['DISPLAY_POSTING_NORMAL_CHECKED'] : $this->lang('DISPLAY_POSTING_NORMAL_CHECKED'); ?> /><span class="gen"><?php echo isset($this->vars['L_NORMAL']) ? $this->vars['L_NORMAL'] : $this->lang('L_NORMAL'); ?></span>&nbsp;&nbsp;
            <input type="radio" name="display_posting" value="0"<?php echo isset($this->vars['DISPLAY_POSTING_NONE_CHECKED']) ? $this->vars['DISPLAY_POSTING_NONE_CHECKED'] : $this->lang('DISPLAY_POSTING_NONE_CHECKED'); ?> /><span class="gen"><?php echo isset($this->vars['L_NONE']) ? $this->vars['L_NONE'] : $this->lang('L_NONE'); ?></span>&nbsp;&nbsp;
            <input type="radio" name="display_posting" value="2"<?php echo isset($this->vars['DISPLAY_POSTING_ROOT_CHECKED']) ? $this->vars['DISPLAY_POSTING_ROOT_CHECKED'] : $this->lang('DISPLAY_POSTING_ROOT_CHECKED'); ?> /><span class="gen"><?php echo isset($this->vars['L_ROOT']) ? $this->vars['L_ROOT'] : $this->lang('L_ROOT'); ?></span>
        </td>
    </tr>
    <tr>
        <td class="row1">
            <span class="gen"><?php echo isset($this->vars['L_CODE_NAME']) ? $this->vars['L_CODE_NAME'] : $this->lang('L_CODE_NAME'); ?></span><br />
            <span class="gensmall"><?php echo isset($this->vars['L_CODE_NAME_EXPLAIN']) ? $this->vars['L_CODE_NAME_EXPLAIN'] : $this->lang('L_CODE_NAME_EXPLAIN'); ?></span>
        </td>
        <td class="row2">
            <input type="text" name="new_code_name" value="<?php echo isset($this->vars['CODE_NAME']) ? $this->vars['CODE_NAME'] : $this->lang('CODE_NAME'); ?>" size="25" />
        </td>
    </tr>
    <tr>
        <td class="row1">
            <span class="gen"><?php echo isset($this->vars['L_HANDLE_INPUT']) ? $this->vars['L_HANDLE_INPUT'] : $this->lang('L_HANDLE_INPUT'); ?></span><br />
            <span class="gensmall"><?php echo isset($this->vars['L_HANDLE_INPUT_EXPLAIN']) ? $this->vars['L_HANDLE_INPUT_EXPLAIN'] : $this->lang('L_HANDLE_INPUT_EXPLAIN'); ?></span>
        </td>
        <td class="row2">
            <input type="radio" name="handle_input" value="1"<?php echo isset($this->vars['HANDLE_INPUT_YES_CHECKED']) ? $this->vars['HANDLE_INPUT_YES_CHECKED'] : $this->lang('HANDLE_INPUT_YES_CHECKED'); ?> /><span class="gen"><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?></span>&nbsp;&nbsp;
            <input type="radio" name="handle_input" value="0"<?php echo isset($this->vars['HANDLE_INPUT_NO_CHECKED']) ? $this->vars['HANDLE_INPUT_NO_CHECKED'] : $this->lang('HANDLE_INPUT_NO_CHECKED'); ?> /><span class="gen"><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></span>&nbsp;&nbsp;
        </td>
    </tr>
    <tr>
        <td class="row1">
            <span class="gen"><?php echo isset($this->vars['L_REGEXP']) ? $this->vars['L_REGEXP'] : $this->lang('L_REGEXP'); ?></span><br />
            <span class="gensmall"><?php echo isset($this->vars['L_REGEXP_EXPLAIN']) ? $this->vars['L_REGEXP_EXPLAIN'] : $this->lang('L_REGEXP_EXPLAIN'); ?></span>
        </td>
        <td class="row2">
			<input type="radio" name="regexp" value="none" <?php echo isset($this->vars['REGEXP_NONE_CHECKED']) ? $this->vars['REGEXP_NONE_CHECKED'] : $this->lang('REGEXP_NONE_CHECKED'); ?> /><span class="gen"><?php echo isset($this->vars['L_NONE']) ? $this->vars['L_NONE'] : $this->lang('L_NONE'); ?></span>&nbsp;&nbsp;<br />
		
			<input type="radio" name="regexp" value="numbers" <?php echo isset($this->vars['REGEXP_NUMBERS_CHECKED']) ? $this->vars['REGEXP_NUMBERS_CHECKED'] : $this->lang('REGEXP_NUMBERS_CHECKED'); ?> /><span class="gen"><?php echo isset($this->vars['L_NUMBERS']) ? $this->vars['L_NUMBERS'] : $this->lang('L_NUMBERS'); ?></span>&nbsp;&nbsp;<br />
			<input type="radio" name="regexp" value="letters" <?php echo isset($this->vars['REGEXP_LETTERS_CHECKED']) ? $this->vars['REGEXP_LETTERS_CHECKED'] : $this->lang('REGEXP_LETTERS_CHECKED'); ?> /><span class="gen"><?php echo isset($this->vars['L_LETTERS']) ? $this->vars['L_LETTERS'] : $this->lang('L_LETTERS'); ?></span>&nbsp;&nbsp;<br />
			<input type="radio" name="regexp" value="custom" <?php echo isset($this->vars['REGEXP_CUSTOM_CHECKED']) ? $this->vars['REGEXP_CUSTOM_CHECKED'] : $this->lang('REGEXP_CUSTOM_CHECKED'); ?> /><span class="gen"><?php echo isset($this->vars['L_CUSTOM']) ? $this->vars['L_CUSTOM'] : $this->lang('L_CUSTOM'); ?>: <input type="text" name="regexp_custom" value="<?php echo isset($this->vars['REGEXP_CUSTOM']) ? $this->vars['REGEXP_CUSTOM'] : $this->lang('REGEXP_CUSTOM'); ?>" /></span>&nbsp;&nbsp;
		</td>
	</tr>
	<tr>
		<td class="row1">
			<span class="gen"><?php echo isset($this->vars['L_MANDITORY']) ? $this->vars['L_MANDITORY'] : $this->lang('L_MANDITORY'); ?></span>
		</td>
		<td class="row2">
			<input type="radio" name="manditory" value="1" <?php echo isset($this->vars['MANDITORY_YES_CHECKED']) ? $this->vars['MANDITORY_YES_CHECKED'] : $this->lang('MANDITORY_YES_CHECKED'); ?> /><span class="gen"><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?></span>&nbsp;&nbsp;
			<input type="radio" name="manditory" value="0" <?php echo isset($this->vars['MANDITORY_NO_CHECKED']) ? $this->vars['MANDITORY_NO_CHECKED'] : $this->lang('MANDITORY_NO_CHECKED'); ?> /><span class="gen"><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></span>&nbsp;&nbsp;
        </td>
    </tr>
    <tr>
      <td class="catBottom" colspan="2" align="center"><input type="submit" name="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" class="mainoption" />&nbsp;&nbsp;<input type="reset" value="<?php echo isset($this->vars['L_RESET']) ? $this->vars['L_RESET'] : $this->lang('L_RESET'); ?>" class="liteoption" /></td>
    </tr>
</table>

<?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?>

</form>