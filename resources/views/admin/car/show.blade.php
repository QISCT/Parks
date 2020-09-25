<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      View Car
    </h2>
    <div class="flex flex-grow justify-end">
      <a class="btn btn-secondary mx-2" href="{{ route('cars.index') }}">
        List
      </a>
      <a class="btn btn-warning mx-2" href="{{ route('cars.edit', $car) }}">
        Edit Car
      </a>
    </div>
  </x-slot>
  
  <div>
    <div class="max-w-7xl mx-auto py-8 sm:px-6 lg:px-8">
      
      <x-section>
        <x-slot name="title">
          Car Information
        </x-slot>
        
        <x-slot name="description">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec tellus porta lectus vulputate suscipit. In malesuada rutrum vehicula. Vivamus egestas id orci in condimentum. Cras laoreet nisi sit amet blandit porttitor. Mauris dignissim sapien ac nibh rutrum, sed consequat purus accumsan. Sed non lorem vitae massa ullamcorper consectetur.
        </x-slot>
        
        <x-slot name="content">
          <div class="grid grid-cols-6 gap-6">
            <div class="col-span-3 lg:col-span-2">
              <label class="font-bold">VIN</label>
              <div>{{ $car->vin }}</div>
            </div>
            <div class="col-span-3 lg:col-span-2">
              <label class="font-bold">Year / OEM / Model</label>
              <div>{{ $car->year }} {{ $car->oem->name }} {{ $car->model }}</div>
            </div>
            <div class="col-span-3 lg:col-span-2">
              <label class="font-bold">MFG / Type</label>
              <div>{{ $car->mfg->name }} {{ $car->type->name ?? 'N/A' }}</div>
            </div>
            <div class="col-span-3 lg:col-span-2">
              <label class="font-bold">Engine</label>
              <div>{{ $car->engine->name ?? 'N/A' }}</div>
            </div>
            <div class="col-span-3 lg:col-span-2">
              <label class="font-bold">Transmission</label>
              <div>{{ $car->transmission->name ?? 'N/A' }}</div>
            </div>
            <div class="col-span-3 lg:col-span-2">
              <label class="font-bold">Drivetrain</label>
              <div>{{ $car->drivetrain->name ?? 'N/A' }}</div>
            </div>
            <div class="col-span-3 lg:col-span-2">
              <label class="font-bold">Fuel</label>
              <div>{{ $car->fuel->name ?? 'N/A' }}</div>
            </div>
            <div class="col-span-3 lg:col-span-2">
              <label class="font-bold">Lot</label>
              <div>{{ $car->lot->name ?? 'N/A' }}</div>
            </div>
          </div>
        </x-slot>
      </x-section>
  
      <x-jet-section-border />
  
      <x-section>
        <x-slot name="title">
          Instances
        </x-slot>
    
        <x-slot name="description">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec tellus porta lectus vulputate suscipit. In malesuada rutrum vehicula. Vivamus egestas id orci in condimentum. Cras laoreet nisi sit amet blandit porttitor. Mauris dignissim sapien ac nibh rutrum, sed consequat purus accumsan. Sed non lorem vitae massa ullamcorper consectetur.
        </x-slot>
    
        <x-slot name="content">
          <livewire:car.instance-browse :car="$car" />
        </x-slot>
      </x-section>
    
    </div>
  </div>
</x-app-layout>
