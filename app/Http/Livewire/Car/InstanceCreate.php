<?php

namespace App\Http\Livewire\Car;

use App\Models\Car;
use Illuminate\Validation\Rule;
use Livewire\Component;

class InstanceCreate extends Component
{
    public Car $car;
    public $received_on = null;
    public $sold_on = null;

    public function mount()
    {
        $this->car = (func_get_args()[0] instanceof Car) ? func_get_args()[0] : new Car();
    }

    public function updated($propName)
    {
        $this->validateOnly($propName, $this->getModelValidation());
    }

    protected function getModelValidation()
    {
        return [
            'received_on' => 'required|date|after:1970.01.01',
            'sold_on' => 'nullable|date|after:received_on',
        ];
    }

    public function save()
    {
        $this->validate($this->getModelValidation());

        $this->car->car_instances()->create([
            'received_on' => $this->received_on,
            'sold_on' => $this->sold_on,
        ]);

        return redirect()->to(route('cars.show', $this->car));
    }

    public function render()
    {
        return view('livewire.car.instance-form');
    }
}
