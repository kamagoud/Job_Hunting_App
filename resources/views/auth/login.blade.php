<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Smarthr - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="Dreamstechnologies - Bootstrap Admin Template">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('/assets/img/favicon.png') }}">

    <link rel="stylesheet" href="{{ url('/assets/css/bootstrap.min.css') }}">


    <link rel="stylesheet" href="{{ url('/assets/css/style.css') }}">
</head>

    <body class="account-page">

<!-- Main Wrapper -->
<div class="main-wrapper">

<div class="account-content">
    <div class="container">

        <!-- Account Logo -->
        <div class="account-logo">
            <a href="{{ route('dashboard') }}"><img src="{{ URL::asset('assets/img/logo2.png')}}" alt="Dreamguy's Technologies"></a>
        </div>
        <!-- /Account Logo -->

        <div class="account-box">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="account-wrapper">
                <h3 class="account-title">Login</h3>
                <p class="account-subtitle">Access to our dashboard</p>

                <!-- Account Form -->
                <form action="{{route('login')}}" method="POST">
                    @csrf
                    <div class="input-block mb-4">
                        <label class="col-form-label">Email or Username</label>
                        <input class="form-control" type="text" value="a@b.c" name="email" id="email">
                    </div>
                    <div class="input-block mb-4">
                        <div class="row align-items-center">
                            <div class="col">
                                <label class="col-form-label">Password</label>
                            </div>
                            <div class="col-auto">
                                <a class="text-muted" href="{{ route('password.request') }}">
                                    Forgot password?
                                </a>
                            </div>
                        </div>
                        <div class="position-relative">
                            <input class="form-control" type="password" value='12345678' id="password" name="password">
                            <span class="fa-solid fa-eye-slash" id="toggle-password"></span>
                        </div>
                    </div>
                    <div class="input-block mb-4 text-center">
                        <button class="btn btn-primary account-btn" type="submit">Login</button>
                    </div>
                </form>
                <!-- /Account Form -->

            </div>
        </div>
    </div>
</div>
</div>

</body>

</html>

