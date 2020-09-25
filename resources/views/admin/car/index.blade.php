<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      Car List
    </h2>
    <div class="flex flex-grow justify-end">
      <a class="btn btn-primary mx-2" href="{{ route('cars.create') }}">
        Create Car
      </a>
    </div>
  </x-slot>
  
  <div class="container">
    <div class="card card-body shadow border-0 rounded-lg">
      <livewire:car.car-browse />
    </div>
  </div>
</x-app-layout>
