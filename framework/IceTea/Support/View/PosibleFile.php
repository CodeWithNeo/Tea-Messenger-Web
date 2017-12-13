<?php

namespace IceTea\Support\View;

use IceTea\Utils\Config;

trait PosibleFile
{
    /**
     * @param string $file
     * @return mixed
     */
    private function teaFile($file)
    {
        if (file_exists($file = Config::get("views_cache_dir")."/".$file.".tea.php")) {
            return $file;
        }
        return false;
    }

    /**
     * @param string $file
     * @return mixed
     */
    private function bladeFile($file)
    {
        if (file_exists($file = Config::get("views_cache_dir")."/".$file.".blade.php")) {
            return $file;
        }
        return false;
    }
}