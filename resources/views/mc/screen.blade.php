<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('assets/css/screen.css') }}">
</head>
<body>
  <div class="hero">
    <p id="degree">0</p>
    <p id="name">0</p>
    <p id="majour">0</p>
  </div>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="{{env('SOCKET_URL')}}/socket.io/socket.io.js"></script>
  <script>
        var socket_url = "{{env('SOCKET_URL')}}";
    </script>
  <script src="{{ asset('assets/js/socket.js') }}"></script>
  <script src="{{ asset('assets/js/screen.js') }}"></script>
</body>
</html>
