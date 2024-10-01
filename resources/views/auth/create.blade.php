<x-layout>
    <div class="mx-auto max-w-4xl">
        <h1 class="my-16 text-center text-4xl font-medium text-slate-600">
            Sigh in to your account
        </h1>
        <x-card>
            <form action="{{route('auth.store')}}" method="POST">
            @csrf
            
            <div>
                <label for="email" class="mb-2 block text-sm font-medium text-slate-900">E-mail</label>
                <x-text-input name='email'></x-text-input>
            </div>
            <div>
                <label for="password" class="mb-2 block text-sm font-medium text-slate-900">Password</label>
                <x-text-input name='password' type="password"></x-text-input>
            </div>
            <div class="mb-8 flex justify-between text-sm font-medium">
                <div class="flex items-center space-x-2">
                    <input type="checkbox" class="rounded-sm border border-slate-400 " name="remember">
                    <label for="remember">Remember me</label>
                </div>
                <div><a href="#" class="text-indigo-600 hover:underline">Forget Password</a></div>
                <div><a href="{{route('user.create')}}" class="text-indigo-600 hover:underline">Create Account</a></div>
            </div>
            <x-button class="w-full bg-green-50">Login</x-button>
            </form>
        </x-card>
    </div>
</x-layout>
    