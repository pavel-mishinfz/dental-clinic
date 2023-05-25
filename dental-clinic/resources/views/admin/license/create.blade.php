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
    <form action="{{ route('admin.license.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="image" class="form-label">Image (320x420) <small>для больших размеров изображение будет обрезано</small></label>
            <input type="file" name="image" class="form-control" id="image" value="{{old('image')}}" accept="image/png, image/jpeg">
        </div>
        <button type="submit" class="btn btn-primary mb-3">Create</button>
        <a href="{{ route('admin.license.index') }}" class="btn btn-dark mb-3">Back</a>
    </form>
@endsection
