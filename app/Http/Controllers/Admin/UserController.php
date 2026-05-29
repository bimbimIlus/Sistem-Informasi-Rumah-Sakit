<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::query()

            ->when($request->search, function ($query) use ($request) {

                $query->where(function ($q) use ($request) {

                    $q->where('name', 'like', '%' . $request->search . '%')
                        ->orWhere('email', 'like', '%' . $request->search . '%');

                });

            })

            ->when($request->role, function ($query) use ($request) {

                $query->where('role', $request->role);

            })

            ->latest()
            ->paginate(5)
            ->withQueryString();

        return Inertia::render('Admin/Users/Index', [

            'users' => $users,

            'filters' => [
                'search' => $request->search,
                'role' => $request->role,
            ],

        ]);
    }

    public function create()
    {
        return Inertia::render('Admin/Users/Create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([

            'name' => 'required|string|max:255',

            'email' => 'required|email|unique:users,email',

            'password' => 'required|min:6',

            'role' => 'required|in:admin,dokter,staff,apoteker,kasir',

        ]);

        User::create([

            'name' => $validated['name'],

            'email' => $validated['email'],

            'password' => Hash::make($validated['password']),

            'role' => $validated['role'],

        ]);

        return redirect()
            ->route('admin.users.index')
            ->with('success', 'User berhasil ditambahkan');
    }

    public function edit(User $user)
    {
        return Inertia::render('Admin/Users/Edit', [
            'user' => $user
        ]);
    }

    public function update(Request $request, User $user)
    {
        $validated = $request->validate([

            'name' => 'required|string|max:255',

            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($user->id),
            ],

            'role' => 'required|in:admin,dokter,staff,apoteker,kasir',

            'password' => 'nullable|min:6',

        ]);

        $data = [

            'name' => $validated['name'],

            'email' => $validated['email'],

            'role' => $validated['role'],

        ];

        // jika password diisi
        if ($request->filled('password')) {

            $data['password'] = Hash::make($validated['password']);

        }

        $user->update($data);

        return redirect()
            ->route('admin.users.index')
            ->with('success', 'User berhasil diupdate');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()
            ->back()
            ->with('success', 'User berhasil dihapus');
    }
}