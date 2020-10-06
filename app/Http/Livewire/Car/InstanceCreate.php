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
    public $cost_orig = null;
    public $cost_est = null;
    public $cost_repair = null;
    public $cost_floor = null;
    public $cost_total = null;
    public $cost_sugg = null;
    public $cond = null;
    public $status = null;

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
            'cost_orig' => 'nullable|numeric',
            'cost_est' => 'nullable|numeric',
            'cost_repair' => 'nullable|numeric',
            'cost_floor' => 'nullable|numeric',
            'cost_total' => 'nullable|numeric',
            'cost_sugg' => 'nullable|numeric',
        ];
    }

    public function save()
    {
        $this->validate($this->getModelValidation());

        $this->car->car_instances()->create([
            'received_on' => $this->received_on,
            'sold_on' => $this->sold_on,
            'cost_orig' => $this->cost_orig,
            'cost_est' => $this->cost_est,
            'cost_repair' => $this->cost_repair,
            'cost_floor' => $this->cost_floor,
            'cost_total' => $this->cost_total,
            'cost_sugg' => $this->cost_sugg,
            'cond' => $this->cond,
            'status' => $this->status,
        ]);

        return redirect()->to(route('cars.show', $this->car));
    }

    public function render()
    {
        return view('livewire.car.instance-form');
    }
}
