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
            @foreach($department_doctors as $department_doctor)
                <tr>
                    <th scope="row">
                        <a href="{{ route('admin.department-doctor.show', $department_doctor->id) }}">{{$department_doctor->id}}</a>
                    </th>
                    <td>
                        <a href="{{ route('admin.department.show', $departments->find($department_doctor->department_id)->id) }}">
                            {{$departments->find($department_doctor->department_id)->name}}
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('admin.doctor.show', $doctors->find($department_doctor->doctor_id)->id) }}">
                            {{$doctors->find($department_doctor->doctor_id)->name}}
                            {{$doctors->find($department_doctor->doctor_id)->surname}}
                            {{$doctors->find($department_doctor->doctor_id)->lastname}}
                        </a>
                    </td>
                    <td>{{$department_doctor->created_at}}</td>
                    <td>{{$department_doctor->updated_at}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <a href="{{route('admin.department-doctor.create')}}" class="btn btn-primary mb-3 mt-3">Add</a>
@endsection
