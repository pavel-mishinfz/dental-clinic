@extends('templates.admin')
@section('breadcrumbs')
    {{Breadcrumbs::render($route, $doctor)}}
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
                    <th scope="row">{{$doctor->id}}</th>
                    <td>{{$doctor->name}}</td>
                    <td>{{$doctor->surname}}</td>
                    <td>{{$doctor->lastname}}</td>
                    <td>{{$doctor->image}}</td>
                    <td>{{$doctor->icon}}</td>
                    <td>{{$doctor->position}}</td>
                    <td>{{$doctor->orientation}}</td>
                    <td>{{$doctor->experience}}</td>
                    <td>{{$doctor->certificates}}</td>
                    <td>{{$doctor->created_at}}</td>
                    <td>{{$doctor->updated_at}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <a href="{{route('admin.doctor.edit', $doctor->id)}}" class="btn btn-secondary mb-3">Edit</a>
    <form action="{{route('admin.doctor.delete', $doctor->id)}}" method="post" style="display: inline-block;">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger mb-3">Delete</button>
    </form>
    <a href="{{route('admin.doctor.index')}}" class="btn btn-dark mb-3">Back</a>
@endsection
