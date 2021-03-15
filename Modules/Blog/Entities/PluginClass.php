<?php

namespace Modules\Blog\Entities;


abstract class PluginClass
{
    public function render(...$args)
    {
        return "im enabled";
    }
}
