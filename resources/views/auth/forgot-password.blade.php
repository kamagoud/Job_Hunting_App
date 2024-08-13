

  



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
            <div class="account-content">
                <div class="container">
        
                    <!-- Account Logo -->
                    <div class="account-logo">
                        <a href="{{url('admin-dashboard')}}"><img src="{{ URL::asset('assets/img/logo2.png')}}" alt="Dreamguy's Technologies"></a>
                    </div>
                    <!-- /Account Logo -->
        
                    <div class="account-box">
                        <div class="account-wrapper">
                            <h3 class="account-title">Forgot Password?</h3>
                            <p class="account-subtitle">Enter your email to get a password reset link</p>
                            @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <!-- Account Form -->
                            <x-validation-errors class="mb-4" />
                            <form method="post" action="{{ route('password.email') }}">
                                <div class="input-block mb-4">
                                    <label class="col-form-label">Email Address</label>
                                    <input class="form-control" id="email" name='email' type="email">
                                </div>
                                <div class="input-block mb-4 text-center">
                                    <button class="btn btn-primary account-btn" type="submit">Reset Password</button>
                                </div>
                                <div class="account-footer">
                                    <p>Remember your password? <a href="{{url('/')}}">Login</a></p>
                                </div>
                            </form>
                            <!-- /Account Form -->
        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        
        </body>
        
        </html>
        
        