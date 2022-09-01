<?php

// eXtreme Styles mod cache. Generated on Sat, 01 May 2021 23:54:07 +0000 (time=1619913247)

?><h1><?php echo isset($this->vars['L_WORDS_TITLE']) ? $this->vars['L_WORDS_TITLE'] : $this->lang('L_WORDS_TITLE'); ?></h1>

<P><?php echo isset($this->vars['L_WORDS_TEXT']) ? $this->vars['L_WORDS_TEXT'] : $this->lang('L_WORDS_TEXT'); ?></p>

<form method="post" action="<?php echo isset($this->vars['S_WORDS_ACTION']) ? $this->vars['S_WORDS_ACTION'] : $this->lang('S_WORDS_ACTION'); ?>"><table cellspacing="1" cellpadding="4" border="0" align="center" class="forumline">
    <tr>
        <th class="thCornerL"><?php echo isset($this->vars['L_WORD']) ? $this->vars['L_WORD'] : $this->lang('L_WORD'); ?></th>
        <th class="thTop"><?php echo isset($this->vars['L_REPLACEMENT']) ? $this->vars['L_REPLACEMENT'] : $this->lang('L_REPLACEMENT'); ?></th>
        <th colspan="2" class="thCornerR"><?php echo isset($this->vars['L_ACTION']) ? $this->vars['L_ACTION'] : $this->lang('L_ACTION'); ?></th>
    </tr>
    <?php

$words_count = ( isset($this->_tpldata['words.']) ) ?  sizeof($this->_tpldata['words.']) : 0;
for ($words_i = 0; $words_i < $words_count; $words_i++)
{
 $words_item = &$this->_tpldata['words.'][$words_i];
 $words_item['S_ROW_COUNT'] = $words_i;
 $words_item['S_NUM_ROWS'] = $words_count;

?>
    <tr>
        <td class="<?php echo isset($words_item['ROW_CLASS']) ? $words_item['ROW_CLASS'] : ''; ?>" align="center"><?php echo isset($words_item['WORD']) ? $words_item['WORD'] : ''; ?></td>
        <td class="<?php echo isset($words_item['ROW_CLASS']) ? $words_item['ROW_CLASS'] : ''; ?>" align="center"><?php echo isset($words_item['REPLACEMENT']) ? $words_item['REPLACEMENT'] : ''; ?></td>
        <td class="<?php echo isset($words_item['ROW_CLASS']) ? $words_item['ROW_CLASS'] : ''; ?>"><a href="<?php echo isset($words_item['U_WORD_EDIT']) ? $words_item['U_WORD_EDIT'] : ''; ?>"><?php echo isset($this->vars['L_EDIT']) ? $this->vars['L_EDIT'] : $this->lang('L_EDIT'); ?></a></td>
        <td class="<?php echo isset($words_item['ROW_CLASS']) ? $words_item['ROW_CLASS'] : ''; ?>"><a href="<?php echo isset($words_item['U_WORD_DELETE']) ? $words_item['U_WORD_DELETE'] : ''; ?>"><?php echo isset($this->vars['L_DELETE']) ? $this->vars['L_DELETE'] : $this->lang('L_DELETE'); ?></a></td>
    </tr>
    <?php

} // END words

if(isset($words_item)) { unset($words_item); } 

?>
    <tr>
        <td colspan="5" align="center" class="catBottom"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?><input type="submit" name="add" value="<?php echo isset($this->vars['L_ADD_WORD']) ? $this->vars['L_ADD_WORD'] : $this->lang('L_ADD_WORD'); ?>" class="mainoption" /></td>
    </tr>
</table></form>