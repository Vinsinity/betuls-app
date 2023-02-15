<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;

class ListComponent extends Component
{
    public $deleteId = '';
    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.category.list-component', compact('categories'));
    }
    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
//        dd('asdasd');
        Category::find($this->deleteId)->delete();
    }

}
