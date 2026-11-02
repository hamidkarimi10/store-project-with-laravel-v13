<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::query()
            ->withCount('addresses')
            ->orderBy('id', 'desc')
            ->paginate(10);

        return view('admin.user.index', compact('users'));
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $user->load('addresses');

        return view('admin.user.show', compact('user'));
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'mobile' => 'required|string|max:11|min:11|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
        $user = User::create($request->all());
        return redirect()->route('admin.users.index')->with('success', 'کاربر با موفقیت ایجاد شد');
    }
}
