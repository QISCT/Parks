<x-app-layout>
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
  </div>
</x-app-layout>
