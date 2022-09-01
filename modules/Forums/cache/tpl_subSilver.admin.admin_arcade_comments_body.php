<?php

// eXtreme Styles mod cache. Generated on Wed, 12 May 2021 23:47:08 +0000 (time=1620863228)

?><table width="100%" cellpadding="5" cellspacing="1" border="0" class="forumline" align="center">
  <tr> 
      <th class="thHead" colspan="4">Arcade Comments</th>
  </tr>
  <tr>
        <td align='center' class='row1'><strong>Game</strong></td>
        <td align='center' class='row2'><strong>User</strong></td>
        <td align='center' class='row1'><strong>Comments</strong></td>
        <td align='center' class='row2'><strong></strong></td>
  </tr>
<?php

$commentrow_count = ( isset($this->_tpldata['commentrow.']) ) ?  sizeof($this->_tpldata['commentrow.']) : 0;
for ($commentrow_i = 0; $commentrow_i < $commentrow_count; $commentrow_i++)
{
 $commentrow_item = &$this->_tpldata['commentrow.'][$commentrow_i];
 $commentrow_item['S_ROW_COUNT'] = $commentrow_i;
 $commentrow_item['S_NUM_ROWS'] = $commentrow_count;

?> 
  <tr>
        <td align='center' class='row1'><?php echo isset($commentrow_item['GAME_NAME']) ? $commentrow_item['GAME_NAME'] : ''; ?></td>
        <td align='center' class='row2'><?php echo isset($commentrow_item['USERNAME']) ? $commentrow_item['USERNAME'] : ''; ?></td>
        <td align='center' class='row1'><?php echo isset($commentrow_item['COMMENTS_VALUE']) ? $commentrow_item['COMMENTS_VALUE'] : ''; ?></td>
        <td align='center' class='row2'><?php echo isset($commentrow_item['EDIT_COMMENTS']) ? $commentrow_item['EDIT_COMMENTS'] : ''; ?></td>
  </tr>

<?php

} // END commentrow

if(isset($commentrow_item)) { unset($commentrow_item); } 

?>
</table>
<br /> 
<table border="0" cellpadding="3" cellspacing="1" width="100%"> 
<td align="left"><?php echo isset($this->vars['PAGE_NUMBER']) ? $this->vars['PAGE_NUMBER'] : $this->lang('PAGE_NUMBER'); ?></td>
<td align="right"><?php echo isset($this->vars['PAGINATION']) ? $this->vars['PAGINATION'] : $this->lang('PAGINATION'); ?></td>
</table>