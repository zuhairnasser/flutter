@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-end mb-2">
<a href="{{route('doctors.create')}}" class="btn btn-success">Add new doctor</a>
</div>
<div class="card card-defult">

    <div class="card-header">
        Doctors
    </div>
</div>
@endsection