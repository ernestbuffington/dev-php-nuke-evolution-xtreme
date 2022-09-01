<?php

// eXtreme Styles mod cache. Generated on Sat, 15 May 2021 02:49:14 +0000 (time=1621046954)

?><html>
 <head>
<title><?php echo isset($this->vars['TOPIC']) ? $this->vars['TOPIC'] : $this->lang('TOPIC'); ?></title> 
<script language="JavaScript" type="text/javascript"> 
<!-- 
    function __off(n) 
    { 
        if(n && n.style) 
        { 
            if('none' != n.style.display) 
            { 
                n.style.display = 'none'; 
            } 
        } 
    } 

    function __on(n) 
    { 
        if(n && n.style) 
        { 
            if('none' == n.style.display) 
            { 
                n.style.display = ''; 
            } 
        } 
    } 

    function __toggle(n) 
    { 
        if(n && n.style) 
        { 
            if('none' == n.style.display) 
            { 
                n.style.display = ''; 
            } 
            else 
            { 
                n.style.display = 'none'; 
            } 
        } 
    } 

//&#149; 

    function onoff(objName,bObjState) 
    { 
        var sVar = ''+objName; 
        var sOn = ''+objName+'_on'; 
        var sOff = ''+objName+'_off'; 
        var sOnStyle = bObjState ? ' style="display:none;" ':''; 
        var sOffStyle = !bObjState ? ' style="display:none;" ':''; 
        var sSymStyle = ' style="text-align: center;width: 13;height: 13;font-family: Arial,Verdana;font-size: 7pt;border-style: solid;border-width: 1;cursor: hand;color: #003344;background-color: #CACACA;" '; 

        if( (navigator.userAgent.indexOf("MSIE") >= 0) && document && document.body && document.body.style) 
            { 
                document.write( '<span '+sOnStyle+'onclick="__on('+sVar+');__off('+sOn+');__on('+sOff+');" id="'+sOn+'" title="Click here to show details"'+sSymStyle+'>+<\/span>' + 
                    '<span '+sOffStyle+'onclick="__off('+sVar+');__off('+sOff+');__on('+sOn+');" id="'+sOff+'" title="Click here to hide details"'+sSymStyle+'>-<\/span>' ); 
            } 
        else 
            { 
                document.write('<span id="' + objName + '_on" onclick="__on(document.getElementById(\'' + objName + '\'));__off(document.getElementById(\'' + objName + '_on\'));__on(document.getElementById(\'' + objName + '_off\'));" title="Click here to show details" style="text-align: center;width: 13;height: 13;font-family: monospace;font-size: 7pt;border-style: solid;border-width: 1;cursor: pointer;color: #003344;background-color: #CACACA;' + (bObjState ? ' display:none;' : '') + '">&nbsp;+&nbsp;</span>'); 
                document.write('<span id="' + objName + '_off" onclick="__off(document.getElementById(\'' + objName + '\'));__on(document.getElementById(\'' + objName + '_on\'));__off(document.getElementById(\'' + objName + '_off\'));" title="Click here to show details" style="text-align: center;width: 13;height: 13;font-family: monospace;font-size: 7pt;border-style: solid;border-width: 1;cursor: pointer;color: #003344;background-color: #CACACA;' + (!bObjState ? ' display:none;' : '') + '">&nbsp;&minus;&nbsp;</span>'); 
            }
      } 
// --> 
</script>
</head>
<h1><?php echo isset($this->vars['ADMIN_VOTING_ICON']) ? $this->vars['ADMIN_VOTING_ICON'] : $this->lang('ADMIN_VOTING_ICON'); ?><?php echo isset($this->vars['L_ADMIN_VOTE_TITLE']) ? $this->vars['L_ADMIN_VOTE_TITLE'] : $this->lang('L_ADMIN_VOTE_TITLE'); ?></h1>
<p><?php echo isset($this->vars['L_ADMIN_VOTE_EXPLAIN']) ? $this->vars['L_ADMIN_VOTE_EXPLAIN'] : $this->lang('L_ADMIN_VOTE_EXPLAIN'); ?></p>
<form method="post" name="vote_list" action="<?php echo isset($this->vars['S_MODE_ACTION']) ? $this->vars['S_MODE_ACTION'] : $this->lang('S_MODE_ACTION'); ?>">
  <table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
    <tr> 
      <td align="right" nowrap="nowrap"><span class="genmed"><?php echo isset($this->vars['L_SELECT_SORT_FIELD']) ? $this->vars['L_SELECT_SORT_FIELD'] : $this->lang('L_SELECT_SORT_FIELD'); ?>:&nbsp;<?php echo isset($this->vars['S_FIELD_SELECT']) ? $this->vars['S_FIELD_SELECT'] : $this->lang('S_FIELD_SELECT'); ?>&nbsp;&nbsp;<?php echo isset($this->vars['L_SORT_ORDER']) ? $this->vars['L_SORT_ORDER'] : $this->lang('L_SORT_ORDER'); ?>:&nbsp;<?php echo isset($this->vars['S_ORDER_SELECT']) ? $this->vars['S_ORDER_SELECT'] : $this->lang('S_ORDER_SELECT'); ?>&nbsp;&nbsp; 
        <input type="submit" name="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" class="liteoption" />
        </span>
      </td>
    </tr>
<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline"> 
    <tr> 
        <th class="thCornerL" height="20" valign="middle" nowrap="nowrap"><?php echo isset($this->vars['L_VOTE_ID']) ? $this->vars['L_VOTE_ID'] : $this->lang('L_VOTE_ID'); ?></th> 
        <th class="thTop" height="20" valign="middle" nowrap="nowrap"><?php echo isset($this->vars['L_POLL_TOPIC']) ? $this->vars['L_POLL_TOPIC'] : $this->lang('L_POLL_TOPIC'); ?></th> 
        <th class="thTop" height="20" valign="middle" nowrap="nowrap"><?php echo isset($this->vars['L_VOTE_USERNAME']) ? $this->vars['L_VOTE_USERNAME'] : $this->lang('L_VOTE_USERNAME'); ?></th> 
        <th class="thCornerR" height="20" valign="middle" nowrap="nowrap"><?php echo isset($this->vars['L_VOTE_END_DATE']) ? $this->vars['L_VOTE_END_DATE'] : $this->lang('L_VOTE_END_DATE'); ?></th> 
    </tr> 
<?php

$votes_count = ( isset($this->_tpldata['votes.']) ) ?  sizeof($this->_tpldata['votes.']) : 0;
for ($votes_i = 0; $votes_i < $votes_count; $votes_i++)
{
 $votes_item = &$this->_tpldata['votes.'][$votes_i];
 $votes_item['S_ROW_COUNT'] = $votes_i;
 $votes_item['S_NUM_ROWS'] = $votes_count;

?> 
    <tr>
        <td class="<?php echo isset($votes_item['COLOR']) ? $votes_item['COLOR'] : ''; ?>" border="1" align="center"><span class="gensmall"><?php echo isset($votes_item['VOTE_ID']) ? $votes_item['VOTE_ID'] : ''; ?></span></td> 
        <td class="<?php echo isset($votes_item['COLOR']) ? $votes_item['COLOR'] : ''; ?>" border="1"><span class="genmed">
            <script language="JavaScript" type="text/javascript"> 
            <!-- 
                onoff('vote<?php echo isset($votes_item['VOTE_ID']) ? $votes_item['VOTE_ID'] : ''; ?>_switch',false); 
            //--> 
            </script>
            <a href="<?php echo isset($votes_item['LINK']) ? $votes_item['LINK'] : ''; ?>"><?php echo isset($votes_item['DESCRIPTION']) ? $votes_item['DESCRIPTION'] : ''; ?></a></span><br />
        </td> 
        <td class="<?php echo isset($votes_item['COLOR']) ? $votes_item['COLOR'] : ''; ?>" border="1"><span class="gensmall"><?php echo isset($votes_item['USER']) ? $votes_item['USER'] : ''; ?></span></td> 
        <td class="<?php echo isset($votes_item['COLOR']) ? $votes_item['COLOR'] : ''; ?>" border="1" align="center" width="120"><span class="gensmall"><?php echo isset($votes_item['VOTE_DURATION']) ? $votes_item['VOTE_DURATION'] : ''; ?></span></td> 
    </tr> 
    <tr id="vote<?php echo isset($votes_item['VOTE_ID']) ? $votes_item['VOTE_ID'] : ''; ?>_switch" style="display:none;"> 
        <td class="row2" border="1" colspan="4"> 
<table cellpadding="5" cellspacing="1" border="0"> 
<?php

$detail_count = ( isset($votes_item['detail.']) ) ? sizeof($votes_item['detail.']) : 0;
for ($detail_i = 0; $detail_i < $detail_count; $detail_i++)
{
 $detail_item = &$votes_item['detail.'][$detail_i];
 $detail_item['S_ROW_COUNT'] = $detail_i;
 $detail_item['S_NUM_ROWS'] = $detail_count;

?> 
    <tr> 
        <td class="row1"><?php echo isset($detail_item['OPTION']) ? $detail_item['OPTION'] : ''; ?> (<?php echo isset($detail_item['RESULT']) ? $detail_item['RESULT'] : ''; ?>)</td> 
        <td class="row3"><span class="gensmall"><?php echo isset($detail_item['USER']) ? $detail_item['USER'] : ''; ?></span></td> 
    </tr> 
<?php

} // END detail

if(isset($detail_item)) { unset($detail_item); } 

?> 
</table> 
    </td> 
    </tr> 
<?php

} // END votes

if(isset($votes_item)) { unset($votes_item); } 

?> 
    <tr>
        <td class="catBottom" height="18" align="center" valign="middle" colspan="4"></td>
    </tr>
</table>

<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tr> 
    <td><span class="nav"><?php echo isset($this->vars['PAGE_NUMBER']) ? $this->vars['PAGE_NUMBER'] : $this->lang('PAGE_NUMBER'); ?></span></td>
    <td align="right"><span class="nav"><?php echo isset($this->vars['PAGINATION']) ? $this->vars['PAGINATION'] : $this->lang('PAGINATION'); ?></span></td>
  </tr>
</table>
<br />
<div align="center"><span class="copyright">Admin Voting  v1.1.8  &copy 2002  <a href="mailto:ErDrRon@aol.com">ErDrRon</a></span></div>
</body> 
</html>