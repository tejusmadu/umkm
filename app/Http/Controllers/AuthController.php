<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function riwayat()
    {
        $users = User::all();
        return view('riwayat', compact('users'));
    }

    public function login(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('name', 'password');

        if (Auth::guard('user')->attempt($credentials)) {
            return redirect('/dashboard');
        } else {
            return redirect()
                ->back()
                ->withInput($request->only('name'))
                ->with('error', 'Username atau password anda salah.');
        }
    }

    public function showRegistrationForm()
    {
        return view('registrasi');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        return redirect('/login')->with('success', 'Registrasi berhasil. Silakan login.');
    }

    public function logout(Request $request)
    {
        Auth::guard('user')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function show(User $user)
    {
        return view('show', compact('user'));
    }

    public function edit_login($id)
    {
        $user = User::findOrFail($id);
        return view('edit_login', compact('user'));
    }

    public function update_(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:6|confirmed',
        ]);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? bcrypt($request->password) : $user->password,
        ]);
        return redirect()->route('riwayat')->with('success', 'Data Admin Berhasil di update.');
    }

    public function destroyn($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('riwayat')->with('success', 'Data Admin berhasil dihapus.');
    }
}
