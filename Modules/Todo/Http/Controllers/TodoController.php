<?php

namespace Modules\Todo\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TodoController extends Controller
{
    public function todo_admin()
    {
        return "im happy";
    }
    public function todo_dones()
    {
        return "done todos are 5";
    }

    public function hack()
    {
        return "you have been hacked!";
    }

    public  function direct_callable_methods()
    {
        return ['todo_admin', 'todo_dones'];
    }
}
