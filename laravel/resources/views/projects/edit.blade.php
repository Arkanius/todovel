
@extends('layouts.master')

@section('title', 'Editar Projeto')

@section('sidebar')
    @parent

    <p>Sidebar Editar Projeto</p>
@stop

@section('content')
    <h2>Editar projeto</h2>

    {!! Form::model($project, ['method' => 'PATCH', 'route' => ['projects.update', $project->slug]]) !!}
    @include('projects/partials/_form', ['submit_text' => 'Editar Projeto'])
    {!! Form::close() !!}
@endsection