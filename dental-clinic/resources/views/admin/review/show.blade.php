@extends('templates.admin')
@section('breadcrumbs')
    {{Breadcrumbs::render($route, $review)}}
@endsection
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
                    <th scope="row">{{$review->id}}</th>
                    <td>{{$review->name}}</td>
                    <td>{{$review->surname}}</td>
                    <td>{{$review->review}}</td>
                    <td>{{$review->img}}</td>
                    <td>{{$review->created_at}}</td>
                    <td>{{$review->updated_at}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <form action="{{route('admin.review.delete', $review->id)}}" method="post" style="display: inline-block;">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger mb-3">Delete</button>
    </form>
    <a href="{{route('admin.review.index')}}" class="btn btn-dark mb-3">Back</a>
@endsection
