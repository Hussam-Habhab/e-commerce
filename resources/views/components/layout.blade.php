<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="bg-slate-500 ">
    <x-nav></x-nav>
    @if (session('success'))
         <div role="alert" class="my-8 rounded-md border-l-4 border-green-300 bg-green-100 p-4 text-green-700 opacity-75">
            <p>Success!</p>
            <p>{{session('success')}}</p>
        </div>
         @endif

         @if (session('error'))
         <div role="alert" class="my-8 rounded-md border-l-4 border-red-300 bg-red-100 p-4 text-red-700 opacity-75">
            <p>Error!</p>
            <p>{{session('error')}}</p>
        </div>
         @endif

        <div class="mx-auto max-w-4xl">
    {{ $slot }}

        </div>
    <x-footer></x-footer>
</body>
</html>