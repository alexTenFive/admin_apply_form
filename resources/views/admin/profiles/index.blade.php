@extends('layouts.admin.app')

@section('title', 'List Profiles')
@section('content')
    <div class="form-panel border  col-md-10 offset-md-1 bg-custom">
        <a class="btn btn-dark btn-sm mt-3" href="{{ route('admin.profiles.transfer') }}">Transfer New Profiles</a>
        <hr>
        <h1 class="text-center py-3">
            List Profiles{{ ' - ' . ucwords($type) }} ({{ count($profiles) }})
        </h1>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="row mb-3">
            <div class="col-2 mt-2 offset-4">
                Filter by form ID:
            </div>
            <div class="col-2">
                <script type="text/javascript">
                    var type_p = "{{ $type }}";
                    var search_phrase = "{{ $search_phrase }}";
                </script>
                <select class="custom-select" onchange="form_filter(this.value, type_p, search_phrase)">
                    <option selected value="">-- None --</option>
                    @foreach ($forms as $form)
                        <option value="{{ $form->id }}" @if ($form_id == $form->id) selected @endif>{{ $form->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="offset-2 col-1.5">
                <a href="{{ route('admin.profiles', ['type' => $type]) }}" class="btn btn-outline-warning text-dark btn-sm mt-1 mr-2">Очистить параметры поиска</a>
            </div>
        </div>
        <form action="{{ route('admin.profiles', ['type' => $type]) }}">
            <div class="form-group row m-2">
                <label for="search-input" class="col-1 col-form-label">Search:</label>
                <div class="col-9">
                    <input type="hidden" name="form_id" value="{{ $form_id }}">
                    <input class="form-control" type="search" placeholder="Search profiles by name or email" name="search_phrase" id="search-input">
                </div>
                <button class="btn btn-dark col-2" type="submit">Search</button>
            </div>
        </form>
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
                                <div class="col-md-6"><a href="{{ route('admin.profiles.edit', ['profile' => $profile, 'type' => $type]) }}" class="btn btn-dark btn-xs"><i class="oi oi-pencil text-white" title="Edit Profile" aria-hidden="true"></i></a></div>
                                <div class="col-md-6"><a href="{{ route('admin.profiles.delete', ['profile' => $profile, 'type' => $type]) }}" class="btn btn-dark btn-xs"><i class="oi oi-x text-white" title="Remove Profile" aria-hidden="true"></i></a></div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p class="text-center m-3">No profiles available.</p>
        @endif
    </div>
@endsection