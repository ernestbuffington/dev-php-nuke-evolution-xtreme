<?php

// eXtreme Styles mod cache. Generated on Wed, 12 May 2021 23:53:10 +0000 (time=1620863590)

?><h1><?php echo isset($this->vars['L_SMILEY_TITLE']) ? $this->vars['L_SMILEY_TITLE'] : $this->lang('L_SMILEY_TITLE'); ?></h1>

<P><?php echo isset($this->vars['L_SMILEY_TEXT']) ? $this->vars['L_SMILEY_TEXT'] : $this->lang('L_SMILEY_TEXT'); ?></p>

<form method="post" action="<?php echo isset($this->vars['S_SMILEY_ACTION']) ? $this->vars['S_SMILEY_ACTION'] : $this->lang('S_SMILEY_ACTION'); ?>"><table cellspacing="1" cellpadding="4" border="0" align="center" class="forumline">
    <tr>
        <th class="thCornerL"><?php echo isset($this->vars['L_CODE']) ? $this->vars['L_CODE'] : $this->lang('L_CODE'); ?></th>
        <th class="thTop"><?php echo isset($this->vars['L_SMILE']) ? $this->vars['L_SMILE'] : $this->lang('L_SMILE'); ?></th>
        <th class="thTop"><?php echo isset($this->vars['L_EMOT']) ? $this->vars['L_EMOT'] : $this->lang('L_EMOT'); ?></th>
        <th colspan="2" class="thCornerR"><?php echo isset($this->vars['L_ACTION']) ? $this->vars['L_ACTION'] : $this->lang('L_ACTION'); ?></th>
    </tr>
    <?php

$smiles_count = ( isset($this->_tpldata['smiles.']) ) ?  sizeof($this->_tpldata['smiles.']) : 0;
for ($smiles_i = 0; $smiles_i < $smiles_count; $smiles_i++)
{
 $smiles_item = &$this->_tpldata['smiles.'][$smiles_i];
 $smiles_item['S_ROW_COUNT'] = $smiles_i;
 $smiles_item['S_NUM_ROWS'] = $smiles_count;

?>
    <tr>
        <td class="<?php echo isset($smiles_item['ROW_CLASS']) ? $smiles_item['ROW_CLASS'] : ''; ?>"><?php echo isset($smiles_item['CODE']) ? $smiles_item['CODE'] : ''; ?></td>
        <td class="<?php echo isset($smiles_item['ROW_CLASS']) ? $smiles_item['ROW_CLASS'] : ''; ?>"><img src="<?php echo isset($smiles_item['SMILEY_IMG']) ? $smiles_item['SMILEY_IMG'] : ''; ?>" alt="<?php echo isset($smiles_item['CODE']) ? $smiles_item['CODE'] : ''; ?>" /></td>
        <td class="<?php echo isset($smiles_item['ROW_CLASS']) ? $smiles_item['ROW_CLASS'] : ''; ?>"><?php echo isset($smiles_item['EMOT']) ? $smiles_item['EMOT'] : ''; ?></td>
        <td class="<?php echo isset($smiles_item['ROW_CLASS']) ? $smiles_item['ROW_CLASS'] : ''; ?>"><a href="<?php echo isset($smiles_item['U_SMILEY_EDIT']) ? $smiles_item['U_SMILEY_EDIT'] : ''; ?>"><?php echo isset($this->vars['L_EDIT']) ? $this->vars['L_EDIT'] : $this->lang('L_EDIT'); ?></a></td>
        <td class="<?php echo isset($smiles_item['ROW_CLASS']) ? $smiles_item['ROW_CLASS'] : ''; ?>"><a href="<?php echo isset($smiles_item['U_SMILEY_DELETE']) ? $smiles_item['U_SMILEY_DELETE'] : ''; ?>"><?php echo isset($this->vars['L_DELETE']) ? $this->vars['L_DELETE'] : $this->lang('L_DELETE'); ?></a></td>
    </tr>
    <?php

} // END smiles

if(isset($smiles_item)) { unset($smiles_item); } 

?>
    <tr>
        <td class="catBottom" colspan="5" align="center"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?><input type="submit" name="add" value="<?php echo isset($this->vars['L_SMILEY_ADD']) ? $this->vars['L_SMILEY_ADD'] : $this->lang('L_SMILEY_ADD'); ?>" class="mainoption" />&nbsp;&nbsp;<input class="liteoption" type="submit" name="import_pack" value="<?php echo isset($this->vars['L_IMPORT_PACK']) ? $this->vars['L_IMPORT_PACK'] : $this->lang('L_IMPORT_PACK'); ?>">&nbsp;&nbsp;<input class="liteoption" type="submit" name="export_pack" value="<?php echo isset($this->vars['L_EXPORT_PACK']) ? $this->vars['L_EXPORT_PACK'] : $this->lang('L_EXPORT_PACK'); ?>"></td>
    </tr>
</table></form>