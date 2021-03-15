@extends('todoui::layouts.master')

@section('content')
<br>
this is to do:
<br>

@foreach ($todos as $todo)
<h1>
    <form action="{{route("todoui_mark_as_done_path",[$todo->id])}}">

        <button>
            @if($todo->is_done)
            MARK AS PENDING
            @else
            MARK AS DONE
            @endif
        </button>



        {{$todo->title}}
    </form>
</h1>
@endforeach


<br>

@endsection