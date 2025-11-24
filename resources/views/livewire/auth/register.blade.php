@extends('layouts.auth_layout')

@section('title', 'Register')

@section('content')
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
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}" class="active">Register</a>
    </div>
    
    <p class="intro-text">
        Daftarkan diri Anda untuk melihat katalog lengkap, menyimpan keranjang, dan mendapatkan penawaran spesial.
    </p>

    {{-- Form Register: Menggunakan route('register') dengan method POST --}}
    <form action="{{ route('register') }}" method="POST">
        @csrf 

        <div class="input-group">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Enter your Full Name" required autofocus>
            @error('name')
                <span style="color: red; font-size: 12px; margin-top: 5px; display: block;">{{ $message }}</span>
            @enderror
        </div>
        
        <div class="input-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Enter your Email Address" required>
            @error('email')
                <span style="color: red; font-size: 12px; margin-top: 5px; display: block;">{{ $message }}</span>
            @enderror
        </div>

        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Create a new Password" required>
            @error('password')
                <span style="color: red; font-size: 12px; margin-top: 5px; display: block;">{{ $message }}</span>
            @enderror
        </div>

        <div class="input-group">
            <label for="password_confirmation">Confirm Password</label>
            {{-- Nama field wajib 'password_confirmation' agar validasi 'confirmed' bekerja --}}
            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm your Password" required>
        </div>

        <button type="submit" class="btn btn-submit-main">Register</button>
    </form>
@endsection