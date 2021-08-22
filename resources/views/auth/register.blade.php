@extends('layout.app') @section('content')
<form action="{{ route('register') }}" method="post">
    @csrf
    <div class="container py-4 w-75 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card" style="border-radius: 1rem;">
                    <div class="card-body p-5">
                        <div class="mb-5 text-center">
                            <a href=""><img class="img-circle mb-3" alt="PUP LOGO" width="75" height="auto" src="https://cdn.pup.edu.ph/img/symbols/logo88x88.png" /></a>
                            <h4 class="box-title text-center"><strong>PUP-SIS</strong> Student Module</h4>
                            <section id="introduction">
                                <p>Sign up to start your session</p>
                            </section>
                        </div>

                        {{-- Username --}}
                        <div class="form-outline mb-4">
                            <input type="text" name="username" id="username" class="form-control form-control-sm @error('username') border border-danger @enderror" placeholder="Student Number" value="{{ old('username') }}" />
                        </div>

                        <div class="row">
                            {{-- First Name --}}
                            <div class="form-outline mb-4 col">
                                <input type="text" name="first_name" id="first_name" class="form-control form-control-sm @error('first_name') border border-danger @enderror" placeholder="First Name" value="{{ old('first_name') }}" />
                            </div>
                            {{-- Last Name --}}
                            <div class="form-outline mb-4 col">
                                <input type="text" name="last_name" id="last_name" class="form-control form-control-sm @error('last_name') border border-danger @enderror" placeholder="Last Name" value="{{ old('last_name') }}" />
                            </div>
                        </div>

                        {{-- Email --}}
                        <div class="form-outline mb-4">
                            <input type="email" name="email" id="email" class="form-control form-control-sm @error('email') border border-danger @enderror" placeholder="Email" value="{{ old('email') }}" />
                        </div>

                        {{-- Password --}}
                        <div class="form-outline mb-4">
                            <input type="password" name="password" id="password" class="form-control form-control-sm @error('password') border border-danger @enderror" placeholder="Password" />
                        </div>

                        {{-- Password Confirmation --}}
                        <div class="form-outline mb-4">
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control form-control-sm" placeholder="Retype Password" />
                        </div>

                        {{-- Register Button --}}
                        <button class="btn btn-primary btn-md btn-block" type="submit" style="width: 100%;">Register</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
