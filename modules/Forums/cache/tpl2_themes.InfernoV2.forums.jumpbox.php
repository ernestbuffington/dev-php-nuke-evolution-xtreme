<?php

// eXtreme Styles mod cache. Generated on Wed, 24 Mar 2021 09:28:46 +0000 (time=1616578126)

?><table cellspacing="0" cellpadding="0" border="0">
    <tr> 
        <td nowrap="nowrap">
		<form method="post" name="jumpbox" action="<?php echo isset($this->vars['S_JUMPBOX_ACTION']) ? $this->vars['S_JUMPBOX_ACTION'] : $this->lang('S_JUMPBOX_ACTION'); ?>" onsubmit="if(document.jumpbox.f.value == -1){return false;}">        
        <?php echo isset($this->vars['L_JUMP_TO']) ? $this->vars['L_JUMP_TO'] : $this->lang('L_JUMP_TO'); ?>:&nbsp;<?php echo isset($this->vars['S_JUMPBOX_SELECT']) ? $this->vars['S_JUMPBOX_SELECT'] : $this->lang('S_JUMPBOX_SELECT'); ?>&nbsp;<input type="submit" value="<?php echo isset($this->vars['L_GO']) ? $this->vars['L_GO'] : $this->lang('L_GO'); ?>" class="liteoption" />
		</form>        
        </td>
    </tr>
</table>