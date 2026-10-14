<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Cytech EC') }}</title>

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased bg-gray-50">
        <div class="min-h-screen flex flex-col justify-between">

    <header class="c-header">
        <div class="c-header__title">
            <a href="{{ route('dashboard') }}">Cytech EC</a>
        </div>

        <nav class="c-header__nav">
            <a href="{{ route('dashboard') }}" class="c-header__link">Home</a>
            <a href="#" class="c-header__link">マイページ</a>

        @auth
        <span class="c-header__user">ログインユーザー: {{ Auth::user()->name }}</span>
        <form method="POST" action="{{ route('logout') }}" class="inline">
        @csrf
        <button type="submit" class="c-header__btn--logout">ログアウト</button>
        </form>
        @endauth
        </nav>
    </header>

    <main class="mb-auto">
            {{ $slot }}
    </main>

    <footer class="c-footer">
        <div>
            <a href="#" class="c-footer__btn--contact">お問い合わせ</a>
        </div>
        <div class="space-x-4 my-2">
            <a href="{{ route('dashboard') }}" class="c-header__link">Home</a>
            <a href="#" class="c-header__link">マイページ</a>
        </div>
        <div class="c-footer__copyright">
            &copy; 2024 Company, Inc
        </div>
    </footer>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
