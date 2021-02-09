@extends('layouts.app')
@section('content')
<div class="card card-default">
    <div class="card-header">
        Hospital
    </div>
    <div class="card-body">
        @if($errors->any())
        <div class="alert alert-danger">
            <ul class="list-group">
                @foreach($errors->all() as $error)
                <li class="list-group-item-danger">
                    {{$error}}
                </li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{route('hospital.store') }}" method="POST">
            @csrf
            <div class="from-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control mb-2">
            </div>
            <div class="form-group">
                <label class="state" for="state">State</label>

                <select id="state" name="state" class="form-control">
                @foreach($states as $state)
                    <option value="{{$state->id}}">{{$state->name}}</option>
                   @endforeach
                </select>

            </div>
           
            <div class="from-group">
                <button class="btn btn-success">Add hospital</button>
            </div>
        </form>
    </div>
</div>
@endsection