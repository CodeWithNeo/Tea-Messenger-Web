<?php

function js($filename)
{
    return \Config::get("js_url")."/".trim($filename, "/").".js";
}

function css($filename)
{
    return \Config::get("css_url")."/".trim($filename, "/").".css";
}

function img($filename)
{
    return \Config::get("img_url")."/".trim($filename, "/").".png";
}
