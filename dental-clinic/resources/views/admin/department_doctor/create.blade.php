@extends('templates.admin')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('admin.department-doctor.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="department_id" class="form-label">Department</label>
            <select name="department_id" class="form-control" id="department_id">
                @foreach($departments as $department)
                    <option value="{{$department->id}}">
                        {{$department->name}}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="doctor_id" class="form-label">Doctor</label>
            <select name="doctor_id" class="form-control" id="doctor_id">
                @foreach($doctors as $doctor)
                    <option value="{{$doctor->id}}">
                        {{$doctor->name}}
                        {{$doctor->surname}}
                        {{$doctor->lastname}}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary mb-3">Create</button>
        <a href="{{ route('admin.department-doctor.index') }}" class="btn btn-dark mb-3">Back</a>
    </form>
@endsection
