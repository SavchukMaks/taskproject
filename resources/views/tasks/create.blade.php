@extends('layouts.app')
@section('content')
    <div style="margin-top: 20px" class="card">
        <div class="card-header">
            Create a new task
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('task.store')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="project_id" value="{{$project_id}}">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title of the task">
                    @if($errors->has('title'))
                        <p class="text text-danger">{{$errors->first('title')}}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Status</label>
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
                    <input type="text" class="form-control" id="description" name="description" placeholder="Description">
                    @if($errors->has('description'))
                        <p class="text text-danger">{{$errors->first('description')}}</p>
                    @endif
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="files">Add file</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="files" name="files">
                        <label class="custom-file-label" for="files">Select file</label>
                    </div>
                </div>
                @if($errors->has('files'))
                    <p class="text text-danger">{{$errors->first('files')}}</p>
                @endif
                <button style="margin-top: 10px" class="btn btn-success" type="submit">Send</button>
            </form>
        </div>
    </div>
@endsection
