<x-app-layout>
 <x-slot name="header">
  <h2 class="font-semibold text-xl text-gray-800 leading-tight">
   View Instance
  </h2>
 </x-slot>

 <div class="card card-body shadow border-0 rounded-lg">
  <div class="flex justify-between mb-4">
   <a class="btn btn-secondary" href="{{ route('cars.show', $car) }}">
    View Car
   </a>
   <a class="btn btn-warning" href="{{ route('cars.instances.edit', [$car, $instance]) }}">
    Edit Instance
   </a>
  </div>
  <div class="form-group">
   <label>Received On</label>
   <div>{{ $instance->received_on }}</div>
  </div>
  <div class="form-group">
   <label>Sold On</label>
   <div>{{ $instance->sold_on }}</div>
  </div>
 </div>
</x-app-layout>
