@foreach($tasks as $task)
    <div style="margin-top: 20px" class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$task->title}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$task->status}}</h6>
            <p class="card-text">{{$task->description}}</p>
            <a href="/projects/{{$task->project_id}}/task/{{$task->id}}" class="btn btn-primary">
                <i class="fas fa-info-circle"></i> Details</a>
            <a href="{{route('task.edit', $task->id)}}" class="btn btn-warning">
                <i class="fas fa-pen"></i> Update</a>

            <a href="{{route('task.destroy', $task->id)}}" class="btn btn-danger">
                <i class="fas fa-trash"></i> Delete</a>
        </div>
    </div>
@endforeach
