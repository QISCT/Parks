<?php

namespace App\Http\Livewire\Car;

use App\Models\Car;
use App\Models\CarInstance;
use Illuminate\Validation\Rule;
use Livewire\Component;

class InstanceUpdate extends InstanceCreate
{
    public CarInstance $instance;

    public function mount()
    {
        parent::mount(...func_get_args());
        $this->instance = (func_get_args()[1] instanceof CarInstance) ? func_get_args()[1] : new CarInstance();
        $this->received_on = $this->instance->received_on;
        $this->received_on = $this->instance->received_on;
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

        $this->instance->update([
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
