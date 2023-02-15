<?php

namespace App\Http\Livewire\Public\Checkout;

use App\Models\City;
use App\Models\County;
use App\Models\District;
use App\Models\Neighborhood;
use App\Models\UserAddress;
use Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class CheckoutAddressComponent extends Component
{

    public $cartTotal;

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

    protected $listeners = ['update_addresses' => 'render'];

    public function render()
    {
        $user = Auth::user();
        $cities = City::all();
        $this->cartTotal = Cart::total();
        return view('livewire.public.checkout-address-component', compact('user','cities'));
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

    public function addressSelected(UserAddress $address)
    {
        $this->emit('address_select', $address);
    }
}
