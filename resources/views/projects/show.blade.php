@extends('layouts.app')
@section('content')
    @if(session()->has('success'))
        <div style="margin-top: 20px" class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <div style="margin-top: 30px;" class="card">
        <div class="card-header">
            Project # {{$project->id}}
        </div>
        <div class="card-body">
            <h5 class="card-title">{{$project->title}}</h5>
            <p class="card-text">{{$project->description}}</p>
            <a href="{{route('task.create', $project->id)}}" class="btn btn-success">
                <i class="fas fa-plus"></i> Create task</a>
        </div>
    </div>
    @include('tasks.index',['tasks' => $project->task])
@endsection
