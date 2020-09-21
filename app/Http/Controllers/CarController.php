<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

/**
 * Class CarController
 * @package App\Http\Controllers
 * @author Andrew <andrew@quasars.com>
 */
class CarController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        return view('admin.car.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Contracts\View\Factory
     */
    public function show(Car $car)
    {
        return view('admin.car.show')->with(compact('car'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory
     */
    public function create()
    {
        return view('admin.car.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        Car::create($request->all());
        return redirect(route('home'))->with("alert", ['type' => 'success', 'msg' => 'Car Created']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Contracts\View\Factory
     */
    public function edit(Car $car)
    {
        return view('admin.car.edit')->with(compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Car $car)
    {
        $car->fill($request->all());
        return redirect(route('home'))->with("alert", ['type' => 'success', 'msg' => 'Car Updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->back()->with("alert", ['type' => 'success', 'msg' => 'Car Deleted']);
    }

    /**
     * Restore the specified soft deleted model.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function restore(int $id)
    {
        Car::withTrashed()->findOrFail($id)->restore();
        return redirect()->back()->with("alert", ['type' => 'success', 'msg' => 'Car Restored']);
    }
}
