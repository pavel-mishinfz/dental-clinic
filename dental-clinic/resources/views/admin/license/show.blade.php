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
                    <th scope="row">{{$license->id}}</th>
                    <td>{{$license->image}}</td>
                    <td>{{$license->created_at}}</td>
                    <td>{{$license->updated_at}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <a href="{{route('admin.license.edit', $license->id)}}" class="btn btn-secondary mb-3">Edit</a>
    <form action="{{route('admin.license.delete', $license->id)}}" method="post" style="display: inline-block;">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger mb-3">Delete</button>
    </form>
    <a href="{{route('admin.license.index')}}" class="btn btn-dark mb-3">Back</a>
@endsection
