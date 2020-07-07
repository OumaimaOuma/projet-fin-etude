@extends('layouts.app')
<div class="tab-content">
    <div class="tab-pane active" id="candidate" role="tabpanel">
        <form class="mt-4">
            <div class="form-row">
                <div class="form-group col-12">
                    <label for="Email2">Username / Email Address:</label>
                    <input type="text" class="form-control" id="Email22">
                </div>
                <div class="form-group col-12">
                    <label for="password2">Password*</label>
                    <input type="password" class="form-control" id="password32">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6">
                    <a class="btn btn-primary btn-block" href="#">Sign In</a>
                </div>
                <div class="col-md-6">
                    <div class="ml-md-3 mt-3 mt-md-0 forgot-pass">
                        <a href="#">Forgot Password?</a>
                        <p class="mt-1">Don't have account? <a href="register.html">Sign Up here</a></p>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="tab-pane fade" id="employer" role="tabpanel">
        <form class="mt-4">
            <div class="form-row">
                <div class="form-group col-12">
                    <label for="Email2">Username / Email Address:</label>
                    <input type="text" class="form-control" id="Email2">
                </div>
                <div class="form-group col-12">
                    <label for="password2">Password *</label>
                    <input type="password" class="form-control" id="password2">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6">
                    <a class="btn btn-primary btn-block" href="#">Sign In</a>
                </div>
                <div class="col-md-6">
                    <div class="ml-md-3 mt-3 mt-md-0">
                        <a href="#">Forgot Password?</a>
                        <div class="custom-control custom-checkbox mt-2">
                            <input type="checkbox" class="custom-control-input" id="Remember-02">
                            <label class="custom-control-label" for="Remember-02">Remember Password</label>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="mt-4">
    <fieldset>
        <legend class="px-2">Login or Sign up with</legend>
        <div class="social-login">
            <ul class="list-unstyled d-flex mb-0">
                <li class="facebook text-center">
                    <a href="#"> <i class="fab fa-facebook-f mr-3 mr-md-4"></i>Login with Facebook</a>
                </li>
                <li class="twitter text-center">
                    <a href="#"> <i class="fab fa-twitter mr-3 mr-md-4"></i>Login with Twitter</a>
                </li>
                <li class="google text-center">
                    <a href="#"> <i class="fab fa-google mr-3 mr-md-4"></i>Login with Google</a>
                </li>
                <li class="linkedin text-center">
                    <a href="#"> <i class="fab fa-linkedin-in mr-3 mr-md-4"></i>Login with Linkedin</a>
                </li>
            </ul>
        </div>
    </fieldset>