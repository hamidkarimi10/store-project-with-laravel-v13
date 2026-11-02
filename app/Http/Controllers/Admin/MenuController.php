<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;
use App\Models\Menu;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Menu::query()
            ->with('parent')
            ->orderBy('sort_order')
            ->orderByDesc('id')
            ->paginate(10);

        return view('admin.menu.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $parentMenus = Menu::query()
            ->orderBy('title')
            ->get();

        return view('admin.menu.create', compact('parentMenus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMenuRequest $request)
    {
        Menu::create($request->validated());

        return redirect()->route('admin.menus.index')->with('success', 'منو با موفقیت ایجاد شد.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        $menu->load('parent', 'children');

        return view('admin.menu.show', compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        $parentMenus = Menu::query()
            ->where('id', '!=', $menu->id)
            ->orderBy('title')
            ->get()
            ->reject(fn (Menu $parentMenu): bool => $parentMenu->isDescendantOf($menu));

        return view('admin.menu.edit', compact('menu', 'parentMenus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMenuRequest $request, Menu $menu)
    {
        $menu->update($request->validated());

        return redirect()->route('admin.menus.index')->with('success', 'منو با موفقیت ویرایش شد.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();

        return redirect()->route('admin.menus.index')->with('success', 'منو با موفقیت حذف شد.');
    }
}
