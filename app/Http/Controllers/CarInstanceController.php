<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarInstance;
use Illuminate\Http\Request;

/**
 * Class CarInstanceController
 * @package App\Http\Controllers
 * @author Andrew <andrew@quasars.com>
 */
class CarInstanceController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Contracts\View\Factory
     */
    public function index(Car $car)
    {
        return view('admin.car.instance.index')->with(compact('car'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @param  \App\Models\CarInstance  $instance
     * @return \Illuminate\Contracts\View\Factory
     */
    public function show(Car $car, CarInstance $instance)
    {
        return view('admin.car.instance.show')->with(compact('car', 'instance'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Contracts\View\Factory
     */
    public function create(Car $car)
    {
        return view('admin.car.instance.create')->with(compact('car'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, Car $car)
    {
        $car->instance()->save(CarInstance::fill($request->all()));
        return redirect(route('home'))->with("alert", ['type' => 'success', 'msg' => 'CarInstance Created']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @param  \App\Models\CarInstance  $instance
     * @return \Illuminate\Contracts\View\Factory
     */
    public function edit(Car $car, CarInstance $instance)
    {
        return view('admin.car.instance.edit')->with(compact('car', 'instance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @param  \App\Models\CarInstance  $instance
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Car $car, CarInstance $instance)
    {
        CarInstance::update($request->all());
        return redirect(route('home'))->with("alert", ['type' => 'success', 'msg' => 'CarInstance Updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @param  \App\Models\CarInstance  $instance
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Car $car, CarInstance $instance)
    {
        //
    }

    /**
     * Restore the specified soft deleted model.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function restore(int $id)
    {
        // CarInstance::withTrashed()->findOrFail($id)->restore();
        // return redirect()->back()->with("alert", ['type' => 'success', 'msg' => 'CarInstance Restored']);
    }
}
