<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel')  }} - Tudo sobre Departamento Pessoal</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <meta name="description"
        content="Tudo sobre Departamento Pessoal" />
    <link rel="canonical" href="https://dpconectado.com.br" />

    <link rel="preload" as="style" href="{{ asset('css/custom.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />

    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicons/favicon-16x16.png">
    <link rel="mask-icon" href="/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#ffffff">

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100&display=swap" rel="stylesheet">



<link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
<script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

</head>

<body class="home font-sans bg-white antialiased" :class="{ 'overflow-hidden': lockScroll }" x-data="{ lockScroll: false, activeModal: false }"
    @keyup.escape="activeModal = false">

    <nav class="">
        <div class="container mx-auto text-gray-800 lg:block lg:py-8" x-data="navConfig()"
            @click.outside="nav = false">
            <div class="block bg-white 2xl:-mx-10">
                <div class="lg:px-4 lg:flex">
                    <div class="block lg:flex lg:items-center lg:shrink-0">
                        <div class="flex justify-between items-center p-4 lg:p-0">
                            <a href="/" class="mr-4">
                                <img loading="lazy" class="h-6 w-auto lg:h-8"
                                    src="https://laravel.io/images/laravelio-logo.svg" width="330" height="78"
                                    alt="Laravel.io" />
                            </a>

                            <div class="flex lg:hidden">
                                <button @click="showSearch($event)">
                                    <svg class="w-6 h-6 mr-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                    </svg> </button>

                                <button @click="nav = !nav">
                                    <svg x-show="!nav" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3.75 6.75h16.5M3.75 12H12m-8.25 5.25h16.5" />
                                    </svg> </button>

                                <button @click="nav = !nav" x-cloak>
                                    <svg x-show="nav" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg> </button>
                            </div>
                        </div>

                        <div class="mt-2 border-b lg:block lg:mt-0 lg:border-0" x-cloak
                            :class="{ 'block': nav, 'hidden': !nav }">
                            <ul class="flex flex-col px-4 mb-2 gap-y-2 lg:flex-row lg:mb-0 lg:gap-6">
                                <li class="rounded lg:mb-0 lg:hover:bg-gray-100 ">
                                    <a href="/forum" class="inline-block w-full px-2 py-1">
                                        Fórum
                                    </a>
                                </li>

                                <li class="rounded lg:mb-0 lg:hover:bg-gray-100 ">
                                    <a href="/blog" class="inline-block w-full px-2 py-1">
                                        Blog
                                    </a>
                                </li>

                                <li class="rounded lg:mb-0 lg:hover:bg-gray-100">
                                    <a href="https://www.youtube.com/@DPConectado"
                                        class="inline-block w-full px-2 py-1">
                                        Videos
                                    </a>
                                </li>
 
                            </ul>
                        </div>
                    </div>
                    <div class="w-full block gap-x-4 lg:flex lg:items-center lg:justify-end">
                        <div class="flex items-center">
                
                            @auth
                          
                             <!-- Settings Dropdown -->
                    <div class="relative ml-3">
                        <x-jet-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm transition border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300">
                                    <img class="object-cover w-8 h-8 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                                @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition bg-white border border-transparent rounded-md hover:text-gray-700 focus:outline-none">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                                @endif
                            </x-slot>

                            <x-slot name="content">
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Manage Account') }}
                                </div>

                                <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                    {{ __('Profile') }}
                                </x-jet-dropdown-link>

                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-jet-dropdown-link>
                                @endif

                                <div class="border-t border-gray-100"></div>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-jet-dropdown-link>
                                </form>
                            </x-slot>
                        </x-jet-dropdown>
                    </div>

        
            @else

                <!-- Login -->


                <!-- Registration -->
                        <ul class="block lg:flex lg:items-center gap-x-8" x-cloak
                            :class="{ 'block': nav, 'hidden': !nav }">
                            <li class="w-full rounded text-center lg:hover:bg-gray-100">
                                <x-jet-responsive-nav-link class="inline-block w-full  p-2.5" href="{{ route('register') }}" :active="request()->routeIs('register')">
                                    {{ __('Register') }}
                                </x-jet-responsive-nav-link>
                            </li>

                            <li>
                                <div class="hidden lg:block">
                                    <span class="inline-flex rounded shadow flex items-center">
                                        <a href="/login"
                                            class="w-full bg-white border border-gray-200 rounded py-2 px-4 inline-flex justify-center text-lg leading-6 text-gray-900 hover:bg-gray-100">
                                            <span class="flex items-center">
                                                <svg class="w-5 h-5 mr-1" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                                </svg> Login
                                            </span>
                                        </a>
                                    </span>
                                </div>

                                <x-jet-responsive-nav-link class="block w-full text-center bg-lio-500 text-white p-2.5 lg:hidden" href="{{ route('login') }}" :active="request()->routeIs('login')">
                                    {{ __('Login') }}
                                </x-jet-responsive-nav-link>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @endauth
    </nav>


    {{-- Slot --}}
    <div class="mb-8 font-sans antialiased text-gray-900">
        {{ $slot }}
    </div>



    <div class="bg-gray-900 text-white mt-14 lg:mt-40">
        <div class="container mx-auto pt-7 pb-8 lg:pt-20 lg:px-16">
            <div class="mx-4 md:mx-0">
                <div class="flex flex-col pb-8 mb-8 border-b lg:pb-16 border-gray-800 lg:flex-row">
                    <div class="w-full mb-6 lg:w-2/5 lg:pr-20 lg:mb-0">
                        <img loading="lazy" src="https://laravel.io/images/laravelio-logo-white.svg"
                            alt="Laravel.io" class="block mb-5" />

                        <p class="text-gray-100 lg:leading-loose">
                            Texto com descrição do site
                        </p>
                    </div>

                    <div class="lg:w-full lg:flex lg:justify-between">
                        <div class="grow mb-6 lg:mb-0">
                            <p class="text-lg mb-4 lg:mb-6">
                                DPConectado
                            </p>

                            <div class="flex flex-wrap lg:flex-col lg:flex-no-wrap">
                                <a href="/forum"
                                    class="w-1/2 text-gray-400 mb-4 hover:text-gray-200 lg:mb-6">
                                    Fórum
                                </a>

                                <a href="/blog"
                                    class="w-1/2 text-gray-400 mb-4 hover:text-gray-200 lg:mb-6">
                                    Blog
                                </a>

                                <a href=""
                                    class="w-1/2 text-gray-400 mb-4 hover:text-gray-200 lg:mb-6">
                                    Videos
                                </a>
                            </div>
                        </div>

                        <div class="grow mb-6 lg:mb-0">
                            <p class="text-lg mb-4 lg:mb-6">
                                Socials
                            </p>

                            <div class="flex flex-wrap lg:flex-col lg:flex-no-wrap">
                                <a href=""
                                    class="w-1/2 text-gray-400 mb-4 hover:text-gray-200 lg:mb-6">
                                    <svg class="text-white w-4 h-4 inline mr-3.5" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <path
                                            d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z" />
                                    </svg> Twitter
                                </a>

                                <a href=""
                                    class="w-1/2 text-gray-400 mb-4 hover:text-gray-200 lg:mb-6">
                                    <svg class="text-white w-4 h-4 inline mr-3.5" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <path
                                            d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                                    </svg> GitHub
                                </a>
                            </div>
                        </div>

                        <div class="grow">
                           
                          
                        </div>
                    </div>
                </div>

                <div class="text-gray-100 flex flex-col lg:flex-row">
                    <span class="mb-5 lg:mb-0 lg:mr-5">
                        &copy; 2023 dpconectado.com.br - All rights reserved.
                    </span>

                    <div class="flex flex-wrap lg:block">
                        <a href="https://laravel.io/terms"
                            class="w-1/2 mb-4 hover:text-gray-200 lg:w-full lg:mb-0 lg:mr-8">
                            Terms of service
                        </a>
                        <a href="https://laravel.io/privacy"
                            class="w-1/2 mb-4 hover:text-gray-200 lg:w-full lg:mb-0 lg:mr-8">
                            Privacy policy
                        </a>
                        <a href="https://github.com/sponsors/laravelio"
                            class="w-1/2 hover:text-gray-200 lg:w-full lg:mb-0">
                            Advertise
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>





</body>
    <!-- Fathom - beautiful, simple website analytics -->
    <script src="https://boom.laravel.io/script.js" site="UXCUXOED" defer data-canonical="false"></script>
    <!-- / Fathom -->

    <style >[wire\:loading], [wire\:loading\.delay], [wire\:loading\.inline-block], [wire\:loading\.inline], [wire\:loading\.block], [wire\:loading\.flex], [wire\:loading\.table], [wire\:loading\.grid], [wire\:loading\.inline-flex] {display: none;}[wire\:loading\.delay\.shortest], [wire\:loading\.delay\.shorter], [wire\:loading\.delay\.short], [wire\:loading\.delay\.long], [wire\:loading\.delay\.longer], [wire\:loading\.delay\.longest] {display:none;}[wire\:offline] {display: none;}[wire\:dirty]:not(textarea):not(input):not(select) {display: none;}input:-webkit-autofill, select:-webkit-autofill, textarea:-webkit-autofill {animation-duration: 50000s;animation-name: livewireautofill;}@keyframes livewireautofill { from {} }</style>

</html>
