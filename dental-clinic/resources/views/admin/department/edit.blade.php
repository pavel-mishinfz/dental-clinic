@extends('templates.admin')
@section('breadcrumbs')
    {{Breadcrumbs::render($route, $department)}}
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
    <form action="{{ route('admin.department.update', $department->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{$department->name}}">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image (252x383) <small>для больших размеров изображение будет обрезано</small></label>
            <input type="file" name="image" class="form-control" id="image" accept="image/png, image/jpeg">
        </div>
        <div class="mb-3">
            <label for="icon" class="form-label">Icon (73x100)</label>
            <input type="file" name="icon" class="form-control" id="icon" accept="image/svg+xml">
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
