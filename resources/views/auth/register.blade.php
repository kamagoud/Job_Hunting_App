


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
            <x-validation-errors class="mb-4" />
        
            <form method="POST" action="{{ route('register') }}">
                @csrf
        
                <div>
                    <label for="name" value="{{ __('Name') }}" />
                    <input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>
        
                <div class="mt-4">
                    <label for="email" value="{{ __('Email') }}" />
                    <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                </div>
        
                <div class="mt-4">
                    <label for="password" value="{{ __('Password') }}" />
                    <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                </div>
        
                <div class="mt-4">
                    <label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>
        
                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <label for="terms">
                            <div class="flex items-center">
                                <input type='checkbox' name="terms" id="terms" required />
        
                                <div class="ms-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </label>
                    </div>
                @endif
        
                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
        
                    <button class="ms-4">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
    </div>
</div>
</div>

</body>

</html>

