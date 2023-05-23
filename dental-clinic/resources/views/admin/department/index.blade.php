@extends('templates.admin')
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
            @foreach($departments as $department)
                <tr>
                    <th scope="row"><a href="{{route('admin.department.show', $department->id)}}">{{$department->id}}</a></th>
                    <td>{{$department->name}}</td>
                    <td>{{$department->image}}</td>
                    <td>{{$department->icon}}</td>
                    <td>{{$department->description}}</td>
                    <td>{{$department->services}}</td>
                    <td>{{$department->created_at}}</td>
                    <td>{{$department->updated_at}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <a href="{{route('admin.department.create')}}" class="btn btn-primary mb-3 mt-3">Add</a>
@endsection
