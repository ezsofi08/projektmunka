
@extends('layouts.layout')

@section('content')
<div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Regisztráció</p>

                    <form method="post" class="mx-1 mx-md-4" action="{{ route('register') }}">
                    @csrf
                    <div class="row mb-3">
                            <label for="firstname" class="form-label">Vezetéknév</label>

                            <div class="col-md-9">
                                <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>
                                
                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="secondname" class="form-label">Keresztnév</label>

                            <div class="col-md-9">
                                <input id="secondname" type="text" class="form-control @error('secondname') is-invalid @enderror" name="secondname" value="{{ old('secondname') }}" required autocomplete="secondname" autofocus>
                                
                                @error('secondname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="birthday" class="form-label ">Születési dátum</label>

                            <div class="col-md-9">
                                <input id="birthday" type="birthday" class="form-control @error('birthday') is-invalid @enderror" name="birthday" value="{{ old('birthday') }}" required autocomplete="birthday">

                                @error('birthday')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="form-label ">Email cím</label>

                            <div class="col-md-9">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="TAJ" class="form-label">TAJ-szám</label>

                            <div class="col-md-9">
                                <input id="TAJ" type="text" class="form-control @error('TAJ') is-invalid @enderror" name="TAJ" value="{{ old('TAJ') }}" required autocomplete="TAJ" autofocus>
                                
                                @error('TAJ')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phone_number" class="form-label">Telefonszám</label>

                            <div class="col-md-9">
                                <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>
                                
                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label for="password" class="form-label">Jelszó</label>

                            <div class="col-md-9">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="form-label">Jelszó ismétlés</label>

                            <div class="col-md-9">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>







                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                        <button type="submit" class="btn btn-primary">Regisztráció</button>
                    </div>

                    </form>

                </div>

</div>
                @endsection
