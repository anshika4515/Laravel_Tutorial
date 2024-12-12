<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .content {
            margin: 20px;
        }
        h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
        }
        h2 {
            font-size: 1.8em;
            margin-bottom: 15px;
            color: #555;
        }
        p {
            font-size: 1.2em;
            line-height: 1.6;
            color: #333;
        }
    </style>
</head>
<body>

<header>
    <h1>Welcome to My Homepage</h1>
</header>

<div class="content">
<!--to add content according to us using section-->
   @yield('content')
<!-- used to add javascript -->
   @stack('scripts')
</div>

</body>
</html>
