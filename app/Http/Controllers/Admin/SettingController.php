<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSettingRequest;
use App\Http\Requests\UpdateSettingRequest;
use App\Models\Setting;
use App\Services\ImageUploadService;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting = Setting::first();
        return view('admin.setting.index', compact('setting'));
    }

    public function edit(Setting $setting)
    {
        return view('admin.setting.edit', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSettingRequest $request, Setting $setting, ImageUploadService $imageService)
    {
        $data = $request->validated();
        if ($request->hasFile('logo')) {
            $data['logo'] = $imageService->upload($request->file('logo'), 'settings/logo');
        }
        if ($request->hasFile('icon')) {
            $data['icon'] = $imageService->upload($request->file('icon'), 'settings/icon');
        }
        $setting->update($data);
        return redirect()->route('admin.setting.index')->with('success', 'تنظیمات با موفقیت به روز شد');
    }
}
