<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- Css style -->
    <style>
        .main {
        height: 100vh;
        width: 100wh;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
      }
    </style>
</head>
<body>
    <div class="main">
        <h3 id="student-name">Student name</h3>
    </div>

    <!-- Script for this page -->
    <script src="http://localhost:3000/socket.io/socket.io.js"></script>
    <script src="{{ asset('assets/js/socket.js') }}"></script>
</body>
</html>