@extends('templates.admin')
@section('breadcrumbs')
    {{Breadcrumbs::render($route, $patient)}}
@endsection
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
    <form action="{{ route('admin.patient.update', $patient->id) }}" method="post">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{$patient->name}}">
        </div>
        <div class="mb-3">
            <label for="surname" class="form-label">Surname</label>
            <input type="text" name="surname" class="form-control" id="surname" value="{{$patient->surname}}">
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Lastname</label>
            <input type="text" name="lastname" class="form-control" id="lastname" value="{{$patient->lastname}}">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" placeholder="+7(999)999-99-99" name="phone" class="form-control" id="phone" value="{{$patient->phone}}">
        </div>
        <button type="submit" class="btn btn-primary mb-3">Update</button>
        <a href="{{ route('admin.patient.show', $patient->id) }}" class="btn btn-dark mb-3">Back</a>
    </form>
@endsection
