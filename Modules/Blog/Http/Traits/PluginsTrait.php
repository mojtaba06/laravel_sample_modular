<?php

namespace Modules\Blog\Http\Traits;

use Modules\Blog\Entities\PluginClass;
use Modules\Blog\Entities\Plugins;

trait PluginsTrait
{


    public function enablePlugin(PluginClass $pluginClass)

    {
        return Plugins::getInstance()->plugins[] = $pluginClass;
    }


    public function plugins()
    {
        return Plugins::getInstance()->plugins;
    }
}
