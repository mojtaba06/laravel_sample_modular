<?php

namespace Modules\Blog\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Blog\Http\Traits\PluginsTrait;

class BlogController extends Controller
{
    use PluginsTrait;
    public  function page()
    {
        return view('blog::index')->with("plugins", $this->plugins());
    }


    public function direct_callable_methods()
    {
        return [
            "page"
        ];
    }
}
