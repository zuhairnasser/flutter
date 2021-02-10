@extends('layouts.app')
@section('content')
<div class="card card-default">
    <div class="card-header">

        {{ isset($drugs)? 'Edit drug' : 'Add new drug' }}


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
        <form action="{{route('drugs.store') }}" method="POST">
            @csrf
            @if(isset($drugs))
            @method('PUT')
            @endif
            <div class="from-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control mb-2" value=  {{ isset($drugs)? "$drug->name" : "" }}>
            </div>
            <div class="from-group">
                <button class="btn btn-success">
                    {{ isset($drugs)? 'Update drug' : 'Add  drug' }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection