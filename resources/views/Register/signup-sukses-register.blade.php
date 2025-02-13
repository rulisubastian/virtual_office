
@extends('register.layout.app')
@section('content')
<div class="forms">
  <form id="passwordForm" class="form-horizontal" action="#" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-12 text-center" style="text-align:center">
            <img class="mb-3 text-center" src="{{ asset('PointSpace/register/img/Lock.png') }}" />
        </div>
        <div class="col-md-12 text-center md-4">
            <p class="sign-up-to-success">Thank you!</p>
            <p class="enter-your-details-success">We sent an email to {{ $email ?? '' }}<br/>
                Click confirmation link in the email to verify your account</p>
        </div>
        <div class="col align-self-center mb-4">
            <div class="forms-radio-resting">
                <div class="form-group">
                    
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-3 position-relative">
            <div class="buttons-filled mb-3">
                <button type="submit" class="btn btn-primary button-position">Open Email App & Confirm</button>
            </div>
        </div>
    </div>
  </form>
</div>
@endsection
