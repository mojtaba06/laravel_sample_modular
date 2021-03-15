<?php

namespace Modules\TodoUI\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Todo\Http\Traits\ToDoTrait;
use Modules\TodoUI\Http\Traits\NavBarTrait;

class TodoUIController extends Controller
{

    use ToDoTrait, NavBarTrait;


    public function navbar()
    {
        return $this->getNavBar();
    }


    public function index()
    {

        return view('todoui::index')
            ->with("todos", $this->getTodoList())
            ->with("navbar", $this->navbar());
    }

    public function mark($id)
    {
        $this->markAsDone($id);
        return back();
    }

    public function admin($module, $method)
    {
        $class_path = "Modules\\" . $module . "\Http\Controllers\\" . $module . "Controller";
        $controller_class = app()->make($class_path);
        $methods = get_class_methods($controller_class);

        if (!in_array("direct_callable_methods", $methods)) {
            abort(403);
        }
        if (in_array($method, $methods) && in_array($method, $controller_class->direct_callable_methods()))
            return view('todoui::content')
                ->with("navbar", $this->navbar())
                ->with("content", $controller_class->$method());
        abort(404);
    }
}
