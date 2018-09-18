@extends('layouts.app')

{{--ADDITIONAL INFO FOR TEMPLATE--}}
@section('title', 'Job Application')
@section('body', 'apply')

@section('img')
    <img src="{{ asset('images/front/apply.png') }}" alt="Job Application">
@endsection
{{--ADDITIONAL INFO FOR TEMPLATE END--}}

@section('content')
<div class="job-description">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    @if($errors->all())
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    @endif
    <div class="container">
        @if (isset($form->id))
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-12">
                    {!! htmlspecialchars_decode($form->header_html) !!}
                    <div class="text-block">
                        <img src="{{ $form->thumbnail_url }}" alt="">
                        <h3 class="title">Job Description</h3>
                        <p>
                            Position Summary<br>
                            Salary and Requirements<br>
                            Frequently Asked Questions
                        </p>
                        <a href="{{ $form->pdf_url }}" class="btn">Download</a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12">
                    <div class="text-block">
                        <form id="form-apply" class="form-apply" action="{{ route('profiles.store', $form->form_unique_part) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="col-lg-6 col-md-12">
                                    <input class="form-control" required="required" name="first_name" type="text" placeholder="First Name*">
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <input class="form-control" required="required" name="last_name" type="text" placeholder="Last Name*">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12">
                                    <input class="form-control" required="required" name="address" type="text"
                                           placeholder="Current Mailing Address*">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12">
                                    <input class="form-control" required="required" name="city" type="text" placeholder="City*">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-6 col-md-12">
                                    <select name="state_id" id="state" class="custom-select" required>
                                        @foreach($states as $state)
                                            <option value="{{ $state->id }}">@if ($state->id === 0) State* @else {{ $state->state }} @endif</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <input class="form-control" required="required" name="zip" type="text" placeholder="ZIP Code*">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12">
                                    <input class="form-control" required="required" name="email" type="email" placeholder="E-mail*">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-2">
                                    <input class="form-control" disabled="disabled" type="text" placeholder="+1">
                                </div>
                                <div class="col-10">
                                    <input class="form-control" required="required" name="cell_phone" type="text"
                                           placeholder="Primary Phone*">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-2">
                                    <input class="form-control" disabled="disabled" type="text" placeholder="+1">
                                </div>
                                <div class="col-10">
                                    <input class="form-control" type="text" name="other_phone" placeholder="Alternative Phone">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12">
                                    <h3 class="title">Photo for ID Badge</h3>
                                    <p>
                                        This field is optional. You may upload a front-facing, professional photo appropriate
                                        for an employee ID badge. Please use a high resolution headshot without any head
                                        covering. Use JPG or PNG file format. File size should not exceed 1MB.
                                    </p>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12">
                                    <div class="custom-file">
                                        <input id="upload-img" type="file" name="photos[]" class="custom-file-input" multiple>
                                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                        <div class="row files-row" id="image-preview"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12">
                                    <h3 class="title">Resume</h3>
                                    <p>
                                        Upload your current resume in one of the following formats:<br>
                                        Doc or Docx (Microsoft Word)<br>
                                        PDF (Adobe Acrobat)<br>
                                        TXT (Notepad/Wordpad)<br>
                                        File size should not exceed 5MB.
                                    </p>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12">
                                    <div class="custom-file">
                                        <input id="upload-file" type="file" name="files[]" class="custom-file-input" multiple>
                                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                        <div class="row files-row" id="file-preview"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
@endsection