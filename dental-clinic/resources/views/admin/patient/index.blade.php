@extends('templates.admin')
@section('breadcrumbs')
    {{Breadcrumbs::render($route)}}
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
            @foreach($patients as $patient)
                <tr>
                    <th scope="row">
                        <a href="{{route('admin.patient.show', $patient->id)}}">{{$patient->id}}</a>
                    </th>
                    <td>{{$patient->name}}</td>
                    <td>{{$patient->surname}}</td>
                    <td>{{$patient->lastname}}</td>
                    <td>{{$patient->phone}}</td>
                    <td>{{$patient->created_at}}</td>
                    <td>{{$patient->updated_at}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div>
        {{$patients->links()}}
    </div>
    <a href="{{route('admin.patient.create')}}" class="btn btn-primary mb-3 mt-3">Add</a>
@endsection
