<?php

namespace Modules\Ticketing\Plugins;

use Modules\Blog\Entities\PluginClass;

class TicketingPlugin extends PluginClass
{
    public function render(...$args)
    {
        return "<button>Create Ticket from this post!</button>";
    }
}
