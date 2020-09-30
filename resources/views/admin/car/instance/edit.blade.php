<x-app-layout>
 <x-slot name="header">
  <h2 class="font-semibold text-xl text-gray-800 leading-tight">
   Edit Instance
  </h2>
 </x-slot>

 <div class="card card-body shadow border-0 rounded-lg">
  <livewire:car.instance-update :car="$car" :instance="$instance"/>
  <div class="flex justify-between mt-8">
   <a class="btn btn-secondary" href="{{ url()->previous() }}">
    Cancel
   </a>
   <button type="submit" form="update-form" class="btn btn-info">
    Update Instance
   </button>
  </div>
 </div>
</x-app-layout>
