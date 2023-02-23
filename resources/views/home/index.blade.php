<x-site-layout>

    <!-- Head section -->
    <section class="overflow-x-hidden mt-6 lg:mt-20">
        <div class="container mx-auto lg:px-16">
            <div class="flex flex-col items-center px-4 lg:flex-row lg:px-0">
                <div class="w-full mb-8 lg:w-1/2 lg:mb-0 lg:mr-16">
                    <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-6xl">
                        Portal DPConectado
                    </h1>

                    <div class="mb-5">
                        <p class="text-gray-800 text-lg leading-8 font-medium">
                            Tudo sobre Departamento Pessoal.
                            Junte-se aos  <span class="text-lio-500 font-bold relative inline-block stroke-current">
                                51,360
                                <svg class="absolute bottom-0 w-full max-h-1.5" viewBox="0 0 55 5"
                                    xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                                    <path d="M0.652466 4.00002C15.8925 2.66668 48.0351 0.400018 54.6853 2.00002"
                                        stroke-width="2" />
                                </svg></span> de pessoas a nossa comunidade.
                        </p>
                    </div>

                    <div>
                        <span class="inline-flex rounded shadow-sm w-full mb-3 lg:w-auto lg:mr-2">
                            <a href="/register"
                                class="w-full bg-lio-500 border border-transparent rounded py-2 px-4 inline-flex justify-center text-lg leading-6 text-white hover:bg-lio-600">
                                Entrar
                            </a>
                        </span>
                        <span class="inline-flex rounded shadow w-full lg:w-auto">
                            <a href="/forum"
                                class="w-full bg-white border border-gray-200 rounded py-2 px-4 inline-flex justify-center text-lg leading-6 text-gray-900 hover:bg-gray-100">
                                Visitar o Fórum
                            </a>
                        </span>
                    </div>
                </div>

                <div class="lg:w-1/2">
                    <div class="flex flex-col w-full" x-data="{ active: false }">
                        <div class="flex" style="margin-left: 134px;">
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '5830'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>pauly4it</span>

                                        <span class="text-gray-500">Active since: June 2014</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/pauly4it">

                                    <img src="https://unavatar.io/github/pauly4it?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 5830" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '2482'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                3
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                3
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                15
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>2u3</span>

                                        <span class="text-gray-500">Active since: March 2014</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/2u3">

                                    <img src="https://unavatar.io/github/2u3?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 2482" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '25373'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>martynass</span>

                                        <span class="text-gray-500">Active since: January 2016</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/martynass">

                                    <img src="https://unavatar.io/github/martynasS?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 25373" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '489'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                4
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>ludjer</span>

                                        <span class="text-gray-500">Active since: February 2014</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/ludjer">

                                    <img src="https://unavatar.io/github/ludjer?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 489" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '1555'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                3
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>nicopenaredondo</span>

                                        <span class="text-gray-500">Active since: February 2014</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/nicopenaredondo">

                                    <img src="https://unavatar.io/github/nicopenaredondo?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 1555" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '33851'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>redferret</span>

                                        <span class="text-gray-500">Active since: January 2017</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/redferret">

                                    <img src="https://unavatar.io/github/redferret?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 33851" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '11405'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                7
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>apache123</span>

                                        <span class="text-gray-500">Active since: November 2014</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/apache123">

                                    <img src="https://unavatar.io/github/apache123?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 11405" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '10917'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>jromero82</span>

                                        <span class="text-gray-500">Active since: October 2014</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/jromero82">

                                    <img src="https://unavatar.io/github/jromero82?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 10917" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '30102'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                7
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                6
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>asimkh</span>

                                        <span class="text-gray-500">Active since: July 2016</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/asimkh">

                                    <img src="https://unavatar.io/github/asimkh?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 30102" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '38993'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>m3arafa</span>

                                        <span class="text-gray-500">Active since: April 2018</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/m3arafa">

                                    <img src="https://unavatar.io/github/m3arafa?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 38993" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '14362'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>rmiller335</span>

                                        <span class="text-gray-500">Active since: January 2015</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/rmiller335">

                                    <img src="https://unavatar.io/github/rmiller335?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 14362" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '39073'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                2
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>fazreenarahman</span>

                                        <span class="text-gray-500">Active since: April 2018</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/fazreenarahman">

                                    <img src="https://unavatar.io/github/fazreenarahman?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 39073" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '8965'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                3
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>jeroen-g</span>

                                        <span class="text-gray-500">Active since: September 2014</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/jeroen-g">

                                    <img src="https://unavatar.io/github/Jeroen-G?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 8965" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '2693'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>keyboslice</span>

                                        <span class="text-gray-500">Active since: March 2014</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/keyboslice">

                                    <img src="https://unavatar.io/github/keyboSlice?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 2693" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '45611'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>grgsamrita</span>

                                        <span class="text-gray-500">Active since: September 2020</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/grgsamrita">

                                    <img src="https://unavatar.io/github/grgsamrita?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 45611" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '3231'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                2
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                3
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>0xmatt</span>

                                        <span class="text-gray-500">Active since: March 2014</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/0xmatt">

                                    <img src="https://unavatar.io/github/0xMatt?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 3231" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '47218'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>abolfazl-dalily</span>

                                        <span class="text-gray-500">Active since: May 2021</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/abolfazl-dalily">

                                    <img src="https://unavatar.io/github/Abolfazl-Dalily?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 47218" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '23145'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>kajuzi</span>

                                        <span class="text-gray-500">Active since: October 2015</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/kajuzi">

                                    <img src="https://unavatar.io/github/Kajuzi?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 23145" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '33547'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                3
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                6
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>wittner</span>

                                        <span class="text-gray-500">Active since: January 2017</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/wittner">

                                    <img src="https://unavatar.io/github/Wittner?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 33547" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '5691'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                2
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>mloureiro</span>

                                        <span class="text-gray-500">Active since: June 2014</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/mloureiro">

                                    <img src="https://unavatar.io/github/MLoureiro?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 5691" x-on:mouseout="active = false" />

                                </a>
                            </div>
                        </div>

                        <div class="flex" style="margin-left: 71px;">
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '16967'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>frf</span>

                                        <span class="text-gray-500">Active since: March 2015</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/frf">

                                    <img src="https://unavatar.io/github/frf?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 16967" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '36922'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>raul.biancardi</span>

                                        <span class="text-gray-500">Active since: September 2017</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/raul.biancardi">

                                    <img src="https://unavatar.io/github/rbiancardi?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 36922" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '36160'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                2
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>frixk</span>

                                        <span class="text-gray-500">Active since: July 2017</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/frixk">

                                    <img loading="lazy" src="https://laravel.io/images/laravelio-icon-gray.svg"
                                        alt="Jake Quims"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 36160" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '23120'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>aaronblink</span>

                                        <span class="text-gray-500">Active since: October 2015</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/aaronblink">

                                    <img src="https://unavatar.io/github/aaronblink?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 23120" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '40569'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>basszillazavr</span>

                                        <span class="text-gray-500">Active since: October 2018</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/basszillazavr">

                                    <img src="https://unavatar.io/github/Basszillazavr?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 40569" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '9369'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>ideadx</span>

                                        <span class="text-gray-500">Active since: September 2014</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/ideadx">

                                    <img src="https://unavatar.io/github/ideadx?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 9369" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '24803'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>jovette</span>

                                        <span class="text-gray-500">Active since: December 2015</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/jovette">

                                    <img src="https://unavatar.io/github/jovette?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 24803" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '50002'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>moosesaeed</span>

                                        <span class="text-gray-500">Active since: July 2022</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/moosesaeed">

                                    <img src="https://unavatar.io/github/MooseSaeed?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 50002" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '7766'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>jwatkins0101</span>

                                        <span class="text-gray-500">Active since: August 2014</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/jwatkins0101">

                                    <img src="https://unavatar.io/github/jwatkins0101?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 7766" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '13809'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                3
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                2
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>olimorris</span>

                                        <span class="text-gray-500">Active since: December 2014</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/olimorris">

                                    <img src="https://unavatar.io/github/olimorris?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 13809" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '31268'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>jaylancaster</span>

                                        <span class="text-gray-500">Active since: September 2016</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/jaylancaster">

                                    <img src="https://unavatar.io/github/JayLancaster?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 31268" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '12334'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                2
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                4
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                4
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>php-it</span>

                                        <span class="text-gray-500">Active since: November 2014</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/php-it">

                                    <img src="https://unavatar.io/github/php-it?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 12334" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '6924'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                2
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>crag</span>

                                        <span class="text-gray-500">Active since: July 2014</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/crag">

                                    <img src="https://unavatar.io/github/crag?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 6924" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '15610'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>oldrpan</span>

                                        <span class="text-gray-500">Active since: February 2015</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/oldrpan">

                                    <img src="https://unavatar.io/github/oldrpan?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 15610" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '41003'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>oen44</span>

                                        <span class="text-gray-500">Active since: December 2018</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/oen44">

                                    <img src="https://unavatar.io/github/Oen44?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 41003" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '20925'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                4
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>rowright</span>

                                        <span class="text-gray-500">Active since: July 2015</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/rowright">

                                    <img src="https://unavatar.io/github/rowright?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 20925" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '16568'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>mattusik</span>

                                        <span class="text-gray-500">Active since: March 2015</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/mattusik">

                                    <img src="https://unavatar.io/github/mattusik?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 16568" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '17433'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>thekami</span>

                                        <span class="text-gray-500">Active since: April 2015</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/thekami">

                                    <img src="https://unavatar.io/github/Thekami?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 17433" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '1026'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                2
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>fazamaula</span>

                                        <span class="text-gray-500">Active since: February 2014</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/fazamaula">

                                    <img src="https://unavatar.io/github/FazaMaula?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 1026" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '4609'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>six0h</span>

                                        <span class="text-gray-500">Active since: May 2014</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/six0h">

                                    <img src="https://unavatar.io/github/six0h?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 4609" x-on:mouseout="active = false" />

                                </a>
                            </div>
                        </div>

                        <div class="flex">
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '6305'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                2
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>gt324</span>

                                        <span class="text-gray-500">Active since: June 2014</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/gt324">

                                    <img src="https://unavatar.io/github/gt324?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 6305" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '7910'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                2
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>csmatyi</span>

                                        <span class="text-gray-500">Active since: August 2014</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/csmatyi">

                                    <img src="https://unavatar.io/github/csmatyi?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 7910" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '33323'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>drivetechusa</span>

                                        <span class="text-gray-500">Active since: December 2016</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/drivetechusa">

                                    <img src="https://unavatar.io/github/drivetechusa?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 33323" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '10319'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                2
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>alangvara</span>

                                        <span class="text-gray-500">Active since: October 2014</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/alangvara">

                                    <img src="https://unavatar.io/github/alangvara?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 10319" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '32675'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>spyrosjevan</span>

                                        <span class="text-gray-500">Active since: November 2016</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/spyrosjevan">

                                    <img src="https://unavatar.io/github/spyrosjevan?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 32675" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '46321'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                7
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>theraloss</span>

                                        <span class="text-gray-500">Active since: January 2021</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/theraloss">

                                    <img src="https://unavatar.io/github/danilopolani?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 46321" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '699'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                3
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                2
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                30
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>cgoosey1</span>

                                        <span class="text-gray-500">Active since: February 2014</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/cgoosey1">

                                    <img src="https://unavatar.io/github/cgoosey1?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 699" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '32178'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>holetz</span>

                                        <span class="text-gray-500">Active since: October 2016</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/holetz">

                                    <img src="https://unavatar.io/github/holetz?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 32178" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '35599'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                8
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>cao812</span>

                                        <span class="text-gray-500">Active since: June 2017</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/cao812">

                                    <img loading="lazy" src="https://laravel.io/images/laravelio-icon-gray.svg"
                                        alt="Josh Wilson"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 35599" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '27883'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>willyanto15</span>

                                        <span class="text-gray-500">Active since: April 2016</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/willyanto15">

                                    <img src="https://unavatar.io/github/Willyanto15?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 27883" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '4679'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                6
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>samchivers</span>

                                        <span class="text-gray-500">Active since: May 2014</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/samchivers">

                                    <img src="https://unavatar.io/github/samchivers?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 4679" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '36277'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>mrnewbig</span>

                                        <span class="text-gray-500">Active since: July 2017</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/mrnewbig">

                                    <img loading="lazy" src="https://laravel.io/images/laravelio-icon-gray.svg"
                                        alt="mrnewbig"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 36277" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '17964'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                3
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                6
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>domcsore</span>

                                        <span class="text-gray-500">Active since: April 2015</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/domcsore">

                                    <img src="https://unavatar.io/github/Domcsore?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 17964" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '12302'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>tobiasartz</span>

                                        <span class="text-gray-500">Active since: November 2014</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/tobiasartz">

                                    <img src="https://unavatar.io/github/Tobiasartz?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 12302" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '11675'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                4
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                2
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>joshuaziering</span>

                                        <span class="text-gray-500">Active since: November 2014</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/joshuaziering">

                                    <img src="https://unavatar.io/github/joshuaziering?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 11675" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '24852'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>cyrrill</span>

                                        <span class="text-gray-500">Active since: December 2015</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/cyrrill">

                                    <img src="https://unavatar.io/github/cyrrill?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 24852" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '34584'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>rbrisita</span>

                                        <span class="text-gray-500">Active since: April 2017</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/rbrisita">

                                    <img src="https://unavatar.io/github/rbrisita?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 34584" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '5693'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                4
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>rajivseelam</span>

                                        <span class="text-gray-500">Active since: June 2014</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/rajivseelam">

                                    <img src="https://unavatar.io/github/rajivseelam?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 5693" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '3738'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>drmonkeyninja</span>

                                        <span class="text-gray-500">Active since: April 2014</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/drmonkeyninja">

                                    <img src="https://unavatar.io/github/drmonkeyninja?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 3738" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '27179'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>l4mnath</span>

                                        <span class="text-gray-500">Active since: March 2016</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/l4mnath">

                                    <img src="https://unavatar.io/github/l4mnath?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 27179" x-on:mouseout="active = false" />

                                </a>
                            </div>
                        </div>

                        <div class="flex" style="margin-left: 71px;">
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '11000'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>lhkingkong</span>

                                        <span class="text-gray-500">Active since: October 2014</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/lhkingkong">

                                    <img src="https://unavatar.io/github/lhkingkong?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 11000" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '913'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>dennisoderwald</span>

                                        <span class="text-gray-500">Active since: February 2014</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/dennisoderwald">

                                    <img src="https://unavatar.io/github/dennisoderwald?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 913" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '99'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>alaaattya</span>

                                        <span class="text-gray-500">Active since: December 2013</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/alaaattya">

                                    <img src="https://unavatar.io/github/AlaaAttya?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 99" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '4636'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                2
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                2
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>auzette</span>

                                        <span class="text-gray-500">Active since: May 2014</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/auzette">

                                    <img src="https://unavatar.io/github/Auzette?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 4636" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '1318'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                3
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>lauhakari</span>

                                        <span class="text-gray-500">Active since: February 2014</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/lauhakari">

                                    <img src="https://unavatar.io/github/lauhakari?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 1318" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '13648'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                7
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>nicolasbeauvais</span>

                                        <span class="text-gray-500">Active since: December 2014</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/nicolasbeauvais">

                                    <img src="https://unavatar.io/github/nicolasbeauvais?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 13648" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '3922'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                6
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>sattalk</span>

                                        <span class="text-gray-500">Active since: April 2014</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/sattalk">

                                    <img src="https://unavatar.io/github/sattalk?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 3922" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '47958'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                2
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                3
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>stickman_123</span>

                                        <span class="text-gray-500">Active since: September 2021</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/stickman_123">

                                    <img src="https://unavatar.io/github/jeyfred434?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 47958" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '319'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                34
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>juukie</span>

                                        <span class="text-gray-500">Active since: January 2014</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/juukie">

                                    <img src="https://unavatar.io/github/juukie?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 319" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '1205'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                2
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>crimsoncyclone</span>

                                        <span class="text-gray-500">Active since: February 2014</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/crimsoncyclone">

                                    <img src="https://unavatar.io/github/CrimsonCyclone?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 1205" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '46447'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>wellingtonostemberg</span>

                                        <span class="text-gray-500">Active since: February 2021</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/wellingtonostemberg">

                                    <img src="https://unavatar.io/github/WellingtonOstemberg?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 46447" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '46119'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>joedohn</span>

                                        <span class="text-gray-500">Active since: December 2020</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/joedohn">

                                    <img src="https://unavatar.io/github/DmitrijusKazakovas?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 46119" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '4731'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>collb</span>

                                        <span class="text-gray-500">Active since: May 2014</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/collb">

                                    <img src="https://unavatar.io/github/collb?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 4731" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '12954'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                9
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>juancho48</span>

                                        <span class="text-gray-500">Active since: December 2014</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/juancho48">

                                    <img src="https://unavatar.io/github/juancho48?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 12954" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '28207'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>maitandat1507</span>

                                        <span class="text-gray-500">Active since: May 2016</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/maitandat1507">

                                    <img src="https://unavatar.io/github/maitandat1507?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 28207" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '3870'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>humbertomn</span>

                                        <span class="text-gray-500">Active since: April 2014</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/humbertomn">

                                    <img src="https://unavatar.io/github/humbertomn?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 3870" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '49545'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>athar-jamil-raihan</span>

                                        <span class="text-gray-500">Active since: May 2022</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/athar-jamil-raihan">

                                    <img src="https://unavatar.io/github/Athar-Jamil-Raihan?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 49545" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '7375'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>bichinl</span>

                                        <span class="text-gray-500">Active since: July 2014</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/bichinl">

                                    <img src="https://unavatar.io/github/bichinl?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 7375" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '24619'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>soulshockers</span>

                                        <span class="text-gray-500">Active since: December 2015</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/soulshockers">

                                    <img src="https://unavatar.io/github/soulshockers?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 24619" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '20647'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                2
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>furkankapti</span>

                                        <span class="text-gray-500">Active since: July 2015</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/furkankapti">

                                    <img src="https://unavatar.io/github/FurkanKapti?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 20647" x-on:mouseout="active = false" />

                                </a>
                            </div>
                        </div>

                        <div class="flex" style="margin-left: 134px;">
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '46858'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>builtbykimster</span>

                                        <span class="text-gray-500">Active since: April 2021</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/builtbykimster">

                                    <img src="https://unavatar.io/github/BuiltByKimster?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 46858" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '13673'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>aledmb</span>

                                        <span class="text-gray-500">Active since: December 2014</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/aledmb">

                                    <img src="https://unavatar.io/github/aledmb?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 13673" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '13336'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>ckahle33</span>

                                        <span class="text-gray-500">Active since: December 2014</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/ckahle33">

                                    <img src="https://unavatar.io/github/ckahle33?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 13336" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '32030'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                2
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>jiggo</span>

                                        <span class="text-gray-500">Active since: October 2016</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/jiggo">

                                    <img src="https://unavatar.io/github/jiggo?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 32030" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '14240'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>chuntheqhai</span>

                                        <span class="text-gray-500">Active since: January 2015</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/chuntheqhai">

                                    <img src="https://unavatar.io/github/ChuntheQhai?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 14240" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '21520'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                2
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>andreiconstantinesu</span>

                                        <span class="text-gray-500">Active since: August 2015</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/andreiconstantinesu">

                                    <img src="https://unavatar.io/github/AndreiConstantinesu?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 21520" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '3064'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>niwt</span>

                                        <span class="text-gray-500">Active since: March 2014</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/niwt">

                                    <img src="https://unavatar.io/github/niwt?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 3064" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '385'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                2
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>fitztrev</span>

                                        <span class="text-gray-500">Active since: January 2014</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/fitztrev">

                                    <img src="https://unavatar.io/github/fitztrev?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 385" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '32110'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>kurbar</span>

                                        <span class="text-gray-500">Active since: October 2016</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/kurbar">

                                    <img src="https://unavatar.io/github/kurbar?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 32110" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '12373'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                2
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>scifo</span>

                                        <span class="text-gray-500">Active since: November 2014</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/scifo">

                                    <img src="https://unavatar.io/github/scifo?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 12373" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '20293'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>l8zysnorpy</span>

                                        <span class="text-gray-500">Active since: June 2015</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/l8zysnorpy">

                                    <img src="https://unavatar.io/github/l8zysnorpy?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 20293" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '30304'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                2
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>samantaba</span>

                                        <span class="text-gray-500">Active since: July 2016</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/samantaba">

                                    <img src="https://unavatar.io/github/samantaba?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 30304" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '2388'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                4
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                2
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>chriship</span>

                                        <span class="text-gray-500">Active since: March 2014</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/chriship">

                                    <img src="https://unavatar.io/github/chriship?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 2388" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '38778'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>cheslynfielding</span>

                                        <span class="text-gray-500">Active since: March 2018</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/cheslynfielding">

                                    <img src="https://unavatar.io/github/CheslynFielding?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 38778" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '40089'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>investmentnovel</span>

                                        <span class="text-gray-500">Active since: August 2018</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/investmentnovel">

                                    <img src="https://unavatar.io/github/InvestmentNovel?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 40089" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '29642'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>roladn</span>

                                        <span class="text-gray-500">Active since: July 2016</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/roladn">

                                    <img src="https://unavatar.io/github/roladn?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 29642" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '23124'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>piotrsa</span>

                                        <span class="text-gray-500">Active since: October 2015</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/piotrsa">

                                    <img src="https://unavatar.io/github/PiotrSa?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 23124" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '47793'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                3
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>nicolaschi</span>

                                        <span class="text-gray-500">Active since: August 2021</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/nicolaschi">

                                    <img src="https://unavatar.io/github/nicolaschi?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 47793" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '8619'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                26
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                6
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>notflip</span>

                                        <span class="text-gray-500">Active since: September 2014</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/notflip">

                                    <img src="https://unavatar.io/github/notflip?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 8619" x-on:mouseout="active = false" />

                                </a>
                            </div>
                            <div class="shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                                <div class="member w-64 shadow-xl rounded w-64 absolute -mt-40 -ml-20"
                                    x-cloak="x-cloak" x-show="active == '3775'">
                                    <div class="flex justify-between border-b p-3 bg-white rounded-t">
                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Solutions</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                1
                                            </span>

                                            <span class="text-sm">Threads</span>
                                        </div>

                                        <div class="flex flex-col items-center text-lio-500 text-center">
                                            <span
                                                class="flex min-w-8 h-8 px-2 bg-lio-100 font-bold rounded items-center justify-center mb-1.5">
                                                0
                                            </span>

                                            <span class="text-sm">Replies</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col bg-gray-100 p-3 text-sm rounded-b">
                                        <span>nsnihalsahu</span>

                                        <span class="text-gray-500">Active since: April 2014</span>
                                    </div>
                                </div>
                                <a href="https://laravel.io/user/nsnihalsahu">

                                    <img src="https://unavatar.io/github/nsnihalsahu?fallback=https%3A%2F%2Flaravel.io%2Fimages%2Flaravelio-icon-gray.svg"
                                        class="bg-gray-50 rounded-full inset-0 w-14 h-14 md:w-20 md:h-20"
                                        x-on:mouseover="active = 3775" x-on:mouseout="active = false" />

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Head section -->



    <!-- Popular articles -->
    <section class="mt-12 container mx-auto px-4 lg:mt-24 lg:px-16">
        <div class="flex flex-col items-center mb-8 lg:flex-row lg:mb-16">
            <h2 class="w-full text-3xl font-bold text-gray-900 mb-2 lg:text-4xl lg:w-1/2 lg:mb-0">
                Últimos artigos
            </h2>
            <p class="w-full text-gray-800 text-lg lg:w-1/2">
                Dê uma olhada nos últimos artigos compartilhados pelos membros da nossa comunidade
            </p>
        </div>


        <div class="flex flex-col gap-y-8 lg:flex-row lg:gap-x-8 lg:mb-16">
            
            @foreach ($newblog as $newblog)
            <div class="w-full lg:w-1/3">
                <div class="h-full flex flex-1 flex-col grow place-content-between">
                    <div class="break-words">
                        <a href="{{ route('blog.show', [$newblog->category->slug(), $newblog->slug()]) }}">
                            <div class="w-full h-72 mb-6 rounded-lg bg-center bg-cover bg-gray-800"
                                style="background-image: url(https://source.unsplash.com/Ae7pSsfzEHs/400x300);"></div>
                        </a>

                        <span class="font-mono text-gray-700 leading-6 mb-2 block">
                            {{ $newblog->created_at->diffForHumans() }}
                        </span>

                        <h3 class="text-gray-900 text-3xl font-bold leading-10 mb-2">
                            <a href="{{ route('blog.show', [$newblog->category->slug(), $newblog->slug()]) }}"
                                class="hover:underline">
                                {{ $newblog->title() }}
                            </a>
                        </h3>

                        <p class="text-gray-800 leading-7 mb-3">
                            {{ $newblog->excerpt() }}
                        </p>
                    </div>

                    <a class="flex items-center text-base text-gray-300 items-end py-2"
                        href="{{ route('blog.show', [$newblog->category->slug(), $newblog->slug()]) }}">
                        <span class="text-gray-700 mr-1 hover:text-gray-500">Continuar lendo</span>
                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.97 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06l6.22-6.22H3a.75.75 0 010-1.5h16.19l-6.22-6.22a.75.75 0 010-1.06z"
                                clip-rule="evenodd" />
                        </svg> </a>
                </div>
            </div>

            @endforeach

        </div>

        <div class="flex justify-center">
            <span class="inline-flex rounded shadow-sm w-full lg:w-auto">
                <a href="blog/"
                    class="w-full bg-lio-500 border border-transparent rounded py-2 px-4 inline-flex justify-center text-lg leading-6 text-white hover:bg-lio-600">
                    Ver todos os artigos
                </a>
            </span>
        </div>
    </section>
    <!-- /Popular articles -->

    <!-- Search -->
    <section class="mt-12 lg:mt-24">
        <div class="bg-lio-500 text-white -skew-y-1">
            <div class="container mx-auto skew-y-1">
                <div class="flex flex-col items-center py-10 text-center lg:py-20">
                    <div class="w-full px-4 lg:w-1/2 lg:px-0">
                        <div class="mb-8">
                            <h2 class="text-3xl lg:text-4xl font-bold mb-3">
                                Procurando uma solução?
                            </h2>
                            <p class="text-lg lg:text-xl opacity-80">
                                Pesquise no fórum a resposta à sua pergunta
                            </p>
                        </div>

                        <div class="mb-10">
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-900" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                    </svg>
                                </div>

                                <form action="/forum" method="GET">
                                    <input type="search" name="search" placeholder="Busque por um assunto"
                                        class="p-4 pl-10 text-gray-600 rounded w-full border-gray-100" />
                                </form>
                            </div>
                        </div>

                        <div class="text-lg">
                            <p>
                                Não consegue encontrar o que procura?<br class="sm:hidden">
                                <a href="/forum/create" class="border-b border-white pb-1">
                                    Criar um novo tópico.
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Search -->

    <!-- Help others -->
    <section class="mt-12 container mx-auto lg:mt-24 lg:px-16">
        <div class="px-4 lg:px-0">
            <div class="flex flex-col lg:flex-row items-center mb-4 lg:mb-12">
                <h2 class="w-full text-3xl font-bold text-gray-900 lg:w-1/2 lg:text-4xl">
                    Ou você pode ajudar os outros
                </h2>
                <p class="w-full text-gray-800 text-lg lg:w-1/2"> 
Ao se juntar à nossa plataforma, você pode dar uma olhada nos últimos tópicos não resolvidos
                </p>
            </div>
                     
         
            <div class="flex gap-4 mb-4 -mx-4 p-4 overflow-x-auto lg:mb-10 lg:gap-8">
                @foreach ($newtopico as $newtopico)
                <div class="shrink-0 w-11/12 lg:w-1/3 lg:shrink">
                    <div class="h-full rounded shadow-lg p-5">
                        <div class="h-full flex flex-col place-content-between">
                            <div class="break-words">
                                <div class="flex items-center justify-between mb-2.5">
                                    <div class="flex items-center">
                                        <a href="/profile/user/{{$newtopico->author()->username}}">

                                            <img src="{{$newtopico->author()->profile_photo_url}}"
                                                class="bg-gray-50 rounded-full w-8 h-8 rounded-full mr-2" />
                        
                                        </a>
                                        <a href="/profile/user/{{$newtopico->author()->username}}">
                                            <span class="font-heading text-sm text-black">{{$newtopico->author()->name}}</span>
                                        </a>
                                    </div>
                                    <div>
                                        <span class="text-sm text-gray-600">
                                            {{ $newtopico->created_at->diffForHumans() }}
                                        </span>
                                    </div>
                                </div>

                                <h3 class="text-gray-900 text-2xl mb-2 leading-8">
                                    <a href="{{ route('threads.show', [$newtopico->category->slug(), $newtopico->slug()]) }}">
                                        {{$newtopico->title()}}
                                    </a>
                                </h3>

                                <p class="text-gray-800 text-base leading-7 mb-3">
                                    {!! $newtopico->excerpt() !!}
                                </p>
                            </div>

                            <a class="flex items-center text-base text-gray-300 items-end"
                                href="{{ route('threads.show', [$newtopico->category->slug(), $newtopico->slug()]) }}">
                                <span class="text-gray-700 mr-1 hover:text-gray-500">Responder  </span>
                                <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M12.97 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06l6.22-6.22H3a.75.75 0 010-1.5h16.19l-6.22-6.22a.75.75 0 010-1.06z"
                                        clip-rule="evenodd" />
                                </svg> </a>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>

            <div class="flex justify-center">
                <span class="inline-flex rounded shadow-sm w-full lg:w-auto">
                    <a href="/forum"
                        class="w-full bg-lio-500 border border-transparent rounded py-2 px-4 inline-flex justify-center text-lg leading-6 text-white hover:bg-lio-600">
                        Ver todos os tópicos
                    </a>
                </span>
            </div>
        </div>
    </section>
    <!-- /Help others -->

    <!-- Laravel.io in numbers -->
    <section class="mt-12 container mx-auto px-4 lg:mt-40 lg:px-16">
        <h2 class="text-4xl leading-tight font-bold text-center text-gray-900 mb-6 lg:mb-12">
            DPConectado em números
        </h2>

        <div class="flex flex-col lg:mb-10 lg:flex-row lg:gap-x-8">
            <div class="w-full">
                <div class="flex flex-col items-center rounded bg-lio-100 py-9 mb-4 md:mb-0">
                    <h3 class="uppercase text-lio-500 text-lg font-bold text-center mb-11">
                        Pessoas
                        <span class="text-4xl text-gray-900 block leading-tight">{{ $users }}</span>
                    </h3>
                    <div class="number-block w-full h-44 bg-contain"
                        style="background-image: url('https://laravel.io/images/users.png');">
                    </div>
                </div>
            </div>

            <div class="w-full">
                <div class="flex flex-col items-center rounded bg-lio-100 py-9 mb-4 md:mb-0">
                    <h3 class="uppercase text-lio-500 text-lg font-bold text-center mb-11">
                        Tópicos
                        <span class="text-4xl text-gray-900 block leading-tight">{{ $topics }}</span>
                    </h3>
                    <div class="number-block w-full h-44 bg-contain"
                        style="background-image: url('https://laravel.io/images/threads.png');">
                    </div>
                </div>
            </div>

            <div class="w-full">
                <div class="flex flex-col items-center rounded bg-lio-100 py-9 mb-4 md:mb-0">
                    <h3 class="uppercase text-lio-500 text-lg font-bold text-center mb-11">
                        Respostas
                        <span class="text-4xl text-gray-900 block leading-tight">{{ $replies }}</span>
                    </h3>
                    <div class="number-block w-full h-44 bg-contain"
                        style="background-image: url('https://laravel.io/images/replies.png');">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Laravel.io in numbers -->
</x-site-layout>