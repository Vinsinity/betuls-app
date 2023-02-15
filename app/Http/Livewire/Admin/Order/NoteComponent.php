<?php

namespace App\Http\Livewire\Admin\Order;

use App\Models\OrderNote;
use Auth;
use Livewire\Component;

class NoteComponent extends Component
{
    public $order;
    public $note;

    protected $rules = [
        'note' => 'required|min:3'
    ];

    public function render()
    {
        $notes = OrderNote::where('order_id', $this->order->id)->get();
        return view('livewire.admin.order.note-component', compact('notes'));
    }

    public function addNote()
    {
        $orderNote = new OrderNote();
        $orderNote->note = $this->note;
        $orderNote->author_id = Auth::guard('admin')->id();
        $orderNote->order_id = $this->order->id;
        $orderNote->save();
        $this->note = "";
    }

    public function delete($id)
    {
        OrderNote::destroy($id);
    }
}
