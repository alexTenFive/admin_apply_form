@extends('layouts.admin.app')

@section('title', 'List Forms')
@section('content')
    <div class="form-panel border  col-md-10 offset-md-1 bg-custom">
        <a class="btn btn-dark btn-sm mt-3" href="dashboard/profiles/transfer?form-id=">Transfer New Profiles</a>
        <hr>
        <h1 class="text-center py-3">
            List Profiles{{ ' - ' . ucwords($type) }} ({{ count($profiles) }})
        </h1>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <p class="notice text-center small">Here will be filter and search. Soon...</p>
        @if (count($profiles))
            <table class="table table-bordered px-6 bg-white">
                <thead>
                <tr class="text-center">
                    <th scope="col">ID</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Form ID</th>
                    <th scope="col">Project ID</th>
                    <th scope="col">Referral ID</th>
                    <th scope="col">Status</th>
                    <th scope="col">Options</th>
                </tr>
                </thead>
                <tbody>
                @foreach($profiles as $profile)
                    <tr class="text-center">
                        <th scope="row">{{ $profile->id }}</th>
                        <td>{{ $profile->full_name }}</td>
                        <td>{{ $profile->email }}</td>
                        <td>{{ $profile->form_id }}</td>
                        <td>{{ $profile->project_id }}</td>
                        <td>{{ $profile->remote_refferal_id }}</td>
                        <td>{{ $profile->getProfileStatus() }}</td>
                        <td>
                            <div class="row">
                                <div class="col-md-6"><a href="" class="btn btn-dark btn-xs"><i class="oi oi-pencil text-white" title="Edit Profile" aria-hidden="true"></i></a></div>
                                <div class="col-md-6"><a href="{{ route('admin.profiles.delete', ['profile' => $profile, 'type' => $type]) }}" class="btn btn-dark btn-xs"><i class="oi oi-x text-white" title="Remove Profile" aria-hidden="true"></i></a></div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection