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
                <tr>
                    <th scope="row">{{$department->id}}</th>
                    <td>{{$department->name}}</td>
                    <td>{{$department->image}}</td>
                    <td>{{$department->icon}}</td>
                    <td>{{$department->description}}</td>
                    <td>{{$department->services}}</td>
                    <td>{{$department->created_at}}</td>
                    <td>{{$department->updated_at}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <a href="{{route('admin.department.edit', $department->id)}}" class="btn btn-secondary mb-3">Edit</a>
    <form action="{{route('admin.department.delete', $department->id)}}" method="post" style="display: inline-block;">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger mb-3">Delete</button>
    </form>
    <a href="{{route('admin.department.index')}}" class="btn btn-dark mb-3">Back</a>
@endsection
