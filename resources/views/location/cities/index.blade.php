@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-end mb-2">
<a href="{{route('cities.create')}}" class="btn btn-success">Add new City</a>
</div>
<div class="card card-defult">

    <div class="card-header">
        Cities
    </div>
</div>
@endsection