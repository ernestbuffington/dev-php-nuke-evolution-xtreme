<?php

// eXtreme Styles mod cache. Generated on Wed, 28 Apr 2021 08:05:19 +0000 (time=1619597119)

?><h1><?php echo isset($this->vars['L_FLAGS_TITLE']) ? $this->vars['L_FLAGS_TITLE'] : $this->lang('L_FLAGS_TITLE'); ?></h1>
<p><?php echo isset($this->vars['L_FLAGS_TEXT']) ? $this->vars['L_FLAGS_TEXT'] : $this->lang('L_FLAGS_TEXT'); ?></p>

<form method="post" action="<?php echo isset($this->vars['S_FLAGS_ACTION']) ? $this->vars['S_FLAGS_ACTION'] : $this->lang('S_FLAGS_ACTION'); ?>">

<table style="width: 30%; margin: auto" cellspacing="1" cellpadding="4" border="0" class="forumline">
  <tr>
    <td class="catHead" style="font-weight: bold; text-transform: uppercase; text-align: center"><?php echo isset($this->vars['L_FLAG']) ? $this->vars['L_FLAG'] : $this->lang('L_FLAG'); ?></td>
    <td class="catHead" style="font-weight: bold; text-transform: uppercase; text-align: center"><?php echo isset($this->vars['L_FLAG_PIC']) ? $this->vars['L_FLAG_PIC'] : $this->lang('L_FLAG_PIC'); ?></td>
    <td class="catHead" style="font-weight: bold; text-transform: uppercase; text-align: center"><?php echo isset($this->vars['L_EDIT']) ? $this->vars['L_EDIT'] : $this->lang('L_EDIT'); ?></td>
    <td class="catHead" style="font-weight: bold; text-transform: uppercase; text-align: center"><?php echo isset($this->vars['L_DELETE']) ? $this->vars['L_DELETE'] : $this->lang('L_DELETE'); ?></td>
  </tr>
  <?php

$flags_count = ( isset($this->_tpldata['flags.']) ) ?  sizeof($this->_tpldata['flags.']) : 0;
for ($flags_i = 0; $flags_i < $flags_count; $flags_i++)
{
 $flags_item = &$this->_tpldata['flags.'][$flags_i];
 $flags_item['S_ROW_COUNT'] = $flags_i;
 $flags_item['S_NUM_ROWS'] = $flags_count;

?>
  <tr>
    <td class="<?php echo isset($flags_item['ROW_CLASS']) ? $flags_item['ROW_CLASS'] : ''; ?>"><?php echo isset($flags_item['FLAG']) ? $flags_item['FLAG'] : ''; ?></td>
    <td class="<?php echo isset($flags_item['ROW_CLASS']) ? $flags_item['ROW_CLASS'] : ''; ?>" style="text-align: center"><span class="countries <?php echo isset($flags_item['IMAGE_DISPLAY']) ? $flags_item['IMAGE_DISPLAY'] : ''; ?>"></span></td> <!-- <?php echo isset($flags_item['IMAGE_DISPLAY']) ? $flags_item['IMAGE_DISPLAY'] : ''; ?> -->
    <td class="<?php echo isset($flags_item['ROW_CLASS']) ? $flags_item['ROW_CLASS'] : ''; ?>" style="text-align: center"><a href="<?php echo isset($flags_item['U_FLAG_EDIT']) ? $flags_item['U_FLAG_EDIT'] : ''; ?>"><?php echo isset($this->vars['L_EDIT']) ? $this->vars['L_EDIT'] : $this->lang('L_EDIT'); ?></a></td>
    <td class="<?php echo isset($flags_item['ROW_CLASS']) ? $flags_item['ROW_CLASS'] : ''; ?>" style="text-align: center"><a href="<?php echo isset($flags_item['U_FLAG_DELETE']) ? $flags_item['U_FLAG_DELETE'] : ''; ?>"><?php echo isset($this->vars['L_DELETE']) ? $this->vars['L_DELETE'] : $this->lang('L_DELETE'); ?></a></td>
  </tr>
  <?php

} // END flags

if(isset($flags_item)) { unset($flags_item); } 

?>			
  <tr>
    <td class="catBottom" align="center" colspan="4"><input type="submit" class="mainoption" name="add" value="<?php echo isset($this->vars['L_ADD_FLAG']) ? $this->vars['L_ADD_FLAG'] : $this->lang('L_ADD_FLAG'); ?>" /></td>
  </tr>
</table>
</form>
