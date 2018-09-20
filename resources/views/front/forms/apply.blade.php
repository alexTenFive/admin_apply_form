@extends('layouts.app')
@section('title', 'Job Application')
@section('body', 'apply')

@section('img')
    <img src="{{ asset('images/front/apply.png') }}" alt="Always Ahead'">
@endsection

@section('content')
<div class="job-description">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-12">
                <div class="text-block">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <img src="{{ $form->thumbnail_url }}" alt="Job Description">
                        </div>
                        HEADER html: {!! htmlspecialchars_decode($form->header_html) !!}
                        {{ 'Form title:' . $form->title }}
                        <div class="col-lg-6 col-sm-12">
                            <h3 class="title">Job Description</h3>
                            <p class="text">
                                <img src="{{ asset('front/img/ico-17.png') }}" alt="">&nbsp; Position Summary<br>
                                <img src="{{ asset('front/img/ico-17.png') }}" alt="">&nbsp; Salary and Requirements<br>
                                <img src="{{ asset('front/img/ico-17.png') }}" alt="">&nbsp; Frequently Asked Questions
                            </p>
                            <a href="{{ $form->pdf_url }}" class="btn download"><img src="{{ asset('front/img/ico-19.png') }}" alt="">&nbsp; Download</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-12">
            <div class="text-block">
                <form id="form-apply" class="form-apply" method="post" action="{{ route('profiles.store', $form->form_unique_part) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-hide">
                        <div class="form-row form-group">
                            <div class="col-lg-6 col-md-12">
                                <input class="form-control req" name="first_name" type="text" placeholder="First Name*">
                                <div class="req-text">First Name field is required.</div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <input class="form-control req" name="last_name"type="text" placeholder="Larst Name*">
                                <div class="req-text">Last Name field is required.</div>
                            </div>
                        </div>
                        <div class="form-row form-group">
                            <div class="col-12">
                                <input class="form-control req" name="address" type="text"
                                       placeholder="Current Mailindg Adress*">
                                <div class="req-text">Current Mailing Address field is required.</div>
                            </div>
                        </div>
                        <div class="form-row form-group">
                            <div class="col-12">
                                <input class="form-control req" type="text" name="city" placeholder="City*">
                                <div class="req-text">City field is required.</div>
                            </div>
                        </div>
                        <div class="form-row form-group">
                            <div class="col-lg-6 col-md-12">
                                <select name="state_id" id="state" class="form-control custom-select req">
                                    @foreach ($states as $state)
                                    <option value="{{ $state->id }}">@if ($state->id == 0) State* @else {{ $state->state }} @endif</option>
                                    @endforeach
                                </select>
                                <div class="req-text">State field is required.</div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <input class="form-control req" type="text" name="zip" placeholder="ZIP Code*">
                                <div class="req-text">ZIP Code field is required. It must be exact 5 characters long.
                                </div>
                            </div>
                        </div>
                        <div class="form-row form-group">
                            <div class="col-12">
                                <input class="form-control req" type="email" name="email" placeholder="E-mail*">
                                <div class="req-text">Email Address field is required.</div>
                            </div>
                        </div>
                        <div class="form-row form-group">
                            <div class="col-2">
                                <input class="form-control" disabled="disabled" type="text" placeholder="+1">
                            </div>
                            <div class="col-10">
                                <input class="form-control req" name="cell_phone" type="text"
                                       placeholder="Primary Phone*">
                                <div class="req-text">Primary Phone field is required.</div>
                            </div>
                        </div>
                        <div class="form-row form-group">
                            <div class="col-2">
                                <input class="form-control" disabled="disabled" type="text" placeholder="+1">
                            </div>
                            <div class="col-10">
                                <input class="form-control" type="text" name="other_phone" placeholder="Alternative Phone">
                            </div>
                        </div>
                        <div class="form-row form-group">
                            <div class="col-12">
                                <h3 class="title">Photo for ID Badge</h3>
                                <p>
                                    This field is optional. You may upload a front-facing, professional photo
                                    appropriate
                                    for an employee ID badge. Please use a high resolution headshot without any head
                                    covering. Use JPG or PNG file format. File size should not exceed 1MB.
                                </p>
                            </div>
                        </div>
                        <div class="form-row form-group">
                            <div class="col-12">
                                <div class="custom-file">
                                    <input id="upload-img" type="file" name="photos[]" class="form-control custom-file-input" multiple>
                                    <label class="custom-file-label" for="upload-img">
                                        <span class="inner">
                                            Drop files to upload or
                                        </span>
                                    </label>
                                    <div class="row files-row" id="image-preview"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row form-group">
                            <div class="col-12">
                                <h3 class="title">Resume</h3>
                                <p class="text">
                                    Upload your current resume in one of the following formats:<br>
                                    <img src="{{ asset('front/img/ico-17.png') }}" alt="">&nbsp; Doc or Docx (Microsoft Word)<br>
                                    <img src="{{ asset('front/img/ico-17.png') }}" alt="">&nbsp; PDF (Adobe Acrobat)<br>
                                    <img src="{{ asset('front/img/ico-17.png') }}" alt="">&nbsp; TXT (Notepad/Wordpad)<br>
                                    File size should not exceed 5MB.
                                </p>
                            </div>
                        </div>
                        <div class="form-row form-group">
                            <div class="col-12">
                                <div class="custom-file">
                                    <input id="upload-file" type="file" name="files[]" class="form-control custom-file-input req"
                                           multiple>
                                    <label class="custom-file-label" for="upload-file">
                                        <span class="inner">
                                            Drop files to upload or
                                        </span>
                                    </label>
                                    <div class="row files-row" id="file-preview"></div>
                                    <div class="req-text">Resume needs to be uploaded.</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row form-group">
                            <div class="col-12 text-center">
                                <div class="alert empty"></div>
                                <button class="btn btn-2 btn-primary" type="submit">Submit form</button>
                            </div>
                        </div>
                    </div>
                    <div class="alert not-empty success">
                        Thank you! Your application has been submitted! Once we have approved your
                        application,
                        you will receive an email notifying you of the date and time of your phone
                        interview.
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection