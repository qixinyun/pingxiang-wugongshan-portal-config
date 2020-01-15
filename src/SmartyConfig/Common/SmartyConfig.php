<?php
namespace SmartyConfig\Common;

class SmartyConfig
{
    public static function configDir()
    {
        $dirArray = array(
            S_ROOT.'vendor/qixinyun/pingxiang-wugongshan-portal-config/src/SmartyConfig/Wgs',
            S_ROOT.'vendor/qixinyun/pingxiang-wugongshan-portal-config/src/SmartyConfig/Common',
            S_ROOT.'vendor/qixinyun/pingxiang-wugongshan-portal-config/src/SmartyConfig/',
        );

        return $dirArray;
    }
}
