<?php

// eXtreme Styles mod cache. Generated on Sat, 01 May 2021 23:54:11 +0000 (time=1619913251)

?><h1><?php echo isset($this->vars['L_WORDS_TITLE']) ? $this->vars['L_WORDS_TITLE'] : $this->lang('L_WORDS_TITLE'); ?></h1>

<p><?php echo isset($this->vars['L_WORDS_TEXT']) ? $this->vars['L_WORDS_TEXT'] : $this->lang('L_WORDS_TEXT'); ?></p>

<form method="post" action="<?php echo isset($this->vars['S_WORDS_ACTION']) ? $this->vars['S_WORDS_ACTION'] : $this->lang('S_WORDS_ACTION'); ?>"><table cellspacing="1" cellpadding="4" border="0" align="center" class="forumline">
    <tr>
        <th colspan="2" class="thHead"><?php echo isset($this->vars['L_WORD_CENSOR']) ? $this->vars['L_WORD_CENSOR'] : $this->lang('L_WORD_CENSOR'); ?></th>
    </tr>
    <tr>
        <td class="row1"><?php echo isset($this->vars['L_WORD']) ? $this->vars['L_WORD'] : $this->lang('L_WORD'); ?></td>
        <td class="row2"><input type="text" name="word" value="<?php echo isset($this->vars['WORD']) ? $this->vars['WORD'] : $this->lang('WORD'); ?>" /></td>
    </tr>
    <tr>
        <td class="row1"><?php echo isset($this->vars['L_REPLACEMENT']) ? $this->vars['L_REPLACEMENT'] : $this->lang('L_REPLACEMENT'); ?></td>
        <td class="row2"><input type="text" name="replacement" value="<?php echo isset($this->vars['REPLACEMENT']) ? $this->vars['REPLACEMENT'] : $this->lang('REPLACEMENT'); ?>" /></td>
    </tr>
    <tr>
        <td class="catBottom" colspan="2" align="center"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?><input type="submit" name="save" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" class="mainoption" /></td>
    </tr>
</table></form>