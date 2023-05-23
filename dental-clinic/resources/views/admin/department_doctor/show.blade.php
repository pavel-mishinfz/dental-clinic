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
                    <th scope="row">
                        {{$departmentDoctor->id}}
                    </th>
                    <td>
                        <a href="{{ route('admin.department.show', $department->id) }}">
                            {{$department->name}}
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('admin.doctor.show', $doctor->id) }}">
                            {{$doctor->name}}
                            {{$doctor->surname}}
                            {{$doctor->lastname}}
                        </a>
                    </td>
                    <td>{{$departmentDoctor->created_at}}</td>
                    <td>{{$departmentDoctor->updated_at}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <a href="{{route('admin.department-doctor.edit', $departmentDoctor->id)}}" class="btn btn-secondary mb-3">Edit</a>
    <form action="{{route('admin.department-doctor.delete', $departmentDoctor->id)}}" method="post" style="display: inline-block;">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger mb-3">Delete</button>
    </form>
    <a href="{{route('admin.department-doctor.index')}}" class="btn btn-dark mb-3">Back</a>
@endsection
