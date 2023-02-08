@if(isset($user->addresses))
    @if(count($user->addresses) > 0)
        <div class="row">
            @foreach($user->addresses as $address)
                <div class="col-md-4 col-lg-4 col-sm-4">

                    <label>
                        <input type="radio" name="address" wire:change="addressSelected({{ $address }})" class="card-input-element" />

                        <div class="card card-default card-input">
                            <div class="card-header">{{ $address->title }}</div>
                            <div class="card-body">
                                {{ $address->city->name }} - {{ $address->county->name }}<br>
                                {{ $address->address }}
                            </div>
                        </div>

                    </label>

                </div>
            @endforeach
        </div>
    @else
        <div>
            <h4 class="mb-3">Billing address</h4>
            <form wire:submit.prevent="addAddress()">
                <div class="mb-3">
                    <label for="title">Title</label>
                    <input type="text" wire:model="title" class="form-control" id="title" placeholder="Title" required="">
                    <div class="invalid-feedback" style="width: 100%;"> Address title is required. </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">First name</label>
                        <input type="text" wire:model="name" class="form-control" id="name" placeholder="" value="" required="">
                        <div class="invalid-feedback"> Valid first name is required. </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Last name</label>
                        <input type="text" wire:model="surname" class="form-control" id="surname" placeholder="" value="" required="">
                        <div class="invalid-feedback"> Valid last name is required. </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="phone">Phone</label>
                    <input type="tel" wire:model="phone" class="form-control" id="phone" name="phone" placeholder="555XXXXXX">
                    <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                </div>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="city_id">City</label>
                        <select wire:model="city_id" wire:change="citySelected()" class="custom-select d-block w-100" id="city_id" name="city_id" required="">
                            <option selected>Choose...</option>
                            @foreach($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback"> Please select a valid city. </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="county_id">County</label>
                        <select wire:model="county_id" wire:change="countySelected()" class="custom-select d-block w-100" id="county_id" name="county_id" required="">
                            <option value="">Choose...</option>
                            @foreach($this->counties as $county)
                                <option value="{{ $county->id }}">{{ $county->name }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback"> Please provide a valid state. </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="district_id">District</label>
                        <select wire:model="district_id" wire:change="districtSelected()" class="custom-select d-block w-100" id="district_id" name="district_id" required="">
                            <option value="">Choose...</option>
                            @foreach($this->districts as $district)
                                <option value="{{ $district->id }}">{{ $district->name }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback"> Zip code required. </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="neighborhood_id">Neighborhood</label>
                        <select wire:model="neighborhood_id" class="custom-select d-block w-100" id="neighborhood_id" name="neighborhood_id" required="">
                            <option value="">Choose...</option>
                            @foreach($this->neighborhoods as $neighborhood)
                                <option value="{{ $neighborhood->id }}">{{ $neighborhood->name }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback"> Zip code required. </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address">Address</label>
                    <input type="text" wire:model="address" class="form-control" id="address" placeholder="Enter your address.." required="">
                    <div class="invalid-feedback"> Please enter your shipping address. </div>
                </div>
                <hr class="mb-4">
                {{--            <div class="row">--}}
                {{--                <div class="col-md-12 mb-3">--}}
                {{--                    <label for="name">Address name</label>--}}
                {{--                    <input type="text" wire:model="name" class="form-control" required>--}}
                {{--                </div>--}}
                {{--            </div>--}}
                {{--            <div class="mb-3">--}}
                {{--                <label for="address">Address</label>--}}
                {{--                <input type="text" wire:model="address" class="form-control" required>--}}
                {{--                <div class="invalid-feedback"> Please enter your shipping address. </div>--}}
                {{--            </div>--}}
                <button class="btn btn-primary" type="submit">Save Address</button>
            </form>
        </div>
    @endif

@endif
