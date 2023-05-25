@extends('templates.admin')
@section('breadcrumbs')
    {{Breadcrumbs::render($route)}}
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
            @foreach($form_patients as $form_patient)
                <tr>
                    <th scope="row">
                        <a href="{{ route('admin.form-patient.show', $form_patient->id) }}">{{$form_patient->id}}</a>
                    </th>
                    <td>
                        <a href="{{ route('admin.patient.show', $patients->find($form_patient->patient_id)->id) }}">
                            {{$patients->find($form_patient->patient_id)->name}}
                            {{$patients->find($form_patient->patient_id)->surname}}
                            {{$patients->find($form_patient->patient_id)->lastname}}
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('admin.doctor.show', $doctors->find($form_patient->doctor_id)->id) }}">
                            {{$doctors->find($form_patient->doctor_id)->name}}
                            {{$doctors->find($form_patient->doctor_id)->surname}}
                            {{$doctors->find($form_patient->doctor_id)->lastname}}
                        </a>
                    </td>
                    <td>{{$form_patient->created_at}}</td>
                    <td>{{$form_patient->updated_at}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <a href="{{route('admin.form-patient.create')}}" class="btn btn-primary mb-3 mt-3">Add</a>
@endsection
