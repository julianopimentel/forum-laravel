<aside class="col-span-1 space-y-6 text-gray-600">

    <div class="p-4 space-y-4 bg-white shadow">
        <div>
            {{-- Start Discusson Button --}}
            <a href="{{ route('threads.create') }}" class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase transition bg-blue-500 border border-transparent rounded hover:bg-blue-400 active:bg-blue-600 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25" }}>
                {{ __('Iniciar um novo tópico') }}
            </a>
        </div>

        @auth
        @if(request()->routeIs('threads.show'))
        <div class="pb-4 space-y-4">

            @can(App\Policies\ThreadPolicy::UNSUBSCRIBE, $thread)
            {{-- Unubscribe to thread button --}}
            <x-links.main href="{{ route('threads.unsubscribe', [$thread->category->slug(), $thread->slug()]) }}">
                {{ __('Deixar de Seguir') }}
            </x-links.main>
            <p class="text-sm text-gray-500 ">
                Deixar de seguir o tópico
            </p>

            @elsecan(App\Policies\ThreadPolicy::SUBSCRIBE, $thread)
            {{-- Subscribe to thread button --}}
            <x-links.main href="{{ route('threads.subscribe', [$thread->category->slug(), $thread->slug()]) }}">
                {{ __('Seguir') }}
            </x-links.main>
            <p class="text-sm text-gray-500 ">
                Seguir este tópico
            </p>
            @endcan

        </div>
        @endif
        @endauth
    </div>

    {{-- Categories --}}
    <div class="p-4 space-y-4 bg-white shadow ">
        <div class="pb-4 mb-4 border-b border-gray-200">
            <h2 class="font-bold uppercase">Categorias</h2>
        </div>

        <ul class="space-y-4">
            @foreach ($categories as $categories)
                <li>
                    <a href="#" class="flex items-center justify-between">
                        {{ $categories->name() }}
                        <span class="px-2 text-white bg-green-300 rounded">{{ $categories->threads->count() }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="p-4 space-y-4 bg-white shadow">
        <ul class="space-y-4 text-gray-500">
            <li>
                <a href="#" class="flex items-center space-x-2">
                    <x-heroicon-s-star class="w-5 h-5 text-yellow-500" />
                    <span>Popular esta semana</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center space-x-2">
                    <x-heroicon-s-fire class="w-5 h-5 text-red-600" />
                    <span>Popular o tempo todo</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center space-x-2">
                    <x-heroicon-s-chat class="w-5 h-5 text-blue-400" />
                    <span>Não respondido</span>
                </a>
            </li>
        </ul>
    </div>


</aside>
