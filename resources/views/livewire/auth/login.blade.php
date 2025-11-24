@extends('layouts.auth_layout')

@section('title', 'Login')

@section('content')
    {{-- Tampilkan pesan error/sukses dari session, yang dikirim oleh controller --}}
    @if (session('status'))
        <div class="message">
            <span style='color: green;'>{{ session('status') }}</span>
        </div>
    @elseif ($errors->any())
        <div class="message">
            <span style='color: red;'>{{ $errors->first() }}</span>
        </div>
    @endif

    {{-- Navigasi Tab --}}
    <div class="auth-nav">
        {{-- Menggunakan route() helper untuk link --}}
        <a href="{{ route('login') }}" class="active">Login</a>
        <a href="{{ route('register') }}">Register</a>
    </div>
    
    <p class="intro-text">
        Mau Kirim Bunga Cantik? <span style="font-weight: 700;">WHISPERING FLORA</span> solusinya Dirangkai dengan Sentuhan & Bunga Pilihan Terbaik.
    </p>

    {{-- Form Login: Menggunakan route('login') dengan method POST --}}
    <form action="{{ route('login') }}" method="POST">
        @csrf {{-- Wajib ada untuk Laravel Form Security (CSRF Protection) --}}
        
        <div class="input-group">
            <label for="email">Email / User name</label>
            <input type="text" id="email" name="email" value="{{ old('email') }}" placeholder="Enter your User name or Email" required autofocus>
            {{-- Tampilkan error spesifik untuk field ini --}}
            @error('email')
                <span style="color: red; font-size: 12px; margin-top: 5px; display: block;">{{ $message }}</span>
            @enderror
        </div>

        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your Password" required>
            @error('password')
                <span style="color: red; font-size: 12px; margin-top: 5px; display: block;">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-footer">
            <div>
                <input type="checkbox" id="remember_me" name="remember">
                <label for="remember_me">Remember me</label>
            </div>
            <a href="#" class="forgot-password">Forgot Password?</a>
        </div>

        <button type="submit" class="btn btn-submit-main">Login</button>
    </form>
@endsection