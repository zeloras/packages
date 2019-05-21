<?php
if (!function_exists('giveMeTheModuleName')) {
    /**
     * Retur admin prefx with uri string.
     *
     * @param string $class
     * @param string|null $default
     *
     * @return string|null
     */
    function giveMeTheModuleName($class, $default = null)
    {
        preg_match_all('/([^\\\]+\\\){1}(?<module>.*?)\\\/ims', $class, $module_names);
        $return = (isset($module_names['module'][0])) ? $module_names['module'][0] : $default;

        return $return;
    }
}