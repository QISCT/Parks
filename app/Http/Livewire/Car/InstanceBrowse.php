<?php

namespace App\Http\Livewire\Car;

use App\Models\Car;
use App\Models\CarInstance;
use Livewire\Component;
use Livewire\WithPagination;

class InstanceBrowse extends Component
{
    use WithPagination;

    public Car $car;

    const PAGE_LEN = 8;

    public function mount($car)
    {
        $this->car = $car;
    }

    protected function getModels()
    {
        $query = $this->car->car_instances();

        // Apply filtering here

        return $query->paginate(self::PAGE_LEN);
    }

    public function render()
    {
        return view('livewire.car.instance-browse', [
            'instances' => $this->getModels(),
        ]);
    }
}
