<div>
    <label for="category">Select Category:</label>
    <select wire:change="handleCategoryChange($event.target.value)"
         id="category_id" name="category_id" class="form-control">
    {{-- <select wire:model="selectedCategory" id="category" class="form-control"> --}}
        <option value="">Select a Category</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}" >{{ $category->name }}</option>
        @endforeach
    </select>
    {{-- @dd($selectedCategory) --}}

    @if ($subcategories !== null)
        {{-- @livewire('sub-category') --}}
        {{-- <dd>{{$selectedCategory}}</dd> --}}
        <livewire:sub-category :id="$selectedCategory"/>

    @endif
    {{-- @if ($subcategories->count() > 0)
        <label for="subcategory">Select Subcategory:</label>
        <select wire:model="selectedSubcategory" id="subcategory" class="form-control">
            <option value="">Select a Subcategory</option>
            @foreach($subcategories as $subcategory)
                <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
            @endforeach
        </select>
    @endif --}}
</div>

