<?php

// eXtreme Styles mod cache. Generated on Sat, 01 May 2021 23:54:04 +0000 (time=1619913244)

?><h1><?php echo isset($this->vars['L_SEARCHS_TITLE']) ? $this->vars['L_SEARCHS_TITLE'] : $this->lang('L_SEARCHS_TITLE'); ?></h1>

<p class="gen"><?php echo isset($this->vars['L_SEARCHS_TEXT']) ? $this->vars['L_SEARCHS_TEXT'] : $this->lang('L_SEARCHS_TEXT'); ?></p>

<form method="post" action="<?php echo isset($this->vars['S_SEARCHS_ACTION']) ? $this->vars['S_SEARCHS_ACTION'] : $this->lang('S_SEARCHS_ACTION'); ?>"><table cellspacing="1" cellpadding="4" border="0" align="center" class="forumline">
    <tr>
        <th class="thCornerL"><?php echo isset($this->vars['L_SEARCH_NAME']) ? $this->vars['L_SEARCH_NAME'] : $this->lang('L_SEARCH_NAME'); ?></th>
        <th class="thTop"><?php echo isset($this->vars['L_EDIT']) ? $this->vars['L_EDIT'] : $this->lang('L_EDIT'); ?></th>
        <th class="thCornerR"><?php echo isset($this->vars['L_DELETE']) ? $this->vars['L_DELETE'] : $this->lang('L_DELETE'); ?></th>
    </tr>
    <?php

$addsearch_count = ( isset($this->_tpldata['addsearch.']) ) ?  sizeof($this->_tpldata['addsearch.']) : 0;
for ($addsearch_i = 0; $addsearch_i < $addsearch_count; $addsearch_i++)
{
 $addsearch_item = &$this->_tpldata['addsearch.'][$addsearch_i];
 $addsearch_item['S_ROW_COUNT'] = $addsearch_i;
 $addsearch_item['S_NUM_ROWS'] = $addsearch_count;

?>
    <tr>
        <td class="<?php echo isset($addsearch_item['ROW_CLASS']) ? $addsearch_item['ROW_CLASS'] : ''; ?>" align="center"><span class="gen"><?php echo isset($addsearch_item['SEARCH_NAME']) ? $addsearch_item['SEARCH_NAME'] : ''; ?></span></td>
        <td class="<?php echo isset($addsearch_item['ROW_CLASS']) ? $addsearch_item['ROW_CLASS'] : ''; ?>" align="center"><span class="gen"><a href="<?php echo isset($addsearch_item['U_SEARCH_EDIT']) ? $addsearch_item['U_SEARCH_EDIT'] : ''; ?>"><?php echo isset($this->vars['L_EDIT']) ? $this->vars['L_EDIT'] : $this->lang('L_EDIT'); ?></a></span></td>
        <td class="<?php echo isset($addsearch_item['ROW_CLASS']) ? $addsearch_item['ROW_CLASS'] : ''; ?>" align="center"><span class="gen"><a href="<?php echo isset($addsearch_item['U_SEARCH_DELETE']) ? $addsearch_item['U_SEARCH_DELETE'] : ''; ?>"><?php echo isset($this->vars['L_DELETE']) ? $this->vars['L_DELETE'] : $this->lang('L_DELETE'); ?></a></span></td>
    </tr>
    <?php

} // END addsearch

if(isset($addsearch_item)) { unset($addsearch_item); } 

?>            
    <tr>
        <td class="catBottom" align="center" colspan="6"><input type="submit" class="mainoption" name="add" value="<?php echo isset($this->vars['L_ADD_SEARCH']) ? $this->vars['L_ADD_SEARCH'] : $this->lang('L_ADD_SEARCH'); ?>" /></td>
    </tr>
</table></form>