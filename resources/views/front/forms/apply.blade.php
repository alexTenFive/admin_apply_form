@extends('layouts.app')
@section('title', $form->title)
@section('body', 'apply')
@section('apply', 'apply')
@section('img')
    <img src="{{ asset('images/front/apply.png') }}" alt="Always Ahead'">
@endsection

@section('content')

    @if ($form->status === 1)
    <div class="job-description">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-12">
                    <div class="text-block">
                        @if ($form->header_html)
                            <div class="row">
                                <div class="col-md-12 col-sm-12 text-center">
                                    {!! htmlspecialchars_decode($form->header_html) !!}
                                </div>
                            </div>
                        @endif
                            @if (! empty($form->pdf_url))
                            <div class="row">
                                <div class="col-md-6 col-sm-12 text-center text-md-right d-sm-none d-md-block">
                                    <img src="{{ $form->thumbnail_url }}" alt="Job Description">
                                </div>
                                <div class="col-md-6 col-sm-12 text-center text-md-left">
                                    <h3 class="title">Job Description</h3>
                                    <p class="text">
                                        <img src="{{ asset('/front/img/ico-17.png') }}" alt="">&nbsp; Position Summary<br>
                                        <img src="{{ asset('/front/img/ico-17.png') }}" alt="">&nbsp; Salary and Requirements<br>
                                        <img src="{{ asset('/front/img/ico-17.png') }}" alt="">&nbsp; Frequently Asked Questions
                                    </p>
                                    <a href="{{ $form->pdf_url }}" class="btn download"><img src="{{ asset('/front/img/ico-19.png') }}" alt="">&nbsp; Download</a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12">
                <div class="text-block">
                    @if ($form->status == 1)
                        <form id="form-apply" class="form-apply" method="post" action="{{ route('profiles.store', $form->form_unique_part) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-hide">
                                <div class="form-row form-group">
                                    <div class="col-lg-6 col-md-12">
                                        <input class="form-control req" name="first_name" type="text" placeholder="First Name*">
                                        <div class="req-text">First Name field is required.</div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <input class="form-control req" name="last_name" type="text" placeholder="Last Name*">
                                        <div class="req-text">Last Name field is required.</div>
                                    </div>
                                </div>
                                <div class="form-row form-group">
                                    <div class="col-12">
                                        <input class="form-control req" name="address" type="text"
                                               placeholder="Current Mailing Address*">
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
                                        <input class="zip form-control req" type="text" name="zip" placeholder="ZIP Code*">
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
                                        <input id="phone" class="phone form-control req" data-mask="(000) 000-0000" maxlength="14" name="cell_phone" type="text"
                                               placeholder="Primary Phone*">
                                        <div class="req-text">Primary Phone field is required.</div>
                                    </div>
                                </div>
                                <div class="form-row form-group">
                                    <div class="col-2">
                                        <input class="form-control" disabled="disabled" type="text" placeholder="+1">
                                    </div>
                                    <div class="col-10">
                                        <input id="phone-alt" class="phone form-control" data-mask="(000) 000-0000" maxlength="14" name="other_phone" type="text" placeholder="Alternative Phone">
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
                                            <button id="uploadBtnImg" class="select-file"><span class="inner">Drop files to upload or</span></button>
                                            <div id="progressOuterImg" class="progress progress-striped active" style="display:none;">
                                                <div id="progressBarImg" class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                </div>
                                            </div>
                                            <div id="msgBoxImg" class="message-box"></div>
                                            <input id="photos" name="photos" type="hidden">
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
                                            <button id="uploadBtn" class="select-file req err"><span class="inner">Drop files to upload or</span></button>
                                            <div id="progressOuter" class="progress progress-striped active" style="display:none;">
                                                <div id="progressBar" class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                </div>
                                            </div>
                                            <div id="msgBox" class="message-box"></div>
                                            <div class="req-text">Resume needs to be uploaded.</div>
                                            <input id="files_docs" name="files" type="hidden">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row form-group">
                                    <div class="col-12 text-center">
                                        <div class="alert empty"></div>
                                        <button class="btn btn-2 btn-primary" type="submit">Apply Now!</button>
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
                    @else
                        <div class="form-row form-group">
                            <div class="col-12 text-center">
                                <p>
                                    We are sorry but this vacancy is filled up already
                                </p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>


@endsection