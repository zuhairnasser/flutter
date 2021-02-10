@extends('layouts.app')
@section('content')
<div class="card card-default">
    <div class="card-header">

        {{ isset($state)? 'Edit doctor' : 'Add new doctor' }}


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
        <form action="{{route('doctors.store') }}" method="POST">
            @csrf
            @if(isset($doctors))
            @method('PUT')
            @endif
            <div class="from-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control mb-2" value={{ isset($doctors)? "$doctor->name" : "" }}>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="from-group">
                        <label for="phone">Phone</label>
                        <input type="text" id="phone" name="phone" class="form-control mb-2" value={{ isset($doctors)? "$doctor->phone" : "" }}>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="gander" for="gander">Gander</label>

                        <select id="state" name="state" class="form-control">

                            <option value="male">ذكر</option>
                            <option value="female">انثى</option>

                        </select>

                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="state" for="state">State</label>

                        <select id="state" name="state" class="form-control">
                            @foreach($states as $state)
                            <option value="{{$state->id}}">{{$state->name}}</option>
                            @endforeach
                        </select>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="city" for="city">City</label>

                        <select id="city" name="city" class="form-control">
                            @foreach($cities as $city)
                            <option value="{{$city->id}}">{{$city->name}}</option>
                            @endforeach
                        </select>

                    </div>
                </div>
            </div>
            <div class="from-group">
                <button class="btn btn-success">
                    {{ isset($doctors)? 'Update doctor' : 'Add  doctor' }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection