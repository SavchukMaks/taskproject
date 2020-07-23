@extends('layouts.app')
@section('content')
    <div style="margin-top: 20px" class="card">
        <div class="card-header">
            Update task # {{$task->id}}
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('task.update',$task->id )}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="project_id" value="{{$task->project_id}}">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title of the task"
                           value="{{$task->title}}" >
                    @if($errors->has('title'))
                        <p class="text text-danger">{{$errors->first('title')}}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1" >Status</label>
                    <select class="form-control" id="status" name="status">
                        <option>New</option>
                        <option>In progress</option>
                        <option>Done</option>
                    </select>
                    @if($errors->has('status'))
                        <p class="text text-danger">{{$errors->first('status')}}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Description"
                           value="{{$task->description}}" >
                    @if($errors->has('description'))
                        <p class="text text-danger">{{$errors->first('description')}}</p>
                    @endif
                </div>
                <button class="btn btn-success" type="submit">Send</button>
            </form>
        </div>
    </div>
@endsection
