<?php

namespace Modules\Todo\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Todo\Http\Traits\ToDoTrait;
use Modules\TodoUI\Http\Traits\NavBarTrait;

class TodoController extends Controller
{

    use ToDoTrait;

    public function todo_admin()
    {
        return view('todo::index')
            ->with("todos", $this->getTodoList());
    }
    public function todo_dones()
    {
        return "done todos are 5";
    }


    public  function direct_callable_methods()
    {
        return ['todo_admin', 'todo_dones'];
    }
}
