@extends('templates.admin')
@section('breadcrumbs')
    {{Breadcrumbs::render($route)}}
@endsection
@section('csrf')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th scope="col"></th>
                @foreach($columns as $col)
                    <th scope="col">{{$col}}</th>
                @endforeach
            </tr>
            </thead>
            <tbody>
            @foreach($reviews as $review)
                <tr>
                    <td><input class="check_review" type="checkbox" name="ids[]" value="{{$review->id}}"></td>
                    <th scope="row">
                        <a href="{{route('admin.review.show', $review->id)}}">{{$review->id}}</a>
                    </th>
                    <td>{{$review->name}}</td>
                    <td>{{$review->surname}}</td>
                    <td>{{$review->review}}</td>
                    <td>{{$review->img}}</td>
                    <td>{{$review->created_at}}</td>
                    <td>{{$review->updated_at}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div>
        {{$reviews->links()}}
    </div>
    <button class="btn btn-danger mb-3 mt-3 delete">Delete selected</button>
    <button class="btn btn-secondary mb-3 mt-3 select_all">Select all</button>
    <button class="btn btn-danger mb-3 mt-3 disabled delete delete--all">Delete all</button>

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.select_all').click(function(){
                $('.check_review').prop('checked') ? $('.check_review').prop('checked', false) : $('.check_review').prop('checked', true);
                $('.delete--all').toggleClass('disabled');
            });

            $('.delete').on('click', function() {
                var selectedIds = [];
                $('input[name="ids[]"]:checked').each(function() {
                    selectedIds.push($(this).val());
                });

                if (selectedIds.length > 0) {
                    // AJAX-запрос на удаление элементов
                    $.ajax({
                        url: '{{ route('admin.review.deleteAll') }}',
                        type: 'DELETE',
                        data: { ids: selectedIds },
                        success: function(response) {
                            console.log(response.message);
                            window.location.replace("{{route('admin.review.index')}}");
                        }
                    });
                }
                else {
                    alert('Выберите элементы для удаления');
                }
            });
        });
    </script>
@endsection
