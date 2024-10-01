<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;

class SubCategory extends Component
{
    
    public $selectedCategory = null;      // Stores the selected parent category
    public $selectedSubcategory = null;   // Stores the selected subcategory
    public $subcategories = null;
    public $id = null;           // Stores the subcategories dynamically

    public function updatedSelectedCategory($value)
    {
        // Load subcategories when the parent category is selected
        $this->subcategories = Category::where('parent_id', $value)->get();
        
        if ($this->subcategories->isEmpty()) {
            $this->subcategories = null;  // Set subcategories to null if none found
        }else{
            $this->selectedCategory =$value;
        }
        
        // dd('worked');
        
        // Clear the selected subcategory whenever a new parent is chosen
        // $this->selectedSubcategory = null;
    }

    public function selected($category){
        dd($category);
        $this->selectedCategory = $category ;
    }
    public function handleCategoryChange($value){
        // dd($value);
        // $this->selectedCategory =  ;
        $this->updatedSelectedCategory($value);

    }
    // public function mount($id)
    // {
    //     $this->id = $id;
    // }

    public function render()
    {
        // Load only parent categories (categories with
        // dd($this->selectedCategory);
        // dd($this->id);
        if ($this->id) {
            return view('livewire.sub-category', [
                'categories' => Category::where('parent_id',$this->id)->get()
                    
                ]);
        } 

        
    }
}
