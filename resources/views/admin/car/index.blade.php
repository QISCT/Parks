<x-app-layout>
 <x-slot name="header">
  <nav aria-label="breadcrumb">
   <ol class="breadcrumb">
    <li class="breadcrumb-item">
     <a href="{{ route('dashboard') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">
     Inventory
    </li>
   </ol>
  </nav>
  <h1>
   Inventory
  </h1>
  <a class="btn btn-primary" href="{{ route('cars.create') }}">
   Create Car
  </a>
 </x-slot>
 <div class="card">
  <div class="card-header">
   <ul class="nav nav-tabs card-header-tabs" id="inventoryTabs" role="tablist">
    <li class="nav-item" role="presentation">
     <a class="nav-link active" id="availCars-tab" data-toggle="tab" href="#availCars" role="tab" aria-controls="availCars" aria-selected="true">Available For Sale</a>
    </li>
    <li class="nav-item" role="presentation">
     <a class="nav-link" id="pendingCars-tab" data-toggle="tab" href="#pendingCars" role="tab" aria-controls="pendingCars" aria-selected="false">Pending Deals</a>
    </li>
    <li class="nav-item" role="presentation">
     <a class="nav-link" id="consignedCars-tab" data-toggle="tab" href="#consignedCars" role="tab" aria-controls="consignedCars" aria-selected="false">On Consignment</a>
    </li>
   </ul>
  </div>
  <div class="card-body">
   <div class="tab-content" id="inventoryTabsContent">
    <div class="tab-pane fade show active" id="availCars" role="tabpanel" aria-labelledby="availCars-tab">
     <livewire:car.car-browse />
    </div>
    <div class="tab-pane fade" id="pendingCars" role="tabpanel" aria-labelledby="pendingCars-tab">
     <code>Content currently unavailable</code>
    </div>
    <div class="tab-pane fade" id="consignedCars" role="tabpanel" aria-labelledby="consignedCars-tab">
     <code>Content currently unavailable</code>
    </div>
   </div>
  </div>
 </div>
</x-app-layout>

