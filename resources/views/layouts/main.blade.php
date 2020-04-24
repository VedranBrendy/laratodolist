<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Todo List</title>
  {{-- Materialize Icons--}}
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="{{asset('css/materialize.css')}}">
  {{-- Custom CSS --}}
  <link rel="stylesheet" href="{{asset('css/main.css')}}">

  {{-- Materialize JS --}}
  <!-- Compiled and minified JavaScript -->
  <script src="{{asset('js/app.js')}}"></script>
</head>



<body>

  @include('layouts.navbar')

  <div class="container">
    @include('partials._messages')
    @yield('content')
  </div>
  <script src="{{ mix('js/app.js') }}"></script>
  <script src="{{asset('js/custom.js')}}"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var elems = document.querySelectorAll('#due_date');
      var instances = M.Datepicker.init(elems, {
        autoClose:true,
         format:'dd.mm.yyyy'

        });
  });

  </script>
</body>

</html>