@extends('layouts.app')
@section('content')
<div class="card card-default">
    <div class="card-header">

        {{ isset($department)? 'Edit department' : 'Add new department' }}


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
        <form action="{{route('departments.store') }}" method="POST">
            @csrf
            @if(isset($department))
            @method('PUT')
            @endif
            <div class="from-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control mb-2" value={{ isset($department)? "$department->name" : "" }}>
            </div>
            <div class="from-group">
                <button class="btn btn-success">
                    {{ isset($department)? 'Update department' : 'Add  department' }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection