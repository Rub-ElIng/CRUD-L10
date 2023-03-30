<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link
      href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css"
      rel="stylesheet">
      <!--@vite('resources/css/app.css')-->
</head>
<body class="h-screen overflow-hidden flex items-center justify-center" style="background: #66b3ff;">
    @vite('resources/js/vue/main.js') 
    @yield('content')
</body>
</html>