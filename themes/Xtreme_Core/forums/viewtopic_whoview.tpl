<div align="center">
<table width="98%" style="background-color:none; height:100%;" class="viewforum" align="center" border="5" cellpadding="15" cellspacing="20" dir="ltr" id="viewforum">
<tbody>
<tr>
<td align="center">

<form method="post" action="{S_MODE_ACTION}" name="post">
<table border="0" cellpadding="0" cellspacing="1" class="col-12">
  <tr>
  	<td colspan="6">
  	  <table border="0" cellpadding="0" cellspacing="1" class="col-12">

  	  	<tr> 
	      <td class="col-6"></td>
	      <td class="col-6 right">{L_SELECT_SORT_METHOD}:&nbsp;{S_MODE_SELECT}&nbsp;&nbsp;{L_ORDER}&nbsp;{S_ORDER_SELECT}&nbsp;&nbsp;<input type="submit" name="submit" value="{L_SUBMIT}" class="liteoption" /></td>
        </tr>


  	  	<tr> 
	      <td class="col-6"><a href="{U_INDEX}" class="maintitle">{L_INDEX}</a><br/></td>
	      <td class="col-6 right"></td>
        </tr>

  	  </table>
  	</td>
  </tr>
  <tr>
  	<td align="center" class="catHead wtf col-12" colspan="6">List of all users who have viewed this topic</td>
  </tr>
  <tr>
    <td class="catHead center">#</td>
    <td class="catHead center">{L_USERNAME}</td>
    <td class="catHead center">{L_FROM}</td>              
    <td class="catHead center">{L_TOPIC_COUNT}</td>
    <td class="catHead center">{L_LAST_VIEWED}</td>
    <td class="catHead center">{L_ONLINE_STATUS}</td>
  </tr>
  <!-- BEGIN memberrow -->
  <tr>
  	<td class="row1 center">{memberrow.ROW_NUMBER}</td>
  	<td class="row1">
  		<span style="float: left; margin: 2px;"><a href="{memberrow.U_VIEWPROFILE}">{memberrow.USERNAME}</a></span>
  		<span style="float: right;"></span>
  	</td>
  	<td class="row1">{memberrow.FLAG}{memberrow.FROM}</td>
  	<td class="row1 center">{memberrow.VIEW_COUNT}</td>
  	<td class="row1 center"><strong>{memberrow.TOPICLINK}</strong><br />{memberrow.VIEW_TIME}</td>
  	<td class="row1 center">{memberrow.ONLINE_STATUS}</td>
  </tr>
  <!-- END memberrow -->
  <tr>
  	<td class="catBottom" colspan="6"><div align="center"><form><input type="button" value="Back to Topic" onclick="history.back()"></form></div></td>
  </tr>
</table>
</form>

</tr>
</tbody>
</table>
</div>
