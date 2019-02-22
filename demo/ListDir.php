<?php

function my_dir($dir, &$path = []) {
    if($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false) {
            if ($file == '.' || $file == '..') continue;
            $hole_name = $dir . '/' . $file;
            if (is_file($hole_name)) {
                $path[] = $hole_name;
            } else {
                $path[] = my_dir($hole_name);
            }
        }
        closedir($handle);
        return $path;
    }
}
$path = [];
$my_dir = my_dir('./py-service', $path);
var_dump($my_dir);