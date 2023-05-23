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
                    <th scope="row">
                        {{$formPatient->id}}
                    </th>
                    <td>
                        <a href="{{ route('admin.patient.show', $patient->id) }}">
                            {{$patient->name}}
                            {{$patient->surname}}
                            {{$patient->lastname}}
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('admin.doctor.show', $doctor->id) }}">
                            {{$doctor->name}}
                            {{$doctor->surname}}
                            {{$doctor->lastname}}
                        </a>
                    </td>
                    <td>{{$formPatient->created_at}}</td>
                    <td>{{$formPatient->updated_at}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <a href="{{route('admin.form-patient.edit', $formPatient->id)}}" class="btn btn-secondary mb-3">Edit</a>
    <form action="{{route('admin.form-patient.delete', $formPatient->id)}}" method="post" style="display: inline-block;">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger mb-3">Delete</button>
    </form>
    <a href="{{route('admin.form-patient.index')}}" class="btn btn-dark mb-3">Back</a>
@endsection
