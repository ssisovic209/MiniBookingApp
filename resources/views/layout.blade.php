<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head style="margin:2em">
    <meta charset="utf-8">
    <title>@yield('title','Booking')</title>
    <link rel="stylesheet"  type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
    <style>
    .name {
      font-size: 14pt;
      font-weight: bold;
      margin-bottom: 1em;
    }

    </style>
  </head>
  <body style="margin:2em">
    <div class="container">
        @yield('content')
    </div>
  </body>
</html>
