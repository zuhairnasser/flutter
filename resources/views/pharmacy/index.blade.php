@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-end mb-2">
    <a href="{{route('Pharmacies.create')}}" class="btn btn-success">Add new Pharmacy</a>
</div>
<div class="card card-defult">

    <div class="card-header">
        pharmacy
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
                @foreach($Pharmacies as $pharmacy)
                <tr>
                    <td>
                        {{$pharmacy->name}}
                    </td>
                    <td>
                        <a href="{{route('Pharmacies.edit',$pharmacy)}}" class="btn btn-info btn-sm">Edit</a>
                        <a href="{{route('Pharmacies.edit',$pharmacy)}}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach

            </tbody>

        </table>
    </div>
</div>
@endsection