<?php

namespace Modules\Blog\Entities;

class Plugins
{
    public static $instance;
    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = (new Plugins());
        }
        return self::$instance;
    }


    public $plugins = [];
}
