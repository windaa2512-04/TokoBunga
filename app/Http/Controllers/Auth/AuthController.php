<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; // Pastikan model User ada
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    // Tampilkan Form Login (GET /login)
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Tangani Proses Login (POST /login)
    public function login(Request $request)
    {
        // 1. Validasi Input
        $credentials = $request->validate([
            // Laravel secara default menggunakan 'email' sebagai field login
            'email' => ['required', 'string'], 
            'password' => ['required', 'string'],
        ]);

        // 2. Coba Autentikasi
        // $request->filled('remember') akan mengembalikan true jika checkbox 'remember' dicentang
        if (Auth::attempt($credentials, $request->filled('remember'))) {
            // Jika berhasil:
            $request->session()->regenerate();
            // Redirect ke dashboard (ganti dengan route yang Anda inginkan)
            return redirect()->intended('/dashboard'); 
        }

        // Jika Gagal:
        throw ValidationException::withMessages([
            'email' => ['Kredensial yang diberikan tidak cocok dengan catatan kami.'],
        ]);
    }

    // Tampilkan Form Register (GET /register)
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Tangani Proses Register (POST /register)
    public function register(Request $request)
    {
        // 1. Validasi Input
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'], // Email harus unik
            // 'confirmed' mewajibkan adanya field password_confirmation
            'password' => ['required', 'string', 'min:8', 'confirmed'], 
        ]);

        // 2. Buat User Baru dan simpan ke database
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Wajib di-hash sebelum disimpan!
        ]);

        // 3. Langsung login user setelah registrasi (Opsional)
        Auth::login($user); 

        // 4. Redirect dengan pesan sukses
        return redirect()->route('dashboard')->with('status', 'Registrasi Berhasil! Selamat datang di Whispering Flora.');
    }
    
    // Proses Logout (POST /logout)
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('status', 'Anda telah berhasil logout.');
    }
}