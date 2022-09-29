<x-header />

<body class="hold-transition login-page">
    <div style="margin-top:5%;" class="col-md-4 offset-md-8">

        <!-- /.login-logo -->
        <div style="border:2px solid green;" class="card">
            <div class="card-header bg-blue text-center">
                <h1 class="text-bold text-white"> সততা সঞ্চয় সমিতি। </h1>
            </div>
            <div class="card-body">
                <div class="logo text-center p-2 mb-4">
                    <img class="img-fluid" src="{{asset('images/sss_logo.png')}}" alt="">
                </div>
                <div class="text-cener text-danger">
                    <x-jet-validation-errors />
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" id="email" name="email" :value="old('email')" class="form-control"
                            placeholder="Email" required autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope text-blue"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input id="password" type="password" name="password" class="form-control" placeholder="Password"
                            required autocomplete="current-password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock text-blue"></span>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="btn btn-blue form-control p-2 text-bold text-white">
                            <h5>লগিন করুন</h5>
                        </button>
                    </div>
                </form>
            </div>
            <div style="background-color:#0000ff;" class="card-footer text-center mt-4">
                <p class="mb-0">
                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-white"> পাসওয়ার্ড ভুলে গেছেন ? </a>
                    @endif
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->
    <x-footer />