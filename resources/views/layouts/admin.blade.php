<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>
    @yield('title')
  </title>
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

  <style>
    .full-h {
      height: 100vh;
    }

  </style>
</head>

<body>

  <div class="w-full">
    <div class="row full-h w-100">
      @include('includes.admin.sidebar')

      {{-- body --}}
      <div class="col-8 px-4">
        @yield('content')
      </div>
    </div>
  </div>


  <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
  <script src="{{ asset('js/alpinejs.js') }}"></script>

</body>

</html>
