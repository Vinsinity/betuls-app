<div class="col-md-3 mb-3">
    <label for="county_id">County</label>
    <select wire:model="county_id" class="custom-select d-block w-100" id="county_id" name="county_id" required="">
        <option value="">Choose...</option>
        @foreach($counties as $county)
            <option value="{{ $county->id }}">{{ $county->name }}</option>
        @endforeach
    </select>
    <div class="invalid-feedback"> Please provide a valid state. </div>
</div>
