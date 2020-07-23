@extends('layouts.app')
@section('content')
    @if(session()->has('success'))
        <div style="margin-top: 20px" class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    <div style="margin-bottom: 15px; margin-top: 30px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('project.create') }}">
                <i class="fas fa-plus"></i> Add new project
            </a>
        </div>
    </div>
    <div class="row">
        @forelse($project as $projects)
            <div class="col-sm-6">
                <div style="margin-top: 20px" class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$projects->title}}</h5>
                        <p class="card-text">{{$projects->description}}</p>
                        <a href="{{route('project.show', $projects->id) }}" class="btn btn-primary">
                            <i class="fas fa-info-circle"></i> Learn more</a>
                        <a href="projects/{{$projects->id}}/edit"  class="btn btn-warning">
                            <i class="fas fa-pen"></i> Edit</a>
                        <a href="projects/{{$projects->id}}/destroy" class="btn btn-danger">
                            <i class="fas fa-trash"></i> Delete</a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Updated {{$projects->updated_at}}</small>
                    </div>
                </div>
            </div>
            @empty
            <p class="text-capitalize">No projects yet, press create button.</p>
        @endforelse
    </div>
@endsection
