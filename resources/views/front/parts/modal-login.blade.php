<h3 class="title">MY ACCOUNT</h3>
<form name="login" action="" method="POST" class="form">
    <div class="form-group">
        <input class="form-control" name="username" id="username" placeholder="Login" autocomplete="off">
    </div>
    <div class="form-group pass">
        <input class="form-control" type="password" name="password" id="password" placeholder="Password" autocomplete="off">
    </div>
    <div data-alert="" class="alert-box alert warning radius success_box-login account-box" style="display: none;">
        Incorrect Login/Password or this account is not verified yet.
        <a href="#" class="close">×</a>
    </div>
    <div data-alert="" class="alert-box alert radius error_box-login account-box" style="display: none;">
        The username field is required.<br>
        The password field is required.<br>
    </div>
    <div class="form-group sign-in">
        <input type="submit" name="submit" class="btn" value="Sign in">
    </div>
    <div class="form-check remember">
        <input type="checkbox" class="form-check-input" id="remember">
        <label class="form-check-label" for="remember">Remember me</label>
    </div>
    <div class="form-group form-btns">
        Forgot your <a href="/password_recovery">Password?</a> or
        <a href="/username_recovery">Username?</a>
    </div>
    <a href="/account" class="btn create-acc">Open New Account</a>
</form>