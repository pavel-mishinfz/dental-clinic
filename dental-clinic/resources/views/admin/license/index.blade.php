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
            @foreach($licenses as $license)
                <tr>
                    <th scope="row">
                        <a href="{{route('admin.license.show', $license->id)}}">{{$license->id}}</a>
                    </th>
                    <td>{{$license->image}}</td>
                    <td>{{$license->created_at}}</td>
                    <td>{{$license->updated_at}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <a href="{{route('admin.license.create')}}" class="btn btn-primary mb-3 mt-3">Add</a>
@endsection
