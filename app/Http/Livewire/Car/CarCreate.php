<?php

namespace App\Http\Livewire\Car;

use App\Models\Car;
use App\Models\Mfg;
use App\Models\Oem;
use Livewire\Component;

class CarCreate extends Component
{
    public $vin;
    public $year;
    public $mfg;
    public $oem;
    public $model;

    public function updated($propName)
    {
        $this->validateOnly($propName, $this->getModelValidation());
    }

    protected function getModelValidation()
    {
        return [
            'vin' => ['required','min:6', 'unique:App\Models\Car,vin'],
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
        ]);

        return redirect()->to(route('cars.show', $car));
    }

    public function getOptions() {
        return [
            'oem_options' => Oem::orderBy('name')->get(),
            'mfg_options' => Mfg::orderBy('name')->get(),
        ];
    }

    public function render()
    {
        return view('livewire.car.car-form', $this->getOptions());
    }
}
