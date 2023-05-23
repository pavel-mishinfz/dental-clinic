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
    <form action="{{ route('admin.department.update', $department->id) }}" method="post">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{$department->name}}">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" name="image" class="form-control" id="image" value="{{$department->image}}">
        </div>
        <div class="mb-3">
            <label for="icon" class="form-label">Icon</label>
            <input type="text" name="icon" class="form-control" id="icon" value="{{$department->icon}}">
        </div>
        <div class="mb-3">
            <label for="desc" class="form-label">Description</label>
            <input type="text" name="description" class="form-control" id="desc" value="{{$department->description}}">
        </div>
        <div class="mb-3">
            <label for="services" class="form-label">Services</label>
            <input type="text" name="services" class="form-control" id="services" value="{{$department->services}}">
        </div>
        <button type="submit" class="btn btn-primary mb-3">Update</button>
        <a href="{{ route('admin.department.show', $department->id) }}" class="btn btn-dark mb-3">Back</a>
    </form>
@endsection
