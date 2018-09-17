@extends('layouts.admin.app')

@section('title', 'List Forms')
@section('content')
    <div class="form-panel border  col-md-10 offset-md-1 bg-custom">
        <h1 class="text-center py-3">
            List Forms{{ ' - ' . ucwords($type) }} ({{ count($forms) }})
        </h1>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <p class="notice text-center small">To add a new form please click <a href="{{ route('admin.forms.add') }}">here</a>.</p>
        @if (count($forms))
            <table class="table table-bordered px-6 bg-white">
                <thead>
                <tr class="text-center">
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">All Profiles</th>
                    <th scope="col">New Profiles</th>
                    <th scope="col">Voided Profiles</th>
                    <th scope="col">Transfered Profiles</th>
                    <th scope="col">Status</th>
                    <th scope="col">Options</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($forms as $form)
                <tr class="text-center">
                    <th scope="row">{{ $form->id }}</th>
                    <td>{{ $form->title }}</td>
                    <td>{{ count($form->profiles) }}</td>
                    <td>{{ $form->new_profiles }}</td>
                    <td>{{ $form->voided_profiles }}</td>
                    <td>{{ $form->transfered_profiles }}</td>
                    <td>{{ $form->status }}</td>
                    <td>
                        <div class="row">
                            <div class="col-md-3"><a href="" class="btn btn-dark btn-xs"><i class="oi oi-pencil text-white" title="Edit" aria-hidden="true"></i></a></div>
                            <div class="col-md-3"><a href="{{ route('admin.forms.onOff', ['form' => $form, 'type' => $type]) }}" class="btn @if ($form->status) btn-dark @else btn-danger @endif btn-xs"><i class="oi oi-power-standby text-white" title="@if ($form->status) Deactivate @else Activate @endif" aria-hidden="true"></i></a></div>
                            <div class="col-md-3"><a href="" class="btn btn-dark btn-xs"><i class="oi oi-cloud-download text-white" title="Transfer New Profiles" aria-hidden="true"></i></a></div>
                            <div class="col-md-3"><a href="{{ $form->form_unique_part }}" class="btn btn-dark btn-xs"><i class="oi oi-external-link text-white" title="Form Link" aria-hidden="true"></i></a></div>
                        </div>
                    </td>
                </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection