<x-admin-layout>
    <div class="">
        <x-card class="flex justify-center items-center flex-col  w-11/12 mx-auto
                 mt-5">
            <h3>Create New Category :></h3>
            <form action="{{route('category.store')}}" method="POST">
                @csrf
                <div class="my-5">
                    <label for="name">Name</label>
                    <x-text-input name='name'></x-text-input>
                </div>
                <div class="my-5">
                    <livewire:main-category  />
                    {{-- @livewire('sub-category') --}}


                    {{-- <label for="parent_id">Category</label>

                    <select name="parent_id" id="parent_id" class="'w-full rounded-md border-0 py-1.5 px-2.5 text-sm ring-1 placeholder:text-slate-400 focus:ring-2">
                        <option value="null">add to Category</option>
                        @forelse ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                             --}}

                        {{-- <livewire:category-select />  --}}
                        {{-- @empty
                        <option value="null">there is no yet</option>
                            
                        @endforelse --}}

                    {{-- </select> --}}
                </div>
                
                

                <x-button class=" bg-teal-500 rounded-md border-lime-400
                 border p-2 ">Create</x-button>
                
               

            </form>
        </x-card>
    </div>
    
    
    </x-admin-layout>