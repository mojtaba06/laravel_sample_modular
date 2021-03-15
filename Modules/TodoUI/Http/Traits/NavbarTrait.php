<?php

namespace Modules\TodoUI\Http\Traits;

use Modules\TodoUi\Entities\NavBar;

trait NavBarTrait
{
    public function registerNavBar($module, $title, $path)
    {
        NavBar::getInstance()->navbar_items[] = ["module" => $module, "name" => $title, "method" => $path];
    }

    public function getNavBar()
    {
        return NavBar::getInstance()->navbar_items;
    }
}
