<x-app-layout>
<<<<<<< Updated upstream
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      Create Car
    </h2>
  </x-slot>
  
  <div>
    <div class="max-w-7xl mx-auto py-8 sm:px-6 lg:px-8">
      <livewire:car.car-create />
    </div>
=======
 <x-slot name="header">
  <h2 class="font-semibold text-xl text-gray-800 leading-tight">
   Create Car
  </h2>
 </x-slot>

 <div class="card card-body shadow border-0 rounded-lg">
  <livewire:car.car-create />
  <div class="flex justify-between mt-8">
   <a class="btn btn-secondary" href="{{ url()->previous() }}">
    Cancel
   </a>
   <button type="submit" form="update-form" class="btn btn-info">
    Create Car
   </button>
>>>>>>> Stashed changes
  </div>
</x-app-layout>
