<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $appName }}</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicons/Menu.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicons/Favicon.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicons/Favicon.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicons/Favicon.png') }}">

    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@300;400;500;600;700;800;900&family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet" id="style-default">
    <link rel="stylesheet" href="{{ asset('assets/logis-new/vendor/fontawesome-free/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/logis-new/vendor/bootstrap-icons/bootstrap-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('PointSpace/register/css/global.css') }}" />
    <link rel="stylesheet" href="{{ asset('PointSpace/register/css/styleguide.css') }}" />
    <link rel="stylesheet" href="{{ asset('PointSpace/register/css/style.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
  </head>
  <body>
    <div class="container-fluid">
      <!-- Header Section -->
      <header class="d-flex justify-content-between align-items-center py-3 px-3">
        <!-- Left Side: Logo and Select Inputs -->
        <div class="d-flex align-items-center">
          <!-- Logo -->
          <div class="logo-full me-3">
            <a href="{{ route('home') }}" class="d-flex align-items-center text-decoration-none">
              <img class="logo-dark-icon me-2" src="{{ asset('assets/img/logos/logo.png') }}" alt="Logo" />
            </a>
          </div>
          
          <div class="d-flex">
            <div class="input-group">
              <div class="select-with-icon position-relative">
                <select id="kota" class="form-control form-control-lg pe-5 form-filter form-border-filter-right" style="" name="kota">
                  <option value="">Bandung</option>
                  <option value="bandung">Bandung</option>
                  <option value="jakarta">Jakarta</option>
                </select>
                <i class="fa fa-location-dot position-absolute top-50 end-0 translate-middle-y me-3" aria-hidden="true"></i>
                <!-- <i class="bi bi-marker-tip top-50 end-0 translate-middle-y me-3" ></i> -->
              </div>
            </div>
            <div class="input-group position-relative">
              <select id="office_place" class="form-control form-control-lg pe-5 form-filter form-border-filter-left" name="office_place">
                <option value="">Office Place</option>
                <option value="office1">Office 1</option>
                <option value="office2">Office 2</option>
              </select>
              <!-- Button as Input Group Append -->
              <button class="btn btn-primary position-absolute top-50 end-0 translate-middle-y btn-non-border me-1" aria-label="Search" type="button">
                <i class="bi bi-search" aria-hidden="true"></i>
              </button>
            </div>
          </div>
        </div>

        <div>
          <a href="{{ route('login') }}" class="btn btn-primary">Sign In</a>
        </div>
      </header>
      @yield('content')
    </div>
  </body>
</html>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Custom Scripts -->

<script>
    $(document).ready(function () {
      // $('#formSignup').on('submit', function (e) {
      //   e.preventDefault();

      //   $.ajax({
      //       url: $(this).attr('action'), // Form action URL
      //       type: 'POST',
      //       data: $(this).serialize(), // Serialize form data
      //       dataType: 'json',
      //       success: function(response) {
      //           console.log(response);
      //           if (response.success === true) {
      //             toastr.success(response.message);
      //           }else{
      //             toastr.error(response.message);
      //           }
      //       },
      //       error: function(xhr) {
      //           if (xhr.status === 422) {
      //               let errors = xhr.responseJSON.errors;
      //               toastr.error(errors);

      //               $.each(errors, function(field, messages) {
      //                 toastr.error(messages[0]);
      //               });
      //           }
      //       }
      //   });
      // });

      $('#passwordForm').on('submit', function (e) {
        var term = $('#agree').is(':checked');

          if (!term) {
              e.preventDefault(); // Prevent form submission
              $('#icon-confirm').removeClass('bi bi-check-circle-fill');
              $('#icon-confirm').addClass('bi bi-exclamation-circle-fill');
          } else {
              $('#pesan').text('');
              $('#icon-confirm').addClass('bi bi-check-circle-fill');
              $('#icon-confirm').removeClass('bi bi-exclamation-circle-fill');
          }

            // e.preventDefault(); // Prevent default form submission

            // $.ajax({
            //     url: $(this).attr('action'), // Form action URL
            //     type: 'POST',
            //     data: $(this).serialize(), // Serialize form data
            //     dataType: 'json',
            //     success: function(response) {
            //         if (response.status === 'success') {
            //             toastr.success(response.message);
            //         }
            //     },
            //     error: function(xhr) {
            //         if (xhr.status === 422) {
            //             let errors = xhr.responseJSON.errors;
            //             $('#error-messages').html(''); // Clear previous errors

            //             $.each(errors, function(field, messages) {
            //                 $('#error-messages').append('<div class="alert alert-danger">' + messages[0] + '</div>');
            //             });
            //         }
            //     }
            // });

        });

        // Optional: Live validation
        $('#confirm').on('keyup', function () {
            var password = $('#password').val();
            var confirmPassword = $(this).val();

            if (password === confirmPassword) {
                $('#pesan').text('').css('color', 'green');
                $('#icon-confirm').addClass('bi bi-check-circle-fill');
                $('#icon-confirm').removeClass('bi bi-exclamation-circle-fill');
            } else {
                $('#pesan').text('Password tidak sesuai!').css('color', 'red');
                $('#icon-confirm').removeClass('bi bi-check-circle-fill');
                $('#icon-confirm').addClass('bi bi-exclamation-circle-fill');
            }
        });
    });

    @if(session('success'))
        toastr.success("{{ session('success') }}");
    @elseif(session('error'))
        toastr.error("{{ session('error') }}");
    @endif
</script>
