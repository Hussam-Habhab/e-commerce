<div class="w-full h-28 bg-slate-200 flex flex-col">
    <div class="h-3/5 bg-slate-400">
        <div class=" w-4/6 m-auto">
            <h1>ffff</h1>
        </div>
    </div>
    <div class=" bg-slate-200 h-full">
        <div class=" w-4/6 m-auto flex justify-between items-center">
            <div class=" flex-1">logo </div>
            <div class=" flex-1">search bar</div>
            <div class=" flex-1 flex justify-end items-center">
                <div class="w-20 h-full rounded-3xl  border border-yellow-100 justify-center flex items-center"> profile</div>
                <div>
                    {{-- <a href="{{route('auth.create')}}">Sign in</a> --}}
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
                </div>
            </div>
        
        </div>
    </div>
</div>