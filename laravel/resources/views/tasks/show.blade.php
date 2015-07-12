@extends('layouts.master')

@section('title', 'Task')

@section('sidebar')
    @parent

    <p>Show task!</p>
@stop

@section('content')
    <h2>
        {!! link_to_route('projects.show', $project->name, [$project->slug]) !!} -
        {{ $task->name }}
    </h2>

    {{ $task->description }}
@endsection
@stop