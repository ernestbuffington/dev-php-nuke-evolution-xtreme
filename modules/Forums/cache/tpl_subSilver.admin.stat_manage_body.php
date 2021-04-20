<?php

// eXtreme Styles mod cache. Generated on Wed, 07 Apr 2021 12:12:50 +0000 (time=1617797570)

?><h1><?php echo isset($this->vars['L_MANAGE_MODULES']) ? $this->vars['L_MANAGE_MODULES'] : $this->lang('L_MANAGE_MODULES'); ?></h1>

<p><?php echo isset($this->vars['L_MANAGE_MODULES_EXPLAIN']) ? $this->vars['L_MANAGE_MODULES_EXPLAIN'] : $this->lang('L_MANAGE_MODULES_EXPLAIN'); ?></p>

<form method="post" action="<?php echo isset($this->vars['S_ACTION']) ? $this->vars['S_ACTION'] : $this->lang('S_ACTION'); ?>">
<table width="100%" cellpadding="4" cellspacing="1" border="0" class="forumline" align="center">
    <tr>
        <th class="thHead" colspan="5"><?php echo isset($this->vars['L_MANAGE_MODULES']) ? $this->vars['L_MANAGE_MODULES'] : $this->lang('L_MANAGE_MODULES'); ?></th>
    </tr>
    <?php

$modulerow_count = ( isset($this->_tpldata['modulerow.']) ) ?  sizeof($this->_tpldata['modulerow.']) : 0;
for ($modulerow_i = 0; $modulerow_i < $modulerow_count; $modulerow_i++)
{
 $modulerow_item = &$this->_tpldata['modulerow.'][$modulerow_i];
 $modulerow_item['S_ROW_COUNT'] = $modulerow_i;
 $modulerow_item['S_NUM_ROWS'] = $modulerow_count;

?>
    <tr> 
        <td class="row2"><span class="gen"><a href="<?php echo isset($modulerow_item['U_VIEW_MODULE']) ? $modulerow_item['U_VIEW_MODULE'] : ''; ?>" target="_new"><?php echo isset($modulerow_item['MODULE_NAME']) ? $modulerow_item['MODULE_NAME'] : ''; ?></a></span><br /><span class="gensmall"><?php echo isset($modulerow_item['MODULE_DESC']) ? $modulerow_item['MODULE_DESC'] : ''; ?></span></td>
        <td class="row1" align="center" valign="middle"><span class="gen"><a href="<?php echo isset($modulerow_item['U_MODULE_EDIT']) ? $modulerow_item['U_MODULE_EDIT'] : ''; ?>"><?php echo isset($this->vars['L_EDIT']) ? $this->vars['L_EDIT'] : $this->lang('L_EDIT'); ?></a></span></td>
        <td class="row2" align="center" valign="middle"><span class="gen"><a href="<?php echo isset($modulerow_item['U_MODULE_DELETE']) ? $modulerow_item['U_MODULE_DELETE'] : ''; ?>"><?php echo isset($this->vars['L_DELETE']) ? $this->vars['L_DELETE'] : $this->lang('L_DELETE'); ?></a></span></td>
        <td class="row1" align="center" valign="middle"><span class="gen"><a href="<?php echo isset($modulerow_item['U_MODULE_MOVE_UP']) ? $modulerow_item['U_MODULE_MOVE_UP'] : ''; ?>"><?php echo isset($this->vars['L_MOVE_UP']) ? $this->vars['L_MOVE_UP'] : $this->lang('L_MOVE_UP'); ?></a> <br /> <a href="<?php echo isset($modulerow_item['U_MODULE_MOVE_DOWN']) ? $modulerow_item['U_MODULE_MOVE_DOWN'] : ''; ?>"><?php echo isset($this->vars['L_MOVE_DOWN']) ? $this->vars['L_MOVE_DOWN'] : $this->lang('L_MOVE_DOWN'); ?></a></span></td>
        <td class="row2" align="center" valign="middle"><span class="gen"><a href="<?php echo isset($modulerow_item['U_MODULE_ACTIVATE']) ? $modulerow_item['U_MODULE_ACTIVATE'] : ''; ?>"><?php echo isset($modulerow_item['ACTIVATE']) ? $modulerow_item['ACTIVATE'] : ''; ?></a></span></td>
    </tr>
    <?php

} // END modulerow

if(isset($modulerow_item)) { unset($modulerow_item); } 

?>
    <tr>
        <td colspan="5" height="1" class="spaceRow"><img src="../templates/subSilver/images/spacer.gif" alt="" width="1" height="1" /></td>
    </tr>
</table></form>