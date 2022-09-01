<?php

// eXtreme Styles mod cache. Generated on Sat, 15 May 2021 02:52:02 +0000 (time=1621047122)

?><h1><?php echo isset($this->vars['L_AUTH_TITLE']) ? $this->vars['L_AUTH_TITLE'] : $this->lang('L_AUTH_TITLE'); ?></h1>

<h2><?php echo isset($this->vars['L_USERNAME']) ? $this->vars['L_USERNAME'] : $this->lang('L_USERNAME'); ?>: <?php echo isset($this->vars['USERNAME']) ? $this->vars['USERNAME'] : $this->lang('USERNAME'); ?></h2>

<form method="post" action="<?php echo isset($this->vars['S_AUTH_ACTION']) ? $this->vars['S_AUTH_ACTION'] : $this->lang('S_AUTH_ACTION'); ?>">

<p><?php echo isset($this->vars['L_AUTH_EXPLAIN']) ? $this->vars['L_AUTH_EXPLAIN'] : $this->lang('L_AUTH_EXPLAIN'); ?></p>

<table cellspacing="1" cellpadding="4" border="0" align="center" class="forumline">
    <tr>
        <th width="30%" class="thCornerL"><?php echo isset($this->vars['L_FIELD_NAME']) ? $this->vars['L_FIELD_NAME'] : $this->lang('L_FIELD_NAME'); ?></th>
        <th class="thTop"><?php echo isset($this->vars['L_ALLOW']) ? $this->vars['L_ALLOW'] : $this->lang('L_ALLOW'); ?></th>
        <th class="thTop"><?php echo isset($this->vars['L_DEFAULT']) ? $this->vars['L_DEFAULT'] : $this->lang('L_DEFAULT'); ?></th>
        <th class="thCornerR"><?php echo isset($this->vars['L_DENY']) ? $this->vars['L_DENY'] : $this->lang('L_DENY'); ?></th>
    </tr>
    <?php

$xdata_count = ( isset($this->_tpldata['xdata.']) ) ?  sizeof($this->_tpldata['xdata.']) : 0;
for ($xdata_i = 0; $xdata_i < $xdata_count; $xdata_i++)
{
 $xdata_item = &$this->_tpldata['xdata.'][$xdata_i];
 $xdata_item['S_ROW_COUNT'] = $xdata_i;
 $xdata_item['S_NUM_ROWS'] = $xdata_count;

?>
    <tr>
        <td class="row3" align="center"><?php echo isset($xdata_item['NAME']) ? $xdata_item['NAME'] : ''; ?></td>
        <td class="row1" align="center">
            <input name="xd_<?php echo isset($xdata_item['CODE_NAME']) ? $xdata_item['CODE_NAME'] : ''; ?>" value="<?php echo isset($this->vars['AUTH_ALLOW']) ? $this->vars['AUTH_ALLOW'] : $this->lang('AUTH_ALLOW'); ?>" type="radio" <?php echo isset($xdata_item['ALLOW_CHECKED']) ? $xdata_item['ALLOW_CHECKED'] : ''; ?>/>
        </td>
        <td class="row2" align="center">
            <input name="xd_<?php echo isset($xdata_item['CODE_NAME']) ? $xdata_item['CODE_NAME'] : ''; ?>" value="<?php echo isset($this->vars['AUTH_DEFAULT']) ? $this->vars['AUTH_DEFAULT'] : $this->lang('AUTH_DEFAULT'); ?>" type="radio" <?php echo isset($xdata_item['DEFAULT_CHECKED']) ? $xdata_item['DEFAULT_CHECKED'] : ''; ?>/>
        </td>
        <td class="row3" align="center">
            <input name="xd_<?php echo isset($xdata_item['CODE_NAME']) ? $xdata_item['CODE_NAME'] : ''; ?>" value="<?php echo isset($this->vars['AUTH_DENY']) ? $this->vars['AUTH_DENY'] : $this->lang('AUTH_DENY'); ?>" type="radio" <?php echo isset($xdata_item['DENY_CHECKED']) ? $xdata_item['DENY_CHECKED'] : ''; ?>/>
        </td>
    </tr>
    <?php

} // END xdata

if(isset($xdata_item)) { unset($xdata_item); } 

?>
    <tr>
        <td colspan="4" class="catBottom" align="center"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?>
            <input type="submit" name="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" class="mainoption" />
            &nbsp;&nbsp;
            <input type="reset" value="<?php echo isset($this->vars['L_RESET']) ? $this->vars['L_RESET'] : $this->lang('L_RESET'); ?>" class="liteoption" name="reset" />
        </td>
    </tr>
</table>
</form>