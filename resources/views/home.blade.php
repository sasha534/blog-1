@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>

            </div>
        </div>
    </div>
    @if(count($subscribers) > 0)
        <div class="card">
            <div class="card-heading">
                ALL SUBSCRIBERS

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
</div>
@endsection
