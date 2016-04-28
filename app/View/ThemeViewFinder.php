<?php
/**
 * Created by PhpStorm.
 * User: vitya
 * Date: 4/28/16
 * Time: 10:03 PM
 */

namespace App\View;


use Illuminate\View\FileViewFinder;

class ThemeViewFinder extends FileViewFinder
{
    protected $activeTheme;
    protected $basePath;

    public function setBasePath($path)
    {
        $this->basePath = $path;
    }

    public function setActiveTheme($theme)
    {
        $this->activeTheme = $theme;
        array_unshift($this->paths, $this->basePath . '/' . $theme . '/views');
    }
}