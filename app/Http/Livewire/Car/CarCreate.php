<?php

namespace App\Http\Livewire\Car;

use App\Models\Car;
use App\Models\CarType;
use App\Models\Drivetrain;
use App\Models\Engine;
use App\Models\Fuel;
use App\Models\Lot;
use App\Models\Mfg;
use App\Models\Oem;
use App\Models\Transmission;
use Livewire\Component;

class CarCreate extends Component
{
    public $vin;
    public $year;
    public $mfg;
    public $oem;
    public $model;
    public $type;
    public $engine;
    public $transmission;
    public $drivetrain;
    public $fuel;
    public $lot;

    public function updated($propName)
    {
        $this->validateOnly($propName, $this->getModelValidation());
    }

    protected function getModelValidation()
    {
        return [
            'vin' => ['required', 'min:6', 'unique:App\Models\Car,vin'],
            'year' => 'required|digits:4',
            'oem' => 'required',
            'mfg' => 'required',
            'model' => 'required',
        ];
    }

    public function save()
    {
        $this->validate($this->getModelValidation());

        $car = Car::create([
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

        return redirect()->to(route('cars.show', $car));
    }

    public function getOptions()
    {
        return [
            'oem_options' => Oem::orderBy('name')->get(),
            'mfg_options' => Mfg::orderBy('name')->get(),
            'type_options' => CarType::orderBy('name')->get(),
            'engine_options' => Engine::orderBy('name')->get(),
            'transmission_options' => Transmission::orderBy('name')->get(),
            'drivetrain_options' => Drivetrain::orderBy('name')->get(),
            'fuel_options' => Fuel::orderBy('name')->get(),
            'lot_options' => Lot::orderBy('name')->get(),
        ];
    }

    public function render()
    {
        return view('livewire.car.car-form', $this->getOptions());
    }
}
