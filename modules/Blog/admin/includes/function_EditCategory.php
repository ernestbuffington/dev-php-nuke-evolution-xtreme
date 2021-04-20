<?php
/*======================================================================= 
  PHP-Nuke Titanium | Nuke-Evolution Xtreme : PHP-Nuke Web Portal System
 =======================================================================*/

/*****['CHANGES']**********************************************************
-=['Base']=-
      Nuke Patched                             v3.1.0       06/26/2005
      NukeSentinel                             v2.5.00      07/11/2006
      Caching System                           v1.0.0       10/31/2005
      Evolution Functions                      v1.5.0       12/20/2005
 ************************************************************************/

if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    exit('Access Denied');
}

function EditCategory($catid) 
{
    global $prefix, $db, $admin_file;

    $catid = intval($catid);
    $result = $db->sql_query('SELECT `title` FROM `'.$prefix.'_stories_cat` WHERE `catid` = `'.$catid.'`');
    
	list($title) = $db->sql_fetchrow($result);
    
	include(NUKE_BASE_DIR.'header.php');

    OpenTable();
    
	echo "<div align=\"center\"><span class=\"option\"><strong>"._EDITCATEGORY."</strong></span><br /><br />";
    
	if (empty($catid) || !intval($catid))
	{
        $selcat = $db->sql_query('select catid, title from '.$prefix.'_stories_cat');
        
		echo "<form action=\"".$admin_file.".php\" method=\"post\">";
        echo "<strong>"._ASELECTCATEGORY."</strong>";
        echo "<select name=\"catid\">";
        echo "<option name=\"catid\" value=\"0\" $sel>Blogs</option>";
    
	    while(list($catid, $title) = $db->sql_fetchrow($selcat)) 
		{
            $catid = intval($catid);
            echo "<option name=\"catid\" value=\"$catid\" $sel>$title</option>";
        }
        
		echo "</select>";
        echo "<input type=\"hidden\" name=\"op\" value=\"EditCategory\">";
        echo "<input type=\"submit\" value=\""._EDIT."\"><br /><br />";
        echo ""._NOBLOGEDIT."";
    } 
	else 
	{
        echo "<form action=\"".$admin_file.".php\" method=\"post\">";
        echo "<strong>"._CATEGORYNAME.":</strong> ";
        echo "<input type=\"text\" name=\"title\" size=\"22\" maxlength=\"20\" value=\"$title\"> ";
        echo "<input type=\"hidden\" name=\"catid\" value=\"$catid\">";
        echo "<input type=\"hidden\" name=\"op\" value=\"SaveEditCategory\">";
        echo "<input type=\"submit\" value=\""._SAVECHANGES."\"><br /><br />";
        echo ""._NOARTCATEDIT."";
        echo "</form>";
    }
    
	echo "</div>";
    
	CloseTable();
    
	include(NUKE_BASE_DIR.'footer.php');
}