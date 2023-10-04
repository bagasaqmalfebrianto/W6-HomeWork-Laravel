<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return view('dashboard.index', compact('user'));
    }

    public function edit()
    {
        $user = Auth::user();

        return view('dashboard.index', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user->id),
            ],
            'no_telp' => 'nullable|string|max:20',
        ]);

        DB::table('users')
            ->where('id', $user->id)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                'no_telp' => $request->no_telp,
            ]);

        return redirect()->route('profile.index')->with('success', 'Profile updated successfully.');
    }

    public function destroy()
    {
        $user = Auth::user();

        DB::table('users')->where('id', $user->id)->delete();

        DB::table('users')->where('id', $user->id)->delete();

        return redirect()->route('home')->with('success', 'Account deleted successfully.');
    }

    public function editPassword()
    {
        return view('edit-password');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        $user = Auth::user();

        // Verifikasi password saat ini
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Incorrect current password.']);
        }

        // Ubah password baru
        $newPasswordHashed = Hash::make($request->new_password);
        DB::table('users')
            ->where('id', $user->id)
            ->update(['password' => $newPasswordHashed]);

        return redirect()->route('profile.index')->with('success', 'Password updated successfully.');
    }
}
