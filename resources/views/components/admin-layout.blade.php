<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
    @livewireStyles
</head>
<body class="bg-slate-500 ">
    <div class="h-screen w-screen flex">
        <div class="flex  justify-start bg-slate-800 flex-col p-10 pt-28 text-lg text-white h-screen  ">
            {{-- <a href="{{route('auth.create')}}">Sign in</a>  fixed top-0 left-0 --}} 
            <ul>
                @auth
                <li>
                    <a href="#">{{auth()->user()->first_name ?? 'Anynomus'}}</a>
                </li>
                
                <li>
                    <form action="{{route('auth.destroy')}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>Logout</button>
                    </form>
                </li>
                @else
                <a href="{{route('auth.create')}}">Sigh in</a>
                @endauth
            </ul>
            <h2>--------------------------------</h2>
        <ul >
            
                
            
            <li class="mb-7">
              <a class="nav-link active" href="{{route('products.index')}}">Products</a>
            </li>
            
            
            <li class="mb-7">
              <a class="nav-link disabled" href="{{route('category.create')}}"> Category</a>
            </li>
            <li class="mb-7">
              <a class="nav-link disabled" href="#">Categories </a>
            </li>
            <li class="mb-7">
              <a class="nav-link disabled" href="#">Labels</a>
            </li>
          </ul>
    </div>
    
      <div class="w-full">
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

            {{ $slot }}
    
      </div>
    </div>
    
{{-- 
        <div class="mx-auto max-w-4xl">
    {{ $slot }}

        </div> --}}
        @livewireScripts
</body>
</html>