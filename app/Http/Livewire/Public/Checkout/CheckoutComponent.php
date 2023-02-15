<?php

namespace App\Http\Livewire\Public\Checkout;

use App\Helpers\Helper;
use App\Models\Cargo;
use App\Models\City;
use App\Models\County;
use App\Models\District;
use App\Models\Neighborhood;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use App\Models\UserAddress;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;
use PHPUnit\TextUI\Help;

class CheckoutComponent extends Component
{
    public $cargo;
    public $userAddress;

    public $cargos;
    public $userAddresses;

    public $title;
    public $name;
    public $surname;

    public $city_id;
    public $district_id;
    public $county_id;
    public $neighborhood_id;

    public $address;
    public $phone;

    public $counties = [];
    public $districts = [];
    public $neighborhoods = [];

    protected $rules = ['cargo.*' => ['required']];

//    protected $listeners = ['cargo_select' => 'cargoSelected','address_select' => 'addressSelected'];
    public function mount()
    {
        $this->cargos = Cargo::all();
        $this->cargo = $this->cargos->first();
        $this->userAddresses = Auth::user()->addresses;
        $this->userAddress = $this->userAddresses->first();
    }

    public function render()
    {
//        $cargos = Cargo::all();
        $cities = City::all();
        $user = Auth::user();
        return view('livewire.public.checkout.checkout-component', compact('cities','user'));
    }

    public function cargoSelected(Cargo $cargo)
    {
        $this->cargo = $cargo;
    }

    public function addressSelected(UserAddress $address)
    {
        $this->userAddress = $address;
    }

    public function citySelected()
    {
        $this->counties = County::where('city_id',$this->city_id)->get();
    }

    public function countySelected()
    {
        $this->districts = District::where('county_id', $this->county_id)->get();
    }

    public function districtSelected()
    {
        $this->neighborhoods = Neighborhood::where('district_id', $this->district_id)->get();
    }

    public function addAddress() {
        $data['user_id'] = Auth::id();
        $data['title'] = $this->title;
        $data['name'] = $this->name;
        $data['surname'] = $this->surname;
        $data['city_id'] = $this->city_id;
        $data['county_id'] = $this->county_id;
        $data['district_id'] = $this->district_id;
        $data['neighborhood_id'] = $this->neighborhood_id;
        $data['address'] = $this->address;
        $data['phone_number'] = $this->phone;
        UserAddress::create($data);
        $this->emit('update_addresses');
    }

    public function makeOrder()
    {
//        dd(Cart::content());
        $order = new Order();
        $order->order_number = Helper::OrderNumberGenerate();
        $order->user_id = Auth::id();
        $order->user_address_id = $this->userAddress->id;
        $order->shipping_address_id = $this->userAddress->id;
        $order->cargo_id = $this->cargo->id;
        $order->total_price = Helper::calculatePriceForDatabase(str_replace('.','',str_replace(',','',Cart::total())));
        $order->subtotal_price = Helper::calculatePriceForDatabase(str_replace('.','',str_replace(',','',Cart::subtotal())));
        $order->total_quantity = Cart::count();
        $order->cargo_price = $this->cargo->price;
        $order->cart_content = Cart::content();
        $order->save();
        foreach (Cart::content() as $orderProduct) {
            if (Product::find($orderProduct->id)->decrement('stock', $orderProduct->qty)) {
                $op = new OrderProduct();
                $op->order_id = $order->id;
                $op->product_id = $orderProduct->id;
                $op->price = $orderProduct->price * 100;
                $op->quantity = $orderProduct->qty;
                $op->save();
            }
        }
        Cart::destroy();
        $this->redirect(route('account.profile'));
    }
}
