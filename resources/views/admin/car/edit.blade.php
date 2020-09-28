<x-app-layout>
<<<<<<< Updated upstream
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      Edit Car
    </h2>
    <div class="flex flex-grow justify-end">
      <a class="btn btn-secondary mx-2" href="{{ route('cars.index') }}">
        List
      </a>
      <a class="btn btn-info mx-2" href="{{ route('cars.show', $car) }}">
        View Car
      </a>
    </div>
  </x-slot>
  
  <div>
    <div class="max-w-7xl mx-auto py-8 sm:px-6 lg:px-8">
      <livewire:car.car-update :car="$car"/>
    </div>
=======
 <x-slot name="header">
  <h2 class="font-semibold text-xl text-gray-800 leading-tight">
   Edit Car
  </h2>
 </x-slot>

 <div class="card card-body shadow border-0 rounded-lg">
  <livewire:car.car-update :car="$car"/>
  <div class="flex justify-between mt-8">
   <a class="btn btn-secondary" href="{{ url()->previous() }}">
    Cancel
   </a>
   <button type="submit" form="update-form" class="btn btn-info">
    Update Car
   </button>
>>>>>>> Stashed changes
  </div>
</x-app-layout>
