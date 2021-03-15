<?php

namespace Modules\Commenting\Plugins;

use Modules\Blog\Entities\PluginClass;

class CommentingPlugin extends PluginClass
{
    public function render(...$args)
    {
        return "this is the commenting plugin! , args are = " . json_encode($args);
    }
}
