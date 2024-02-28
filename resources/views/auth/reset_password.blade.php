<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light"
    data-menu-styles="dark" data-toggled="close">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> GLOBAL HR </title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/images/brand-logos/tka.jpg') }}" type="image/x-icon">


    <!-- Authentication-main Js -->
    <script src="{{ asset('assets/js/authentication-main.js') }}"></script>

    <!-- Bootstrap Css -->
    <link id="style" href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Style Css -->
    <link href="{{ asset('assets/css/styles.min.css') }}" rel="stylesheet">

    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">
</head>

<body class="error-1">

    <div class="page main-signin-wrapper">

        <!-- Start::row-1 -->
        <div class="row signpages text-center">
            <div class="col-md-12">
                <div class="card mb-0">
                    <div class="row row-sm">
                        <div class="col-lg-6 col-xl-5 d-none d-lg-block text-center bg-primary details">
                            <div class="mt-5 pt-4 p-2 position-absolute">
                                <img src="{{ asset('assets/images/brand-logos/TKA.jpg') }}" class="ht-100 mb-3"
                                    alt="user">

                                <h5 class="mt-4 ">Welcome to Global HR Portal</h5>
                                <span class="text-white-6 fs-13 mb-5 mt-xl-0 mt-4">Set your password to access and start
                                    creating, discovering, and connecting with the global community.

                                </span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form ">
                            <div class="main-container container-fluid">
                                <div class="row row-sm">
                                    <div class="card-body mt-2 mb-2">
                                        <div class="clearfix"></div>
                                        <form method="POST" action="{{ route('reset.password', $token) }}">
                                            @csrf
                                            <div class="form-group text-start">
                                                <label for="old_password" class="form-label fs-14 text-dark">Old
                                                    Password<span class="text-danger">*</span></label>
                                                <input class="form-control @error('old_password') is-invalid @enderror"
                                                    type="password" value="{{ old('old_password') }}"
                                                    name="old_password">
                                                @error('old_password')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group text-start">
                                                <label for="password" class="form-label fs-14 text-dark">New
                                                    Password<span class="text-danger">*</span></label>
                                                <input class="form-control @error('password') is-invalid @enderror"
                                                    type="password" value="{{ old('password') }}" name="password">
                                                @error('password')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group text-start">
                                                <label for="password_confirmation"
                                                    class="form-label fs-14 text-dark">Confirm Password
                                                    <span class="text-danger">*</span></label>
                                                <input
                                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                                    type="password" value="{{ old('password_confirmation') }}"
                                                    name="password_confirmation">
                                                @error('password_confirmation')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            {{-- <div class="mb-3">
                                                <label for="old_password" class="form-label fs-14 text-dark">Old
                                                    Password<span class="text-danger">*</span></label>
                                                <input id="old_password" name="old_password" type="password"
                                                    class="form-control @error('old_password') is-invalid @enderror"
                                                    name="old_password">
                                                @error('old_password')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div> --}}
                                            {{-- <div class="mb-3">
                                                <label for="password" class="form-label fs-14 text-dark">New
                                                    Password<span class="text-danger">*</span></label>
                                                <input id="password" name="password" type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password">
                                                @error('password')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="password_confirmation"
                                                    class="form-label fs-14 text-dark">Confirm Password<span
                                                        class="text-danger">*</span></label>
                                                <input type="password"
                                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                                    id="password_confirmation" name="password_confirmation">
                                                @error('password_confirmation')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div> --}}
                                            <button class="btn btn-primary" type="submit">Reset Password</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End::row-1 -->

    </div>
    <!-- Custom-Switcher JS -->
    <script src="{{ asset('assets/js/custom-switcher.min.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


</body>

</html>
