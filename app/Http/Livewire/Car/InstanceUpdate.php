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
        $this->sold_on = $this->instance->sold_on;
        $this->cost_orig = $this->instance->cost_orig;
        $this->cost_est = $this->instance->cost_est;
        $this->cost_repair = $this->instance->cost_repair;
        $this->cost_floor = $this->instance->cost_floor;
        $this->cost_total = $this->instance->cost_total;
        $this->cost_sugg = $this->instance->cost_sugg;
        $this->cond = $this->instance->cond;
        $this->status = $this->instance->status;
    }

    public function updated($propName)
    {
        $this->validateOnly($propName, $this->getModelValidation());
    }

    public function save()
    {
        $this->validate($this->getModelValidation());

        $this->instance->update([
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
