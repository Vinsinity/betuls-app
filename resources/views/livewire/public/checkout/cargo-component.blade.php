<div class="row">
@foreach($cargos as $cargo)
    <div class="col-md-4 col-lg-4 col-sm-4">

        <label class="w-100">
            <input type="radio" name="cargo" wire:change="cargo({{$cargo}})" class="card-input-element" />

            <div class="card card-default card-input">
                <div class="card-header">{{ $cargo->name }}</div>
                <div class="card-body">
                    {{ $cargo->price }}
                </div>
            </div>

        </label>

    </div>
@endforeach
</div>
