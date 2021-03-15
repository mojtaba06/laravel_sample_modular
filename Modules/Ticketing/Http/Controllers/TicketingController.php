<?php

namespace Modules\Ticketing\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TicketingController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function ticketing()
    {
        return view('ticketing::index');
    }

    public function direct_callable_methods()
    {

        return ["ticketing"];
    }
}
