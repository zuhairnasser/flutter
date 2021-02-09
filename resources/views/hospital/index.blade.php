@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-end mb-2">
<a href="{{route('hospital.create')}}" class="btn btn-success">Add new hosptial</a>
</div>
<div class="card card-defult">

    <div class="card-header">
        Hospitals
    </div>
</div>
@endsection