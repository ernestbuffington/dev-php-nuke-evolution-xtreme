<?php

// eXtreme Styles mod cache. Generated on Thu, 13 May 2021 09:44:51 +0000 (time=1620899091)

?><h1><?php echo isset($this->vars['L_CONFIGURATION_TITLE']) ? $this->vars['L_CONFIGURATION_TITLE'] : $this->lang('L_CONFIGURATION_TITLE'); ?></h1>

<p><?php echo isset($this->vars['L_CONFIGURATION_EXPLAIN']) ? $this->vars['L_CONFIGURATION_EXPLAIN'] : $this->lang('L_CONFIGURATION_EXPLAIN'); ?></p>

<table width="99%" cellpadding="4" cellspacing="1" border="0" align="center" class="forumline">
  <tr>
    <th class="thHead" colspan="3"><?php echo isset($this->vars['L_CONFIGURATION_TITLE']) ? $this->vars['L_CONFIGURATION_TITLE'] : $this->lang('L_CONFIGURATION_TITLE'); ?></th>
  </tr>
  <?php

$ad_row_count = ( isset($this->_tpldata['ad_row.']) ) ?  sizeof($this->_tpldata['ad_row.']) : 0;
for ($ad_row_i = 0; $ad_row_i < $ad_row_count; $ad_row_i++)
{
 $ad_row_item = &$this->_tpldata['ad_row.'][$ad_row_i];
 $ad_row_item['S_ROW_COUNT'] = $ad_row_i;
 $ad_row_item['S_NUM_ROWS'] = $ad_row_count;

?>
  <tr>
    <td class="row1">
      <?php echo isset($ad_row_item['AD_NAME']) ? $ad_row_item['AD_NAME'] : ''; ?>
    </td>
    <td class="row2">
      <a href="<?php echo isset($ad_row_item['S_AD_EDIT']) ? $ad_row_item['S_AD_EDIT'] : ''; ?>"><?php echo isset($this->vars['L_EDIT']) ? $this->vars['L_EDIT'] : $this->lang('L_EDIT'); ?></a>
    </td>
    <td class="row2">
      <a href="<?php echo isset($ad_row_item['S_AD_DELETE']) ? $ad_row_item['S_AD_DELETE'] : ''; ?>"><?php echo isset($this->vars['L_DELETE']) ? $this->vars['L_DELETE'] : $this->lang('L_DELETE'); ?></a>
    </td>
  </tr>
  <?php

} // END ad_row

if(isset($ad_row_item)) { unset($ad_row_item); } 

?>
  <tr>
    <td colspan="3">
      <a href="<?php echo isset($this->vars['S_ADD_ACTION']) ? $this->vars['S_ADD_ACTION'] : $this->lang('S_ADD_ACTION'); ?>"><?php echo isset($this->vars['L_ADD']) ? $this->vars['L_ADD'] : $this->lang('L_ADD'); ?></a>
    </td>
  </tr>
</table>

<br clear="all" />