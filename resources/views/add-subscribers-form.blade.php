@extends('layouts.app')

@section('content')

<div class="card-body">
    @include('errors')

    <form action="{{url('/')}}" method="POST" class="form-horizontal">
        {{csrf_field()}}

        <div class="row">
            <div class="form-group">
                <label for="Task" class="control-label">Subscribe:</label>

                <div class="row">
                    <div class="col-sm-4">
                        <input type="text" name="name" id="task-name" class="form-control">
                    </div>
                    <div class="col-sm-4">
                        <input type="text" name="email" id="task-email" class="form-control">
                    </div>
                    <div class="col-sm-4">
                        <button type="submit" id="task-button" class="btn btn-success">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>


    @if(count($subscribers) > 0)
        <div class="card">
            <div class="card-heading">
                ALL PHONE NUMBERS AND NAMES

            </div>
            <div class="card-body">
                <table class="table table-striped task-table">
                    <thead>
                    <th>List Our Subscribers </th>
                    <th>&nbsp;</th>
                    </thead>

                    <tbody>
                    @foreach($subscribers as $subscriber)

                        <tr>

                        <td class="table-text">
                            <div>{{$subscriber->name}}</div>
                        </td>

                            <td class="table-text">
                                <div>{{$subscriber->email}}</div>
                            </td>

                        <td>
                            <form action="{{url('/'.$subscriber->id)}}" method="POST">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}

                                <button class="btn btn-danger">
                                    Delete
                                </button>
                            </form>
                        </td>
                            <td>
                                <a href="{{url('/'.$subscriber->id)}}">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
     @endif
@endsection