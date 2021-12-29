@extends('layouts.main')

@section('title', 'Registracia')

@section('content')

<div class="container login-container ">
    <div class="row justify-content-center">
        <div class="col-md-4 login-form">
            <h3>Login</h3>
            <form>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email:" value="" />
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Heslo:" value="" />
                </div>
                <div class="form-group">
                    <input type="submit" class="btnSubmit" value="Login" />
                </div>
            </form>
        </div>
    </div>
</div>
@endsection