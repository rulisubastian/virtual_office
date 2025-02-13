
@extends('Content.layout.app')
@section('content')
<!-- Main Content -->
<div class="row justify-content-center">
    <div class="col-md-12 col-lg-10">
    <!-- Sign-Up Heading -->
    <div class="text-center my-5">
        <h2 class="fw-bold">Sign Up to Getting Started</h2>
        <p class="text-muted">Enter your details to proceed further</p>
    </div>

    <!-- Sign-Up Form -->
    <form id="formSignup" action="{{ url('signup/register') }}" method="POST">
        @csrf
        <div class="mb-4">
            <div class="form-floating position-relative">
                <input type="email" class="form-control" id="email" name="email" placeholder="gmail@nomadenzy.com" required>
                <label for="email">Email</label>
                <i class="bi bi-envelope-fill position-absolute top-50 translate-middle-y end-0 me-3 text-muted"></i>
            </div>
        </div>
        <div class="mb-4 form-check">
            <input type="checkbox" class="form-check-input" id="agree" name="agree" value="1" required>
            <label class="form-check-label" for="agree">I agree with terms &amp; conditions</label>
        </div>
        <div class="d-grid mb-4">
            <button type="submit" class="btn btn-primary btn-lg">Sign Up</button>
        </div>
    </form>

    <!-- Divider -->
    <div class="d-flex align-items-center my-4">
        <hr class="flex-grow-1">
        <span class="mx-3 text-muted">Or</span>
        <hr class="flex-grow-1">
    </div>

    <!-- Social Sign-Up Buttons -->
    <div class="d-grid gap-3">
        <button class="btn btn-outline-primary btn-lg d-flex align-items-center justify-content-center" type="button">
        <i class="bi bi-google me-2"></i> Sign Up with Google
        </button>
        <button class="btn btn-outline-primary btn-lg d-flex align-items-center justify-content-center" type="button">
        <i class="bi bi-facebook me-2"></i> Sign Up with Facebook
        </button>
        <button class="btn btn-outline-primary btn-lg d-flex align-items-center justify-content-center" type="button">
        <i class="bi bi-twitter me-2"></i> Sign Up with Twitter
        </button>
    </div>
    </div>
</div>
@endsection
