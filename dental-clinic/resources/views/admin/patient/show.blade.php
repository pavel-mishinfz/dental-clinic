@extends('templates.admin')
@section('breadcrumbs')
    {{Breadcrumbs::render($route, $patient)}}
@endsection
@section('content')
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                @foreach($columns as $col)
                    <th scope="col">{{$col}}</th>
                @endforeach
            </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">{{$patient->id}}</th>
                    <td>{{$patient->name}}</td>
                    <td>{{$patient->surname}}</td>
                    <td>{{$patient->lastname}}</td>
                    <td>{{$patient->phone}}</td>
                    <td>{{$patient->created_at}}</td>
                    <td>{{$patient->updated_at}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <a href="{{route('admin.patient.edit', $patient->id)}}" class="btn btn-secondary mb-3">Edit</a>
    <form action="{{route('admin.patient.delete', $patient->id)}}" method="post" style="display: inline-block;">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger mb-3">Delete</button>
    </form>
    <a href="{{route('admin.patient.index')}}" class="btn btn-dark mb-3">Back</a>
@endsection
