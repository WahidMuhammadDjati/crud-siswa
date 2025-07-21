@extends('components.layout')

@section('content')
<div style="max-width: 400px; margin: auto; padding: 2rem;">
    <h2 style="text-align: center; margin-bottom: 1.5rem;">Login</h2>

    @if(session('error'))
        <div style="color: red; margin-bottom: 1rem;">
            {{ session('error') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login.submit') }}">
        @csrf

        <div style="margin-bottom: 1rem;">
            <label>Email</label><br>
            <input type="email" name="email" value="{{ old('email') }}" required style="width: 100%; padding: 0.5rem;">
        </div>

        <div style="margin-bottom: 1.5rem;">
            <label>Password</label><br>
            <input type="password" name="password" required style="width: 100%; padding: 0.5rem;">
        </div>

        <button type="submit" style="width: 100%; padding: 0.5rem;">Login</button>
    </form>
</div>
@endsection
