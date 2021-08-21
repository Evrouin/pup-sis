@extends('layout.app')
@section('content')
    <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="container py-4 w-75 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <div class="mb-5">
                                <a href=""><img class=" img-circle mb-3" alt="PUP LOGO" width="75" height="auto"
                                        src="https://cdn.pup.edu.ph/img/symbols/logo88x88.png" /></a>
                                <h4 class="box-title text-center"><strong>PUP-SIS</strong> Student Module</h4>
                                <section id="introduction">
                                    <p>Sign in to start your session</p>
                                </section>
                            </div>

                            @if (session('status'))
                                {{ session('status') }}
                            @endif

                            <div class="form-outline mb-4">
                                <input type="text" name="username" id="username"
                                    class="form-control form-control-sm @error('username') border border-danger @enderror"
                                    placeholder="Student Number" value="{{ old('username') }}" />
                            </div>

                            <div class="form-outline mb-4">
                                <input type="email" name="email" id="email"
                                    class="form-control form-control-sm @error('email') border border-danger @enderror"
                                    placeholder="Email" value="{{ old('email') }}" />
                            </div>
                            <div class="form-outline mb-4">
                                <input type="password" name="password" id="password"
                                    class="form-control form-control-sm @error('password') border border-danger @enderror"
                                    placeholder="Password" />
                            </div>
                            <button class="btn btn-primary btn-md btn-block" type="submit"
                                style="width: 100%;">Login</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
