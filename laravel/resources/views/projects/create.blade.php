@extends('layouts.master')

@section('title', 'Create')

@section('sidebar')
    @parent

    <p>Sidebar Create!</p>
@stop

@section('content')
    <h2>Create Project</h2>

    {!! Form::model(new App\Project, ['route' => ['projects.store']]) !!}
    @include('projects/partials/_form', ['submit_text' => 'Criar Projeto'])
    {!! Form::close() !!}
@endsection
@stop