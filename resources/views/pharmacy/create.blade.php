@extends('layouts.app')
@section('content')
<div class="card card-default">
    <div class="card-header">

        {{ isset($pharmacy)? 'Edit pharmacy' : 'Add new pharmacy' }}


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
        <form action="{{route('pharmacies.store') }}" method="POST">
            @csrf
            @if(isset($pharmacy))
            @method('PUT')
            @endif
            <div class="from-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control mb-2" value=  {{ isset($pharmacy)? "$pharmacy->name" : "" }}>
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
            <div class="from-group">
                <button class="btn btn-success">
                    {{ isset($pharmacy)? 'Update pharmacy' : 'Add  pharmacy' }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection