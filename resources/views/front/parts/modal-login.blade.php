<h3 class="title">MY ACCOUNT</h3>
<form id="login" name="login" action="" method="POST" class="form">
    <div class="form-group">
        <input class="form-control req" name="username" id="username" placeholder="Login" autocomplete="off">
        <div class="req-text">The username field is required.</div>
    </div>
    <div class="form-group pass">
        <input class="form-control req" type="password" name="password" id="password" placeholder="Password" autocomplete="off">
        <div class="req-text">The password field is required.</div>
    </div>
    <div class="alert not-empty">
        Incorrect Login/Password or this account is not verified yet.
    </div>
    <div class="alert empty"></div>
    <div class="form-group sign-in">
        <input type="submit" name="submit" class="btn" value="Sign in">
    </div>
    <div class="form-check remember">
        <input type="checkbox" class="form-check-input" id="remember">
        <label class="form-check-label" for="remember">Remember me</label>
    </div>
    <div class="form-group form-btns">
        Forgot your <a href="{{ url('/password-recovery') }}">Password?</a> or
        <a href="{{ url('/username-recovery') }}">Username?</a>
    </div>
    <a href="{{ url('/account') }}" class="btn create-acc">Open New Account</a>
</form>