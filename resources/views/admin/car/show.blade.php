<x-app-layout>
 <x-slot name="header">
  <nav aria-label="breadcrumb">
   <ol class="breadcrumb">
    <li class="breadcrumb-item">
     <a href="{{ route('dashboard') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
     <a href="{{ route('cars.index') }}">Inventory</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">
     VIN #: {{ $car->vin }}
    </li>
   </ol>
  </nav>
  <h1>
   View Car
  </h1>
  <div class="d-flex justify-content-between align-items-center">
   <a class="btn btn-warning" href="{{ route('cars.edit', $car) }}">
    Edit Vehicle
   </a>
   <a class="btn btn-outline-secondary" href="{{ route('cars.index') }}">
    View Inventory
   </a>
  </div>
 </x-slot>

 <div class="row">
  <div class="col-lg-5 col-xl-4">
   <div class="card">
    <div class="bg-gradient-secondary d-flex align-items-center justify-content-center" style="height:250px">
     <span class="display-3 text-white-50">IMAGE</span>
    </div>
    <div class="card-body pb-1 pt-1">
     <ul class="list-group list-group-flush">
      <li class="list-group-item pl-2 pr-2 justify-content-between flex-wrap d-sm-flex">
       <label class="mb-0 font-weight-bold">VIN</label>
       <div>{{ $car->vin }}</div>
      </li>
      <li class="list-group-item pl-2 pr-2 justify-content-between flex-wrap d-sm-flex">
       <label class="mb-0 font-weight-bold">Year / OEM / Model</label>
       <div>{{ $car->year }} {{ $car->oem->name }} {{ $car->model }}</div>
      </li>
      <li class="list-group-item pl-2 pr-2 justify-content-between flex-wrap d-sm-flex">
       <label class="mb-0 font-weight-bold">MFG / Type</label>
       <div>{{ $car->mfg->name }} {{ $car->type->name ?? 'N/A' }}</div>
      </li>
      <li class="list-group-item pl-2 pr-2 justify-content-between flex-wrap d-flex">
       <label class="mb-0 font-weight-bold">Engine</label>
       <div>{{ $car->engine->name ?? 'N/A' }}</div>
      </li>
      <li class="list-group-item pl-2 pr-2 justify-content-between flex-wrap d-flex">
       <label class="mb-0 font-weight-bold">Transmission</label>
       <div>{{ $car->transmission->name ?? 'N/A' }}</div>
      </li>
      <li class="list-group-item pl-2 pr-2 justify-content-between flex-wrap d-flex">
       <label class="mb-0 font-weight-bold">Drivetrain</label>
       <div>{{ $car->drivetrain->name ?? 'N/A' }}</div>
      </li>
      <li class="list-group-item pl-2 pr-2 justify-content-between flex-wrap d-flex">
       <label class="mb-0 font-weight-bold">Fuel</label>
       <div>{{ $car->fuel->name ?? 'N/A' }}</div>
      </li>
      <li class="list-group-item pl-2 pr-2 justify-content-between flex-wrap d-flex">
       <label class="mb-0 font-weight-bold">Lot</label>
       <div>{{ $car->lot->name ?? 'N/A' }}</div>
      </li>
     </ul>
    </div>
   </div>
  </div>
  <div class="col-lg">
   <div class="card">
    <livewire:car.instance-browse :car="$car" />
   </div>
  </div>
 </div>
</x-app-layout>
