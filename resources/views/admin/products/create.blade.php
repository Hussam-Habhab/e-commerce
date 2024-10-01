<x-admin-layout>
    <div class="">
        <x-card class="flex justify-center items-center flex-col  w-11/12 mx-auto
                 mt-5">
            <h3>Add New Product :></h3>
            <form action="{{route('products.store')}}" method="POST">
                @csrf
                <div class="my-5">
                    <label for="name">Name</label>
                    <x-text-input name='name'></x-text-input>
                </div>
                <div class="my-5">
                    <livewire:main-category  />

                </div>
                <div>
                    <label for="quantity">Quantity</label>
                    <x-text-input name='quantity'></x-text-input>

                </div>
                <div class="my-5">
                    <label for="price">Price</label>
                    <x-text-input name='price'></x-text-input>
                    
                </div>
                <div>
                    <label for="cost">Cost</label>
                    <x-text-input name='cost' type='number'></x-text-input>

                </div>
                <div class="my-5">
                    <label for="details">Details</label>
                    <x-text-input name='details' type='textarea'></x-text-input>

                </div>

                <x-button class=" bg-teal-500 rounded-md border-lime-400
                 border p-2 ">Add Product</x-button>
                
               

            </form>
        </x-card>
    </div>
    
    
    </x-admin-layout>