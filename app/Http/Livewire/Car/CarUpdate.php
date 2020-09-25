<?php

namespace App\Http\Livewire\Car;

use App\Models\Car;
use Illuminate\Validation\Rule;
use Livewire\Component;

class CarUpdate extends CarCreate
{
    public Car $car;

    public function mount()
    {
        $this->car = (func_get_args()[0] instanceof Car) ? func_get_args()[0] : new Car();
        if($this->car) {
            $this->car->refresh();
            $this->vin = $this->car->vin;
            $this->year = $this->car->year;
            $this->mfg = $this->car->mfg_id;
            $this->oem = $this->car->oem_id;
            $this->model = $this->car->model;
            $this->type = $this->car->type_id;
            $this->engine = $this->car->engine_id;
            $this->transmission = $this->car->transmission_id;
            $this->drivetrain = $this->car->drivetrain_id;
            $this->fuel = $this->car->fuel_id;
            $this->lot = $this->car->lot_id;
        }
    }

    protected function getModelValidation()
    {
        return [
            'vin' => ['required','min:6',Rule::unique('cars', 'vin')->ignore($this->car)],
            'year' => 'required|digits:4',
            'oem' => 'required',
            'mfg' => 'required',
            'model' => 'required',
        ];
    }

    public function save()
    {
        $this->validate($this->getModelValidation());

        $this->car->update([
            'vin' => $this->vin,
            'year' => $this->year,
            'mfg_id' => $this->mfg,
            'oem_id' => $this->oem,
            'model' => $this->model,
            'type_id' => $this->type,
            'engine_id' => $this->engine,
            'transmission_id' => $this->transmission,
            'drivetrain_id' => $this->drivetrain,
            'fuel_id' => $this->fuel,
            'lot_id' => $this->lot,
        ]);

        return redirect()->to(route('cars.show', $this->car));
    }
}
