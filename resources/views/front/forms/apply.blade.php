@extends('layouts.app')
@section('content')
<div class="job-description">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-12">
                <div class="text-block">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <img src="/img/photo.jpg" alt="Job Description">
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <h3 class="title">Job Description</h3>
                            <p class="text">
                                <img src="/assets/img/ico-17.png" alt="">&nbsp; Position Summary<br>
                                <img src="/assets/img/ico-17.png" alt="">&nbsp; Salary and Requirements<br>
                                <img src="/assets/img/ico-17.png" alt="">&nbsp; Frequently Asked Questions
                            </p>
                            <a href="" class="btn download"><img src="/assets/img/ico-19.png" alt="">&nbsp; Download</a>
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
                <form id="form-apply" class="form-apply" action="../parts/apply-form-action.php">
                    <div class="form-hide">
                        <div class="form-row form-group">
                            <div class="col-lg-6 col-md-12">
                                <input class="form-control req" type="text" placeholder="First Name*">
                                <div class="req-text">First Name field is required.</div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <input class="form-control req" type="text" placeholder="Larst Name*">
                                <div class="req-text">Last Name field is required.</div>
                            </div>
                        </div>
                        <div class="form-row form-group">
                            <div class="col-12">
                                <input class="form-control req" type="text"
                                       placeholder="Current Mailindg Adress*">
                                <div class="req-text">Current Mailing Address field is required.</div>
                            </div>
                        </div>
                        <div class="form-row form-group">
                            <div class="col-12">
                                <input class="form-control req" type="text" placeholder="City*">
                                <div class="req-text">City field is required.</div>
                            </div>
                        </div>
                        <div class="form-row form-group">
                            <div class="col-lg-6 col-md-12">
                                <select name="state" id="state" class="form-control custom-select req">
                                    <option value="">State*</option>
                                    <option value="1">Alabama</option>
                                    <option value="2">Alaska</option>
                                    <option value="4">Arizona</option>
                                    <option value="5">Arkansas</option>
                                    <option value="6">California</option>
                                    <option value="7">Colorado</option>
                                    <option value="8">Connecticut</option>
                                    <option value="9">Delaware</option>
                                    <option value="10">Florida</option>
                                    <option value="11">Georgia</option>
                                    <option value="13">Hawaii</option>
                                    <option value="14">Idaho</option>
                                    <option value="15">Illinois</option>
                                    <option value="16">Indiana</option>
                                    <option value="17">Iowa</option>
                                    <option value="18">Kansas</option>
                                    <option value="19">Kentucky</option>
                                    <option value="20">Louisiana</option>
                                    <option value="21">Maine</option>
                                    <option value="22">Maryland</option>
                                    <option value="23">Massachusetts</option>
                                    <option value="24">Michigan</option>
                                    <option value="25">Minnesota</option>
                                    <option value="26">Mississippi</option>
                                    <option value="27">Missouri</option>
                                    <option value="28">Montana</option>
                                    <option value="29">Nebraska</option>
                                    <option value="30">Nevada</option>
                                    <option value="31">New Hampshire</option>
                                    <option value="32">New Jersey</option>
                                    <option value="33">New Mexico</option>
                                    <option value="34">New York</option>
                                    <option value="35">North Carolina</option>
                                    <option value="36">North Dakota</option>
                                    <option value="38">Ohio</option>
                                    <option value="39">Oklahoma</option>
                                    <option value="40">Oregon</option>
                                    <option value="41">Pennsylvania</option>
                                    <option value="43">Rhode Island</option>
                                    <option value="44">South Carolina</option>
                                    <option value="45">South Dakota</option>
                                    <option value="46">Tennessee</option>
                                    <option value="47">Texas</option>
                                    <option value="48">Utah</option>
                                    <option value="49">Vermont</option>
                                    <option value="50">Virginia</option>
                                    <option value="52">Washington</option>
                                    <option value="54">West Virginia</option>
                                    <option value="55">Wisconsin</option>
                                    <option value="56">Wyoming</option>
                                </select>
                                <div class="req-text">State field is required.</div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <input class="form-control req" type="text" placeholder="ZIP Code*">
                                <div class="req-text">ZIP Code field is required. It must be exact 5 characters long.
                                </div>
                            </div>
                        </div>
                        <div class="form-row form-group">
                            <div class="col-12">
                                <input class="form-control req" type="email" placeholder="E-mail*">
                                <div class="req-text">Email Address field is required.</div>
                            </div>
                        </div>
                        <div class="form-row form-group">
                            <div class="col-2">
                                <input class="form-control" disabled="disabled" type="text" placeholder="+1">
                            </div>
                            <div class="col-10">
                                <input class="form-control req" type="text"
                                       placeholder="Primary Phone*">
                                <div class="req-text">Primary Phone field is required.</div>
                            </div>
                        </div>
                        <div class="form-row form-group">
                            <div class="col-2">
                                <input class="form-control" disabled="disabled" type="text" placeholder="+1">
                            </div>
                            <div class="col-10">
                                <input class="form-control" type="text" placeholder="Alternative Phone">
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
                                    <input id="upload-img" type="file" class="form-control custom-file-input" multiple>
                                    <label class="custom-file-label" for="validatedCustomFile">Drop files to upload
                                        or</label>
                                    <div class="row files-row" id="image-preview"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row form-group">
                            <div class="col-12">
                                <h3 class="title">Resume</h3>
                                <p class="text">
                                    Upload your current resume in one of the following formats:<br>
                                    <img src="/assets/img/ico-17.png" alt="">&nbsp; Doc or Docx (Microsoft Word)<br>
                                    <img src="/assets/img/ico-17.png" alt="">&nbsp; PDF (Adobe Acrobat)<br>
                                    <img src="/assets/img/ico-17.png" alt="">&nbsp; TXT (Notepad/Wordpad)<br>
                                    File size should not exceed 5MB.
                                </p>
                            </div>
                        </div>
                        <div class="form-row form-group">
                            <div class="col-12">
                                <div class="custom-file">
                                    <input id="upload-file" type="file" class="form-control custom-file-input req"
                                           multiple>
                                    <label class="custom-file-label" for="validatedCustomFile">Drop files to upload
                                        or</label>
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