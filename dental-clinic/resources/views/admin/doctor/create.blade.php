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
    <form action="{{ route('admin.doctor.store') }}" method="post" enctype="multipart/form-data">
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
            <label for="image" class="form-label">Image (474x620) <small>для больших размеров изображение будет обрезано</small></label>
            <input type="file" name="image" class="form-control" id="image" value="{{old('image')}}" accept="image/png, image/jpeg">
        </div>
        <div class="mb-3">
            <label for="icon" class="form-label">Icon (150x100)</label>
            <input type="file" name="icon" class="form-control" id="icon" value="{{old('icon')}}" accept="image/svg+xml">
        </div>
        <div class="mb-3">
            <label for="position" class="form-label">Position</label>
            <input type="text" name="position" class="form-control" id="position" value="{{old('position')}}">
        </div>
        <div class="mb-3">
            <label for="orientation" class="form-label">Orientation</label>
            <input type="text" name="orientation" class="form-control" id="orientation" value="{{old('orientation')}}">
        </div>
        <div class="mb-3">
            <label for="experience" class="form-label">Experience</label>
            <input type="text" name="experience" class="form-control" id="experience" value="{{old('experience')}}">
        </div>
        <div class="mb-3">
            <label for="certificates" class="form-label">Certificates</label>
            <input type="text" name="certificates" class="form-control" id="certificates" value="{{old('certificates')}}">
        </div>
        <button type="submit" class="btn btn-primary mb-3">Create</button>
        <a href="{{ route('admin.doctor.index') }}" class="btn btn-dark mb-3">Back</a>
    </form>
@endsection
