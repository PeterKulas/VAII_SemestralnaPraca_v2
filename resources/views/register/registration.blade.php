@extends('layouts.main')

@section('title', 'Registracia')

@section('content')


<x-messages.flash />

<div class="row justify-content-center g-0">
    <div class="col-md-3 g-0">
        <div class="modal-header">
            <h2 class="title">Registrácia</h2>
        </div>
        <div class="modal-body">
            <form action="/register" method="POST">
                @csrf

                <div class="input-group mb-3">
                    <span class="input-group-text icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            <path fill-rule="evenodd"
                                d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                        </svg></span>
                    <input id="inputFirstname" type="text" class="form-control" name="firstname" placeholder="Meno"
                        required value="{{ old('firstname') }}">
                </div>
                <p id="firstnameValidation"></p>

                @error('firstname')
                <p class="error"> {{ $message }}</p>
                @enderror

                <div class="input-group mb-3">
                    <span class="input-group-text icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            <path fill-rule="evenodd"
                                d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                        </svg></span>
                    <input id="inputLastname" type="text" class="form-control" name="lastname" placeholder="Priezvisko"
                        required value="{{ old('lastname') }}">
                </div>
                <p id="lastnameValidation"></p>

                @error('lastname')
                <p class="error"> {{ $message }}</p>
                @enderror

                <div class="input-group mb-3">
                    <span class="input-group-text icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                            <path
                                d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                        </svg></span>
                    <input id="inputPass" type="password" class="form-control password" name="password"
                        placeholder="Heslo" required>
                </div>
                <p id="passValue" class="hidden">Sila hesla: <span id="spanPassValue">Slabe</span> </p>

                @error('password')
                <p class="error"> {{ $message }}</p>
                @enderror

                <div class="input-group mb-3">
                    <span class="input-group-text icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" id="rpicon" class="bi bi-key-fill" viewBox="0 0 16 16">
                            <path
                                d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                        </svg></span>
                    <input id="inputRepass" type="password" class="form-control" name="repassword"
                        placeholder="Zopakuj heslo" required>
                </div>
                <p id="passMsg" class="hidden">Hesla sa nezhoduju!</p>

                @error('repassword')
                <p class="error"> {{ $message }}</p>
                @enderror

                <div class="input-group mb-3">
                    <span class="input-group-text icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                            <path
                                d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                        </svg></span>
                    <input id="inputEmail" type="email" class="form-control" name="email" placeholder="Email" required
                        value="{{ old('email') }}">
                </div>
                <p id="emailMsg"></p>

                @error('email')
                <p class="error"> {{ $message }}</p>
                @enderror

                <div class="d-grid col-12 mx-auto ">
                    <button class="btn icon" type="submit" name="submit"> Registrovať</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection