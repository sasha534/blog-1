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
@endsection