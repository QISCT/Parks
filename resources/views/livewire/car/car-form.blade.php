<div>
  <form id="update-form" wire:submit.prevent="save">
    <div class="form-label-group">
      <input type="text" id="vin" wire:model="vin" class="form-control @error('vin') is-invalid @enderror" placeholder="Car VIN" autofocus>
      <label for="vin">Car VIN</label>
      @error('vin') <div class="invalid-feedback"><span>{{ $message }}</span></div> @enderror
    </div>
    <div class="form-label-group">
      <input type="text" id="year" wire:model="year" class="form-control @error('year') is-invalid @enderror" placeholder="Car Year">
      <label for="year">Car Year</label>
      @error('year') <div class="invalid-feedback"><span>{{ $message }}</span></div> @enderror
    </div>
    <div class="form-label-group">
      <select id="mfg" wire:model="mfg" class="form-control @error('mfg') is-invalid @enderror" data-chosen="{{ $mfg }}" onchange="this.dataset.chosen=this.value; ">
        <option value="">----</option>
        @foreach($mfg_options as $option)
          <option value="{{ $option->id }}">{{ $option->name }}</option>
        @endforeach
      </select>
      <label for="mfg">Car MFG</label>
      @error('mfg') <div class="invalid-feedback"><span>{{ $message }}</span></div> @enderror
    </div>
    <div class="form-label-group">
      <select id="oem" wire:model="oem" class="form-control @error('oem') is-invalid @enderror" data-chosen="{{ $oem }}" onchange="this.dataset.chosen=this.value; ">
        <option value="">----</option>
        @foreach($oem_options as $option)
          <option value="{{ $option->id }}">{{ $option->name }}</option>
        @endforeach
      </select>
      <label for="oem">Car OEM</label>
      @error('oem') <div class="invalid-feedback"><span>{{ $message }}</span></div> @enderror
    </div>
    <div class="form-label-group">
      <input type="text" id="model" wire:model="model" class="form-control @error('model') is-invalid @enderror" placeholder="Car Model">
      <label for="model">Car Model</label>
      @error('model') <div class="invalid-feedback"><span>{{ $message }}</span></div> @enderror
    </div>
  </form>
</div>
