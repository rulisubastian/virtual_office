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

    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&amp;family=Rubik:ital,wght@0,300..900;1,300..900family=Rubik:ital,wght@0,300..900;1,300..900&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet" id="style-default">
    <link rel="stylesheet" href="{{ asset('assets/logis-new/vendor/fontawesome-free/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/logis-new/vendor/bootstrap-icons/bootstrap-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('PointSpace/register/css/global.css') }}" />
    <link rel="stylesheet" href="{{ asset('PointSpace/register/css/styleguide.css') }}" />
    <link rel="stylesheet" href="{{ asset('PointSpace/register/css/style.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  </head>
  <body>
    <div class="sign-up-v-step">
      <div class="div">
        <header class="header">
          <div class="buttons-filled-2"><a href="{{ route('login') }}" class="lable-5">Sign In</a></div>
          <div class="logo-full">
            <a href="{{ route('home') }}">
              <img class="logo-dark-icon" src="https://c.animaapp.com/FTGYRVIw/img/logo---dark-icon.svg" />
              <div class="roomsfy">{{ $appName }}</div>
            </a>
          </div>
        </header>
        @yield('content')
      </div>
    </div>
  </body>
</html>

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
