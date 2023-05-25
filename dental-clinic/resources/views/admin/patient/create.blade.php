@extends('templates.admin')
@section('breadcrumbs')
    {{Breadcrumbs::render($route)}}
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
    <form action="{{ route('admin.patient.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{old('name')}}">
        </div>
        <div class="mb-3">
            <label for="surname" class="form-label">Surname</label>
            <input type="text" name="surname" class="form-control" id="surname" value="{{old('surname')}}">
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Lastname</label>
            <input type="text" name="lastname" class="form-control" id="lastname" value="{{old('lastname')}}">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" placeholder="+7(999)999-99-99" name="phone" class="form-control" id="phone" value="{{old('phone')}}">
        </div>
        <button type="submit" class="btn btn-primary mb-3">Create</button>
        <a href="{{ route('admin.patient.index') }}" class="btn btn-dark mb-3">Back</a>
    </form>
@endsection
