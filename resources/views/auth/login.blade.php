@extends('layout.app')
@section('content')
    <section class="w-75 m-auto mt-4">
        <form action="{{ route('login') }}" method="POST" class="d-flex justify-content-center align-items-center w-100 h-100 py-2">
            @csrf
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="pt-3 text-center">
                    <div class="mb-4 d-flex justify-content-center align-items-center">
                        <a href=""><img class=" img-circle mb-3" alt="PUP LOGO" width="70" height="auto"
                                src="_img/pup_logo.png" /></a>
                        <div>
                            <h4 class="box-title text-center mx-3"><strong>PUP-SIS</strong> Student Module</h4>
                            <section id="introduction">
                                <p>Sign in to start your session</p>
                            </section>
                        </div>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-warning" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="form-outline mb-4">
                        <input 
                            type="text" 
                            id="username" 
                            name="username"
                            class="form-control form-control-md 
                            @error('username') border border-danger @enderror"
                            placeholder="Student Number" />
                    </div>

                    <div class="form-outline mb-4">
                        <input 
                            type="email" 
                            id="email" 
                            name="email"
                            class="form-control form-control-md 
                            @error('email') border border-danger @enderror"
                            placeholder="Email" />
                    </div>
                    <div class="form-outline mb-4">
                        <input 
                            type="password" 
                            id="password" 
                            name="password"
                            class="form-control form-control-md 
                            @error('password') border border-danger @enderror"
                            placeholder="Password" />
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-4 form-control-md">
                        <div class="form-check">
                            <input 
                                class="form-check-input" 
                                type="checkbox" 
                                name="remember" 
                                id="remember" />
                            <label class="form-check-label" for="remember" style="font-size: 0.9rem;">Remember me</label>
                        </div>
                        <a href="#!" style="text-decoration: none; font-size: 0.9rem;">Forgot password?</a>
                    </div>
                    <button class="btn btn-primary btn-md btn-block" type="submit" style="width: 100%;">Login</button>
                </div>
            </div>
        </form>
    </section>
@endsection
