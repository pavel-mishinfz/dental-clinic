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
            @foreach($doctors as $doctor)
                <tr>
                    <th scope="row">
                        <a href="{{route('admin.doctor.show', $doctor->id)}}">{{$doctor->id}}</a>
                    </th>
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
            @endforeach
            </tbody>
        </table>
    </div>
    <a href="{{route('admin.doctor.create')}}" class="btn btn-primary mb-3 mt-3">Add</a>
@endsection
