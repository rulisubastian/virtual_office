
@extends('register.layout.app')
@section('content')
<div class="forms">
  <div class="row col-md-12 md-4">
      <p class="sign-up-to-success">Sign Up to getting started</p>
      <p class="enter-your-details-success">Enter your details to proceed further</p>
  </div>
  <form id="formSignup" class="form-horizontal" action="{{ url('signup/register') }}" method="POST">
      @csrf
      <div class="row mb-3">
        <div class="col-md-12 mb-3 position-relative">
          <div class="form-floating">
              <input type="email" class="form-control required forms-selectbox" required id="email" name="email" placeholder="gmail@nomadenzy.com" />
              <i class="bi bi-envelope-fill position-absolute icon-inside" aria-hidden="true"></i>
              <label for="floatingInputValue">Email</label>
          </div>
        </div>
        <div class="col-md-12 mb-3 position-relative">
          <div class="forms-radio-resting">
            <div class="form-group">
              <div class="radio">
                <label>
                  <input type="radio" class="form-check-input bg" id="agree" name="agree" value="1"><p class="title">I agree with terms &amp; conditions</p>
                  <span class="checkmark"></span>
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mb-8">
        <div class="col-md-12 position-relative">
          <div class="buttons-filled">
            <button type="submit" class="btn btn-primary button-position">Sign Up</button>
          </div>
        </div>
      </div>
    </form>
    <div class="row mb-3">
      <div class="col-md-12 position-relative">
        <div class="or">
          <div class="text-wrapper-2">Or</div>
          <img class="line" src="https://c.animaapp.com/FTGYRVIw/img/line-2.svg" />
          <img class="line-copy" src="https://c.animaapp.com/FTGYRVIw/img/line-2-copy.svg" />
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 mb-3 position-relative">
        <div class="social-buttons">
          <button class="btn btn-primary signup-size-button" type="button" id="sign-google" name="sign-google">
            <i class="bi bi-google"></i> Sign Up with Google
          </button>
          <button class="btn btn-primary signup-size-button" type="button" id="sign-google" name="sign-google">
            <i class="bi bi-facebook"></i> Sign Up with Facebook
          </button>
          <button class="btn btn-primary signup-size-button" type="button" id="sign-google" name="sign-google">
            <i class="bi bi-twitter-x"></i> Sign Up with Twitter
          </button>
        </div>
      </div>
    </div>
</div>
@endsection
