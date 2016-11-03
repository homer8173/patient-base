<?php

/**
 * Description of elements
 *
 * @author Focoweb
 */

class Elements {

    function __construct() {
    }

    function image_list() {
        global $success, $info, $error, $warning, $page, $db;
        if (!$db->Query("SELECT * FROM images WHERE active=1"))
            return false;
        $i=array();
        for ($index = 0; $index < $db->RowCount(); $index++) {
            $row = $db->Row($index);
            $i[$row->id]['title'] = $row->title;
            $i[$row->id]['filename'] = $row->filename;
            $i[$row->id]['sex'] = $row->sex;
            $i[$row->id]['active'] = $row->active;
        }
        return $i;
    }

}
