@extends('blog::layouts.master')

@section('content')
<h1>Hello World</h1>

<p>
    This view is loaded from module: {!! config('blog.name') !!}
</p>


@foreach ($plugins as $plugin)
{!! $plugin->render( ) !!}
<br>
@endforeach

@endsection