<script language='JavaScript'>

function emoticon(text) {
        text = ' ' + text + ' ';
        PostWrite(text);
}

function storeCaret(textEl) {
        if (textEl.createTextRange) textEl.caretPos = document.selection.createRange().duplicate();
}

function PostWrite(text) {
        if (document.post.message.createTextRange && document.post.message.caretPos) {
                var caretPos = document.post.message.caretPos;
                caretPos.text = caretPos.text.charAt(caretPos.text.length - 1) == ' ' ? text + ' ' : text;
        }
        else document.post.message.value += text;
        document.post.message.focus(caretPos)
}
</script>

<table border="0" cellpadding="3" cellspacing="4" width="100%">
<td align="left"><span class="nav"><a href="{U_INDEX}" class="nav">{L_INDEX}</a></span>
<span class="nav">&nbsp;->&nbsp;{NAV_DESC}</span>
<span class="nav">&nbsp;->&nbsp;Arcade Comments</span>
</td>
</table>

<table width="100%" cellpadding="5" cellspacing="1" border="0" class="forumline" align="center">
  <tr> 
          <th class="row4" colspan="3"><span class="cattitle">{L_ADD_EDIT_COMMENTS}</span></th>
  </tr>

<form action="{S_ACTION}" method="post" name="post" >

        <tr>
                <td rowspan=3 class='row2' valign="middle" align="center"><br />
                          <table width="100" border="0" cellspacing="0" cellpadding="5">
                                <tr align="center"> 
                                  <td colspan="{S_SMILIES_COLSPAN}" class="gensmall"><strong>{L_EMOTICONS}</strong></td>
                                </tr>
                                <!-- BEGIN smilies_row -->
                                <tr align="center" valign="middle"> 
                                  <!-- BEGIN smilies_col -->
                                  <td><img src="{smilies_row.smilies_col.SMILEY_IMG}" border="0" onmouseover="this.style.cursor='hand';" onclick="emoticon('{smilies_row.smilies_col.SMILEY_CODE}');" alt="{smilies_row.smilies_col.SMILEY_DESC}" title="{smilies_row.smilies_col.SMILEY_DESC}" /></a></td> 
                                  <!-- END smilies_col -->
                                </tr>
                                <!-- END smilies_row -->
                                <!-- BEGIN switch_smilies_extra -->
                                <tr align="center"> 
                                  <td colspan="{S_SMILIES_COLSPAN}"><span  class="nav"><a href="{U_MORE_SMILIES}" onclick="window.open('{U_MORE_SMILIES}', '_phpbbsmilies', 'HEIGHT=300,resizable=yes,scrollbars=yes,WIDTH=250');return false;" target="_phpbbsmilies" class="nav">{L_MORE_SMILIES}</a></span></td>
                                </tr>
                                <!-- END switch_smilies_extra -->
                          </table>
                        </td>
                <td align='left' class='row2'><strong>{L_GAME_NAME}:</strong></td>
                <td align='left' class='row2'>{GAME_NAME}</td>
        </tr>
        <tr>
                <td align='left' class='row2'><strong>{L_ENTER_COMMENT}:</strong></td>
                <td align='left' class='row2'><textarea NAME='message' ROWS='5' COLS='60' wrap='virtual' tabindex="3" class="post" onselect="storeCaret(this);" onclick="storeCaret(this);" onkeyup="storeCaret(this);">{COMMENTS}</textarea></td>
        </tr>
                <input type=hidden name='comment_id' value='{GAME_ID}'>
        <tr>
                <td colspan='2'align='center' class='row2'><input type='submit' name='submit' value='Submit' class='mainoption' /></td>
        </tr>
</form>
<tr> 
          <th class="row4" colspan="3"><span class="cattitle">{L_QUICK_STATS}</span></th>
  </tr>
        <tr>
                <td colspan="3" class='row2' align="center"> {USER_AVATAR}<br />
                        {USERNAME}<br />
                        {L_QUICK_STATS_MESSAGE}
                </td>
        </tr>
</table>
<br />