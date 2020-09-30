<x-app-layout>
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
  </div>
</x-app-layout>
