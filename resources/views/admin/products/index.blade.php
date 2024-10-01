<x-admin-layout>
<x-card class="w-1/2 mx-auto">
    @forelse ($products as $product)

    <p>name: {{$product->name}}</p>
    <p>price: {{$product->price}}</p>
    <p>details: {{$product->details}}</p>
    <p>cost: {{$product->cost}}</p>
    <p>quantity: {{$product->quantity}}</p>
    <p>category: {{$product->category->name}}</p>
        <hr>
        <div class="mt-6">
            <a class=" border border-teal-500 p-2 bg-teal-600 rounded-md " href="{{route('products.edit',$product)}}">edit Product</a>
        </div>

        <div class="mt-6">
            
            <form action="{{route('products.destroy',$product)}}" method="POST">
                @csrf
                @method('DELETE')
                <x-button class=" border border-teal-500 p-2 bg-teal-600 rounded-md ">Delete</x-button>

                </form>
        </div>
    @empty
        
    
        <h2>NO Products bro order some what are u waitting for </h2>
        {{-- @dd($products) --}}
        
        
    @endforelse
</x-card>
<div class="mt-6">
    <a class=" border border-teal-500 p-2 bg-teal-600 rounded-md " href="{{route('products.create')}}">Add Product</a>
</div>


</x-admin-layout>