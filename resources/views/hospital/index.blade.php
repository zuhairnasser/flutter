@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-end mb-2">
<a href="{{route('hospitals.create')}}" class="btn btn-success">Add new hosptial</a>
</div>
<div class="card card-defult">

    <div class="card-header">
        Hospitals
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
                @foreach($hospitals as $hospital)
                <tr>
                    <td>
                        {{$hospital->name}}
                    </td>
                    <td>
                        {{$hospital->specialization}}
                    </td>
                    <td>
                        <a href="{{route('hospitals.edit',$hospital)}}" class="btn btn-info btn-sm">Edit</a>
                        <a href="{{route('hospitals.edit',$hospital)}}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach

            </tbody>

        </table>
    </div>
</div>
@endsection