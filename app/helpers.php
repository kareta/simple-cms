<?php
/**
 * Created by PhpStorm.
 * User: vitya
 * Date: 5/2/16
 * Time: 11:14 AM
 */
if (!function_exists('getThemeUrl')) {
    function getThemeUrl($path)
    {
        $themeConfig = app('config')->get('cms.theme');
        return url($themeConfig['folder'] . '/' . $themeConfig['active'] . '/' .'assets' . '/' . $path);
    }
}
