<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Dashboard Application Login Form</title>

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/dashboard/libraries/fontawesome.css') }}">
    <!-- google fonts -->
    <link rel="stylesheet" href="{{ asset('css/dashboard/libraries/googlefonts.css') }}">        
    <!-- bootstrap 4 stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/dashboard/libraries/bootstrap4.css') }}">
</head>
<body class="bg-gradient-primary">
    <!-- BEGIN:: Dashboard Login Page Content Wrapper -->
        <div class="container">
            <!-- Outer Row -->
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12 col-md-9">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <!-- login text -->
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                        </div>
                                        <!-- error flash message -->
                                        @include('flashmessage.index')
                                        <!-- user information form -->
                                        <form class="user" method="post" action="{{ route('dashboard-login') }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <input type="email" class="form-control form-control-user @error('email') border-danger @enderror" name="email" id="email" aria-describedby="emailHelp"placeholder="Enter Email Address...">
                                                @error('email')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-user @error('password') border-danger @enderror" name="password" id="password" placeholder="Password">
                                                @error('password')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox small">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck">
                                                    <label class="custom-control-label" for="customCheck">Remember Me</label>
                                                </div>
                                            </div>
                                            <input type="submit" class="btn btn-primary btn-user btn-block" value="Login">
                                        </form>
                                        <hr>
                                        <div class="text-center">
                                            <a class="small" href="{{ route('register') }}">Create an Account!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    <!-- BEGIN:: Dashboard Login Page Content Wrapper -->

    <!-- BEGIN:: custom script -->
        <!-- vendors script -->
        <script src="{{ asset('js/dashboard/vendors/jquery.min.js') }}"></script>
        <script src="{{ asset('js/dashboard/vendors/bootstrap.bundle.js') }}"></script>
        <script src="{{ asset('js/dashboard/vendors/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('js/dashboard/vendors/chart.min.js') }}"></script>
        <script src="{{ asset('js/dashboard/vendors/font-awesome.min.js') }}"></script>
        
        <!-- custom script -->
        <script src="{{ asset('js/dashboard/libraries/bootstrap4.js') }}"></script>
        {{-- <script src="{{ asset('js/dashboard/libraries/chart-area-demo.js') }}"></script>
        <script src="{{ asset('js/dashboard/libraries/chart-pie-demo.js') }}"></script> --}}
                
        <!-- custom script -->
        @yield('custom_script')

    <!-- END::   custom script -->
</body>
</html>