@extends('layouts.app')
@section('content')
    <div style="margin-top: 20px" class="card">
        <div class="card-body">
            <form method="POST" action="{{route('project.update', $project->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$project->title}}">
                        @if($errors->has('title'))
                            <p class="text text-danger">{{$errors->first('title')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="description" name="description" value="{{$project->description}}">
                        @if($errors->has('description'))
                            <p class="text text-danger">{{$errors->first('description')}}</p>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
