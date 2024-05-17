<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>layout</title>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>
<body>
   <div>
    @session('message')
        <div>
            {{ session('message') }}
        </div>
    @endsession
   </div>
    <h1>
        {{-- for push data when use layout component --}}
        {{ $slot }}     
    </h1>
</body>
</html>