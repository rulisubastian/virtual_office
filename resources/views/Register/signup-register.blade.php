
@extends('register.layout.app')
@section('content')

<div class="forms">
    <div class="row">
        <div class="col-md-12 md-4">
            <p class="sign-up-to-success">Tell us more about yourself</p>
            <p class="enter-your-details-success">Enter your details to proceed further</p>
        </div>
    </div>
    <form id="passwordForm" class="form-horizontal" action="{{ url('simpan-registrasi') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-12 mb-3 position-relative">
                <div class="form-floating">
                    <input type="email" class="form-control required forms-selectbox" required id="email" name="email" value="{{ $email ?? '' }}" placeholder="gmail@nomadenzy.com" />
                    <i class="bi bi-envelope-fill position-absolute icon-inside" aria-hidden="true"></i>
                    <label for="floatingInputValue">Email</label>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control required forms-selectbox" required id="firstname" name="firstname" placeholder="Nama Depan" />
                    <i class="bi bi-person-fill position-absolute icon-inside" aria-hidden="true"></i>
                    <label for="floatingInputValue">Nama Depan</label>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control required forms-selectbox" required id="lastname" name="lastname" placeholder="Nama Belakang" />
                    <i class="bi bi-person-fill position-absolute icon-inside" aria-hidden="true"></i>
                    <label for="floatingInputValue">Nama Belakang</label>
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control required forms-selectbox" required id="phone" name="phone" placeholder="Telepon" />
                    <i class="bi bi-telephone-fill position-absolute icon-inside" aria-hidden="true"></i>
                    <label for="floatingInputValue">Telepon</label>
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <div class="form-floating">
                    <input type="password" class="form-control required forms-selectbox" required id="password" name="password" placeholder="Password" />
                    <i class="bi bi-lock-fill position-absolute icon-inside" aria-hidden="true"></i>
                    <label for="floatingInputValue">Password</label>
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <div class="form-floating">
                    <input type="password" class="form-control required forms-selectbox" id="confirm" name="confirm" placeholder="Konfirm Password" />
                    <i id="icon-confirm" class="bi bi-check-circle-fill position-absolute icon-inside" aria-hidden="true"></i>
                    <label for="floatingInputValue">Konfirm Password</label>
                </div>
                <span id="pesan" class="fs-10" style="color: red;"></span>
            </div>
            <div class="col-md-12 mb-5 position-relative">
                <div class="forms-radio-resting">
                    <div class="form-group">
                        <div class="radio">
                            <label>
                                <input type="radio" class="form-check-input bg" id="agree" name="agree" {{ old('agree', $agree) == 1 ? 'checked' : '' }} checked value="1"> <p class="title">I agree with terms &amp; conditions</p>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mb-3 position-relative">
                <div class="buttons-filled mb-3">
                    <button type="submit" class="btn btn-primary button-position">Sign Up</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
