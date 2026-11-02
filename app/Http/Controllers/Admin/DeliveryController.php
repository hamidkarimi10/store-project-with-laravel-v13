<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreDeliveryRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateDeliveryRequest;
use App\Models\Delivery;

class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $deliveries = Delivery::all();
        return view('admin.deliveries.index', compact('deliveries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.deliveries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDeliveryRequest $request)
    {
        Delivery::create($request->validated());
        return redirect()->route('admin.deliveries.index')->with('success', 'روش ارسال با موفقیت ایجاد شد.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Delivery $delivery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Delivery $delivery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDeliveryRequest $request, Delivery $delivery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Delivery $delivery)
    {
        //
    }
}
