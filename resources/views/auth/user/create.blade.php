<x-layout>
    <div class="mx-auto max-w-4xl">
        <h1 class="my-16 text-center text-4xl font-medium text-slate-600">
            Create an Account
        </h1>
        <x-card>
            <form action="{{route('user.store')}}" method="POST">
            @csrf

            <div>
                <label for="first_name" class="mb-2 block text-sm font-medium text-slate-900">First Name</label>
                <x-text-input name='first_name'></x-text-input>
            </div>
            <div>
                <label for="last_name" class="mb-2 block text-sm font-medium text-slate-900">Last Name</label>
                <x-text-input name='last_name'></x-text-input>
            </div>
            <div>
                <label for="phone_number" class="mb-2 block text-sm font-medium text-slate-900">Phone number</label>
                <x-text-input name='phone_number'></x-text-input>
            </div>
            
            <div>
                <label for="email" class="mb-2 block text-sm font-medium text-slate-900">E-mail</label>
                <x-text-input name='email'></x-text-input>
            </div>
            <div>
                <label for="password" class="mb-2 block text-sm font-medium text-slate-900">Password</label>
                <x-text-input name='password' type="password"></x-text-input>
            </div>

            <div>
                <label for="password_confirmation" class="mb-2 block text-sm font-medium text-slate-900">Confirm Password</label>
                <x-text-input name='password_confirmation' type="password"></x-text-input>
            </div>

            <div class="mb-8 flex justify-between text-sm font-medium">
                
                <div><a href="{{route('auth.create')}}" class="text-indigo-600 hover:underline">you have an account,Sign in</a></div>
            </div>
            <x-button class="w-full bg-green-50">create Account</x-button>
            </form>
        </x-card>
    </div>
</x-layout>
    