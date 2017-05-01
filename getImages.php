<?php
/**
 * Created by PhpStorm.
 * User: GlennKenneth
 * Date: 01.05.2017
 * Time: 13.26
 */

$imgList = [];

if ($handle = opendir(".".$object['img'])) {

    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            array_push($imgList,$entry);
        }

    }
    closedir($handle);
}

?>