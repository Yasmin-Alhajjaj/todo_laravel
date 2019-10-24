@extends ('layouts.app')

@section('content')

{{--    <table>--}}
    @foreach($tasks as $task)


{{--            <tr>--}}
{{--                <td >--}}
                    <div class="alert alert-secondary" role="alert">
                        <h3>
                            {{$task->title}}
                            <a class="btn btn-outline-success"  href="task/{{$task->id}}/edit" >Edite </a>

                            <form method="post" action="{{route('task.destroy',$task->id)}}" >
                                @csrf
                                @method('delete')
                            <button class="btn btn-outline-danger" name="delete" type="submit">X</button>
                            </form>

                        </h3>
{{--                </td>--}}
{{--      <td>--}}
                    </div>
{{--      </td>--}}
{{--    </tr>--}}

        @endforeach
{{--    </table>--}}
@endsection
