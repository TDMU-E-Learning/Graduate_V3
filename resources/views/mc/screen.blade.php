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
    <p id="degree">Tân kỹ sư</p>
    <p id="name">Lý Tường Huy</p>
    <p id="majour">Chuyên ngành Kỹ thuật phần mềm</p>
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
