@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-end mb-2">
<a href="{{route('drugs.create')}}" class="btn btn-success">Add new drug</a>
</div>
<div class="card card-defult">

    <div class="card-header">
        drugs
    </div>
</div>
@endsection