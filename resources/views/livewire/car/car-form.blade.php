<x-form-section submit="save">
  <x-slot name="title">
    Car Information
  </x-slot>
  
  <x-slot name="description">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec tellus porta lectus vulputate suscipit. In malesuada rutrum vehicula. Vivamus egestas id orci in condimentum. Cras laoreet nisi sit amet blandit porttitor. Mauris dignissim sapien ac nibh rutrum, sed consequat purus accumsan. Sed non lorem vitae massa ullamcorper consectetur.
  </x-slot>
  
  <x-slot name="form">
    <div class="col-span-6 sm:col-span-4">
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
        <select id="type" wire:model="type" class="form-control @error('type') is-invalid @enderror" data-chosen="{{ $type }}" onchange="this.dataset.chosen=this.value; ">
          <option value="">----</option>
          @foreach($type_options as $option)
            <option value="{{ $option->id }}">{{ $option->name }}</option>
          @endforeach
        </select>
        <label for="type">Car Type</label>
        @error('type') <div class="invalid-feedback"><span>{{ $message }}</span></div> @enderror
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
  
      <div class="form-label-group">
        <select id="engine" wire:model="engine" class="form-control @error('engine') is-invalid @enderror" data-chosen="{{ $engine }}" onchange="this.dataset.chosen=this.value; ">
          <option value="">----</option>
          @foreach($engine_options as $option)
            <option value="{{ $option->id }}">{{ $option->name }}</option>
          @endforeach
        </select>
        <label for="engine">Car Engine</label>
        @error('engine') <div class="invalid-feedback"><span>{{ $message }}</span></div> @enderror
      </div>
      <div class="form-label-group">
        <select id="transmission" wire:model="transmission" class="form-control @error('transmission') is-invalid @enderror" data-chosen="{{ $transmission }}" onchange="this.dataset.chosen=this.value; ">
          <option value="">----</option>
          @foreach($transmission_options as $option)
            <option value="{{ $option->id }}">{{ $option->name }}</option>
          @endforeach
        </select>
        <label for="transmission">Car Transmission</label>
        @error('transmission') <div class="invalid-feedback"><span>{{ $message }}</span></div> @enderror
      </div>
      <div class="form-label-group">
        <select id="drivetrain" wire:model="drivetrain" class="form-control @error('drivetrain') is-invalid @enderror" data-chosen="{{ $drivetrain }}" onchange="this.dataset.chosen=this.value; ">
          <option value="">----</option>
          @foreach($drivetrain_options as $option)
            <option value="{{ $option->id }}">{{ $option->name }}</option>
          @endforeach
        </select>
        <label for="drivetrain">Car Drivetrain</label>
        @error('drivetrain') <div class="invalid-feedback"><span>{{ $message }}</span></div> @enderror
      </div>
      <div class="form-label-group">
        <select id="fuel" wire:model="fuel" class="form-control @error('fuel') is-invalid @enderror" data-chosen="{{ $fuel }}" onchange="this.dataset.chosen=this.value; ">
          <option value="">----</option>
          @foreach($fuel_options as $option)
            <option value="{{ $option->id }}">{{ $option->name }}</option>
          @endforeach
        </select>
        <label for="fuel">Car Fuel</label>
        @error('fuel') <div class="invalid-feedback"><span>{{ $message }}</span></div> @enderror
      </div>
      <div class="form-label-group">
        <select id="lot" wire:model="lot" class="form-control @error('lot') is-invalid @enderror" data-chosen="{{ $lot }}" onchange="this.dataset.chosen=this.value; ">
          <option value="">----</option>
          @foreach($lot_options as $option)
            <option value="{{ $option->id }}">{{ $option->name }}</option>
          @endforeach
        </select>
        <label for="lot">Car Lot</label>
        @error('lot') <div class="invalid-feedback"><span>{{ $message }}</span></div> @enderror
      </div>
    </div>
  </x-slot>
  
  <x-slot name="actions">
    <x-jet-action-message class="mr-3" on="saved">
      Saved.
    </x-jet-action-message>
    
    <x-jet-button>
      Save
    </x-jet-button>
  </x-slot>
</x-form-section>
