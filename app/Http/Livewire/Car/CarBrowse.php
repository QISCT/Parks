<?php

namespace App\Http\Livewire\Car;

use App\Models\Car;
use Livewire\Component;
use Livewire\WithPagination;

class CarBrowse extends Component
{
    use WithPagination;
    const PAGE_LEN = 8;

    protected function getCars()
    {
        $query = Car::query();

        // Apply filtering here

        return $query->paginate(self::PAGE_LEN);
    }

    public function render()
    {
        return view('livewire.car.car-browse', [
            'cars' => $this->getCars(),
        ]);
    }
}
