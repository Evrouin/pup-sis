@extends('layout.app') 
@section('content')
    <section class="m-auto w-75 mt-4">
        <form action="{{ route('register') }}" method="POST" class="d-flex justify-content-center align-items-center h-100 py-2">
            @csrf
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="pt-3 text-center">
                    <div class="mb-4 d-flex justify-content-center align-items-center">
                        <a href=""><img class="img-circle mb-3" alt="PUP LOGO" width="70" height="auto"
                                src="_img/pup_logo.png" /></a>
                        <div>
                            <h4 class="box-title text-center mx-3"><strong>PUP-SIS</strong> Student Module</h4>
                            <section id="introduction">
                                <p>Sign in to start your session</p>
                            </section>
                        </div>
                    </div>
                    <div class="form-outline mb-4">
                        <input 
                            type="text" 
                            name="username" 
                            id="username" 
                            class="form-control form-control-sm
                            @error('username') border border-danger @enderror"
                            placeholder="Student Number" 
                            value="{{ old('username') }}"/>
                    </div>

                    <div class="row">
                        <div class="form-outline mb-4 col">
                            <input 
                                type="text" 
                                name="first_name" 
                                id="first_name" 
                                class="form-control form-control-sm
                                @error('first_name') border border-danger @enderror"
                                placeholder="First Name" 
                                value="{{ old('first_name') }}"/>
                        </div>
                        <div class="form-outline mb-4 col">
                            <input 
                                type="text" 
                                name="last_name" 
                                id="last_name" 
                                class="form-control form-control-sm
                                @error('last_name') border border-danger @enderror"
                                placeholder="Last Name" 
                                value="{{ old('last_name') }}"/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-outline mb-4 col-8">
                            <input 
                                type="email" 
                                name="email" 
                                id="email" 
                                class="form-control form-control-sm
                                @error('email') border border-danger @enderror"
                                placeholder="Email" 
                                value="{{ old('email') }}"/>
                        </div>
                        <div class="form-outline mb-4 col-4">
                            <select 
                                name="section" 
                                id="section" 
                                class="form-select form-select-sm
                                @error('section') border border-danger @enderror">
                                    <option value="" disabled selected>Section</option>
                                    <option value="BSCS 3-1">BSCS 3-1</option>
                                    <option value="BSCS 3-2">BSCS 3-2</option>
                                    <option value="BSCS 3-3">BSCS 3-3</option>
                                    <option value="BSCS 3-4">BSCS 3-4</option>
                                    <option value="BSCS 3-1N">BSCS 3-1N</option>
                                    <option value="BSCS 3-P">BSCS 3-P</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-outline mb-4">
                        <input 
                            type="password" 
                            name="password" 
                            id="password" 
                            class="form-control form-control-sm 
                            @error('password') border border-danger @enderror"
                            placeholder="Password" />
                    </div>
                    <div class="form-outline mb-4">
                        <input 
                            type="password" 
                            name="password_confirmation" 
                            id="password_confirmation"
                            class="form-control form-control-sm" 
                            placeholder="Retype Password" />
                    </div>
                    <button class="btn btn-primary btn-md btn-block" type="submit" style="width: 100%;">Register</button>
                </div>
            </div>
        </form>
    </section>
@endsection
