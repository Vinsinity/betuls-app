<div class="col-md-3 mb-3">
    <label for="district_id">District</label>
    <select wire:model="district_id" class="custom-select d-block w-100" id="district_id" name="district_id" required="">
        <option value="">Choose...</option>
        @foreach($districts as $district)
            <option value="{{ $district->id }}">{{ $district->name }}</option>
        @endforeach
    </select>
    <div class="invalid-feedback"> Zip code required. </div>
</div>
