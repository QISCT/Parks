<x-app-layout>
 <x-slot name="header">
  <h2 class="font-semibold text-xl text-gray-800 leading-tight">
   View Car
  </h2>
 </x-slot>

 <div class="container">
  <div class="card card-body shadow border-0 rounded-lg">
   <div class="flex justify-between mb-4">
    <a class="btn btn-secondary" href="{{ route('cars.index') }}">
     List
    </a>
    <a class="btn btn-warning" href="{{ route('cars.edit', $car) }}">
     Edit
    </a>
   </div>
   <div class="form-group">
    <label class="font-bold">VIN</label>
    <div>{{ $car->vin }}</div>
   </div>
   <div class="form-group">
    <label class="font-bold">Year / OEM / Model</label>
    <div>{{ $car->year }} {{ $car->oem->name }} {{ $car->model }}</div>
   </div>
   <div class="form-group">
    <label class="font-bold">MFG / Type</label>
    <div>{{ $car->mfg->name }} {{ $car->type->name ?? 'N/A' }}</div>
   </div>
   <div class="form-group">
    <label class="font-bold">Engine</label>
    <div>{{ $car->engine->name ?? 'N/A' }}</div>
   </div>
   <div class="form-group">
    <label class="font-bold">Transmission</label>
    <div>{{ $car->transmission->name ?? 'N/A' }}</div>
   </div>
   <div class="form-group">
    <label class="font-bold">Drivetrain</label>
    <div>{{ $car->drivetrain->name ?? 'N/A' }}</div>
   </div>
   <div class="form-group">
    <label class="font-bold">Fuel</label>
    <div>{{ $car->fuel->name ?? 'N/A' }}</div>
   </div>
   <div class="form-group">
    <label class="font-bold">Lot</label>
    <div>{{ $car->lot->name ?? 'N/A' }}</div>
   </div>
   <livewire:car.instance-browse :car="$car" />
  </div>
 </div>
</x-app-layout>
