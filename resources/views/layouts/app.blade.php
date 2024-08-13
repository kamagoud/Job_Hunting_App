<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none">
@props(['pageTitle' => '', 'active' => ''])
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Smarthr - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="Dreamstechnologies - Bootstrap Admin Template">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('/assets/img/favicon.png') }}">
    @include('layouts.partials.head')

</head>
<body>
<!-- Main Wrapper -->
<div class="main-wrapper">
    @include('layouts.partials.header')
    @include('layouts.partials.nav')

    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">{{ $pageTitle }}</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active">{{ $active }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            {{ $slot }}
        </div>
    </div>
</div>


@component('components.theme-setting')
@endcomponent

@include('layouts.partials.footer-scripts')
</body>

</html>
