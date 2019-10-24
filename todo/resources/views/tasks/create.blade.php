@extends ('layouts.app')

@section('content')
<div class="panel panel-default container">
    <div class="panel-body">

        <form action="{{route('task.store')}}" method="POST" class="form-horizontal">
            @csrf

            <div class="form-group">

                <div class="col-sm-6">
                    <label for="task">Task</label>
                    <input type="text" name="task" class="form-control" placeholder="insert task">
                </div>

            </div>
            <div class="form-group">

                <div class="col-sm-offset-3">
                    <button type="submit" class="btn btn-secondary">ADD task</button>
                </div>
            </div>

        </form>

    </div>


</div>

@endsection
