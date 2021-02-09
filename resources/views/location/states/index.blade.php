@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-end mb-2">
    <a href="{{route('states.create')}}" class="btn btn-success">Add new State</a>
</div>
<div class="card card-defult">

    <div class="card-header">
        States
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <th>
                    Name
                </th>
                <th>
                </th>
            </thead>
            <tbody>
                @foreach($state as $state)
                <tr>
                    <td>
                        {{$state->name}}
                    </td>
                    <td>
                        <a href="{{route('states.edit',$state)}}" class="btn btn-info btn-sm">Edit</a>
                        <a href="{{route('states.edit',$state)}}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach

            </tbody>

        </table>
    </div>
</div>
@endsection