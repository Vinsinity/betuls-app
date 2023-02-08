<div class="col-md-3 mb-3">
    <label for="city_id">City</label>
    <select wire:model="city_id" class="custom-select d-block w-100" id="city_id" name="city_id" required="">
        <option selected>Choose...</option>
        @foreach($cities as $city)
            <option value="{{ $city->id }}">{{ $city->name }}</option>
        @endforeach
    </select>
    <div class="invalid-feedback"> Please select a valid city. </div>
</div>
