@extends('layouts.app')
@section('content')
    <div style="margin-top: 20px;" class="card">
        <div class="card-body">
            <p class="text-capitalize">Title </p>
            <p class="text-muted">{{$task->title}}</p>
            <p class="text-capitalize">Status</p>
            <p class="text-muted">{{$task->status}}</p>
            <p class="text-capitalize">Description</p>
            <p class="text-muted">{{$task->description}}</p>
            <p class="text-capitalize">Файли</p>
            <a download="Файл {{$task->id }}"
               href="{{ Storage::url($task->files) }}">
                <button type="button" class="btn btn-info">Download</button>
            <br>
            </a>
        </div>
    </div>

        <div class="card-footer">
            <small class="text-muted">Updated {{$task->updated_at}}</small></p>
        </div>
@endsection    
