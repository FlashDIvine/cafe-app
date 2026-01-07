<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->get();
        return view('admin.users.index', compact('users'));
    }

    public function updateRole(Request $request, User $user)
    {
        $request->validate([
            'role' => 'required|in:admin,user',
        ]);

        // Hindari admin mengubah role dirinya sendiri (opsional tapi aman)
        if (auth()->id() === $user->id) {
            return back()->with('error', 'Tidak dapat mengubah role sendiri.');
        }

        $user->update([
            'role' => $request->role,
        ]);

        return back()->with('success', 'Role user berhasil diperbarui.');
    }
}
