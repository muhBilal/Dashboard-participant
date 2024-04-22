<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    @stack('js')
</head>
<body>

@include('layouts.navbar')
<div class="p-4 sm:ml-64 bg-gray-100">
    <div class="p-4 border-dashed rounded-lg dark:border-gray-700 mt-14">
        @yield('content')
    </div>
</div>

</body>
</html>
