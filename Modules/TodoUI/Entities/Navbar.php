<?php

namespace Modules\TodoUi\Entities;

class NavBar
{
    public static $instance;
    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = (new NavBar());
        }
        return self::$instance;
    }


    public $navbar_items = [];
}
