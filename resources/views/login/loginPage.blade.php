@extends('layouts.main')

@section('title', 'Registracia')

@section('content')

<div class="container login-container ">
    <div class="row justify-content-center">
        <div class="col-md-4 login-form">
            <h3>Prihlásenie</h3>
            <form method="POST" action="/login">
                @csrf

                <div class="form-group">
                    <input type="text" name='email' class="form-control" placeholder="Email:" value="{{ old('email') }}"
                        required />
                </div>

                @error('email')
                <p class="error"> {{ $message }}</p>
                @enderror

                <div class="form-group">
                    <input type="password" name='password' class="form-control" placeholder="Heslo:" value=""
                        required />
                </div>

                @error('password')
                <p class="error"> {{ $message }}</p>
                @enderror

                <div class="form-group">
                    <button type="submit" class="btnSubmit">Prihlásiť sa</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection