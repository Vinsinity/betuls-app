<div class="col-md-3 mb-3">
    <label for="neighborhood_id">Neighborhood</label>
    <select wire:model="neighborhood_id" class="custom-select d-block w-100" id="neighborhood_id" name="neighborhood_id" required="">
        <option value="">Choose...</option>
        @foreach($neighborhoods as $neighborhood)
            <option value="{{ $neighborhood->id }}">{{ $neighborhood->name }}</option>
        @endforeach
    </select>
    <div class="invalid-feedback"> Zip code required. </div>
</div>
