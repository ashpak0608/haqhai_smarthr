<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>{{ $title ?? 'HAQHAI Admin' }}</title>
    @include('layout.partials.head')
</head>

@php
    // Check if we are on the root, login, or registration pages
    $isAuthPage = Request::is('/') || Request::is('login*') || Request::is('register*') || Request::is('forgot-password*');
@endphp

<body class="{{ $isAuthPage ? 'bg-white' : '' }}">

    <div class="main-wrapper">

        {{-- Only show Header and Sidebar if it is NOT an authentication page --}}
        @if (!$isAuthPage)
            @include('layout.partials.header')
            @include('layout.partials.sidebar')
        @endif

        @yield('content')

    </div>

    @include('layout.partials.footer-scripts')

    {{-- CRITICAL: This is required to load the scripts from your add.blade.php file --}}
    @yield('scripts')

</body>
</html>