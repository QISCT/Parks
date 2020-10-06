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
  
  
   <div class="form-group">
     <label for="cost_orig">Cost Original</label>
     <div>{{ $instance->cost_orig }}</div>
   </div>
   <div class="form-group">
     <label for="cost_est">Cost Estimate</label>
     <div>{{ $instance->cost_est }}</div>
   </div>
   <div class="form-group">
     <label for="cost_repair">Cost Repair</label>
     <div>{{ $instance->cost_repair }}</div>
   </div>
   <div class="form-group">
     <label for="cost_floor">Cost Floor</label>
     <div>{{ $instance->cost_floor }}</div>
   </div>
   <div class="form-group">
     <label for="cost_total">Cost Total</label>
     <div>{{ $instance->cost_total }}</div>
   </div>
   <div class="form-group">
     <label for="cost_sugg">Cost Suggested</label>
     <div>{{ $instance->cost_sugg }}</div>
   </div>
  
   <div class="form-group">
     <label for="status">Status</label>
     <div>{{ $instance->status }}</div>
   </div>
   <div class="form-group">
     <label for="cond">Condition</label>
     <div>{{ $instance->cond }}</div>
   </div>
   
   
 </div>
</x-app-layout>
