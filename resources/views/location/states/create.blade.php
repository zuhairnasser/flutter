@extends('layouts.app')
@section('content')
<div class="card card-default">
    <div class="card-header">

        {{ isset($state)? 'Edit state' : 'Add new state' }}


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
        <form action="{{route('states.store') }}" method="POST">
            @csrf
            @if(isset($state))
            @method('PUT')
            @endif
            <div class="from-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control mb-2" value=  {{ isset($state)? "$state->name" : "" }}>
            </div>
            <div class="from-group">
                <button class="btn btn-success">
                    {{ isset($state)? 'Update state' : 'Add  state' }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection