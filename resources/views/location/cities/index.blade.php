@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-end mb-2">
<a href="{{route('cities.create')}}" class="btn btn-success">Add new City</a>
</div>
<div class="card card-defult">

    <div class="card-header">
        Cities
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <th>
                    Name
                </th>
                <th>
                State
                </th>
                <th>

                </th>
            </thead>
            <tbody>
                @foreach($cities as $city)
                <tr>
                    <td>
                        {{$city->name}}
                    </td>
                    <td>
                        {{$city->state_id}}
                    </td>
                    <td>
                        <a href="{{route('cities.edit',$city)}}" class="btn btn-info btn-sm">Edit</a>
                        <a href="{{route('cities.edit',$city)}}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach

            </tbody>

        </table>
    </div>
</div>
@endsection