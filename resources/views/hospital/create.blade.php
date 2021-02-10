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
        <form action="{{route('hospitals.store') }}" method="POST">
            @csrf
            <div class="from-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control mb-2">
            </div>
            <div class="from-group">
                <label for="specialization"> specialization
                </label>
                <input type="text" id="specialization" name="specialization" class="form-control mb-2">
            </div>
            <div class="form-group">
                <label class="state" for="state">State</label>

                <select id="state" name="state" class="form-control">
                    @foreach($states as $state)
                    <option value="{{$state->id}}">{{$state->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label class="city" for="city">City</label>

                <select id="city" name="city" class="form-control">
                    @foreach($cities as $city)
                    <option value="{{$city->id}}">{{$city->name}}</option>
                    @endforeach
                </select>

            </div>
            <div class="form-group">
                <label class="type" for="type">Type</label>

                <select id="type" name="type" class="form-control">

                    <option value="hospital">مستشفى</option>
                    <option value="clinc">عيادة</option>

                </select>

            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="from-group">
                        <label for="longitude">longitude</label>
                        <input type="text" id="longitude" name="longitude" class="form-control mb-2">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="from-group">
                        <label for="latitude">latitude</label>
                        <input type="text" id="latitude" name="latitude" class="form-control mb-2">
                    </div>
                </div>
            </div>

            <div class="from-group">
                <button class="btn btn-success">Add hospital</button>
            </div>
        </form>
    </div>
</div>
@endsection