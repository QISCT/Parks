<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\CarType;
use App\Models\Drivetrain;
use App\Models\Engine;
use App\Models\Fuel;
use App\Models\Lot;
use App\Models\Oem;
use App\Models\Mfg;
use App\Models\Transmission;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
include dirname(__DIR__).'/dumps/oems.php';
include dirname(__DIR__).'/dumps/mfgs.php';
include dirname(__DIR__).'/dumps/cars.php';

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Oem::truncate();
        Oem::insert(getOems());

        Mfg::truncate();
        $mfgs = Mfg::insert(getMfgs());

        CarType::truncate();
        CarType::insert([
            ['name' => 'Hearse'],
            ['name' => 'Limousine'],
            ['name' => 'Flower Car'],
            ['name' => 'Van'],
            ['name' => 'Sedan'],
            ['name' => 'SUV'],
            ['name' => 'Truck'],
        ]);

        Lot::truncate();
        Lot::insert([
            ['name' => 'RR'],
            ['name' => 'PL'],
            ['name' => 'JO'],
            ['name' => 'LO'],
            ['name' => 'MA'],
            ['name' => 'BG'],
            ['name' => 'FS'],
            ['name' => 'MU'],
        ]);

        Fuel::truncate();
        Fuel::insert([
            ['name' => 'Gasoline'],
            ['name' => 'Diesel'],
            ['name' => 'Electric'],
        ]);

        Engine::truncate();
        Engine::insert([
            ['name' => 'Northstar V-8'],
            ['name' => '4.6 Liter V8'],
            ['name' => '3.7 Liter V6'],
            ['name' => '5.7 Liter V8'],
            ['name' => '3.6 Liter V6'],
            ['name' => '3.8 Liter V6'],
            ['name' => '6.7 Liter V8'],
            ['name' => '3.5 Liter V6'],
            ['name' => '4.3 Liter V8'],
            ['name' => '5.4 Liter V8'],
            ['name' => '3.0 Liter V6'],
            ['name' => '5.0 Liter V8'],
            ['name' => '6.2 Liter V8'],
            ['name' => '6.5 Liter V8'],
            ['name' => '2.5 Liter'],
            ['name' => '5.3 Liter V8'],
            ['name' => '3.3 Liter V6'],
            ['name' => '2.0 Liter 4 Cylinder Turbo'],
        ]);

        Drivetrain::truncate();
        Drivetrain::insert([
            ['name' => 'All Wheel Drive'],
            ['name' => 'Front Wheel Drive'],
            ['name' => 'Rear Wheel Drive'],
            ['name' => '4 Wheel Drive'],
        ]);

        Transmission::truncate();
        Transmission::insert([
            ['name' => 'Automatic'],
            ['name' => 'Standard'],
        ]);

        $normalizeCar = function ($car) {
            $instances = explode(';', $car['instances']);
            $car = new Car(collect($car)->except(['id', 'instances'])->toArray());
//            if(collect($car->only('oem_id', 'mfg_id', 'model', 'vin', 'type_id', 'year'))->contains(false))
//                return false;

            if(!$car->mfg_id || !$car->oem_id || !$car->vin || !$car->type_id || !$car->year)
                return false;

            $car->saveOrFail();

            $inst_keys = collect(['received_on', 'sold_on', 'status']);
            foreach($instances as $inst)
                $car->car_instances()->create($inst_keys->combine(explode(',', $inst))->toArray());

            return Car::count() >= 200;
        };

        Car::truncate();
        collect(getCars())->sortByDesc('created_at')->takeUntil($normalizeCar);
        User::truncate();
        User::create(['name' => 'Andrew', 'email' => 'andrew@quasars.com', 'password' => \Illuminate\Support\Facades\Hash::make('password'), 'email_verified_at' => now()]);

        //        $cars = factory(App\Models\Car::class, 48)->create()
//            ->each(function ($car) {
//                $intervals = rand_dates_between((now()->year - $car->year) / 2, Carbon::parse($car->year . '-01-01 00:00:00'), now())->chunk(2);
//                $car->car_instances()->createMany(
//                    $intervals->map( fn($p) => ['received_on' => $p->values()[0], 'sold_on' => $p->values()[1] ?? null] )
//                );
//            });
    }
}

function rand_dates_between(int $count, $start_date, $end_date)
{
    return collect()->pad($count, null)->map(fn() => rand_date_between($start_date, $end_date))->sort()->values();
}

function rand_date_between($start_date, $end_date)
{
    // Convert to timetamps
    $min = strtotime($start_date);
    $max = strtotime($end_date);

    // Generate random number using above bounds
    $val = rand($min, $max);

    // Convert back to desired date format
    return Carbon::parse('@' . $val);
}
