@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-end mb-2">
<a href="{{route('departments.create')}}" class="btn btn-success">Add new department</a>
</div>
<div class="card card-defult">

    <div class="card-header">
        Departments
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
                @foreach($departments as $department)
                <tr>
                    <td>
                        {{$department->name}}
                    </td>
                    <td>
                        <a href="{{route('departments.edit',$department)}}" class="btn btn-info btn-sm">Edit</a>
                        <a href="{{route('departments.edit',$department)}}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach

            </tbody>

        </table>
    </div>
</div>
@endsection