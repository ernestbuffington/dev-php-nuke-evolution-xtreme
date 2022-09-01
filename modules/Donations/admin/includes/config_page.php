<?php
/*======================================================================= 
  PHP-Nuke Titanium | Nuke-Evolution Xtreme : PHP-Nuke Web Portal System
 =======================================================================*/


if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    exit('Access Denied');
}

//Close the open table
CloseTable();
echo '<br />';
//Start a new table
OpenTable();

/*==============================================================================================
    Function:    get_radios()
    In:          N/A
    Return:      An array of radio buttons
    Notes:       Creates the radio buttons using the donate_radio() function
================================================================================================*/
function get_radios() {
    global $lang_donate, $page_values;
    $out = array();
    $radio[] = array('value' => 'yes', 'text' => $lang_donate['YES'], 'name' => 'show_amount', 'checked' => ($page_values['show_amount'] == 'yes') ? 'CHECKED' : '');
    $radio[] = array('value' => 'no', 'text' => $lang_donate['NO'], 'name' => 'show_amount', 'checked' => ($page_values['show_amount'] == 'yes') ? '' : 'CHECKED');
    $out['show_amount'] = donate_radio($radio);
    unset($radio);
    $radio[] = array('value' => 'yes', 'text' => $lang_donate['YES'], 'name' => 'show_anon_amount', 'checked' => ($page_values['show_anon_amount'] == 'yes') ? 'CHECKED' : '');
    $radio[] = array('value' => 'no', 'text' => $lang_donate['NO'], 'name' => 'show_anon_amount', 'checked' => ($page_values['show_anon_amount'] == 'yes') ? '' : 'CHECKED');
    $out['show_ann_amount'] = donate_radio($radio);
    unset($radio);
    $radio[] = array('value' => 'yes', 'text' => $lang_donate['YES'], 'name' => 'show_dates', 'checked' => ($page_values['show_dates'] == 'yes') ? 'CHECKED' : '');
    $radio[] = array('value' => 'no', 'text' => $lang_donate['NO'], 'name' => 'show_dates', 'checked' => ($page_values['show_dates'] == 'yes') ? '' : 'CHECKED');
    $out['show_dates'] = donate_radio($radio);
    return $out;
}

/*==============================================================================================
    Function:    display_config()
    In:          N/A
    Return:      N/A
    Notes:       Displays the on screen config choices
================================================================================================*/
function display_config() 
{
    global $lang_donate, $page_values, $admin_file;
    $show = get_radios();
    echo '<form id="values" method="post" action="'.$admin_file.'.php?op='.the_module().'&amp;file=config_page">';

    echo '<table style="width: 50%; margin: auto" cellpadding="4" cellspacing="1" border="0" class="forumline">';
    // echo "<caption><span style=\"font-weight: bold; font-size: 20px;\">".$lang_donate['CONFIG_PAGE']."</span></caption>";

    echo '  <tr>';
    echo '    <td class="catHead" colspan="2" style="text-align: center; font-weight: bold; font-size: 14px">'.$lang_donate['CONFIG_PAGE'].'</td>';
    echo '  </tr>';

    echo "<tr>\n
            <td class=\"row1\" width=\"55%\" align=\"right\">".$lang_donate['SHOW_AMOUNTS'].$lang_donate['BREAK']."</td>\n
            <td class=\"row1\" width=\"45%\">".$show['show_amount']."</td>\n
          </tr>\n
          <tr>\n
            <td class=\"row1\" align=\"right\">".$lang_donate['SHOW_ANON_AMNTS'].$lang_donate['BREAK']."</td>\n
            <td class=\"row1\">".$show['show_ann_amount']."</td>\n
          </tr>\n
          <tr>\n
            <td class=\"row1\" align=\"right\">".$lang_donate['PAGE_HEADER_IMG'].$lang_donate['BREAK']."</td>\n
            <td class=\"row1\">".donate_text('header_image', $page_values['header_image'])."</td>\n
          </tr>\n
          <tr>\n
            <td class=\"row1\" align=\"right\">".$lang_donate['NUM_DONATIONS'].$lang_donate['BREAK']."</td>\n
            <td class=\"row1\">".donate_text('num_donations', $page_values['num_donations'], 2, 2)."</td>\n
          </tr>\n
          <tr>\n
            <td class=\"row1\" align=\"right\">".$lang_donate['SHOW_DATES'].$lang_donate['BREAK']."</td>\n
            <td class=\"row1\">".$show['show_dates']."</td>\n
          </tr>\n";
    echo '<tr><td colspan="2" class="catBottom"><div align="center"><input type="submit" value="'.$lang_donate['DONATION_SUBMIT'].'"></div></td></tr>';
    echo '</table>';

    echo '</form>';
}

/*==============================================================================================
    Function:    write_values()
    In:          $values
                    Values to write to the db
    Return:      N/A
    Notes:       Writes values to the DB
================================================================================================*/
function write_values($values) {
    global $db, $prefix, $cache;
    //Loop through values
    foreach ($values as $key => $value) {
        //Remove crap
        $value = Fix_Quotes(check_html($value, 'nohtml'));
        $key = Fix_Quotes(check_html($key, 'nohtml'));
        //Setup SQL
        $sql = 'UPDATE `'.$prefix.'_donators_config` SET';
        $sql .= ' config_value="'.$value.'" WHERE config_name="page_'.$key.'";';
        //Run SQL
        $db->sql_query($sql);
    }
    //Clear the cache
    $cache->delete('page', 'donations');
    $cache->resync();
}

/*==============================================================================================
    Function:    set_values()
    In:          N/A
    Return:      Array of the values from that were posted
    Notes:       Runs write_values()
================================================================================================*/
function set_values() {
    $values['show_amount'] = $_POST['show_amount'];
    $values['show_anon_amount'] = $_POST['show_anon_amount'];
    $values['button_image'] = $_POST['button_image'];
    $values['num_donations'] = $_POST['num_donations'];
    $values['show_dates'] = $_POST['show_dates'];
    $values['header_image'] = $_POST['header_image'];
    //Write values to DB
    write_values($values);
    return $values;
}

/*==============================================================================================
    Function:    get_values()
    In:          N/A
    Return:      Array of the values from the DB.
    Notes:       Will toss a DonateError if the values are not found
================================================================================================*/
function get_values() {
    global $db, $prefix, $lang_donate, $cache;
    static $page;
    if(isset($page) && is_array($page)) { return $page; }
    if (!$page = $cache->load('page', 'donations')) {
        $sql = 'SELECT config_value, config_name from '.$prefix.'_donators_config WHERE config_name LIKE "page_%"';
        if(!$result = $db->sql_query($sql)) {
            DonateError($lang_donate['VALUES_NF']);
        }
        while ($row = $db->sql_fetchrow($result)) {
            $page[str_replace('page_', '', $row['config_name'])] = $row['config_value'];
        }
        $db->sql_freeresult($result);
        $cache->save('page', 'donations', $page);
    }
    return $page;
}

/*~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-*/

//If new values were posted
global $page_values;
if (!empty($_POST)) {
    $page_values = set_values();
} else {
    $page_values = get_values();
}

display_config();

?>