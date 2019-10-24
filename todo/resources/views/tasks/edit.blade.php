@extends ('layouts.app')

@section('content')
    <div class="panel panel-default container">
        <div class="panel-body">

            <form action="{{route('task.update',$task->id)}}" method="POST" class="form-horizontal">
                @method('PUT')
                @csrf

                <div class="form-group">
                    <div class="col-sm-6">
                        <label for="task">Task</label>
                        <input type="text" name="task" class="form-control" value="{{$task->title}}" >
                    </div>
                </div>
                <div class="form-group">

                    <div class="col-sm-offset-3">
                        <button type="submit" class="btn btn-secondary">EDIT</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
