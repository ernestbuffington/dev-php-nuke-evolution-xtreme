<?php

// eXtreme Styles mod cache. Generated on Tue, 18 May 2021 19:51:04 +0000 (time=1621367464)

?><html dir="<?php echo isset($this->vars['S_CONTENT_DIRECTION']) ? $this->vars['S_CONTENT_DIRECTION'] : $this->lang('S_CONTENT_DIRECTION'); ?>">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo isset($this->vars['S_CONTENT_ENCODING']) ? $this->vars['S_CONTENT_ENCODING'] : $this->lang('S_CONTENT_ENCODING'); ?>">
<meta http-equiv="Content-Style-Type" content="text/css">
<?php echo isset($this->vars['META']) ? $this->vars['META'] : $this->lang('META'); ?>
<?php echo isset($this->vars['NAV_LINKS']) ? $this->vars['NAV_LINKS'] : $this->lang('NAV_LINKS'); ?>
<title><?php echo isset($this->vars['SITENAME']) ? $this->vars['SITENAME'] : $this->lang('SITENAME'); ?> :: <?php echo isset($this->vars['PAGE_TITLE']) ? $this->vars['PAGE_TITLE'] : $this->lang('PAGE_TITLE'); ?></title>
<!-- link rel="stylesheet" href="modules/Forums/templates/subSilver/<?php echo isset($this->vars['T_HEAD_STYLESHEET']) ? $this->vars['T_HEAD_STYLESHEET'] : $this->lang('T_HEAD_STYLESHEET'); ?>" type="text/css" -->
<style type="text/css">
<!--
/*
  The original subSilver Theme for phpBB version 2+
  Created by subBlue design
  http://www.subBlue.com

  NOTE: These CSS definitions are stored within the main page body so that you can use the phpBB2
  theme administration centre. When you have finalised your style you could cut the final CSS code
  and place it in an external file, deleting this section to save bandwidth.
*/

/* General page style. The scroll bar colours only visible in IE5.5+ */
body { 
    background-color: <?php echo isset($this->vars['T_BODY_BGCOLOR']) ? $this->vars['T_BODY_BGCOLOR'] : $this->lang('T_BODY_BGCOLOR'); ?>;
    scrollbar-face-color: <?php echo isset($this->vars['T_TR_COLOR2']) ? $this->vars['T_TR_COLOR2'] : $this->lang('T_TR_COLOR2'); ?>;
    scrollbar-highlight-color: <?php echo isset($this->vars['T_TD_COLOR2']) ? $this->vars['T_TD_COLOR2'] : $this->lang('T_TD_COLOR2'); ?>;
    scrollbar-shadow-color: <?php echo isset($this->vars['T_TR_COLOR2']) ? $this->vars['T_TR_COLOR2'] : $this->lang('T_TR_COLOR2'); ?>;
    scrollbar-3dlight-color: <?php echo isset($this->vars['T_TR_COLOR3']) ? $this->vars['T_TR_COLOR3'] : $this->lang('T_TR_COLOR3'); ?>;
    scrollbar-arrow-color:  <?php echo isset($this->vars['T_BODY_LINK']) ? $this->vars['T_BODY_LINK'] : $this->lang('T_BODY_LINK'); ?>;
    scrollbar-track-color: <?php echo isset($this->vars['T_TR_COLOR1']) ? $this->vars['T_TR_COLOR1'] : $this->lang('T_TR_COLOR1'); ?>;
    scrollbar-darkshadow-color: <?php echo isset($this->vars['T_TH_COLOR1']) ? $this->vars['T_TH_COLOR1'] : $this->lang('T_TH_COLOR1'); ?>;
}

/* General font families for common tags */
font,th,td,p { font-family: <?php echo isset($this->vars['T_FONTFACE1']) ? $this->vars['T_FONTFACE1'] : $this->lang('T_FONTFACE1'); ?> }
a:link,a:active,a:visited { color : <?php echo isset($this->vars['T_BODY_LINK']) ? $this->vars['T_BODY_LINK'] : $this->lang('T_BODY_LINK'); ?>; }
a:hover        { text-decoration: underline; color : <?php echo isset($this->vars['T_BODY_HLINK']) ? $this->vars['T_BODY_HLINK'] : $this->lang('T_BODY_HLINK'); ?>; }
hr    { height: 0px; border: solid <?php echo isset($this->vars['T_TR_COLOR3']) ? $this->vars['T_TR_COLOR3'] : $this->lang('T_TR_COLOR3'); ?> 0px; border-top-width: 1px;}

/* This is the border line & background colour round the entire page */
.bodyline    { background-color: <?php echo isset($this->vars['T_TD_COLOR2']) ? $this->vars['T_TD_COLOR2'] : $this->lang('T_TD_COLOR2'); ?>; border: 1px <?php echo isset($this->vars['T_TH_COLOR1']) ? $this->vars['T_TH_COLOR1'] : $this->lang('T_TH_COLOR1'); ?> solid; }

/* This is the outline round the main forum tables */
.forumline    { background-color: <?php echo isset($this->vars['T_TD_COLOR2']) ? $this->vars['T_TD_COLOR2'] : $this->lang('T_TD_COLOR2'); ?>; border: 2px <?php echo isset($this->vars['T_TH_COLOR2']) ? $this->vars['T_TH_COLOR2'] : $this->lang('T_TH_COLOR2'); ?> solid; }

/* Main table cell colours and backgrounds */
td.row1    { background-color: <?php echo isset($this->vars['T_TR_COLOR1']) ? $this->vars['T_TR_COLOR1'] : $this->lang('T_TR_COLOR1'); ?>; }
td.row2    { background-color: <?php echo isset($this->vars['T_TR_COLOR2']) ? $this->vars['T_TR_COLOR2'] : $this->lang('T_TR_COLOR2'); ?>; }
td.row3    { background-color: <?php echo isset($this->vars['T_TR_COLOR3']) ? $this->vars['T_TR_COLOR3'] : $this->lang('T_TR_COLOR3'); ?>; }

/*
  This is for the table cell above the Topics, Post & Last posts on the index.php page
  By default this is the fading out gradiated silver background.
  However, you could replace this with a bitmap specific for each forum
*/
td.rowpic {
        background-color: <?php echo isset($this->vars['T_TD_COLOR2']) ? $this->vars['T_TD_COLOR2'] : $this->lang('T_TD_COLOR2'); ?>;
        background-image: url(modules/Forums/templates/subSilver/images/<?php echo isset($this->vars['T_TH_CLASS3']) ? $this->vars['T_TH_CLASS3'] : $this->lang('T_TH_CLASS3'); ?>);
        background-repeat: repeat-y;
}

/* Header cells - the blue and silver gradient backgrounds */
th    {
    color: <?php echo isset($this->vars['T_FONTCOLOR3']) ? $this->vars['T_FONTCOLOR3'] : $this->lang('T_FONTCOLOR3'); ?>; font-size: <?php echo isset($this->vars['T_FONTSIZE2']) ? $this->vars['T_FONTSIZE2'] : $this->lang('T_FONTSIZE2'); ?>px; font-weight : bold; 
    background-color: <?php echo isset($this->vars['T_BODY_LINK']) ? $this->vars['T_BODY_LINK'] : $this->lang('T_BODY_LINK'); ?>; height: 25px;
    background-image: url(modules/Forums/templates/subSilver/images/<?php echo isset($this->vars['T_TH_CLASS2']) ? $this->vars['T_TH_CLASS2'] : $this->lang('T_TH_CLASS2'); ?>);
}

td.cat,td.catHead,td.catSides,td.catLeft,td.catRight,td.catBottom {
            background-image: url(modules/Forums/templates/subSilver/images/<?php echo isset($this->vars['T_TH_CLASS1']) ? $this->vars['T_TH_CLASS1'] : $this->lang('T_TH_CLASS1'); ?>);
            background-color:<?php echo isset($this->vars['T_TR_COLOR3']) ? $this->vars['T_TR_COLOR3'] : $this->lang('T_TR_COLOR3'); ?>; border: <?php echo isset($this->vars['T_TH_COLOR3']) ? $this->vars['T_TH_COLOR3'] : $this->lang('T_TH_COLOR3'); ?>; border-style: solid; height: 28px;
}

/*
  Setting additional nice inner borders for the main table cells.
  The names indicate which sides the border will be on.
  Don't worry if you don't understand this, just ignore it :-)
*/
td.cat,td.catHead,td.catBottom {
    height: 29px;
    border-width: 0px 0px 0px 0px;
}
th.thHead,th.thSides,th.thTop,th.thLeft,th.thRight,th.thBottom,th.thCornerL,th.thCornerR {
    font-weight: bold; border: <?php echo isset($this->vars['T_TD_COLOR2']) ? $this->vars['T_TD_COLOR2'] : $this->lang('T_TD_COLOR2'); ?>; border-style: solid; height: 28px;
}
td.row3Right,td.spaceRow {
    background-color: <?php echo isset($this->vars['T_TR_COLOR3']) ? $this->vars['T_TR_COLOR3'] : $this->lang('T_TR_COLOR3'); ?>; border: <?php echo isset($this->vars['T_TH_COLOR3']) ? $this->vars['T_TH_COLOR3'] : $this->lang('T_TH_COLOR3'); ?>; border-style: solid;
}

th.thHead,td.catHead { font-size: <?php echo isset($this->vars['T_FONTSIZE3']) ? $this->vars['T_FONTSIZE3'] : $this->lang('T_FONTSIZE3'); ?>px; border-width: 1px 1px 0px 1px; }
th.thSides,td.catSides,td.spaceRow     { border-width: 0px 1px 0px 1px; }
th.thRight,td.catRight,td.row3Right     { border-width: 0px 1px 0px 0px; }
th.thLeft,td.catLeft      { border-width: 0px 0px 0px 1px; }
th.thBottom,td.catBottom  { border-width: 0px 1px 1px 1px; }
th.thTop     { border-width: 1px 0px 0px 0px; }
th.thCornerL { border-width: 1px 0px 0px 1px; }
th.thCornerR { border-width: 1px 1px 0px 0px; }

/* The largest text used in the index page title and toptic title etc. */
.maintitle    {
    font-weight: bold; font-size: 22px; font-family: "<?php echo isset($this->vars['T_FONTFACE2']) ? $this->vars['T_FONTFACE2'] : $this->lang('T_FONTFACE2'); ?>",<?php echo isset($this->vars['T_FONTFACE1']) ? $this->vars['T_FONTFACE1'] : $this->lang('T_FONTFACE1'); ?>;
    text-decoration: none; line-height : 120%; color : <?php echo isset($this->vars['T_BODY_TEXT']) ? $this->vars['T_BODY_TEXT'] : $this->lang('T_BODY_TEXT'); ?>;
}

/* General text */
.gen { font-size : <?php echo isset($this->vars['T_FONTSIZE3']) ? $this->vars['T_FONTSIZE3'] : $this->lang('T_FONTSIZE3'); ?>px; }
.genmed { font-size : <?php echo isset($this->vars['T_FONTSIZE2']) ? $this->vars['T_FONTSIZE2'] : $this->lang('T_FONTSIZE2'); ?>px; }
.gensmall { font-size : <?php echo isset($this->vars['T_FONTSIZE1']) ? $this->vars['T_FONTSIZE1'] : $this->lang('T_FONTSIZE1'); ?>px; }
.gen,.genmed,.gensmall { color : <?php echo isset($this->vars['T_BODY_TEXT']) ? $this->vars['T_BODY_TEXT'] : $this->lang('T_BODY_TEXT'); ?>; }
a.gen,a.genmed,a.gensmall { color: <?php echo isset($this->vars['T_BODY_LINK']) ? $this->vars['T_BODY_LINK'] : $this->lang('T_BODY_LINK'); ?>; text-decoration: none; }
a.gen:hover,a.genmed:hover,a.gensmall:hover    { color: <?php echo isset($this->vars['T_BODY_HLINK']) ? $this->vars['T_BODY_HLINK'] : $this->lang('T_BODY_HLINK'); ?>; text-decoration: underline; }

/* The register, login, search etc links at the top of the page */
.mainmenu        { font-size : <?php echo isset($this->vars['T_FONTSIZE2']) ? $this->vars['T_FONTSIZE2'] : $this->lang('T_FONTSIZE2'); ?>px; color : <?php echo isset($this->vars['T_BODY_TEXT']) ? $this->vars['T_BODY_TEXT'] : $this->lang('T_BODY_TEXT'); ?> }
a.mainmenu        { text-decoration: none; color : <?php echo isset($this->vars['T_BODY_LINK']) ? $this->vars['T_BODY_LINK'] : $this->lang('T_BODY_LINK'); ?>;  }
a.mainmenu:hover{ text-decoration: underline; color : <?php echo isset($this->vars['T_BODY_HLINK']) ? $this->vars['T_BODY_HLINK'] : $this->lang('T_BODY_HLINK'); ?>; }

/* Forum category titles */
.cattitle        { font-weight: bold; font-size: <?php echo isset($this->vars['T_FONTSIZE3']) ? $this->vars['T_FONTSIZE3'] : $this->lang('T_FONTSIZE3'); ?>px ; letter-spacing: 1px; color : <?php echo isset($this->vars['T_BODY_LINK']) ? $this->vars['T_BODY_LINK'] : $this->lang('T_BODY_LINK'); ?>}
a.cattitle        { text-decoration: none; color : <?php echo isset($this->vars['T_BODY_LINK']) ? $this->vars['T_BODY_LINK'] : $this->lang('T_BODY_LINK'); ?>; }
a.cattitle:hover{ text-decoration: underline; }

/* Forum title: Text and link to the forums used in: index.php */
.forumlink        { font-weight: bold; font-size: <?php echo isset($this->vars['T_FONTSIZE3']) ? $this->vars['T_FONTSIZE3'] : $this->lang('T_FONTSIZE3'); ?>px; color : <?php echo isset($this->vars['T_BODY_LINK']) ? $this->vars['T_BODY_LINK'] : $this->lang('T_BODY_LINK'); ?>; }
a.forumlink     { text-decoration: none; color : <?php echo isset($this->vars['T_BODY_LINK']) ? $this->vars['T_BODY_LINK'] : $this->lang('T_BODY_LINK'); ?>; }
a.forumlink:hover{ text-decoration: underline; color : <?php echo isset($this->vars['T_BODY_HLINK']) ? $this->vars['T_BODY_HLINK'] : $this->lang('T_BODY_HLINK'); ?>; }

/* Used for the navigation text, (Page 1,2,3 etc) and the navigation bar when in a forum */
.nav            { font-weight: bold; font-size: <?php echo isset($this->vars['T_FONTSIZE2']) ? $this->vars['T_FONTSIZE2'] : $this->lang('T_FONTSIZE2'); ?>px; color : <?php echo isset($this->vars['T_BODY_TEXT']) ? $this->vars['T_BODY_TEXT'] : $this->lang('T_BODY_TEXT'); ?>;}
a.nav            { text-decoration: none; color : <?php echo isset($this->vars['T_BODY_LINK']) ? $this->vars['T_BODY_LINK'] : $this->lang('T_BODY_LINK'); ?>; }
a.nav:hover        { text-decoration: underline; }

/* titles for the topics: could specify viewed link colour too */
.topictitle,h1,h2    { font-weight: bold; font-size: <?php echo isset($this->vars['T_FONTSIZE2']) ? $this->vars['T_FONTSIZE2'] : $this->lang('T_FONTSIZE2'); ?>px; color : <?php echo isset($this->vars['T_BODY_TEXT']) ? $this->vars['T_BODY_TEXT'] : $this->lang('T_BODY_TEXT'); ?>; }
a.topictitle:link   { text-decoration: none; color : <?php echo isset($this->vars['T_BODY_LINK']) ? $this->vars['T_BODY_LINK'] : $this->lang('T_BODY_LINK'); ?>; }
a.topictitle:visited { text-decoration: none; color : <?php echo isset($this->vars['T_BODY_VLINK']) ? $this->vars['T_BODY_VLINK'] : $this->lang('T_BODY_VLINK'); ?>; }
a.topictitle:hover    { text-decoration: underline; color : <?php echo isset($this->vars['T_BODY_HLINK']) ? $this->vars['T_BODY_HLINK'] : $this->lang('T_BODY_HLINK'); ?>; }

/* Name of poster in viewmsg.php and viewtopic.php and other places */
.name            { font-size : <?php echo isset($this->vars['T_FONTSIZE2']) ? $this->vars['T_FONTSIZE2'] : $this->lang('T_FONTSIZE2'); ?>px; color : <?php echo isset($this->vars['T_BODY_TEXT']) ? $this->vars['T_BODY_TEXT'] : $this->lang('T_BODY_TEXT'); ?>;}

/* Location, number of posts, post date etc */
.postdetails        { font-size : <?php echo isset($this->vars['T_FONTSIZE1']) ? $this->vars['T_FONTSIZE1'] : $this->lang('T_FONTSIZE1'); ?>px; color : <?php echo isset($this->vars['T_BODY_TEXT']) ? $this->vars['T_BODY_TEXT'] : $this->lang('T_BODY_TEXT'); ?>; }

/* The content of the posts (body of text) */
.postbody { font-size : <?php echo isset($this->vars['T_FONTSIZE3']) ? $this->vars['T_FONTSIZE3'] : $this->lang('T_FONTSIZE3'); ?>px; line-height: 18px}
a.postlink:link    { text-decoration: none; color : <?php echo isset($this->vars['T_BODY_LINK']) ? $this->vars['T_BODY_LINK'] : $this->lang('T_BODY_LINK'); ?> }
a.postlink:visited { text-decoration: none; color : <?php echo isset($this->vars['T_BODY_VLINK']) ? $this->vars['T_BODY_VLINK'] : $this->lang('T_BODY_VLINK'); ?>; }
a.postlink:hover { text-decoration: underline; color : <?php echo isset($this->vars['T_BODY_HLINK']) ? $this->vars['T_BODY_HLINK'] : $this->lang('T_BODY_HLINK'); ?>}

/* Quote & Code blocks */
.code { 
    font-family: <?php echo isset($this->vars['T_FONTFACE3']) ? $this->vars['T_FONTFACE3'] : $this->lang('T_FONTFACE3'); ?>; font-size: <?php echo isset($this->vars['T_FONTSIZE2']) ? $this->vars['T_FONTSIZE2'] : $this->lang('T_FONTSIZE2'); ?>px; color: <?php echo isset($this->vars['T_FONTCOLOR2']) ? $this->vars['T_FONTCOLOR2'] : $this->lang('T_FONTCOLOR2'); ?>;
    background-color: <?php echo isset($this->vars['T_TD_COLOR1']) ? $this->vars['T_TD_COLOR1'] : $this->lang('T_TD_COLOR1'); ?>; border: <?php echo isset($this->vars['T_TR_COLOR3']) ? $this->vars['T_TR_COLOR3'] : $this->lang('T_TR_COLOR3'); ?>; border-style: solid;
    border-left-width: 1px; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px
}

.quote {
    font-family: <?php echo isset($this->vars['T_FONTFACE1']) ? $this->vars['T_FONTFACE1'] : $this->lang('T_FONTFACE1'); ?>; font-size: <?php echo isset($this->vars['T_FONTSIZE2']) ? $this->vars['T_FONTSIZE2'] : $this->lang('T_FONTSIZE2'); ?>px; color: <?php echo isset($this->vars['T_FONTCOLOR1']) ? $this->vars['T_FONTCOLOR1'] : $this->lang('T_FONTCOLOR1'); ?>; line-height: 125%;
    background-color: <?php echo isset($this->vars['T_TD_COLOR1']) ? $this->vars['T_TD_COLOR1'] : $this->lang('T_TD_COLOR1'); ?>; border: <?php echo isset($this->vars['T_TR_COLOR3']) ? $this->vars['T_TR_COLOR3'] : $this->lang('T_TR_COLOR3'); ?>; border-style: solid;
    border-left-width: 1px; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px
}

/* Copyright and bottom info */
.copyright        { font-size: <?php echo isset($this->vars['T_FONTSIZE1']) ? $this->vars['T_FONTSIZE1'] : $this->lang('T_FONTSIZE1'); ?>px; font-family: <?php echo isset($this->vars['T_FONTFACE1']) ? $this->vars['T_FONTFACE1'] : $this->lang('T_FONTFACE1'); ?>; color: <?php echo isset($this->vars['T_FONTCOLOR1']) ? $this->vars['T_FONTCOLOR1'] : $this->lang('T_FONTCOLOR1'); ?>; letter-spacing: -1px;}
a.copyright        { color: <?php echo isset($this->vars['T_FONTCOLOR1']) ? $this->vars['T_FONTCOLOR1'] : $this->lang('T_FONTCOLOR1'); ?>; text-decoration: none;}
a.copyright:hover { color: <?php echo isset($this->vars['T_BODY_TEXT']) ? $this->vars['T_BODY_TEXT'] : $this->lang('T_BODY_TEXT'); ?>; text-decoration: underline;}

/* Form elements */
input,textarea, select {
    color : <?php echo isset($this->vars['T_BODY_TEXT']) ? $this->vars['T_BODY_TEXT'] : $this->lang('T_BODY_TEXT'); ?>;
    font: normal <?php echo isset($this->vars['T_FONTSIZE2']) ? $this->vars['T_FONTSIZE2'] : $this->lang('T_FONTSIZE2'); ?>px <?php echo isset($this->vars['T_FONTFACE1']) ? $this->vars['T_FONTFACE1'] : $this->lang('T_FONTFACE1'); ?>;
    border-color : <?php echo isset($this->vars['T_BODY_TEXT']) ? $this->vars['T_BODY_TEXT'] : $this->lang('T_BODY_TEXT'); ?>;
}

/* The text input fields background colour */
input.post, textarea.post, select {
    background-color : <?php echo isset($this->vars['T_TD_COLOR2']) ? $this->vars['T_TD_COLOR2'] : $this->lang('T_TD_COLOR2'); ?>;
}

/* Start replacement - Advanced time management MOD */
/* input { text-indent : 2px; }
/* End replacement - Advanced time management MOD */

/* The buttons used for bbCode styling in message post */
input.button {
    background-color : <?php echo isset($this->vars['T_TR_COLOR1']) ? $this->vars['T_TR_COLOR1'] : $this->lang('T_TR_COLOR1'); ?>;
    color : <?php echo isset($this->vars['T_BODY_TEXT']) ? $this->vars['T_BODY_TEXT'] : $this->lang('T_BODY_TEXT'); ?>;
    font-size: <?php echo isset($this->vars['T_FONTSIZE2']) ? $this->vars['T_FONTSIZE2'] : $this->lang('T_FONTSIZE2'); ?>px; font-family: <?php echo isset($this->vars['T_FONTFACE1']) ? $this->vars['T_FONTFACE1'] : $this->lang('T_FONTFACE1'); ?>;
}

/* The main submit button option */
input.mainoption {
    background-color : <?php echo isset($this->vars['T_TD_COLOR1']) ? $this->vars['T_TD_COLOR1'] : $this->lang('T_TD_COLOR1'); ?>;
    font-weight : bold;
}

/* None-bold submit button */
input.liteoption {
    background-color : <?php echo isset($this->vars['T_TD_COLOR1']) ? $this->vars['T_TD_COLOR1'] : $this->lang('T_TD_COLOR1'); ?>;
    font-weight : normal;
}

/* This is the line in the posting page which shows the rollover
  help line. This is actually a text box, but if set to be the same
  colour as the background no one will know ;)
*/
.helpline { background-color: <?php echo isset($this->vars['T_TR_COLOR2']) ? $this->vars['T_TR_COLOR2'] : $this->lang('T_TR_COLOR2'); ?>; border-style: none; }

/* Import the fancy styles for IE only (NS4.x doesn't use the @import function) */
@import url("modules/Forums/templates/subSilver/formIE.css"); 
-->
</style>
<!-- start mod : Resize Posted Images Based on Max Width -->
<script type="text/javascript">
//<![CDATA[
<!--

var rmw_max_width = <?php echo isset($this->vars['IMAGE_RESIZE_WIDTH']) ? $this->vars['IMAGE_RESIZE_WIDTH'] : $this->lang('IMAGE_RESIZE_WIDTH'); ?>; // you can change this number, this is the max width in pixels for posted images
var rmw_border_1 = '1px solid <?php echo isset($this->vars['T_BODY_LINK']) ? $this->vars['T_BODY_LINK'] : $this->lang('T_BODY_LINK'); ?>';
var rmw_border_2 = '2px dotted <?php echo isset($this->vars['T_BODY_LINK']) ? $this->vars['T_BODY_LINK'] : $this->lang('T_BODY_LINK'); ?>';
var rmw_image_title = '<?php echo isset($this->vars['L_RMW_IMAGE_TITLE']) ? $this->vars['L_RMW_IMAGE_TITLE'] : $this->lang('L_RMW_IMAGE_TITLE'); ?>';

//-->
//]]>
</script>
<script type="text/javascript" src="<?php echo isset($this->vars['U_RMW_JSLIB']) ? $this->vars['U_RMW_JSLIB'] : $this->lang('U_RMW_JSLIB'); ?>"></script>
<!-- fin mod : Resize Posted Images Based on Max Width -->
<?php

$switch_enable_pm_popup_count = ( isset($this->_tpldata['switch_enable_pm_popup.']) ) ?  sizeof($this->_tpldata['switch_enable_pm_popup.']) : 0;
for ($switch_enable_pm_popup_i = 0; $switch_enable_pm_popup_i < $switch_enable_pm_popup_count; $switch_enable_pm_popup_i++)
{
 $switch_enable_pm_popup_item = &$this->_tpldata['switch_enable_pm_popup.'][$switch_enable_pm_popup_i];
 $switch_enable_pm_popup_item['S_ROW_COUNT'] = $switch_enable_pm_popup_i;
 $switch_enable_pm_popup_item['S_NUM_ROWS'] = $switch_enable_pm_popup_count;

?>
<script type="text/javascript">
<!--
    if ( <?php echo isset($this->vars['PRIVATE_MESSAGE_NEW_FLAG']) ? $this->vars['PRIVATE_MESSAGE_NEW_FLAG'] : $this->lang('PRIVATE_MESSAGE_NEW_FLAG'); ?> )
    {
        window.open('<?php echo isset($this->vars['U_PRIVATEMSGS_POPUP']) ? $this->vars['U_PRIVATEMSGS_POPUP'] : $this->lang('U_PRIVATEMSGS_POPUP'); ?>', '_phpbbprivmsg', 'HEIGHT=225,resizable=yes,WIDTH=400');;
    }
//-->
</script>
<?php

} // END switch_enable_pm_popup

if(isset($switch_enable_pm_popup_item)) { unset($switch_enable_pm_popup_item); } 

?>
<!-- Start add - Advanced time management MOD -->
<?php

$switch_send_pc_dateTime_count = ( isset($this->_tpldata['switch_send_pc_dateTime.']) ) ?  sizeof($this->_tpldata['switch_send_pc_dateTime.']) : 0;
for ($switch_send_pc_dateTime_i = 0; $switch_send_pc_dateTime_i < $switch_send_pc_dateTime_count; $switch_send_pc_dateTime_i++)
{
 $switch_send_pc_dateTime_item = &$this->_tpldata['switch_send_pc_dateTime.'][$switch_send_pc_dateTime_i];
 $switch_send_pc_dateTime_item['S_ROW_COUNT'] = $switch_send_pc_dateTime_i;
 $switch_send_pc_dateTime_item['S_NUM_ROWS'] = $switch_send_pc_dateTime_count;

?>
<script type="text/javascript">
<!-- Start Replace - window.onload = send_pc_dateTime -->
send_pc_dateTime();
<!-- End Replace - window.onload = send_pc_dateTime -->

function send_pc_dateTime() {
    var pc_dateTime = new Date()
    pc_timezoneOffset = pc_dateTime.getTimezoneOffset()*(-60);
    pc_date = pc_dateTime.getFullYear()*10000 + (pc_dateTime.getMonth()+1)*100 + pc_dateTime.getDate();
    pc_time = pc_dateTime.getHours()*3600 + pc_dateTime.getMinutes()*60 + pc_dateTime.getSeconds();

    for ( i = 0; document.links.length > i; i++ ) {
        with ( document.links[i] ) {
            if ( href.indexOf('<?php echo isset($this->vars['U_SELF']) ? $this->vars['U_SELF'] : $this->lang('U_SELF'); ?>') == 0 ) {
                textLink = '' + document.links[i].firstChild.data
                if ( textLink.indexOf('http://') != 0 && textLink.indexOf('www.') != 0 && (textLink.indexOf('@') == -1 || textLink.indexOf('@') == 0 || textLink.indexOf('@') == textLink.length-1 )) {
                    if ( href.indexOf('?') == -1 ) {
                        pc_data = '?pc_tzo=' + pc_timezoneOffset + '&pc_d=' + pc_date + '&pc_t=' + pc_time;
                    } else {
                        pc_data = '&pc_tzo=' + pc_timezoneOffset + '&pc_d=' + pc_date + '&pc_t=' + pc_time;
                    }
                    if ( href.indexOf('#') == -1 ) {
                        href += pc_data;
                    } else {
                        href = href.substring(0, href.indexOf('#')-1) + pc_data + href.substring(href.indexOf('#'), href.length-1);
                    }
                }
            }
        }
    }
}
</script>
<?php

} // END switch_send_pc_dateTime

if(isset($switch_send_pc_dateTime_item)) { unset($switch_send_pc_dateTime_item); } 

?>
<!-- End add - Advanced time management MOD -->
</head>
<body bgcolor="<?php echo isset($this->vars['T_BODY_BGCOLOR']) ? $this->vars['T_BODY_BGCOLOR'] : $this->lang('T_BODY_BGCOLOR'); ?>" text="<?php echo isset($this->vars['T_BODY_TEXT']) ? $this->vars['T_BODY_TEXT'] : $this->lang('T_BODY_TEXT'); ?>" link="<?php echo isset($this->vars['T_BODY_LINK']) ? $this->vars['T_BODY_LINK'] : $this->lang('T_BODY_LINK'); ?>" vlink="<?php echo isset($this->vars['T_BODY_VLINK']) ? $this->vars['T_BODY_VLINK'] : $this->lang('T_BODY_VLINK'); ?>">

<a name="top"></a>

<table width="100%" cellspacing="0" cellpadding="10" border="0" align="center"> 
    <tr> 
        <td class="bodyline"><table width="100%" cellspacing="0" cellpadding="0" border="0">
            <tr> 
                <table cellspacing="0" cellpadding="2" border="0">
                    <tr>
                        <td align="center" valign="top" nowrap="nowrap"><center><span class="mainmenu">&nbsp;<a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>" class="mainmenu"><?php echo isset($this->vars['I_MINI_INDEX']) ? $this->vars['I_MINI_INDEX'] : $this->lang('I_MINI_INDEX'); ?><?php echo isset($this->vars['L_MINI_INDEX']) ? $this->vars['L_MINI_INDEX'] : $this->lang('L_MINI_INDEX'); ?></a>&nbsp;&nbsp;<a href="<?php echo isset($this->vars['U_SEARCH']) ? $this->vars['U_SEARCH'] : $this->lang('U_SEARCH'); ?>" class="mainmenu"><?php echo isset($this->vars['I_MINI_SEARCH']) ? $this->vars['I_MINI_SEARCH'] : $this->lang('I_MINI_SEARCH'); ?><?php echo isset($this->vars['L_SEARCH']) ? $this->vars['L_SEARCH'] : $this->lang('L_SEARCH'); ?></a>&nbsp;&nbsp;<a href="<?php echo isset($this->vars['U_GROUP_CP']) ? $this->vars['U_GROUP_CP'] : $this->lang('U_GROUP_CP'); ?>" class="mainmenu"><?php echo isset($this->vars['I_MINI_USERGROUPS']) ? $this->vars['I_MINI_USERGROUPS'] : $this->lang('I_MINI_USERGROUPS'); ?><?php echo isset($this->vars['L_USERGROUPS']) ? $this->vars['L_USERGROUPS'] : $this->lang('L_USERGROUPS'); ?></a>&nbsp;&nbsp;<a href="<?php echo isset($this->vars['U_PROFILE']) ? $this->vars['U_PROFILE'] : $this->lang('U_PROFILE'); ?>" class="mainmenu"><?php echo isset($this->vars['I_MINI_PROFILE']) ? $this->vars['I_MINI_PROFILE'] : $this->lang('I_MINI_PROFILE'); ?><?php echo isset($this->vars['L_PROFILE']) ? $this->vars['L_PROFILE'] : $this->lang('L_PROFILE'); ?></a>&nbsp;&nbsp;<a href="<?php echo isset($this->vars['U_MEMBERLIST']) ? $this->vars['U_MEMBERLIST'] : $this->lang('U_MEMBERLIST'); ?>" class="mainmenu"><?php echo isset($this->vars['I_MINI_MEMBERLIST']) ? $this->vars['I_MINI_MEMBERLIST'] : $this->lang('I_MINI_MEMBERLIST'); ?><?php echo isset($this->vars['L_MEMBERLIST']) ? $this->vars['L_MEMBERLIST'] : $this->lang('L_MEMBERLIST'); ?></a>&nbsp;&nbsp;<a href="<?php echo isset($this->vars['U_PRIVATEMSGS']) ? $this->vars['U_PRIVATEMSGS'] : $this->lang('U_PRIVATEMSGS'); ?>" class="mainmenu"><?php echo isset($this->vars['I_MINI_PRIVATEMSGS']) ? $this->vars['I_MINI_PRIVATEMSGS'] : $this->lang('I_MINI_PRIVATEMSGS'); ?><?php echo isset($this->vars['PRIVATE_MESSAGE_INFO']) ? $this->vars['PRIVATE_MESSAGE_INFO'] : $this->lang('PRIVATE_MESSAGE_INFO'); ?></a>&nbsp;<br />
                        &nbsp;<a href="<?php echo isset($this->vars['U_ARCADE']) ? $this->vars['U_ARCADE'] : $this->lang('U_ARCADE'); ?>" class="mainmenu"><?php echo isset($this->vars['I_MINI_ARCADE']) ? $this->vars['I_MINI_ARCADE'] : $this->lang('I_MINI_ARCADE'); ?><?php echo isset($this->vars['L_ARCADE']) ? $this->vars['L_ARCADE'] : $this->lang('L_ARCADE'); ?></a>&nbsp;&nbsp;<a href="<?php echo isset($this->vars['U_RANKS']) ? $this->vars['U_RANKS'] : $this->lang('U_RANKS'); ?>" class="mainmenu"><?php echo isset($this->vars['I_RANKS']) ? $this->vars['I_RANKS'] : $this->lang('I_RANKS'); ?><?php echo isset($this->vars['L_RANKS']) ? $this->vars['L_RANKS'] : $this->lang('L_RANKS'); ?></a>&nbsp;&nbsp;<a href="<?php echo isset($this->vars['U_STAFF']) ? $this->vars['U_STAFF'] : $this->lang('U_STAFF'); ?>" class="mainmenu"><?php echo isset($this->vars['I_STAFF']) ? $this->vars['I_STAFF'] : $this->lang('I_STAFF'); ?><?php echo isset($this->vars['L_STAFF']) ? $this->vars['L_STAFF'] : $this->lang('L_STAFF'); ?></a>&nbsp;&nbsp;<a href="<?php echo isset($this->vars['U_STATISTICS']) ? $this->vars['U_STATISTICS'] : $this->lang('U_STATISTICS'); ?>" class="mainmenu"><?php echo isset($this->vars['I_STATISTICS']) ? $this->vars['I_STATISTICS'] : $this->lang('I_STATISTICS'); ?><?php echo isset($this->vars['L_STATISTICS']) ? $this->vars['L_STATISTICS'] : $this->lang('L_STATISTICS'); ?></a>&nbsp;&nbsp;<a href="<?php echo isset($this->vars['U_RULES']) ? $this->vars['U_RULES'] : $this->lang('U_RULES'); ?>" class="mainmenu"><?php echo isset($this->vars['I_RULES']) ? $this->vars['I_RULES'] : $this->lang('I_RULES'); ?><?php echo isset($this->vars['L_RULES']) ? $this->vars['L_RULES'] : $this->lang('L_RULES'); ?></a>&nbsp;&nbsp;<a href="<?php echo isset($this->vars['U_FAQ']) ? $this->vars['U_FAQ'] : $this->lang('U_FAQ'); ?>" class="mainmenu"><?php echo isset($this->vars['I_MINI_FAQ']) ? $this->vars['I_MINI_FAQ'] : $this->lang('I_MINI_FAQ'); ?><?php echo isset($this->vars['L_FAQ']) ? $this->vars['L_FAQ'] : $this->lang('L_FAQ'); ?></a>&nbsp;&nbsp;<a href="<?php echo isset($this->vars['U_LOGIN_LOGOUT']) ? $this->vars['U_LOGIN_LOGOUT'] : $this->lang('U_LOGIN_LOGOUT'); ?>" class="mainmenu"><?php echo isset($this->vars['I_MINI_LOGIN_LOGOUT']) ? $this->vars['I_MINI_LOGIN_LOGOUT'] : $this->lang('I_MINI_LOGIN_LOGOUT'); ?><?php echo isset($this->vars['L_LOGIN_LOGOUT']) ? $this->vars['L_LOGIN_LOGOUT'] : $this->lang('L_LOGIN_LOGOUT'); ?></a>&nbsp;</span></center></td>
                    </tr>
                </table></td>
            </tr>
        </table>

<!-- Quick Search -->
<?php

$switch_quick_search_count = ( isset($this->_tpldata['switch_quick_search.']) ) ?  sizeof($this->_tpldata['switch_quick_search.']) : 0;
for ($switch_quick_search_i = 0; $switch_quick_search_i < $switch_quick_search_count; $switch_quick_search_i++)
{
 $switch_quick_search_item = &$this->_tpldata['switch_quick_search.'][$switch_quick_search_i];
 $switch_quick_search_item['S_ROW_COUNT'] = $switch_quick_search_i;
 $switch_quick_search_item['S_NUM_ROWS'] = $switch_quick_search_count;

?>
<br /><script type="text/javascript">
<!--
function checkSearch()
{
    <?php echo isset($switch_quick_search_item['CHECKSEARCH']) ? $switch_quick_search_item['CHECKSEARCH'] : ''; ?>
    else
    {
        return true;
    }
}
//-->
</script>
<center>
<table width="100%" cellpadding="2" cellspacing="1" border="0"><form name="search_block" method="post" action="<?php echo isset($this->vars['U_SEARCH']) ? $this->vars['U_SEARCH'] : $this->lang('U_SEARCH'); ?>" onSubmit="return 
checkSearch()">
  <tr>            
    <td align="center"><span class="gensmall" style="line-height=150%">
    <?php echo isset($switch_quick_search_item['L_QUICK_SEARCH_FOR']) ? $switch_quick_search_item['L_QUICK_SEARCH_FOR'] : ''; ?> <input class="post" type="text" name="search_keywords" size="15"> 
<?php echo isset($switch_quick_search_item['L_QUICK_SEARCH_AT']) ? $switch_quick_search_item['L_QUICK_SEARCH_AT'] : ''; ?> <select class="post" name="site_search"><?php echo isset($switch_quick_search_item['SEARCHLIST']) ? $switch_quick_search_item['SEARCHLIST'] : ''; ?></select>
    <input class="mainoption" type="submit" value="<?php echo isset($this->vars['L_SEARCH']) ? $this->vars['L_SEARCH'] : $this->lang('L_SEARCH'); ?>"></span></td>
  </tr>
  <tr>
    <td align="center"><a href="<?php echo isset($this->vars['U_SEARCH']) ? $this->vars['U_SEARCH'] : $this->lang('U_SEARCH'); ?>" class="gensmall"><?php echo isset($switch_quick_search_item['L_ADVANCED_FORUM_SEARCH']) ? $switch_quick_search_item['L_ADVANCED_FORUM_SEARCH'] : ''; ?></a></td>
  </tr>
<input type="hidden" name="search_fields" value="all">
<input type="hidden" name="show_results" value="topics"></form>
</table>
</center>
<?php

} // END switch_quick_search

if(isset($switch_quick_search_item)) { unset($switch_quick_search_item); } 

?>

<?php

$boarddisabled_count = ( isset($this->_tpldata['boarddisabled.']) ) ?  sizeof($this->_tpldata['boarddisabled.']) : 0;
for ($boarddisabled_i = 0; $boarddisabled_i < $boarddisabled_count; $boarddisabled_i++)
{
 $boarddisabled_item = &$this->_tpldata['boarddisabled.'][$boarddisabled_i];
 $boarddisabled_item['S_ROW_COUNT'] = $boarddisabled_i;
 $boarddisabled_item['S_NUM_ROWS'] = $boarddisabled_count;

?>
  <br /><div align="center"><span class="gen"><strong><?php echo isset($this->vars['L_BOARD_CURRENTLY_DISABLED']) ? $this->vars['L_BOARD_CURRENTLY_DISABLED'] : $this->lang('L_BOARD_CURRENTLY_DISABLED'); ?></strong></span></div><br />
<?php

} // END boarddisabled

if(isset($boarddisabled_item)) { unset($boarddisabled_item); } 

?>

        <br />