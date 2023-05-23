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
    <form action="{{ route('admin.doctor.update', $doctor->id) }}" method="post">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{$doctor->name}}">
        </div>
        <div class="mb-3">
            <label for="surname" class="form-label">Surname</label>
            <input type="text" name="surname" class="form-control" id="surname" value="{{$doctor->surname}}">
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Lastname</label>
            <input type="text" name="lastname" class="form-control" id="lastname" value="{{$doctor->lastname}}">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" name="image" class="form-control" id="image" value="{{$doctor->image}}">
        </div>
        <div class="mb-3">
            <label for="icon" class="form-label">Icon</label>
            <input type="text" name="icon" class="form-control" id="icon" value="{{$doctor->icon}}">
        </div>
        <div class="mb-3">
            <label for="position" class="form-label">Position</label>
            <input type="text" name="position" class="form-control" id="position" value="{{$doctor->position}}">
        </div>
        <div class="mb-3">
            <label for="orientation" class="form-label">Orientation</label>
            <input type="text" name="orientation" class="form-control" id="orientation" value="{{$doctor->orientation}}">
        </div>
        <div class="mb-3">
            <label for="experience" class="form-label">Experience</label>
            <input type="text" name="experience" class="form-control" id="experience" value="{{$doctor->experience}}">
        </div>
        <div class="mb-3">
            <label for="certificates" class="form-label">Certificates</label>
            <input type="text" name="certificates" class="form-control" id="certificates" value="{{$doctor->certificates}}">
        </div>
        <button type="submit" class="btn btn-primary mb-3">Update</button>
        <a href="{{ route('admin.doctor.index', $doctor->id) }}" class="btn btn-dark mb-3">Back</a>
    </form>
@endsection
